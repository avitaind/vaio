
    <div class="main-life-wrapper-lg">

        <a href="{{ route('news.life.detail', $item) }}">

            @if( $item->is_feature )
                <div class="list-item-type-flag">Feature</div>
            @endif

            <div class="bg-item" style="background-image: url('{{ $item->thumbnail_url() }}')"></div>
            <div class="main-life-content p-3 p-lg-4">
                <div class="white-label px-3 mb-2">{{ $item->category->name or "" }}</div>
                <div class="main-life-title">{{ $item->title }}</div>
                {{--<p class="main-life-para mb-0 hidden-xs-down">{!! $item->present()->excerpt(100)  !!}</p> --}}
            </div>
        </a>
    </div>
