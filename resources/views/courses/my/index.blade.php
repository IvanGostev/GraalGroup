@extends('courses.layouts.main')
@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Курсы</h2>
                <p>Начните осваивать необходимые навыки и знания вместе со GRAAL GROUP.</p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    @foreach($courses as $course)


                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="max-height: 510.28px !important">
                            <div class="course-item" style="max-width: 414.39px !important;">
                                <img src="{{ asset('storage/' . $course->img) }}" class="img-fluid" alt="..." style="width: 100% !important; max-height: 276px !important">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 style="overflow: hidden; max-height: 30.8px">{{$course->category}}</h4>
                                        <p class="price">${{$course->price}}</p>
                                    </div>

                                    <h3 style="overflow: hidden; max-height: 24px"><a href="{{ route('course.main.show', $course->id) }}">{{$course->title}}</a></h3>
                                    <p style="overflow: hidden; max-height: 42px" >{{$course->description}}</p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $course->user->img) }}" class="img-fluid" alt="">
                                            <span>{{$course->user->nickname}}</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center">
                                            <i class="bx bx-user"></i>&nbsp;50
                                            &nbsp;&nbsp;
                                            <i class="bx bx-heart"></i>&nbsp;65
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->

@endsection
