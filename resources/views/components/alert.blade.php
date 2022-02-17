@if(session()->has('success'))
<div class="alert alert-success text-white">
    {{ session('success') }}
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger text-white">
    {{ session('error') }}
</div>
@endif