@extends('layouts.app')

@section('template_title')
    Victimas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Victimas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('victimas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Lugar Nacimiento</th>
                                    <th >Especifique Lugar</th>
									<th >Fecha Nacimiento</th>
									<th >Edad</th>
									<th >Residencia Habitual</th>
                                    <th >Especifique</th>
									<th >Estado Civil</th>
                                    <th >Celular</th>
									<th >Rel Victima Agresor</th>
									<th >Hijos</th>
									<th >Logro Educativo</th>
									<th >Actividad</th>
									<th >Ingreso</th>
									<th >Monto</th>
									<th >Idioma</th>
									<th >Especifique Idioma</th>
									<th >Documento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($victimas as $victima)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $victima->nombre }}</td>
										<td >{{ $victima->ap_paterno }}</td>
										<td >{{ $victima->ap_materno }}</td>
										<td >{{ $victima->sexo }}</td>
										<td >{{ $victima->lugr_nacimiento }}</td>
                                        <td >{{ $victima->especifique_nacimiento }}</td>
										<td >{{ $victima->fecha_nacimiento }}</td>
										<td >{{ $victima->edad }}</td>
										<td >{{ $victima->residencia_habitual }}</td>
                                        <td >{{ $victima->especifique_residencia }}</td>
										<td >{{ $victima->estado_civil }}</td>
                                        <td >{{ $victima->celular }}</td>
										<td >{{ $victima->rel_victima_agresor }}</td>
										<td >{{ $victima->hijos }}</td>
										<td >{{ $victima->logro_educativo }}</td>
										<td >{{ $victima->actividad }}</td>
										<td >{{ $victima->ingreso }}</td>
										<td >{{ $victima->monto }}</td>
										<td >{{ $victima->idioma }}</td>
										<td >{{ $victima->especifique_idioma }}</td>
                                        <td>{{ $victima->documento->numero ?? 'Sin documento' }}</td>

                                            <td>
                                                <form action="{{ route('victimas.destroy', $victima->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('victimas.show', $victima->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('victimas.edit', $victima->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $victimas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
