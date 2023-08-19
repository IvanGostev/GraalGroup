@extends('courses.layouts.main')
@section('content')
        <section style="background-color: #eee;">
            <div class="container py-5">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="{{ asset('storage/' . $user->img) }}" alt="avatar"
                                     class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3">{{$user->nickname}}</h5>
                            </div>
                        </div>
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-0">
                                    <p>{{$user->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <section id="courses" class="courses" style="margin-top: -40px">
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

                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
