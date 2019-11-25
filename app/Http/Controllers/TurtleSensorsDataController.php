<?php

namespace App\Http\Controllers;

use App\Events\NewTurtleData;
use App\Turtle;
use App\TurtleDataLastEntryId;
use App\TurtleSensorsData;
use Illuminate\Http\Request;

class TurtleSensorsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $channel_id
     * @return void
     */
    public static function index($channel_id)
    {

        $read_api = Turtle::query()
            ->select('read_api_key')
            ->where('turtle_key', '=', $channel_id)
            ->get();;

        $read_api_key = $read_api[0]->read_api_key;

        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.thingspeak.com/channels/' . $channel_id . '/feeds.json?api_key=' . $read_api_key);
        $response = $request->getBody();

        $data = json_decode($response);

        //dd($data->channel->last_entry_id);

        /*  $last_entry_id = TurtleDataLastEntryId::query()
              ->where("turtle_key", "=", $data->channel->id)
              ->get();*/


        $last_entry_id = TurtleSensorsData::query()
            ->select("entry_id")
            ->where("turtle_key", "=", $data->channel->id)
            ->latest()
            ->orderByDesc("id")
            ->limit(1)
            ->get();

        //  dd($last_entry_id);

        //    dd((int)$last_entry_id[0]->entry_id, $data->channel->last_entry_id);

        // db deki son kayit sonrakinin bir fazlisi(index) start kaydi oluyor


        if ($last_entry_id->isNotEmpty()) {

            if ((int)$last_entry_id[0]->entry_id != $data->channel->last_entry_id) {

                $start_entry_id = (int)$last_entry_id[0]->entry_id;
                $api_last_entry_id = (int)$data->channel->last_entry_id;
                $count_new_entry_id = $api_last_entry_id - $start_entry_id;

                //  dd($count_new_entry_id);

                // dd($start_entry_id,$api_last_entry_id,$count_new_entry_id);

                // if there is item in db it should continue
                //dd((int)$last_entry_id[0]->last_entry_id,(int)$data->channel->last_entry_id);
                if ($start_entry_id != $api_last_entry_id) {
                    //dd($start_entry_id,$api_last_entry_id);
                    $channel_id = $data->channel->id;
                    $latitude = $data->channel->latitude;
                    $longitude = $data->channel->longitude;
                    $first_time = 0;


                    TurtleSensorsDataController::store($channel_id, $latitude, $longitude, $data->feeds, $start_entry_id, $count_new_entry_id, $api_last_entry_id, $first_time);

                } else {
                    return response()->json(["nothing" => $count_new_entry_id]);
                }
            } else {
                return response()->json(["there is no new record."]);
            }

        } else {
            // dd("empty");
            // if store first time
            $channel_id = $data->channel->id;
            $latitude = $data->channel->latitude;
            $longitude = $data->channel->longitude;

            $start_entry_id = 0;

            $first_time = 1;
            $count_new_entry_id = (int)$data->channel->last_entry_id;
            $api_last_entry_id = (int)$data->channel->last_entry_id;

            TurtleSensorsDataController::store($channel_id, $latitude, $longitude, $data->feeds, $start_entry_id, $count_new_entry_id, $api_last_entry_id, $first_time);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $channel_id
     * @param $latitude
     * @param $longitude
     * @param $feeds
     * @param $start_entry_id
     * @param $count_new_entry_id
     * @return void
     */
    public static function store($channel_id, $latitude, $longitude, $feeds, $start_entry_id, $count_new_entry_id, $api_last_entry_id, $first_time)
    {

        // dd($channel_id, $latitude, $longitude, $feeds, $start_entry_id, $count_new_entry_id);

        // dd($feeds);


        for ($i = $start_entry_id; $i < ($start_entry_id + $count_new_entry_id); $i++) {

            $turtle_sensors_data = new TurtleSensorsData();
            $turtle_sensors_data->turtle_key = $channel_id;
            $turtle_sensors_data->latitude = $latitude;
            $turtle_sensors_data->longitude = $longitude;
            /*
             * field1 => air_temp
             * field2 => air_humadity
             * field3 => ntu
             * field4 => water_ph
             * field5 => water_temp
             * field6 => water_orp
             * */

            $turtle_sensors_data->ph = (float)$feeds[$i]->field4;
            $turtle_sensors_data->ntu = (float)$feeds[$i]->field3;
            $turtle_sensors_data->water_temp = (float)$feeds[$i]->field5;
            $turtle_sensors_data->water_orp = (float)$feeds[$i]->field6;
            $turtle_sensors_data->air_temp = (float)$feeds[$i]->field1;
            $turtle_sensors_data->air_humadity = (float)$feeds[$i]->field2;

            $turtle_sensors_data->entry_id = $feeds[$i]->entry_id;
            $result = $turtle_sensors_data->save();

            if ($result) {

                $entry_check = TurtleDataLastEntryId::query()
                    ->where('turtle_key', '=', $channel_id)
                    ->orderByDesc('id')
                    ->limit(1)
                    ->get();

                if ($entry_check->isEmpty()) {

                    $last_entry = new TurtleDataLastEntryId();
                    $last_entry->turtle_key = $channel_id;
                    $last_entry->prev_entry_id = $api_last_entry_id;
                    $last_entry->save();

                } else {

                    $entry_check_update = TurtleDataLastEntryId::query()
                        ->where("turtle_key", '=', $channel_id)
                        ->first();
                    $entry_check_update->prev_entry_id = $start_entry_id;
                    //$last_entry_check->last_entry_id = (int)($start_entry_id + $count_new_entry_id);

                    $entry_check_update->update();
                }

            }
        }

    }


    public
    function getTurtleKey(Request $request)
    {
        $turtle_key = Turtle::query()->select('turtle_key', 'read_api_key')->where("turtle_key", "=", $request->turtle_key)->get();
        return response()->json(["turtle_key" => $turtle_key]);
    }

    public
    function getAirTemp(Request $request)
    {
        $air_temp = TurtleSensorsData::query()->select('air_temp')->get();
        return response()->json(["air_temp" => $air_temp]);
    }


}
