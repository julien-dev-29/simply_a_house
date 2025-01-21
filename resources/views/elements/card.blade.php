<div class="card h-100 shadow-sm">
    @if ($property->getPicture())
        <img src="{{ $property->getPicture()->getImageUrl() }}" alt="" class="w-100">
    @else
        <img src="empty" alt="" class="w-100">
    @endif
    <div class="card-body">
        <h5 class="card-title fw-bold"><a
                href="{{ route('properties.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}m² - {{ $property->city }} - {{ $property->postal_code }} </p>
        <div class="text-primary fw-bold">
            {{ number_format($property->price, thousands_separator: ' ') }}&euro;
        </div>
    </div>
</div>
