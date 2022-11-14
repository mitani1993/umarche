<div>
    @if (empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="image">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}" alt="image">
    @endif
</div>
