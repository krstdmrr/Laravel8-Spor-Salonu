@php
$setting= \App\Http\Controllers\HomeController::getSetting();
@endphp

<!-- footer_start  -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets')}}/img/footer_logo.png" alt="">
                            </a>
                        </div>
                        <h3><b>Adress</b></h3>
                        {{$setting->company}} <br>
                        {{$setting->adress}} <br>
                        <strong>Phone: </strong>{{$setting->phone}} <br>
                        <strong>Fax: </strong>{{$setting->fax}} <br>
                        <strong>Email: </strong>{{$setting->email}} <br>

                        <div class="socail_links">
                            <ul>
                                @if($setting->facebook !=null)
                                <li>
                                    <a href="{{$setting->facebook}}" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                @endif
                                @if($setting->twitter !=null)
                                <li>
                                    <a href="{{$setting->twitter}}" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                @endif
                                @if($setting->instagram !=null)
                                <li>
                                    <a href="{{$setting->instagram}}" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                @endif
                                @if($setting->youtube !=null)
                                <li>
                                    <a href="{{$setting->youtube}}" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul class="links">
                            <li><a href="#">Pricing</a></li>
                            <li><a href="{{route('aboutus')}}">About</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="{{route('admin_login')}}">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->company}}
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end  -->
<!-- JS here -->
<script src="{{asset('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/ajax-form.js"></script>
<script src="{{asset('assets')}}/js/waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets')}}/js/scrollIt.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/wow.min.js"></script>
<script src="{{asset('assets')}}/js/gijgo.min.js"></script>
<script src="{{asset('assets')}}/js/nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/plugins.js"></script>



<!--contact js-->
<script src="{{asset('assets')}}/js/contact.js"></script>
<script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.form.js"></script>
<script src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('assets')}}/js/mail-script.js"></script>


<script src="{{asset('assets')}}/js/main.js"></script>
