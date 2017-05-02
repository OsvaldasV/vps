 <!-- Static navbar -->
    <a href="#" id="backToTop" style="right: 51.5px; display: none;">
      <span></span>
    </a>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container magic">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img class="logo" src="{{asset('img/logo.jpg')}}">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            {{-- ar reikia tel? --}}
            <li><span class="glyphicon glyphicon-earphone"></span>
              <span>+370 46 383427</span></li>
            <li><a href="#about">@lang('header.aboutus')</a></li>
            <li><a href="#services">@lang('header.services')</a></li>
            <li><a href="#whyus">@lang('header.whyus')</a></li>
            <li><a href="#portfolio">@lang('header.portfolio')</a></li>
            <li><a href="#how-we-work">@lang('header.how-we-work')</a></li>
            <li><a href="#contacts">@lang('header.contacts')</a></li>
      
          </ul>

          
        </div><!--/.nav-collapse -->
        <div class="dropdown language">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('img/flags')}}/{{LaravelLocalization::getCurrentLocale()}}.png" alt="Lithuanian flag"> 
        

          <span class="caret"></span></a>
              <ul class="dropdown-menu">
        			    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <li>
                          <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                              @if($properties['name'] == "Lithuanian" && LaravelLocalization::getCurrentLocale() !== 'lt')
                                <img src="{{ asset('img/flags')}}/lt.png" alt="Lithuanian flag">
                              @endif
                              @if($properties['name'] == "English" &&LaravelLocalization::getCurrentLocale() !== 'en')
                               <img src="{{ asset('img/flags')}}/en.png" alt="English flag">
                              @endif
                          </a>
                      </li>
                    @endforeach
              </ul>
         </div> <!-- dropdown language -->
      </div>
      
    </nav>
