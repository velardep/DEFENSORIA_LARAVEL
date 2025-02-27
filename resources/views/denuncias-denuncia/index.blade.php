@extends('layouts.app')

@section('template_title')
    Denuncias Denuncias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Denuncias Denuncias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('denuncias-denuncias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >F Denuncia</th>
									<th >Nro Atencion</th>
									<th >Inhabilitado</th>
									<th >Ingreso</th>
									<th >Especifica Ingreso</th>
									<th >Descripcion</th>
									<th >Opinion</th>
									<th >Historia</th>
									<th >Completa</th>
									<th >Archivada</th>
									<th >Procedencia</th>
									<th >Municipio</th>
									<th >Otra Inst</th>
									<th >Nombre Servicio</th>
									<th >Orientacion</th>
									<th >Tipo Atencion</th>
									<th >Defensoria Id</th>
									<th >Tipologia Id</th>
									<th >Tipo Denuncia</th>
									<th >Estado Orientaciones</th>
									<th >Estado Actual</th>
									<th >Color</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denunciasDenuncias as $denunciasDenuncia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $denunciasDenuncia->f_denuncia }}</td>
										<td >{{ $denunciasDenuncia->nro_atencion }}</td>
										<td >{{ $denunciasDenuncia->inhabilitado }}</td>
										<td >{{ $denunciasDenuncia->ingreso }}</td>
										<td >{{ $denunciasDenuncia->especifica_ingreso }}</td>
										<td >{{ $denunciasDenuncia->descripcion }}</td>
										<td >{{ $denunciasDenuncia->opinion }}</td>
										<td >{{ $denunciasDenuncia->historia }}</td>
										<td >{{ $denunciasDenuncia->completa }}</td>
										<td >{{ $denunciasDenuncia->archivada }}</td>
										<td >{{ $denunciasDenuncia->procedencia }}</td>
										<td >{{ $denunciasDenuncia->municipio }}</td>
										<td >{{ $denunciasDenuncia->otra_inst }}</td>
										<td >{{ $denunciasDenuncia->nombre_servicio }}</td>
										<td >{{ $denunciasDenuncia->orientacion }}</td>
										<td >{{ $denunciasDenuncia->tipo_atencion }}</td>
										<td >{{ $denunciasDenuncia->defensoria_id }}</td>
										<td >{{ $denunciasDenuncia->tipologia_id }}</td>
										<td >{{ $denunciasDenuncia->tipo_denuncia }}</td>
										<td >{{ $denunciasDenuncia->estado_orientaciones }}</td>
										<td >{{ $denunciasDenuncia->estado_actual }}</td>
										<td >{{ $denunciasDenuncia->color }}</td>

                                            <td>
                                                <form action="{{ route('denuncias-denuncias.destroy', $denunciasDenuncia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('denuncias-denuncias.show', $denunciasDenuncia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('denuncias-denuncias.edit', $denunciasDenuncia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $denunciasDenuncias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
