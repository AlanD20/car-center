<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="Car center is professional, modern automotive service, with more than 30 years of experience in the automotive industry, we thrive to work on providing the best and highest quality service at the lowest price possible. We are located in a very easy to reach location at the center of the city. Our staff consists of many professionals, academic, and intelligent technicians that are supervised and managed by team of highly qualified mechanical and automotive engineers to get the best results. Our management department consists of highly trained, competent, ethical teams of accountants and data entry employees that work to provide the best customer experience that exceeds all expectations.">
    <meta name="keywords"
        content="Car, center, Car center, Car service, Car car, Car services, Car cars, Car automotive, Car automotives, Car automotive cars, Car automotive cars center, Car center automotive cars, Car center automotive, automotive cars, kurdish, kurdish service, kurdish cars, kurdish cars service, kurdish center service, kurdish services, kurdish cars services, kurdish automotive center, kurdish automotive, kurdish car automotive, kurdish car automotive service">
    <meta name="language" content="English">
    <link rel="shortcut icon" href="{{asset('uploads/images/favico.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('uploads/images/favico.ico')}}" type="image/x-icon" />
    <meta name="author" content="AlanD20">
    <link rel="preload" crossOrigin="anonymous" href="/js/index.js" as="script">
    <link rel="preload" href="/css/index.css" as="style">
    <link rel="preload" href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" as="style" />
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/plyr.css" />

    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/fonts.css">
    @if(session('locale')==='ku')
    <link rel="stylesheet" href="/css/ku_index.css">
    <link rel="stylesheet" href="/css/rtl_index.css">
    @endif
    @if(session('locale')==='ar')
    <link rel="stylesheet" href="/css/ar_index.css">
    <link rel="stylesheet" href="/css/rtl_index.css">
    @endif
    {{--
    <link rel="manifest" href="/app.webmanifest"> --}}
    <!-- Apple Device Support -->
    {{--
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Car Center">
    <meta name="apple-mobile-web-app-status-bar-style" content="#343A40">
    <meta name="theme-color" content="#343A40">
    <meta name="background-color" content="#343A40">
    <link rel="apple-touch-icon" sizes="512x512" href="/uploads/images/app/app-512.png">
    <link rel="apple-touch-icon" sizes="192x192" href="/uploads/images/app/app-192.png">
    <link rel="apple-touch-icon" sizes="128x128" href="/uploads/images/app/app-128.png">
    <link rel="apple-touch-icon" sizes="96x96" href="/uploads/images/app/app-96.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/uploads/images/app/app-72.png"> --}}

    <script defer type="module" src="/js/plyr.js"></script>
    <script defer type="module" src="/js/index.js"></script>
    <title>{{__('index.title')}}</title>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="menu-top">
            <div class="logo-container">
                <a href="{{route('home')}}">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-265 357 80 80"
                        style="width:100%;height:100%;" xml:space="preserve">
                        <g id="XMLID_6_">
                            <polygon id="XMLID_1_" class="st0"
                                points="-225.1,363.1 -186.5,430.6 -205.9,430.6 -234.6,380.2 	" />
                            <polygon id="XMLID_3_" class="st1" points="-244.3,430.9 -263.5,430.9 -254.1,414.3 	" />
                            <polygon id="XMLID_2_" class="st2"
                                points="-234.4,414.3 -215.3,414.3 -205.9,430.6 -225.2,430.6 	" />
                            <polygon id="XMLID_4_" class="st3"
                                points="-244.3,397.1 -234.4,414.3 -244.3,430.9 -254.1,414.3 	" />
                            <polygon id="XMLID_5_" class="st4"
                                points="-234.6,380.2 -244.3,397.1 -234.4,414.3 -224.7,397.4 	" />
                        </g>
                    </svg>


                </a>
            </div>
            <span class="ham-menu ring-white hover:ring-2">
                <i class="fa fa-bars ham"></i>
            </span>
        </div>

        <div class="menu-bot ">
            <div class="logo-container">
                <a href="{{route('home')}}">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-265 357 80 80"
                        style="width:100%;height:100%;" xml:space="preserve">
                        <g id="XMLID_6_">
                            <polygon id="XMLID_1_" class="st0"
                                points="-225.1,363.1 -186.5,430.6 -205.9,430.6 -234.6,380.2 	" />
                            <polygon id="XMLID_3_" class="st1" points="-244.3,430.9 -263.5,430.9 -254.1,414.3 	" />
                            <polygon id="XMLID_2_" class="st2"
                                points="-234.4,414.3 -215.3,414.3 -205.9,430.6 -225.2,430.6 	" />
                            <polygon id="XMLID_4_" class="st3"
                                points="-244.3,397.1 -234.4,414.3 -244.3,430.9 -254.1,414.3 	" />
                            <polygon id="XMLID_5_" class="st4"
                                points="-234.6,380.2 -244.3,397.1 -234.4,414.3 -224.7,397.4 	" />
                        </g>
                    </svg>


                </a>
            </div>
            <div class="inline-end-container">
                <ul class="nav-list">
                    <li class="nav-list__item">
                        <a href="#home" rel="noopener" class="nav-list__link">{{__('index.nav.home')}}</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="{{route('admin.dashboard')}}" rel="noopener" class="nav-list__link">Admin Panel</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="#service" rel="noopener" class="nav-list__link ">{{__('index.nav.service')}}</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="#team" rel="noopener" class="nav-list__link">{{__('index.nav.team')}}</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="#partners" rel="noopener" class="nav-list__link">{{__('index.nav.partners')}}</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="#about" rel="noopener" class="nav-list__link">{{__('index.nav.about')}}</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="#contact" rel="noopener" class="nav-list__link">{{__('index.nav.contact')}}</a>
                    </li>
                </ul>
                {{-- LANGUAGE --}}
                <div class="nav-locale">
                    <ul class="locale-list">
                        <li class="nav-list__item">
                            <a href="{{route('languages.english')}}" rel="noopener" class="nav-list__link capitalize">
                                <img src="{{asset('uploads/images/locale/en.svg')}}" alt="English">
                                <span>EN</span>
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="{{route('languages.kurdish')}}" rel="noopener" class="nav-list__link">
                                <img src="{{asset('uploads/images/locale/ku.svg')}}" alt="کوردی">
                                <span>KU</span>
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="{{route('languages.arabic')}}" rel="noopener" class="nav-list__link">
                                <img src="{{asset('uploads/images/locale/ar.svg')}}" alt="العربية">
                                <span>AR</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="banner w-full bg-cGray-400"></div>
    <!-- Main -->
    <main>
        <!-- Home Section -->
        <section id="home" class="sec-home 
        py-0 bg-cGray-100 relative">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @php $videoCounter = 0; @endphp
                    @forelse($slides as $slide)

                    @if($slide->type ==='image')
                    <div class="swiper-slide" data-type="image">
                        <img class="swiper-slide" src="{{asset($slide->file)}}">
                    </div>

                    @elseif($slide->type ==='video')
                    <div class="swiper-slide" data-type="video" data-video-index="{{$videoCounter}}">
                        <video class="swiper-slide imported-video playsinline controls">
                            <source src="{{asset($slide->file)}}" type="video/mp4">
                        </video>
                    </div>
                    @php $videoCounter++; @endphp
                    @endif

                    @empty
                    <div class="swiper-slide relative grid place-content-center bg-cGray-100">
                        <p class="w-full z-10 row-span-1 col-span-1 capitalize text-lg text-cGray-400 font-semibold">
                            No slide has been set yet
                        </p>
                        <img class="swiper-slide  row-span-1 col-span-1 bg-cGray-100">
                    </div>
                    @endforelse
                </div>

                <!-- pagination -->
                <div class="swiper-pagination"></div>

                <!-- navigation buttons -->
                <div class="swiper-button-prev swiper-btn">
                    <div class="shadow--left"></div>
                </div>
                <div class="swiper-button-next swiper-btn">
                    <div class="shadow--right"></div>
                </div>
            </div>



            {{-- <div class="welcome flex flex-col gap-12 mt-10 ">
                <span
                    class="font-sans text-3xl md:text-5xl font-semibold tracking-wider">{{__('index.home.title')}}</span>
                <span
                    class="font-sans capitalize text-3xl font-light tracking-widest">{{__('index.home.description')}}</span>
            </div>
            <div class="read_more mt-36">
                <a href="#about" rel="noopener"
                    class="bg-cGold-100 hover:bg-cGold-200 cursor-pointer rounded shadow-lg py-4 px-4 text-xl font-bold font-sans">{{__('index.home.more')}}</a>
            </div> --}}
        </section>

        <!-- Service Section -->
        <section id="service" class="sec-service">
            <div class="sec-title">
                <h2 class="sec-title__text">{{__('index.services.title')}}</h2>
                <span class="sec-title__description capitalize">{{__('index.services.description')}}</span>
            </div>
            <div class="service-list ">
                @forelse ($services as $service)

                <div class="service-list__service">
                    <div class="service-list__header">
                        <img src="{{URL::to($service->image)}}"
                            alt="@if(app()->isLocale('en')){{$service->en_title}}@elseif(app()->isLocale('ku')){{$service->ku_title}}@elseif(app()->isLocale('ar')){{$service->ar_title}}@endif">
                    </div>
                    <div class="service-list__body">
                        <h4>@if(app()->isLocale('en'))
                            {{$service->en_title}}
                            @elseif(app()->isLocale('ku'))
                            {{$service->ku_title}}
                            @elseif(app()->isLocale('ar'))
                            {{$service->ar_title}}
                            @endif
                        </h4>
                        <p>
                            @if(app()->isLocale('en'))
                            {{$service->en_description}}
                            @elseif(app()->isLocale('ku'))
                            {{$service->ku_description}}
                            @elseif(app()->isLocale('ar'))
                            {{$service->ar_description}}
                            @endif
                        </p>
                    </div>
                </div>
                @empty
                <span class="text-cGray-300">{{__('content.no_services')}}</span>
                @endforelse
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="sec-team bg-cGray-100">
            <div class="sec-title mb-6">
                <h2 class="sec-title__text">{{__('index.team.title')}}</h2>
            </div>
            <div class="team-member">

                @forelse ($teams as $team)
                <div class="team-member__card">
                    <img src="{{URL::to($team->image)}}"
                        alt="@if(app()->isLocale('en')){{$team->en_name}}@elseif(app()->isLocale('ku')){{$team->ku_name}}@elseif(app()->isLocale('ar')){{$team->ar_name}}@endif"
                        class="team_pic">
                    <h4> @if(app()->isLocale('en'))
                        {{$team->en_name}}
                        @elseif(app()->isLocale('ku'))
                        {{$team->ku_name}}
                        @elseif(app()->isLocale('ar'))
                        {{$team->ar_name}}
                        @endif
                    </h4>
                    <p>
                        @if(app()->isLocale('en'))
                        {{$team->en_position}}
                        @elseif(app()->isLocale('ku'))
                        {{$team->ku_position}}
                        @elseif(app()->isLocale('ar'))
                        {{$team->ar_position}}
                        @endif
                    </p>

                    @if (count($team->socials) > 0)
                    <ul class="social-list mt-2">
                        @if (array_key_exists('twitter',$team->socials))
                        <li class="social-list__btn">
                            <a href="{{$team->socials['twitter']}}" rel="noopener" aria-label="team-member-twitter"
                                class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-twitter text-white z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        @endif
                        @if (array_key_exists('facebook',$team->socials))
                        <li class="social-list__btn">
                            <a href="{{$team->socials['facebook']}}" rel="noopener" aria-label="team-member-facebook"
                                class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-white z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        @endif
                        @if (array_key_exists('instagram',$team->socials))
                        <li class="social-list__btn">
                            <a href="{{$team->socials['instagram']}}" rel="noopener" aria-label="team-member-instagram"
                                class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-instagram text-white z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        @endif
                    </ul>
                    @endif
                </div>
                @empty
                <span class="text-cGray-300">{{__('content.no_teams')}}</span>
                @endforelse

            </div>
        </section>

        <!-- Partners Section -->
        <section id="partners" class="sec-partners">
            <div class="sec-title mb-6">
                <h2 class="sec-title__text">{{__('index.partners.title')}}</h2>
            </div>
            <div class="partners min-w-full">
                @forelse ($partners as $partner)
                <div class="partners__img-container">
                    <img src="{{URL::to($partner->image)}}" alt="partner-{{$partner->en_name}}"
                        title="@if(app()->isLocale('en')){{$partner->en_name}}@elseif(app()->isLocale('ku')){{$partner->ku_name}}@elseif(app()->isLocale('ar')){{$partner->ar_name}}@endif"
                        class="partners__img">
                </div>
                @empty
                <span class="text-cGray-300">{{__('content.no_partners')}}</span>
                @endforelse
            </div>
        </section>

        <!-- About US Section -->
        <section id="about" class="sec-about bg-cGray-100">
            <div class="sec-title ">
                <h2 class="sec-title__text">{{__('index.about.title')}}</h2>
            </div>
            <div class="about px-4 md:px-8">
                <div class="about__image">
                    <img src="{{URL::to($about->image)}}" alt="" class="about_pic">
                </div>
                <p class="about__text">
                    @if(app()->isLocale('en'))
                    {{$about->en_content}}
                    @elseif(app()->isLocale('ku'))
                    {{$about->ku_content}}
                    @elseif(app()->isLocale('ar'))
                    {{$about->ar_content}}
                    @endif
                </p>
            </div>
        </section>

        <!-- Contact US Section -->
        <section id="contact" class="sec-contact bg-cBlack pt-32">
            <div class="sec-title">
                <h2 class="sec-title__text text-white">{{__('index.contact.title')}}</h2>
                <span class="sec-title__description text-white">{{__('index.contact.description')}}</span>
            </div>
            <div class="contact px-12">
                @if (session()->has('sentSuccess'))
                <div class="flash-message show-message w-full p-6 rounded-2xl mb-4 flex
                justify-center items-center bg-cGreen-300">
                    <span class="email-notify__text text-white font-semibold">
                        {{session('sentSuccess')}}
                    </span>
                </div>
                @endif
                @if($errors->any())
                <div class="p-4 text-cRed-100 text-lg flex flex-col justify-center gap-2 font-semibold">
                    @foreach ($errors->all() as $error)
                    <span>
                        *&nbsp;{{$error}}
                    </span>
                    @endforeach
                </div>
                @endif
                <form class="contact__form mb-24" action="{{route('contact')}}" method="POST">
                    @csrf
                    <div class="contact__input">
                        <div class="contact__input--left">
                            <input type="text" name="name" placeholder="{{__('index.contact.ph.name')}}" required>
                            <input type="email" name="email" placeholder="{{__('index.contact.ph.email')}}" required>
                            <input type="tel" name="phone" placeholder="{{__('index.contact.ph.phone')}}" required>
                        </div>
                        <div class="contact__input--right">
                            <textarea name="message" style="resize: none;"
                                placeholder="{{__('index.contact.ph.message')}}" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="{{__('index.contact.send')}}" class="contact__send-btn ">
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div
            class="footer-top flex flex-col justify-center items-center flex-wrap bg-cGray-400 w-full text-white pt-32 pb-16 gap-8">
            <div class="footer-inner flex justify-evenly items-start flex-wrap w-full gap-8">

                <div class="footer-inner--left flex justify-center items-center gap-4">
                    <div class="flex flex-col justify-start items-start gap-4">
                        <span class="footer__title">{{__('index.footer.location')}}</span>
                        <div class="footer__location flex flex-col justify-center items-start font-light gap-2">
                            <span>{{__('index.footer.address.first')}}</span>
                            <span>{{__('index.footer.address.second')}}</span>
                            <span>{{__('index.footer.address.third')}}</span>
                        </div>
                    </div>
                </div>

                <div class="footer-inner--mid flex justify-center items-center gap-4">
                    <div class="flex flex-col justify-start items-start gap-4">
                        <span class="footer__title">{{__('index.footer.contact')}}</span>
                        <div class="footer__contact flex flex-col justify-center items-start font-light gap-2">
                            <span class="flex justify-center items-center gap-4">
                                <i class="fas fa-phone transform rotate-90"></i>
                                {{config('info.phone_one')}}
                            </span>
                            <span class="flex justify-center items-center gap-4">
                                <i class="fas fa-phone transform rotate-90"></i>
                                {{config('info.phone_two')}}
                            </span>
                            <span class="flex justify-center items-center gap-4">
                                <i class="fas fa-envelope"></i>
                                {{config('info.contact_email')}}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="footer-inner--right flex flex-col gap-4 justify-center items-start  px-8">
                    <span class="footer__title">{{__('index.footer.follow')}}</span>
                    <ul class="social-list gap-2 text-sm">
                        <li class="social-list__btn"><a href="{{config('info.social_fb')}}" rel="noopener"
                                aria-label="facebook" class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-cBlack z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>

                        <li class="social-list__btn"><a href="{{config('info.social_ig')}}" rel="noopener"
                                aria-label="instagram" class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-instagram text-cBlack z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        <li class="social-list__btn"><a href="{{config('info.social_twitter')}}" rel="noopener"
                                aria-label="twitter" class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-twitter text-cBlack z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        <li class="social-list__btn"><a href="{{config('info.social_sc')}}" rel="noopener"
                                aria-label="snapchat" class="social-list__link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-snapchat text-cBlack z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-mid">
                <ul class="locale-list">
                    <li class="nav-list__item">
                        <a href="{{route('languages.english')}}" rel="noopener"
                            class="nav-list__link locale-list__english capitalize">English</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="{{route('languages.kurdish')}}" rel="noopener"
                            class="nav-list__link locale-list">کوردی</a>
                    </li>
                    <li class="nav-list__item">
                        <a href="{{route('languages.arabic')}}" rel="noopener"
                            class="nav-list__link locale-list__arabic">العربية</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="footer-bottom flex justify-center items-center bg-cGray-500 text-white w-full">
            <div class="footer-bottom__text">
                <a href="{{config('info.creator_fb')}}" rel="noopener" class="nav-list__link">
                    <span class="font-semibold"> {{__('index.footer.copyright')}}</span>
                </a>

            </div>
        </div>
    </footer>
    @if (session()->has('refresh'))
    <script>
        location.reload();
    </script>
    @endif
</body>

</html>
