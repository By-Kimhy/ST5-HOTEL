@extends('backend.layout.master')
@section('title', 'CreateRoom')
@section( 'content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('room.index')}}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-circle-left"></i> Back
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Room</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Room</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/room')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Room Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name...">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Room Type</label>
                        <select class="form-control" name="roomType_id">
                            <option value="1">Suite Room</option>
                            <option value="2">Family Room</option>
                            <option value="3">Deluxe Room</option>
                            <option value="4">Classic Room</option>
                            <option value="5">Superior Room</option>
                            <option value="6">Luxury Room</option>
                            <option value="7">MixRoom</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="room_status">
                            <option value="1">Free</option>
                            <option value="0">Booking</option>
                        </select>
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
