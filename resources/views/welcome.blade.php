
@extends('courses.layouts.main')
@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Обучение сегодня,<br>Лидер завтра</h1>
        <h2>Образовательная платформа и маркетплейс онлайн-курсов</h2>
        <a href="{{ route('course.main.index') }}" class="btn-get-started">Начать</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Широкий выбор курсов</h3>
                    <p class="fst-italic">
                        Российская образовательная платформа и конструктор бесплатных и платных открытых онлайн-курсов и уроков.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>  При помощи онлайн-обучения вы можете сократить как временные, так и финансовые затраты на обучение персонала.</li>
                        <li><i class="bi bi-check-circle"></i> Потратьте время один раз — создайте онлайн-курс. А потом просто приглашайте на него сотрудников для обучения и отслеживайте их успех, используя подробную статистику.</li>
                        <li><i class="bi bi-check-circle"></i> Вы можете посмотреть данные по каждому заданию отдельно: кто его решил и как решил.</li>
                    </ul>
                    <p>
                        При помощи онлайн-обучения вы можете сократить как временные, так и финансовые затраты на обучение персонала.
                    </p>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Студентов</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Курсов</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Домашних работ</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Классных работ</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


</main><!-- End #main -->
@endsection
