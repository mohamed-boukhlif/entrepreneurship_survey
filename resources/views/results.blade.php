@extends("layouts.app")

@section('content')
    <div class="container">{!! $gendersChart->container() !!}</div>
    <div class="container">{!! $agesChart->container() !!}</div>
    <div class="container">{!! $countriesChart->container() !!}</div>
@stop

@section('scripts')
    {!! $gendersChart->script() !!}
    {!! $agesChart->script() !!}
    {!! $countriesChart->script() !!}
@stop