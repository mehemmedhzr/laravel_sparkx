@extends('user.master')
@section('content')
    <div class="main-wrapper">

        <div class="sub_header bg_1">
            <div id="intro_txt">
                <h1>Əlaqə</h1>
                <p></p>
            </div>
        </div> <!--End sub_header -->

        <div class="container_gray_bg">
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="{{route('dashboard')}}">Ana səhifə</a></li>

                    </ul>
                </div>
            </div><!-- Position -->

            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-9">
                        <div class="box_style_1">
                            <div class="indent_title_in">
                                <i class="pe-7s-mail-open-file"></i>
                                <h3>Bizimlə əlaqə</h3>
                            </div>
                            <div class="wrapper_indent">
                                <div id="message-contact">
                                </div>
                                <form method="post" action="http://www.ansonika.com/atena/assets/contact.php" id="contactform">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Ad</label>
                                                <input type="text" class="form-control styled" id="name_contact" name="name_contact" placeholder="Adınız">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Soyad</label>
                                                <input type="text" class="form-control styled" id="lastname_contact" name="lastname_contact" placeholder="Soyadınız">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>E-poçt</label>
                                                <input type="email" id="email_contact" name="email_contact" class="form-control styled" placeholder="E-poçtunuzu daxil edin">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Əlaqə nömrəsi</label>
                                                <input type="text" id="phone_contact" name="phone_contact" class="form-control styled" placeholder="Əlaqə nömrəsi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Müraciətiniz</label>
                                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control styled" style="height:100px;" placeholder="Müraciətiniz"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- End wrapper_indent -->


                            <div class="wrapper_indent">
                                <div id="message-visit">
                                </div>
                                <form method="post" id="visit">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="submit" value="Göndər" class="button add_bottom_30" id="submit-visit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- End wrapper_indent -->
                        </div><!-- End box style 1-->
                    </div><!-- End col-md-9 -->

                    <aside class="col-md-3">
                        <h3>Contacts info</h3>
                        <p>
                            11 Fifth Ave - New York, US<br>
                            + 61 (2) 8093 3400 / + 61 (2) 8093 3402<br>
                            <a href="contacts.html#">info@domain.com</a>
                        </p>



                    </aside>

                </div><!--End row -->
            </div><!--End container -->
        </div><!--End container_gray_bg -->

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
