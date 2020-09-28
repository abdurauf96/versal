<!-- codes for nasha produksiya-->
    <div class="container-fluid produk" id="product">
      <div class="container">
        <div class="produk--text">
          <h3>{{ $product->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        </div>
        <div class="produk_wrapper">
          <div class="produk_wrapper--text">
            <p>{!! $product->getTranslatedAttribute('description', \App::getLocale(), 'ru') !!} </p>
          </div>
          <div class="produk_wrapper--img"><img src="{{ Voyager::image($product->image) }}" alt="kuting"/><a href="#" type="button" data-toggle="modal" data-target="#modelId">@lang('lang.katalog')</a>
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="modelTitleId">@lang('lang.product')</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="imya">@lang('lang.imya'):</label>
                        <input class="form-control" id="name" type="text" placeholder=""/>
                        <label for="imya">@lang('lang.nomer'):</label>
                        <input class="form-control" id="phone" type="text" value="+998"/>
                        <label for="imya">E-mail</label>
                        <input class="form-control" id="email" type="email" placeholder="E-MAIL"/>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <a href="{{ asset('Open.docx') }}" class="btn download">@lang('lang.skachat')</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  nasha produksiya the end-->