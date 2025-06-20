<style>
    .tabla-container {
        width: 100%;
        overflow-x: auto;
    }

    .tabla-denuncias {
        width: 100%;
        min-width: 1200px; /* o ajusta según columnas */
        white-space: nowrap;
    }

    .tabla-denuncias th,
    .tabla-denuncias td {
        white-space: nowrap;
        padding: 8px 12px;
        text-align: left;
    }
</style>


@extends('layouts.app')

@section('template_title')
    Denuncia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Denuncia') }}
                            </span>

                            <!-- <div class="float-right">
                                <a href="{{ route('denuncia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>-->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">

                        <!--<div class="table-responsive">-->

                        <div class="tabla-container">
                        <h4 class="ms-2 mb-3 fs-4">📋 Lista de Denuncias Registradas</h4>


                            <table id="miTablaDenuncias" class="table table-striped table-hover tabla-denuncias">

                            <!--<table class="table table-striped table-hover">-->
                                <thead class="thead">
                                    <tr>
                                     <!--   <th>No</th> -->
                                        
									<th >Fecha</th>
									<!--<th >Departamento</th>
									<th >Nombre Servicio</th>
									<th >Municipio</th>-->
									<th >Numero CUD</th>
									<th >Cod Slim</th>
                                    <th >Num Juzgado</th>

									<th >Nombre Agresor</th>
									<th >Victima</th>
                                   <!-- <th >V Fisica</th>
									<th >V Psicologica</th>
									<th >V Sexual</th>
									<th >V Economica</th> 
                                    <th >Forma de Ingreso</th>
                                    <th >Denuncia Previa</th>
                                    <th >Testimonio</th>
                                    <th >Completada</th>

                                    <th >Zona Barrio</th>
									<th >Avenida Calle</th>
									<th >Nom Edificio</th>
									<th >Num Vivienda</th>
									<th >Lugar Domicilio</th>
									<th >Especifique</th>
                                    <th> Delitos Penales</th>-->							
									<th >Estado</th>
                                    <th >Emblematico</th>
                                    <th> Completa</th>
                                    <th >Acciones</th>
                                    <th >Reporte</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i = 0; @endphp

                                    @foreach ($denuncias as $denuncia)
                                    <!--   <td>{{ ++$i }}</td> -->
                                            
										<td >{{ $denuncia->fecha }}</td>
										<!--<td >{{ $denuncia->departamento }}</td>-->
										<!--<td >{{ $denuncia->nombre_servicio }}</td>-->
										<!--<td >{{ $denuncia->municipio }}</td>-->
										<td >{{ $denuncia->num_caso }}</td>
										<td >{{ $denuncia->cod_slim }}</td>
                                        <td >{{ $denuncia->num_juzgado }}</td>

										<td>{{ $denuncia->agresor->nombre ?? 'N/A' }}</td>
                                        <td>{{ $denuncia->victima->nombre ?? 'N/A' }}</td>

                                        <!--<td>{{ $denuncia->violencia_fisica}}</td>
                                        <td>{{ $denuncia->violencia_psicologica}}</td>
                                        <td>{{ $denuncia->violencia_sexual}}</td>
                                        <td>{{ $denuncia->violencia_economica}}</td> -->


                                      <!--  <td>{{ $denuncia->forma_ingreso}}</td>
                                        <td>{{ $denuncia->denuncia_previa}}</td>
                                        <td>{{ $denuncia->testimonio}}</td>

                                        <td>{{ $denuncia->completada }}</td>

                                        <td>{{ $denuncia->zona_barrio }}</td>
                                        <td>{{ $denuncia->avenida_calle }}</td>
                                        <td>{{ $denuncia->nom_edificio }}</td>
                                        <td>{{ $denuncia->num_vivienda }}</td>
                                        <td>{{ $denuncia->lugar_domicilio }}</td>
                                        <td>{{ $denuncia->especifique }}</td>

                                        <td>{{ $denuncia->delitos_penales }}</td>-->

 
										<td >{{ $denuncia->estado }}</td>
                                        <td >{{ $denuncia->emblematico }}</td>
                                        <td>{{ $denuncia->provisional ? 'SI' : 'NO' }}</td>



                                            
                                            <td>
                                                <button type="button" class="btn btn-info btn-ver-resumen" data-id="{{ $denuncia->id }}">
                                                    <i class="fas fa-eye"></i> Acciones
                                                </button>

                                                <!--<form action="{{ route('denuncia.destroy', $denuncia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('denuncia.show', $denuncia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> 
                                                    


                                                    <a class="btn btn-sm btn-success" href="{{ route('denuncia.edit', $denuncia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button> 
                                                </form>-->
                                            </td>
                                            <td>
                                                <a href="{{ route('reporte.denuncia.pdf', $denuncia->id) }}" class="btn btn-danger" target="_blank">
                                                    <i class="fas fa-file-pdf"></i> PDF
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $denuncias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
