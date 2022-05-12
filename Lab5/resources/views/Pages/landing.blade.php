@extends('layout')

@section('title')
    Savoury
@endsection

@section('main-content')
    @yield('popup')
    <section class="preview container-fluid">
        <ul class="benefits container-xl d-flex justify-content-between p-0">
            <li class="d-flex flex-column justify-content-end align-items-center">
                <img src="View/media/delicious.png" alt="">
                <p>
                    Смачна Їжа
                </p>
            </li>
            <li class="d-flex flex-column justify-content-end align-items-center">
                <img src="View/media/delivery-man.png" alt="">
                <p>
                    Безкоштовна Доставка
                </p>
            </li>
            <li class="d-flex flex-column justify-content-end align-items-center">
                <img src="View/media/low-price.png" alt="">
                <p>
                    Низькі Ціни
                </p>
            </li>
            <li class="d-flex flex-column justify-content-end align-items-center">
                <img src="View/media/healthy-food.png" alt="">
                <p>
                    Якісні Продукти
                </p>
            </li>
        </ul>
        <div class="preview-intro container-xl p-0">
            <h2 class="title text-center d-flex align-items-center justify-content-center container-fluid p-0">
                <span class="preview-title">
                    ЛАСКАВО ПРОСИМО ДО SAVOURY!
                </span>
            </h2>
            <div class="preview-content mt-4">
                <img src="View/media/landing-croissant.png" alt="delicious" class="preview-img">
                <p class="preview-text mb-0">
                    Якщо Ви хочете смачно поїсти, але не маєте часу на приготування їжі, Savory допоможе вирішити цю проблему.
                </p>
                <p class="preview-text mb-0">
                    Доставка їжі від Sauvory – це послуга для тих, хто цінує смачну, ситну та якісну їжу.
                </p>
                <p class="preview-text mb-0">
                    Замовляючи їжу у нас, Ви гарантовано отримаєте якісно приготовану страву. Наші професійні кухарі готують для Вас на найсучаснішому обладнанні із найсвіжіших продуктів.
                </p>
                <p class="preview-text mb-0">
                    Ми доставимо замовлення в будь-яку точку Києва, а їжа буде все ще гарячою!
                </p>
                <p class="preview-text mb-0">
                    Величезний вибір різноманітних страв задовольнить смаки навіть найвибагливіших гурманів.
                </p>
                <img src="View/media/landing-croissant-mob.png" alt="delicious" class="preview-img-mob">
            </div>
        </div>
    </section>
    <section class="daily-dish container-fluid py-3">
        <div class="container-xl p-0 d-flex flex-column align-items-center">
            <h1 class="daily-dish-title">
                СТРАВА ДНЯ!
            </h1>
            <div class="daily-dish-content container-fluid p-0 mt-md-3 mt-0 d-flex justify-content-between align-items-center">
                <div class="daily-dish-discount d-flex flex-column justify-content-between">
                    <div class="daily-dish-circle">
                        <h1>
                            Sale 20%
                        </h1>
                    </div>
                    <div class="daily-dish-line">
                        <h2 class="prev-price">
                            Стара ціна: 30₴
                        </h2>
                        <h1 class="curr-price">
                            Нова ціна: 26₴
                        </h1>
                    </div>
                    <div class="daily-dish-circle">
                        <h1>
                            Sale 20%
                        </h1>
                    </div>
                </div>
                <div class="daily-dish-text d-flex align-items-center flex-column">
                    <h2 class="daily-dish-name">
                        Малинові млинці
                    </h2>
                    <p class="daily-dish-ingred">
                        малина, ваніль, цукор, яйця, молоко, сметана, борошно
                    </p>
                    <p class="prev-price-mob">Стара ціна: 30₴</p>
                    <p class="curr-price-mob">Нова ціна: 26₴</p>
                    <button class="daily-btn mt-2">
                        ЗАМОВИТИ
                    </button>
                </div>
                <div class="outer">
                    <div class="discount-percent d-flex d-md-none">
                        <h1 class="daily-dish-name">
                            Sale 20%
                        </h1>
                    </div>
                    <div class="daily-dish-image">
                        <div class="img-frame1"></div>
                        <div class="img-frame2"></div>
                        <div class="img-frame3"></div>
                        <div class="img-frame4"></div>
                        <img src="View/media/menu/Dish of the day.png" alt="daily-dish">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dishes-menu container-fluid">
        <div class="container-xl d-flex flex-column align-items-center p-0">
            <h2 class="dishes-menu-title title align-items-center justify-content-center d-flex text-center">
                <span class="all-big-titles">
                    НАШЕ МЕНЮ
                </span>
            </h2>
            <div class="dishes-menu-content container-fluid p-0 mt-md-4 my-3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="dishes-menu-card card swiper-slide">
                            <img class="dishes-menu-img card-img-top" src="View/media/menu/Sinnabon.png" alt="Card image cap">
                            <div class="card-body p-0 py-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Сіннабон</h5>
                                    <p class="card-text">Ціна: 25₴</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 pr-2 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide" style="width: 33px">
                            <img class="dishes-menu-img card-img-top" src="View/media/menu/toast.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Лососевий тост</h5>
                                    <p class="card-text">Ціна: 50₴</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 pr-2 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide" style="width: 33px">
                            <img class="dishes-menu-img card-img-top" src="View/media/menu/cake.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Полуничний торт</h5>
                                    <p class="card-text">Ціна: 30₴</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 pr-2 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide">
                            <img class="dishes-menu-img card-img-top" src="View/media/menu/Croissant.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Круасан з шинкою</h5>
                                    <p class="card-text">Ціна: 50₴</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide">
                            <img class="dishes-menu-img card-img-top" src="View/media/menu/Цезар.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Салат “Цезар”</h5>
                                    <p class="card-text">Ціна: 80₴</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="View/media/arrow left.svg" class="menu-arrow" alt="left arrow">
                </div>
                <div class="swiper-button-next">
                    <img src="View/media/arrow right.svg" class="menu-arrow" alt="right arrow">
                </div>

            </div>
            <button class="dishes-menu-btn">
                БІЛЬШЕ
            </button>
        </div>
    </section>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="View/JS/app.js"></script>
@endsection
