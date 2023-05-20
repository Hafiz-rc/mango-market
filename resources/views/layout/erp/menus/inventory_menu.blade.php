<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Inventory
                <i class="fas fa-angle-left right"></i>               
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('/productcategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/sitesections')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Site Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('/uoms')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mange UoM</p>
                </a>
              </li>
              
            </ul>
          </li>