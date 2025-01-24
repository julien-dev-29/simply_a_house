<div class="card shadow-sm">
    @if ($property->getPicture())
        <img src="{{ $property->getPicture()->getImageUrl(360, 230) }}" alt="" class="w-100">
    @else
        <img src="/image.png" alt="" width="360" height="230" class="w-100">
    @endif
    <div class="card-body">
        <h5 class="card-title fw-bold"><a
                href="{{ route('properties.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}m² - {{ $property->city }} - {{ $property->postal_code }} </p>
        <div class="text-info fw-bold">
            {{ number_format($property->price, thousands_separator: ' ') }}&euro;
        </div>
    </div>
</div>
