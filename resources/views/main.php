<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARVATER - Серверные услуги</title>

    <link rel="stylesheet" href="/resources/css/style/main.css">
    <link rel="stylesheet" href="/resources/css/media/main-media.css">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/resources/js/index-animate.js"></script>
</head>
<body>
    <div class="search_view_hide">
        <form class="search_view" action="">
            <img class="search_pic" src="/resources/images/8-88862_clipart-search-magnifying-glass-clipart-black-and-white.png" alt="search">
            <input class="search_field" type="text" placeholder="Поиск">
            <img class="search_pic search_close" src="/resources/images/__close.png" alt="close">
        </form>
    </div>
    <div class="full_menu_hide">
        <div class="full_menu">
            <img class="full_menu_close" src="/resources/images/__close.png" alt="close">
            <div class="full_menu_header">
                <img class="header_logo" src="/resources/images/1f3a678a-d8f8-481e-a3e1-5a2b0cc57b30.jpg" alt="logo">
                <div class="full_menu_header_right">
                    <p>+7 937 525-83-11</p>
                    <button class="header_btn_start btn_hover">
                        <div class="btn_hide"></div>
                        <p class="btn_hide_p">Приступить</p>
                    </button>
                </div>
            </div>
            <div class="full_menu_main">
                <div class="full_menu_main_left">
                    <a class="full_menu_title menu_first" href=""><b>Компания</b></a>
                    <a class="full_menu_title menu_second" href=""><b>Услуги</b></a>
                    <a class="full_menu_title menu_third" href=""><b>Новости</b></a>
                    <a class="full_menu_title menu_fourth" href=""><b>Обратная связь</b></a>
                    <a class="full_menu_title menu_fifth" href=""><b>Отзывы</b></a>
                    <a class="full_menu_title menu_sixth" href=""><b>Технические характеристики</b></a>
                </div>
                <div class="full_menu_main_right">
                    <div class="full_menu_first">
                        <a class="full_menu_p">О компании</a>
                        <a class="full_menu_p">Сертификаты</a>
                        <a class="full_menu_p">Руководство</a>
                        <a class="full_menu_p">Вакансии</a>
                        <a class="full_menu_p">Реквизиты</a>
                    </div>
                    <div class="full_menu_second">
                        <a class="full_menu_p" href="">Веб-сервер (IIS)</a>
                        <a class="full_menu_p" href="">DNS-сервер</a>
                        <a class="full_menu_p" href="">DHCP-сервер</a>
                        <a class="full_menu_p" href="">Сервер приложений</a>
                    </div>
                </div>
            </div>
            <div class="full_menu_footer">
                <p>Набережные Челны</p>
                <img class="header_search" src="/resources/images/8-88862_clipart-search-magnifying-glass-clipart-black-and-white.png" alt="search">
            </div>
        </div>
    </div>
    <div class="log_form_hide">
        <form action="" class="log_form">
            <img class="log_form_close cursor" src="/resources/images/__close.png" alt="close">
            <h2 class="log_form_title">Вход в личный кабинет</h2>
            <div class="log_inf">
                <label for="login" class="log_form_label">Логин</label><br>
                <input type="text" name="login" class="log_form_data" required><br>
            </div>
            <div class="log_inf">
                <label for="password" class="log_form_label">Пароль</label><br>
                <input type="password" name="password" class="log_form_data" required><br>
            </div>
            <div class="checkbox_log_form">
                <input type="checkbox" class="main_request_checkbox"><p>Запомнить меня</p>
            </div>
            <div class="btn_choice">
                <button class="form_btn_log btn_hover_log cursor">
                    <div class="log_form_btn_hide"></div>
                    <p class="log_form_btn_hide_p">Войти</p>
                </button>
                <button class="form_btn_reg btn_hover_reg cursor">
                    <div class="reg_form_btn_hide"></div>
                    <p class="reg_form_btn_hide_p">Регистрация</p>
                </button>
            </div>
        </form>
    </div>
    <div class="phone_form_hide">
        <form action="" class="phone_form">
            <img class="phone_form_close cursor" src="/resources/images/__close.png" alt="close">
            <h2 class="phone_form_title">Оставьте заявку</h2>
            <p class="phone_form_undertitle">Мы вам перезвоним</p>
            <div class="log_inf">
                <label for="name" class="log_form_label">Ваше имя</label>
                <input type="text" name="name" class="log_form_data" required>
            </div>
            <div class="log_inf">
                <label for="phone" class="log_form_label">Телефон</label>
                <input type="text" name="phone" class="log_form_data" required>
            </div>
            <div class="checkbox checkbox_form">
                 <input type="checkbox" class="main_request_checkbox"><p>Согласен на обработку персональных данных</p>
            </div>
            <button class="form_btn_log btn_hover_log cursor">
                <p class="btn_hide_p">Отправить</p>
                <div class="log_form_btn_hide"></div>
            </button>
        </form>
    </div>
    <header>
        <div class="header_top">
            <p>+7 937 525-83-11</p>
            <p>Набережные Челны</p>
            <p class="element_hover login_start">Войти</p>
        </div>
        <div class="header_main">
            <section class="header_event">
                <img class="header_menu" src="/resources/images/icmenu.png" alt="menu">
                <img class="header_logo cursor" src="/resources/images/1f3a678a-d8f8-481e-a3e1-5a2b0cc57b30.jpg" alt="logo">
            </section>
            <nav>
                <span class="element_hover">УСЛУГИ</span>
                <span class="element_hover">НОВОСТИ</span>
                <span class="element_hover">ОБРАТНАЯ СВЯЗЬ</span>
                <span class="element_hover">ОТЗЫВЫ</span>
                <span class="element_hover">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</span>
            </nav>
            <section class="header_event">
                <img class="header_search" src="/resources/images/8-88862_clipart-search-magnifying-glass-clipart-black-and-white.png" alt="search">
                <button class="header_btn_start btn_hover">
                    <div class="btn_hide"></div>
                    <p class="btn_hide_p">Приступить</p>
                </button>
            </section>
        </div>
    </header>
    <main>
        <div class="main_view">
            <img class="main_content_view" src="/resources/images/9f754d2d-1328-4917-9d22-89e0c6768642.jpg" alt="view_content">
        </div>
        <div class="main_services">
            <p>Для ваших нужд</p>
            <div class="main_services_header">
                <h2 class="main_services_header_title">Услуги</h2> 
                <p class="element_hover">Все услуги -></p>
            </div>
            <div class="main_content_services">
                <section class="main_service section_hover">
                    <img class="main_service_pic" src="/resources/images/480f34d1-4969-4464-98ac-ebb63d5a7c7a.jpg" alt="iis_pic">
                    <h3 class="title_hover">Веб-сервер (IIS)</h3>
                </section>
                <section class="main_service section_hover">
                    <img class="main_service_pic" src="/resources/images/ccd7d652-ad6f-49c2-a20a-43a5f28975b0.jpg" alt="">
                    <h3 class="title_hover">DNS-сервер</h3>
                </section>
                <section class="main_service section_hover">
                    <img class="main_service_pic" src="/resources/images/02df96c8-63e9-4662-96b7-6f61e8ccf0cb.jpg" alt="">
                    <h3 class="title_hover">DHCP-сервер</h3> 
                </section>
                <section class="main_service section_hover">
                    <img class="main_service_pic" src="/resources/images/fa12922a-97b4-4420-a2ca-cdaf61bb73d5.jpg" alt="">
                    <h3 class="title_hover">Сервер приложений</h3>
                </section>
            </div>
        </div>
        <div class="main_programs">
            <p>Продукция</p>
            <div class="main_programs_header">
                <h2 class="main_programs_header_title">Программное обеспечение</h2> 
                <p class="element_hover">Полный список -></p>
            </div>
            <div class="main_content_programs">
                <section class="main_program section_hover">
                    <h3 class="title_hover">Название ПО</h3>
                    <p>Количество</p>
                </section>
                <section class="main_program section_hover">
                    <h3 class="title_hover">Название ПО</h3>
                    <p>Количество</p>
                </section>
                <section class="main_program section_hover">
                    <h3 class="title_hover">Название ПО</h3>
                    <p>Количество</p>
                </section>
            </div>
        </div>
        <div class="main_promotions">
            <p>Акции</p>
            <div class="main_promotions_header">
                <h2 class="main_promotions_header_title">Выгодные предложения</h2>
                <p class="element_hover">Все акции -></p>
            </div>
            <p>Подпишитесь, чтобы не пропустить ограниченные предложения</p>
            <div class="main_content_promotions">
                <section class="main_promotion section_hover">
                    <h3 class="title_hover">Название акции</h3>
                    <img class="promotion" src="/resources/images/397b7c17-b73c-49f2-aed7-2ab965b87017.jpg" alt="promotion">
                </section>
                <section class="main_promotion section_hover">
                    <h3 class="title_hover">Название акции</h3>
                    <img class="promotion" src="/resources/images/397b7c17-b73c-49f2-aed7-2ab965b87017.jpg" alt="promotion">
                </section>
            </div>
        </div>
        <div class="main_description">
            <img class="main_description_pic" src="/resources/images/a712baa3b9d750738bbe4f358c5dfae4.jpg" alt="pic">
            <div class="main_content_description">
                <p>О компании</p>
                <h2 class="main_description_title">Компания "FARVATER Group"</h2>
                <p class="about_comp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos velit, doloremque ducimus deserunt saepe veniam nihil modi, deleniti voluptas temporibus magni labore voluptatum iste, earum minus voluptatem necessitatibus eum nemo!</p>
                <button class="main_btn_description btn_hover">
                    <p class="btn_hide_p">Подробнее</p>
                    <div class="btn_hide"></div>
                </button>
            </div>
        </div>
        <div class="main_news">
            <p>Новости</p>
            <div class="main_news_header">
                <h2 class="main_news_title">Последние события</h2>
                <p class="element_hover">Все новости -></p>
            </div>
            <div class="main_content_news">
                <section class="main_new">
                    <div class="examp"></div>
                    <p>17 сентября 2024</p>
                    <h3>Название статьи</h3>
                </section>
                <section class="main_new">
                    <div class="examp"></div>
                    <p>17 сентября 2024</p>
                    <h3>Название статьи</h3>
                </section>
                <section class="main_new">
                    <div class="examp"></div>
                    <p>17 сентября 2024</p>
                    <h3>Название статьи</h3>
                </section>
                <section class="main_new">
                    <div class="examp"></div>
                    <p>17 сентября 2024</p>
                    <h3>Название статьи</h3>
                </section>
            </div>
        </div>
        <div class="main_request">
            <form action="">
                <p>Контакты</p>
                <h2 class="main_form">Оставьте заявку</h2>
                <p>Ваше имя</p>
                <input type="text" class="main_request_data" required>
                <p>Телефон</p>
                <input type="text" class="main_request_data" required>
                <div class="checkbox">
                    <input type="checkbox" class="main_request_checkbox"><p>Согласен на обработку персональных данных</p>
                </div>
                <button class="main_form_submit btn_hover">
                    <p class="btn_hide_p">Отправить</p>
                    <div class="btn_hide"></div>
                </button>
            </form>
            <img class="main_form_pic" src="/resources/images/_6rsfgy5crojsmlcumtaksx1te4.jpeg" alt="form_pic">
        </div>
    </main>
    <footer>
        <div class="footer_up">
            <h3 class="footer_up_title">Подписывайтесь на новости</h3>
            <input type="text" class="footer_news" placeholder="Email">
        </div>
        <div class="footer_down">
            <div class="footer_down_inf">
                <section class="footer_down_about">
                    <p class="footer_down_title"><b>Компания</b></p>
                    <p class="footer_down_p">О компании</p>
                    <p class="footer_down_p">Сертификаты</p>
                    <p class="footer_down_p">Руководство</p>
                    <p class="footer_down_p">Отзывы</p>
                    <p class="footer_down_p">Вакансии</p>
                    <p class="footer_down_p">Реквизиты</p>
                    <p class="footer_down_p">Новости</p>
                </section>
                <section class="footer_down_about">
                    <p class="footer_down_title"><b>Купить программы</b></p>
                    <p class="footer_down_p">ЭЦП</p>
                </section>
                <section class="footer_down_about">
                    <p class="footer_down_title"><b>Услуги</b></p>
                    <p class="footer_down_p">Облачные решение</p>
                    <p class="footer_down_p">Сопровождение</p>
                    <p class="footer_down_p">Внедрение</p>
                    <p class="footer_down_p">Системное администрирование</p>
                    <p class="footer_down_p">Обучение</p>
                </section>
                <section class="footer_down_about">
                    <p class="footer_down_title"><b>Линия консультации</b></p>
                    <p class="footer_down_title"><b>Центр реальной автоматизации</b></p>
                    <p class="footer_down_title"><b>Стать партнером</b></p>
                    <p class="footer_down_title"><b>Партнеры</b></p>
                    <p class="footer_down_title"><b>Блог</b></p>
                    <p class="footer_down_title"><b>Контакты</b></p>
                    <p class="footer_down_title"><b>Прайс-лист</b></p>
                </section>
                <section class="footer_down_about">
                    <p class="footer_down_title"><b>+7 937 525-83-11</b></p>
                    <p class="footer_down_p">zurskij@gmail.com</p>
                    <p class="footer_down_p">423800 Республика Татарстан,<br> г. Набережные Челны</p>
                </section>
            </div>
            <div class="footer_down_shortcut">
                <p class="footer_down_p">©FARVATER Group</p>
                <p class="footer_down_p">Политика конфиденциальности</p>
            </div>
        </div>
    </footer>
</body>
</html>