<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 30px; margin-left: 50px">
    <h5 class="p-2">Watch App</h5>
    <ul class="navbar-nav">
        @role('writer')
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ '/' }}">Dashboard</a>
        </li>
        @endrole
        @role('admin')
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/car' }}">Watch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/logs' }}">Logs</a>
        </li>
        <li class="nav-item">
        @endrole
          <a class="nav-link text-dark" href="{{ '/recentPost' }}">Recent Posts</a>
        </li>
        @role('admin')
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('admin.users.index') }}">Users</a>
        </li>
        @endrole
      </ul>
      <div class="dropdown mx-auto">
                <a class="btn dropdown-toggle" id="buttt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="select3">
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-black" href="/create">Create Post</a>
                    </li>
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-black" href="/myPost">My Post</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                    </li>
                </div>
            </div>
</nav>

<style>
  a{
    margin-left: 20px;
  }
</style>
