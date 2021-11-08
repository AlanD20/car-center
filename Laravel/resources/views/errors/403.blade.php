@extends('admin.layouts.template')

@section('body')
<div class="body-container overflow-hidden flex flex-col justify-center items-center break-word ml-0 !animate-none">
    <h1 class="text-3xl font-bold uppercase">403 Access is forbidden</h1>
    <h3 class="mt-3 text-lg">You can not access the current page, it does not supposed to be visited.</h3>

    <h4 class="mt-8">
        <a href="{{route('home')}}" class="font-semibold text-cBlue-300 capitalize hover:text-cGray-400">
            Click here to return to home page
        </a>
    </h4>
</div>
@endsection