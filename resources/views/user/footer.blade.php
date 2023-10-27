
<footer>
    <div class="container">
        <div class="row ">
            <div class="col-md-3 col-sm-3">
                <p id="logo_footer">
                    <img src="{{asset('img/logos/Asset 3.png')}}" width="140" height="30" alt="Atena" data-retina="true">
                </p>
            </div>
            <div class="col-md-3 col-sm-3">
                <h4>Menyu</h4>
                <ul>
                    <li><a href="{{route('dashboard')}}">ANA SƏHİFƏ</a></li>
                    <li><a href="{{route('about-page')}}">HAQQIMIZDA</a></li>
                    <li><a href="{{route('course')}}">KURSLAR</a></li>
                    <li><a href="{{route('staff')}}">HEYƏT</a></li>
                    <li><a href="{{route('blog')}}">BLOQ</a></li>
                    <li><a href="{{route('contact')}}">ƏLAQƏ</a></li>
                </ul>
            </div>
{{--            <div class="col-md-3 col-sm-3">--}}
{{--                <h4>Academic</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="{{route('dashboard')}}">Plans of study</a></li>--}}
{{--                    <li><a href="{{route('dashboard')}}">Courses</a></li>--}}
{{--                    <li><a href="{{route('dashboard')}}">Admissions</a></li>--}}
{{--                    <li><a href="{{route('dashboard')}}">Staff</a></li>--}}
{{--                    <li><a href="{{route('dashboard')}}">Students</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="col-md-3 col-sm-3">
                <h4>Əlaqə</h4>
                <ul id="contacts_footer">
                    <li>Əlaqə nömrəsi - <a href="tel://033284322">+0332 84322456</a></li>
                    <li>E-poçt - <a href="{{route('dashboard')}}">info@atena.com</a></li>
                </ul>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->
<div id="copy">
    <div class="container">
        © SparkX 2023 - All rights reserved.
    </div>
</div><!-- End copy -->



<!-- Login modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="{{route('dashboard')}}" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="{{route('dashboard')}}" class="popup-form" id="myLogin">
                <input type="text" class="form-control form-white" placeholder="Username">
                <input type="text" class="form-control form-white" placeholder="Password">
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_1" id="check_1" name="check_1" />
                        <label for="check_1"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Register modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="{{route('dashboard')}}" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="{{route('dashboard')}}" class="popup-form" id="myRegister">
                <input type="text" class="form-control form-white" placeholder="Name">
                <input type="text" class="form-control form-white" placeholder="Last Name">
                <input type="email" class="form-control form-white" placeholder="Email">
                <input type="text" class="form-control form-white" placeholder="Password">
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- Search modal -->
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" >
        <button type="submit" class="button">Search</button>
    </form>
</div>

<!-- Common scripts -->
<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/common_scripts_min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>

<!-- Specific scripts -->
<script src="{{asset('layerslider/js/greensock.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1170,
            skinsPath: '{{asset('layerslider/skins/')}}'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
<script src="{{asset('js/tabs.js')}}"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
</body>
</html>
