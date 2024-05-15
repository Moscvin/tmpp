<section class="pagination">
    <div class="container">
        <div class="row">
            <div class="col-12 pagination__wrapper">

                @if($paginator->previousPageUrl() != null)
                    <div class="pagination__arrow">
                        <a href="{{ $paginator->previousPageUrl() }}">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6667 10H5" stroke="black" stroke-width="1.5"
                                      stroke-linecap="square" stroke-linejoin="round"/>
                                <path d="M10.0001 15.8334L4.16675 10.0001L10.0001 4.16675" stroke="black"
                                      stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>
                            <span>
                                Precendenta
                            </span>
                        </a>
                    </div>
                @endif

                @if ($paginator->hasPages())

                    <div class="pagination__pages">
                        <ul>
                            @foreach ($elements as $element)
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <div class="pagination__pages">
                                            @if ($page == $paginator->currentPage())
                                                <li class="active">
                                                    <span>{{ $page }}</span>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ $url }}">
                                                        <span>{{ $page }}</span>
                                                    </a>
                                                </li>
                                            @endif

                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>

                @endif

                @if($paginator->nextPageUrl() != null)
                    <div class="pagination__arrow">
                        <a href="{{ $paginator->nextPageUrl() }}">
                                    <span>
                                        Următoare
                                    </span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33325 10H14.9999" stroke="black" stroke-width="1.5"
                                      stroke-linecap="square" stroke-linejoin="round"/>
                                <path d="M10 4.16675L15.8333 10.0001L10 15.8334" stroke="black"
                                      stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
