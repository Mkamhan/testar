 <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div style="direction: ltr;" class="container">
          <a   class="navbar-brand" href="/">Archive<i>Pro</i>.</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>  {{ trans('web.Menu') }}
          </button>

          <div class="collapse navbar-collapse"style="font-family: 'Cairo', sans-serif; direction: rtl;" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="/" class="nav-link">{{  trans('web.home') }}</a></li>
              <li class="nav-item"><a href="/" class="nav-link"style="font-family: font-family: 'Cairo', sans-serif; ">{{trans('web.Projects')}}</a></li>
              <li class="nav-item"><a href="about" class="nav-link">{{trans('web.Team')}}</a></li>
              <li class="nav-item"><a href="#" class="nav-link"> {{trans('web.Contact')}} </a></li>
             {{--  <li class="dropdown dropdown-extended dropdown-notification" id="lang_list">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="fa fa-globe"></i>
    </a>
    <ul class="dropdown-menu">
        @foreach(L::all() as $l)
        <li>
            <a href="{{aurl('lang/'.$l)}}">
            <i class="fa fa-flag"></i> {{trans('admin.'.$l)}} </a>
        </li>
        @endforeach
    </ul>
</li> --}}
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url( {{url('readit/images/grad.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
            <h2 class="subheading">{{trans('web.Hello')}}</h2>
            <h1 class="mb-4 mb-md-0">Archive Pro</h1>
            <div class="row">
                <div class="col-md-7">
                    <div class="text">
                        <p>{{ trans('web.text') }}</p>
                        <div class="mouse">
                                        <a href="#" class="mouse-icon">
                                            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                                        </a>
                                    </div>
                                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
