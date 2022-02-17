@php
if($errors->has($attributes["name"])) {
$class = "form-control is-invalid";
} else {
$class = "form-control";
}
if($attributes["placeholder"]) {
$placeholder = Str::ucfirst(Str::replace("_", " ", $attributes["placeholder"]));
} else {
$placeholder = Str::ucfirst(Str::replace("_", " ", $attributes["name"]));
}
@endphp

<input {{ $attributes->merge(["class" => $class]) }} placeholder="{{ $placeholder }}" />