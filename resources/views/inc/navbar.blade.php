<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="/dashboard">Online Graduate Verification System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::route('profile') }}">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ URL::route('message.view') }}">Messages
          <span class="sr-only">unread messages</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::route('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>

{{-- <nav class="mb-1 navbar navbar-expand-lg navbar-dark cyan">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link waves-effect waves-light" href="#"><i class="fa fa-envelope"></i> Contact <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#"><i class="fa fa-gear"></i> Settings</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4" style="display: none; position: absolute;">
                  <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                  <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
              </div>
          </li>
      </ul>
  </div>
</nav> --}}