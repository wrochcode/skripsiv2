<!--hm-footer start-->
<section class="hm-footer">
    <div class="container">
        <div class="hm-footer-details">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title ">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{URL::asset('images/logo/SehatYokk.png')}}" alt="logo" />
                                </a>
                            </div><!-- /.logo-->
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-para">
                            <p>
                                {{ $company['mission']->value }}
                            </p>
                        </div><!--/.hm-foot-para-->
                        {{-- <div class="hm-foot-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><!--/li-->
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><!--/li-->
                            </ul><!--/ul-->
                        </div> --}}
                        <!--/.hm-foot-icon-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
                <div class=" col-md-2 col-sm-6 col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>Useful Links</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="footer-menu ">	  
                            <ul class="">
                                @foreach ($navbar as $item => $url)
                                    <li><a  href="{{ $url }}">{{ $item }}</a></li>
                                @endforeach
                                {{-- <li><a href="index.html" >Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Service</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact us</a></li>  --}}
                            </ul>
                        </div><!-- /.footer-menu-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
                <div class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>from the news</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-para-news">
                            <a href="blog_single.html">
                                The Pros and Cons of Starting an Online Business.
                            </a>
                            <span>12th June 2017</span>
                        </div><!--/.hm-para-news-->
                        <div class="footer-line">
                            <div class="border-bottom"></div>
                        </div>
                        <div class="hm-para-news">
                            <a href="blog_single.html">
                                The Pros and Cons of Starting an Online Business.
                            </a>
                            <span>12th June 2017</span>
                        </div><!--/.hm-para-news-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
                <div class=" col-md-3 col-sm-6  col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4> Our Newsletter</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-para">
                            <p class="para-news">
                                Subscribe to our newsletter to get the latest News and offers..
                            </p>
                        </div><!--/.hm-foot-para-->
                        <div class="hm-foot-email">
                            <div class="foot-email-box">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div><!--/.foot-email-box-->
                            <div class="foot-email-subscribe">
                                <button type="button" >go</button>
                            </div><!--/.foot-email-icon-->
                        </div><!--/.hm-foot-email-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.hm-footer-details-->
    </div><!--/.container-->

</section><!--/.hm-footer-details-->
<!--hm-footer end-->

<!-- footer-copyright start -->
<footer class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="foot-copyright pull-left">
                    <p>
                        &copy; All Rights Reserved. Designed and Developed by
                         <a href="https://www.themesine.com">ThemeSINE</a>
                    </p>
                </div><!--/.foot-copyright-->
            </div><!--/.col-->
            <div class="col-sm-5">
                <div class="foot-menu pull-right
                ">	  
                    <ul>
                        <li ><a href="#">legal</a></li>
                        <li ><a href="#">sitemap</a></li>
                        <li ><a href="#">privacy policy</a></li>
                    </ul>
                </div><!-- /.foot-menu-->
            </div><!--/.col-->
        </div><!--/.row-->
        <div id="scroll-Top">
            <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div><!--/.scroll-Top-->
    </div><!-- /.container-->

</footer><!-- /.footer-copyright-->
<!-- footer-copyright end -->