<?php
/*
|--------------------------------------------------------------------------
| Laravel 5, Bootstrap 4 Pagination
|--------------------------------------------------------------------------
|
| A partial view to handle pagination for collections in Laravel's query
| builder or Eloquent ORM, styled with Bootstrap 4.
|
| The pagination displays like the following, where * denotes the current
| page, and there are 60 total pages:
| [Previous] [1] [*2] [3] [4] [...] [60] [Next]
|
*/
// The range of numbers the pagination should extend either side of the current active page
// This should be considered to move to a configuration file instead of leaving in the view
$pagination_range = 2;
?>

<nav aria-label="Page navigation">
	<ul class="pagination justify-content-end">

		<li class="page-item {{ $paginator->previousPageUrl()==null ? 'disabled' : '' }}">
			<a class="page-link" href="{{ $paginator->previousPageUrl() ?? '#' }}">Previous</a>
		</li>


		@if ($paginator->currentPage() > 1+$pagination_range )

			<li class="page-item">
				<a class="page-link" href="{{ $paginator->url(1) ?? '#' }}">{{ 1 }}</a>
			</li>

			@if ($paginator->currentPage() > 1+$pagination_range+1 )
				<li class="page-item disabled">
					<span class="page-link">&hellip;</span>
				</li>
			@endif

		@endif

		@for ($i=-$pagination_range; $i<=$pagination_range; $i++)

			@if ($paginator->currentPage()+$i > 0 && $paginator->currentPage()+$i <= $paginator->lastPage())
				<li class="page-item {{ $i==0 ? 'active' : '' }}">
					<a class="page-link" href="{{ $paginator->url($paginator->currentPage()+$i) }}">{{ $paginator->currentPage()+$i }}</a>
				</li>
			@endif

		@endfor

		@if ($paginator->currentPage() < $paginator->lastPage()-$pagination_range )

			@if ($paginator->currentPage() < $paginator->lastPage()-$pagination_range-1 )
				<li class="page-item disabled">
					<span class="page-link">&hellip;</span>
				</li>
			@endif

			<li class="page-item">
				<a class="page-link" href="{{ $paginator->url($paginator->lastPage()) ?? '#' }}">{{ $paginator->lastPage() }}</a>
			</li>

		@endif

		<li class="page-item {{ $paginator->nextPageUrl()==null ? 'disabled' : '' }}">
			<a class="page-link" href="{{ $paginator->nextPageUrl() ?? '#' }}">Next</a>
		</li>


	</ul>
</nav>