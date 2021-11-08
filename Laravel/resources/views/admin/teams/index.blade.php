@extends('admin.layouts.body-main', ['title'=>__('titles.teams.index')])

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
            <span>position</span>
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
            <a href="{{route('admin.teams.create')}}">
                <div class="icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="text">
                    <span>Create</span>
                </div>
            </a>
        </div>
    </div>
    @forelse ($teams as $team)
    <div class="index-content">
        <div class="image-container">
            <img src="{{URL::to($team->image)}}" alt="">
        </div>
        <div class="title-container">
            <span>{{$team->name}}</span>
        </div>
        <div class="desc-container">
            <span>{{$team->position}}</span>
        </div>
        <div class="created-by-container">
            <span>{{$team->user->name}}</span>
        </div>
        <div class="updated-at-container">
            <span>{{$team->updated_at}}</span>
        </div>
        <div class="created-at-container">
            <span>{{$team->created_at}}</span>
        </div>
        <div class="action-container">
            <form action="{{route('admin.teams.edit',['team'=>$team->id], false)}}" method="post">
                @method('get')
                @csrf
                <button type="submit" class="edit">
                    <i class="fas fa-pencil"></i>
                </button>
            </form>
            <form action="{{route('admin.teams.destroy',['team'=>$team->id], false)}}" method="post">
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
    {{$teams->links()}}
</div>

@endsection

@section('footerClass', 'min-w-[1280px]')