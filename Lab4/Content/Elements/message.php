<div class="container-fluid px-0 popup-shadow d-flex justify-content-center">
    <div class="module d-flex flex-column align-items-center py-md-4 py-2">
        <h2 class="popup-title order mb-md-3 mt-md-3 mb-1 mt-3">
            <?=strip_tags($_POST["name"])?>, Ваше замовлення успішно оформлене!
        </h2>
        <h3>Наші оператори зв’яжуться з Вами найближчим часом!</h3>
        <form action=".">
            <button class="header-btn form-btn" name="page" value="<?= $_POST["page"]?>">
                ОК
            </button>
        </form>
    </div>
</div>
