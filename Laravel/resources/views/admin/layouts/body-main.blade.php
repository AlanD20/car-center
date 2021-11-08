@extends('admin.layouts.template')
@php
$title = $title ?? "Dashboard";
$username = $username ?? "Admin";
@endphp
@section('title','Admin - ' . $title)

@section('nav')
@include('admin.layouts.navbar')
@endsection

@section('body')

<div class="body-container">

    @include('admin.layouts.body-header', ['title'=> $title,'username'=>$username])

    @yield('body-main')

    @include('admin.layouts.body-footer')
</div>

@endsection

@section('script')
@yield('script')
@endsection