@extends('Pages/menu')

@section('item')
<div class="container-fluid p-0 popup-shadow d-flex align-items-center justify-content-center">
    <div class="popup d-flex flex-column align-items-center p-md-4 p-2">
        <a href="{{route('menu')}}" class="popup-cross">
            <button name="page">
                <img src="../View/media/close-w.svg" alt="cross">
            </button>
        </a>
        <h2 class="popup-title mb-d-4 mb-2 ">
            {{$dish->name}}
        </h2>
        <div class="popup-body d-flex  mb-d-4 mb-2">
            <img src="../{{$dish->photo}}" alt="toast">
            <div class="popup-content d-flex flex-column justify-content-between ms-md-3 ms-2">
                <p class="popup-line">
                    ЦІНА:<b>{{$dish->price}}₴</b>
                </p>
                <p class="popup-line">
                    ВАГА: <b>{{$dish->weight}}г</b>
                </p>
                <form action="{{route('menu')}}">
                    <button class="popup-line p-0 text-align-l" type="submit" value="{{$dish->category_id}}" name="category">
                        КАТЕГОРІЯ: <b>{{$category->name}}</b>
                    </button>
                <div class="popup-line">
                    СКЛАД:
                    <div>
                        @foreach($dish->ingredients as $ingredient)
                            <button class="popup-ingredients p-0 m-0" type="submit" value="{{$ingredient->name}}" name="search">
                                {{$ingredient->name}}
    {{--                            {{implode(', ', $dish['ingredients'])}}--}}
                            </button>
                        @endforeach
                    </div>
                </div>
                </form>
                <div class="popup-controlls d-md-flex d-none justify-content-between align-items-center">
                    <div class="basket-order-counter counter-popup d-flex">
                        <span>-</span>
                        <input type="number" value="1" class="p-0">
                        <span>+</span>
                    </div>
                    <form class="form-item" action="." method="POST">
                        <input type="hidden" id="3">
                        <button class="dishes-menu-btn popup-btn" type="submit">
                            У КОШИК
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="popup-controlls d-md-none d-flex justify-content-between align-items-center">
            <div class="basket-order-counter counter-popup d-flex">
                <span>-</span>
                <input type="number" value="1" class="p-0">
                <span>+</span>
            </div>
                <button class="dishes-menu-btn popup-btn">
                    У КОШИК
                </button>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="View/JS/menu.js"></script>
@endsection
