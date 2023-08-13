@extends('courses.layouts.main')
@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container" style="display: flex">
                <h2>Мои Курсы</h2>
                <h2><a href="{{ route('teach.course.create') }}" class="btn get-started-btn" style="background-color: green">Новый курс</a></h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
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

                                    <h3><a href="course-details.html">{{$course->title}}</a></h3>
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
                                        <a href="{{ route('teach.course.edit', $course->id) }}">Edit</a>
                                        <form action="{{ route('teach.course.destroy', $course->id) }}" method="Post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-danger bg-transparent border-0">
                                                Delete
                                            </button>
                                        </form>
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
