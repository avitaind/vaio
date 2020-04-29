<div class="news-row row py-5">

    <div class="col-3">{{ $item->eventDateString() }}</div>

    <div class="old-news col-9 ml-auto">
        <div class="old-news-title mb-2">
            <a href="{{ route('news.news.detail', $item) }}" class="a-news-title">
                <span>{{ $item->title }}</span>
            </a>
        </div>
        <div class="old-news-desc sub-text">
            {{ $item->present()->excerpt }}
        </div>
    </div>
</div>