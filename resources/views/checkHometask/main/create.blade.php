@extends('checkHometask.layouts.main')
@section('content')

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{$hometask->title}}</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body " style="margin: 0 20%">
                        <!-- post text -->
                        <p style="margin: 5%">{!! $hometask->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Small boxes (Stat box) -->

        <form action=" {{ route('checkHometask.main.store') }}" method="post">
            @csrf
            <div class="form-group" style="margin: 2% 10% 2% 10%">
                <label>Статус</label>
                <select name="status" class="form-control">
                    <option value=2>Вернуть на доработку</option>
                    <option value=3>Принять</option>
                </select>
            </div>
            <div class="form-group mt-3" style="margin: 2% 10% 2% 10%">
                                <textarea class="form-control" name="content" rows="8"
                                          placeholder="Коментарий 'Не обязательно'"
                                          required></textarea>
            </div>
            <input hidden="hidden" name="course_id" value="{{$course->id}}">
            <input hidden="hidden" name="hometask_id" value="{{$hometask->id}}">
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Оправить</button>
            </div>
        </form>
        <br>
        <br>
        <!-- /.row -->
        </div><!-- /.container-fluid -->

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
