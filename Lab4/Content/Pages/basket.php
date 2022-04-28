<?php
if (isset($_GET['ordering']) || isset($ordering)) {
    include_once "ordering.php";
}
?>
<section class="basket-order container-fluid px-0">
        <h2 class="dishes-menu-title title align-items-center justify-content-center d-flex text-center mx-auto">
            <span class="all-big-titles basket-name mx-md-2 mx-1">
                КОШИК
            </span>
        </h2>
        <div class="container-fluid p-0 d-flex mt-md-5 mt-3 justify-content-between flex-md-row flex-column">
            <div class="basket-orders">
                <?php foreach(explode(',', $_COOKIE['id']) as $id){
                    $order = getItem($id);
                ?>
                <div class="basket-order-frame d-flex justify-content-between align-items-center py-3 mb-1 mb-md-3">
                    <div class= "basket-order-info d-flex">
                        <img src="<?= $order->getImg() ?>" alt="sinnabon">
                        <div class="basket-order-content ms-md-3 ms-3">
                            <h2 class="basket-order-name mt-2">
                                <?= $order->getName()?>
                            </h2>
                            <p class="basket-order-ingred">
                                <?= implode(', ', $order->getIngredients())?>
                            </p>
                        </div>
                    </div>
                    <div class="basket-order-amount d-flex flex-column align-items-center">
                        <div class="basket-order-counter d-flex">
                            <span>-</span>
                            <input type="number" value="1" class="p-0">
                            <span>+</span>
                        </div>
                        <div class="basket-order-price">
                            <?= $order->getPrice().'грн'?>
                        </div>
                    </div>
                    <span class="basket-order-cross">
                        <img src="View/media/close-b.svg" alt="cross">
                    </span>
                </div>
                <?php }?>
            </div>
            <div class="basket-recap p-md-3 ps-md-4 p-3 d-flex d-md-block flex-column align-items-center mt-5 mt-md-0">
                <h2 class = "basket-recap-title">
                    Ваше замовлення
                </h2>
                <div class="d-flex d-md-block align-items-center">
                    <p class="mb-0 mt-md-3 mt-0 me-1 d-inline">
                        Загальна сума:
                    </p>
                    <h3 class="d-md-block d-inline">
                        100₴
                    </h3>
                </div>
                <form action=".">
                    <input type="hidden" name="page" value="basket">
                    <button type="submit" name="ordering" value="ordering" class="daily-btn mt-md-4 mt-2">
                        ЗАМОВИТИ
                    </button>
                </form>
            </div>
        </div>
    </section>