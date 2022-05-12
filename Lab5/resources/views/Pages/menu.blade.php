@extends('layout')
@section('title')
    Menu
@endsection
@section('main-content')
    @yield('item')
    <section class="container-fluid menu-categories pb-md-5 pb-3">
        <div class="container-xl p-0 d-flex flex-column align-items-center">
            <h2 class="dishes-menu-title title align-items-center justify-content-center d-flex text-center">
        <span class="all-big-titles">
            МЕНЮ
        </span>
            </h2>
            <div class="dishes-menu-content container-fluid p-0 my-3">
                <div class="swiper menu-swiper pb-2">
                    <div class="swiper-wrapper">
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Всі страви.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Всі страви</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Паста.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Пасти</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Круасани.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Круасани</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Бургери.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Бургери</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Піца.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Піца</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Закуски.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Закуски</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Суші.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Суші</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Салати.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Салати</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Десерти.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Десерти</p>
                            </div>
                        </div>
                        <div class="card menu-category-card p-2 swiper-slide">
                            <img class="card-img-top" src="../View/media/categories/Напої.png" alt="Card image cap">
                            <div class="card-body px-0">
                                <p class="card-text my-0">Напої</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="../View/media/arrow left.svg" class="menu-arrow" alt="left arrow">
                </div>
                <div class="swiper-button-next">
                    <img src="../View/media/arrow right.svg" class="menu-arrow" alt="right arrow">
                </div>

            </div>
        </div>
    </section>
    <section class="menu-alldishes container-fluid pb-5">
        <div class="container-xl d-flex flex-column align-items-center p-0 ">
            <h2 class="menu-alldishes-title title-top d-flex flex-column align-items-center text-center mb-3">
        <span class="dishes-menu-name-category">
            ВСІ СТРАВИ
        </span>
            @if(count($data)>0)
            </h2>
            <form class="container-fluid p-0">
                <div class="form-group menu-alldishes-search d-flex align-items-center ps-2">
                    <img src="../View/media/search.svg" alt="search">
                    <input type="text" class="form-control" placeholder="Пошук">
                </div>
            </form>
            <div class="menu-alldishes-container my-md-5 my-3">
                @foreach($data as $dish)
                <div class="card menu-alldishes-card">
                    <a href="{{route('item', $dish['id'])}}" class="p-0">
                        <img class="card-img-top" src="../{{$dish['img']}}" alt="Card image cap">
                    </a>
                    <div class="card-body px-md-3 py-md-0 p-2 pb-0 row m-0">
                        <div class="col-md-12 col-8 p-0">
                            <h5 class="card-title">{{$dish['name']}}</h5>
                            <p class="card-text d-flex d-md-none">Ціна: {{$dish['price']}}₴</p>
                        </div>
                        <p class="card-text d-none d-md-flex col-7 p-0">Ціна: {{$dish['price']}}₴</p>
                        <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                            <i class="menu-basket basket">
                                <img src="../View/media/shopping-cart.svg" alt="Basket">
                            </i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="dishes-menu-btn">
                БІЛЬШЕ
            </button>
            @else
                @component('Components/errors')
                Пуста категорія!
                @endcomponent
            @endif

        </div>
    </section>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="View/JS/menu.js"></script>
@endsection
