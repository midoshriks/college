@extends('layouts.header')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1 class="text-black">Blank Page</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="sub-bread"><i class="fa fa-angle-right"></i> Pages Table Admin</li>
                <li><i class="fa fa-angle-right"></i> Page Admin</li>
            </ol>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID #</th>
                            <th>Admin by</th>
                            <th>Cust.Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            @if (!Auth::guest())
                                @if (Auth::user()->email == 'Midoshriks@gmail.com')
                                    <th>Action</th>
                                @endif
                            @endif
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($table_admins as $k =>  $table_admin)
                        <tr>
                            <td>{{$k+ 1}}</td>
                            <td>
                                <img src="{{ asset('img_user/'.$table_admin->img)}}" class="img-circle img-w-30" alt="User Image"> <a href="#">{{$table_admin->name}}</a></td>
                                <td>{{$table_admin->email}}</td>
                                <td>Sed cursus dapibus diam</td>
                                <td><span class="label label-success">Activity</span></td>
                                @if (!Auth::guest())
                                    @if (Auth::user()->email == 'Midoshriks@gmail.com')
                                    <td>
                                        <a href="{{ $table_admin->id }}">
                                            <i class="fa fa-edit fa-2x (alias)"></i>
                                        </a>
                                        <a href="{{ $table_admin->id }}">
                                            <i class="fa  ti-trash fa-2x"></i>
                                        </a>
                                    </td>
                                    @endif
                                @endif
                                <td>{{$table_admin->created_at->format('d-m-Y')}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID #</th>
                            <th>Admin by</th>
                            <th>Cust.Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            @if (!Auth::guest())
                                @if (Auth::user()->email == 'Midoshriks@gmail.com')
                                    <th>Action</th>
                                @endif
                            @endif
                            <th>Date</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        <!-- Main content -->
        {{-- <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            This is some text within a card block.
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
