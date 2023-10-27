@extends('user.master')
@section('content')
    <div class="main-wrapper">
        <div class="sub_header bg_1">
            <div id="intro_txt">
                <h1><strong>Kurslar</strong></h1>
                <p>
                    Yeni texnologiyalarla təchiz olunmuş SparkX kursları dizayn, proqramlaşdırma kimi bir sıra İT sahələrinin, həmçinin müxtəlif dil dərslərinin tədrisi üzrə xidmət göstərir.
                </p>
            </div>
        </div><!--End sub_header -->
        <div class="container_gray_bg">
            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-9">
                        <div class="strip_all_courses_list wow fadeIn" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="img_list">
                                        <a href="academic_single_course.html"><img src="img/course_1.jpg" alt="">
                                            <div class="short_info">
                                                <h3>Dizayn</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="course_list_desc">
                                        <h3><strong>Dizayn</strong> kursları</h3>
                                        <p>
                                            Kursumuzda həmçinin bir sıra İT sahələrinin əvəzolunmazı hesab edilən UX&UI və qrafik dizaynerlik dərsləri də keçirilir.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="details_list_col">
                                        <div>
                                            <a href="{{route('contact')}}" class="button_outline">Müraciət et</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!--End strip -->
                        <div class="strip_all_courses_list wow fadeIn" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="img_list">
                                        <a href="academic_single_course.html"><img src="img/course_2.jpg" alt="">
                                            <div class="short_info">
                                                <h3>İnformasiya texnologiyaları</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="course_list_desc">
                                        <h3><strong>İT</strong> kursları</h3>
                                        <p>Kursumuzda proqramlaşdırma, kibertəhlükəsizlik, sistem administratorluğu kimi bir sıra İT kursları tədris edilir. Bizə qoşularaq bu sahələrə yiyələnə bilərsiniz.</p>

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="details_list_col">
                                        <div>
                                            <a href="{{route('contact')}}" class="button_outline">Müraciət et</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!--End strip -->

                        <div class="strip_all_courses_list wow fadeIn" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="img_list">
                                        <a href="academic_single_course.html"><img src="img/course_3.jpg" alt="">
                                            <div class="short_info">
                                                <h3>Dil</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="course_list_desc">
                                        <h3><strong>Dil</strong> kursları</h3>
                                        <p>
                                            Bunlardan əlavə olaraq istənilən sahədə mütəxəssisləşməyinizə baxmayaraq bu sahələrdə karyeranızın yüksək pillələrinə çıxmaq üçün şəxsi inkişafınızda dil biliklərinə yer verməyiniz vacibdir. Kursumuzda dil dərslərinə qoşularaq uğurlu karyera yolunda daha əmin addımlarla irəliləyə bilərsiniz.                                        </p>

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="details_list_col">
                                        <div>
                                            <a href="{{route('contact')}}" class="button_outline">Müraciət et</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End strip -->


                    </div><!--End col-md-9 -->
                </div><!--End row -->
            </div><!--End container -->
        </div><!--End container_gray_bg -->

        <div class=" container_gray_line" id="newsletter_container">
            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Subscribe to our Newsletter for latest news.</h3>
                        <div id="message-newsletter">
                        </div>
                        <form method="post" action="http://www.ansonika.com/atena/assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                            <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="E-Poçt" class="form-control">
                            <button id="submit-newsletter" class="button"> Göndər</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End newsletter_container -->



    </div><!-- main-wrapper -->

@endsection
