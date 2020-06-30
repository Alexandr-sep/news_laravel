@extends('layouts.default')

@section('content')

<!-- Bootstrap шаблон... -->

<a href="{{route('news.create')}}">
    <i class="fa fa-plus"></i> Добавить новость
</a>

<!-- Текущие задачи -->
@if (count($news) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Новости</h1>
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">
                <!-- Тело таблицы -->
                <tbody>
                @foreach ($news as $one_news)
                    <tr>
                        <!-- Имя новости -->
                        <td class="table-text">
                            <div>{{ $one_news->title }}</div>
                        </td>

                        <td>
                            <form action="{{route('news.create', $one_news->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>

                        <td>
{{--                            <form action="{{route('tasks.edit', $one_news->id)}}" method="post">--}}
{{--                                {{csrf_field()}}--}}
{{--                                {{method_field('GET')}}--}}
{{--                                <button class="btn btn-warning">--}}
{{--                                    <i class="fa fa-edit"></i>--}}
{{--                                </button>--}}
{{--                            </form>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection