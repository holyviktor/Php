<header class="container-fluid m-0 pb-4 header">
    <div class="header-background m-0">
        <div class="gradient p-0">
            <div class="fill">
            </div>
        </div>
    </div>
    <div class="container-xl header-menu">
        <nav class="row navbar-expand-md navbar dish-nav p-0">
            <div class="col-3 d-flex align-items-center p-0">
                <img src="View/media/Mask Group.svg" alt="logo" class="logo">
                <h3 class="m-0 logo-title">Savoury</h3>
            </div>
            <div class="header-nav col-7 collapse collapse-horizontal navbar-collapse p-0" id="collapseWidthExample">
                <ul class="navbar-nav flex-column flex-md-row container-fluid d-flex justify-content-between p-0">

                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <form action="." method="GET">
                            <button type="submit" name="page" value="landing" class="nav-text d-flex align-items-center">
                                <img src="View/media/home 1.svg" alt="main">
                                ГОЛОВНА
                            </button>
                        </form>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <form action=".">
                            <button type="submit" name="page" value="about" class="nav-text d-flex align-items-center">
                                <img src="View/media/info 1.svg" alt="about">
                                ПРО НАС
                            </button>
                        </form>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <form action=".">
                            <button type="submit" name="page" value="menu" class="nav-text d-flex align-items-center">
                                <img src="View/media/menu 1.svg" alt="menu">
                                МЕНЮ
                            </button>
                        </form>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <form action=".">
                            <button type="submit" name="page" value="basket" class="basket">
                                <img src="View/media/shopping-cart.svg" alt="Basket">
                            </button>
                            <button type="submit" name="page" value="basket" class="nav-text d-flex align-items-center d-md-none">
                                <img src="View/media/shopping-cart.svg" alt="basket">
                                КОШИК
                            </button>
                        </form>
                    </li>
                </ul>
                <button class="menu-closer" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
                    <img src="View/media/close-b.svg" alt="menu closer">
                </button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-end p-0 white">
                +380550000000
            </div>
            <div class="d-md-none col-2 offset-7 d-flex justify-content-end p-0">
                <a href="+380965400409" class="header-call d-flex align-items-center me-3">
                    <img src="View/media/phone-call.svg" alt="call us">
                </a>
                <button class="btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
                    <img src="View/media/more.svg" alt="menu expander">
                </button>
            </div>
        </nav>
        <?php
        if (($_GET['page'] == "landing" || !isset($_GET['page'])) && ($page == "landing" || !isset($page))){ ?>
        <div class="row mt-4 align-items-center">
            <div class="intro col-6 p-0">
                <h2>
                    Доставимо Вашу улюблену їжу  гарячою та смачною!
                </h2>
                <p class="description mt-2">
                    Подолаємо голод разом!
                </p>
                <form action=".">
                    <button class="d-block header-btn mt-4" type="submit" name="page" value="menu">
                        ЗАМОВИТИ
                    </button>
                </form>
            </div>
            <aside class="header-image col-6  d-flex justify-content-end p-0">
                <img class = "decor-dish" src="View/media/decorDish.png" alt="DecorDish">
            </aside>
        </div>
        <?php }?>
    </div>
</header>