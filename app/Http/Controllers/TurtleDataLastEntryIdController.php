<?php

namespace App\Http\Controllers;

use App\TurtleDataLastEntryId;
use Illuminate\Http\JsonResponse;

class TurtleDataLastEntryIdController extends Controller
{
    /**
     * @param $turtle_key
     * @return JsonResponse
     */
    public static function lastEntryId($turtle_key)
    {
        $last_entry_id = TurtleDataLastEntryId::query()
            ->select('prev_entry_id')
            ->where('turtle_key', '=', $turtle_key)
            ->orderByDesc('id')
            ->limit(1)
            ->get();

        return $last_entry_id;
    }
}
