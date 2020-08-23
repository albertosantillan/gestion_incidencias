@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reporte') }}</div>

                <div class="card-body">
                    <form action="">
                      <div class="form-group">
                           <label for="category_id">Categoria</label>
                               <select name="category_id" class="form-control">
                               </select>
                         </div>
                                  <div class="form-group">
                                      <label for="severity">Severidad</label>
                                      <select name="severity" class="form-control">
                                           <option value="M">Menor</option>
                                           <option value="N">Normal</option>
                                           <option value="A">Alta</option>                      
                                        </select>                      
                                   </div>
                                      <div class="form-group">
                                          <label for="title">Título</label>
                                           <input type="text" name="title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <label for="description">Descripcion</label>
                                           <textarea name="descripcion" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary">Registrar incidencia</button>
                                        </div>                                                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
