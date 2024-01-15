<div class="row">
    <label for="{{ $slot }}" class="col col-form-label">{{ $slot }}</label>
    <select class="col form-select " name="{{ $slot }}" aria-label="{{ $slot }}">
        @foreach($data as $op)
            <option value="{{ strtolower($op) }}">{{ $op }}</option>
        @endforeach
    </select>
</div>