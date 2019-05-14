@if ($paginator->hasPages())
    <nav class="flexbox mt-30">

        @if ($paginator->onFirstPage())
            <a href="" class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i>Previous</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i>Previous</a>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
             <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-white"><i class="ti-arrow-left fs-9 mr-4"></i>Next</a>
        @else
            <a href="" class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i>Next</a>
        @endif
    </nav>
@endif
