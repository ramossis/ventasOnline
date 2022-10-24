@extends('admin.index')

@section('content')
<div class="container">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Realizar Pedido</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Provincia</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Localidad</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Direccion</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Cliente</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                              </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Coste</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Estado</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Fecha</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hora</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Nombre Provincia">
                              </div>
                    </div>
                </div>
              </div>


              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="submit" class="btn btn-danger">Cancelar</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!--/.col (right) -->
      </div>
    </div>
</div>
@endsection
