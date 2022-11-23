@extends('admin.layouts.body-main', ['title'=>__('titles.teams.create')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')

    <form action="{{route('admin.teams.store',[])}}" method="post" class="create-form" enctype="multipart/form-data">
        @csrf
        @include('admin.layouts.error-validation')

        <div class="locale-container">
            <div class="create-title">
                English
            </div>
            <div class="create-name input--required">
                <input type="text" name="en_name" required class="input" value="{{old('name')}}"
                    placeholder="{{__('index.admin.ph.name')}}" style="direction:ltr !important;">
            </div>
            <div class="create-postion input--required">
                <input type="text" name="en_position" required class="input" value="{{old('position')}}"
                    placeholder="{{__('index.admin.ph.position')}}" style="direction:ltr !important;">
            </div>

        </div>

        <div class="locale-container ku">
            <div class="create-title">
                کوردی
            </div>
            <div class="create-name input--required">
                <input type="text" name="ku_name" required class="input" value="{{old('name')}}"
                    placeholder="{{__('index.admin.ph.name')}}">
            </div>
            <div class="create-postion input--required">
                <input type="text" name="ku_position" required class="input" value="{{old('position')}}"
                    placeholder="{{__('index.admin.ph.position')}}">
            </div>
        </div>

        <div class="locale-container ar">
            <div class="create-title">
                العربية
            </div>
            <div class="create-name input--required">
                <input type="text" name="ar_name" required class="input" value="{{old('name')}}"
                    placeholder="{{__('index.admin.ph.name')}}">
            </div>
            <div class="create-postion input--required">
                <input type="text" name="ar_position" required class="input" value="{{old('position')}}"
                    placeholder="{{__('index.admin.ph.position')}}">
            </div>
        </div>


        <div class="create-image">
            <input type="file" name="image" hidden='hidden' class="file input"
                title="{{__('index.admin.ph.upload_image')}}">
            <button type="button" class="btn btn-file">{{__('index.admin.actions.choose')}}</button>
            <span class="text-file">{{__('index.admin.actions.no_image_chosen')}}</span>
        </div>
        <div class="create-social">
            <input type="text" name="facebook" value="{{old('facebook')}}" class="input"
                placeholder="{{__('index.admin.ph.facebook')}}">
        </div>
        <div class="create-social">
            <input type="text" name="instagram" value="{{old('instagram')}}" class="input"
                placeholder="{{__('index.admin.ph.instagram')}}">
        </div>
        <div class="create-social">
            <input type="text" name="twitter" value="{{old('twitter')}}" class="input"
                placeholder="{{__('index.admin.ph.twitter')}}">
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="{{__('index.admin.actions.create')}}" class="btn">
        </div>
    </form>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')