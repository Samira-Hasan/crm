@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
 
@include('Forms.partials.forms')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
   
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                           <script>

                          $(document).ready(function(){
                                $( "#myform" ).validate({
                                rules: {
                                    exampleInputEmail1:{
                                    required: true,
                                    email: true
                                    }
                                }
                                });
                         
                            });
                            </script>
@stop
@push('css')

@push('js')