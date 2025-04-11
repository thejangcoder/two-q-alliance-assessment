@extends('layouts.app')

@section('title', 'Companies')

@section('content')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Companies</h5>
    </div>
    <div class="card-body">
        <a href="{{ route('companies.create') }}" class="btn btn-success"><i class="bi bi-plus-circle me-1"></i> Add Company</a>

        <div class="table-responsive pt-3">
            <table class="table table-hover table-striped">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($companies as $company)
                    <tr>
                        <td>{{ $loop->iteration + ($companies->currentPage() - 1) * $companies->perPage() }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>
                            @if($company->logo)
                            <img src="{{ asset('storage/' . $company->logo) }}" width="100" height="100" class="img-thumbnail" />
                            @endif
                        </td>
                        <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                        <td>
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-outline-primary">
                                <i class="bi bi-pencil-square me-1"></i> Edit
                            </a>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this company?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash3 me-1"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No companies found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $companies->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@endsection