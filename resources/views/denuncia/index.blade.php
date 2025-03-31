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

                             <div class="float-right">
                                <a href="{{ route('denuncia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Fecha</th>
									<th >Departamento</th>
									<th >Nombre Servicio</th>
									<th >Municipio</th>
									<th >Num Caso</th>
									<th >Cod Slim</th>
									<th >Nombre Agresor</th>
									<th >Victima</th>
									<th >Tipo de Violencia</th>
                                    <th >Violencia</th>
									<th >Condicion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denuncias as $denuncia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $denuncia->fecha }}</td>
										<td >{{ $denuncia->departamento }}</td>
										<td >{{ $denuncia->nombre_servicio }}</td>
										<td >{{ $denuncia->municipio }}</td>
										<td >{{ $denuncia->num_caso }}</td>
										<td >{{ $denuncia->cod_slim }}</td>
										<td>{{ $denuncia->agresor->nombre ?? 'N/A' }}</td>
                                        <td>{{ $denuncia->victima->nombre ?? 'N/A' }}</td>
                                        <td>{{ $denuncia->tipoviolencias->nombre ?? 'N/A' }}</td>
                                        <td>{{ $denuncia->violencia->nombre ?? 'N/A' }}</td>


										<td >{{ $denuncia->condicion }}</td>

                                            <td>
                                                <form action="{{ route('denuncia.destroy', $denuncia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('denuncia.show', $denuncia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('denuncia.edit', $denuncia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $denuncias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
