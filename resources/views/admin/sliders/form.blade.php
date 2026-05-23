<div class="row">

    <div class="col-md-12 mb-3">

        <label>Nombre</label>

        <input type="text"
               name="nombre"
               value="{{ old('nombre', $slider->nombre ?? '') }}"
               class="form-control">

    </div>

    <div class="col-md-6 mb-3">

        <label>Categoría</label>

        <select name="slider_categoria_id"
                class="form-control">

            @foreach($categorias as $categoria)

                <option value="{{ $categoria->id }}"

                    {{ old('slider_categoria_id',
                    $slider->slider_categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>

                    {{ $categoria->nombre }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="col-md-6 mb-3">

        <label>Estado</label>

        <select name="estado"
                class="form-control">

            <option value="1">Activo</option>

            <option value="0">Inactivo</option>

        </select>

    </div>

    {{-- IMAGEN --}}

    <div class="col-md-6 mb-3">

        <label>Imagen</label>

        <input type="file"
               name="imagen"
               class="form-control">

    </div>

    <div class="col-md-6 mb-3">

        @if(isset($slider) && $slider->imagen)

            <img src="{{ asset('uploads/sliders/'.$slider->imagen) }}"
                 width="150">

        @endif

    </div>

    {{-- SEO --}}

    <div class="col-md-12">
        <h5>SEO</h5>
    </div>

    <div class="col-md-12 mb-3">

        <label>Meta Title</label>

        <input type="text"
               name="meta_title"
               value="{{ old('meta_title', $slider->meta_title ?? '') }}"
               class="form-control">

    </div>

    <div class="col-md-12 mb-3">

        <label>Meta Description</label>

        <textarea name="meta_description"
                  class="form-control"
                  rows="3">{{ old('meta_description', $slider->meta_description ?? '') }}</textarea>

    </div>

    <div class="col-md-12 mb-3">

        <label>Meta Keywords</label>

        <input type="text"
               name="meta_keywords"
               value="{{ old('meta_keywords', $slider->meta_keywords ?? '') }}"
               class="form-control">

    </div>

    <div class="col-md-12">

        <button class="btn btn-success">

            Guardar Slider

        </button>

    </div>

</div>