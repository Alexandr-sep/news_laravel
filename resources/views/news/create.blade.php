@extends('layouts.default')

@section('content')
<div class="bg-color">

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой новости -->
        <div class="container">
            <form action="{{ route('news.store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Имя задачи -->
                <div class="form-group p-3">
                    <h1 class="text-uppercase text-white font-weight-bold">{{ trans('messages.create.add_news') }}</h1>

                    <div class="col-sm-6 p-3" >
                        <label for="news-title" class="text-white">{{ trans('messages.create.title') }}</label>
                        <input type="text" name="title" id="news-title" class="form-control">
                    </div>

                    <div class="col-sm-6 p-3">
                        <label for="news-text" class="text-white">{{ trans('messages.create.text') }}</label>
                        <textarea name="text" class="form-control" rows="5"></textarea>
                    </div>
                </div>

                <!-- Кнопка добавления новости -->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="form-group">
                        <div class="col-lg-8 align-self-baseline">
                            <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger">
                                {{ trans('messages.create.add') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 align-self-baseline">
                            <a href="{{route('news.list')}}" class="btn btn-danger btn-xl js-scroll-trigger">{{ trans('messages.create.cancel') }}</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection