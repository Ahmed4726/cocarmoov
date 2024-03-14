@extends('admin.admin_layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pending Profiles</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-5">
                <!-- Left col -->
                <div class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">
                            Pending Profiles
                            </h3>
                        </div>

                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <th scope='col'>id</th>
                                    <th scope='col'>Name</th>
                                    <th scope='col'>E-mail</th>
                                    <th scope='col'>Status</th>
                                    <th scope='col'>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($pending_profiles as $pending_profile)
                                        <tr>
                                            <td>{{ $pending_profile->id }}</td>
                                            <td>{{ $pending_profile->family_name }}</td>
                                            <td>{{ $pending_profile->email }}</td>
                                            <td>{{ $pending_profile->status }}</td>
                                            <td>
                                                <a href="{{ route('profile.pending.details', ['id' => $pending_profile->id]) }}" class="btn btn-primary btn-sm">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{-- {{ $alerts->links() }} --}}
                            </div><!-- /.card-body -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
