<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">

    <!-- Branding Image-->
    <a class="navbar-brand" href="{{url('/')}}"> LaraBBS</a>

    <!-- html5 新增role 和 aria-* 标签-->
    <!-- Collapsing The Navigation Bar -->
    <button class="nacbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navbar link -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- left side navbar -->
        <ul class="navbar-nav mr-auto"></ul>

        <!--Right Side of Narbar -->
        <ul class="navbar-nav navbar-right">
          <!-- Authentication Links -->
          <li class="nav-item"><a class="nav-link" href="#">登录</a></li>
          <li class="nav-item"><a class="nav-link" href="#">注册</a></li>
        </ul>
    </div>
  </div>
</nav>
