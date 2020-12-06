<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Damietta Engineers Syndicate</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <style>

   .cover{
    background-color: #ebebf5;
   }
    </style>

    <!-- Favicons-->
    <link href={{asset('assets/img/syndicate.jpg')}} rel="icon">

    <!-- Google Fonts
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/icofont/icofont.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/animate.css/animate.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/remixicon/remixicon.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/line-awesome/css/line-awesome.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/venobox/venobox.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}} rel="stylesheet">
    <link href={{asset('assets/vendor/aos/aos.css')}} rel="stylesheet">
    <link href={{asset('assets/css/style.css')}} rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href={{asset('contactform/images/icons/favicon.ico')}} />
    <link rel="stylesheet" type="text/css" href={{asset('contactform/contactform/bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/contactform/animate/animate.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/vendor/css-hamburgers/hamburgers.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/animsition/css/animsition.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/select2/select2.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/daterangepicker/daterangepicker.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/css/util.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('contactform/css/main.css')}}>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light">نقابه المهندسين بدمياط</h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>

                    <li><a href="/contacts/contact"> تـــواصل معنا </a></li>
                    <li class="drop-down"><a >الخدمــات</a>
                        <ul>
                            <li><a href="/create"> تسجيل الدورات</a></li>
                            <!--<li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </li>
                    <li><a href="#team"> الاعضـــاء</a></li>
                    <li><a href="#"> من نــــحن </a></li>
                    <li class=""><a href="/"> الصفحــة الرئيسيــة </a></li>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                      <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                        <span class="sr-only">(current)</span></a>
                    </li>
                    @endforeach

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>

    </header>
