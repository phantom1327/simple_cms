<!DOCTYPE html>
<html lang="en">

  @include('layouts.includes.head')

  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

      @include('layouts.includes.preloader')

      @include('layouts.includes.navbar')
      @include('layouts.includes.sidebar')

      <div class="content-wrapper px-4 py-2">
         <div class="content-header">
           <h1>@yield('title')</h1>
         </div>

        <div class="content px-2">
            @yield('content')
        </div>
      </div>

      @include('layouts.includes.footer')
    </div>

    @include('layouts.includes.foot')
  </body>
</html>
