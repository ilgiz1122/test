@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">{{ __('Страницы') }}</div>
                        <div class="col-auto"><a href="{{ route('create_page') }}" class="btn btn-primary">Добавить страницу</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Теги</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$page->title}}</td>
                                <td><span class="text-primary">#{{str_replace(', ', ' #', $page->tags)}}</span></td>
                                <td><a href="{{ route('open_page', $page->id) }}">Открыть страницу</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
