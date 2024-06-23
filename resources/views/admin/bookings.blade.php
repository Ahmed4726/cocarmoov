@extends('admin.admin_layout')
@section('content')
@php
    $role = auth()->user()->user_type;
@endphp
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 font-monospace">Bookings</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-5">
                    <!-- Left col -->
                    <section class="col-lg-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <ul class="nav nav-pills mb-2">
                            <li class="nav-item{{ Request::is('#in-progress') ? ' active' : '' }}  mx-2">
                                <a class="nav-link active{{ Request::is('#in-progress') ? ' active' : '' }}"
                                    href="#in-progress" data-toggle="tab">In Progress</a>
                            </li>
                            <li class="nav-item{{ Request::is('#history') ? ' active' : '' }}">
                                <a class="nav-link{{ Request::is('#history') ? ' active' : '' }}" href="#history"
                                    data-toggle="tab">History</a>
                            </li>
                        </ul>
                        <div class="tab-content p-0">
                            <!-- In Progress Tab -->
                            <div class="tab-pane active{{ Request::is('#in-progress') ? ' active' : '' }}"
                                id="in-progress">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mt-2">Bookings in Progress</h3>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        @if ($inProgressBookings->count() > 0)
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Pick Up Address</th>
                                                        <th>Drop Location</th>
                                                        <th>Status</th>
                                                        @if ($role == '6' || $role == '7' || $role == '8') <th>Actions</th>@endif
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($inProgressBookings as $booking)
                                                        <tr>
                                                            <td>{{ $booking->id }}</td>
                                                            <td>{{ $booking->pick_up_address }}</td>
                                                            <td>{{ $booking->drop_location }}</td>
                                                            <td>{{ $booking->status == 'On-Move' ? 'Picked-Up' : $booking->status }}</td>

                                                            <td>

                                                                    @if ($role == '6' || $role == '7' || $role == '8') {
                                                                        @if ($booking->status == 'Booked')
                                                                        <a href="{{ url('/pick-up-car/' . $booking->car_id) }}"class="btn btn-primary">Pick Up</a>
                                                                            @else
                                                                            <a href="{{ url('/deliver-a-car/' . $booking->car_id) }}"
                                                                                class="btn btn-primary">Deliver</a>
                                                                                @endif
                                                                    }
                                                                    @endif



                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <p>No bookings in progress.</p>
                                        @endif
                                    </div><!-- /.card-body -->
                                </div>
                            </div>

                            <!-- History Tab -->
                            <div class="tab-pane{{ Request::is('#history') ? ' active' : '' }}" id="history">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mt-2">Booking History</h3>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        @if ($historyBookings->count() > 0)
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Pick Up Address</th>
                                                        <th>Drop Location</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($historyBookings as $booking)
                                                        <tr>
                                                            <td>{{ $booking->id }}</td>
                                                            <td>{{ $booking->pick_up_address }}</td>
                                                            <td>{{ $booking->drop_location }}</td>
                                                            <td>{{ $booking->status }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <p>No booking history.</p>
                                        @endif
                                    </div><!-- /.card-body -->
                                </div>
                            </div>

                        </div><!-- /.tab-content -->
                    </section>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div><!-- /.content-wrapper -->
</div><!-- /.wrapper -->
@endsection
