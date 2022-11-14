@php
if ($type === 'shops') {
    $path = 'storage/shops/';
} elseif ($type === 'products') {
    $path = 'storage/products/';
}
@endphp

<div>
    @if (empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="image">
    @else
        <img src="{{ asset($path . $filename) }}" alt="image">
    @endif
</div>
