<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="ENGLISH LECTURERS AND TEACHERS ASSOCIATION INDONESIA" /> <!-- website name -->
    <meta property="og:site" content="eltaorganization.org" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="ENGLISH LECTURERS AND TEACHERS ASSOCIATION | " /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="eltaorganization.org/about" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>ELTA | ENGLISH LECTURERS AND TEACHERS ASSOCIATION | {{$title ?? ""}}</title>

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
@include('frontend.components.nav')
<!-- end of navigation -->

<!-- Header -->
<header class="my-36 bg-blue-800">
    <div class="container px-4 sm:px-8 xl:px-4">
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Load Facebook SDK for JavaScript -->
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your share button code -->

<div class="share container px-4 sm:px-8 xl:px-4 ">
    <h1 class="my-4">About  {{ config('app.name', 'Laravel') }}</h1>
    <div>
        <small>Published {{$data->created_at->format('d F, Y, h:i:s A')}}</small>
    </div>
    <div class="flex items-center">
        {{--        <span>Share : &nbsp;</span>--}}
        <div class="fb-share-button"
             data-href="https://www.eltaorganization.org/about"
             data-layout="button_count">
        </div>
    </div>
</div>


<div class="ex-basic-1 py-12">
    <div class="container px-4 sm:px-8">
        <img class="inline mt-12 mb-4 object-cover object-cover h-96 w-full" src="{{asset('storage/'.$data->thumbnail)}}" alt="alternative" />
    </div>
</div>

<div class="max-w-5xl mx-auto mb-5">
    <article class="prose lg:prose-xl">
        {!! $data->text !!}
    </article>
</div>

<!-- Footer -->
@include('frontend.components.footer')
<!-- end of footer -->

<!-- Copyright -->
@include('frontend.components.copyright')
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
