@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
 
@include('Tables.partials.tables')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
   
    
@stop
@push('css')

@push('js')