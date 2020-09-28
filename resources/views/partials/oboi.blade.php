<!-- codes for about oboi-->
    <div class="container-fluid about_oboi">
      <div class="container">
        <div class="oboi_galery">
          @isset($images)
          <div class="oboi_galery--item">
            @foreach($images as $image)
            <a href="{{ Voyager::image($image->image) }}" data-fancybox="gallery" data-caption="Asosiy1">
              <img src="{{ Voyager::image($image->image) }}" alt="" />
            </a>
            @if($loop->iteration==2)
          </div>
          <div class="oboi_galery--item">
            @endif
          @endforeach
          </div>
          
          @endisset
        </div>
        <div class="accordion_wrapper">
          <div class="accordion__text">
            <h3>@lang('lang.oboi')</h3>
          </div>
          <div id="accordion">
          @isset($aboys)
            @foreach($aboys as $aboy)
            <div class="accordion_body"><a href="#">{{ $aboy->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</a><i class="fas fa-angle-left ml-0"></i></div>
            <div class="kat_wrapper">
              <p>{{ $aboy->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</p>
            </div>
            @endforeach
          @endisset
          </div>
        </div>
      </div>
    </div>
    <!-- about oboi the end-->