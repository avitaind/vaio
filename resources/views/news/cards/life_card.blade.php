<a class="list-item d-flex flex-column col-12 col-md-6 col-lg-4 mb-4 card-{{ str_slug($item->category->name) }}" href="{{ route('news.life.detail', $item) }}">
    <div class="list-pic-wrapper">
        <div class="bg-item" style="background-image: url('{{ $item->thumbnail_url() }}')"></div>
    </div>
    <div class="list-item-content p-3">
        <p class="list-item-title font-weight-bold">{{ $item->title }}</p>
        <div class="list-item-type">{{ $item->category->name }}</div>
    </div>
</a>