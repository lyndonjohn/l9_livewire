@extends('layout')

@section('page-css')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="fw-bold mt-3">Create User</div>

            <div class="mt-4">
                @livewire('create-user-form')
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('swal:modal', event => {
            Swal.fire({
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
            });
        });
    </script>
@endsection

