@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <h3>User</h3>
                        <a href="{{ route('admin.user.edit', $user->id )}}"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form action="{{route('admin.user.destroy', $user->id)}}" method="Post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-danger bg-transparent border-0">
                                <i class="fas fa-trash text-danger"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr>
                                <td>Nickname</td>
                                <td>{{$user->nickname}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
