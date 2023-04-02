@extends('layouts.dashboard')
@section('title')
    User Edit
@endsection
@push('before-style')
    @livewireStyles
@endpush


@section('content')
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('dashboard.user') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                @livewire('user-edit',['user'=>$user_edit])
            </div>
        </div>
    </div>
@endsection
@push('after-script')
    @livewireScripts
@endpush
