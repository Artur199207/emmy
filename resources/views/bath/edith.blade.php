@extends('layouts.app')

@section('content')
    <style>
        .hovcolor:hover {
            color: black !important;
        }

        .form-action {
            text-align: left;
            width: 100%;
            margin-bottom: 15px;
            font-size: 18px;
        }
    </style>

    <div class="container">
        <h1>Редактировать элемент</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('bath.index') }}" class="btn btn-primary mb-3 hovcolor">🔙 Назад к списку</a>

        <form action="{{ route('bath.update', $bath->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Available --}}
            <div class="form-group form-action">
                <label><strong>в наличии</strong></label><br>
                <label>
                    <input type="radio" name="available" value="1" {{ $bath->available ? 'checked' : '' }}>
                    Есть
                </label><br>
                <label>
                    <input type="radio" name="available" value="0" {{ !$bath->available ? 'checked' : '' }}>
                    Нет
                </label>
            </div>

            {{-- Titles --}}
            <div class="form-group form-action">
                <label>Заголовок (RU)</label>
                <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu', $bath->titleRu) }}"
                    required>

                <label>Заголовок (EN)</label>
                <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn', $bath->titleEn) }}"
                    required>
            </div>

            {{-- Price --}}
            <div class="form-group form-action">
                <label>цена</label>
                <input type="text" name="priceRu" class="form-control" value="{{ old('priceRu', $bath->priceRu) }}"
                    required>
            </div>

            {{-- Main image --}}
            <div class="mb-3">
                <label class="form-action">Текущее изображение:</label><br>
                @if ($bath->image)
                    <img src="{{ asset('storage/' . $bath->image) }}" width="120"><br>
                @endif
                <label class="form-action">Новое изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            {{-- Gallery --}}
            <div class="mb-3">
                <label class="form-action">Галерея:</label><br>
             @foreach (json_decode($bath->images, true) ?? [] as $img)
    <img src="{{ asset('storage/' . $img) }}" width="100">
@endforeach


                <input type="file" name="images[]" class="form-control mt-2" multiple>
            </div>

            {{-- Articles --}}
            <div class="form-group form-action">
                <label>название продукта (RU)</label>
                <input type="text" name="articleRu" class="form-control"
                    value="{{ old('articleRu', $bath->articleRu) }}" required>

                <label>название продукта (EN)</label>
                <input type="text" name="articleEn" class="form-control"
                    value="{{ old('articleEn', $bath->articleEn) }}" required>
            </div>

            {{-- Descriptions --}}
            <div class="form-group form-action">
                <label>Описание (RU)</label>
                <textarea name="descriptionRu" id="mySummernote" class="form-control" required>{{ old('descriptionRu', $bath->descriptionRu) }}</textarea>

                <label>Описание (EN)</label>
                <textarea name="descriptionEn" id="mySummernote1" class="form-control" required>{{ old('descriptionEn', $bath->descriptionEn) }}</textarea>
            </div>

            {{-- Colors --}}
            <div class="form-group form-action">
                <label><strong>Цвета</strong></label><br>
                <div id="colorInputs">
                  @foreach (json_decode($bath->color, true) ?? [] as $color)
    <div class="color-input-row mb-2">
        <input type="color" name="color[]" value="{{ $color }}">
        <button type="button" onclick="removeColorInput(this)" class="btn btn-sm btn-danger">Удалить</button>
    </div>
@endforeach

                </div>
                <button type="button" onclick="addColorInput()" class="btn btn-sm btn-primary mt-2">➕ Добавить
                    цвет</button>
            </div>

            {{-- Sizes --}}
            <div class="mb-3">
                <label class="form-action">Размеры</label>
                <div class="d-flex gap-2">
                    <input type="text" id="new-size" class="form-control" placeholder="Новый размер (например: XL)">
                    <button type="button" class="btn btn-success" onclick="addNewSize()">+</button>
                </div>
                <select name="sizeRu[]" id="size-select" class="form-select mt-2" multiple>
                   @foreach (json_decode($bath->sizeRu, true) ?? [] as $size)
    <option value="{{ $size }}" selected>{{ $size }}</option>
@endforeach

                </select>
            </div>

            {{-- Other fields --}}
            <div class="mb-3">
                <label class="form-action">информация (RU)</label>
                <textarea name="informationRu" class="form-control" id="mySummernote2" rows="4" required>{{ old('informationRu', $bath->informationRu) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-action">информация (EN)</label>
                <textarea name="informationEn" class="form-control" rows="4" id="mySummernote3" required>{{ old('informationEn', $bath->informationEn) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-action">оплата (RU)</label>
                <textarea name="payRu" class="form-control" id="mySummernote4" rows="4" required>{{ old('payRu', $bath->payRu) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-action">оплата (EN)</label>
                <textarea name="payEn" class="form-control" rows="4" id="mySummernote5" required>{{ old('payEn', $bath->payEn) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-action">Доставка (RU)</label>
                <textarea name="DeliveryRu" class="form-control" id="mySummernote6" rows="4" required>{{ old('DeliveryRu', $bath->DeliveryRu) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-action">Доставка (EN)</label>
                <textarea name="DeliveryEn" class="form-control" id="mySummernote7" rows="4" required>{{ old('DeliveryEn', $bath->DeliveryEn) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Обновить</button>
            <a href="{{ route('bath.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>

    {{-- JS --}}
    <script>
        function addColorInput() {
            const container = document.getElementById('colorInputs');
            const div = document.createElement('div');
            div.classList.add('color-input-row', 'mb-2');
            div.innerHTML = `
                <input type="color" name="color[]" value="#000000">
                <button type="button" onclick="removeColorInput(this)" class="btn btn-sm btn-danger">Удалить</button>
            `;
            container.appendChild(div);
        }

        function removeColorInput(button) {
            button.parentElement.remove();
        }

        function addNewSize() {
            const input = document.getElementById('new-size');
            const select = document.getElementById('size-select');
            const value = input.value.trim();

            if (value !== '') {
                const exists = [...select.options].some(option => option.value === value);
                if (!exists) {
                    const newOption = new Option(value, value, true, true);
                    select.add(newOption);
                    input.value = '';
                }
            }
        }
    </script>
@endsection
