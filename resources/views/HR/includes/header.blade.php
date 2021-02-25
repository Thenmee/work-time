<!--  navbar  -->
<header>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-md bg-light navbar-light shadow-sm  bg-white px-4" id="myHeader"
        style="margin-top:0px; border-bottom:3px solid rgb(79, 157, 213);">
        <!-- Toggler/collapsibe Button -->
        <div class="navbar-brand " style="margin: 5px">
            <a class=" " href="#">
                <img class='justify-content-start' src="{{ URL::asset('assets/images/hrlogo.png') }}" height="55"
                    alt="" style="margin-top:0px;" />
            </a>

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavbar">
            {{-- <button class="btn btn-primary " >
                    <a class="btn btn-md " href="{{route('loginhr')}}">{{__('fields_web.Navbar.login')}} </a>
                  </button>
                 <button class="btn btn-primary ">
                    <a class=" btn btn-md " href="{{route('abouthr')}}">{{__('fields_web.Navbar.signup')}} </a>
                  </button> --}}
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link menu  " href="{{ route('homehr') }}">{{ __('fields_web.Navbar.Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('tenders') }}">{{ __('fields_web.Navbar.tenders') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('jobs') }}">{{ __('fields_web.Jobs.Title') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link   " href="{{ route('services') }}">{{ __('fields_web.Navbar.service') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   " href="{{ route('blogs') }}">{{ __('fields_web.Navbar.blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('abouthr') }}">{{ __('fields_web.Navbar.about_us') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   "
                        href="{{ route('contacthr') }}">{{ __('fields_web.Navbar.contact_us') }}</a>
                </li>

            </ul>

            <ul class="navbar-nav  settingBtns">
                <?php if (app()->getLocale() == 'ar') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><?php
                        if (app()->getLocale() == 'ar') {
                        echo __('fields_web.Navbar.en');
                        }
                        if (app()->getLocale() == 'en') {
                        echo __('fields_web.Navbar.ar');
                        }
                        ?></a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><?php
                        if (app()->getLocale() == 'ar') {
                        echo __('fields_web.Navbar.en');
                        }
                        if (app()->getLocale() == 'en') {
                        echo __('fields_web.Navbar.ar');
                        }
                        ?></a>
                </li>
                <?php } ?>


                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"> <i class=" fa fa-sign-out-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"> <i class=" fa fa-user"></i></a>
                    </li>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('signuphr') }}"><i
                          class="fa fa-user-plus"></i> </a>
              </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('loginhr') }}"><i class="fa fa-sign-in-alt"></i> </a>
                    </li>
                @endif
            </ul>
            <!-- Brand -->
        </div>
    </nav>
    <!--<hr style="height:2px;border-width:0;color:blue;background-color:blue ;margin-top:103px;">-->

    <!-- Navbar -->
    <!--end navbar-->
</header>
