@extends('courses.layouts.main')
@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->

        <main>
            <!-- Page header -->
            <section class="pt-lg-8 pb-lg-16 pt-7 pb-12 bg-primary">
                <div class="container">
                    <br>
                    <br>
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <div>
                                <h1 class="text-white display-4 fw-semibold">
                                    {{$course->title}}
                                </h1>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page content -->
            <section class="pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                            <!-- Card -->
                            <div class="card rounded-3">
                                <!-- Card header -->

                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="tab-content" id="tabContent">
                                        <div class="tab-pane fade active show" id="table" role="tabpanel" aria-labelledby="table-tab">
                                            {{$course->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mt-lg-n22">
                            <!-- Card -->
                            <div class="card mb-3 mb-4">
                                <div class="p-1">
                                    <div class="d-flex justify-content-center position-relative rounded py-10 border-white border rounded-3 bg-cover" style="
                    background-image: url({{ asset('storage/' . $course->img) }});
                  "><br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Price single page -->
                                    <div class="mb-3">
                                        <span class="text-dark fw-bold h2">${{$course->price}}</span>
                                        <del class="fs-4 text-muted">$750</del>
                                    </div>
                                    <div class="d-grid">
                                        <a href="{{ route('training.main.first', $course->id) }}" class="btn btn-primary mb-2">{{ $course->tied ? 'Открыть' : 'Купить' }}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative">
                                            <img src="{{ asset('storage/' . auth()->user()->img) }}" alt="avatar" class="rounded-circle avatar-xl" style="max-width: 50px">
                                        </div>
                                        <div class="ms-4">
                                            <h4 class="mb-0">{{auth()->user()->nickname}}</h4>
                                        </div>
                                    </div>
                                    <p>
                                        {{auth()->user()->description}}
                                    </p>
                                    <a href="{{ route('profile.main.show', auth()->user()->id) }}" class="btn btn-outline-secondary btn-sm">Профиль</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="pt-12 pb-3">
                        <div class="row d-md-flex align-items-center mb-4">
                            <div class="col-12">
                                <h2 class="mb-0">Похожие курсы</h2>
                            </div>
                        </div>
                        <div class="row">
                            <section id="courses" class="courses">
                                <div class="container" data-aos="fade-up">

                                    <div class="row" data-aos="zoom-in" data-aos-delay="100">

                                        @foreach($courses as $course)


                                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                                <div class="course-item">
                                                    <img src="{{ 'storage/' . $course->img }}" class="img-fluid" alt="...">
                                                    <div class="course-content">
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <h4>{{$course->category}}</h4>
                                                            <p class="price">${{$course->price}}</p>
                                                        </div>

                                                        <h3><a href="{{ route('course.main.show', $course->id) }}">{{$course->title}}</a></h3>
                                                        <p>{{$course->description}}</p>
                                                        <div class="trainer d-flex justify-content-between align-items-center">
                                                            <div class="trainer-profile d-flex align-items-center">
                                                                <img src="{{'storage/' . $course->user->img }}" class="img-fluid" alt="">
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
            </section>
        </main>

    </main><!-- End #main -->

@endsection
