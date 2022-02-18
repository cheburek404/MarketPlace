@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="container">
            <header class="header">
                <div class="header-top">
                    <div class="header-adress">
                        <button class="hamburger hamburger--collapse" type="button" style="display:none;">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <div class="select-city" style="display:none;">
                            <i class="icon-city"></i>
                            <p>Выберите город</p>
                            <ul class="dropdown-city">
                                <li>Алматы</li>
                                <li>Астана</li>
                                <li>Павлодар</li>
                                <li>Шымкент</li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-buttons">
                        <button class="btn btn-feedback" id="gotofeedback">Обратная связь</button>
                        <!-- <button class="btn btn-help">Помощь</button>-->
                        <a class="header-email" href="mailto:info@cent.kz">info@cent.kz</a>
                    </div>
                </div>
                <div class="header-bottom">
                    <a class="logo" href="/"><img src="https://cent.kz/images/logo.png"></a>
                    <ul class="menu" style="display:none;">
                        <li class="menu-item"><a href="#"><i class="icon-basket"></i>
                                <p>Корзина</p>
                            </a></li>
                        <li class="menu-item"><a href="#"><i class="icon-hearth"></i>
                                <p>Избранное</p>
                            </a></li>
                        <li class="menu-item"><a href="#"><i class="icon-user"></i>
                                <p>Личный кабинет</p>
                            </a></li>
                        <li class="menu-item"><a href="#"><i class="icon-settings"></i>
                                <p>Настройки</p>
                            </a></li>
                    </ul>
                </div> <br><div class="banner-slider">
                    <a href="/"><img src="https://cent.kz/images/banner1.png" alt="" style="border-radius:15px;" id="banner_1"></a>
                    <a href="/show/74"><img src="https://cent.kz/images/banner2.png" alt="" style="border-radius:15px;" id="banner_2"></a>
                </div>


                <div class="menu-bottom">

                    <ul class="bottom-menu">


                        <li class="bottom-menu_item catlink active" id="cat0"><a href="javascript:void(0)" class="catlink active " onclick="changecat(0, &quot;&quot;)">Все </a></li><li class="bottom-menu_item catlink " id="cat1"><a href="javascript:void(0)" onclick="changecat(1, &quot;&quot;)">Авто</a></li>
                        <li class="bottom-menu_item catlink " id="cat2"><a href="javascript:void(0)" onclick="changecat(2, &quot;&quot;)">Здоровье</a></li>
                        <li class="bottom-menu_item catlink " id="cat3"><a href="javascript:void(0)" onclick="changecat(3, &quot;&quot;)">Дом</a></li>
                        <li class="bottom-menu_item catlink " id="cat4"><a href="javascript:void(0)" onclick="changecat(4, &quot;&quot;)">Туризм</a></li>
                        <li class="bottom-menu_item catlink " id="cat5"><a href="javascript:void(0)" onclick="changecat(5, &quot;&quot;)">Разное</a></li>

                        <!--
                              <li class="bottom-menu_item mobile"><a href="#">Корзина</a></li>
                              <li class="bottom-menu_item mobile"><a href="#">Избранное</a></li>
                              <li class="bottom-menu_item mobile"><a href="#">Личный кабинет</a></li>
                              <li class="bottom-menu_item mobile"><a href="#">Настройки</a></li>-->
                    </ul>
                    <div class="header-search" style="display:none;">
                        <input required="" min="1" type="text" class="search-input" id="search" name="search">
                        <label><i class="icon-search"></i>Поиск...</label>
                        <button type="submit" class="search-btn">Найти</button>
                    </div>
                </div>
                <div class="burger-content" style="display:none;">
                    <div class="close-burger">×</div>
                    <ul>
                        <li><a href="#">Меню 1</a></li>
                        <li><a href="#">Меню 2</a></li>
                        <li><a href="#">Меню 3</a></li>
                        <li><a href="#">Меню 4</a></li>
                        <li><a href="#">Меню 5</a></li>
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Обратная связь</a></li>
                    </ul>
                </div>
            </header>
        </div>
    </div>
    <section class="catalog-page">
        <div class="container">
            <div class="catalog_content">

                <div class="catalog-items">

                    <div class="catalog-items_contents grid grid-4" id="prodrow">

                        <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/76">
                                    <img src="/files/1642399411Диагностика ходовой части.png" alt="Диагностика ходовой части">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Диагностика ходовой части</p>
                            <p>Точно и быстро</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/78">
                                    <img src="/files/1642399396Комрьютерная диагностика.png" alt="Компьютерная диагностика">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Компьютерная диагностика</p>
                            <p>Эффективный способ определения актуального состояния автомобиля</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/77">
                                    <img src="/files/1642399373Замена передних тормозов.png" alt="Замена передних тормозных колодок">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Замена передних тормозных колодок</p>
                            <p>Надежно и качественно</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/75">
                                    <img src="/files/1644225197E95B00FC-C354-4A18-B313-20145095DE75.png" alt="Чек-ап «Мужское здоровье»">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Чек-ап «Мужское здоровье»</p>
                            <p>Не стоит ждать, пока что-то начнёт беспокоить. Регулярно проходите быстрый чек-ап и будьте спокойны.</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/74">
                                    <img src="/files/1642399468женское здоровоеь.png" alt="Чек-ап «Женское здоровье»">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Чек-ап «Женское здоровье»</p>
                            <p>Чтобы держать своё здоровье под контролем, проходите регулярное обследование</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/70">
                                    <img src="/files/1642399514Здоровое сердце.png" alt="Чек-ап Здоровое сердце" >
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Чек-ап "Здоровое сердце"</p>
                            <p>Вы будете спокойны, если будете знать, что сердце здорово.</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/58">
                                    <img src="/files/1640599708DSS service.png" alt="Техосмотр">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">Техосмотр</p>
                            <p>Быстро, качественно и недорого</p>
                        </div> <div class="catalog-item">
                            <div class="catalog-item_top">
                                <a href="/show/73">
                                    <img src="/files/1635136313Гайморит 03.png" alt="Дыши свободно">
                                </a>
                                <!-- <div class="favorite"><i class="icon-hearth-stroke"></i></div>-->
                            </div>
                            <!--    <span>52 990 тг</span>-->
                            <p class="bold">"Дыши свободно"</p>
                            <p>Сезонная профилактика заболеваний носа</p>
                        </div>
                    </div>
                    <p id="nextlink"><a href="javascript:void(0);" onclick="showmore(8,$(&quot;#thisget&quot;).val())">показать еще</a><input type="hidden" id="thisget" value=""></p>
                </div>
            </div>
        </div>
        <div id="prodaj"></div>
    </section>


    <section class="feedback" id="feedback">
        <div class="container">
            <h2>Обратная связь</h2>
            <div class="feedback-grid">
                <p class="feedback-descr">Вы можете оставить отзыв или предложение по использованию нашего сайта. Мы обязательно его учтем и будем благодарны за обратную связь!</p>
                <div class="feedback-form">
                    <div class="feedback-form_item">
                        <input type="text" placeholder="Фамилия" name="lname" id="lname" class="feedback-input formes">
                        <input type="text" placeholder="Имя" name="fname" id="fname" class="feedback-input formes">
                    </div>
                    <div class="feedback-form_item">
                        <input type="email" placeholder="e-mail" name="email" id="email" class="feedback-input formes">
                        <input type="tel" placeholder="Телефон" name="tel" id="tel" class="feedback-input formes">
                    </div>
                    <textarea name="message" id="message" placeholder="Комментарий..." class="feedback-input textarea formes"></textarea>

                    <button type="submit" class="btn btn-feedback_bottom" onclick="SendMessage()">Оставить заявку</button>
                    <div id="mesres">
                    </div>

                </div>
            </div>
        </div></section>


    <section class="bottom-banner">
        <div class="container">
            <div class="bottom-banner_content">
                <div class="bottom-banner_text">
                    <h2>CENT.KZ- с заботой о вас и ваших близких!</h2>
                    <p>Самое главное для человека – это благополучие его близких! Мы разработали проект Cent.kz для того, чтобы вы могли позаботиться о своих родных. Здесь вы найдете продукты и сервисы для самых важных людей для вас и для всех сфер их жизни. </p>
                </div>
                <div class="bottom-banner_images">
                    <div class="bottom-banner_collection">
                        <img src="/images/01a.png" alt="">
                        <img src="/images/02a.png" alt="">
                    </div>
                    <div class="bottom-banner_collection">
                        <img src="/images/03a.png" alt="">
                        <img src="/images/04a.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <a href="#" class="footer-logo">CENT.KZ</a>
            <nav class="footer-menu">
                <ul>
                    <li><a href="/oferta">Публичная оферта</a></li>
                    <li><a href="/dl/policy.pdf">Политика конфиденциальности</a></li>
                    <!-- <li><a href="#">Контакты</a></li>
                     <li><a href="#">Почта</a></li>-->
                </ul>
                <ul style="color:white">

                    <!--  <li><a href="#">Пользовательское соглашение</a></li>-->
                    <li>Адрес: г. Алматы, Наурызбай батыра 17, БЦ "Сатори", 213 каб.
                    </li><li>Телефон: +7 777 017 92 73</li>
                    <li>Email: info@cent.kz</li>

                </ul>
                <ul>
                    <!--
                       <li><a href="#">Соглашение на обработку персональных данныхе</a></li>-->
                </ul>
                <div class="social-links">
                    <li><a href="https://instagram.com/cent.kz?utm_medium=copy_link" target="_blank"><i class="icon-instagram"></i></a></li>
                </div>
            </nav>
        </div>
    </footer>
@endsection
