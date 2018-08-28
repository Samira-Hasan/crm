@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
 
@include('Forms.partials.forms')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                           <script>

                          $(document).ready(function(){
                                $( "#myform" ).validate({
                                rules: {
                                    exampleInputFirstName:{
                                        required: true,
                                        max: 23
                                    },
                                    exampleInputLastName:{
                                        required: true,
                                        max: 23
                                    },
                                    exampleInputPhone:{
                                        required: true,
                                        max: 23
                                    },
                                    exampleInputEmail1:{
                                    required: true,
                                    email: true
                                    },
                                    exampleInputPassword1:{
                                        required: true,
                                        minlength: 6
                                    }
                                }
                                });

                              $( "#myform1" ).validate({
                                  rules: {
                                      inputFirstName: {
                                          required: true,

                                      },
                                      inputLastName: {
                                          required: true,

                                      },
                                      inputPhone: {
                                          required: true,

                                      },
                                      inputEmail3: {
                                          required: true,
                                          email: true
                                      },

                                      inputPassword3: {
                                          required: true,
                                          minlength: 6
                                      }
                                  },
                              });


                                $( "#target" ).submit(function( event ) {
                                    var singleValues = $( "#select" ).val();
                                    var singleValues2 = $( "#select2" ).val();
                                    var singleValues3 = $( "#select3" ).val();
                                   // alert( "Handler for .submit() called." );
                                    event.preventDefault();
                                    $.ajax({
                                                  url: '{{url("/formAjax")}}',
                                                  cache: false,
                                                  data: {
                                                            "_token": "{{ csrf_token() }}",
                                                            'singleValues':  $("#select").val(),
                                                            'singleValues2':  $("#select2").val(),
                                                            'singleValues3':  $("#select3").val(),
                                                        },
                                                  error: function() {
                                                          $('#info').html('<p>An error has occurred</p>');
                                                        },
                                                  dataType: 'json',
                                                  success: function(html){
                                                      
                                                  },
                                                  type: 'POST'
                                                });
                                    });

                                    $( "#myform1").validate({
                                            rules: {
                                                inputelements1: {
                                                    required: true,

                                                    remote: {
                                                        url: '{{url("/formElements")}}',
                                                        type: "post",
                                                        data: {
                                                            "_token": "{{ csrf_token() }}"
                                                        }
                                                    },
                                                    inputelements2: {
                                                        required: true,


                                                    }
                                                }
                                            }
                                   });

                            });
                            </script>
@stop
@push('css')

@push('js')