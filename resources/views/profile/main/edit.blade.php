@extends('courses.layouts.main')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Редактирование профиля</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">


            <div class="container" data-aos="fade-up" style="">

                    <div class="col-lg-12 mt-5 mt-lg-0" style="padding-top: 40px;">

                        <form action="{{route('profile.main.update', auth()->user()->id)}}" method="post" enctype="multipart/form-data" role="form"
                              class="php-email-form">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nickname" class="form-control" id="nickname"
                                           placeholder="Nickname" required value="{{$user->nickname}}">
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label">Превью</label>
                                            <input type="file" class="custom-file-input" name="img" value="{{$user->img}}">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" rows="5" placeholder="Описание" required=""></textarea>
                            </div>
                           <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Изменения учтены! Можете посмотреть их <a href="{{ route('profile.main.show', auth()->user()->id) }}">здесь</a></div>
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
