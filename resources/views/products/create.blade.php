@extends('master')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            	{!! Form::open(['url'=>'products','class'=>'form-horizontal']) !!}

            		<div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('name', 'Nazwa:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('description', 'Opis:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('img', 'Adres grafiki:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::text('img', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj produkt', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

        		{!! Form::close() !!}
           
            </div>
        </div>
    </div>
</div>
@stop