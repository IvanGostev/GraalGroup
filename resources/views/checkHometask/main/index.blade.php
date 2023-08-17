@extends('checkHometask.layouts.main')
@section('content')

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row m-5" >
                    <div class="col-12">
                        <h3>Домашние задания</h3>
                    </div>
                    <div class="col-6">

                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>
                                    <ya-tr-span data-index="142-0" data-translated="false" data-source-lang="en"
                                                data-target-lang="ru" data-value="User" data-translation="Пользователь"
                                                data-ch="0" data-type="trSpan">ID
                                    </ya-tr-span>
                                </th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hometasks as $hometask)
                                <tr>
                                    <td>{{$hometask->id}}</td>
                                    <td><a href="{{ route('checkHometask.main.create', [$course->id, $hometask->id])}}">
                                            Проверить
                                        </a>
                                    </td>
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
