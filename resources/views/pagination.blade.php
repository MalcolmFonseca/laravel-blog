@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">
        <div>

            <div>
                <p class="PaginationShowing Container">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span>{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span>{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span>{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="Links">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="Arrow">
                            <span aria-hidden="true">
                                <button disabled>{{ '<' }}</button>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            aria-label="{{ __('pagination.previous') }}" class="Arrow">
                            <button>{{ '<' }}</button>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    <div class="Pages">
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span>{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <span aria-current="page">
                                            <span>{{ $page }}</span>
                                        </span>
                                    @else
                                        <a href="{{ $url }}"
                                            aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                            {{ $page }}
                                        </a>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            aria-label="{{ __('pagination.next') }}" class="Arrow">
                            <button>{{ '>' }}</button>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="Arrow">
                            <span aria-hidden="true">
                                <button disabled>{{ '>' }}</button>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
