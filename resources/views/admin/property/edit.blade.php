@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Property</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('property.index') }}">Property list</a></li>
                    <li class="breadcrumb-item active">Edit Property</li>
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
                            <h3 class="card-title">Edit Property - {{ $property->title }}</h3>
                            <a href="{{ route('property.index') }}" class="btn btn-primary">Go Back to Property List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="{{ route('property.update', [$property->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf 
                                        @method('PUT')
                                        @include('includes.errors')
                                        

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="title">Property title</label>
                                                    <input type="name" name="title" value="{{ $property->title }}" class="form-control" placeholder="Enter title">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="no_of_beds">No of Beds</label>
                                                    <input type="text" name="no_of_beds" value="{{ $property->no_of_beds }}" class="form-control" placeholder="Enter No of Beds">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="price">Property Start Price</label>
                                                    <input type="text" name="price" value="{{ $property->price }}" class="form-control" placeholder="Enter Property Start Price">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="payment_construction">During Construction</label>
                                                    <input type="text" name="payment_construction" value="{{ $property->payment_construction }}" class="form-control" placeholder="Enter Payment During Construction">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="payment_handover">After Handover</label>
                                                    <input type="text" name="payment_handover" value="{{ $property->payment_handover }}" class="form-control" placeholder="Enter Payment After Handover">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox checkbox-lg">
                                                  <input type="checkbox" class="custom-control-input" id="is_show" name="is_show" {{ $property->is_show == 1 ? 'checked':'' }} >
                                                  <label class="custom-control-label" for="is_show">Show Property Page</label>
                                                </div>
                                            </div>
                                            
                                        </div>


                                        <div class="row">
                                            <div class="col-md-3">
                                               <div class="form-group">
                                                    <label for="thumbnail_image">Thumbnail Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="thumbnail_image" class="custom-file-input" id="thumbnail_image">
                                                        <label class="custom-file-label" for="thumbnail_image">Choose file</label>
                                                    </div>
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset('images/thumbnail_images/'.$property->thumbnail_image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-3">
                                               <div class="form-group">
                                                    <label for="carousel_image">Carousel Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="carousel_image" class="custom-file-input" id="carousel_image">
                                                        <label class="custom-file-label" for="carousel_image">Choose file</label>
                                                    </div>
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset('images/carousel_images/'.$property->carousel_image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-3">
                                               <div class="form-group">
                                                    <label for="carousel_image_mobile">Carousel Mobile Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="carousel_image_mobile" class="custom-file-input" id="carousel_image_mobile">
                                                        <label class="custom-file-label" for="carousel_image_mobile">Choose file</label>
                                                    </div>
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset('images/carousel_image_mobiles/'.$property->carousel_image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div> 
                                            </div>

                                            <div class="col-md-3">
                                               <div class="form-group">
                                                    <label for="preview_image">Preview Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="preview_image" class="custom-file-input" id="preview_image">
                                                        <label class="custom-file-label" for="preview_image">Choose file</label>
                                                    </div>
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset('images/preview_images/'.$property->preview_image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div> 
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="property_video">Video</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="property_video" class="custom-file-input" id="property_video">
                                                        <label class="custom-file-label" for="property_video">Choose file</label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="brochure_pdf">Brochure</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="brochure_pdf" class="custom-file-input" id="brochure_pdf">
                                                        <label class="custom-file-label" for="brochure_pdf">Choose file</label>
                                                    </div>
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                                
                                                        {{$property->brochure_pdf}}
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="floorplan_pdf">Floor Plan</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="floorplan_pdf" class="custom-file-input" id="floorplan_pdf">
                                                        <label class="custom-file-label" for="floorplan_pdf">Choose file</label>
                                                    </div>
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                                
                                                        {{$property->floorplan_pdf}}
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="description" rows="4" class="form-control"
                                                        placeholder="Enter Description">{{ $property->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="short_description">Short Description</label>
                                                    <textarea name="short_description" id="short_description" rows="4" class="form-control" placeholder="Enter Short Description">{{ $property->short_description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="meta_title">Meta Title</label>
                                                    <textarea name="meta_title" id="meta_title" rows="4" class="form-control" placeholder="Enter Meta Title">{{ $property->meta_title }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="meta_description">Meta Description</label>
                                                    <textarea name="meta_description" id="meta_description" rows="4" class="form-control" placeholder="Enter Meta Description">{{ $property->meta_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Property</button>
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
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/admin/css/summernote-bs4.min.css') }}">
    
@endsection

@section('script')
    <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Enter Description',
            tabsize: 2,
            height: 300
        });
    </script>
  

  
@endsection