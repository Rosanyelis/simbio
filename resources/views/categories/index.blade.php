@extends('layouts.app')
@section('title', 'Categorias')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6 mb-6">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="me-1">
                            <p class="text-heading mb-1">Categorias</p>
                            <div class="d-flex align-items-center">
                                <h4 id="total_categories" class="mb-1 me-2">0</h4>
                            </div>
                            <small class="mb-0">Total Categorias</small>
                        </div>
                        <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded-3">
                                <div class="ri-group-line ri-26px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users List Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-data table">
                <thead>
                    <tr>
                        <th>Categorias</th>
                        <th width="100px"></th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>

@endsection
@section('scripts')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('pagesjs/category.js') }}"></script>
@endsection
