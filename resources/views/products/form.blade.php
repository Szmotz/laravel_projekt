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
                            {!! Form::text('img', null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('price', 'Cena:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::text('price', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('ilosc', 'Ilość na stanie:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::text('ilosc', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                     {{--  <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('view', 'View:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::checkbox('view','boolean','true', ['class'=>'form-control']) !!}
                        </div>
                    </div>  --}}

                <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('view', 'View:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::radio('view','1','false', ['class'=>'form-control']) !!}TAK
                        </div>
                    </div> 
                      <div class="form-group">
                        <div class="col-md-4 control-label">{!! Form::label('view', 'View:' ) !!}</div>
                        <div class="col-md-6">
                            {!! Form::radio('view','0','false', ['class'=>'form-control']) !!}Nie
                        </div>
                    </div> 

                    <div class="form-group">
                        
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Edytuj Produkt', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>