@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Gallery</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery list</a></li>
                    <li class="breadcrumb-item active">Edit Gallery</li>
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
                            <h3 class="card-title">Edit Gallery - {{ $gallery->title }}</h3>
                            <a href="{{ route('gallery.index') }}" class="btn btn-primary">Go Back to Gallery List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('gallery.update', [$gallery->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="property_id">Gallery Property</label>
                                            
                                            <select name="property_id" id="property_id" class="form-control">
                                                <option value="" style="display: none" selected>Select Property</option>
                                                @foreach($properties as $p)
                                                <option value="{{ $p->id }}" @if($gallery->property_id == $p->id) selected @endif> {{ $p->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="gallery_image">Gallery Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="gallery_image" class="custom-file-input" id="gallery_image">
                                                <label class="custom-file-label" for="gallery_image">Choose file</label>
                                            </div>
                                            <div class="col-4 text-right">
                                                <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                    <img src="{{ asset('images/gallery_images/'.$gallery->gallery_image) }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="gallery_thumbnail_image">Gallery Thumbnail Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="gallery_thumbnail_image" class="custom-file-input" id="gallery_thumbnail_image">
                                                <label class="custom-file-label" for="gallery_thumbnail_image">Choose file</label>
                                            </div>
                                            <div class="col-4 text-right">
                                                <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                    <img src="{{ asset('images/gallery_thumbnail_images/'.$gallery->gallery_thumbnail_image) }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox checkbox-lg">
                                                  <input type="checkbox" class="custom-control-input" id="is_mix" name="is_mix" {{ $gallery->is_mix == 1 ? 'checked':'' }} >
                                                  <label class="custom-control-label" for="is_mix">Mix</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox checkbox-lg">
                                                  <input type="checkbox" class="custom-control-input" id="is_ext" name="is_ext" {{ $gallery->is_ext == 1 ? 'checked':'' }}>
                                                  <label class="custom-control-label" for="is_ext">Exterior</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox checkbox-lg">
                                                  <input type="checkbox" class="custom-control-input" id="is_int" name="is_int" {{ $gallery->is_int == 1 ? 'checked':'' }}>
                                                  <label class="custom-control-label" for="is_int">Interior</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox checkbox-lg">
                                                  <input type="checkbox" class="custom-control-input" id="is_amenity" name="is_amenity" {{ $gallery->is_amenity == '1' ? 'checked':'' }}>
                                                  <label class="custom-control-label" for="is_amenity">Amenity </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Gallery</button>
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