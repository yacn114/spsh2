<li>
    <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>

    @if($category->children->isNotEmpty())
        <ul class="nav-dropdown nav-submenu">
            @foreach($category->children as $child)
                @include('main.menu-category', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>
