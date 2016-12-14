<header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="{{ url('/') }}">Xchange</a>
    </div>
    @if (Auth::check())
    <ul class="nav nav-tabs">
  <li role="presentation"><a href="dashboard">Dashboard</a></li>
  <li role="presentation"><a href="addr">Add my Requirements</a></li>
  <li role="presentation"><a href="addo">Add my Offerings</a></li>
  <li role="presentation"><a href="profile">My Profile</a></li>
  <!--<li role="presentation"><a href="matchr">Match Requirements</a></li>
  <li role="presentation"><a href="matcho">Match Offerings</a></li>-->
<!-- /.navbar-collapse -->

      <ul class="nav nav-tabs navbar-right">
        <li role="presentation"><p class="navbar-text">Welcome !  <a href="logout" class="navbar-link">Logout</a></p></li>
        @endif
      </ul></ul>
  </div><!-- /.container-fluid -->
</nav>
</header>
