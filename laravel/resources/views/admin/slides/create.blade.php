@extends('admin.layouts.body-main', ['title'=>__('titles.slides.create')])

@section('body-main')
<div class="body-main py-12 flex justify-center items-center gap-2 w-full">

    @include('admin.layouts.messages')

    <form action="{{route('admin.slides.store')}}" method="post" class="create-form create-slide"
        enctype="multipart/form-data">
        @csrf
        @include('admin.layouts.error-validation')

        <div class="create-image">
            <input type="file" name="file" hidden='hidden' class="file input"
                title="{{__('index.admin.ph.upload_file')}}">
            <button type="button" class="btn btn-file">{{__('index.admin.actions.choose')}}</button>
            <span class="text-file input--required">{{__('index.admin.actions.no_file_chosen')}}</span>
        </div>
        <div class="create-submit">
            <input type="submit" name="submit" value="{{__('index.admin.actions.create')}}" class="btn">
        </div>
    </form>

</div>
@endsection

@section('footerClass', 'min-w-[350px]')