<!-- codes for predlagaem-->
    <div class="container-fluid pred" id="useful">
      <div class="container">
        <div class="pred__text">
          <h3>@lang('lang.predlagat')</h3>
        </div>
      </div>
      <div class="container chto">
      @isset($offers)
        @foreach($offers as $offer)
        <div class="pred__item">
          <div class="pred__item--img"><img src="{{ Voyager::image($offer->image) }}" alt="kuting"/></div>
          <div class="pred__item--avtor">
            <h4>{{ $offer->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h4>
          </div>
          <div class="pred__item--text">
            <p>{{ $offer->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</p>
          </div>
        </div>
        @endforeach
      @endisset
      </div>
    </div>
    <!-- predlagaem the end-->