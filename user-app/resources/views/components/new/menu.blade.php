@php
    $string1 = $sub.'_'.strtolower(str_replace([' ', '(', ')', '/', ',','-','%','?'], '_', $slot));
    $string2 = "";

    if ($attributes->has(['tail'])){
    $string2 = $attributes->get('tail');
    }

    $id = $string1 . $string2;
@endphp

<div class="row">
    <label for="{{ $id }}" class="col col-form-label">{{ $slot }}</label>
    <select class="col form-select " id="{{ $id }}" name="{{ $id }}" aria-label="{{ $id }}">

        @foreach($data as $op)
        <option 
            @if(strtolower($op)!='select')
                value="{{ strtolower($op) }}"
            @else value="" 
            @endif > {{ $op }}</option>
        @endforeach
    </select>
</div>