@extends('admin.layouts.body-main', ['title'=>__('titles.services.edit')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">


    @include('admin.layouts.messages')

    <form action="{{route('admin.services.update',['service'=>$service->id])}}" method="post" class="create-form"
        enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('admin.layouts.error-validation')
        <div class="create-title">
            <input type="text" name="title" class="input" value="{{$service->title}}" placeholder="Enter Title">
        </div>
        <div class="create-desc">
            <textarea cols="50" rows="5" name="description" class="input"
                placeholder="Enter Description">{{$service->description}}</textarea>
        </div>
        <div class="create-image">
            <input type="file" name="image" hidden='hidden' class="file input" title="Upload an image">
            <button type="button" class="btn btn-file">Choose</button>
            <span class="text-file">No Image Chosen</span>
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="Update" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')