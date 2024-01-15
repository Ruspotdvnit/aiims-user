<div class="row">
    <label class="@if(count($options)>2) col-3 @else col-4 @endif">{{ $val }}</label>
    @php
        $count=0;
    @endphp

    @foreach($options as $op)
    <div class="form-check @if(count($options)>2) col-3 @else col-4 @endif ">
        <input class="form-check-input" type="radio" name="is_{{ strtolower($val) }}" 
            id="inlineRadio{{ strtolower($val) }}" value="{{ $count++ }}">
        <label class="form-check-label" for="inlineRadio{{ strtolower($val) }}">{{ $op }}</label>
    </div>
    @endforeach
    <input type="hidden" name="{{ strtolower($val) }}" value="{{ $val }}">
</div>