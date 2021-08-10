  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Labor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class="d-block">
            @if (Auth::check())
            <div class="info">
              <a class="d-block">{{ Auth::user()->name ?? ""}}</a>
            </div>
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if (Auth::check())
          <li class="nav-header">İçerikler</li>
          <li class="nav-item">
            <a href="{{ route('courses.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Kurslar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('lessons.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Dersler</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('homeworks.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Ödevler</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Ödemeler</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Kullanıcılar</p>
            </a>
          </li>
          @endif
          
          @guest
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('register-user') }}">Kaydol <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Giriş <span class="sr-only">(current)</span></a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
              {{ auth()->user()->name }}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" 
            onclick="event.preventDefault();
            document.getElementById('logoutForm').submit();">
              Çıkış
            </a>
  
            <form action="{{ route('signout') }}" id="logoutForm" method="GET">
              @csrf
            </form>
          </li>
          @endguest


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>