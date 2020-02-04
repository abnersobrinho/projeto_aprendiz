@extends('layouts.site.adm')

@include('layouts._nav')

@section('content')

<div class="container">
    <div class="row pt-5"></div>
    @include('site.includes._cursos')
</div>

@endsection
