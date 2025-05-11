@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Խմբագրել բանները</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('shipings.update', $shipings->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titleRu" class="form-label">Վերնագիր (RU)</label>
            <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu', $shipings->titleRu) }}" required>
        </div>

        <div class="mb-3">
            <label for="titleEn" class="form-label">Վերնագիր (EN)</label>
            <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn', $shipings->titleEn) }}" required>
        </div>

        <div class="mb-3">
            <label for="descriptionRu" class="form-label">Նկարագրություն (RU)</label>
            <textarea name="descriptionRu" class="form-control" rows="4" required>{{ old('descriptionRu', $shipings->descriptionRu) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="descriptionEn" class="form-label">Նկարագրություն (EN)</label>
            <textarea name="descriptionEn" class="form-control" rows="4" required>{{ old('descriptionEn', $shipings->descriptionEn) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Ընթացիկ Նկարը</label><br>
            <img src="{{ asset('storage/' . $shipings->image) }}" alt="Banner Image" width="150">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Նոր Նկար (ըստ ցանկության)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Թարմացնել</button>
        <a href="{{ route('shipings.index') }}" class="btn btn-secondary">Հետ</a>
    </form>
</div>
@endsection
