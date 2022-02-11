<div class="col-lg-12 col-md-12">
    <div class="pagination-area">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a href="#" class="prev page-numbers">
            <i class='bx bx-chevron-left'></i>
        </a>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                <i class='bx bx-chevron-left'></i> 
            </a>

        @endif
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
    
            <a href="{{ $paginator->nextPageUrl() }}"rel="next" aria-label="@lang('pagination.next')" class="next page-numbers">
                <i class='bx bx-chevron-right'></i>
            </a>
        @else

            <a href="#" class="next page-numbers">
                <i class='bx bx-chevron-right'></i>
            </a>
        @endif
    </div>
</div>
