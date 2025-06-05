@extends('layouts.app')

@section('content')
    <style>
        .hovcolor:hover {
            color: black !important;
        }
        .form-action{
            text-align: left;
    width: 100%;
    margin-bottom: 15px;
    font-size: 18px;
        }
    </style>
    <div class="container">
        <h1>Добавить новый элемент</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3 hovcolor">🔙 Вернуться к панели инструментов</a>
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="dataRu" class="form-action">Дата (RU)</label>
                <input type="text" name="dataRu" class="form-control" value="{{ old('titleRu') }}" required>
            </div>

            <div class="mb-3">
                <label for="dataEn" class="form-action">Дата (EN)</label>
                <input type="text" name="dataEn" class="form-control" value="{{ old('titleEn') }}" required>
            </div>
            <div class="mb-3">
                <label for="titleRu" class="form-action">Заголовок (RU)</label>
                <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu') }}" required>
            </div>

            <div class="mb-3">
                <label for="titleEn" class="form-action">Заголовок (EN)</label>
                <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn') }}" required>
            </div>

            <div class="mb-3">
                <label for="descriptionRu" class="form-action">Описание (RU)</label>
                <textarea name="descriptionRu" id="mySummernote" class="form-control" rows="4" required>{{ old('descriptionRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="descriptionEn" class="form-action">Описание (EN)</label>
                <textarea name="descriptionEn" id="mySummernote1" class="form-control"  rows="4" required>{{ old('descriptionEn') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="informationRu" class="form-action">Информация (RU)</label>
                <textarea name="informationRu" id="mySummernote2" class="form-control" rows="4" required>{{ old('descriptionRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="informationEn" class="form-action">Информация (EN)</label>
                <textarea name="informationEn" id="mySummernote3" class="form-control"  rows="4" required>{{ old('descriptionEn') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-action">Изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('blog.index') }}" class="btn btn-success">Назад</a>
        </form>
    </div>
@endsection
