<a href="{{route('service_page', $item->slug)}}" class="service">
    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="service__img">
    <span class="service__caption">{{ $item->title }}</span>
</a>
