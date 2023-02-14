<nav class="nav nav-pills flex-column col-2 border border-dark border-end-0 bg-info p-2">
    @foreach ($navbar as $name => $url)
        @if ($name == $isActive)
            <a class="nav-link text-black active" href="{{ $url }}">{{ $name }}</a>
        @else
        <a class="nav-link text-black" href="{{ $url }}">{{ $name }}</a>
        @endif
    @endforeach
</nav>