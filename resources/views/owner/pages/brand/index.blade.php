@extends('owner.layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Brands</h1>
                <div class="section-header-button">
                    <a href="{{ route('owner.brand.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Brands</a></div>
                    <div class="breadcrumb-item">All Brand</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">List Brand</h2>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">
                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Logo</th>
                                                <th>Banner</th>
                                                <th>Site Url</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($brands as $brand)
                                                <tr>
                                                    <td>{{ $brand->name }}</td>
                                                    <td>{{ $brand->logo_picture }}</td>
                                                    <td>{{ $brand->banner_picture }}</td>
                                                    <td>{{ $brand->url }}</td>
                                                    <td>
                                                        <a href="{{ route('owner.product.edit', $brand->id) }}"
                                                            class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                        <a href="{{ route('owner.product.destroy', $brand->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onClick="return confirm('{{ __('Are you sure?') }}')"><i
                                                                class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
