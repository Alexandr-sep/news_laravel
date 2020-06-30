@extends('layouts.default')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой новости -->
        <form action="{{ route('news.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="news-title" class="col-sm-3 control-label">Новость</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="news-title" class="form-control">
                </div>

                <div class="col-sm-6">
                    <textarea name="text" class="form-control" rows="5"></textarea>
                </div>
            </div>

            <!-- Кнопка добавления новости -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить новость
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection