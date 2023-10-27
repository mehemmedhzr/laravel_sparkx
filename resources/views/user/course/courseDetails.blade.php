
@extends('user.master')
@section('content')
    <div class="main-wrapper">

        <div class="sub_header bg_1">
            <div id="intro_txt">
                <h1>Atena <strong>Management</strong> diploma</h1>
                <p>Ex saepe accusata duo, vel ne summo option delenit.</p>
            </div>
        </div> <!--End sub_header -->

        <div class="container_gray_bg">
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="{{route('dashboard')}}">Ana səhifə</a></li>
                        <li><a href="{{route('course')}}">Akademiya</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
            </div><!-- Position -->
            <div class="container margin_60">
                <div class="row">

                    <div class="col-md-9">
                        <div class="box_style_1">
                            <div class="indent_title_in">
                                <i class="pe-7s-news-paper"></i>
                                <h3>Summary</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Lorem ipsum dolor sit amet, nam ei aperiam dolorum nominati, porro possit ne qui, <strong>libris consectetuer</strong> has no. Te saepe epicurei apeirian his, vim an minim delicatissimi. Et ius tota recusabo democritum, cum choro consul urbanitas eu. At nemore quodsi concludaturque per, nam adhuc noster accusam ad. Vim id aliquid dolorum, nam case graece ea.</p>
                                <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                                <p class="add_bottom_30">Lorem ipsum dolor sit amet, nam ei aperiam <strong>dolorum nominati</strong>, porro possit ne qui, libris consectetuer has no. Te saepe epicurei apeirian his, vim an minim delicatissimi. Et ius tota recusabo democritum, cum choro consul urbanitas eu. At nemore quodsi concludaturque per, nam <a href="academic_single_course.html#0" class="hvr-underline-reveal"><strong>adhuc noster accusam ad</strong></a>. Vim id aliquid dolorum, nam case graece ea.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><img src="{{asset('img/course_1_1_thumb.jpg')}}" alt="" class="img-responsive"></p>
                                        <h4>Main targets</h4>
                                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><img src="{{asset('img/course_1_2_thumb.jpg')}}" alt="" class="img-responsive"></p>
                                        <h4>Future applications</h4>
                                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="styled_2">
                            <div class="indent_title_in">
                                <i class="pe-7s-display1"></i>
                                <h3>Lessons</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list_style_1">
                                            <li>History</li>
                                            <li>Natural Science</li>
                                            <li>Social Science</li>
                                            <li>Mathematics</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list_style_1">
                                            <li>Writing</li>
                                            <li>Literature</li>
                                            <li>Social Science</li>
                                            <li>Cultural Diversity</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <hr class="styled_2">

                            <div class="indent_title_in">
                                <i class="pe-7s-user"></i>
                                <h3>Main Teachers</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="list_teachers">
                                            <li><a href="academic_single_course.html#0"><figure><img src="img/teacher_1_thumb.jpg" alt="" class="img-rounded"></figure><h5>Tomas Hegel</h5><p>Mathematics</p><i class="pe-7s-angle-right-circle"></i></a></li>
                                            <li><a href="academic_single_course.html#0"><figure><img  src="img/teacher_2_thumb.jpg" alt="" class="img-rounded"></figure><h5>Tomas Hegel</h5><p>Mathematics</p><i class="pe-7s-angle-right-circle"></i></a></li>
                                            <li><a href="academic_single_course.html#0"><figure><img  src="img/teacher_3_thumb.jpg" alt="" class="img-rounded"></figure><h5>Tomas Hegel</h5><p>Mathematics</p><i class="pe-7s-angle-right-circle"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="list_teachers">
                                            <li><a href="academic_single_course.html#0"><figure><img  src="img/teacher_4_thumb.jpg"  alt="" class="img-rounded"></figure><h5>Tomas Hegel</h5><p>Mathematics</p><i class="pe-7s-angle-right-circle"></i></a></li>
                                            <li><a href="academic_single_course.html#0"><figure><img  src="img/teacher_5_thumb.jpg"  alt="" class="img-rounded"></figure><h5>Tomas Hegel</h5><p>Mathematics</p><i class="pe-7s-angle-right-circle"></i></a></li>
                                            <li><a href="academic_single_course.html#0"><figure><img  src="img/teacher_6_thumb.jpg"  alt="" class="img-rounded"></figure><h5>Tomas Hegel</h5><p>Mathematics</p><i class="pe-7s-angle-right-circle"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="styled_2">
                            <div class="indent_title_in">
                                <i class="pe-7s-cloud-download"></i>
                                <h3>Downloads</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p class="add_bottom_30">Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                                <div class="row">
                                    <div class="col-md-5 col-sm-5">
                                        <ul class="list-unstyled">
                                            <li><a href="academic_single_course.html#0" class="button_download hvr-sweep-to-right"><i class="pe-7s-map"></i>Prospectus</a></li>
                                            <li><a href="academic_single_course.html#0" class="button_download hvr-sweep-to-right"><i class="pe-7s-note"></i>Admission form</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><a href="academic_single_course.html#0" class="button_download hvr-sweep-to-right"><i class="pe-7s-timer"></i>Lesson Time table</a></li>
                                            <li><a href="academic_single_course.html#0" class="button_download hvr-sweep-to-right"><i class="pe-7s-micro"></i>Audio lesson sample</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <hr class="styled_2">

                            <div class="indent_title_in">
                                <i class="pe-7s-clock"></i>
                                <h3>Time table</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>

                                <table class="table table-striped cart-list add_bottom_30">
                                    <thead>
                                    <tr>
                                        <th>
                                            Day
                                        </th>
                                        <th>
                                            Lessons
                                        </th>
                                        <th>
                                            Workshops
                                        </th>
                                        <th>
                                            Group session
                                        </th>
                                        <th>
                                            Exams
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            09.00am - 11.00am
                                        </td>
                                        <td>
                                            11.00am - 12.00am
                                        </td>
                                        <td>
                                            02.00pm - 04.00pm
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tuesday
                                        </td>
                                        <td>
                                            09.00am - 11.00am
                                        </td>
                                        <td>
                                            11.00am - 12.00am
                                        </td>
                                        <td>
                                            02.00pm - 04.00pm
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Wednesday
                                        </td>
                                        <td>
                                            09.00am - 11.00am
                                        </td>
                                        <td>
                                            11.00am - 12.00am
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            02.00pm - 04.00pm
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Thursday
                                        </td>
                                        <td>
                                            09.00am - 11.00am
                                        </td>
                                        <td>
                                            11.00am - 12.00am
                                        </td>
                                        <td>
                                            02.00pm - 04.00pm
                                        </td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Friday
                                        </td>
                                        <td>
                                            09.00am - 11.00am
                                        </td>
                                        <td>
                                            11.00am - 12.00am
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            02.00pm - 04.00pm
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <aside class="col-md-3">

                        <div class="banner">
                            <i class=" iconcustom-school"></i>
                            <h3>Take a campus tour</h3>
                            <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius.</p>
                            <a href="tour.html" class="banner_bt">Start tour</a>
                        </div>

                        <h4><strong>How to apply</strong></h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum.</p>

                        <hr class="styled">
                        <div class="box_side"><h5>By Phone</h5> <i class="icon-phone"></i>
                            <p><a href="tel://033284322">+ 0043 848293 43</a><br><small>Monday to Friday 9.00am - 6.00pm</small></p>
                        </div>
                        <hr class="styled">
                        <div class="box_side"><h5>By Postal Mail</h5> <i class="icon_pencil-edit"></i>
                            <p><a href="academic_single_course.html#0"><strong>Download the application form</strong></a>,<br> and send it to this address:<br><br><em>4 West 31st Street New York<br>
                                    10001 United States</em></p>
                        </div>
                        <hr class="styled">
                        <div class="box_side">
                            <h5>Apply Online</h5> <i class="icon_desktop"></i>
                            <p>Eam admodum pertinacia an, essent nostro audiam ad qui, pro ex habeo aeterno maluisset. Aeque apeirian duo et, ad ludus denique tincidunt usu.</p>
                            <p><a href="apply_online.html" class="button small">Apply online</a> </p>
                        </div>



                    </aside>
                </div><!--End row -->
            </div><!--End container -->
        </div><!--End container_gray_bg -->

        <div class="container margin_60">
            <div class="main_title">
                <h2>Frequently questions</h2>
                <p>Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box_style_2">
                        <h4>Et ius tota recusabo democritum?</h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_style_2">
                        <h4>Posse exerci volutpat has?</h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_style_2">
                        <h4>Te pri facete latine salutandi?</h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                    </div>
                </div>
            </div><!--End row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="box_style_2">
                        <h4>Et ius tota recusabo democritum?</h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_style_2">
                        <h4>Mediocritatem sea ex, nec id agam?</h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_style_2">
                        <h4>Te pri facete latine salutandi?</h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                    </div>
                </div>
            </div><!--End row -->
        </div><!--End container -->

        <div class=" container_gray_line" id="newsletter_container">
            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Subscribe to our Newsletter for latest news.</h3>
                        <div id="message-newsletter"></div>
                        <form method="post" action="http://www.ansonika.com/atena/assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                            <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="E-Poçt" class="form-control">
                            <button id="submit-newsletter" class="button"> Göndər</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End newsletter_container -->
    </div> <!-- main-wrapper -->
@endsection
