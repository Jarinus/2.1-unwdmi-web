@inject('events', 'Leertaak5\Services\EventsRenderer')

@extends('layouts.page')

@section('title','Measurement')

@section('content')
<div class="row m-t m-b">
    <h1>Measurement</h1>

    <button class="btn back-btn" onclick="history.back()">Back</button>
</div>


<table class="table table-bordered table-striped">
    <thead class="header_rotate">
        <tr>
            <th><div>Station</div></th>
            <th><div>Time</div></th>
            <th><div>Temperature</div></th>
            <th><div>Dew Point</div></th>
            <th><div>Station Pressure</div></th>
            <th><div>Sea Level Pressure</div></th>
            <th><div>Visibility</div></th>
            <th><div>Precipitation</div></th>
            <th><div>Snow Depth</div></th>
            <th><div>Events</div></th>
            <th><div>Cloud Cover</div></th>
            <th><div>Wind Direction</div></th>
            <th><div>Wind Speed</div></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a href="{{ action('StationsController@show', $measurement->station_id) }}">
                    {{ title_case($measurement->station->name) }}
                </a>
            </td>
            <td>{{ $measurement->time }}</td>
            <td>{{ $measurement->temperature }}</td>
            <td>{{ $measurement->dew_point }}</td>
            <td>{{ $measurement->station_pressure }}</td>
            <td>{{ $measurement->sea_level_pressure }}</td>
            <td>{{ $measurement->visibility }}</td>
            <td>{{ $measurement->precipitation }}</td>
            <td>{{ $measurement->snow_depth }}</td>
            <td>{!! $events->render($measurement->events) !!}</td>
            <td>{{ $measurement->cloud_cover }}</td>
            <td>{{ $measurement->wind_direction }}</td>
            <td>{{ $measurement->wind_speed }}</td>
        </tr>
    </tbody>
</table>

@endsection
