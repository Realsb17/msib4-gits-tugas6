@extends('layouts.dashboard')
@section('title')
Category
@endsection

@push('after-style')
@livewireStyles
@endpush

@section('content')
<h1 class="mb-3">Category</h1>
    <div class="row mb-4">
        <div class="col-md-8">
            @livewire('category-form')
        </div>

    </div>
@endsection

@push('before-script')
@livewireScripts
@endpush
