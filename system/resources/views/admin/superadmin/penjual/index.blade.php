@extends('template.base')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">User</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">User</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                    <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                    <span class="" id="Select_date">Jan 11</span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i data-feather="download" class="align-self-center icon-xs"></i>
                                </a>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Datatable</h4>
                            
                            <a href="{{url('admin/penjual')}}/create" class="btn btn-primary float-right mt-0"> <span class="fa fa-plus"></span>Tambah</a>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Toko</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($list_penjual as $penjual)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url("admin/penjual/$penjual->id")}}" class="btn btn-info"><span class="fa fa-info"></span>Lihat</a>
                                                <a href="{{url("admin/penjual/$penjual->id")}}/edit" class="btn btn-warning"><span class="fa fa-edit"></span>Edit</a>
                                                @include('template.utils.delete', ['url' =>url("admin/penjual/$penjual->id") ])
                                            </div>
                                        </td>
                                        <td>{{$penjual->nama_toko}}</td>
                                        <td>{{$penjual->nama}}</td>
                                        <td>{{$penjual->jenis_kelamin_string}}</td>
                                        <td>{{$penjual->email}}</td>
                                        
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
