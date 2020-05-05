    <a href="{{ route('news.news.detail', $item->id) }}" class="d-flex flex-column a-card col-12 col-lg-6 mb-3">

        <div class="list-pic-wrapper">
            <div class="bg-item" style="background-image: url('{{  ($url = $item->thumbnail_url()) ? $item->thumbnail_url() : '' }}')"></div>
        </div>
        <div class="list-item-content px-5 py-4">
            <p class="list-item-title font-weight-bold">{!!$item->title !!}</p>
            <p class="card-date pb-4">{!! $item->eventDateString() !!} </p>
            <p class="list-item-para">{!! $item->present()->excerpt !!}</p>
        </div>
    </a>

