@extends('vets.layouts.main')
@section('page')
 <!-- Content Section -->
 <div class="col-md-9">
    <h1 class="ps-4 pt-3 pb-3">Veterinary Dashboard</h1>
    <div class="profile-container">
        <div id="clinic-info" class="clinic-tab-content active">
            <h3 class="mb-3">Manage My Services</h3>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('update-clinic-info') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Clinic Name</label>
                        <input type="text" class="form-control" name="clinicName" placeholder="Enter Clinic Name"
                            value="{{ Session::get('user')['clinic_name'] ?? '' }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-teal">Save Changes</button>
            </form>
        </div>
        <div id="services-info" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Manage My Services</h3>
             <!-- Error Messages -->
             @if (session('error'))
             <div class="alert alert-danger">{{ session('error') }}</div>
         @endif

         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif

         @if (session('success'))
             <div class="alert alert-success">{{ session('success') }}</div>
         @endif
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">My Services</h5>
                <button class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#addServiceModal">+ Add Service</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clinicOffers['data'] ?? [] as $index => $offer)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $offer['offerTitle'] ?? 'N/A' }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($offer['description'] ?? 'N/A', 20, '...') }}</td>
                                <td>${{ number_format($offer['price'] ?? 0, 2) }}</td>
                                <td>
                                    @if (!empty($offer['isActive']) && $offer['isActive'] == '1')
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-teal edit-service" href="{{ route('get-editservicepage', $offer['offerId']) }}">Edit</a>
                                    <a class="btn btn-teal delete-service" href="#">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No services available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Service Modal --}}
        <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addServiceModalLabel">Add Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add-service') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @elseif(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <input type="hidden" name="clinicId" value="{{ old('clinicId', $id ?? '') }}">
                            <div class="mb-3">
                                <label class="form-label">Service Name</label>
                                <input type="text" name="offerTitle" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price ($)</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="isActive" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-teal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="staff-info" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Notifications</h3>
            <p>Manage your notification preferences here.</p>
        </div>
        <div id="donation-info" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Become a Vet</h3>
            <p>Apply to become a vet by filling out the required information.</p>
        </div>
        <div id="account-info" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Manage Ads</h3>
            <p>Manage and edit your posted ads here.</p>
        </div>
        <div id="report-case" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Report a Case</h3>
            <p>Report any issues related to pet adoption.</p>
        </div>
        <div id="adoption-policy" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Adoption Policy</h3>
            <p>Read the adoption policy before applying for pet adoption.</p>
        </div>
        <div id="terms" class="clinic-tab-content" style="display: none;">
            <h3 class="mb-3">Terms & Conditions</h3>
            <p>Make sure to read the terms and conditions before using the platform.</p>
        </div>
    </div>
</div>

@endsection
