@extends('layouts.default')

@section('content')
    <div class="bg-color">
        <div class="container-fluid p-3">
            <div class="col-lg-8 align-self-baseline">
                <a class="btn btn-info btn-xl js-scroll-trigger" href="{{route('news.list')}}">
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"> {{ trans('messages.show.go_back') }}</i>
                </a>
            </div>
        </div>
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">{{ $news->title }}</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="text-justify align-self-baseline">
                        <p class="text-white-75 font-weight-light">{{ $news->text }}</p>
                    </div>
                </div>
            </div>
        <div class="container-fluid p-3">
            <div class="col-lg-8 align-self-baseline">
                <a class="btn btn-info btn-xl js-scroll-trigger" href="{{route('news.list')}}">
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"> {{ trans('messages.show.go_back') }}</i>
                </a>
            </div>
        </div>
    </div>
@endsection

