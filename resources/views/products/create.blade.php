@extends('layouts.app')
@section('title', 'Productos - Crear')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Nuevo Producto</h5>

                        <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary"
                        ><i class="ri-arrow-left-line me-1"></i> Regresar</a>
                    </div>
                    <!-- <h5 class="card-header">Crear Categoría</h5> -->

                    <div class="card-body">
                        <form id="formCategory" class="needs-validation" action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="mb-6 col-md-8">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="name"
                                            name="descripcion"
                                            class="form-control"
                                            placeholder="Ingrese nombre de nombre del producto"
                                            value="{{ old('name') }}"
                                        />
                                        <label for="code">Producto</label>
                                         @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <select id="categories_id" name="categories_id" class="form-select select2"
                                            placeholder="Selecione una categoria">
                                            <option value="">-- Seleccionar --</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('categories_id') == $category->id ? selected : '' }} >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="categories_id">Categoria</label>
                                        @if($errors->has('categories_id'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('categories_id') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                 <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="ficha"
                                            name="ficha"
                                            class="form-control @if($errors->has('ficha')) is-invalid @endif"
                                            placeholder="Ingrese la ficha tecnica"
                                            value="{{ old('ficha') }}"
                                        />
                                        <label for="code">Correo</label>
                                        @if($errors->has('ficha'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ficha') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                 <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="composicion"
                                            name="composicion"
                                            class="form-control @if($errors->has('composicion')) is-invalid @endif"
                                            placeholder="Ingrese la composicion"
                                            value="{{ old('composicion') }}"
                                        />
                                        <label for="code">Correo</label>
                                        @if($errors->has('composicion'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('composicion') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="mecanismo"
                                            name="mecanismo"
                                            class="form-control @if($errors->has('mecanismo')) is-invalid @endif"
                                            placeholder="Ingrese mecanismo de accion"
                                            value="{{ old('mecanismo') }}"
                                        />
                                        <label for="code">Correo</label>
                                        @if($errors->has('mecanismo'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('mecanismo') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="presentacion"
                                            name="presentacion"
                                            class="form-control @if($errors->has('presentacion')) is-invalid @endif"
                                            placeholder="Ingrese la presentacion"
                                            value="{{ old('presentacion') }}"
                                        />
                                        <label for="code">Correo</label>
                                        @if($errors->has('presentacion'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('presentacion') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                 <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="uso"
                                            name="uso"
                                            class="form-control @if($errors->has('uso')) is-invalid @endif"
                                            placeholder="Ingrese el cuadro de uso"
                                            value="{{ old('uso') }}"
                                        />
                                        <label for="code">Correo</label>
                                        @if($errors->has('uso'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('uso') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>



                            </div>
                            <div class="row justify-content-end">
                                <div class="mb-3 col-md-1">
                                    <button type="submit" class="btn btn-primary float-end">
                                        <i class="ri-save-2-line me-1"></i>
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
