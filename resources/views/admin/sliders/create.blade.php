{{-- resources/views/admin/sliders/create.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Nuevo Slider</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.sliders.store') }} " enctype="multipart/form-data"
              method="POST">

            @csrf

            @include('admin.sliders.form')

        </form>

    </div>

</div>

@endsection