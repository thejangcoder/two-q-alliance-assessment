@extends('layouts.app')

@section('title', 'Create Company')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Create Company</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
            @csrf

            @include('companies.partials.form')

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection