<!-- codes for o kampani-->
    <div class="container-fluid o_kam" id="about">
      <div class="container">
        <div class="o_kam--text">
          <div class="o_kam--text--logo">
            <h3>{{ $about->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
          </div>
          <div class="o_kam--text--info">
            <p>{!! $about->getTranslatedAttribute('description', \App::getLocale(), 'ru') !!}</p>
          </div>
        </div>
        <div class="o_kam--img">
          <div class="img1"><img src="img/o_kam.png" alt="kuting"/></div>
        </div>
      </div>
    </div>
    <!-- o kampani the end                      -->