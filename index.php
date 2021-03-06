<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/mobile.css" type="text/css"/>
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/component.css" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-regular" rel="stylesheet" type="text/css"/>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-bold" rel="stylesheet" type="text/css"/>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-condensed-bold" rel="stylesheet" type="text/css"/>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-condensed" rel="stylesheet" type="text/css"/>
    <script src="js/modernizr.custom.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<title>Вскрытие замков, дверей, автомобилей в Ставрополе></title>
</head>

<body>
<div class="mp-pusher" id="mp-pusher">
    <div class="wrapper">
        <header class="header">
            <div class="cont_head">
                <div class="cont">
                    <div class="head_logo">
                        <a href="/"><img src="images/logo.png" alt="Аварийное вскрите замков дверей - Спецмастер"></a>
                    </div>
                    <div class="bars">
                        <a href="#" id="trigger" class="menu-trigger"><img src="images/bars.svg" id="showLeftPush"
                                                                           alt="Меню"></a>
                    </div>
                    <div class="head_soc none">
                        <a href="https://vk.com/medvezhatnik26"><img src="images/vk.png" alt="Спецмастер вконтатке"></a>
                        <a href="https://ok.ru/profile/522654263352"><img src="images/ok.png" alt="Спецмастер одноклассники"></a>
                        <img src="images/inst.png" alt="Спецмастер инстаграмм">
                    </div>
                    <div class="head_phone">
                        <a href="#zakaz">Заказать звонок</a>
                        <img src="images/call.png" alt="Вызов">
                        <div class="phones">
                            <p class="phone">8 (8652) 660-550</p>
                            <p class="phone">8 (968) 266-05-50</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="men_head">
                <div class="head_menu none">
                    <jdoc:include type="modules" name="menu"/>
                </div>
            </div>
            <div class="head_slide">
                <jdoc:include type="modules" name="names"/>
            </div>
        </header><!-- .header-->
        <div id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <div class="left">
                    <nav class="header_menu">
                        <h2>Меню</h2>
                        <jdoc:include type="modules" name="menu"/>
                    </nav>
                    <div class="head_soc">
                        <a href="https://vk.com/medvezhatnik26"><img src="images/vk.png" alt="Спецмастер вконтатке"></a>
                        <a href="https://ok.ru/profile/522654263352"><img src="images/ok.png" alt="Спецмастер одноклассники"></a>
                        <img src="images/inst.png" alt="Спецмастер инстаграмм">
                    </div>
                </div>
            </div>
        </div>
        <main class="content">
            <div class="cont center">
                <jdoc:include type="component" />  <!-- Код для вывода контента (статей) -->
            </div>
            <div class="block_in center">
                <div class="cont">
                    <p class="h2_w">Оставьте свой номер <br> и мастер обязательно вам <br>
                        <span class="highlighted"> перезвонит в ближайшее время</span>
                    </p>
                    <form class="call_form" method="POST" id="feedback-forms">
                        <input type="text" name="telFF" required="" placeholder="Имя" class="text">
                        <input type="text" name="nameFF" required="" placeholder="Телефон" class="text">
                        <input type="submit" value="Отправить" class="submit">
                    </form>
                    <br>
                </div>
            </div>

            <div class="cont">
                <p class="h2">Вскрытие замков любой сложности 99% без повреждений</p>
                <p class="left">
                    Наша компания занимается не только реализацией замковых конструкций
                    от лучших мировых производителей, но и предлагает услуги по их обслуживанию.
                    То есть если Вам необходима помощь любого рода, связанная с замками и дверьми,
                    тогда Вам стоит обратиться к нашим специалистам. У нас работают настоящие профессионалы,
                    которые справятся с любой проблемой. Вскрытие дверей и замков мы реализуем в
                    кратчайшие сроки и с профессионализмом.
                </p>
            </div>

            <div class="cont">
                <section class="block_4">
                    <h4 class="green">1203</h4>
                    <p style="margin-top: 5px;">вскрытых замков</p>
                </section>
                <section class="block_4">
                    <h4 class="green">2132</h4>
                    <p style="margin-top: 5px;">вскрытых астомобилей</p>
                </section>
                <section class="block_4">
                    <h4 class="green">879</h4>
                    <p style="margin-top: 5px;">вскрытых дверей</p>
                </section>
                <section class="block_4">
                    <h4 class="green">4298</h4>
                    <p style="margin-top: 5px;">довольных клиентов</p>
                </section>
            </div>

            <div style="background: #f0f1f1;">
                <div class="cont">
                    <section class="block_3">
                        <h3 class="h3">Аварийное вскрытие замков, в экстренных случаях</h3>
                        <p class="left">Чтобы не оказаться в подобной ситуации, всегда держите в записной книжке телефон нашей фирмы.
                          Мы всегда гарантируем качественный результат в кратчайшие сроки. Наши мастера по вскрытию замков ценят ваше и
                          свое время. Мы вскрываем металлические двери, деревянные, металлопластиковые и бронированные двери с замкоми 
                          повышенной взломостойкости. А некоторые модели замков, после вскрытия дверей, остаются в исправном
                          состоянии.Вскрытие дверей производится специальными инструментами.
                      </p>
                    </section>
                    <section class="block_3">
                        <h3 class="h3">Срочное вскрытие замков от 20 минут</h3>
                        <p class="left">Специалисты нашей компании, обладают большим опытом и имеют
                          все необходимое оборудование, чтобы провести аварийное вскрытие замков в
                          кратчайшие сроки и без повреждения дверей. Услуги, предоставляемые нашей
                          компанией, позволяют выйти из ситуации когда сломался замок или потерян 
                          ключ, так как мы не только предлагаем вскрытие замков дверей, но и аварийное
                          вскрытие замков любого типа, в том числе и вскрытие сейфов с механическими
                          и электронными замками. К тому же, к нам можно обратиться, если нужно быстро
                          вскрыть автомобиль.
                      </p>
                    </section>
                    <section class="block_3">
                        <h3 class="h3">Срочное вскрытие замков в СТАВРОПОЛЕ - круглосуточно (24ч)!</h3>
                        <p class="left">Если у Вас захлопнулась дверь в квартиру, первой реакцией,
                          как правило, становится паника. Ведь иногда можно остаеться практически 
                          на улице без возможности попасть к себе домой. И если замок повышеной 
                          взломостойкости, то вам помогут только профессионалы, такие которые 
                          работают у нас. Не пытайтесь самостоятельно устранять поломку, производить
                          вскрытие дверей или установку новых замков - так можно только окончательно
                          сломать замок или дверь, неправильно смонтировать механизм. Обращайтесь к 
                          профессионалам.
                      </p>
                    </section>
                </div>
            </div>
        </main><!-- .content -->

    </div><!-- .wrapper -->
    <div class="map">
        <script type="text/javascript" charset="utf-8"
                src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=B1yfzdhg0MntwmWLHRpQRCuQ76J5VlFO&width=auto&height=368"></script>
    </div>
    <div class="city"><br>
        <p class="city_head">
            Наша служба оказывает услуги по вскрытию дверей в Ставрополе и по всему Ставропольскому краю:<br><br>
        </p>
        <div class="st1">
            г. Ставрополь<br>
            г. Михайловск<br>
            г. Кисловодск<br>
            г. Минеральные Воды<br>
            г. Ессентуки<br>
            г. Благодарный<br>
            г. Ипатово<br>
            г. Будённовск<br>
            г. Георгиевск <br>
            г. Железноводск<br>
        </div>
        <div class="st1">
            г. Зеленокумск<br>
            г. Изобильный <br>
            г. Невинномысск<br>
            г. Лермонтов <br>
            г. Нефтекумск<br>
            г. Новоалександровск<br>
            г. Новопавловск<br>
            г. Пятигорск<br>
            г. Светлоград<br>
            с. Грачёвка<br>
        </div>
        <div class="st1">
            с. Донское<br>
            ст. Ессентукская<br>
            с. Кочубеевское<br>
            с. Московское<br>
            с. Красногвардейское<br>
            ст. Курская<br>
            с. Левокумское<br>
            с. Летняя Ставка<br>
            с. Новоселицкое<br>
            с. Степное<br>
        </div>
    </div>
    <footer class="footer">
        <div class="cont">
            <div class="cont_head">
                <div class="head_logo">
                    <img src="images/logo.png" alt="Название компании">
                </div>

                <!--<div class="footer_menu none">
                    <jdoc:include type="modules" name="menu"/>
                </div>-->
                <div class="footer_phone">
                    <!-- <a href="#zakaz">Заказать звонок</a>-->
                    <img src="images/call.png" alt="Вызов">
                    <div class="phones">
                        <p class="phone">8 (8652) 660-550</p>
                        <p class="phone">8 (968) 266-05-50</p>
                    </div>
                </div>
                <div class="footer_copyright">
                    Компания "СпецМастер"<br>
                    Все права защищены (с) 2016
                </div>
                <div class="head_soc">

                </div>
                <div class="footer_soc none">
                     <a href="https://vk.com/medvezhatnik26"><img src="images/vk.png" alt="Спецмастер вконтатке"></a>
                        <a href="https://ok.ru/profile/522654263352"><img src="images/ok.png" alt="Спецмастер одноклассники"></a>
                    <img src="images/inst.png" alt="Спецмастер инстаграмм">
                </div>
            </div>
        </div>
    </footer><!-- .footer -->
