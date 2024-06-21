@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Amenity</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('amenity.index') }}">Amenity list</a></li>
                    <li class="breadcrumb-item active">Create Amenity</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Create Amenity</h3>
                            <a href="{{ route('amenity.index') }}" class="btn btn-primary">Go Back to Amenity List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('amenity.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="property_id">Amenity Property</label>
                                                    <select name="property_id" id="property_id" class="form-control">
                                                        <option value="" style="display: none" selected>Select Property</option>
                                                        @foreach($properties as $p)
                                                        <option value="{{ $p->id }}"> {{ $p->title }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="amenity_image">Amenity Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="amenity_image" class="custom-file-input" id="amenity_image">
                                                        <label class="custom-file-label" for="amenity_image">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sub_heading_text">Amenity Sub-Heading Text</label>
                                                    <input type="name" name="heading_text" value="{{ old('heading_text') }}" class="form-control" placeholder="Enter Amenity Sub Heading Text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sub_heading_text">Amenity Sub-Heading Text</label>
                                                    <input type="name" name="sub_heading_text" value="{{ old('sub_heading_text') }}" class="form-control" placeholder="Enter Amenity Sub Heading Text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection