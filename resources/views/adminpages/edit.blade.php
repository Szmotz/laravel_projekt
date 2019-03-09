@extends('master')
@section('content')
@include('products.form_errors')
{!! Form::model($user, ['method'=>'PATCH', 'class'=>'form-horiontal', 'action'=>['AdminController@update',$user->id]]) !!}

	<div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('name', 'Imię:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('email', 'Opis:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::textarea('email', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('role', 'Czy Admin:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::radio('role','1','false', ['class'=>'form-control']) !!}TAK
                             {!! Form::radio('role','0','false', ['class'=>'form-control']) !!}Nie
                        </div>
                    </div> 
                      {{-- <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('role', 'Czy Admin:' ) !!}</div>
                        <div class="col-md-6">
                           
                        </div>
                    </div>  --}}

                    <div class="form-group">
                        
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Edytuj Użytkownika', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

{!! Form::close() !!}

@stop