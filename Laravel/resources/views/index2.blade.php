<?php
session_start();
$notifyHide = false;
if (count($_SESSION) > 0) {
    
	$sentFail = isset($_SESSION['sentFail'])?$_SESSION['sentFail'] : '' ;
	$sent = isset($_SESSION['sent'])?$_SESSION['sent'] : '' ;
	
	$notifyClass =  $sent? "bg-cGreen-100" : "bg-cRed-100";
	
    $notifyText = $sent ?: $sentFail;
} else $notifyHide = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="Rezhin center is professional, modern automotive service, with more than 30 years of experience in the automotive industry, we thrive to work on providing the best and highest quality service at the lowest price possible. We are located in a very easy to reach location at the center of the city. Our staff consists of many professionals, academic, and intelligent technicians that are supervised and managed by team of highly qualified mechanical and automotive engineers to get the best results. Our management department consists of highly trained, competent, ethical teams of accountants and data entry employees that work to provide the best customer experience that exceeds all expectations.">
    <meta name="keywords"
        content="rezhin, center, rezhin center, rezhin service, rezhin car, rezhin services, rezhin cars, rezhin automotive, rezhin automotives, rezhin automotive cars, rezhin automotive cars center, rezhin center automotive cars, rezhin center automotive, automotive cars, kurdish, kurdish service, kurdish cars, kurdish cars service, kurdish center service, kurdish services, kurdish cars services, kurdish automotive center, kurdish automotive, kurdish car automotive, kurdish car automotive service">
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
    <script defer src="{{asset('js/index.js')}}"></script>
    <title>Rezhin Automotive Center</title>
</head>

