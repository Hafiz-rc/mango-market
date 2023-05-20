<header class="header">
        <div class="desktop-header header1 d-none d-lg-block">

                <!-- topbar -->

          @include('layout.site.common.header_topmenu')

                 <!-- searchBar -->
          @include('layout.site.common.header_search')

          <br>         <!-- sitemenu -->

          @include('layout.site.common.site_menu')


           
        </div>
        <!-- mobile_sitemenu -->

        @include('layout.site.common.header_mobile_site_menu')

    </header>