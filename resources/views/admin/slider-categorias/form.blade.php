{{-- resources/views/admin/slider-categorias/form.blade.php --}}

<div class="row">

    <div class="col-md-12 mb-3">

        <label>Nombre</label>

        <input type="text"
               name="nombre"
               value="{{ old('nombre', $categoria->nombre ?? '') }}"
               class="form-control">

    </div>

    <div class="col-md-6 mb-3">

        <label>Estado</label>

        <select name="estado"
                class="form-control">

            <option value="1"
                {{ old('estado', $categoria->estado ?? '') == 1 ? 'selected' : '' }}>

                Activo

            </option>

            <option value="0"
                {{ old('estado', $categoria->estado ?? '') == 0 ? 'selected' : '' }}>

                Inactivo

            </option>

        </select>

    </div>

    <div class="col-md-12">

        <button class="btn btn-success">

            Guardar Categoría

        </button>

    </div>

</div>