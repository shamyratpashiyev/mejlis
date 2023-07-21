<div class="breadcrumbs_row">
    @foreach ($breadcrumbsArray as $key => $item)
        @if($key == 0)
            <a href="{{ $item['url'] }}" class="main_page">{{ $item['name'] }}</a>
        @else
            <span> / </span>
            <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
        @endif
    @endforeach
    
</div>