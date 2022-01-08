<div class="row">
                          <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                              <label class="font-weight-bold"  for="itemN-15">Nombre de la Categoria</label>
                              <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{isset( $categoria->categoria) ?$categoria->categoria:old('categoria')}}" id="itemN-15">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                              <label class="font-weight-bold" for="itemN-16">Descripción</label>
                              <input type="textarea" name="desc_p" class="form-control @error('desc_p') is-invalid @enderror" value="{{isset( $categoria->desc_p) ?$categoria->desc_p:old('desc_p')}}" id="itemN-17">
                            </div>
                          </div>
                        </div>
                        