<body>
    <!-- Header -->
    <header class="flex flex-col text-white h-12 lg:h-16 sticky top-0 z-50">
        <div class="menu-top px-4 py-2 flex justify-between bg-cGray-300 items-center z-50">
            <div class="logo-container h-full py-1">
                <a href="index.php">
                    <img class="flex-shrink-0 h-full" src="{{asset('uploads/images/white-rezhin_logo.png')}}"
                        alt="Rezhin Logo">
                </a>
            </div>
            <span class="ham-menu ring-white hover:ring-2 lg:hidden">
                <i class="fa fa-bars ham"></i>
            </span>
        </div>

        <div class="menu-bot p-6 lg:p-2 bg-cGray-300 ">
            <ul class="nav-list flex w-full flex-col gap-0.5">
                <li class="nav-item">
                    <a href="#home" rel="noopener" class="nav-link">Home</a>
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
    <div class="banner w-full bg-cGray-300"></div>
    <!-- Main -->
    <main>
        <!-- Home Section -->
        <section id="home" class="sec_home text-white uppercase text-center">
            <div class="welcome flex flex-col gap-12 mt-10 ">
                <span class="font-sans text-3xl md:text-5xl font-semibold tracking-wider">Rezhin Center</span>
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
            <div class="service_list flex justify-center items-start gap-5 flex-wrap w-full ">
                <div class="item item-1">
                    <span class="icon fa-stack fa-4x ">
                        <i class="fa fa-circle fa-stack-2x text-cGold-100"></i>
                        <i class="fas fa-cogs fa-stack-1x fa-inverse "></i>
                    </span>
                    <h4>Engine Oil Change</h4>
                    <p>With us, changing engine oil is an ease. Our team can provide a highest quality to change your
                        car's engine oil.</p>
                </div>
                <div class="item item-2">
                    <span class="icon fa-stack fa-4x ">
                        <i class="fa fa-circle fa-stack-2x text-cGold-100"></i>
                        <i class="fas fa-tint fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4>ATF change</h4>
                    <p>Changing ATF (Automatic Transmission Fluid).</p>
                </div>
                <div class="item item-3">
                    <span class="icon fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-cGold-100"></i>
                        <i class="fas fa-tire fa-stack-1x fa-inverse"></i>

                    </span>
                    <h4>Changing/balancing tires</h4>
                    <p>Our team managed by professional workers who can check and verify your tires safety on your car
                        with highest technology.</p>
                </div>
                <div class="item item-4">
                    <span class="icon fa-stack fa-4x ">
                        <i class="fa fa-circle fa-stack-2x text-cGold-100"></i>
                        <i class="fal fa-compact-disc fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4>Brake pads change</h4>
                    <p>Changing brake pads.</p>
                </div>
                <div class="item item-5">
                    <span class="icon fa-stack fa-4x ">
                        <i class="fa fa-circle fa-stack-2x text-cGold-100"></i>
                        <i class="fas fa-compact-disc fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4>Brake rotor resurfacing</h4>
                    <p>We can replace your brake rotor.</p>
                </div>
                <div class="item item-6">
                    <span class="icon fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-cGold-100"></i>
                        <i class="fas fa-ellipsis-h fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4>Many More Services...</h4>
                    <p>We are capable of doing many more services other than the provded list. Contact us to learn more
                        about other services.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="sec_team bg-cGray-100">
            <div class="sec_title mb-6">
                <h2 class="sec_title__text">OUR TEAMS</h2>
            </div>
            <div class="team_member flex flex-wrap justify-evenly items-center gap-8 w-full">
                <div class="member">
                    <img src="{{asset('uploads/images/team/team.jpg')}}" alt="Kay Garland" class="team_pic">
                    <h4>Kay Garland</h4>
                    <p>Lead Designer</p>
                    <ul class="social-list mt-2">
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-twitter"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-twitter text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-facebook"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-instagram"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-instagram text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                    </ul>
                </div>
                <div class="member">
                    <img src="{{asset('uploads/images/team/team.jpg')}}" alt="Larry Parker" class="team_pic ">
                    <h4>Larry Parker</h4>
                    <p>Lead Marketer</p>
                    <ul class="social-list mt-2">
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-twitter"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-twitter text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-facebook"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-instagram"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-instagram text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                    </ul>
                </div>
                <div class="member">
                    <img src="{{asset('uploads/images/team/team.jpg')}}" alt="Diana Pertersen" class="team_pic ">
                    <h4>Diana Pertersen</h4>
                    <p>Lead Developer</p>
                    <ul class="social-list mt-2">
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-twitter"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-twitter text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-facebook"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-facebook text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                        <li class="social-button"><a href="#" rel="noopener" aria-label="team-member-instagram"
                                class="social-link">
                                <span class="icon fa-stack flex justify-center items-center">
                                    <i class="fa fa-circle fa-stack-2x text-5xl"></i>
                                    <i class="fab fa-instagram text-white z-10 text-2xl"></i>
                                </span>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section id="partners" class="sec_partners">
            <div class="sec_title mb-6">
                <h2 class="sec_title__text">OUR PARTNERS</h2>
            </div>
            <div class="partners min-w-full">
                <div class="image ">
                    <img src="{{asset('uploads/images/partners/1.jpg')}}" alt="Partner 1" class="partner_pic">
                </div>
                <div class="image ">
                    <img src="{{asset('uploads/images/partners/2.jpg')}}" alt="Partner 2" class="partner_pic">
                </div>
                <div class="image ">
                    <img src="{{asset('uploads/images/partners/3.jpg')}}" alt="Partner 3" class="partner_pic">
                </div>
                <div class="image">
                    <img src="{{asset('uploads/images/partners/4.jpg')}}" alt="Partner 4" class="partner_pic">
                </div>
                <div class="image ">
                    <img src="{{asset('uploads/images/partners/1.jpg')}}" alt="Partner 1" class="partner_pic">
                </div>
                <div class="image ">
                    <img src="{{asset('uploads/images/partners/2.jpg')}}" alt="Partner 2" class="partner_pic">
                </div>
                <div class="image ">
                    <img src="{{asset('uploads/images/partners/3.jpg')}}" alt="Partner 3" class="partner_pic">
                </div>
                <div class="image">
                    <img src="{{asset('uploads/images/partners/4.jpg')}}" alt="Partner 4" class="partner_pic">
                </div>
            </div>
        </section>

        <!-- About US Section -->
        <section id="about" class="sec_about bg-cGray-100">
            <div class="sec_title ">
                <h2 class="sec_title__text">ABOUT US</h2>
            </div>
            <div class="about">
                <div class="about__image">
                    <img src="{{asset('uploads/images/rechin_rest_zone.jpeg')}}" alt="" class="about_pic">
                </div>
                <p class="about__text">
                    Rezhin center is professional, modern automotive service, with more than 30 years of experience in
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
                <span class="sec_description">Send us a message by filling the form below</span>
            </div>
            <div class="contact px-12">
                <div class="{{$notifyHide ? " hidden" : '' }} email-notify w-full p-6 rounded-2xl mb-4 flex
                    justify-center items-center {{$notifyClass ?? '' }}">
                    <span class="email-notify__text text-white font-semibold">
                        {{$notifyText ?? ""}}
                    </span>
                </div>
                <form class="contact_form mb-24" action="{{route('contact',[],false)}}" method="POST">
                    @csrf
                    <div class="contact_input">
                        <div class="contact_left_input">
                            <input type="text" name="name" placeholder="Your Name *" required>
                            <input type="email" name="email" placeholder="Your Email *" required>
                            <input type="tel" name="phone" placeholder="Your Phone *" required>
                        </div>
                        <div class="contact_right_input">
                            <textarea name="message" placeholder="Your Message *" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="btn_send ">
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-top flex justify-evenly items-start flex-wrap bg-cGray-300 w-full text-white py-32 gap-8">
            <div class="footer_inner-left flex justify-center items-center gap-4">
                <div class="flex flex-col justify-start items-start gap-4">
                    <span class="footer__title">Location</span>
                    <div class="location flex flex-col justify-center items-start font-light gap-2">
                        <span>Sulaymaniyah, Chwarbakh</span>
                        <span>Sheikh Mhedin Main Road</span>
                        <span>Near Hawlati Clinic</span>
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
                    {{--
                </div> --}}
            </div>
        </div>
        <div class="footer-bot flex justify-center items-center bg-cGray-200 text-white w-full">
            <div class="footer_bot-text">
                <a href="{{config('info.creator_fb')}}" rel="noopener" class="nav-link">
                    <span class="font-semibold"> Copyright &copy; AP Soft 2021</span>
                </a>

            </div>
        </div>
    </footer>
</body>

</html>