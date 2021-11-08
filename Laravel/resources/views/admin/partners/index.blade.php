@extends('admin.layouts.body-main', ['title'=>__('titles.partners.index')])

@section('body-main')

<div class="body-main py-12 flex flex-col gap-2 min-w-[1280px]">

    @include('admin.layouts.flashes.index-message')

    <div class="index-header">
        <div class="image-container">
            <span>Image</span>
        </div>
        <div class="title-container">
            <span>name</span>
        </div>
        <div class="desc-container">
            <span>description</span>
        </div>
        <div class="created-by-container">
            <span>Created By</span>
        </div>
        <div class="updated-at-container">
            <span>Updated At</span>
        </div>
        <div class="created-at-container">
            <span>created at</span>
        </div>
        <div class="action-container">
            <span>Action</span>
        </div>
        <div class="create-container">
            <a href="{{route('admin.partners.create')}}">
                <div class="icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="text">
                    <span>Create</span>
                </div>
            </a>
        </div>
    </div>
    @forelse ($partners as $partner)
    <div class="index-content">
        <div class="image-container">
            <img src="{{URL::to($partner->image)}}" alt="">
        </div>
        <div class="title-container">
            <span>{{$partner->name}}</span>
        </div>
        <div class="desc-container">
            <span>{{$partner->description}}</span>
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
                <button type="submit" class="edit">
                    <i class="fas fa-pencil"></i>
                </button>
            </form>
            <form action="{{route('admin.partners.destroy',['partner'=>$partner->id])}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="delete">
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
    {{$partners->links()}}

</div>

@endsection

@section('footerClass', 'min-w-[1280px]')