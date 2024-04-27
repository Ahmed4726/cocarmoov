@extends('admin.admin_layout')
@section('content')

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-monospace">Pick Up a Car</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- Form for uploading photos -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pick Up Car</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('confirm') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $car->mission_id }}">
                <input type="hidden" name="car_id" value="{{ $car->car_id }}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="front_photos">Front-side Photos</label>
                        <div id="frontPhotoPreview"></div>
                        <img src="{{ asset(str_replace(' ', '%20', $car->front_photos)) }}" alt="">
                        <!-- Placeholder for front-side photos -->
                    </div>
                    <div class="form-group">
                        <label for="back_photos">Back-side Photos</label>
                        <div id="backPhotoPreview"></div>
                        <img src="{{ asset(str_replace(' ', '%20', $car->back_photos)) }}" alt="">
                    </div>

                    {{-- <input type="file" class="form-control-file" id="back_photos" name="back_photos" multiple> --}}
                    <!-- Placeholder for back-side photos -->

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Confirm Delivery</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <br>
          <br>
          <br>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div><!-- /.content-wrapper -->
</div><!-- /.wrapper -->

<!-- JavaScript to display uploaded photos -->
<script>
  // Function to display uploaded photos
  function displayPhotos(input, previewElement) {
    if (input.files && input.files.length > 0) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var imageElement = document.createElement("img");
        imageElement.src = e.target.result;
        imageElement.style.maxWidth = "200px"; // Adjust width as needed
        previewElement.appendChild(imageElement);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  // Front-side photo input change event
  document.getElementById('front_photos').addEventListener('change', function() {
    var preview = document.getElementById('frontPhotoPreview');
    preview.innerHTML = ''; // Clear previous preview
    displayPhotos(this, preview);
  });

  // Back-side photo input change event
  document.getElementById('back_photos').addEventListener('change', function() {
    var preview = document.getElementById('backPhotoPreview');
    preview.innerHTML = ''; // Clear previous preview
    displayPhotos(this, preview);
  });
</script>

@endsection
