{{-- resources/views/admin/agencias/index.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header d-flex justify-content-between">

            <h4>Agencias</h4>

            <a href="{{ route('admin.agencias.create') }}"
               class="btn btn-primary">

                Nueva Agencia

            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Ciudad</th>
                        <th>Socios</th>
                        <th>Créditos</th>
                        <th>Estado</th>
                        <th>Acciones</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($agencias as $agencia)

                    <tr>

                        <td>

                            @if($agencia->imagen)

                                <img src="{{ asset('uploads/agencias/'.$agencia->imagen) }}"
                                     width="80">

                            @endif

                        </td>

                        <td>{{ $agencia->nombre }}</td>

                        <td>{{ $agencia->ciudad }}</td>

                        <td>{{ $agencia->socios }}</td>

                        <td>{{ $agencia->creditos }}</td>

                        <td>

                            @if($agencia->estado)
                                Activo
                            @else
                                Inactivo
                            @endif

                        </td>

                        <td>

                            

                            <a href="{{ route('admin.agencias.edit',$agencia->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('admin.agencias.destroy',$agencia->id) }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection