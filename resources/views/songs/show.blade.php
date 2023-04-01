@extends('layouts.app')

@section('page_name', 'Details')

@section('navbar')
    navbar
@endsection

@section('main_content')
{{ $song->title }}@endsection

@section('footer')
    footer
@endsection