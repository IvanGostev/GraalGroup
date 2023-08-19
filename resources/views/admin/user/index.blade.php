@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

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
                    <div class="col-12">
                        <h3>Пользователи</h3>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary btn-lg mb-3">
                            <ya-tr-span data-index="118-0" data-translated="false" data-source-lang="en"
                                        data-target-lang="ru" data-value="Primary" data-translation="Первичный"
                                        data-ch="1" data-type="trSpan">Создать
                            </ya-tr-span>
                        </a>
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>
                                    <ya-tr-span data-index="141-0" data-translated="false" data-source-lang="en"
                                                data-target-lang="ru" data-value="ID" data-translation="ID" data-ch="0"
                                                data-type="trSpan">ID
                                    </ya-tr-span>
                                </th>
                                <th>
                                    <ya-tr-span data-index="142-0" data-translated="false" data-source-lang="en"
                                                data-target-lang="ru" data-value="User" data-translation="Пользователь"
                                                data-ch="0" data-type="trSpan">Имя
                                    </ya-tr-span>
                                </th>
                                <th>
                                    <ya-tr-span data-index="142-0" data-translated="false" data-source-lang="en"
                                                data-target-lang="ru" data-value="User" data-translation="Пользователь"
                                                data-ch="0" data-type="trSpan">Роль
                                    </ya-tr-span>
                                </th>
                                <th>
                                    <ya-tr-span data-index="142-0" data-translated="false" data-source-lang="en"
                                                data-target-lang="ru" data-value="User" data-translation="Пользователь"
                                                data-ch="0" data-type="trSpan">Email
                                    </ya-tr-span>
                                </th>
                                <th>Действия</th>
                                <th>Редактирование</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nickname }}</td>
                                    <td>{{$user->role == 0 ? 'Пользователь' : 'Админ' }}</td>
                                    <td>{{$user->email }}</td>
                                    <td><a href="{{ route('admin.user.show', $user->id )}}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                    <td><a href="{{ route('admin.user.edit', $user->id )}}"
                                           class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.user.destroy', $user->id)}}" method="Post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-danger bg-transparent border-0">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
