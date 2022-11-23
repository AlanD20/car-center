@extends('admin.layouts.body-main', ['title'=>__('titles.partners.create')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')

    <form action="{{route('admin.partners.store')}}" method="post" class="create-form" enctype="multipart/form-data">
        @csrf
        @include('admin.layouts.error-validation')

        <div class="locale-container">
            <div class="create-title">
                English
            </div>
            <div class="create-name input--required">
                <input type="text" name="en_name" class="input" value="{{old('en_name')}}"
                    placeholder="{{__('index.admin.ph.name')}}" style="direction:ltr !important;">
            </div>
            <div class="create-desc input--required">
                <textarea cols="50" rows="5" name="en_description" style="direction:ltr !important;" class="input"
                    placeholder="{{__('index.admin.ph.description')}}">{{old('en_description')}}</textarea>
            </div>
        </div>
        <div class="locale-container ku">
            <div class="create-title">
                کوردی
            </div>
            <div class="create-name input--required">
                <input type="text" name="ku_name" class="input" value="{{old('ku_name')}}"
                    placeholder="{{__('index.admin.ph.name')}}">
            </div>
            <div class="create-desc input--required">
                <textarea cols="50" rows="5" name="ku_description" class="input"
                    placeholder="{{__('index.admin.ph.description')}}">{{old('ku_description')}}</textarea>
            </div>
        </div>
        <div class="locale-container ar">
            <div class="create-title">
                العربية
            </div>
            <div class="create-name input--required">
                <input type="text" name="ar_name" class="input" value="{{old('ar_name')}}"
                    placeholder="{{__('index.admin.ph.name')}}">
            </div>
            <div class="create-desc input--required">
                <textarea cols="50" rows="5" name="ar_description" class="input"
                    placeholder="{{__('index.admin.ph.description')}}">{{old('ar_description')}}</textarea>
            </div>
        </div>

        <div class="create-image">
            <input type="file" name="image" hidden='hidden' class="file input"
                title="{{__('index.admin.ph.upload_image')}}">
            <button type="button" class="btn btn-file">{{__('index.admin.actions.choose')}}</button>
            <span class="text-file input--required">{{__('index.admin.actions.no_image_chosen')}}</span>
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="{{__('index.admin.actions.create')}}" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')