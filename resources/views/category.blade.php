
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Категория Мобильные телефоны</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li class="active"><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
                </li>
                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                        <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                        <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1>
            @if($category == 'mobiles')
                Мобильные телефоны
            @elseif($category=='portable')
                Портативная техника
            @elseif($category=='appliances')
                Бытовая техника
            @endif
        </h1>
        <p>
            В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
        </p>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>71990 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                            Не доступен                                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64"
                                                                          class="btn btn-default"
                                                                          role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="33wvORwkIMBlI0JmNIdafpJw4QaRxDl1LCsPA6vG">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>89990 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_256"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="33wvORwkIMBlI0JmNIdafpJw4QaRxDl1LCsPA6vG">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/htc_one_s.png" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>12490 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/3" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/mobiles/htc_one_s"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="33wvORwkIMBlI0JmNIdafpJw4QaRxDl1LCsPA6vG">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_5.jpg" alt="iPhone 5SE">
                    <div class="caption">
                        <h3>iPhone 5SE</h3>
                        <p>17221 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/4" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/mobiles/iphone_5se"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="33wvORwkIMBlI0JmNIdafpJw4QaRxDl1LCsPA6vG">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/samsung_j6.jpg" alt="Samsung Galaxy J6">
                    <div class="caption">
                        <h3>Samsung Galaxy J6</h3>
                        <p>11980 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/12" method="POST">
                            Не доступен                                <a href="http://internet-shop.tmweb.ru/mobiles/samsung_j6"
                                                                          class="btn btn-default"
                                                                          role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="33wvORwkIMBlI0JmNIdafpJw4QaRxDl1LCsPA6vG">            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
