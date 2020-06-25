@extends('layouts.default')

@section('content')
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Приветствуем Вас на нашем новостном сайте!</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="{{route('news.list')}}">Читать новости</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
            </div>
        </div>
    </div>
@endsection