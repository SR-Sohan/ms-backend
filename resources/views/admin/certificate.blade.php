@extends('layout.adminlayout')
@section('dcontent')
<div class="page_heading d-flex align-items-center justify-content-between w-100 mt-2 bg-secondary p-3 mb-5">
    <h1 class="text-white">Certificates</h1>
    <p class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#certificateModal">
        <i class="fa-solid fa-plus"></i>
    </p>
</div>
@include('admin.components.certificatelist')
@include('admin.components.certificatecreate')
@endsection