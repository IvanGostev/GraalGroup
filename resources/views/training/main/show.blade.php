@extends('training.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$thisLesson->title}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card-body">{!! $thisLesson->content !!}</div>
{{--                    <div class="form-group">--}}
{{--                        <a href="{{ $thisLesson->href->type == 'lesson' ? route('training.main.show', $course->id, $thisLesson->href->id) : route('training.main.create', $course->id, $thisLesson->href->id)}}" class="btn btn-primary">Следующий шаг</a>--}}
{{--                    </div>--}}
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- /.content -->
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
