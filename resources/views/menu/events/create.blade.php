@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">{{ __('Add Event') }}</h1>

        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
                @endif

                <div class="card">

                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf

                        <div class="card-body col-lg-8">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Destination</span>
                                </div>
                                <select class="form-control @error('dest_id') is-invalid @enderror" name="dest_id" placeholder="{{ __('Destination ID') }}" onfocus='this.size=6;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                                    <option value="">--Select Destination--</option>
                                    @foreach ($destOption as $dest)
                                        <option value="{{ $dest->id }}">{{ $dest->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            @error('dest_id')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Name</span>
                                </div>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" required>
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
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" cols="50" placeholder="{{ __('Description') }}" required></textarea>
                            </div>
                            @error('description')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Duration</span>
                                </div>
                                <input type="number" name="duration" class="form-control @error('duration') is-invalid @enderror" placeholder="{{ __('Duration in minute') }}" required>
                            </div>
                            @error('duration')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection