<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
    <meta name="author" content="Your name" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>ELTA | ENGLISH LECTURERS AND TEACHERS ASSOCIATION |</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <link href="{{asset('frontend/css/fontawesome-all.css')}}" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{asset('frontend/css/swiper.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('frontend/images/elta.png')}}" />
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Navigation -->
<nav class="navbar fixed-top">
    <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

        <!-- Image Logo -->
        <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline flex items-center text-white" href="index.html">
            <img src="{{asset('frontend/images/elta.png')}}" alt="alternative" class="h-8" />
        </a>

        <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center " id="navbarsExampleDefault">
            <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">

                <li>
                    <a href="#home" class="nav-link page-scroll">Home</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#features">Features</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#details">Details</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                    </div>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#download">Download</a>
                </li>
            </ul>

        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->

<!-- Header -->
<header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32 bg-blue-800">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-16 lg:mt-32 xl:mt-3 xl:mr-12 item-aos"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <h1 class="h1-large mb-5 text-white">English Lecturers And Teachers Association</h1>
            <p class="p-large mb-8 text-white">Start getting things done together with your team based on Pavo's revolutionary team management features</p>
            <a class="bg-blue-100 py-2 px-4 rounded-full text-gray-700 hover:shadow-xl hover:bg-blue-500 hover:text-white" href="#your-link">JOIN MEMBERSHIP</a>
        </div>
        <div class="xl:text-right item-aos"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <img class="inline rounded-xl shadow-xl" src="{{asset('frontend/images/elta2.jpg')}}" alt="English Lecturers And Teachers Association" />
        </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
<!-- waveas -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1e40af" fill-opacity="1" d="M0,192L80,197.3C160,203,320,213,480,208C640,203,800,181,960,176C1120,171,1280,181,1360,186.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
<!-- end waves -->
<!-- about -->
<div class="about">
    <div class="text-center"
         data-aos="fade-up"
         data-aos-offset="100"
         data-aos-duration="1000">
        <h2 class="text-gray-500 my-10">ABOUT ELTA</h2>
    </div>
    <div class="flex lg:flex-row flex-col max-w-5xl mx-auto my-8">
        <div class="mx-4 flex justify-center"
             data-aos="fade-up"
             data-aos-offset="200"
             data-aos-duration="1000">
            <img class="rounded-xl shadow-lg" src="{{asset('frontend/images/elta4.jpg')}}" alt="Man looking at item at a store">
        </div>
        <div class="flex flex-col justify-center items-center mx-4 rounded-xl shadow-lg lg:my-0 my-4 bg-gray-50"
             data-aos="fade-up"
             data-aos-offset="300"
             data-aos-duration="1000">
            <p class="text-justify p-6 text-gray-500">English Lecturers and Teachers association (ELTA) is a non-governmental, non-profit association of lecturers and teachers of English in Indonesia, published in Indonesia and legalized by the ministry of Human Right and Law (KEMENHUMHAM) NO. AHU-0008624.AH.01.07.2021, dated on 16th July 2021. </p>
            <a href="#" class="bg-blue-400 text-white py-4 px-6 rounded-full my-4 hover:shadow-lg hover:bg-white hover:text-gray-500">Read More About Us</a>
        </div>
    </div>
</div>
<!-- end about -->

<!-- Features -->
<div id="features" class="cards-1">
    <div>
        <div>
            <h2 class="text-gray-500 my-4"
                data-aos="fade-up"
                data-aos-offset="100"
                data-aos-duration="1000">MEMBERSHIP WITH ELTA</h2>
            <p class="text-gray-400 lg:w-2/3 lg:text-center mx-auto lg:mb-12 text-justify p-10" data-aos="fade-up"
               data-aos-offset="200"
               data-aos-duration="1000"> ELTA membership is open to all English lecturers ans teachers of in Indonesia and all countries in the worl, both active and retired, as well as students. All members pay an annual fee. Please complete the membership form and then simply follow the procedure described in the form itself</p>
        </div>
    </div>
    <div class="container px-4 sm:px-8 xl:px-4 my-8">

        <!-- Card -->
        <div class="card shadow-xl"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <div class="card-image">
                <img src="{{asset('frontend/images/features-icon-1.svg')}}" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-gray-200">Platform Integration</h5>
                <p class="mb-4 text-gray-100">You sales force can use the app on any smartphone platform without compatibility issues</p>
            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card shadow-xl"
             data-aos="fade-up"
             data-aos-offset="200"
             data-aos-duration="1000">
            <div class="card-image">
                <img src="{{asset('frontend/images/features-icon-1.svg')}}" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-gray-200">Platform Integration</h5>
                <p class="mb-4 text-gray-100">You sales force can use the app on any smartphone platform without compatibility issues</p>
            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card shadow-xl"
             data-aos="fade-up"
             data-aos-offset="300"
             data-aos-duration="1000">
            <div class="card-image">
                <img src="{{asset('frontend/images/features-icon-1.svg')}}" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-gray-200">Platform Integration</h5>
                <p class="mb-4 text-gray-100">You sales force can use the app on any smartphone platform without compatibility issues</p>
            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card shadow-xl"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <div class="card-image">
                <img src="{{asset('frontend/images/features-icon-1.svg')}}" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-gray-200">Platform Integration</h5>
                <p class="mb-4 text-gray-100">You sales force can use the app on any smartphone platform without compatibility issues</p>
            </div>
        </div>
        <!-- end of card -->


        <!-- Card -->
        <div class="card shadow-xl"
             data-aos="fade-up"
             data-aos-offset="200"
             data-aos-duration="1000">
            <div class="card-image">
                <img src="{{asset('frontend/images/features-icon-1.svg')}}" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-gray-200">Platform Integration</h5>
                <p class="mb-4 text-gray-100">You sales force can use the app on any smartphone platform without compatibility issues</p>
            </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card shadow-xl"
             data-aos="fade-up"
             data-aos-offset="300"
             data-aos-duration="1000">
            <div class="card-image">
                <img src="{{asset('frontend/images/features-icon-1.svg')}}" alt="alternative" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-gray-200">Platform Integration</h5>
                <p class="mb-4 text-gray-100">You sales force can use the app on any smartphone platform without compatibility issues</p>
            </div>
        </div>
        <!-- end of card -->
    </div> <!-- end of container -->
    <div class="max-w-2xl mx-auto flex justify-center" data-aos="fade-up"
         data-aos-offset="100"
         data-aos-duration="1000">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSehnmnamsPlJx9cZZOxtJ8Xv8l0mw6d_KdjlY08hs3V_ABCnA/viewform?c=0&w=1" class="bg-blue-500 py-3 px-6 text-white rounded-full hover:bg-blue-100 shadow-xl hover:text-blue-900 transition duration-300">Registration now</a>
    </div>
</div>
<!-- end of cards-1 -->
<!-- end of features -->
<!-- waves -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#60a5fa" fill-opacity="1" d="M0,192L80,197.3C160,203,320,213,480,208C640,203,800,181,960,176C1120,171,1280,181,1360,186.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
<!-- end waves -->
<!-- Collaboration with  -->
<div id="collaboration" class="bg-blue-400 p-10">
    <div class="my-10" data-aos="fade-up"
         data-aos-offset="100"
         data-aos-duration="1000">
        <h2 class="text-gray-100 text-center">WE COLLABORATION WITH</h2>
    </div>
    <div class="max-w-7xl mx-auto flex lg:flex-row flex-col justify-center" >

        <div class="mx-4"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <a href="https://lldikti1.kemdikbud.go.id/">
                <img src="{{asset('frontend/images/Logo_Kemenristekdikti.png')}}" alt="Kemenristekdikti wilayah I" class="opacity-30 lg:w-80 w-40 mx-auto lg:p-0 p-6 transition duration-300 hover:opacity-100">
            </a>
        </div>

        <div class="mx-4"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <a href="https://www.methodist.ac.id/home.do">
                <img src="{{asset('frontend/images/methodist_logo.png')}}" alt="universitas methodist indonesia medan" class="opacity-30 lg:w-80 w-40 mx-auto p-6 transition duration-300 hover:opacity-100">
            </a>
        </div>

        <div class="mx-4"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <a href="https://uhn.ac.id/">
                <img src="{{asset('frontend/images/logo_cms_uhn.png')}}" alt="universitas hkbp medan" class="opacity-30 lg:w-80 w-40 mx-auto p-6 transition duration-300 hover:opacity-100">
            </a>
        </div>

        <div class="mx-4"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <a href="https://uisu.ac.id">
                <img src="{{asset('frontend/images/header-uisu-1.png')}}" alt="universitas islam sumatra utara" class="opacity-30 lg:w-80 w-40 mx-auto p-6 transition duration-300 hover:opacity-100">
            </a>
        </div>

        <div class="mx-4"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <a href="">
                <img src="{{asset('frontend/images/santomas.png')}}" alt="universitas santo thomas medan" class="opacity-30 lg:w-80 w-40 mx-auto p-6 transition duration-300 hover:opacity-100">
            </a>
        </div>


        <div class="mx-4"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <a href="#">
                <img src="{{asset('frontend/images/bukitlawang.webp')}}" alt="Kemenristekdikti wilayah I" class="opacity-30 lg:w-80 w-40 mx-auto p-6 transition duration-300 hover:opacity-100">
            </a>
        </div>

    </div>
</div>
<!-- end Collaboration with  -->
<!-- waves -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#60a5fa" fill-opacity="1" d="M0,192L80,197.3C160,203,320,213,480,208C640,203,800,181,960,176C1120,171,1280,181,1360,186.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
<!-- end waves -->

<!-- Testimonials -->
<div class="slider-1 py-32 ">
    <div class="container px-4 sm:px-8">
        <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto"
            data-aos="fade-up"
            data-aos-offset="100"
            data-aos-duration="1000">Educator Testimonials</h2>

        <!-- Card Slider -->
        <div class="slider-container"
             data-aos="fade-up"
             data-aos-offset="100"
             data-aos-duration="1000">
            <div class="swiper-container card-slider">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-image" src="{{asset('frontend/images/testimonial-1.jpg')}}" alt="alternative" />
                            <div class="card-body">
                                <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                <p class="testimonial-author">Jude Thorn - Designer</p>
                            </div>
                        </div>
                    </div> <!-- end of swiper-slide -->
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-image" src="{{asset('frontend/images/testimonial-2.jpg')}}" alt="alternative" />
                            <div class="card-body">
                                <p class="italic mb-3">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                <p class="testimonial-author">Roy Smith - Developer</p>
                            </div>
                        </div>
                    </div> <!-- end of swiper-slide -->
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-image" src="{{asset('frontend/images/testimonial-3.jpg')}}" alt="alternative" />
                            <div class="card-body">
                                <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                <p class="testimonial-author">Marsha Singer - Marketer</p>
                            </div>
                        </div>
                    </div> <!-- end of swiper-slide -->
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-image" src="{{asset('frontend/images/testimonial-4.jpg')}}" alt="alternative" />
                            <div class="card-body">
                                <p class="italic mb-3">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                <p class="testimonial-author">Tim Shaw - Designer</p>
                            </div>
                        </div>
                    </div> <!-- end of swiper-slide -->
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-image" src="{{asset('frontend/images/testimonial-5.jpg')}}" alt="alternative" />
                            <div class="card-body">
                                <p class="italic mb-3">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                <p class="testimonial-author">Lindsay Spice - Marketer</p>
                            </div>
                        </div>
                    </div> <!-- end of swiper-slide -->
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-image" src="{{asset('frontend/images/testimonial-6.jpg')}}" alt="alternative" />
                            <div class="card-body">
                                <p class="italic mb-3">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                <p class="testimonial-author">Ann Blake - Developer</p>
                            </div>
                        </div>
                    </div> <!-- end of swiper-slide -->
                    <!-- end of slide -->

                </div> <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->

            </div> <!-- end of swiper-container -->
        </div> <!-- end of slider-container -->
        <!-- end of card slider -->

    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of testimonials -->

<!-- news -->
<div class="news">
    <div data-aos="fade-up"
         data-aos-offset="100"
         data-aos-duration="1000">
        <h2 class="text-gray-500 text-center p-10">Read latest news & articles</h2>
    </div>
    <div class="max-w-7xl mx-auto flex lg:flex-row flex-col justify-center my-10 lg:p-0 p-10">
        <a href="">
            <div class="rounded overflow-hidden shadow-lg lg:mx-2 lg:my-0 my-4 "
                 data-aos="fade-up"
                 data-aos-offset="100"
                 data-aos-duration="1000">
                <img class="w-full" src="{{asset('frontend/images/elta2.jpg')}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
        </a>

        <a href="">
            <div class="rounded overflow-hidden shadow-lg lg:mx-2 lg:my-0 my-4 "
                 data-aos="fade-up"
                 data-aos-offset="100"
                 data-aos-duration="1000">
                <img class="w-full" src="{{asset('frontend/images/elta2.jpg')}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
        </a>

        <a href="">
            <div class="rounded overflow-hidden shadow-lg lg:mx-2 lg:my-0 my-4 "
                 data-aos="fade-up"
                 data-aos-offset="100"
                 data-aos-duration="1000">
                <img class="w-full" src="{{asset('frontend/images/elta2.jpg')}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
        </a>


    </div>

    <div class="max-w-2xl mx-auto flex justify-center">
        <a href="#" class="bg-blue-500 py-3 px-6 text-white rounded-full hover:bg-blue-100 shadow-xl hover:text-blue-900 transition duration-300"
           data-aos="fade-up"
           data-aos-offset="100"
           data-aos-duration="1000">More News</a>
    </div>
</div>
<!-- end news -->


<!-- Footer -->
<div class="footer">
    <div class="container px-4 sm:px-8">
        <h4 class="mb-8 lg:max-w-3xl lg:mx-auto"
            data-aos="fade-up"
            data-aos-offset="100"
            data-aos-duration="1000">For more information <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">info@eltaorganization.org</a></h4>
        <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
            <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
            <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
            <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
            <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
        </div> <!-- end of social-container -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright text-blue-100">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
        <ul class="mb-4 list-unstyled p-small">
            <li class="mb-2"><a href="article.html">Article Details</a></li>
            <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
            <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
        </ul>
        <p class="pb-2 p-small statement text-blue-100">Copyright © <a href="#your-link" class="no-underline">eltaorganization.org</a></p>

        <p class="pb-2 p-small statement text-blue-100">Make with love</p>
    </div>

    <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script> <!-- jQuery for JavaScript plugins -->
<script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('frontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{asset('frontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
