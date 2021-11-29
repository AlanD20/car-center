@extends('admin.layouts.body-main', ['title'=>__('titles.about')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')

    <form action="{{route('admin.about.update',['about'=>$about->id])}}" method="post" class="create-form edit-form"
        enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('admin.layouts.error-validation')

        <div class="locale-container">
            <div class="create-title">
                English
            </div>
            <div class="create-desc">
                <textarea cols="50" rows="5" name="en_content" class="input input--en"
                    placeholder="{{__('index.admin.ph.description')}}">{{$about->en_content}}</textarea>
            </div>
        </div>
        <div class="locale-container">
            <div class="create-title">
                کوردی
            </div>
            <div class="create-desc">
                <textarea cols="50" rows="5" name="ku_content" class="input"
                    placeholder="{{__('index.admin.ph.description')}}">{{$about->ku_content}}</textarea>
            </div>
        </div>
        <div class="locale-container">
            <div class="create-title">
                العربية
            </div>
            <div class="create-desc">
                <textarea cols="50" rows="5" name="ar_content" class="input"
                    placeholder="{{__('index.admin.ph.description')}}">{{$about->ar_content}}</textarea>
            </div>
        </div>

        <div class="create-image">
            <input type="file" name="image" hidden='hidden' class="file input"
                title="{{__('index.admin.ph.upload_image')}}">
            <button type="button" class="btn btn-file">{{__('index.admin.actions.choose')}}</button>
            <span class="text-file">{{__('index.admin.actions.no_image_chosen')}}</span>
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="{{__('index.admin.actions.update')}}" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')