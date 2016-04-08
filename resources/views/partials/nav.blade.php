<div class="header clearfix">
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation" class=""><a href="{{ route('blogs.index') }}">Blogs</a></li>
      <li role="presentation"><a href="{{ route('blogs.create') }}">Create</a></li>
      @if(Auth::check())
        <li role="presentation" style="font-style:italic !important;padding-top:10px !important;">{{ Auth::user()->name }}</li>
        <li role="presentation"><a href="{{ route('logout') }} ">Logout</a></li>
      @else
        <li role="presentation"><a href="{{ route('login') }}">Login</a></li>
        <li role="presentation"><a href="{{ route('register') }}">Register</a></li>
      @endif
    </ul>
  </nav>
  <h3 class="text-muted">Blog Site</h3>
</div>
