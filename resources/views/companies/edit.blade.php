@extends('layouts.app')

@section('title', 'Edit Company')

@section('content')
<h2>Edit Company</h2>

<form method="POST" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('companies.partials.form')

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
