<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cart-arrow-down"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/orders/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/orders')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Order</p>
                </a>
              </li>
            
            </ul>
          </li>