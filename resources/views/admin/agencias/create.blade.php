{{-- resources/views/admin/agencias/create.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">
            <h4>Nueva Agencia</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.agencias.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                @include('admin.agencias.form')

            </form>

        </div>

    </div>

</div>

@endsection