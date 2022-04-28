<?php
if (isset($_GET['item'])) {
    include_once "item.php";
}
?>
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
                    <img class="card-img-top" src="View/media/categories/Всі страви.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Всі страви</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Паста.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Пасти</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Круасани.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Круасани</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Бургери.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Бургери</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Піца.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Піца</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Закуски.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Закуски</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Суші.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Суші</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Салати.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Салати</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Десерти.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Десерти</p>
                    </div>
                </div>
                <div class="card menu-category-card p-2 swiper-slide">
                    <img class="card-img-top" src="View/media/categories/Напої.png" alt="Card image cap">
                    <div class="card-body px-0">
                      <p class="card-text my-0">Напої</p>
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
    </div>
  </section>
  <section class="menu-alldishes container-fluid pb-5">
    <div class="container-xl d-flex flex-column align-items-center p-0 ">
      <h2 class="menu-alldishes-title title-top d-flex flex-column align-items-center text-center mb-3">
        <span class="dishes-menu-name-category">
            ВСІ СТРАВИ
        </span>
      </h2>
      <form class="container-fluid p-0">
        <div class="form-group menu-alldishes-search d-flex align-items-center ps-2">
          <img src="View/media/search.svg" alt="search">
          <input type="text" class="form-control" placeholder="Пошук">
        </div>
      </form>
      <div class="menu-alldishes-container my-md-5 my-3">
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item" class="p-0">
                    <img class="card-img-top" src="View/media/menu/Sinnabon.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-0 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Сіннабон</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
            </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/cake.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Полуничний торт</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 30₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>

        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Тост.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Лососевий тост</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="4">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Croissant.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Круасан з шинкою</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="5">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Цезар.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Салат “Цезар”</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="6">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Полуничні млинці.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Полуничні млинці</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="7">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Піца.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3 row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Піца “Салямі”</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="8">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Філадельфія.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3  row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Суші “Філадельфія”</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
          </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="9">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Паста-болоньєзе.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3  row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Паста “Болоньєзе”</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
            </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="10">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Бургер.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3  row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Гамбургер з беконом</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
            </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="11">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
                    <img class="card-img-top" src="View/media/menu/Брускетта.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3  row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Брускети з прошуто</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
            </div>
        </div>
        <div class="card menu-alldishes-card">
            <form action=".">
                <input type="hidden" name="id" value="12">
                <input type="hidden" name="page" value="menu">
                <button type="submit" name="item" value="item">
            <img class="card-img-top" src="View/media/menu/Ролл Каліфорнія.png" alt="Card image cap">
                </button>
            </form>
            <div class="card-body px-md-3 py-md-0 p-2 pb-3  row m-0">
                <div class="col-md-12 col-8 p-0">
                    <h5 class="card-title">Суші “Каліфорнія”</h5>
                    <p class="card-text d-flex d-md-none">Ціна: 50₴</p>
                </div>
                <p class="card-text d-none d-md-flex col-7 p-0">Ціна: 50₴</p>
                <a class="d-flex align-items-end col-md-5 col-4 p-0 justify-content-end pb-md-2">
                    <i class="menu-basket basket">
                        <img src="View/media/shopping-cart.svg" alt="Basket">
                    </i>
                </a>
            </div>
        </div>
      </div>
      <button class="dishes-menu-btn">
        БІЛЬШЕ
      </button>
    </div>
  </section>


  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="View/JS/menu.js"></script>
  <script src="View/JS/expander.js"></script>
