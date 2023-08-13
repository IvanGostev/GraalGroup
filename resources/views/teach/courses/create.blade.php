@extends('courses.layouts.main')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Создания курса</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">


            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Превью</h4>
                                <p>Размер в пикселях: 800x533</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Название</h4>
                                <p>Должно передавать смысл курса</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Цена</h4>
                                <p>Указывать только число в долларах</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{route('teach.course.store')}}" method="post" enctype="multipart/form-data" role="form"
                              class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Название" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="category" class="form-control" id="category"
                                           placeholder="Категория" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="price" class="form-control" id="price"
                                           placeholder="Цена" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label">Превью</label>
                                            <input type="file" class="custom-file-input" name="img">

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" rows="5" placeholder="Описание"
                                          required></textarea>
                            </div>
                           <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Курс создан! Можете отредактировать его <a href="{{ route('teach.course.index') }}">здесь</a></div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Создать</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