</div>
<script src="js/classie.js"></script>
<script src="js/mlpushmenu.js"></script>
<script>
    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));
</script>
<div class="lightboxs" id="zakaz">
    <div class="za">
        <a href="#_" class="close">x</a>
        <?
        if (isset ($_POST['nameFF'])) {
            $from = "help-line@inbox.ru";
            $to = 'superspecmaster.26@gmail.com';
            $subject = '' . $_SERVER['recipient'] = 'Заявка с сайта specmaster.ru';
            $subject = "=?utf-8?b?" . base64_encode($subject) . "?=";
            $message = "Имя: " . $_POST['nameFF'] . " \nТелефон: " . $_POST['telFF'] . " \n JinMedia";
            $headers = 'Content-type: text/plain; charset="utf-8"';
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "From: <info@jinmedia.ru>\r\n";
            mail($to, $subject, $message, $headers);
            echo('<p style="color: #000; font-weight: bold; font-family: segoe UI;">Ваше сообщение получено, спасибо!</p>');
            $_POST['nameFF'] = $_POST['telFF'] = $_POST['ocFF'] = '';
        }
        ?>
        <h3>Заказать по акции</h3>
        <p>Заполните обязательные поля (имя, телефон)</p>
        <form method="POST" id="feedback-form">
            <input type="text" name="telFF" required="" placeholder="Имя"><br>
            <input type="text" name="nameFF" required="" placeholder="Телефон"><br>
            <input type="submit" value="Отправить">
        </form>
        <br>

    </div>
</div>
<div class="up">
    <a href="#"><img src="images/up.svg" id="showLeftPushs" alt="Меню"></a>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter41282649 = new Ya.Metrika({
                    id: 41282649,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks"); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/41282649" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>