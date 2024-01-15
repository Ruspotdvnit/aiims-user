<label class="col-form-label">{{ $attributes->get('label') }}</label>
<div class="card border-light">
    <div class="card-body bg-body-secondary">
        <div class="">
            @foreach($data as $title)
            <div class="mt-1">
                <x-value-inputt label="{{ $title }}" xid="{{ strtolower($title) }}" />
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- 
Prothrombin Time PT
MNPT Value -->