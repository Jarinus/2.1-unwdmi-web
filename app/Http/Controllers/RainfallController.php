<?php

namespace Leertaak5\Http\Controllers;

use Illuminate\Http\Request;
use Leertaak5\Http\Requests;
use Leertaak5\Http\Controllers\Controller;
use Leertaak5\Station;
use Leertaak5\Measurement;
use Carbon\Carbon;

/**
 * Returns an array, indexed by station numbers,
 * containing all rainfall data per station.
 */

class RainfallController extends Controller
{
    public function index()
    {
        return view('weather.rainfall');
    }

    /**
     * Displays information per station of the last
     * 24 hours.
     */
    public function showPerStation(Request $request)
    {
        $station = Station::find($request->input('station'));
        return [
            'station' => $station,
            'measurements' => $station->measurements()
                ->where('time', '>=', Carbon::now()->subDay())
                ->get()
        ];
    }

    /**
     * Returns most recent longitude, latitude and precipitation
     * per location.
     */
    public function showMostRecent()
    {
        $data = array();

        $stations = Station::all();

        foreach ($stations as $station) {
            $measurements = Measurement::with('station')
            ->groupBy('station_id')
            ->groupBy('id')
            ->orderBy('time', 'desc')
            ->take(1)
            ->get();

            foreach ($measurements as $measurement) {
                $data[$station->id] = array('station' => $station, 'precipitation' => $measurement->precipitation);
            }
        }

        return $data;
    }
}
