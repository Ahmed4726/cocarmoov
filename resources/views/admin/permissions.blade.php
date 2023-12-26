@extends('admin.admin_layout')
@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="mx-5 font-monospace">Permissions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Permissions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row mx-5 mb-5">
          <div class="col-md-12">
          <!-- general form elements -->
          <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-2">Add New</h3>
                <div class="text-right">
                <button type="submit" class="btn btn-primary text-dark text-bold" style="background-color: #FDCD02; border:none;">Roles</button>
                <button type="submit" class="btn btn-primary text-dark text-bold" style="background-color: #FDCD02; border:none;">Permissions</button>
                
              </div>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form>

                <!-- <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary text-dark" style="background-color: #FDCD02; border:none;">Submit</button>
                </div> -->
              </form>
            </div>
        </div>
    </div>
    </div>
            </div>
</div>
@endsection