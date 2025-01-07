@if ($paginator->hasPages())
    <div style="display: flex; justify-content: center; overflow-x: auto; padding: 10px;">
        <ul class="pagination" style="display: flex; gap: 10px; list-style-type: none; padding: 0; margin: 0; flex-wrap: wrap; justify-content: center;">
            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active" style="background-color: #FF7900; color: white; border-radius: 5px; padding: 10px 15px; cursor: pointer;">
                        <span>{{ $page }}</span>
                    </li>
                @else
                    <li style="background-color: #f8f9fa; border-radius: 5px; padding: 10px 15px; cursor: pointer;">
                        <a href="{{ $url }}" style="text-decoration: none; color: #FF7900; font-weight: bold;">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
