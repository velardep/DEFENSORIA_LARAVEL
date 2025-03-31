@extends('layouts.app')

@section('template_title')
    agresor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('agresor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('agresor.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nombre</th>
									<th >Ap Paterno</th>
									<th >Ap Materno</th>
									<th >Sexo</th>
									<th >Lugr Nacimiento</th>
                                    <th >Especifique Lugar</th>
									<th >Fecha Nacimiento</th>
									<th >Edad</th>
									<th >Residencia Habitual</th>
                                    <th >Especifique Residencia</th>
									<th >Estado Civil</th>
									<th >Logro Educativo</th>
									<th >Ultimo Curso</th>
									<th >Actividad</th>
									<th >Especifique Acticvidad</th>
									<th >Ingreso</th>
									<th >Monto</th>
									<th >Idioma</th>
									<th >Especifique Idioma</th>
									<th >Numero de Documento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agresores as $agresor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $agresor->nombre }}</td>
										<td >{{ $agresor->ap_paterno }}</td>
										<td >{{ $agresor->ap_materno }}</td>
										<td >{{ $agresor->sexo }}</td>
										<td >{{ $agresor->lugr_nacimiento }}</td>
                                        <td >{{ $agresor->especifique_lugar }}</td>
										<td >{{ $agresor->fecha_nacimiento }}</td>
										<td >{{ $agresor->edad }}</td>
										<td >{{ $agresor->residencia_habitual }}</td>
                                        <td >{{ $agresor->especifique_residencia }}</td>
										<td >{{ $agresor->estado_civil }}</td>
										<td >{{ $agresor->logro_educativo }}</td>
										<td >{{ $agresor->ultimo_curso }}</td>
										<td >{{ $agresor->actividad }}</td>
										<td >{{ $agresor->especifique_actividad }}</td>
										<td >{{ $agresor->ingreso }}</td>
										<td >{{ $agresor->monto }}</td>
										<td >{{ $agresor->idioma }}</td>
										<td >{{ $agresor->especifique_idioma }}</td>
										<td >{{ $agresor->num_documento }}</td>

                                            <td>
                                                <form action="{{ route('agresor.destroy', $agresor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('agresor.show', $agresor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('agresor.edit', $agresor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
{!! $agresores->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
