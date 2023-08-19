@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col"><b>{{ __('Добавить страницу') }}</b></div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store_page') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-form-label ">{{ __('Название страницы') }}</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                        </div>
                        <div class="row mb-3">
                            <label for="tegs" class="col-form-label ">{{ __('Теги') }}</label>
                            <input name='tags' value='' class="form-control pb-5" autofocus>
                        </div>
                        <div class="row mb-3">
                            <label for="body" class="col-form-label ">{{ __('Содержание') }}</label>
                            <textarea name="body" id="summernote"></textarea>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-auto"><button class="btn btn-primary">Сохранить</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
