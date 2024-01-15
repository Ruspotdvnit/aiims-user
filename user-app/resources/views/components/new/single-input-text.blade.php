<div class="row">
    <label for="{{ $slot }}" class=" @if (! $attributes->has(['makecol'])) col-4 @endif col-form-label">{{ $slot }}</label>
    <div class=" @if (! $attributes->has(['makecol'])) col-8 @endif">
        <input type="{{ $type }}" class="form-control" id="{{ $slot }}" name="{{ $slot }}">
    </div>
</div>