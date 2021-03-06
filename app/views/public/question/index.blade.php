@extends('public.master')

@section('content')

    <!-- Post / Question -->
    @include('public.question.partials.post')

    <!-- Answers -->
    @include('public.question.partials.answers')

    <!-- Answer -->
    @include('public.forms.answer')

@stop

@section('side-menu')

    @include('public.side-menus.question')

@stop