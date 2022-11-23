@if ($errors->any())
<div class="errors ">
    @foreach ($errors->all() as $error)
    <span>
        *&nbsp;{{$error}}
    </span>
    @endforeach
</div>
@endif