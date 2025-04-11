@extends('layouts.app')

@section('title', 'Create Company')

@section('content')
<h2>Create Company</h2>

<form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
    @csrf

    @include('companies.partials.form')

    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
