<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>WMA MUSIC</title>
        <!--=================================
            Meta tags
            =================================-->
        <meta name="description" content="">
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
        <!--=================================
            Style Sheets
            =================================-->
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet" type="text/css">
        <!--Plugins CSS Files-->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.vegas.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animations.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bigvideo.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
        <!--custom styles for WMALABEL-->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="assets/css/colors/color5.css">
        <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#sticktop" data-offset="70">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
        <!--=====================================
            Preloader
            ========================================-->
        <div id="jSplash">
            <figure class="preload_logo">
                <img src="assets/img/basic/logo2.png" alt="" />
            </figure>
        </div>
        <div class="wide_layout box-wide">
            <!--=================================
                Vegas Slider Images
                =================================-->
            <ul class="vegas-slides hidden" data-speed="6000">
                <li><img data-fade="2000" src="assets/img/main/1.jpg" alt="" /></li>
                <li><img data-fade="2000" src="assets/img/main/2.jpg" alt="" /></li>
                <li><img data-fade="2000" src="assets/img/main/3.jpg" alt="" /></li>
            </ul>
            <!--================
                Banner
                ====================-->
            <section id="section_1" class="banner hero_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero_content animatedParent animateLoop">
                                <h1 class="animated bounceInDown">
                                    WORLD MEDIA ALLIANCE <span class="primary_color">.</span>
                                </h1>
                                <h4 class="animated bounceInLeft ">
                                    music is forever </h4>
                                <a class="ScrollTo animated bounceInUp" href="#section_3">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================
                    JPlayer (Audio Player)
                    =================================-->
                <!--Do not edit this section Unless you have to modify HTML structure of Playlist-->
                <div class="rock_player pre_sticky">
                    <div class="sticky_player" data-sticky="true">
                        <div class="play_list">
                            <div class="list_scroll">
                                <div class="container ">
                                    <ul class="music_widget player_data">
                                        <li class="music_row_header">
                                            <div class="column_one">#</div>
                                            <div class="column_two">&nbsp;
                                                <!--no header for picture column-->
                                            </div>
                                            <div class="column_three">track name</div>
                                            <div class="column_four">genre</div>
                                            <div class="column_five">composer</div>
                                            <div class="column_six">length</div>
                                            <div class="column_seven">&nbsp;
                                                <!--no header for play column-->
                                            </div>
                                            <div class="column_eight">&nbsp;
                                                <!--no header for btn column-->
                                            </div>
                                        </li>
                                        <li class="music_row">
                                            <div class="column_one track_index"></div>
                                            <div class="column_two track_thumb"></div>
                                            <div class="column_three track_title"></div>
                                            <div class="column_four track_genre"></div>
                                            <div class="column_five track_composer"></div>
                                            <div class="column_six track_length"></div>
                                            <div class="column_seven">
                                                <a class="play_it" href="#">
                                                    <span class="fa fa-play"></span>
                                                </a>
                                                <!--a href="#"><span class="fa fa-plus"></span></a-->
                                                <a class="itunesLink" href="#" target="_blank" download>
                                                    <span class="fa fa-download"></span>
                                                </a>
                                            </div>
                                            <!--div class="column_eight">
                                                        <a class="btn btn_watch_video" href="#">watch video</a>
                                                    </div-->
                                        </li>
                                        <li class="music_row">
                                            <div class="column_one track_index"></div>
                                            <div class="column_two track_thumb"></div>
                                            <div class="column_three track_title"></div>
                                            <div class="column_four track_genre"></div>
                                            <div class="column_five track_composer"></div>
                                            <div class="column_six track_length"></div>
                                            <div class="column_seven">
                                                <a class="play_it" href="#">
                                                    <span class="fa fa-play"></span>
                                                </a>
                                                <!--a href="#"><span class="fa fa-plus"></span></a-->
                                                <a class="itunesLink" href="#" target="_blank" download>
                                                    <span class="fa fa-download"></span>
                                                </a>
                                            </div>
                                            <!--div class="column_eight">
                                                        <a class="btn btn_watch_video" href="#">watch video</a>
                                                    </div-->
                                        </li>
                                        <!--music row-->
                                    </ul>
                                    <!--music_widget-->
                                </div>
                                <!--container-->
                            </div>
                        </div>

                        <!--//=============================================================
                            Edit or Modify Playist content in the following Hypertext
                            ==============================================================-->
                        <div class="jp-playlist hidden">
                            <!--Add Songs In mp3 formate here-->
                            <ul class=" playlist-files">
                                <!-- <li data-thumb="i/sites/default/files/bestsongs/kate-margret_-_i_kiss_you_in_my_dreams_cover_500x500_0.jpg" data-title="I Kiss You In My Dreams" data-genre="pop" data-artist="Kate Margret" data-length="2:42" data-itunes="https://wmalabel.com/i/sites/default/files/bestsongs/ikyomd.mp3" data-video="https://www.youtube.com/channel/UC-pt_PpxmaCDC_UI-slJuQg" data-mp3="https://wmalabel.com/i/sites/default/files/bestsongs/ikyomd.mp3"></li> -->
                                <!-- <li data-thumb="i/sites/default/files/bestsongs/5051813681981_cover.1200x1200-75.jpg" data-title="Мужчина с биографией" data-genre="pop" data-artist="Cергей Cевер" data-length="4:17" data-itunes="https://wmalabel.com/i/sites/default/files/bestsongs/sergey_sever_-_muzhchina_s_biografiey.mp3" data-video="https://www.youtube.com/channel/UC-pt_PpxmaCDC_UI-slJuQg" data-mp3="https://wmalabel.com/i/sites/default/files/bestsongs/sergey_sever_-_muzhchina_s_biografiey.mp3"></li> -->
                            </ul>
                            <!--Playlist ends-->
                        </div>
                        <div class="container player_wrapper">
                            <div class="row">
                                <div id="player-instance" class="jp-jplayer"></div>
                                <div class="jp-title audio-title">little black bag pack</div>
                                <div class="rock_controls controls">
                                    <div class="fa fa-play jp-play"></div>
                                    <div class="fa fa-pause jp-pause"></div>
                                </div>
                                <!--controls-->
                                <div class="audio-progress">
                                    <div class="jp-seek-bar">
                                        <div class="audio-play-bar jp-play-bar" style="width:20%;"></div>
                                    </div>
                                    <!--jp-seek-bar-->
                                </div>
                                <!--audio-progress-->
                                <div class="audio-timer"> <span class="jp-current-time">01:02</span> </div>
                                <div class="jp-volume">
                                    <ul>
                                        <li class="active"><a href="#"></a></li>
                                        <li class="active"><a href="#"></a></li>
                                        <li class="active"><a href="#"></a></li>
                                        <li class="active"><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="playlist_expander fa fa-bars"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//banner-->
            <!--=========================
                Header
                ===========================-->
            <header>
                <nav id="sticktop" class="navbar navbar-default" data-sticky="true">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="assets/img/basic/logo.png" alt="logo" /></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#section_3">News</a>
                                </li>
                                <li>
                                    <a href="#section_5">Projects</a>
                                </li>
                                <li>
                                    <a href="#section_7">Artists</a>
                                </li>
                                <li>
                                    <a href="#section_11">Partners</a>
                                </li>
                                <li>
                                    <a href="#section_13">Connect</a>
                                </li>
                                @auth
                                <li>
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </nav>
            </header>

            <div class="sections_wrapper">
                <!--================
                News
                ====================-->
                <!--================
                Newsletter
                ====================-->
                <section id="section_3" class="newsletter_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3>we have special news &amp; prizes only<br>for our biggest WMALABEL fans!</h3>
                                <div class="team_prizes">
                                    <figure class="team_stand animatedParent" data-sequence="400">
                                        <img class="animated fadeInUp" data-id="1" src="assets/img/team/man1.png" alt="" />
                                        <img class="animated fadeInRight" data-id="2" src="assets/img/team/man2.png"
                                            alt="" />
                                        <img class="animated fadeInLeft" data-id="3" src="assets/img/team/man3.png"
                                            alt="" />
                                        <img class="animated fadeInRight" data-id="4" src="assets/img/team/man4.png"
                                            alt="" />
                                        <img class="animated fadeInLeft" data-id="5" src="assets/img/team/man5.png"
                                            alt="" />
                                    </figure>
                                    <div class="newsletter_form">
                                        <form data-success="Now you are subscribed!">
                                            <input type="text" name="subscriber" placeholder="Name" />
                                            <input type="email" name="email" placeholder="Email" />
                                            <button type="button" class="js-subscribe">
                                                Access </button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section_5" class="track_section">
                    <div class="container animatedParent ">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section_head_widget">
                                    <h2 class="animated fadeInDown">
                                        WMA Projects</h2>
                                    <h5 class="animated fadeInLeft">Releases</h5>
                                </div>
                            </div>
                            <!--column-->
                        </div>
                        <!--row-->
                    </div>
                    <!--contaier-->

                    <div class="projects_widget">

                        <div class="container controls_wrapper animatedParent">
                            <div class="carousel_controls">
                                <span id="projects-prev" class="fa fa-angle-left animated fadeInLeft"></span>
                                <span id="projects-next" class="fa fa-angle-right animated bounceInRight"></span>
                            </div>
                            <!--controls-->
                        </div>
                        <!--//controls_wrapper//carousel_overlay-->

                        <div class="projects_carousel animatedParent ">
                            @foreach ($releases as $release)
                            <div class="news_box fadeInUp animated">
                                <figure><img src="{{ $release->release_artwork_url }}" alt="" /></figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>{{ $release->artist }} - {{ $release->title }}</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover2">
                                    <a target="_blank" href="#" title="iTunes" class="btn-icon project-icon">
                                    <i class="fa fa-music fa-2x"></i>
                                    </a>
                                    <a target="_blank" href="#" title="Spotify" class="btn-icon project-icon">
                                    <i class="fa fa-spotify fa-2x"></i>
                                    </a>
                                    <a target="_blank" href="#" title="YouTube" class="btn-icon project-icon">
                                    <i class="fa fa-youtube-square fa-2x"></i>
                                    </a>
                                </div>
                                <!--//hover-->
                            </div>
                            @endforeach
                            <!--//news_box bounceInUp animated-->
                        </div>
                        <!--//news_carousel-->

                    </div>
                    <!--//projects_widget-->
                </section>

                <!--======================================
                Parallax/facebook page promotion Section
                ==========================================-->
                <section id="section_4" class="parallax parallax_one facebook_promo animatedParent "
                    data-stellar-background-ratio="0.5">
                    <div class="parallax_inner ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h1 class="animated fadeInUp">
                                        WMALABEL music </h1>
                                    <h3 class="animated fadeInDown">
                                        "Like" If you love them! </h3>
                                    <a href="https://www.facebook.com/KateMargretUSA/" target="_blank" class="btn btn_fb">
                                        like us on facebook </a>
                                </div>
                                <!--column-->
                            </div>
                            <!--row-->
                        </div>
                        <!--container-->
                    </div>
                    <!--parallax_inner-->
                </section>
                <!--//parallax-->


                <!--======================================
                        Parallax/Testimonial Section
                        ==========================================-->

                <!--======================================
                Media Section
                ==========================================-->
                <section id="section_7" class="media_section">

                    <div class="container animatedParent ">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section_head_widget">
                                    <h2 class="animated fadeInDown">
                                        WMA Artists</h2>
                                    <h5 class="animated fadeInLeft">
                                        photos &amp; videos </h5>
                                </div>
                            </div>
                            <!--column-->
                        </div>
                        <!--row-->
                    </div>
                    <!--contaier-->

                    <div class="artists_widget">

                        <div class="container controls_wrapper animatedParent">
                            <div class="carousel_controls">
                                <span id="artists-prev" class="fa fa-angle-left animated fadeInLeft"></span>
                                <span id="artists-next" class="fa fa-angle-right animated bounceInRight"></span>
                            </div>
                            <!--controls-->
                        </div>
                        <!--//controls_wrapper//carousel_overlay-->

                        <div class="artists_carousel animatedParent ">
                            <div class="news_box fadeInUp animated">
                                <figure><img
                                        src="assets/img/artistimage/anya_kay_-_chains.jpg"
                                        alt="" /></figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>Anya Kay - Chains</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank"
                                        href="https://www.youtube.com/channel/UCpRguYYz4fglwwxdK_kiXOw?view_as=subscriber"
                                        class="news-popup-open">
                                        Youtube channel </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <!--//news_box bounceInUp animated-->
                        </div>
                        <!--//news_carousel-->

                    </div>
                    <!--//projects_widget-->

                </section>
                <!--//media_section-->

                <!--======================================
                Parallax/event_promo Section
                ==========================================-->

                <!--======================================
                About
                ==========================================-->
                <section id="section_12" class="about_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section_head_widget animatedParent ">
                                    <h1 class="animated fadeInDown">What are you getting</h1>
                                    <!--h4>how they came to be so famous.</h4-->
                                </div>
                            </div>
                            <!--section_head_widget-->
                        </div>
                        <!--row-->

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text_widget">
                                    <p>All of our company's services are free, you are not required pre-payment. Guaranteed
                                        monthly sales report and payment. B within 48-72 hours of your album will appear on
                                        sale in stores and on the radio.<br />
                                        You get 90% of total revenues from stores, radio stations and display your video.
                                    </p>

                                    <p>You get a professional artist's page on Facebook and advertise your creativity</p>

                                    <p>You get your ad single or album on YouTube</p>

                                    <p>You get 24/7 to answer any questions e-mail wmalabel@gmail.com</p>

                                    <p>Your best songs fall into collections "Best Song of the Month", "Best Song of the
                                        Year", "Best Song of the genre"<br />
                                        <a href="i/user.html">Register now.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--container-->
                </section>

                <!--======================================
                    Team/Band Members
                    ==========================================-->
                <section id="section_11" class="team_section">
                    <div class="container animatedParent ">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section_head_widget">
                                    <h2 class="animated fadeInDown">
                                        WMA Partners</h2>
                                    <h5 class="animated fadeInLeft">
                                        Partners </h5>
                                </div>
                            </div>
                            <!--column-->
                        </div>
                        <!--row-->
                    </div>
                    <!--contaier-->

                    <div class="members_widget">

                        <div class="container controls_wrapper animatedParent">
                            <div class="carousel_controls">
                                <span id="member-prev" class="fa fa-angle-left animated fadeInLeft"></span>
                                <span id="member-next" class="fa fa-angle-right animated bounceInRight"></span>
                            </div>
                            <!--controls-->
                        </div>
                        <!--//controls_wrapper//carousel_overlay-->

                        <div class="members_carousel animatedParent">
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/sergei_polyus.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>Первомай Sound</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.youtube.com/user/polyus340/videos"
                                        class="news-popup-open">
                                        Первомай Sound </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/ashray_media_group.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>Ashray Media Group</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/vg_distribution_label.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>VG Distribution Label</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.youtube.com/channel/UCc0vQWZifKm1F264ah-Wbyw"
                                        class="news-popup-open">
                                        VG Distribution Label </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/fullsizerender.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>TuneCloud Media Management Tools</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="http://tunecloud.ga/" class="news-popup-open">
                                        TuneCloud Media Management Tools </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/centr_1400by1400.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>Продюсерский Центр "Кредо" </h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="http://kamichigor.wix.com/ps-credo" class="news-popup-open">
                                        Продюсерский Центр "Кредо" </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/global_digital_publishing_inc_new_1.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>GLOBAL DIGITAL PUBLISHING INC</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.facebook.com/WMALabelUSA/" class="news-popup-open">
                                        GLOBAL DIGITAL PUBLISHING INC </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/partners720143novyymuzykalnyyporyadok1.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>Новый Музыкальный Порядок</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.facebook.com/WMALabelUSA" class="news-popup-open">
                                        Новый Музыкальный Порядок </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/partners643995e-ZE2rEV_400x400.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>Rizanova UZ</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.facebook.com/WMALabelUSA" class="news-popup-open">
                                        Rizanova UZ </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/partners726374INFIMOB.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>ООО «Интерактив» </h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.facebook.com/WMALabelUSA" class="news-popup-open">
                                        ООО «Интерактив» </a>
                                </div>
                                <!--//hover-->
                            </div>
                            <div class="news_box fadeInUp animated">
                                <figure class="margin0">
                                    <img src="assets/img/partners/partners324472NewBigStar.jpg"
                                        alt="" />
                                </figure>
                                <div class="news_info_wrapper">
                                    <div class="news_info">
                                        <h5>New Big Star Label</h5>
                                        <ul class="news_meta">
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <!--//news_meta-->
                                    </div>
                                    <!--news_info-->
                                </div>
                                <!--//news_info_wrapper-->
                                <div class="hover">
                                    <a target="_blank" href="https://www.facebook.com/NewBigStar/timeline"
                                        class="news-popup-open">
                                        New Big Star Label </a>
                                </div>
                                <!--//hover-->
                            </div>
                        </div>
                        <!--//news_carousel-->

                    </div>
                    <!--//projects_widget-->
                </section>
                <!--=============================================
                    Contact Form
                    ===============================================-->
                <section class="contact_Us">
                    <div class="container">
                        <div class="section_head_widget animatedParent ">
                            <h2 class="animated fadeInLeft">
                                Contact Us</h2>
                        </div>
                        <div class="contactFormWrapper">
                            <form data-success="Your message saved!" id="contactform" action="#" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" name="name" id="name" placeholder="Name" />
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="text" name="email" id="email" placeholder="Email" />
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="text" name="subject" id="subject" placeholder="Subject" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--column-->
                                    <div class="col-xs-12 col-md-6">
                                        <div class="messageBox">
                                            <textarea placeholder="Message" name="message" id="message"></textarea>
                                            <button class="btn btn-default js-contacts" id="submit" type="button" ">
                                                    <i class=" fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!--======================================
                Footer
                ==========================================-->
                <footer id="section_13" class="parallax parallax_five footer" data-stellar-background-ratio="0.5">
                    <div class="parallax_inner">
                        <div class="container">
                            <ul class="channels_list row animatedParent " data-sequence="400">
                                <li class="col-xs-12 col-sm-4 animated fadeInLeftShort" data-id="1">
                                    <a target="_blank" href="https://itunes.apple.com/am/artist/kate-margret/507436560">
                                        <i class="fa fa-circular fa-music"></i>WMA itunes
                                    </a>
                                </li>
                                <li class="col-xs-12 col-sm-4 animated fadeInLeft" data-id="2">
                                    <a target="_blank" href="https://soundcloud.com/kate-margret">
                                        <i class="fa fa-soundcloud"></i>WMA soundcloud
                                    </a>
                                </li>
                                <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="3">
                                    <a target="_blank" href="https://www.youtube.com/user/katemargret">
                                        <i class="fa fa-youtube"></i>WMA youtube
                                    </a>
                                </li>
                                <li class="col-xs-12 col-sm-4 animated fadeInLeft" data-id="4">
                                    <a target="_blank" href="https://www.instagram.com/katemargret/">
                                        <i class="fa fa-instagram"></i>WMA Instagram
                                    </a>
                                </li>
                                <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="5">
                                    <a target="_blank" href="https://www.facebook.com/KateMargretUSA/">
                                        <i class="fa fa-facebook"></i>WMA Facebook
                                    </a>
                                </li>
                                <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="6">
                                    <a target="_blank" href="https://twitter.com/WMALABELUSA">
                                        <i class="fa fa-twitter"></i>WMA Twitter
                                    </a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="copyrights">
                                        &copy; 2010-2021
                                        <a href="/">WORLD MEDIA ALLIANCE</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--container-->
                    </div>
                    <!--parallax_inner-->
                </footer>
                <!--//parallax-->
            </div>
        </div>
        <!--===================================================================
            Scripts
            ====================================================================-->
        <script src="assets/js/jquery-1.11.0.min.js"></script>
        <script src="assets/js/jpreloader.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easing-1.3.pack.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script src="assets/js/tweetie.min.js"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/jPlayer/jquery.jplayer.min.js"></script>
        <script src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script>
        <script src="assets/js/jquery.vegas.min.js"></script>
        <script src="assets/js/css3-animate-it.js"></script>
        <script src="assets/js/jquery.fractionslider.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="assets/js/jquery.waitforimages.js"></script>
        <script src="assets/js/video.js"></script>
        <script src="assets/js/bigvideo.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
            $('body').jpreLoader({
                splashID: "#jSplash",
                loaderVPos: '50%',
                autoClose: true
            });
        </script>

    </body>
</html>
