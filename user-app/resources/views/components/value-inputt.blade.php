<div class="row">
    <label for="{{ $attributes->get('xid') }}" class="col-sm-4 col-form-label">{{ $attributes->get('label') }}</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="{{ $attributes->get('xid') }}" name="{{ strtolower($attributes->get('xid')) }}">
    </div>
</div>