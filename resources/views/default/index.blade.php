@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection


@section('sidebar')
{{--    @parent--}}
    <div class="sidebar-module">
        <h4>About</h4>
        <p>Etiam porta <em>asknflkasflna</em> afjasbfkabsflasf</p>
    </div>
@endsection


@section('content')
    @include('default.content')
@endsection
