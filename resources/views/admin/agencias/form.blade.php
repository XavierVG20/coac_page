{{-- resources/views/admin/agencias/form.blade.php --}}

<div class="row">

    <div class="col-md-6 mb-3">
        <label>Nombre</label>
        <input type="text"
               name="nombre"
               value="{{ old('nombre', $agencia->nombre ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Ciudad</label>
        <input type="text"
               name="ciudad"
               value="{{ old('ciudad', $agencia->ciudad ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-12 mb-3">
        <label>Dirección</label>

        <textarea name="direccion"
                  class="form-control"
                  rows="3">{{ old('direccion', $agencia->direccion ?? '') }}</textarea>
    </div>

    <div class="col-md-4 mb-3">
        <label>Teléfono</label>

        <input type="text"
               name="telefono"
               value="{{ old('telefono', $agencia->telefono ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label>Correo</label>

        <input type="email"
               name="correo"
               value="{{ old('correo', $agencia->correo ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label>Horario</label>

        <input type="text"
               name="horario"
               value="{{ old('horario', $agencia->horario ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Socios</label>

        <input type="number"
               name="socios"
               value="{{ old('socios', $agencia->socios ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Créditos</label>

        <input type="number"
               name="creditos"
               value="{{ old('creditos', $agencia->creditos ?? '') }}"
               class="form-control">
    </div>

    <div class="col-md-6 mb-3">

        <label>Imagen</label>

        <input type="file"
               name="imagen"
               class="form-control">

    </div>

    <div class="col-md-6 mb-3">

        @if(isset($agencia) && $agencia->imagen)

            <img src="{{ asset('uploads/agencias/'.$agencia->imagen) }}"
                 width="120">

        @endif

    </div>

    <div class="col-md-12 mb-3">

        <label>Mapa Google</label>

        <textarea name="mapa_google"
                  class="form-control"
                  rows="3">{{ old('mapa_google', $agencia->mapa_google ?? '') }}</textarea>

    </div>

    <div class="col-md-12">
        <h4>SEO</h4>
    </div>

    <div class="col-md-12 mb-3">

        <label>Meta Title</label>

        <input type="text"
               name="meta_title"
               value="{{ old('meta_title', $agencia->meta_title ?? '') }}"
               class="form-control">

    </div>

    <div class="col-md-12 mb-3">

        <label>Meta Description</label>

        <textarea name="meta_description"
                  class="form-control"
                  rows="3">{{ old('meta_description', $agencia->meta_description ?? '') }}</textarea>

    </div>

    <div class="col-md-12 mb-3">

        <label>Meta Keywords</label>

        <input type="text"
               name="meta_keywords"
               value="{{ old('meta_keywords', $agencia->meta_keywords ?? '') }}"
               class="form-control">

    </div>

    <div class="col-md-4 mb-3">

        <label>Estado</label>

        <select name="estado"
                class="form-control">

            <option value="1">Activo</option>
            <option value="0">Inactivo</option>

        </select>

    </div>

    <div class="col-md-12">

        <button class="btn btn-success">
            Guardar Agencia
        </button>

    </div>

</div>