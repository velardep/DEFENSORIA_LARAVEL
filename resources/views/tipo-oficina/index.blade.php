@extends('layouts.app')

@section('template_title')
    Tipo Oficinas
@endsection
@section('content')
    <div class="container-fluid">
    <h2 class="text-center text-dark my-4"></i> Lista de Tipos de Oficinas</h2> 
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Oficinas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-oficinas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nombre Tipo</th>
									<th >Condicion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoOficinas as $tipoOficina)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tipoOficina->nombre_tipo }}</td>
										<td >{{ $tipoOficina->condicion }}</td>

                                            <td>
                                                <form action="{{ route('tipo-oficinas.destroy', $tipoOficina->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-oficinas.show', $tipoOficina->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-oficinas.edit', $tipoOficina->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tipoOficinas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
