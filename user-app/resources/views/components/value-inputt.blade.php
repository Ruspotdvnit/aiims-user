@php
$string1 = strtolower(str_replace([' ', '(', ')', '/', ',','-','%','?'], '_', $attributes->get('xid')));
$string2 = "";

if ($attributes->has(['tail'])){
$string2 = $attributes->get('tail');
}

$id = $string1 . $string2;
@endphp

<div class="row">
    <label for="{{ $id }}" class="col-sm-4 col-form-label">{{ $attributes->get('label') }}</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="{{ $id }}" name="{{ $id }}">
    </div>
</div>