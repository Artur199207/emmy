<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}" type="image/x-icon">

    <!-- seo -->
    <meta name="description"
        content="Эмми Мебель предлагает стильную и качественную мебель по доступным ценам. У нас вы найдёте всё для уюта вашего дома: диваны, кровати, шкафы и многое другое.">
    <meta name="keywords"
        content="Эмми Мебель, мебель, купить мебель, диваны, кровати, шкафы, мебель для дома, современная мебель">
    <meta name="author" content="Emmy Mebeli">
    <meta property="og:title" content="Эмми Мебель – Мебель вашей мечты">
    <meta property="og:description" content="Современная мебель от Emmy Mebeli – стиль, комфорт и качество.">
    <meta property="og:image" content="{{ asset('assets/images/logo.jpg') }}">
    <meta property="og:url" content="https://example.com">
    <meta property="og:type" content="website">

    <!-- Open Graph для соц. сетей (например, Facebook) -->
    <meta property="og:title" content="Эмми Мебель – Мебель вашей мечты">
    <meta property="og:description" content="Современная мебель от Emmy Mebeli – стиль, комфорт и качество.">
    <meta property="og:image" content="{{ asset('assets/images/logo.jpg') }}">
    <meta property="og:url" content="https://emmymebel.ru">
    <meta property="og:type" content="website">

    <!-- Twitter-карта (если используете Twitter для продвижения) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Эмми Мебель – Мебель вашей мечты">
    <meta name="twitter:description" content="Современная мебель от Emmy Mebeli – стиль, комфорт и качество.">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.jpg') }}">

    <!-- css link -->

    <link rel="stylesheet" href="{{ asset('assets/project/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/project/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/project/css/style.css') }}">


        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


</head>

<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                                @if (Route::has('login'))
    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
    @endif

                                @if (Route::has('register'))
    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
    @endif
@else
    <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
        @include('layouts.inc.frontend-navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.inc.frontend-footer')

    </div>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/project/js/header.js') }}"></script>
    <script src="{{ asset('assets/project/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/project/js/script.js') }}"></script>


    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            const editorIds = [
                'mySummernote', 'mySummernote1', 'mySummernote2', 'mySummernote3', 'mySummernote4',
                'mySummernote5', 'mySummernote6', 'mySummernote7', 'mySummernote8', 'mySummernote9',
                'mySummernote10', 'mySummernote11', 'mySummernote12', 'mySummernote13', 'mySummernote14',
                'mySummernote15', 'mySummernote16'
            ];

            editorIds.forEach(function(id) {
                $("#" + id).summernote({
                    height: 300,
                    minHeight: null,
                    maxHeight: null,
                    focus: true,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['insert', ['picture', 'link', 'video']],
                        ['fontname', ['fontname']],
                        ['table', ['table']],
                        ['view', ['fullscreen', 'codeview', 'help']],
                    ],
                    fontNames: ['Arial', 'Times New Roman', 'Verdana', 'Courier New', 'Tahoma'],
                    fontNamesIgnoreCheck: ['Times New Roman'],
                    callbacks: {
                        onImageUpload: function(files) {
                            for (let i = 0; i < files.length; i++) {
                                const file = files[i];
                                const fileType = file.type;
                                const reader = new FileReader();

                                reader.onload = function(e) {
                                    const fileURL = e.target.result;

                                    if (fileType === 'application/pdf') {
                                        const iframe =
                                            `<iframe src="${fileURL}" width="100%" height="500px" style="border:1px solid #ccc;margin-bottom:10px;"></iframe>`;
                                        $("#" + id).summernote('pasteHTML', iframe);
                                    } else if (fileType.startsWith('image/')) {
                                        $("#" + id).summernote("insertImage", fileURL,
                                            function($image) {
                                                $image.css('float', 'left');
                                                $image.css('margin-right', '10px');
                                            });
                                    } else {
                                        alert(
                                            "Միայն նկարներ կամ PDF ֆայլեր կարելի է ավելացնել:"
                                            );
                                    }
                                };

                                reader.readAsDataURL(file);
                            }
                        }
                    }
                });
            });

            $('.dropdown-toggle').dropdown({
                autoClose: 'outside'
            });
        });
    </script>
    <script>
        let table = new DataTable('#myDataTable');
    </script>
</body>

</html>
