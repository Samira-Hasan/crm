@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
 
@include('Profile.partials.profile')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('js')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
     <script>
               var quill = new Quill('#inputFacebook', {
                    theme: 'snow'
                });
     </script>
    
@stop
@push('css')

@push('js')