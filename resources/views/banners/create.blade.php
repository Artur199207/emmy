@extends('layouts.app')

@section('content')
    <style>
        .hovcolor:hover {
            color: black !important;
        }
    </style>
    <div class="container">
        <h1>Ավելացնել նոր բաններ</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{ url('admin/dashboard') }}" class="btn btn-primary mb-3 hovcolor">🔙 Վերադառնալ Վահանակ</a>
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="titleRu" class="form-label">Վերնագիր (RU)</label>
                <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu') }}" required>
            </div>

            <div class="mb-3">
                <label for="titleEn" class="form-label">Վերնագիր (EN)</label>
                <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn') }}" required>
            </div>

            <div class="mb-3">
                <label for="descriptionRu" class="form-label">Նկարագրություն (RU)</label>
                <textarea name="descriptionRu" class="form-control" rows="4" required>{{ old('descriptionRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="descriptionEn" class="form-label">Նկարագրություն (EN)</label>
                <textarea name="descriptionEn" class="form-control" rows="4" required>{{ old('descriptionEn') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Նկար</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-success">Պահպանել</button>
            <a href="{{ route('banners.index') }}" class="btn btn-secondary">Հետ</a>
        </form>
    </div>
@endsection
