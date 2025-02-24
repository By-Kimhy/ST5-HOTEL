@extends('backend.layout.master')
@section('title', 'CreateRoomType')
@section( 'content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('roomType.index')}}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-circle-left"></i> Back
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Room Type</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Room Type</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/roomType')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Room Type <span class="text-danger">*</span></label>
                        <input type="text" name="roomType_name" value="{{old('roomType_name')}}" class="form-control" placeholder="Enter Room Type...">
                        @error('roomType_name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description <span class="text-danger">*</span></label>
                        <input type="text" name="roomType_Description" value="{{old('roomType_Description')}}" class="form-control" placeholder="Enter Room Type Description...">
                        @error('roomType_Description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Bed <span class="text-danger">*</span></label>
                        <input type="text" name="roomType_bed" value="{{old('roomType_bed')}}" class="form-control" placeholder="Enter How many Bed...">
                        @error('roomType_bed')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Capacity <span class="text-danger">*</span></label>
                        <input type="text" name="roomType_Capacity" value="{{old('roomType_Capacity')}}" class="form-control" placeholder="Enter People Capacity...">
                        @error('roomType_Capacity')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Price <span class="text-danger">*</span></label>
                        <input type="text" name="roomType_price" value="{{old('roomType_price')}}" class="form-control" placeholder="Enter Price...">
                        @error('roomType_price')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
