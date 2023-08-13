@extends('teach.lesson.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование урока</h1>
                        <form action="{{ route('teach.lessons.destroy', $thisLesson->id) }}" method="Post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-danger bg-transparent border-0">
                                Delete
                            </button>
                        </form>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <form action="{{ route('teach.lessons.update', $thisLesson->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control" name="title"
                               placeholder="Названия поста" value="{{ old('title') ?? $thisLesson->title}}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="text" name="course_id" hidden="hidden" value="{{$course->id}}">
                    <div class="form-group">
                        <textarea id="summernote" name="content">{{$thisLesson->content}}</textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input name="id"
                       hidden="hidden"    value="{{ $thisLesson->id }}">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
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