@extends('admin.layouts.body-main', ['title'=>__('titles.teams.edit')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')

    <form action="{{route('admin.teams.update',['team'=>$team->id])}}" method="post" class="create-form"
        enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('admin.layouts.error-validation')
        <div class="create-name">
            <input type="text" name="name" class="input" value="{{$team->name}}" placeholder="Enter Name">
        </div>
        <div class="create-name">
            <input type="text" name="position" class="input" value="{{$team->position}}" placeholder="Enter Position">
        </div>
        <div class="create-image">
            <input type="file" name="image" hidden='hidden' class="file input" title="Upload an image">
            <button type="button" class="btn btn-file">Choose</button>
            <span class="text-file">No Image Chosen</span>
        </div>
        <div class="create-social">
            <input type="text" name="facebook" value="{{$team->socials['facebook']??NULL}}" class="input"
                placeholder="Enter Facebook profile">
        </div>
        <div class="create-social">
            <input type="text" name="instagram" value="{{$team->socials['instagram']??NULL}}" class="input"
                placeholder="Enter Instagram profile">
        </div>
        <div class="create-social">
            <input type="text" name="twitter" value="{{$team->socials['twitter']??NULL}}" class="input"
                placeholder="Enter Twitter profile">
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="Update" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')