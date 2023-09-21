  @if ($paginator->hasPages())
  <div class="my-pagination-show-1">
      @if ($paginator->onFirstPage())
      <span class="disabled" id="my-pagination-show-1-left-arrow" aria-disabled="true" aria-label="@lang('pagination.previous')">
          <img src="/users/images/Arrow L.png" alt="">
      </span>
      @else
      <span>
          <a id="my-pagination-show-1-left-arrow" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><img src="/users/images/Arrow L.png" alt=""></a>
      </span>
      @endif

      @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
      <span class="disabled" aria-disabled="true"><span>{{ $element }}</span></span>
      @endif

      {{-- Array Of spannks --}}
      @if (is_array($element))
      @foreach ($element as $page => $url)
      @if ($page == $paginator->currentPage())
      <span class="pag-active" aria-current="page"><span><a href="{{ $url }}">{{ $page }}</a></span></span>
      @else
      <span><a href="{{ $url }}">{{ $page }}</a></span>
      @endif
      @endforeach
      @endif
      @endforeach
      @if ($paginator->hasMorePages())
      <span>
          <a id="my-pagination-show-1-left-arrow" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><img src="/users/images/Arrow R.png" alt=""></a>
      </span>
      @else
      <span class="disabled" id="my-pagination-show-1-left-arrow" aria-disabled="true" aria-label="@lang('pagination.next')">
          <span aria-hidden="true"><img src="/users/images/Arrow R.png" alt=""></span>
      </span>
      @endif
  </div>
  @endif