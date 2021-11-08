<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="car center is professional, modern automotive service, with more than 30 years of experience in the automotive industry, we thrive to work on providing the best and highest quality service at the lowest price possible. We are located in a very easy to reach location at the center of the city. Our staff consists of many professionals, academic, and intelligent technicians that are supervised and managed by team of highly qualified mechanical and automotive engineers to get the best results. Our management department consists of highly trained, competent, ethical teams of accountants and data entry employees that work to provide the best customer experience that exceeds all expectations.">
    <meta name="keywords"
        content="car, center, car center, car service, car car, car services, car cars, car automotive, car automotives, car automotive cars, car automotive cars center, car center automotive cars, car center automotive, automotive cars, kurdish, kurdish service, kurdish cars, kurdish cars service, kurdish center service, kurdish services, kurdish cars services, kurdish automotive center, kurdish automotive, kurdish car automotive, kurdish car automotive service">
    <meta name="language" content="English">
    <link rel="shortcut icon" href="{{asset('uploads/images/favico.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('uploads/images/favico.ico')}}" type="image/x-icon" />
    <meta name="author" content="AP SOFT">
    <link rel="preload" href="{{asset('js/index.js')}}" as="script">
    <link rel="preload" href="{{asset('css/index.css')}}" as="style">
    <link rel="preload" href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" as="style" />
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="manifest" href="{{asset('app.webmanifest')}}">
    <!-- Apple Device Support -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="car Center">
    <meta name="apple-mobile-web-app-status-bar-style" content="#343A40">
    <meta name="theme-color" content="#343A40">
    <meta name="background-color" content="#343A40">
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('uploads/images/app/app-512.png')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('uploads/images/app/app-192.png')}}">
    <link rel="apple-touch-icon" sizes="128x128" href="{{asset('uploads/images/app/app-128.png')}}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{asset('uploads/images/app/app-96.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('uploads/images/app/app-72.png')}}">

    <script defer src="{{asset('js/index.js')}}"></script>
    <title>Car Automotive Center</title>
</head>

