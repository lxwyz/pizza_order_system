@extends('admin.layouts.app')

@section('title', 'Shop Details')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Shop Details Card -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-white text-white">
                            <h4 class="mb-0">Shop Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <!-- Shop Image -->
                                    <img src="{{ asset('storage/' . $shop->image) }}" alt="Shop Image" class="img-thumbnail shadow-sm w-100" style="max-width: 200px;">
                                </div>
                                <div class="col-md-8">
                                    <!-- Shop Details -->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <strong>Name: </strong> {{ $shop->name }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Email: </strong> {{ $shop->email }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Address: </strong> {{ $shop->address }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Phone: </strong> {{ $shop->phone }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Gender: </strong> {{ $shop->gender }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('shop#list') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back to List
                                </a>
                                <div>

                                    <form action="{{ route('shop#destroy', $shop->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this shop?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Delete Shop
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Shop Details Card -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
