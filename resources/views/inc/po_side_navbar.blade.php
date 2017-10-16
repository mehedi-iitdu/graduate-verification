{{-- PO Side navbar --}}

<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <div class="dropdown show">
        <a class="nav-link active dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Result
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{ URL::route('result.submit') }}">Add Result</a>
          <a class="dropdown-item" href="{{ URL::route('result.search') }}">Search Result</a>
          <a class="dropdown-item" href="{{ URL::route('result.edit') }}">Edit Result</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ URL::route('report.index') }}">Reports</a>
    </li>
  </ul>
</nav>