<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="{{$page->tags}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$page->title}}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mt-5">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <b>{{$page->title}}</b>
                                </div>
                            </div>
                            <div class="card-body">
                                {!!$page->body!!}
                                <p class="mt-5">Теги: <span class="text-primary">#{{str_replace(', ', ' #', $page->tags)}}</span></p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-auto"><p>Отображение тега: </p></div>
                            <div class="col"><pre>&lt;meta name=&quot;keywords&quot; content=&quot;{{$page->tags}}&quot;&gt; </pre></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
