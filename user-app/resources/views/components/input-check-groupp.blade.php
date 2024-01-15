<label for="co-morbidity" class="col-form-label">{{ $attributes->get('name') }}</label>
<div class="card border-light">
    <div class="card-body bg-body-secondary">
        @foreach($data as $val)
            <x-inline-form-checkk :val=$val :options=$options />
        @endforeach
    </div>
</div>