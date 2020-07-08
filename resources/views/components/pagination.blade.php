@if ($paginator->lastPage() > 1)
<nav aria-label="Page navigation example">
    <ul class="pagination pagination-template d-flex justify-content-start">
        <li class="page-item {{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}" class="page-link"> <i class="fa fa-angle-left"></i></a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="page-item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}"><a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a></li>
        @endfor
        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page-link"> <i class="fa fa-angle-right"></i></a>
        </li>
    </ul>
</nav>
@endif

    
        

        
        
