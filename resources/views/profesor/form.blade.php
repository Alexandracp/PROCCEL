<div class="row">
                          <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                              <label class="font-weight-bold"  for="itemN-15">Primer Nombre</label>
                              <input type="text" name="pnomb_p" class="form-control @error('pnomb_p') is-invalid @enderror" value="{{isset( $profesor->pnomb_p) ?$profesor->pnomb_p:old('pnomb_p')}}" id="itemN-15">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-16">Segundo Nombre</label>
                              <input type="text" name="snomb_p" class="form-control @error('snomb_p') is-invalid @enderror" value="{{isset( $profesor->snomb_p) ?$profesor->snomb_p:old('snomb_p')}}" id="itemN-17">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-17">Primer Apellido</label>
                              <input type="text" name="pape_p" class="form-control @error('pape_p') is-invalid @enderror" value="{{isset( $profesor->pape_p) ?$profesor->pape_p:old('pape_p')}}" id="pape_p">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label for="itemN-18">Segundo Apellido</label>
                              <input type="text" class="form-control @error('sape_p') is-invalid @enderror" name="sape_p" value="{{isset( $profesor->sape_p) ?$profesor->sape_p:old('sape_p')}}" id="sape_p">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-2">
                            <div class="form-group">
                                <label for="itemN-23">Tipo</label>
                                <select name="idnaci"  class="form-control @error('idnaci') is-invalid @enderror">
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    @foreach ($tipos as $tipo)
                                    <option value="{{$tipo ['idnaci']}}">{{$tipo ['abrv_t']}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                              <label for="itemN-20">Nro de Documento</label>
                              <input type="text" class="form-control @error('cedu_p') is-invalid @enderror" name="cedu_p" value="{{isset( $profesor->cedu_p) ?$profesor->cedu_p:old('cedu_p')}}" id="cedu_p">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label class="font-weight-bold">Fecha de nacimiento</label>
                              <input type="date" id="start" name="fnac_p" value="{{isset( $profesor->fnac_p) ?$profesor->fnac_p:old('fnac_p')}}" min="1960-01-01" max="2021-12-31" class="form-control @error('fnac_p') is-invalid @enderror">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                              <label for="itemN-20">Nro de telefono</label>
                              <input type="text" class="form-control @error('ntel_p') is-invalid @enderror" value="{{isset( $profesor->ntel_p) ?$profesor->ntel_p:old('ntel_p')}}" name="ntel_p" id="itemN-20">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                              <label for="itemN-20">Email</label>
                              <input type="email" class="form-control @error('emai_p') is-invalid @enderror" value="{{isset( $profesor->emai_p) ?$profesor->emai_p:old('emai_p')}}" name="emai_p" id="itemN-20">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4">
                                
                            <div class="form-group">
                                <label for="itemN-23">Genero</label>
                                <select name="id_genero" class="form-control @error('id_genero') is-invalid @enderror" data-placeholder="Selecciona una opción" >
                                    <option value="" selected disabled>Selecciona una opción</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{$genero ['id_genero']}}">{{$genero ['genero']}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-20">Foto</label>
                              <div class="galleryUploads">
                                <div class="imageGallery">
                                   @if (isset( $prof->foto_p))
                                      <div class="image imageLoaded">
                                        <img src="{{ asset('storage').'/'.$curso->foto_p}}" alt="foto docente" width="200" height="150"><br>
                                      </div>
                                   @endif
                                <input type="file" id="foto_p" name="foto_p" class="form-control @error('foto_p') is-invalid @enderror">
                                
                                <div class="invalid-feedback"> Campo requerido </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        