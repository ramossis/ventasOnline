@extends('admin.index')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">LISTADO PEDIDOS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado y Gestion de Pedidos Actuales</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nro</th>
                  <th>Pedido Por:</th>
                  <th>Provincia</th>
                  <th>Localidad</th>
                  <th>Direccion</th>
                  <th>Coste</th>
                  <th>Estado</th>
                  <th>Fecha Pedido</th>
                  <th>Hora Pedido</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pedido as $ped )
                <tr>
                    <td>{{ $ped->id }}</td>
                    <td>{{ $ped->user->nombre }}</td>
                    <td>{{ $ped->provincia }}</td>
                    <td>{{ $ped->localidad}}</td>
                    <td>{{ $ped->direccion}}</td>
                    <td>{{ $ped->costo}}Bs</td>
                    <td>{{ $ped->estado}}</td>
                    <td>{{ $ped->fecha }}</td>
                    <td>{{ $ped->hora }}</td>
                    <td>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
