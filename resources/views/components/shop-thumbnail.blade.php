<div>
    @if (empty($shop->filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="image">
    @else
        <img src="{{ asset('storage/shops/' . $shop->filenema) }}" alt="image">
    @endif
</div>
