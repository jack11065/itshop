<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('productsform')}}">
        <div class="sidebar-brand-icon">
        ร้านตามใจสโตร์
        </div>
      </a>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      Tables
      </div>


      <li class="nav-item">
        <a class="nav-link" href="{{route('productsform')}}">
          <i class="fas fa-fw fa-cart-plus"></i>
          <span>Product</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('/TypesForm')}}">
          <i class="fas fa-fw fa-calendar-check"></i>
          <span>Category</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('specialcontents')}}">
          <i class="fas fa-fw fa-address-card"></i>
          <span>User</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->