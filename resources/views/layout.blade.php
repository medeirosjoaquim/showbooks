@include ('includes.head')
<body>
  @include ('includes.header')
    <div class="container-fluid read">
      @yield ('content')
    </div>
    @include ('includes.footer')
  </body>
</html>

