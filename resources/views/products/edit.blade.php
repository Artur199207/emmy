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
        <h1>Редактировать продукт</h1>

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

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titleRu" class="form-action">Заголовок (RU)</label>
                <input type="text" name="titleRu" class="form-control" value="{{ old('titleRu', $product->titleRu) }}" required>
            </div>

            <div class="mb-3">
                <label for="titleEn" class="form-action">Заголовок (EN)</label>
                <input type="text" name="titleEn" class="form-control" value="{{ old('titleEn', $product->titleEn) }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-action">цена</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" required>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="specialPriceToggle" {{ old('newPrice', $product->newPrice) ? 'checked' : '' }}>
                <label class="form-check-label" for="specialPriceToggle">Установить специальную цену</label>
            </div>

            <div class="mb-3" id="price1Container" style="{{ old('newPrice', $product->newPrice) ? 'display: block;' : 'display: none;' }}">
                <label for="newPrice" class="form-action">Специальная цена</label>
                <input type="text" name="newPrice" id="price1" class="form-control" value="{{ old('newPrice', $product->newPrice) }}" style="color: red;">
            </div>

            <div class="mb-3">
                <label for="image" class="form-action">главная страница изображение:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Image" style="max-width: 100px; margin-top: 10px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="images" class="form-action">Картинки:</label>
                <input type="file" name="images[]" class="form-control" multiple>
                @if ($product->images)
                    <div class="mt-2">
                        @foreach (json_decode($product->images) as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Image" style="max-width: 100px; margin-top: 10px;">
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="spaceNameRu" class="form-action">название продукта (RU)</label>
                <input type="text" name="spaceNameRu" class="form-control" value="{{ old('spaceNameRu', $product->spaceNameRu) }}" required>
            </div>

            <div class="mb-3">
                <label for="spaceNameEn" class="form-action">название продукта (EN)</label>
                <input type="text" name="spaceNameEn" class="form-control" value="{{ old('spaceNameEn', $product->spaceNameEn) }}" required>
            </div>

            <div class="mb-3">
                <label for="descriptionRu" class="form-action">Описание (RU)</label>
                <textarea name="descriptionRu" class="form-control" id="mySummernote" rows="4" required>{{ old('descriptionRu', $product->descriptionRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="descriptionEn" class="form-action">Описание (EN)</label>
                <textarea name="descriptionEn" class="form-control" rows="4" id="mySummernote1" required>{{ old('descriptionEn', $product->descriptionEn) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="categoryRu" class="form-action">Категории (RU)</label>
                <input type="text" name="categoryRu" class="form-control" value="{{ old('categoryRu', $product->categoryRu) }}" required>
            </div>
            <div class="mb-3">
                <label for="categoryEn" class="form-action">Категории (EN)</label>
                <input type="text" name="categoryEn" class="form-control" value="{{ old('categoryEn', $product->categoryEn) }}" required>
            </div>

            <div class="mb-3">
                <label for="weigthRu" class="form-action">масса (RU)</label>
                <input type="text" name="weigthRu" class="form-control" value="{{ old('weigthRu', $product->weigthRu) }}" required>
            </div>
            <div class="mb-3">
                <label for="weigthEn" class="form-action">масса (EN)</label>
                <input type="text" name="weigthEn" class="form-control" value="{{ old('weigthEn', $product->weigthEn) }}" required>
            </div>

            <div class="mb-3">
                <label for="BoxRu" class="form-action">Коробка (RU)</label>
                <input type="text" name="BoxRu" class="form-control" value="{{ old('BoxRu', $product->BoxRu) }}" required>
            </div>
            <div class="mb-3">
                <label for="BoxEn" class="form-action">Коробка (EN)</label>
                <input type="text" name="BoxEn" class="form-control" value="{{ old('BoxEn', $product->BoxEn) }}" required>
            </div>

            <div class="mb-3">
                <label for="sizeRu" class="form-action">Размеры</label>

                <div class="d-flex gap-2">
                    <input type="text" id="new-size" class="form-control" placeholder="Новый размер (S,M,L)">
                    <button type="button" class="btn btn-success" onclick="addNewSize()">+</button>
                </div>

                <select name="sizeRu[]" id="size-select" class="form-select mt-2" multiple>
                    <option value="S" {{ in_array('S', json_decode($product->sizeRu)) ? 'selected' : '' }}>S</option>
                    <option value="M" {{ in_array('M', json_decode($product->sizeRu)) ? 'selected' : '' }}>M</option>
                    <option value="L" {{ in_array('L', json_decode($product->sizeRu)) ? 'selected' : '' }}>L</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="informationRu" class="form-action">информация (RU)</label>
                <textarea name="informationRu" class="form-control" rows="4" id="mySummernote2" required>{{ old('informationRu', $product->informationRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="informationEn" class="form-action">информация (EN)</label>
                <textarea name="informationEn" class="form-control" rows="4" id="mySummernote3" required>{{ old('informationEn', $product->informationEn) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="payRu" class="form-action">оплата (RU)</label>
                <textarea name="payRu" class="form-control" rows="4" id="mySummernote4" required>{{ old('payRu', $product->payRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="payEn" class="form-action">оплата (EN)</label>
                <textarea name="payEn" class="form-control" rows="4" id="mySummernote5" required>{{ old('payEn', $product->payEn) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="DeliveryRu" class="form-action">Доставка (RU)</label>
                <textarea name="DeliveryRu" class="form-control" id="mySummernote6" rows="4" required>{{ old('DeliveryRu', $product->DeliveryRu) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="DeliveryEn" class="form-action">Доставка (EN)</label>
                <textarea name="DeliveryEn" class="form-control" id="mySummernote7" rows="4" required>{{ old('DeliveryEn', $product->DeliveryEn) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('products.index') }}" class="btn btn-success">Назад</a>
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

@endsection
