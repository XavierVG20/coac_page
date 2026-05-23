{{-- resources/views/admin/agencias/edit.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">
            <h4>Editar Agencia</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.agencias.update',$agencia->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                @include('admin.agencias.form')

            </form>

        </div>

    </div>

</div>

@endsection