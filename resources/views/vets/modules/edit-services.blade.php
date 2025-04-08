@extends('vets.layouts.main')

@section('page')
<div class="col-md-10">
    <h2 class="ps-4 pt-3 pb-3">Edit Service</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('update-service', $offer['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" name="offerTitle" class="form-control" value="{{ old('offerTitle', $offer['offerTitle']) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $offer['description']) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price ($)</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $offer['price']) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="isActive" class="form-control">
                <option value="1" {{ old('isActive', $offer['isActive']) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('isActive', $offer['isActive']) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-teal">Update Service</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
