@extends('admin.layouts.body-main', ['title'=>__('titles.profile.create')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')
    <form action="{{route('admin.profile.store')}}" method="post" class="create-form">
        @csrf
        @include('admin.layouts.error-validation')

        <div class="create-name">
            <input type="text" name="name" class="input" value="{{old('name')}}" placeholder="Enter Name">
        </div>
        <div class="create-username">
            <input type="text" name="username" class="input" value="{{old('username')}}" placeholder="Enter Username">
        </div>
        <div class="create-password">
            <input type="password" name="password" class="input" placeholder="Enter Password">
        </div>
        <div class="create-repeat-password">
            <input type="password" name="password_confirmation" class="input" placeholder="Enter Confirmation Password">
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="Create" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')