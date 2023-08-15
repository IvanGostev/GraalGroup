<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('storage/' . auth()->user()->img) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->nickname}}</a>
        </div>


    </div>

    <div class="user-panel mt-1 pb-2 mb-1 d-flex">
        <div class="image">
            <img src="{{ asset('storage/' . $course->img) }}" alt="Course Image" style="width: 3.5em">
        </div>
        <div class="info">
            <p class="info" style="color: white">{{$course->title}}</p>

        </div>
        <br>
    </div>
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Быстрый поиск"
                   aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="sidebar-search-results">
            <div class="list-group"><a href="#" class="list-group-item">
                    <div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong
                            class="text-light"></strong> <strong class="text-light"></strong>e<strong
                            class="text-light"></strong>l<strong class="text-light"></strong>e<strong
                            class="text-light"></strong>m<strong class="text-light"></strong>e<strong
                            class="text-light"></strong>n<strong class="text-light"></strong>t<strong
                            class="text-light"></strong> <strong class="text-light"></strong>f<strong
                            class="text-light"></strong>o<strong class="text-light"></strong>u<strong
                            class="text-light"></strong>n<strong class="text-light"></strong>d<strong
                            class="text-light"></strong>!<strong class="text-light"></strong></div>
                    <div class="search-path"></div>
                </a></div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            @foreach($contents as $content)
                @if($content['type'] == 'lesson')

                    <li class="nav-item">
                        <a href="{{ route('training.main.show', [ $course->id, $content->id]) }}" class="nav-link">
                            <i class="far fa-file-alt"></i>
                            &nbsp;
                            <p>
                                {{$content->title}}
                            </p>
                        </a>
                    </li>
                @endif()
                @if($content['type'] == 'hometask')
                        <?php
                            switch (($content['status'] ?? 0)) {
                                case 0:
                                    $status = ['title' => 'Не приступал', 'color' => 'danger'];
                                    break;
                                case 1:
                                    $status = ['title' => 'Отправлено на проверку', 'color' => 'primary'];
                                    break;
                                case 2:
                                    $status = ['title' => 'Не приступал', 'color' => 'success'];
                                    break;
                                case 3:
                                    $status = ['title' => 'Отправлено на доработку', 'color' => 'warning'];
                                    break;
                            }
                            ?>
                    <li class="nav-item">

                        <a href="{{ route('training.main.create', [ $course->id, $content->id]) }}" class="nav-link">
                            <i class="fas fa-laptop-house"></i>
                            <p>
                                {{$content->title}}
                                <span class="right badge badge-{{$status['color']}}"> {{ $status['title']}}</span>
                            </p>
                        </a>
                    </li>

                @endif()
            @endforeach
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
