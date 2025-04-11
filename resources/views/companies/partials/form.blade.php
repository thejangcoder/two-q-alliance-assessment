<div class="mb-3">
    <label for="name" class="form-label">Name *</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name', $company->name ?? '') }}" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email', $company->email ?? '') }}">
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="logo" class="form-label">Logo (min 100x100)</label>
    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
    @if(isset($company) && $company->logo)
        <img src="{{ asset('storage/' . $company->logo) }}" width="100" class="mt-2 rounded">
    @endif
    @error('logo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="website" class="form-label">Website</label>
    <input type="url" class="form-control @error('website') is-invalid @enderror" name="website"
        value="{{ old('website', $company->website ?? '') }}">
    @error('website')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
