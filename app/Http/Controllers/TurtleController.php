<?php

namespace App\Http\Controllers;

use App\Turtle;
use App\TurtleSensorsData;
use App\User;
use App\UserTurtle;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TurtleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->type == "admin") {
            $turtles = Turtle::all();
        } else {
            $user_id = Auth::user()->id;
            $turtle_id = UserTurtle::query()->where('user_id', '=', $user_id)->get();
            $turtles = Turtle::query()->find($turtle_id);
        }

        if (!$request->ajax()) {

            return view('turtle.index', [
                'turtles_data' => json_encode($turtles),
            ]);
        } else {
            // paginate
            $paging = $request->input('page');
            $limit = $request->input('limit');

            $turtles = $turtles->skip($limit * ($paging - 1))->take($limit)->get();

            return response()->json([
                'turtles_data' => $turtles,
                'count' => count($turtles)
            ], 200);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("turtle.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client();

        $request_guzzle = $client->request('POST', 'https://api.thingspeak.com/channels.json', [
            'form_params' => [
                'api_key' => 'NHIG4TCIPSOKJGV5',
                'name' => $request->turtleName,
            ]
        ]);
        $response = $request_guzzle->getBody();

        $data = json_decode($response);

        if ($data->id != null) {
            $turtle = new Turtle();
            $turtle->name = $data->name;
            $turtle->turtle_key = $data->id;
            $turtle->write_api_key = $data->api_keys[0]->api_key;
            $turtle->read_api_key = $data->api_keys[1]->api_key;
            $result = $turtle->save();

            if ($result) {
                $user_turtle = new UserTurtle();
                $user_turtle->user_id = Auth::user()->id;

                $turtle_query_id = Turtle::query()->select("id")->where("turtle_key", "=", $data->id)->first();
                $user_turtle->turtle_id = $turtle_query_id->id;

                $user_turtle->save();
            }

            return response()->json(["message" => "success"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Turtle $turtle
     * @return \Illuminate\Http\Response
     */
    public function show(Turtle $turtle)
    {
        return view("turtle.show", compact('turtle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Turtle $turtle
     * @return \Illuminate\Http\Response
     */
    public function edit(Turtle $turtle)
    {
        return view("turtle.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Turtle $turtle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turtle $turtle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Turtle $turtle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turtle $turtle)
    {
        //
    }

    public function searchTurtles(Request $request)
    {
        // $lat = $request->lat;
        // $lng = $request->lng;

        // $turtles = Turtle::query()->whereBetween('latitude', [$lat - 0.1, $lat + 0.1])->whereBetween('longitude', [$lng - 0.1, $lng + 0.1])->get();
        $turtles = TurtleSensorsData::all()->unique('turtle_key');
        return $turtles;
    }


    public function detail(Request $request, $turtle_key)
    {

        // turtledatalastentryid den son iki kaydi getirip arasindaki fark kadar
        // en son guncel degeri cekebilecegiz

        $last_entry = TurtleDataLastEntryIdController::lastEntryId($turtle_key);

        if ($last_entry->isEmpty()) {
            return view('turtle-sensors-detail');
        }

        /* $last_entry = TurtleDataLastEntryId::query()
             ->where("turtle_key", "=", $turtle_key)
             ->latest()
             ->limit(2)
             ->get();

         $get_n_times_row = $last_entry[0]->prev_entry_id - $last_entry[1]->prev_entry_id;*/


        //$prev_entry = (int)$last_entry->prev_entry_id;
        //$limit = (int)(($last_entry->last_entry_id) - $prev_entry);

        //$prev_update_time = $last_entry->updated_at;

        /* $turtle_data = DB::table('turtle_sensors_data')
             ->join('turtle_data_last_entry_ids','turtle_data_last_entry_ids.turtle_key','=','turtle_sensors_data.turtle_key')
             ->select('turtle_sensors_data.turtle_key as turtle_key')
             ->select('turtle_sensors_data.id as id','turtle_sensors_data.ph as ph')
             ->select('turtle_sensors_data.water_temp as water_temp','turtle_sensors_data.water_orp as water_orp',
                 'turtle_sensors_data.air_temp as air_temp')
             ->select('turtle_sensors_data.air_humadity as air_humadity',
                 'turtle_sensors_data.latitude as latitude','turtle_sensors_data.longitude as longitude')
             ->select('turtle_data_last_entry_ids.prev_entry_id as prev_entry_id')
             ->get();*/

        //  dd($turtle_data);

        $date = new DateTime;
        $date->modify('-5 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');

        $turtle_entry = 0;
        $turtle_data = TurtleSensorsData::query()
            ->where('turtle_key', "=", $turtle_key)
            ->where('entry_id', '>=', $last_entry[0]->prev_entry_id)
            //->where('created_at','>=',$formatted_date)
            // ->latest()->limit($get_n_times_row)
            ->orderBy("id", "asc")
            ->get();

        if (!$request->ajax()) {
            return view('turtle-sensors-detail');
        } else {
            return response()->json(['turtle' => $turtle_data]);
        }
    }

    public function myDevices(User $user)
    {
        return view("turtle.index");
    }

}
