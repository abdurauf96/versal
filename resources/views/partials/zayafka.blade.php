 <!-- codes for zayavku-->
    <div class="container-fluid zayavku">
      <div class="container">
        <div class="zayavku__left">
          <div class="zayavku--text">
            <div class="zapros--text">
              <p>@lang('lang.poyavilis')</p>
            </div>
            <div class="ostavit--text">
              <p>@lang('lang.zayafka')</p>
            </div>
            <div class="vremya--text">
              <p>@lang('lang.perezvonit')</p>
            </div>
          </div>
          <form action="{{ route('contact') }}" method="post">
            {{ csrf_field() }}
            <div class="form1">
              <input class="form-control" type="text" name="name" placeholder="@lang('lang.imya')"/>
              <input class="form-control" type="text" name="phone" placeholder="@lang('lang.nomer')"/>
              <input class="form-control" type="email" name="email" placeholder=" E-mail"/>
            </div>
            <div class="form2">
              <input class="form-control" type="text" name="region" placeholder="@lang('lang.strana')" src="img/pin.png"/>
              <input class="form-control" type="submit" value="@lang('lang.send')"/>
            </div>
          </form>
          <div class="zayavku--text">
            <div class="vremya--text">
              <p>@lang('lang.spam')</p><span> @lang('lang.zvonit'):</span><a href="#">{{ setting('site.phone2') }} ;</i></a><a href="#">{{ setting('site.phone') }}</i></a>
            </div>
          </div>
        </div>
        <div class="zayavku__right">
          <img src="/img/zayavku_absolute.png" alt=""/>
        </div>
      </div>
    </div>
    <!-- zayavke the end-->