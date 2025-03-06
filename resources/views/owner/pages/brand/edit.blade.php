@extends('owner.layouts.app')

@section('title', 'Create New Product')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ URL::previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Post</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Brands</a></div>
                    <div class="breadcrumb-item">Create New Brand</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create New Brand</h2>
                <p class="section-lead">
                    On this page you can create a new brand and fill in all fields.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Brands</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                    @endif
                                </div>
                                <form action="{{ route('owner.brand.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Url
                                            Slug</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" id="url" name="url"
                                                value="{{ old('url') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo
                                            Picture</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview1" class="image-preview">
                                                <label for="logo_picture" class="image-label">Choose File</label>
                                                <input type="file" name="logo_picture" id="logo_picture" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo Picture
                                            2</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview2" class="image-preview">
                                                <label for="image-upload" class="image-label">Choose File</label>
                                                <input type="file" name="logo_picture2" id="logo_picture2" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner
                                            Picture</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview3" class="image-preview">
                                                <label for="image-upload" class="image-label">Choose File</label>
                                                <input type="file" name="banner_picture" id="banner_picture" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Background
                                            Logo
                                            Picture</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" id="input_bg_logo_picture"
                                                name="input_bg_logo_picture" value="{{ old('input_bg_logo_picture') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Owner ?</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" id="is_own" name="is_own">
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Create Brand</button>
                                        </div>
                                    </div>
                                </form>
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
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>

    <script>
        $.uploadPreview({
            input_field: "#logo_picture", // Default: .image-upload
            preview_box: "#image-preview1", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null, // Default: null
        });

        $.uploadPreview({
            input_field: "#logo_picture2", // Default: .image-upload
            preview_box: "#image-preview2", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null, // Default: null
        });

        $.uploadPreview({
            input_field: "#banner_picture", // Default: .image-upload
            preview_box: "#image-preview3", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null, // Default: null
        });
    </script>
@endpush
