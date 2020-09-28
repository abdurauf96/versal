<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title-->
    <title>Versal</title>
    <!-- title the end-->
    <!-- all css files goes here-->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/all.min.css"/>
    <link rel="stylesheet" href="/css/slick.css"/>
    <link rel="stylesheet" href="/css/slick-theme.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="/css/add.css"/>
    <!-- css files the end-->
  </head>
  <body>
    <!-- codes for header top-->
    <div class="container-fluid header_top">
      <div class="container">
        <div class="header_top--left">
          <ul class="list-unstyled p-0">
            <li><a href="#"><span class="fa fa-map-marker-alt"></span><span>@lang('lang.adres')</span></a></li>
            <li><a href="#">   <span class="fa fa-phone-volume"> </span><span>{{ setting('site.phone') }};&nbsp;</span></a><a href="#"> <span>{{ setting('site.phone2') }};   </span></a></li>
            <li><a href="#">    <span class="fa fa-envelope"> </span><span>{{ setting('site.email') }}</span></a></li>
          </ul>
        </div>
        <div class="header_top--right">
          <div class="header_top--right--text">
            <p>@lang('lang.bez')<span>08:00 - 22:00</span></p>
          </div>
          
          <div class="header_top--right--select">
            <div class="img"><a href="/lang/uz"><img src="img/uzb.png" alt="kuting"/></a></div>
            <div class="img"><a href="/lang/ru"><img src="img/ru.png" alt="kuting"/></a></div>

          </div>
          <div class="header_top--right--link"><a href="#"><i class="fab fa-telegram-plane"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-vk">   </i></a></div>
        </div>
      </div>
    </div>
    <!-- header top the end-->
    <!-- codes for the logo            -->
    <div class="container-fluid header_logo">  
      <div class="container">
        <div class="header_logo--img"><a href="/"><img src="img/Logo.png" alt="kuting"/></a></div>
        <div class="header_menu">
          <div id="burger_none">
            {{ menu('main', 'layouts.menu') }}
          </div>
          <div id="burger_block">
            {{ menu('main', 'layouts.menu') }}
          </div>
          <div id="burger"></div>
        </div>
      </div>
    </div>
    <!-- header logo the end-->

    @yield('content')

     <!-- footer-->
    <div class="container-fluid footer" id="contact">
      <div class="container">
        <div class="kontakt">
          <div class="kontakt--text">
            <h3>@lang('lang.kontak')</h3>
          </div>
        </div>
        <div class="kontakt__wrapper">
          <div class="kontakt--item"><span><i class="fa fa-map-marker-alt"></i></span>
            <div class="kontakt--item--avtor">
              <p>@lang('lang.ofis')</p>
            </div>
            <div class="kontakt--item--text">
              <p>@lang('lang.adres')  </p>
            </div>
          </div>
          <div class="kontakt--item"><span id="rot"><i class="fa fa-phone-volume"></i></span>
            <div class="kontakt--item--avtor">
              <p>Мененджер:</p>
            </div>
            <div class="kontakt--item--text"><a href="#">{{ setting('site.phone') }}</a><a href="#">{{ setting('site.phone2') }}</a></div>
            <div class="kontakt--item--avtor">
              <p>Мы в соцсетях:</p>
            </div>
            <div class="kontakt--item--link"><a href="#"><i class="fab fa-telegram-plane"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-vk">   </i></a></div>
          </div>
          <div class="kontakt--item"><span><i class="fa fa-envelope"></i></span>
            <div class="kontakt--item--avtor">
              <p>E-mail:</p>
            </div>
            <div class="kontakt--item--text"><a href="email">{{ setting('site.email') }}</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footerp">
      <div class="container">
        <p>Обращаем Ваше внимание на то, что цена, указанная на сайте plasters.ru, действительна только для заказов через данный интернет-магазин с доставкой по Москве и может отличаться от цен в розничных точках продаж в регионах в связи с логистическими затратами конкретного продавца. При самовывозе или доставке из магазинов дилеров в регионах уточняйте цену в конкретном магазине. Данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации. Для получения подробностей о наличии и стоимости указанных товаров и (или) услуг, пожалуйста, обращайтесь к менеджерам отдела клиентского обслуживания с помощью специальной формы связи или по телефонам: 8 (800) 555-49-77, +7 495 268-07-70</p>
      </div>
    </div>
    <div class="container-fluid footer_bottom">   
      <div class="container">
        <p>Copyright 2019</p>
        <p>Разработка сайтов <a href="">WebMasters</a></p>
      </div>
    </div>
    <!-- footer the end-->
    <!-- modal-->
    <div class="container-fluid" id="m">
      <div class="container">
        <div class="modal_zayavku">
          
          <div class="zayavku_info">
            <div class="zayavku_exit"><a href="#optom">&times;</a></div>
            <p>@lang('lang.forma')</p>
          </div>
          <div class="zayavku_form">
            <form action="{{ route('contact') }}" method="post">
              {{ csrf_field() }}
              <div class="form_info">
                <p>@lang('lang.zapolnit')</p><a href="tel:99891111225">{{ setting('site.phone') }}</a>
              </div>
              <label for="imya">@lang('lang.imya'):</label>
              <input required="" class="form-control" type="text" name="name" placeholder="Александра"/>
              <label for="imya">@lang('lang.nomer'):</label>
              <input required="" class="form-control" name="phone" type="text" value="+998"/>
              <label for="imya">E-mail</label>
              <input required="" class="form-control" type="email" name="email" placeholder="Введите свой E-MAIL"/>
              <label for="imya">@lang('lang.region')</label>
              <input class="form-control" type="text" name="region" placeholder="Выберите свой регион"/>
              <div class="submit">
                <input class="form-control" type="submit" value="@lang('lang.send')"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- modal the end-->
    <!-- all js files goes here-->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- script files the end-->
  </body>
</html>