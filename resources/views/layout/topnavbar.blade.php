<!DOCTYPE html>
<html lang="en">
<head>
        <title>Portofolio</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href={{asset("styles/bootstrap4/bootstrap.min.css")}}>
        <link href={{asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}>
        <link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}}>
        <link rel="stylesheet" type="text/css" href={{asset("plugins/OwlCarousel2-2.2.1/animate.css")}}>
        <link rel="stylesheet" type="text/css" href={{asset("plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css")}}>
        <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
        <div class="super_container">

                <!-- Header -->
            
                <header class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="logo"><a href="#">Portofolio</a></div>
                                    <nav class="main_nav">
                                        <ul>
                                            <li class="{{ Request::is('article') ? 'active' : '' }}"><a href={{url('article')}}>Home</a></li>
                                            <li class="{{ Request::is('article/create') ? 'active' : '' }}"><a href={{url('article/create')}}>Create</a></li>	
                                        </ul>
                                    </nav>
                                    
                                    <div class="hamburger ml-auto menu_mm">
                                        <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

</body>
<script src={{asset("js/jquery-3.2.1.min.js")}}></script>
<script src={{asset("styles/bootstrap4/popper.js")}}></script>
<script src={{asset("styles/bootstrap4/bootstrap.min.js")}}></script>
<script src={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.js")}}></script>
<script src={{asset("plugins/easing/easing.js")}}></script>
<script src={{asset("plugins/masonry/masonry.js")}}></script>
<script src={{asset("plugins/parallax-js-master/parallax.min.js")}}></script>
<script src={{asset("js/post_nosidebar.js")}}></script>
</html>