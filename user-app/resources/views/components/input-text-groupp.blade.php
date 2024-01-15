<div class="mb-3">
    <label class="col-form-label">{{ $attributes->get('name') }}</label>
    <div class="card border-light">
        <div class="card-body bg-body-secondary">
            @foreach($data as $category)
            <div class="row mt-2">
                @foreach($category as $item)
                    <div class="col-4">
                        <x-value-inputt label="{{ $item }}" xid="{{ $item }}" />
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>