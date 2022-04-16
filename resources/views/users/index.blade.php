@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="fw-bold mt-3">Users Data Table</div>

            <div class="mt-4">
                @livewire('users-table')
            </div>
        </div>
    </div>
@endsection
