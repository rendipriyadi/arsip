<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('arsip.index') }}">
          <i class="mdi mdi-card-text-outline menu-icon"></i>
          <span class="menu-title">Arsip</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link"href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="mdi mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Sign Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
      </li>
    </ul>
  </nav>
  <!-- partial -->