<body>
    <!-- Header -->
    <header class="flex flex-col text-white h-12 lg:h-16 sticky top-0 z-50">
        <div class="menu-top px-4 py-2 flex justify-between bg-cGray-400 items-center z-50">
            <div class="logo-container h-full py-1">
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
            <span class="ham-menu ring-white hover:ring-2 lg:hidden">
                <i class="fa fa-bars ham"></i>
            </span>
        </div>

        <div class="menu-bot p-6 lg:p-2 bg-cGray-400 ">
            <ul class="nav-list flex w-full flex-col gap-0.5">
                <li class="nav-item">
                    <a href="#home" rel="noopener" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" rel="noopener" class="nav-link">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a href="#service" rel="noopener" class="nav-link ">Service</a>
                </li>
                <li class="nav-item">
                    <a href="#team" rel="noopener" class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a href="#partners" rel="noopener" class="nav-link">Partners</a>
                </li>
                <li class="nav-item">
                    <a href="#about" rel="noopener" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" rel="noopener" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="banner w-full bg-cGray-400"></div>
    <!-- Main -->
    <main>

        <!-- Home Section -->
        <section id="home" class="sec_home text-white uppercase text-center">

            <div class="welcome flex flex-col gap-12 mt-10 ">
                <span class="font-sans text-3xl md:text-5xl font-semibold tracking-wider">Car Center</span>
                <span class="font-sans capitalize text-3xl font-light tracking-widest">automotive service</span>
            </div>
            <div class="read_more mt-36">
                <a href="#about" rel="noopener"
                    class="bg-cGold-100 hover:bg-cGold-200 cursor-pointer rounded shadow-lg py-4 px-4 text-xl font-bold font-sans">READ
                    MORE ABOUT US</a>
            </div>
        </section>

        <!-- Service Section -->
        <section id="service" class="sec_service">
            <div class="sec_title">
                <h2 class="sec_title__text">SERVICES</h2>
                <span class="sec_description capitalize">our services include</span>
            </div>
            <div class="service_list ">
                @forelse ($services as $service)

                <div class="service">
                    <div class="service__header">
                        <img src="{{$service->image}}" alt="{{$service->title}}">
                    </div>
                    <div class="service__body">
                        <h4>{{$service->title}}</h4>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @empty
                <span class="text-cGray-300">Currently there are no services!</span>
                @endforelse
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="sec_team bg-cGray-100">
            <div class="sec_title mb-6">
                <h2 class="sec_title__text">OUR TEAMS</h2>
            </div>
            <div class="team_member flex flex-wrap justify-evenly items-center gap-8 w-full px-12 min-w-[200px]">

                @forelse ($teams as $team)
                <div class="member">
                    <img src="{{$team->image}}" alt="{{$team->name}}" class="team_pic">
                    <h4>{{$team->name}}</h4>
                    <p>{{$team->position}}</p>

                    @if (count($team->socials) > 0)
                    <ul class="social-list mt-2">
                        @if (array_key_exists('twitter',$team->socials))
                        <li class="social-button">
                            <a href="{{$team->socials['twitter']}}" rel="noopener" aria-label="team-member-twitter"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-twitter text-white z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        @endif
                        @if (array_key_exists('facebook',$team->socials))
                        <li class="social-button">
                            <a href="{{$team->socials['facebook']}}" rel="noopener" aria-label="team-member-facebook"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-white z-10 text-2xl"></i>
                                </span>
                            </a>
                        </li>
                        @endif
                        @if (array_key_exists('instagram',$team->socials))
                        <li class="social-button">
                            <a href="{{$team->socials['instagram']}}" rel="noopener" aria-label="team-member-instagram"
                                class="social-link">
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
                <span class="text-cGray-300">Currently there are no team members!</span>
                @endforelse

            </div>
        </section>

        <!-- Partners Section -->
        <section id="partners" class="sec_partners">
            <div class="sec_title mb-6">
                <h2 class="sec_title__text">OUR PARTNERS</h2>
            </div>
            <div class="partners min-w-full">
                @forelse ($partners as $partner)
                <div class="image ">
                    <img src="{{$partner->image}}" alt="partner-{{$partner->name}}" title="{{$partner->name}}"
                        class="partner_pic">
                </div>
                @empty
                <span class="text-cGray-300">Currently there are no partners!</span>
                @endforelse
            </div>
        </section>

        <!-- About US Section -->
        <section id="about" class="sec_about bg-cGray-100">
            <div class="sec_title ">
                <h2 class="sec_title__text">ABOUT US</h2>
            </div>
            <div class="about">
                <div class="about__image">
                    <img src="{{asset('uploads/images/about.jpg')}}" alt="" class="about_pic">
                </div>
                <p class="about__text">
                    Car center is professional, modern automotive service, with more than 30 years of experience in
                    the automotive industry, we thrive to work on providing the best and highest quality service at the
                    lowest price possible. We are located in a very easy to reach location at the center of the city.
                    Our staff consists of many professionals, academic, and intelligent technicians that are supervised
                    and managed by team of highly qualified mechanical and automotive engineers to get the best results.
                    Our management department consists of highly trained, competent, ethical teams of accountants and
                    data entry employees that work to provide the best customer experience that exceeds all
                    expectations.
                </p>
            </div>
        </section>

        <!-- Contact US Section -->
        <section id="contact" class="sec_contact bg-cBlack pt-32">
            <div class="sec_title">
                <h2 class="sec_title__text text-white">CONTACT US</h2>
                <span class="sec_description text-white">Send us a message by filling the form below</span>
            </div>
            <div class="contact px-12">
                @if (session()->has('success'))
                <div class="flash-message show-message w-full p-6 rounded-2xl mb-4 flex
                justify-center items-center bg-cGreen-300">
                    <span class="email-notify__text text-white font-semibold">
                        {{session('success')}}
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
                <form class="contact_form mb-24" action="{{route('contact')}}" method="POST">
                    @csrf
                    <div class="contact_input">
                        <div class="contact_left_input">
                            <input type="text" name="name" placeholder="Your Name *" required>
                            <input type="email" name="email" placeholder="Your Email *" required>
                            <input type="tel" name="phone" placeholder="Your Phone *" required>
                        </div>
                        <div class="contact_right_input">
                            <textarea name="message" style="resize: none;" placeholder="Your Message *"
                                required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="btn_send ">
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-top flex justify-evenly items-start flex-wrap bg-cGray-400 w-full text-white py-32 gap-8">
            <div class="footer_inner-left flex justify-center items-center gap-4">
                <div class="flex flex-col justify-start items-start gap-4">
                    <span class="footer__title">Location</span>
                    <div class="location flex flex-col justify-center items-start font-light gap-2">
                        <span>Address Street</span>
                        <span>Address Number</span>
                        <span>Building Number</span>
                    </div>
                </div>
            </div>

            <div class="footer_inner-mid flex justify-center items-center gap-4">
                <div class="flex flex-col justify-start items-start gap-4">
                    <span class="footer__title">Contact Us</span>
                    <div class="location flex flex-col justify-center items-start font-light gap-2">
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

            <div class="footer_inner-right flex flex-col gap-4 justify-center items-start  px-8">
                {{-- <div> --}}
                    <span class="footer__title">Follow Us</span>
                    <ul class="social-list gap-2 text-sm">
                        <li class="social-button"><a href="{{config('info.social_fb')}}" rel="noopener"
                                aria-label="facebook" class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-cBlack z-10 text-2xl"></i>
                                </span>
                            </a></li>

                        <li class="social-button"><a href="{{config('info.social_ig')}}" rel="noopener"
                                aria-label="instagram" class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-instagram text-cBlack z-10 text-2xl"></i>
                                </span>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bot flex justify-center items-center bg-cGray-500 text-white w-full">
                <div class="footer_bot-text">
                    <a href="{{config('info.creator_fb')}}" rel="noopener" class="nav-link">
                        <span class="font-semibold"> Copyright &copy; Aland20.tech 2021</span>
                    </a>

                </div>
            </div>
    </footer>
    <script>
        let flashMessage = document.querySelector('.flash-message');
        setTimeout(_=>{
            flashMessage?.classList.remove('show-message');
            flashMessage?.classList.add('hide-message');
        },2000);
        setTimeout(() => {
            flashMessage?.remove();
        }, 3000);
    </script>
</body>

</html>