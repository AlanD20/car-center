@extends('admin.layouts.body-main', ['title'=>__('titles.teams.create')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')

    <form action="{{route('admin.teams.store',[])}}" method="post" class="create-form" enctype="multipart/form-data">
        @csrf
        @include('admin.layouts.error-validation')
        <div class="create-name input-required">
            <input type="text" name="name" required class="input" value="{{old('name')}}" placeholder="Enter Name">
        </div>
        <div class="create-postion input-required">
            <input type="text" name="position" required class="input" value="{{old('position')}}"
                placeholder="Enter Position">
        </div>
        <div class="create-image">
            <input type="file" name="image" hidden='hidden' class="file input" title="Upload an image">
            <button type="button" class="btn btn-file">Choose</button>
            <span class="text-file input-required">No Image Chosen</span>
        </div>
        <div class="create-social">
            <input type="text" name="facebook" value="{{old('facebook')}}" class="input"
                placeholder="Enter Facebook profile">
        </div>
        <div class="create-social">
            <input type="text" name="instagram" value="{{old('instagram')}}" class="input"
                placeholder="Enter Instagram profile">
        </div>
        <div class="create-social">
            <input type="text" name="twitter" value="{{old('twitter')}}" class="input"
                placeholder="Enter Twitter profile">
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="Create" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')