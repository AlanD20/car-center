@extends('admin.layouts.body-main', ['title'=>__('titles.services.index')])

@section('body-main')

<div class="body-main py-12 flex flex-col gap-2 min-w-[1280px]">

    @include('admin.layouts.flashes.index-message')

    <div class="index-header">
        <div class="image-container">
            <span>{{__('index.admin.table.image')}}</span>
        </div>
        <div class="title-container">
            <span>{{__('index.admin.table.title')}}</span>
        </div>
        <div class="desc-container">
            <span>{{__('index.admin.table.description')}}</span>
        </div>
        <div class="created-by-container">
            <span>{{__('index.admin.table.created_by')}}</span>
        </div>
        <div class="updated-at-container">
            <span>{{__('index.admin.table.updated_at')}}</span>
        </div>
        <div class="created-at-container">
            <span>{{__('index.admin.table.created_at')}}</span>
        </div>
        <div class="action-container">
            <span>{{__('index.admin.table.actions')}}</span>
        </div>
        <div class="create-container">
            <a href="{{route('admin.services.create')}}">
                <div class="icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="text">
                    <span>{{__('index.admin.actions.create')}}</span>
                </div>
            </a>
        </div>
    </div>
    @forelse ($services as $service)
    <div class="index-content">
        <div class="image-container">
            <img src="{{URL::to($service->image)}}" alt="">
        </div>
        <div class="title-container">
            <span>
                @if(app()->isLocale('en'))
                {{$service->en_title}}
                @elseif(app()->isLocale('ku'))
                {{$service->ku_title}}
                @elseif(app()->isLocale('ar'))
                {{$service->ar_title}}
                @endif
            </span>
        </div>
        <div class="desc-container">
            <span>
                @if(app()->isLocale('en'))
                {{$service->en_description}}
                @elseif(app()->isLocale('ku'))
                {{$service->ku_description}}
                @elseif(app()->isLocale('ar'))
                {{$service->ar_description}}
                @endif
            </span>
        </div>
        <div class="created-by-container">
            <span>{{$service->user->name}}</span>
        </div>
        <div class="updated-at-container">
            <span>{{$service->updated_at}}</span>
        </div>
        <div class="created-at-container">
            <span>{{$service->created_at}}</span>
        </div>
        <div class="action-container">
            <form action="{{route('admin.services.edit',['service'=>$service->id])}}" method="post">
                @method('get')
                @csrf
                <button type="submit" class="edit" title="{{__('index.admin.actions.edit')}}">
                    <i class="fas fa-pencil"></i>
                </button>
            </form>
            <form action="{{route('admin.services.destroy',['service'=>$service->id])}}" method="post">
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

    {{$services->links()}}


</div>

@endsection

@section('footerClass', 'min-w-[1280px]')