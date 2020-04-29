<a class="list-item d-flex flex-column col-12 col-md-6 col-lg-4 mb-4" href="{{ route('news.news.detail', $item->id) }}">
    <div class="list-pic-wrapper">
        @if( $item->is_feature )
            <div class="list-item-type-flag">Feature</div>
        @endif
        <div class="bg-item" style="background-image: url('{{ $item->thumbnail_url() }}')"></div>
    </div>
    <div class="list-item-content p-3">
        <p class="list-item-title font-weight-bold">{!!$item->title !!}</p>
        <p class="list-item-para">{!! $item->present()->excerpt !!}</p>
    </div>
</a>
