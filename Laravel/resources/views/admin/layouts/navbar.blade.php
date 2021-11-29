<aside class="left-nav">

    {{-- nav header --}}
    <div class="nav-header ">
        <a href="{{route('home')}}" class="flex justify-start items-center" tabindex="-1">
            <div class="nav-logo w-full h-full px-3">
                <img src="{{asset('/uploads/images/logo.svg')}}" style="width:75px;height:75px;margin-inline: auto;"
                    alt="logo">
            </div>
        </a>
        <div class="nav-state-container flex justify-end items-center w-full h-full">
            <div class="nav-state">
                @if(App::isLocale('en'))
                <i class="fas fa-arrow-alt-to-right"></i>
                @endif
                @if(!App::isLocale('en'))
                <i class="fas fa-arrow-alt-from-right"></i>
                @endif
            </div>
        </div>
    </div>
    {{-- nav body --}}
    <div class="nav-body w-full">
        <ul class="list">
            {{-- list links --}}
            <li class="list-item">
                <a href="{{route('admin.dashboard')}}" tabindex="-1">
                    <div class="item-container" tabindex="0">
                        <div class="item-icon">
                            <i class="fas fa-home-lg-alt"></i>
                        </div>
                        <div class="item-link">
                            <span>{{__('index.admin.nav.dashboard')}}</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-pager"></i>
                    </div>
                    <div class="item-link item__link--extend">
                        <span>{{__('index.admin.nav.landing_page.title')}}</span>
                    </div>
                </div>
                <ul class="list__extend">
                    <li class="list__item--extend">
                        <a href="{{route('admin.slides.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>{{__('index.admin.nav.landing_page.slides')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list__item--extend">
                        <a href="{{route('admin.about.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>{{__('index.admin.nav.landing_page.edit_about')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-chart-network"></i>
                    </div>
                    <div class="item-link item__link--extend">
                        <span>{{__('index.admin.nav.services.title')}}</span>
                    </div>
                </div>
                <ul class="list__extend">
                    <li class="list__item--extend">
                        <a href="{{route('admin.services.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>{{__('index.admin.nav.services.all')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list__item--extend">
                        <a href="{{route('admin.services.create')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>{{__('index.admin.nav.services.create')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="item-link item__link--extend">
                        <span>{{__('index.admin.nav.teams.title')}}</span>
                    </div>
                </div>
                <ul class="list__extend">
                    <li class="list__item--extend">
                        <a href="{{route('admin.teams.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>{{__('index.admin.nav.teams.all')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list__item--extend">
                        <a href="{{route('admin.teams.create')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>{{__('index.admin.nav.teams.create')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-handshake-alt"></i>
                    </div>
                    <div class="item-link item__link--extend">
                        <span>{{__('index.admin.nav.partners.title')}}</span>
                    </div>
                </div>
                <ul class="list__extend">
                    <li class="list__item--extend">
                        <a href="{{route('admin.partners.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>{{__('index.admin.nav.partners.all')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list__item--extend">
                        <a href="{{route('admin.partners.create')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>{{__('index.admin.nav.partners.create')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    {{-- nav footer --}}
    <div class="nav-footer w-full mt-auto">
        <ul class="list">
            {{-- languages --}}
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <div class="item-link item__link--extend">
                        <span>{{__('index.admin.nav.languages.title')}}</span>
                    </div>
                </div>
                <ul class="list__extend language-list">
                    <li class="list__item--extend">
                        <a href="{{route('languages.english')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>{{__('index.admin.nav.languages.english')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list__item--extend">
                        <a href="{{route('languages.kurdish')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>{{__('index.admin.nav.languages.kurdish')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list__item--extend">
                        <a href="{{route('languages.arabic')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>{{__('index.admin.nav.languages.arabic')}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- user profile --}}
            <li class="list-item">
                <a href="{{route('admin.profile.manage')}}" tabindex="-1">
                    <div class="item-container" tabindex="0" role="button">
                        <div class="item-icon nav__profile-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="item-link nav-profile_name">
                            <span>{{__('index.admin.nav.manage_users')}}</span>
                        </div>
                    </div>
                </a>
            </li>
            {{-- user profile --}}
            <li class="list-item">
                <a href="{{route('admin.profile.index')}}" tabindex="-1">
                    <div class="item-container" tabindex="0" role="button">
                        <div class="item-icon nav__profile-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="item-link nav-profile_name">
                            <span>{{auth()->user()->username}}</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <form action="{{route('admin.logout')}}" method="post">
                    @csrf
                    <button class="item-container" tabindex="0">
                        <div class="item-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        <div class="item-link">
                            <span>{{__('index.admin.nav.logout')}}</span>
                        </div>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>