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
        <form action="{{ route('skins.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="form-group form-action">
                    <label><strong>в наличии</strong></label><br>
                    <label>
                        <input type="radio" name="available" value="1" {{ old('available') == 1 ? 'checked' : '' }}>
                        Есть
                    </label><br>
                    <label>
                        <input type="radio" name="available" value="0" {{ old('available') == 0 ? 'checked' : '' }}>
                        Нет
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group form-action">
                    <label>Заголовок (RU)</label>
                    <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu') }}" required>

                    <label>Заголовок (En)</label>
                    <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn') }}" required>
                </div>
            </div>


            {{-- Price --}}
            <div class="form-group form-action">
                <label>цена</label>
                <input type="text" name="priceRu" class="form-control" value="{{ old('priceRu') }}" required>
                {{-- 
                <label>Գին EN</label>
                <input type="text" name="priceEn" class="form-control" value="{{ old('priceEn') }}" required> --}}
            </div>
            <div class="mb-3">
                <label for="image" class="form-action">главная страница изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="images" class="form-action">Картинки:</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>

            {{-- Article --}}
            <div class="form-group form-action">
                <label>название продукта (RU)</label>
                <input type="text" name="articleRu" class="form-control" value="{{ old('articleRu') }}" required>

                <label>название продукта (En)</label>
                <input type="text" name="articleEn" class="form-control" value="{{ old('articleEn') }}" required>
            </div>

            <div class="form-check form-action">
                <input class="form-check-input" type="checkbox" name="shape1" id="shape1"
                    {{ old('shape1', isset($locker) ? $locker->shape1 : false) ? 'checked' : '' }}>
                <label class="form-check-label" for="shape1">Право</label>
            </div>

            <div class="form-check form-action">
                <input class="form-check-input" type="checkbox" name="shape2" id="shape2"
                    {{ old('shape2', isset($locker) ? $locker->shape2 : false) ? 'checked' : '' }}>
                <label class="form-check-label" for="shape2">Лево</label>
            </div>

            <div class="mb-3">
                <label for="annotationRu" class="form-action">Аннотация (RU)</label>
                <textarea name="annotationRu" class="form-control" rows="4" required>{{ old('annotationRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="annotationEn" class="form-action">Аннотация (EN)</label>
                <textarea name="annotationEn" class="form-control" rows="4" required>{{ old('annotationEn') }}</textarea>
            </div>



            {{-- Description --}}
            <div class="form-group form-action">
                <label>Описание (RU)</label>
                <textarea name="descriptionRu" id="mySummernote" class="form-control" required>{{ old('descriptionRu') }}</textarea>

                <label>Описание (En)</label>
                <textarea name="descriptionEn" id="mySummernote1" class="form-control" required>{{ old('descriptionEn') }}</textarea>
            </div>

            {{-- Color (checkboxes) --}}
            <div class="form-group form-action">
                <label><strong>Выберите цвета (можно добавить несколько)</strong></label><br>

                <div id="colorInputs">
                    <div class="color-input-row mb-2">
                        <input type="color" name="color[]" value="#000000">
                        <button type="button" onclick="removeColorInput(this)"
                            class="btn btn-sm btn-danger">Удалить</button>
                    </div>
                </div>

                <button type="button" onclick="addColorInput()" class="btn btn-sm btn-primary mt-2">➕ Добавить
                    цвет</button>
            </div>


            {{-- Size (checkboxes) --}}
            <div class="mb-3">
                <label for="sizeRu" class="form-action">Размеры</label>

                <div class="d-flex gap-2">
                    <input type="text" id="new-size" class="form-control" placeholder="Новый размер (S,M,L)">
                    <button type="button" class="btn btn-success" onclick="addNewSize()">+</button>
                </div>

                <select name="sizeRu[]" id="size-select" class="form-select mt-2" multiple>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="informationRu" class="form-action">информация (RU)</label>
                <textarea name="informationRu" class="form-control" id="mySummernote2" rows="4" required>{{ old('informationRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="informationEn" class="form-action">информация (EN)</label>
                <textarea name="informationEn" class="form-control" rows="4" id="mySummernote3" required>{{ old('informationEn') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="payRu" class="form-action">оплата (RU)</label>
                <textarea name="payRu" class="form-control" id="mySummernote4" rows="4" required>{{ old('payRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="payEn" class="form-action">оплата (EN)</label>
                <textarea name="payEn" class="form-control" rows="4" id="mySummernote5" required>{{ old('payEn') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="DeliveryRu" class="form-action">Доставка (RU)</label>
                <textarea name="DeliveryRu" class="form-control" id="mySummernote6" rows="4" required>{{ old('DeliveryRu') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="DeliveryEn" class="form-action">Доставка (EN)</label>
                <textarea name="DeliveryEn" class="form-control" rows="4" id="mySummernote7" required>{{ old('DeliveryEn') }}</textarea>
            </div>



            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('bath.index') }}" class="btn btn-success">Назад</a>
        </form>
    </div>

    <script>
        const toggle = document.getElementById('specialPriceToggle');
        const priceInput = document.getElementById('price');
        const price1Container = document.getElementById('price1Container');
        const price1Input = document.getElementById('price1');

        toggle.addEventListener('change', function() {
            if (this.checked) {
                price1Container.style.display = 'block';
                price1Input.value = priceInput.value;
            } else {
                price1Container.style.display = 'none';
                price1Input.value = '';
            }
        });
    </script>
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
    </script>
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
    </script>
@endsection
