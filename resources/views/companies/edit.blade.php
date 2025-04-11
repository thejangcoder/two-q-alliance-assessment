@extends('layouts.app')

@section('title', 'Edit Company')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Edit Company</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('companies.partials.form')

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection