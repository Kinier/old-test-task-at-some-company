<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выбор пиццы</title>
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="/js/index.js"></script>
</head>
<body>


<div class="wrapper">

    <div class="wrapper-type wrapper-dropdowns">
        <label for="type">Выберите пиццу:</label>
        <select name="type" id="type">
            <option value="none" selected>Выберите тип</option>
            <option value="Pepperoni" >Пепперони</option>
            <option value="Hawai">Гавайская</option>
            <option value="Village">Деревенская</option>
            <option value="Mushroom">Грибная</option>
        </select>
    </div>

    <div class="wrapper-size wrapper-dropdowns">
        <label for="size">Выберите размер, см:</label>
        <select name="size" id="size">
            <option value="none" selected>Выберите размер</option>
            <option value="21">21</option>
            <option value="26">26</option>
            <option value="31">31</option>
            <option value="45">45</option>
        </select>
    </div>

    <div class="wrapper-souce wrapper-dropdowns">
        <label for="souce">Выберите соус:</label>
        <select name="souce" id="souce">
            <option value="none" selected>Выберите соус</option>
            <option value="cheesy">Сырный</option>
            <option value="sweet-sour">кисло-сладкий</option>
            <option value="garlic">чесночный</option>
            <option value="barbecue">барбекю</option>
        </select>
    </div>

    <div class="wrapper-check" id="pizza-check">

        <div class="pizza-info"> Цена пиццы: <div id="price">Небходимо выбрать все пункты</div></div>
        <div class="pizza-info">Тип пиццы: <div id="check-type">Небходимо выбрать все пункты</div></div>
        <div class="pizza-info">Размер пиццы: <div id="check-size">Небходимо выбрать все пункты</div></div>
        <div class="pizza-info">Соус пиццы: <div id="check-souce">Небходимо выбрать все пункты</div></div>
    </div>

    <div class="wrapper-order">
        <button id="order-pizza" class="pizza-btn" value="Заказать" onclick="getPizzaPrices();">Заказать</button>
    </div>
</div>
</body>
</html>