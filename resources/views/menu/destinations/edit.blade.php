@extends('layouts.app')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">{{ __('Edit Destination') }}</h1>

        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
                @endif


                <div class="card">

                    <form action="{{ route('destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body col-lg-8">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Code</span>
                                </div>
                                <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" placeholder="{{ __('Code') }}" value="{{ $destination->kode }}" required>
                            </div>
                            @error('code')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Name</span>
                                </div>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" value="{{ $destination->name }}" required>
                            </div>
                            @error('name')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description</span>
                                </div>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" cols="50" placeholder="{{ __('Description') }}" required>{{ $destination->description }}</textarea>
                            </div>
                            @error('description')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Price</span>
                                </div>
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="{{ __('Price') }}" value="{{ $destination->price }}" required>
                            </div>
                            @error('price')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">City</span>
                                </div>
                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="{{ __('City') }}" value="{{ $destination->city }}" required>
                            </div>
                            @error('city')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Image</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="thumbnail" class="custom-file-input @error('image') is-invalid @enderror" required>
                                  <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            @error('image')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection