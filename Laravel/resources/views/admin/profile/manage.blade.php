@extends('admin.layouts.body-main', ['title'=>__('titles.profile.manage')])

@section('body-main')

<div class="body-main py-12 flex flex-col gap-2 min-w-[1280px]">
    @include('admin.layouts.flashes.index-message')

    <div class="index-header">
        <div class="name-container">
            <span>name</span>
        </div>
        <div class="desc-container">
            <span>username</span>
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
            <a href="{{route('admin.profile.create')}}">
                <div class="icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="text">
                    <span>Create</span>
                </div>
            </a>
        </div>
    </div>
    @forelse ($users as $user)
    @if($user->username === auth()->user()->username)
    <div class="index-content !bg-cBlue-100/20">
        @else
        <div class="index-content">
            @endif
            <div class="name-container">
                <span>{{$user->name}}</span>
            </div>
            <div class="desc-container">
                <span>{{$user->username}}</span>
            </div>
            <div class="updated-at-container">
                <span>{{$user->updated_at}}</span>
            </div>
            <div class="created-at-container">
                <span>{{$user->created_at}}</span>
            </div>
            <div class="action-container">
                <form action="{{route('admin.profile.edit',['user'=>$user->id])}}" method="post">
                    @method('get')
                    @csrf
                    <button type="submit" class="edit">
                        <i class="fas fa-pencil"></i>
                    </button>
                </form>
                <form action="{{route('admin.profile.destroy',['user'=>$user->id])}}" method="post">
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
        {{$users->links()}}

    </div>

    @endsection


    @section('footerClass', 'min-w-[1280px]')