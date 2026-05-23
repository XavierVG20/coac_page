{{-- resources/views/admin/slider-categorias/index.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h4>Categorías Slider</h4>

        <a href="{{ route('admin.slider-categorias.create') }}"
           class="btn btn-primary">

            Nueva Categoría

        </a>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach($categorias as $categoria)

                <tr>

                    <td>{{ $categoria->id }}</td>

                    <td>{{ $categoria->nombre }}</td>

                    <td>

                        @if($categoria->estado)

                            Activo

                        @else

                            Inactivo

                        @endif

                    </td>

                    <td>

                        <a href="{{ route('admin.slider-categorias.edit',$categoria->id) }}"
                           class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <form action="{{ route('admin.slider-categorias.destroy',$categoria->id) }}"
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

@endsection