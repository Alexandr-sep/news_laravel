@extends('layouts.default')

@section('content')
<div class="bg-color">
    <nav class="navbar navbar-expand-lg navbar-light py-4" id="mainNav">
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('news.create')}}">
            <i class="fa fa-plus"> {{ trans('messages.index.add_news') }}</i>
        </a>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-lg-3 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('news.main') }}">
                            <i class="fa fa-home size-icon" aria-hidden="true"> {{ trans('messages.index.main') }}</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    @if (count($news) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-uppercase text-white font-weight-bold">{{ trans('messages.index.news') }}</h1>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- Тело таблицы -->
                    <tbody>
                    @foreach ($news as $one_news)
                        <tr>
                            <!-- Имя новости -->
                            <td class="text-uppercase text-white font-weight-bold col-sm-8">
                                <div>
                                    <a href="{{route('news.show', $one_news->id)}}">{{ $one_news->title }}</a>
                                </div>
                            </td>
                            <td class="col-sm-4">
                                <form action="{{route('news.destroy', $one_news->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('news.edit', $one_news->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('GET')}}
                                    <button class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection

