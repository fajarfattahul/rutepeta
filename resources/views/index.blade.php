<!DOCTYPE html>
<html lang="en">

  @include('partials._head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            @include('partials._profile')

            <br />

            @include('partials._sidebar')

            @include('partials._footer-menu')

          </div>
        </div>

        @include('partials._top-nav')

        @include('partials._footer')

        <main class="py-4">
          {{-- @yield('content') --}}
        </main>

      </div>
    </div>

    @include('partials._script')

  </body>
</html>
