@error($key)
<div class="invalid-feedback">
    {{ $message }}
</div>
@else
{{ $slot }}
@enderror