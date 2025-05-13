@extends('layout')

@section('title', 'Home')

@section('content')
    @include('components.hero')
    @include('components.services')
    @include('components.projects')
    @include('components.gallery')
    @include('components.about')
    @include('components.pricing')
    @include('components.form')
@endsection

