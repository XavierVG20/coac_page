{{-- resources/views/admin/sliders/edit.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Editar Slider</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.sliders.update',$slider->id) }}" enctype="multipart/form-data"
              method="POST">

            @csrf
            @method('PUT')

            @include('admin.sliders.form')

        </form>

    </div>

</div>

@endsection