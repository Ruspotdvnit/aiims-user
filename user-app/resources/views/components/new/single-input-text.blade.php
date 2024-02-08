<div class="row">
    @php
        $string1 = $sub.'_'.strtolower(str_replace([' ', '(', ')', '/', ',','-','%','?', '&'], '_', $slot));
        $string2 = "";
        $extra = "";

        if ($attributes->has(['tail'])){
            $string2 = $attributes->get('tail');
        }

        $id = $string1 . $string2;

        if ($attributes->has(['extra'])){
            $extra = $attributes->get('extra')." ";
        }

    @endphp

    <label for="{{ $id }}" 
        class=" @if (! $attributes->has(['makecol'])) col-4 @endif col-form-label">

        {{ $extra.$slot }}
        </label>
    <div class=" @if (! $attributes->has(['makecol'])) col-8 @endif">
        <input type="{{ $type }}" class="form-control" 
            id="{{ $id }}" name="{{ $id }}">
    </div>
</div>