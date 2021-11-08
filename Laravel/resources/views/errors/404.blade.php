@extends('admin.layouts.template')

@section('body')
<div class="body-container overflow-hidden flex flex-col justify-center items-center break-word ml-0 !animate-none">
    <h1 class="text-3xl font-bold uppercase">404 page not found!</h1>
    <h3 class="mt-3 text-lg">The page you are looking for is not here.</h3>

    <h4 class="mt-8">
        <a href="{{route('home')}}" class="font-semibold text-cBlue-300 capitalize hover:text-cGray-400">
            Click here to return to home page
        </a>
    </h4>
</div>
@endsection