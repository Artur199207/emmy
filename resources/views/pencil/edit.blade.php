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
        <h1>Փոփոխել էлементը</h1>

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

        <form action="{{ route('pencil.update', $pencil->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Սա պետք է ուղարկել PUT մեթոդ --}}

            <div class="mb-3">
                <div class="form-group form-action">
                    <label><strong>в наличии</strong></label><br>
                    <label>
                        <input type="radio" name="available" value="1" {{ $pencil->available ? 'checked' : '' }}>
                        Есть
                    </label><br>
                    <label>
                        <input type="radio" name="available" value="0" {{ !$pencil->available ? 'checked' : '' }}>
                        Нет
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-group form-action">
                    <label>Заголовок (RU)</label>
                    <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu', $pencil->titleRu) }}"
                        required>

                    <label>Заголовок (En)</label>
                    <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn', $pencil->titleEn) }}"
                        required>
                </div>
            </div>

            <div class="form-group form-action">
                <label>цена</label>
                <input type="text" name="priceRu" class="form-control" value="{{ old('priceRu', $pencil->priceRu) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-action">главная страница изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if ($pencil->image)
                    <img src="{{ asset('storage/' . $pencil->image) }}" alt="image" width="150" class="mt-2">
                @endif
            </div>

            <div class="mb-3">
                <label for="images" class="form-action">Картинки:</label>
                <input type="file" name="images[]" class="form-control" multiple>
                @if ($pencil->images)
                    @foreach (json_decode($pencil->images) as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="image" width="100" class="mt-2 me-2">
                    @endforeach
                @endif
            </div>

            <div class="form-group form-action">
                <label>название продукта (RU)</label>
                <input type="text" name="articleRu" class="form-control"
                    value="{{ old('articleRu', $pencil->articleRu) }}" required>

                <label>название продукта (En)</label>
                <input type="text" name="articleEn" class="form-control"
                    value="{{ old('articleEn', $pencil->articleEn) }}" required>
            </div>

            <div class="form-check form-action">
                <input class="form-check-input" type="checkbox" name="shape1" id="Shape1"
                    {{ old('shape1', $pencil->shape1) ? 'checked' : '' }}>
                <label class="form-check-label" for="Shape1">Право</label>
            </div>

            <div class="form-check form-action">
                <input class="form-check-input" type="checkbox" name="shape2" id="Shape2"
                    {{ old('shape2', $pencil->shape2) ? 'checked' : '' }}>
                <label class="form-check-label" for="Shape2">Лево</label>
            </div>

            <div class="mb-3">
                <label for="annotationRu" class="form-action">Аннотация (RU)</label>
                <textarea name="annotationRu" class="form-control" rows="4" required>{{ old('annotationRu', $pencil->annotationRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="annotationEn" class="form-action">Аннотация (EN)</label>
                <textarea name="annotationEn" class="form-control" rows="4" required>{{ old('annotationEn', $pencil->annotationEn) }}</textarea>
            </div>


            <div class="form-group form-action">
                <label>Описание (RU)</label>
                <textarea name="descriptionRu" id="mySummernote" class="form-control" required>{{ old('descriptionRu', $pencil->descriptionRu) }}</textarea>

                <label>Описание (En)</label>
                <textarea name="descriptionEn" id="mySummernote1" class="form-control" required>{{ old('descriptionEn', $pencil->descriptionEn) }}</textarea>
            </div>

            <div class="form-group form-action">
                <label><strong>Выберите цвета (можно добавить несколько)</strong></label><br>

               <div class="form-group form-action">
                <label><strong>Цвета</strong></label><br>
                <div id="colorInputs">
                    @foreach (json_decode($pencil->color, true) ?? [] as $color)
                        <div class="color-input-row mb-2">
                            <input type="color" name="color[]" value="{{ $color }}">
                            <button type="button" onclick="removeColorInput(this)"
                                class="btn btn-sm btn-danger">Удалить</button>
                        </div>
                    @endforeach

                </div>
                <button type="button" onclick="addColorInput()" class="btn btn-sm btn-primary mt-2">➕ Добавить
                    цвет</button>
            </div>

                <button type="button" onclick="addColorInput()" class="btn btn-sm btn-primary mt-2">➕ Добавить
                    цвет</button>
            </div>

            <div class="mb-3">
                <label for="sizeRu" class="form-action">Размеры</label>

                <div class="d-flex gap-2">
                    <input type="text" id="new-size" class="form-control" placeholder="Новый размер (S,M,L)">
                    <button type="button" class="btn btn-success" onclick="addNewSize()">+</button>
                </div>

                 <select name="sizeRu[]" id="size-select" class="form-select mt-2" multiple>
                    @foreach (json_decode($pencil->sizeRu, true) ?? [] as $size)
                        <option value="{{ $size }}" selected>{{ $size }}</option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="informationRu" class="form-action">информация (RU)</label>
                <textarea name="informationRu" class="form-control" id="mySummernote2" rows="4" required>{{ old('informationRu', $pencil->informationRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="informationEn" class="form-action">информация (EN)</label>
                <textarea name="informationEn" class="form-control" rows="4" id="mySummernote3" required>{{ old('informationEn', $pencil->informationEn) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="payRu" class="form-action">оплата (RU)</label>
                <textarea name="payRu" class="form-control" id="mySummernote4" rows="4" required>{{ old('payRu', $pencil->payRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="payEn" class="form-action">оплата (EN)</label>
                <textarea name="payEn" class="form-control" rows="4" id="mySummernote5" required>{{ old('payEn', $pencil->payEn) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="DeliveryRu" class="form-action">Доставка (RU)</label>
                <textarea name="DeliveryRu" class="form-control" id="mySummernote6" rows="4" required>{{ old('DeliveryRu', $pencil->DeliveryRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="DeliveryEn" class="form-action">Доставка (EN)</label>
                <textarea name="DeliveryEn" class="form-control" rows="4" id="mySummernote7" required>{{ old('DeliveryEn', $pencil->DeliveryEn) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('bath.index') }}" class="btn btn-success">Назад</a>
        </form>
    </div>

    <script>
        function addNewSize() {
            const input = document.getElementById('new-size');
            const select = document.getElementById('size-select');
            const value = input.value.trim();

            if (value !== '') {
                const optionExists = Array.from(select.options).some(option => option.value === value);

                if (!optionExists) {
                    const newOption = new Option(value, value, true, true); // selected=true
                    select.add(newOption);
                    input.value = ''; // reset input
                }
            }
        }

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
    </script>
@endsection
