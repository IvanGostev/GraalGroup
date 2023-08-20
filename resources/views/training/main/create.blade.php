@extends('training.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$thisHometask->title}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card-body">{!! $thisHometask->content !!}</div>
                {{--                    <div class="form-group">--}}
                {{--                        <a href="{{ $thisHometask->href->type == 'lesson' ? route('training.main.show', $course->id, $thisHometask->href->id) : route('training.main.create', $course->id, $thisHometask->href->id)}}" class="btn btn-primary">Следующий шаг</a>--}}
                {{--                    </div>--}}
                @if($thisHometask->statusHometask != null)
                    @if($thisHometask->statusHometask->comment != null)
                        <h5>Ответ преподавателя</h5>
                        <div class="card-body">{!! $thisHometask->statusHometask->comment !!}</div>
                    @endif
                @endif

            </div><!-- /.container-fluid -->
            <form action=" {{ route('training.main.store') }}" method="post">
                @csrf

                <div class="form-group mt-3">
                                <textarea class="form-control" name="content" rows="5" placeholder="Решение"
                                          required>{{ $thisHometask->statusHometask ? $thisHometask->statusHometask->content : ''}}</textarea>
                </div>
                <input hidden="hidden" name="course_id" value="{{$course->id}}">
                <input hidden="hidden" name="hometask_id" value="{{$thisHometask->id}}">
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Оправить на проверку</button>
                </div>
            </form>
            <br>
            <br>
        </section>

    </div>

    <script>
        $('#summernote').summernote({

            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

@endsection
