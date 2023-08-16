<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    @include('template.meta')

    <title>Nipah Store - @yield('titel')</title>
 

    @stack('prepent-style')
    @include('template.style')
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        @include('template.dashside')
        <!-- nav -->

        @include('template.dashnav')
        <!-- isi -->
        @yield('konten')
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepent-script')
    
    @include('template.dashscript')
    @stack('addon-script')
  </body>
</html>
