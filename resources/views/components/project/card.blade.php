<div class="our-work">
    <div class="our-work__img lightgallery-box" data-src="{{ Storage::url($item->img) }}">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="lightgallery">
        <span class="our-work__marker">{{ $item->year }}</span>
    </div>
    <div class="our-work__text">
        <span class="our-work__name">{{ $item->title }}</span>
        <a href="{{ route('project_page', $item->slug) }}" class="our-work__link">Подробнее <span>→</span></a>
    </div>
</div>
