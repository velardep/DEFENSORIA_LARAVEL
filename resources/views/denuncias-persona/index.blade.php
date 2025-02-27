@extends('layouts.app')

@section('template_title')
    Denuncias Personas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Denuncias Personas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('denuncias-personas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nombres</th>
									<th >Apellidos</th>
									<th >Actividad</th>
									<th >Anonimo</th>
									<th >C Nac</th>
									<th >Estado Civil</th>
									<th >Estudia</th>
									<th >Doc Expedido</th>
									<th >Edad</th>
									<th >F Nac</th>
									<th >G Instruccion</th>
									<th >Gestante</th>
									<th >Hijos</th>
									<th >Idioma</th>
									<th >Ingr Eco</th>
									<th >Lgro Educa</th>
									<th >Lug Nacimiento</th>
									<th >Lug Residencia</th>
									<th >Lugar Trabajo</th>
									<th >Monto</th>
									<th >Nro Documento</th>
									<th >Sexo</th>
									<th >Tipo Doc</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denunciasPersonas as $denunciasPersona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $denunciasPersona->nombres }}</td>
										<td >{{ $denunciasPersona->apellidos }}</td>
										<td >{{ $denunciasPersona->actividad }}</td>
										<td >{{ $denunciasPersona->anonimo }}</td>
										<td >{{ $denunciasPersona->c_nac }}</td>
										<td >{{ $denunciasPersona->estado_civil }}</td>
										<td >{{ $denunciasPersona->estudia }}</td>
										<td >{{ $denunciasPersona->doc_expedido }}</td>
										<td >{{ $denunciasPersona->edad }}</td>
										<td >{{ $denunciasPersona->f_nac }}</td>
										<td >{{ $denunciasPersona->g_instruccion }}</td>
										<td >{{ $denunciasPersona->gestante }}</td>
										<td >{{ $denunciasPersona->hijos }}</td>
										<td >{{ $denunciasPersona->idioma }}</td>
										<td >{{ $denunciasPersona->ingr_eco }}</td>
										<td >{{ $denunciasPersona->lgro_educa }}</td>
										<td >{{ $denunciasPersona->lug_nacimiento }}</td>
										<td >{{ $denunciasPersona->lug_residencia }}</td>
										<td >{{ $denunciasPersona->lugar_trabajo }}</td>
										<td >{{ $denunciasPersona->monto }}</td>
										<td >{{ $denunciasPersona->nro_documento }}</td>
										<td >{{ $denunciasPersona->sexo }}</td>
										<td >{{ $denunciasPersona->tipo_doc }}</td>

                                            <td>
                                                <form action="{{ route('denuncias-personas.destroy', $denunciasPersona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('denuncias-personas.show', $denunciasPersona->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('denuncias-personas.edit', $denunciasPersona->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $denunciasPersonas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
