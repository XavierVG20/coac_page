{{-- resources/views/admin/sliders/index.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h4>Sliders</h4>

        <a href="{{ route('admin.sliders.create') }}"
           class="btn btn-primary">

            Nuevo Slider

        </a>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach($sliders as $slider)

                <tr>

                    <td>{{ $slider->id }}</td>

                    <td>{{ $slider->nombre }}</td>

                    <td>{{ $slider->categoria->nombre ?? '' }}</td>

                    <td>

                        @if($slider->estado)

                            Activo

                        @else

                            Inactivo

                        @endif

                    </td>

                    <td>

                        <a href="{{ route('admin.sliders.edit',$slider->id) }}"
                           class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <form action="{{ route('admin.sliders.destroy',$slider->id) }}"
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