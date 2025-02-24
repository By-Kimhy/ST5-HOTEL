@extends('backend.layout.master')
@section('title', 'CreateStaff')
@section( 'content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('staff.index')}}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-circle-left"></i> Back
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Staff</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Staff</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/staff')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Staff Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name...">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Contact <span class="text-danger">*</span></label>
                        <input type="text" name="staff_contact" value="{{old('staff_contact')}}" class="form-control" placeholder="Enter Contact...">
                        @error('staff_contact')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Shift</label>
                        <select class="form-control" name="staff_shift">
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Position</label>
                        <select class="form-control" name="position">
                            <option value="Admin">Admin</option>
                            <option value="IT">IT</option>
                            <option value="HR">HR</option>
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
