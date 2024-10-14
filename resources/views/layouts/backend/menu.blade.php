 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{Asset('Asset/backend/index.html')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BK MOVIES</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('storage') }}/{{ auth()->user()->profile_photo_path }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <a href="{{ route('profile') }}" class="d-block text-decoration-none">
                    <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                </a>
                <a href="{{ route('profile') }}" class="d-block text-decoration-none" style="color: gray;">
                    <span>{{ auth()->user()->email }}</span>
                </a>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('userdata')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
