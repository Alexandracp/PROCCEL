<div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-16">Nombre del curso</label>
                                            {{ Form::text('curso', $curso->curso, ['class' => 'form-control' . ($errors->has('curso') ? ' is-invalid' : '')]) }}
                                            {!! $errors->first('curso', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-16">Precio</label>
                                            {{ Form::text('costo_u', $curso->costo_u, ['class' => 'form-control' . ($errors->has('costo_u') ? ' is-invalid' : '')]) }}
                                            {!! $errors->first('costo_u', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-17">Instructor</label>
                                            {{ Form::select('id_prof', $profesors ,$curso->id_prof, ['class' => 'form-control' . ($errors->has('id_prof') ? ' is-invalid' : ''),'placeholder' => 'Dia Clase']) }}
                                            {!! $errors->first('id_prof', '<div class="invalid-feedback">:message</p>') !!}

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-18">Día</label>
                                            {{ Form::text('dia_clase', $curso->dia_clase, ['class' => 'form-control' . ($errors->has('dia_clase') ? ' is-invalid' : ''), 'placeholder' => 'Elige']) }}
                                            {!! $errors->first('dia_clase', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-18">Hora inicio</label>
                                            {{ Form::time('h_inicio', $curso->h_inicio, ['class' => 'form-control' . ($errors->has('h_inicio') ? ' is-invalid' : '') ])  }}
                                            {!! $errors->first('h_inicio', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-18">Hora final</label>
                                            {{ Form::time('h_final', $curso->h_final, ['class' => 'form-control' . ($errors->has('h_final') ? ' is-invalid' : '') ]) }}
                                            {!! $errors->first('h_final', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-19">Cupos</label>
                                                {{ Form::number('cupos', $curso->cupos, ['class' => 'form-control' . ($errors->has('cupos') ? ' is-invalid' : ''), 'placeholder' => 'Cupos']) }}
                                                {!! $errors->first('cupos', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-23">Duración</label>
                                            {{ Form::text('duracion', $curso->duracion, ['class' => 'form-control' . ($errors->has('duracion') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
                                            {!! $errors->first('duracion', '<div class="invalid-feedback">:message</p>') !!}
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Fecha de Inicio</label>
                                            {{ Form::date('f_inicio', $curso->f_inicio, ['class' => 'form-control' . ($errors->has('f_inicio') ? ' is-invalid' : '')]) }}
                                            {!! $errors->first('f_inicio', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group">
                                        <label class="font-weight-bold" for="itemN-20">Descripción</label>
                                        {{ Form::textarea('descripcion', $curso->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="form-group">
                                            <label class="font-weight-bold" for="itemN-20">Foto</label>
                                            <div class="galleryUploads">
                                                <div class="imageGallery">
                                                <div class="image imageLoaded">
                                                    <img src="https://via.placeholder.com/200x150" alt="" width="200" height="150">
                                                    <div class="btnsArea">
                                                    <a href="#" class="link close"><i class="fa fa-window-close"></i></a>
                                                    <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                    <span>
                                                        <i class="fi flaticon-cloud-computing"></i>
                                                        <span>Cargar imagen</span>
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="image">
                                                    <div class="btnsArea">
                                                    <a href="#" class="link close"><i class="fa fa-window-close"></i></a>
                                                    <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                    <span>
                                                        <i class="fi flaticon-cloud-computing"></i>
                                                        <span>Cargar imagen</span>
                                                    </span>
                                                    </a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="btnArea">
                                    <button type="submit" class="btn btn-primary">Submit</button>
</div>