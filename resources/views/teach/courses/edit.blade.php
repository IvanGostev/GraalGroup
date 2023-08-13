@extends('courses.layouts.main')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Редактирование курса</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">


            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info" >
                            <div class="address">
                                <img src="{{ asset( 'storage/' . $course->img) }}"  style="width: 250px;" alt="img">
                                <br>
                                <br>
                            </div>
                            <div class="address">
                                <a class="btn get-started-btn" href="{{ route('teach.lessons.create', $course->id) }}"> Уроки </a>
                                <a class="btn get-started-btn" href=""> ДЗ </a>
                            </div>
                            <div class="address">

                            </div>

                            <div class="email">
                                <a class="btn get-started-btn" href="">Проверка домашнего задание</a>
                            </div>


                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{route('teach.course.update', $course->id)}}" method="post" enctype="multipart/form-data" role="form"
                              class="php-email-form">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Название" value="{{$course->title}}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="category" class="form-control" id="category"
                                           placeholder="Категория" value="{{$course->category}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="price" class="form-control" id="price"
                                           placeholder="Цена" value="{{$course->price}}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label">Превью</label>
                                            <input type="file" class="custom-file-input" name="img" >

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" rows="5" placeholder="Описание"
                                          required>{{$course->description}}</textarea>
                            </div>
                           <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Курс изменен! Можете отредактировать его <a href="{{ route('teach.course.index') }}">здесь</a></div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Изменить</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
