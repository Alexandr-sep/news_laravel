@extends('layouts.default')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">{{trans('messages.welcome.text')}}</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('news.list')}}">{{trans('messages.welcome.button')}}</a>
                </div>
            </div>
        </div>
    </header>
@endsection
