@extends('user.master')
@section('content')
    <div class="main-wrapper">

        <div class="sub_header bg_1">
            <div id="intro_txt">
                <h1>Online <strong>Apply</strong> course</h1>
                <p>Ex saepe accusata duo, vel ne summo option delenit.</p>
            </div>
        </div> <!--End sub_header -->

        <div class="container_gray_bg">
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="apply_online.html#">Home</a></li>
                        <li><a href="apply_online.html#">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
            </div><!-- Position -->
            <div class="container margin_60">
                <div class="row">

                    <div class="col-md-9">
                        <div class="box_style_1">
                            <form action="http://www.ansonika.com/atena/apply_online.php" id="apply_online" method="POST">
                                <div class="indent_title_in">
                                    <i class="pe-7s-user"></i>
                                    <h3>Personal details</h3>
                                    <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                                </div>
                                <div class="wrapper_indent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"  >
                                                <label>First name</label>
                                                <input type="text" class="form-control styled required" id="name_apply" name="name_apply"  placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control styled required" id="lastname_apply" name="lastname_apply" placeholder="Last name">
                                            </div>
                                        </div>
                                    </div><!-- End row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control styled required" id="email_apply" name="email_apply" placeholder="youremail@domain.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control styled required" id="phone_apply" name="phone_apply" placeholder="+0043 XXX XXXXX">
                                            </div>
                                        </div>
                                    </div><!-- End row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth</label>
                                                <input type="text" class="form-control styled required" id="birth_apply" name="birth_apply"  placeholder="dd/mm/year">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label><br>
                                                <div class="radio_inline">
                                                    <input type="radio" name="gender_apply" id="gender_apply_male" class="required" value="Male"><label style="margin-right:20px;">Male</label>
                                                    <input type="radio" name="gender_apply" id="gender_apply_female" class="required" value="Female"><label>Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End row -->
                                </div>
                                <hr class="styled_2">
                                <div class="indent_title_in">
                                    <i class="pe-7s-map-marker"></i>
                                    <h3>Address</h3>
                                    <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                                </div>
                                <div class="wrapper_indent">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address line</label>
                                                <input type="text" class="form-control styled required" id="address_apply" name="address_apply" placeholder="Your full address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control styled required" id="town_apply" name="town_apply" placeholder="Town">
                                            </div>
                                        </div>
                                    </div><!-- End row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Country</label>
                                            <div class="styled-select">
                                                <select class="form-control required" name="country_apply" id="country_apply" >
                                                    <option value="" selected>Select your country</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="Asia">Asia</option>
                                                    <option value="North America">North America</option>
                                                    <option value="South America">South America</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control styled required" id="postal_code_apply" name="postal_code_apply" placeholder="001238">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr class="styled_2">
                                <div class="indent_title_in">
                                    <i class="pe-7s-study"></i>
                                    <h3>Course preferences</h3>
                                    <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                                </div>
                                <div class="wrapper_indent">
                                    <div class="row list_courses_apply">
                                        <div class="col-md-4">
                                            <h4>Diploma courses</h4>
                                            <ul>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="mathematics_apply" value="Mathematics diploma" required minlength="1">Mathematics</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="sciences_apply" value="Sciences diploma">Sciences</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="litterature_apply" value="Litterature diploma">Litterature</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="arts_apply" value="Arts diploma">Arts</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="music_apply" value="Music diploma">Music</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Graduate courses</h4>
                                            <ul>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="engineering_apply" value="Engineering graduate">Engineering</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="biology_apply" value="Biology graduate">Biology</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="psycology_apply" value="Psycology graduate">Psycology</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="economy_apply" value="Economy graduate">Economy</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="architecture_apply" value="Architecture graduate">Architecture</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Master courses</h4>
                                            <ul>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="it_apply" value="Information tecnology graduate">Information tecnology</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="digital_apply" value="Dgital media graduate">Digital media</label>
                                                </li>
                                                <li>
                                                    <label><input type="checkbox" name="apply_course[]" id="sculpture_apply" value="Sculpture graduate">Sculpture</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                                <hr class="styled_2">

                                <div class="wrapper_indent">
                                    <div class="form-group">
                                        <input type="checkbox" name="policy_terms" id="policy_terms" class="required" value="Yes"><label>I accept <a href="apply_online.html#0">terms and conditions</a> and general policy.</label>
                                    </div>
                                    <p><button type="submit"  class="button">Submit</button></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <h4><strong>How to apply</strong></h4>
                        <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum.</p>

                        <div class="box_side"><h5>By Phone</h5> <i class="icon-phone"></i>
                            <p> + 0043 848293 43<br><small>Monday to Friday 9.00am - 6.00pm</small></p>
                        </div>

                        <div class="box_side"><h5>By Postal Mail</h5> <i class="icon_pencil-edit"></i>
                            <p><a href="apply_online.html#0"><strong>Download the application form</strong></a>,<br> and send it to this address:<br><br><em>4 West 31st Street New York<br>
                                    10001 United States</em></p>
                        </div>
                        <hr class="styled">
                        <div class="box_side"><h4>Plan a visit</h4> <i class="icon_pencil-edit"></i>
                            <p>Per eu esse deleniti scripserit, sed ut nihil inimicus sadipscing. Eu iusto ignota officiis sit, nullam ullamcorper eam ut. </p>
                            <a href="apply_online.html#0" class="button small">Plan a visit</a>
                        </div>

                    </div>
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
