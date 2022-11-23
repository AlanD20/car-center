@extends('admin.layouts.body-main', ['title'=>__('titles.dashboard')])

@section('body-main')
<div class="body-main py-12 flex flex-col justify-center items-center gap-12">

    @include('admin.layouts.messages')

    <div class="page-rows page-row-1">
        <div class="page-card ">
            <a href="{{route('admin.services.index')}}">
                <span class="icon fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x "></i>
                    <i class="fas fa-chart-network fa-stack-1x fa-inverse"></i>
                </span>
                <span>
                    {{__('index.admin.nav.services.title')}}
                </span>
            </a>
        </div>
        <div class="page-card">
            <a href="{{route('admin.teams.index')}}">
                <span class="icon fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x "></i>
                    <i class="fas fa-user-friends fa-stack-1x fa-inverse"></i>
                </span>
                <span>
                    {{__('index.admin.nav.teams.title')}}
                </span>
            </a>
        </div>
        <div class="page-card ">
            <a href="{{route('admin.partners.index')}}">
                <span class="icon fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x "></i>
                    <i class="fas fa-handshake-alt fa-stack-1x fa-inverse"></i>
                </span>
                <span>
                    {{__('index.admin.nav.partners.title')}}
                </span>
            </a>
        </div>
    </div>
    <div class="page-rows page-row-2 ">
        <div class="page-card ">
            <a href="{{route('admin.profile.index')}}">
                <span class="icon fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x "></i>
                    <i class="fas fa-user fa-stack-1x fa-inverse"></i>
                </span>
                <span>
                    {{__('index.admin.profile.title')}}
                </span>
            </a>
        </div>
        <div class="page-card ">
            <a href="{{route('admin.slides.index')}}">
                <span class="icon fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x "></i>
                    <i class="fas fa-window-restore fa-stack-1x fa-inverse"></i>
                </span>
                <span>
                    {{__('titles.slides.index')}}
                </span>
            </a>
        </div>
        <div class="page-card ">
            <form action="{{route('admin.logout')}}" method="POST">
                @csrf
                <button type="submit" class="w-full">
                    <span class="icon fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x "></i>
                        <i class="fas fa-sign-out-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <span>
                        {{__('index.admin.nav.logout')}}
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footerClass', 'min-w-[350px]')