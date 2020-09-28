 <!-- add banner-->
    <div class="container-fluid add_banner" id="optom">
      <div class="container">
        <div class="wrapper">
          <div class="wrapper__logo">
            <h3>@lang('lang.title')</h3>
          </div>
          <div class="wrapper__text">
            <p>@lang('lang.subtitle')</p>
          </div>
          <div class="wrapper__link"><a href="#m">@lang('lang.uznat')</a></div>
        </div>
      </div>
    </div>
    <!-- add babber the end-->
    <!-- codes for banner-->
    <div class="container-fluid banner" id="whywe">
      <div class="banner__img"><img src="img/master.png" alt="kuting"/></div>
      <div class="container">
        <div class="banner_wrapper">
          <div class="banner_wrapper--text">
            <h3>@lang('lang.pochemu')</h3>
          </div>
          <div class="banner_wrapper--info">
          @isset($reasons)
            @foreach($reasons as $reason)
            <div class="banner_wrapper--info--item">
              <div class="banner_wrapper--number">
                <p>0{{ $reason->id }}</p>
              </div>
              <div class="banner_wrapper--img"><img src="{{ Voyager::image($reason->image) }}" alt="kuting"/></div>
              <div class="banner_wrapper--word">
                <h3>{{ $reason->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
                <p>{{ $reason->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</p>
              </div>
            </div>
            @endforeach
          @endisset
          </div>
        </div>
      </div>
    </div>
    <!-- banner the end-->