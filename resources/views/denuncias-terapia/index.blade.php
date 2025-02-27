@extends('layouts.app')

@section('template_title')
    Denuncias Terapias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Denuncias Terapias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('denuncias-terapias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Otro Tipo</th>
									<th >Otro Documento</th>
									<th >Derivacion</th>
									<th >Denuncia Id</th>
									<th >Croquis</th>
									<th >Documento Otro</th>
									<th >Inf Psicologico</th>
									<th >Inf Social</th>
									<th >Violencia Economica</th>
									<th >Violencia Fisica</th>
									<th >Violencia Otro</th>
									<th >Violencia Psicologica</th>
									<th >Violencia Sexual</th>
									<th >Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denunciasTerapias as $denunciasTerapia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $denunciasTerapia->otro_tipo }}</td>
										<td >{{ $denunciasTerapia->otro_documento }}</td>
										<td >{{ $denunciasTerapia->derivacion }}</td>
										<td >{{ $denunciasTerapia->denuncia_id }}</td>
										<td >{{ $denunciasTerapia->croquis }}</td>
										<td >{{ $denunciasTerapia->documento_otro }}</td>
										<td >{{ $denunciasTerapia->inf_psicologico }}</td>
										<td >{{ $denunciasTerapia->inf_social }}</td>
										<td >{{ $denunciasTerapia->violencia_economica }}</td>
										<td >{{ $denunciasTerapia->violencia_fisica }}</td>
										<td >{{ $denunciasTerapia->violencia_otro }}</td>
										<td >{{ $denunciasTerapia->violencia_psicologica }}</td>
										<td >{{ $denunciasTerapia->violencia_sexual }}</td>
										<td >{{ $denunciasTerapia->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('denuncias-terapias.destroy', $denunciasTerapia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('denuncias-terapias.show', $denunciasTerapia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('denuncias-terapias.edit', $denunciasTerapia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $denunciasTerapias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
