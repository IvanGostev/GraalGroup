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

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
            @foreach($lessons as $lesson)
                <li class="nav-item">
                    <a href="{{ route('teach.lessons.edit', [ $lesson->id,$course->id]) }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            {{$lesson->title}}
                        </p>
                    </a>
                </li>
            @endforeach
            <li><p>Домашняя задание</p></li>
            @foreach($hometasks as $hometask)
                <li class="nav-item">
                    <a href="{{ route('teach.hometask.edit', [ $hometask->id,$course->id]) }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            {{$hometask->title}}
                        </p>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
