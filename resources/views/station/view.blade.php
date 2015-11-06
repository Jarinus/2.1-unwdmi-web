@extends('layouts.page')

@section('title','Stations')

@section('content')

<div class="page-title">
    <h1>
        {{ ucwords(strtolower($station->name)) }},
        {{ ucwords(strtolower($station->country)) }}
    </h1>
</div>

<div class="row">
    <div class="col-sm-12"
         style="height: 300px;">
        <span data-insert="map"
              data-lat="{{ $station->latitude }}"
              data-lon="{{ $station->longitude }}"
              data-zoom="9"></span>
    </div>
</div>

<table class="table">
    <tr>
        <tr>
            <td>Id</td>
            <td>{{ $station->id }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ $station->name }}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{ $station->country }}</td>
        </tr>
        <tr>
            <td>Latitude</td>
            <td>{{ $station->latitude }}</td>
        </tr>
        <tr>
            <td>Longitude</td>
            <td>{{ $station->longitude }}</td>
        </tr>
        <tr>
            <td>Elevation</td>
            <td>{{ $station->elevation }}</td>
        </tr>
    </tr>
</table>

@endsection
