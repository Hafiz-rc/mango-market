<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         @include('layout.erp.menus.dashboard_menu')
         @include('layout.erp.menus.product_menu')
         @include('layout.erp.menus.customer_menu')
         @include('layout.erp.menus.inventory_menu')   
         @include('layout.erp.menus.order_menu')       
         @include('layout.erp.menus.purchase_menu')       
         @include('layout.erp.menus.stock_menu')       
         @include('layout.erp.menus.supplier_menu')       
         @include('layout.erp.menus.warehouse_menu')      
         @include('layout.erp.menus.sitemenu_menu')        
         @include('layout.erp.menus.sitesection_menu')          
         @include('layout.erp.menus.sitealbum_menu')      
         @include('layout.erp.menus.webpage_menu')      
     
        
          <li class="nav-header" style="display:flex;justify-content:center; align-items:center;">
            <div  style=" border:1px solid; border-color:#fff transparent transparent transparent; width:50px"></div><div>SYSTEM</div><div  style="border:1px solid; border-color:#fff transparent transparent transparent;width:50px"></div>
          </li>
          @include('layout.erp.menus.user_menu')
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Log Out</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>