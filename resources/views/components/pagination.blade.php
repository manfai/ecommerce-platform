@if ($paginator->lastPage() > 1)
<nav aria-label="pagination">
    <ul class="pagination">
        <li class="page-item {{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}" class="page-link"> Prev</a>
        </li>

        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item"><a class="page-link {{ ($paginator->currentPage() == $i) ? 'active' : '' }}" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
        @endfor

        <li class="page-item  {{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page-link">Next</a>
        </li>

    </ul>
 </nav>
@endif

    
        

        
        
