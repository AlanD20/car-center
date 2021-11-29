@extends('admin.layouts.body-main', ['title'=>__('titles.slides.index')])

@section('head-top')
<link rel="stylesheet" href="{{asset('css/plyr.css')}}" />
@endsection
@section('head-bottom')
<script defer type="module" src="{{asset('js/app_plyr.js')}}"></script>
@endsection

@section('body-main')
@section('body-container-class', 'body-main__min')
<div class="body-main py-12 flex flex-col gap-2">

    @include('admin.layouts.flashes.index-message')

    <div class="create-container">
        <a href="{{route('admin.slides.create')}}">
            <div class="icon">
                <i class="fas fa-plus-circle"></i>
            </div>
            <div class="text">
                <span>{{__('index.admin.actions.create')}}</span>
            </div>
        </a>
    </div>
    <div class="slide-container">

        {{-- Cards from Database --}}
        @foreach($slides as $slide)
        @if($slide->type ==='image')
        <div class="slide-container__card">
            <div class="slide-container__card-wrapper">
                <form action="{{route('admin.slides.edit',['slide'=>$slide->id])}}" method="post">
                    @method('get')
                    @csrf
                    <button type="submit" class="edit" title="{{__('index.admin.actions.edit')}}">
                        <i class="fas fa-pencil"></i>
                    </button>
                </form>
                <form action="{{route('admin.slides.destroy',['slide'=>$slide->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="delete" title="{{__('index.admin.actions.delete')}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
            <img class="slide-container__file" src="{{asset($slide->file)}}">
        </div>

        @elseif($slide->type ==='video')
        <div class="slide-container__card">
            <div class="slide-container__card-wrapper slide-container__card-wrapper--controls">
                <form action="{{route('admin.slides.edit',['slide'=>$slide->id])}}" method="post">
                    @method('get')
                    @csrf
                    <button type="submit" class="edit" title="{{__('index.admin.actions.edit')}}">
                        <i class="fas fa-pencil"></i>
                    </button>
                </form>
                <form action="{{route('admin.slides.destroy',['slide'=>$slide->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="delete" title="{{__('index.admin.actions.delete')}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
            <video class="slide-container__file imported-video playsinline controls">
                <source src="{{asset($slide->file)}}" type="video/mp4">
            </video>
        </div>
        @endif

        @endforeach


        {{-- image template --}}
        {{-- <div class="slide-container__card">
            <div class="slide-container__card-wrapper">
                <form action="{{route('admin.slides.edit',['slide'=>1])}}" method="post">
                    @method('get')
                    @csrf
                    <button type="submit" class="edit" title="{{__('index.admin.actions.edit')}}">
                        <i class="fas fa-pencil"></i>
                    </button>
                </form>
                <form action="{{route('admin.slides.destroy',['slide'=>1])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="delete" title="{{__('index.admin.actions.delete')}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
            <img class="slide-container__file" src="{{asset('uploads/images/slides/4.jpg')}}">
        </div> --}}



        {{-- Video Template --}}
        {{-- <div class="slide-container__card">
            <div class="slide-container__card-wrapper slide-container__card-wrapper--controls">
                <form action="{{route('admin.slides.edit',['slide'=>1])}}" method="post">
                    @method('get')
                    @csrf
                    <button type="submit" class="edit" title="{{__('index.admin.actions.edit')}}">
                        <i class="fas fa-pencil"></i>
                    </button>
                </form>
                <form action="{{route('admin.slides.destroy',['slide'=>1])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="delete" title="{{__('index.admin.actions.delete')}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
            <video class="slide-container__file imported-video playsinline controls">
                <source src="{{asset('uploads/videos/nature.mp4')}}" type="video/mp4">
            </video>
        </div> --}}



        {{-- Create Slide Card --}}
        <div class="slide-container__card bg-white flex justify-center items-center rounded-lg">
            {{-- <div class="slide-container__card-wrapper"></div> --}}
            <a href="{{route('admin.slides.create')}}" class="slide-container__create">
                <div class="icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="text">
                    <span>{{__('index.admin.actions.create')}}</span>
                </div>
            </a>
        </div>

        {{-- create button --}}
        {{-- <div class="create-container">
            <a href="{{route('admin.slides.create')}}">
                <div class="icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="text">
                    <span>{{__('index.admin.actions.create')}}</span>
                </div>
            </a>
        </div> --}}
    </div>
    {{-- @forelse ($partners as $partner)
    <div class="index-content">
        <div class="image-container">
            <img src="{{URL::to($partner->image)}}" alt="">
        </div>
        <div class="title-container">
            <span>
                @if(app()->isLocale('en'))
                {{$partner->en_name}}
                @elseif(app()->isLocale('ku'))
                {{$partner->ku_name}}
                @elseif(app()->isLocale('ar'))
                {{$partner->ar_name}}
                @endif
            </span>
        </div>
        <div class="desc-container">
            <span>
                @if(app()->isLocale('en'))
                {{$partner->en_description}}
                @elseif(app()->isLocale('ku'))
                {{$partner->ku_description}}
                @elseif(app()->isLocale('ar'))
                {{$partner->ar_description}}
                @endif
            </span>
        </div>
        <div class="created-by-container">
            <span>{{$partner->user->name}}</span>
        </div>
        <div class="updated-at-container">
            <span>{{$partner->updated_at}}</span>
        </div>
        <div class="created-at-container">
            <span>{{$partner->created_at}}</span>
        </div>
        <div class="action-container">
            <form action="{{route('admin.partners.edit',['partner'=>$partner->id])}}" method="post">
                @method('get')
                @csrf
                <button type="submit" class="edit" title="{{__('index.admin.actions.edit')}}">
                    <i class="fas fa-pencil"></i>
                </button>
            </form>
            <form action="{{route('admin.partners.destroy',['partner'=>$partner->id])}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="delete" title="{{__('index.admin.actions.delete')}}">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </div>
    </div>
    @empty
    <div class="no-content">
        <span>{{__('content.no_content')}}</span>
    </div>
    @endforelse
    {{$partners->links()}} --}}

</div>

@endsection

@section('footerClass', 'min-w-[250px]')