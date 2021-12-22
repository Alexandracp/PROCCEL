
<div class="row">
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-15">Nombre del curso</label>
                              <input type="text" class="form-control @error('curso') is-invalid @enderror" placeholder=""  value="{{isset( $curso->curso) ?$curso->curso:old('curso')}}" name="curso" id="curso">
                               
                                <div class="invalid-feedback"> Campo requerido </div> 

                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-16">Precio</label>
                              <input type="" class="form-control @error('costo_u') is-invalid @enderror" placeholder="" value="{{isset( $curso->costo_u) ?$curso->costo_u:old('costo_u')}}" 
                               name="costo_u" id="costo_u">

                                  <div class="invalid-feedback"> Campo requerido </div> 
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                            <label class="font-weight-bold" for="itemN-17">Instructor</label>
                                            {{ Form::select('id_prof', $profesors ,$curso->id_prof, ['class' => 'form-control' . ($errors->has('id_prof') ? ' is-invalid' : ''),'placeholder' => 'Selecciona el docente', 'value' => '$curso -> id_prof']) }}
                                    
                                  <div class="invalid-feedback"> Campo requerido </div>
                                  
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-19">Fecha de Inicio</label>
                              <input type="date" class="form-control  @error('f_inicio') is-invalid @enderror" placeholder="" value="{{isset( $curso->f_inicio) ?$curso->f_inicio:old('f_inicio')}}" name="f_inicio" id="dia_clase">
                              <div class="invalid-feedback"> Campo requerido </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-18">Hora inicio</label>
                              {{ $curso->h_inicio}}
                              <input type="time" class="form-control @error('h_inicio') is-invalid @enderror" placeholder="" value="{{isset( $curso->h_inicio) ?$curso->h_inicio:old('costo_u')}}" name="h_inicio" id="h_inicio">
                              <div class="invalid-feedback"> Campo requerido </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-18">Hora final</label>
                              <input type="time" class="form-control @error('h_final') is-invalid @enderror" placeholder="" value="{{ date ('d/m/Y H:i', strtotime ($curso->h_final)) }}" name="h_final" id="h_final">
                              <div class="invalid-feedback"> Campo requerido </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-2">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-19">Cupos</label>
                              <input type="number" class="form-control @error('cupos') is-invalid @enderror" placeholder="" value="{{ $curso->cupos}}" value="{{isset( $curso->cupos) ?$curso->cupos:old('cupos')}}" name="cupos" id="cupos">
                              <div class="invalid-feedback"> Campo requerido </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-5">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-18">Día</label>
                              <input type="text" class="form-control @error('dia_clase') is-invalid @enderror" placeholder=""  value="{{isset( $curso->dia_clase) ?$curso->dia_clase:old('dia_clase')}}"  name="dia_clase" id="dia_clase">
                                  
                                  <div class="invalid-feedback"> Campo requerido </div>
                        
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-5">
                            <div class="form-group">
                                <label class="font-weight-bold" for="itemN-23">Duración</label>
                                <select data-placeholder="Selecciona una opción" class="form-control" value="{{isset( $curso->duracion) ?$curso->duracion:old('duracion')}}"  name="duracion" id="duracion">
                                  <option value="1">8 semanas</option>
                                  <option value="2">12 semanas</option>
                                  <option value="3">18 semanas</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-20">Descripción</label>
                              <textarea class="form-control @error('descripcion') is-invalid @enderror" placeholder="Describe el curso a dictar" name="descripcion" id="descripcion">{{isset( $curso->descripcion) ?$curso->descripcion:old('descripcion')}}</textarea>
                              <div class="invalid-feedback"> Campo requerido </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-20">Foto</label>
                              <div class="galleryUploads">
                                <div class="imageGallery">
                                   @if (isset( $curso->foto_c))
                                      <div class="image imageLoaded">
                                        <img src="{{ asset('storage').'/'.$curso->foto_c}}" alt="foto curso" width="200" height="150"><br>
                                      </div>
                                   @endif
                                <input type="file" id="foto_c" name="foto_c" class="form-control @error('foto_c') is-invalid @enderror">
                                
                                <div class="invalid-feedback"> Campo requerido </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-grid gap-2 col-12 mx-end">
                                <button role="submit" class="btn btn-primary  btn-sm float-right">Guardar</button>
                          </div>
                          
                        </div><br>
                        
</div>                        
                                    