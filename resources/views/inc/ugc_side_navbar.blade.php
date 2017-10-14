{{-- UGC Side navbar --}}

<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item active">
      <a class="nav-link" href="{{ URL::route('university.view') }}">Manage University</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ URL::route('report.index') }}">Reports</a>
    </li>
  </ul>
</nav>