<nav aria-label="navigation">
    <ul class="pagination mt-50 mb-70">
        <!-- пагинация -->
    @foreach ($elements as $element)
    <!-- проверка на кол-во стр(...) -->
    @if (is_string($element))
            <li class="disabled">{{ $element }}</li>
    @endif
    <!-- проверяем на массив -->
    @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><a href="" class="page-link">{{ $page }}</a></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
        <!-- <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">21</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li> -->
    @endforeach
    </ul>
</nav>