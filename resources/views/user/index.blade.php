@extends('user.master')
@section('content')
    <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:650px;">
            <!-- first slide -->
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                <img src="img/slides/slide_1.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" >Parlaq gələcək üçün doğru təhsilin ünvanı
                </h3>
                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >Sıfırdan başlayaraq istənilən IT sahəsində uğurlu karyeraya sahib olmaq istəyirsinizsə, doğru ünvandasınız. SparkX kurslarına qoşularaq qısa müddətdə bu hədəflərinizə çata bilərsiniz. </p>
                <p class="ls-l" style="top:62%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;" > <a href="about.html" class="button_intro outline">Haqqımızda</a></p>
            </div>

{{--            <!-- second slide -->--}}
{{--            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">--}}
{{--                <img  src="img/slides/slide_2.jpg" class="ls-bg" alt="Slide background">--}}
{{--                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" >Atena <strong>Qualified</strong> teachers</h3>--}}
{{--                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >COLLEGE / UNIVERSITY / CAMPUS</p>--}}
{{--                <p class="ls-l" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;" > <a href="about.html" class="button_intro outline">About us</a></p>--}}
{{--            </div>--}}

{{--            <!-- third slide -->--}}
{{--            <div class="ls-slide" data-ls="slidedelay:5000; transition2d:5;" >--}}
{{--                <img src="img/slides/slide_3.jpg" class="ls-bg" alt="Slide background">--}}
{{--                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" ><strong>Great</strong> students community</h3>--}}
{{--                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >COLLEGE / UNIVERSITY / CAMPUS</p>--}}
{{--                <p class="ls-l" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;" > <a href="about.html" class="button_intro outline">About us</a></p>--}}
{{--            </div>--}}

{{--            <!-- fourth slide -->--}}
{{--            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">--}}
{{--                <img src="img/slides/slide_4.jpg" class="ls-bg" alt="Slide background">--}}
{{--                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" ><strong>Well equiped</strong> classrooms</h3>--}}
{{--                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;" >COLLEGE / UNIVERSITY / CAMPUS</p>--}}
{{--                <p class="ls-l" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;"> <a href="about.html" class="button_intro outline">About us</a></p>--}}
{{--            </div>--}}

        </div>
    </div><!-- End layerslider -->

    <div class="container_gray_bg" id="home_feat_1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="home_feat_1_box">
                        <a >
                            <img src="img/home_feat_1_1.jpg" class="img-responsive" alt="">
                            <div class="short_info"><h3>Plan a visit</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="home_feat_1_box">
                        <a >
                            <img src="img/home_feat_1_2.jpg" class="img-responsive" alt="">
                            <div class="short_info"><h3>Study Programs</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="home_feat_1_box">
                        <a >
                            <img src="img/home_feat_1_3.jpg" class="img-responsive" alt="">
                            <div class="short_info"><h3>Admissions</h3><i class="arrow_carrot-right_alt2"></i></div>
                        </a>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_gray_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Üstünlüklərimiz</h2>
            <p>Nə üçün SparkX Kurslarını seçməli olduğunuzu göstərən bir sıra xüsusiyyətlərimizlə tanış ola bilərsiniz.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class=" iconcustom-certificate"></i>
                    <h3>Sertifikatlaşmış Tədris Mərkəzi</h3>
                    <p>SparkX sertifikatı ölkə səviyyəsində və beynəlxalq səviyyədə bir sıra müəssisə və qurumlar tərəfindən tanınır.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class=" iconcustom-innovation"></i>
                    <h3>Səmərəli Kurslar</h3>
                    <p>Münasib qiymətlərlə, büdcənizi aşmadan SparkX kurslarına qoşularaq bir sıra mütəxəssislərin rəhbərliyi altında öz şəxsi bilik və bacarıqlarınızı inkişaf etdirə bilərsiniz.</p>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class=" iconcustom-education_online"></i>
                    <h3>Sürətli və Effektiv</h3>
                    <p>Nəticəyə əsaslanan kurslarımız vasitəsilə sürətli və effektiv şəkildə hədəflərinizə çata bilərsiniz. Kursumuza qoşularaq öz cədvəlinizi tərtib edib effektiv öyrənmə metodu ilə tezliklə sahənizin peşəkarı ola bilərsiniz.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class=" iconcustom-know_how"></i>
                    <h3>Limitsiz Öyrənmə, Limitsiz Fürsətlər!</h3>
                    <p>Tədris Mərkəzimiz dərslərdən əlavə zamanlarda sizə öz yoldaşlarınızla birgə boş vaxtlarınızı səmərəli keçirə biləcəyiniz əlverişli mühit fürsəti təqdim edir. Bu müddətdə öz mentor və müəllimlərinizin biliklərindən yararlana bilərsiniz.</p>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class=" iconcustom-science"></i>
                    <h3>İxtisaslaşmış Pedaqoqlar</h3>
                    <p>Kursumuzda bütün dərslər təcrübəli və ixtisaslaşmış müəllimlər tərəfindən keçirilir. Bundan əlavə tapşırıqlarda və s. çətinlikləriniz olduğu halda mentorlarımızdan yardım dəstəyi ala bilərsiniz.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box_feat_home">
                    <i class=" iconcustom-test"></i>
                    <h3>Tədqiqat Bacarığı</h3>
                    <p>İnformasiyaya əsaslanan müasir dünyada internet üzərindən tədqiqat bacarığına yiyələnmək vacibdir. Effektiv axtarış üsulları, mənbələrin tənqidi qiymətləndirilməsi və məlumatların etibarlılığını ayırd etmə bacarığı fərdlərə istər akademik, istər iş, istərsə də gündəlik həyatda əsaslandırılmış qərarlar qəbul etmək imkanı verir. İxtisaslaşmış pedaqoqlarımız sayəsində bu bacarıq karyera yolunuzda əsas silahlarınızdan biri olacaq.</p>
                </div>
            </div>
        </div><!-- End row -->
        <hr class="more_margin">

        <div class="row add_bottom_60">
            <div class="main_title">
                <h2>Öncəliklərimiz</h2>
                <p>SparkX Kursları ilə birgə uğurlara imza atmaq üçün öncəliklərimizlə tanış ola bilərsiniz.</p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div id="graph">
                    <img src="img/graphic.jpg" class="wow zoomIn" data-wow-delay="0.1s" alt="">
                    <div class="features step_1 wow flipInX" data-wow-delay="1s">
                        <h4><strong>01.</strong> Tələbələrimizin inkişafı</h4><p>ədris müddətində tələbələrimizin inkişaf potensiallarının analizi əsasında nəticələr çıxarılması və bu nəticələr əsasında tələbələrimizin bir sıra xüsusiyyətlərinin daha da inkişaf edirilməsi əsas  öncəliklərimizdəndir.</p>
                    </div>
                    <div class="features step_2 wow flipInX" data-wow-delay="1.5s">
                        <h4><strong>02.</strong> Təcrübə əsaslı öyrənmə</h4><p>Hər birinizin bizə qatdığı təcrübələrin gələcəkdə öyrənmə metodologiyamızda öz əksini tapacaq. Hər keçən gün sizlərdən qazandığımız təcrübələr sayəsində daha da mütəxəssisləşirik.</p>
                    </div>
                    <div class="features step_3 wow flipInX" data-wow-delay="2s">
                        <h4><strong>03.</strong> Hədəflərə fokuslanmaq</h4><p>SparkX şirkəti prioritet hədəfləri əsas götürərək bu hədəflər çərçivəsində öz fəaliyyətini genişləndirməyi planlaşdırır.</p>
                    </div>
                    <div class="features step_4 wow flipInX" data-wow-delay="2.5s">
                        <h4><strong>04.</strong> Fənlərarası inteqrasiya</h4><p>Tədris müddətində sadəcə keçirilən dərslərlə kifayətlənməyib tələbələrimizin bir sıra fərdi bacarıqlarını inkişaf etdirmək üçün əhəmiyyətli tədbirlərin də keçirilməsi gündəliyimizdə yer alan önəmli məsələlərdəndir.</p>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
        <div class="text-center"><a href="tour.html" class=" button_outline large">Take a tour of ATENA</a></div>
    </div><!-- End container -->

    <div class="bg_content testimonials">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
{{--                    <ol class="carousel-indicators">--}}
{{--                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>--}}
{{--                        <li data-target="#quote-carousel" data-slide-to="1"></li>--}}
{{--                        <li data-target="#quote-carousel" data-slide-to="2"></li>--}}
{{--                    </ol><!-- Carousel Slides / Quotes -->--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <!-- Quote 1 -->--}}
{{--                        <div class="item active">--}}
{{--                            <blockquote>--}}
{{--                                <p>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.--}}
{{--                                </p>--}}
{{--                            </blockquote>--}}
{{--                            <small><img class="img-circle" src="img/testimonial_1.jpg" alt="">Stefany</small>--}}
{{--                        </div>--}}
{{--                        <!-- Quote 2 -->--}}
{{--                        <div class="item">--}}
{{--                            <blockquote>--}}
{{--                                <p>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.--}}
{{--                                </p>--}}
{{--                            </blockquote>--}}
{{--                            <small><img class="img-circle" src="img/testimonial_2.jpg" alt="">Karla</small>--}}
{{--                        </div>--}}
{{--                        <!-- Quote 3 -->--}}
{{--                        <div class="item">--}}
{{--                            <blockquote>--}}
{{--                                <p>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.--}}
{{--                                </p>--}}
{{--                            </blockquote>--}}
{{--                            <small><img class="img-circle" src="img/testimonial_1.jpg" alt="">Maira</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End bg_content -->



    <div class="container margin_60">
        <div class="main_title">
            <h2>Ən Son Məlumatlar</h2>
            <p>SparkX ilə bağlı ən son məlumat və xəbərləri buradan əldə edə bilərsiniz.</p>
        </div>
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li><a href="{{route('course')}}" class="icon-courses"><span>Kurslar</span></a></li>
{{--                    <li><a href="index.html#section-2" class="icon-news"><span>News</span></a></li>--}}
{{--                    <li><a href="index.html#section-3" class="icon-events"><span>Events</span></a></li>--}}
                </ul>
            </nav>
            <div class="content">
                <section id="section-1">
                    <div class="row list_courses_tabs">
                        <div class="col-md-4 col-sm-4">
                            <h2>Proqramlaşdırma</h2>
                            <ul>
                                <li><div><a ><figure><img src="img/course_1_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>Front-end developer</strong></h3></a></div>
                                </li>
                                <li>
                                    <div><a ><figure><img src="img/course_2_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>Back-end developer</strong></h3></a></div>
                                </li>
                                <li>
                                    <div><a ><figure><img src="img/course_3_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>Full-stack developer</strong></h3><small></small></a></div>
                                </li>
                                <li>
                                    <div><a ><figure><img src="img/course_4_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>System adminstrator</strong></h3><small></small></a></div>
                                </li>
                                <li>
                                    <div><a ><figure><img src="img/course_5_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong> QA Tester</strong></h3><small></small></a></div>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2>Dizayn</h2>
                            <ul>
                                <li>
                                    <div><a ><figure><img src="img/course_6_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>UI/UX design</strong> </h3><small></small></a></div>
                                </li>
                                <li>
                                    <div><a ><figure><img src="img/course_7_thumb.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>Graphic Design</strong> </h3><small></small></a></div>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2>Dil</h2>
                            <ul>
                                <li><div><a ><figure><img src="img/flags/istockphoto-1211686337-170667a.jpg" alt="" class="img-rounded"></figure>
                                            <h3><strong>İngilis dili</strong> </h3><small></small></a></div>
                                </li>
                                <li><div><a ><figure><img src="img/flags/russia-flag-png-xl.png" alt="" class="img-rounded"></figure>
                                            <h3><strong>Rus dili</strong> </h3><small></small></a></div>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="section-2">
                    <div class="row list_news_tabs">
                        <div class="col-md-4 col-sm-4">
                            <p><a href="index.html#0"><img src="img/news_1_thumb.jpg" alt="" class="img-responsive"></a></p>
                            <span class="date_published">20 Agusut 2015</span>
                            <h3><a href="index.html#0">Success Stories for Atena College in 2015's </a></h3>
                            <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                            <a href="index.html#0" class="button small">Read more</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p><a href="index.html#0"><img src="img/news_2_thumb.jpg" alt="" class="img-responsive"></a></p>
                            <span class="date_published">20 Agusut 2015</span>
                            <h3><a href="index.html#0">Boost in A-Level Grades in 2015 for Students</a></h3>
                            <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                            <a href="index.html#0" class="button small">Read more</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p><a href="index.html#0"><img src="img/news_3_thumb.jpg" alt="" class="img-responsive"></a></p>
                            <span class="date_published">20 Agusut 2015</span>
                            <h3><a href="index.html#0">Caps Off To Sport at Atena</a></h3>
                            <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                            <a href="index.html#0" class="button small">Read more</a>
                        </div>
                    </div><!--End row -->
                </section>
                <section id="section-3">
                    <div class="row list_news_tabs">
                        <div class="col-md-4 col-sm-4">
                            <p><a href="index.html#0"><img src="img/event_1_thumb.jpg" alt="" class="img-responsive"></a></p>
                            <span class="date_published">20 Agusut 2015</span>
                            <h3><a href="index.html#0">Next students meeting</a></h3>
                            <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                            <a href="index.html#0" class="button small">Read more</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p><a href="index.html#0"><img src="img/event_2_thumb.jpg" alt="" class="img-responsive"></a></p>
                            <span class="date_published">20 Agusut 2015</span>
                            <h3><a href="index.html#0">10 October Open day</a></h3>
                            <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                            <a href="index.html#0" class="button small">Read more</a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p><a href="index.html#0"><img src="img/event_3_thumb.jpg" alt="" class="img-responsive"></a></p>
                            <span class="date_published">20 Agusut 2015</span>
                            <h3><a href="index.html#0">Photography workshop</a></h3>
                            <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                            <a href="index.html#0" class="button small">Read more</a>
                        </div>
                    </div><!--End row -->
                </section>

            </div><!-- /content -->
        </div><!-- End tabs -->
    </div>



    <div class="bg_content magnific">
        <div>
            <h3>SparkX-i kəşf et</h3>
            <p>
                Parlaq gələcək üçün doğru təhsilin ünvanı
            </p>
        </div>
    </div><!-- End bg_content -->

    <div class="container_gray_bg" id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>SparkX ilə bağlı hər hansı bir sualınız yaranarsa, bizimlə əlaqəyə keçin.</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="http://www.ansonika.com/atena/horizontal_nav/assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="E-Poçt" class="form-control">
                        <button id="submit-newsletter" class="button"> Göndər</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End newsletter_container -->

@endsection
