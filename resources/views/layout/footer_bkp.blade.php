<footer class="footer">
    <div class="footer-info py-0 pt-md-5">
        <div class="container-fluid px-5">
            <div class="row pb-md-5">
                <div class="col-12 col-md-2 p-0 pl-2">
                        <span class="d-inline-block navbar-brand hidden-sm-down">
                            <img src="/images/vaio.png">
                        </span>
                </div>
              

                <div class="col-12 col-md-8 py-3 py-md-0 text-center">
                    <div class="d-flex justify-content-between hidden-xs-down">
                   <!---
                        <div class="col-9">
                         <span class="demo">
                               Count Down <p id="demo"> </p> Stay Tuned!
                          </span>
                       
                        </div>
                    ---->
                     
                        <div class="col-4 mr-3 ml-md-0 small-lsm-little">
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <div class="sub-title mt-1 mt-md-0 mb-1 text-white">@lang('common.nav.about.title')</div>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('about_us') }}" class="">@lang('common.nav.about.title')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('news.news') }}" class="">@lang('common.nav.about.news')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('contact_us') }}" class="">@lang('common.nav.about.contact_us')</a>
                                </div>
                            </div>
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <a href="{{ route('where_to_buy') }}" class=""  target="_blank"><div class="sub-title my-1 text-white">@lang('common.nav.where_to_buy')</div></a>
                                </div>
                            </div>
                            {{--
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <div class="my-1 text-white">Business</div>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="#" class="">Business</a>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>

                    <!-- Mobile Footer -->
                    
                    <div class="footer-md col-12 p-0 hidden-sm-up" id="footerMain">
                       <div class="col-12 p-0">
                      <!---
                             <span class="demo">
                               Count Down <p id="demo"> </p> Stay Tuned!
                            </span>
                            ---->
                            <div class="col-12 p-0">
                                    <div class="col-12 p-0">
                                        <a class="footer-title  footer-about d-flex"  data-toggle="collapse" href="#footerAbout" aria-expanded="false" aria-controls="footerAbout">
                                            <div class="sub-title my-1 text-white">@lang('common.nav.about.title')</div>
                                            <i class="fa fa-chevron-down text-white" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="collapse" id="footerAbout">
                                        <div class="footer-item col-12 my-3 p-0">
                                            <a href="{{ route('about_us') }}" class="">@lang('common.nav.about.title')</a>

                                        </div>
                                        <div class="footer-item col-12 my-3 p-0">
                                            <a href="{{ route('news.news') }}" class="">@lang('common.nav.about.news')</a>
                                        </div>
                                        <div class="footer-item col-12 my-3 p-0">
                                            <a href="{{ route('contact_us') }}" class="">@lang('common.nav.about.contact_us')</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 p-0">
                                    <div class="col-12 p-0">
                                        <a href="{{ route('where_to_buy') }}"  target="_blank" class="footer-title  footer-where d-flex">
                                            <div class="sub-title my-1 text-white">@lang('common.nav.where_to_buy')</div>
                                            {{-- <i class="fa fa-chevron-down text-white" aria-hidden="true"></i> --}}
                                        </a>
                                    </div>
                                </div>



                                {{--
                                <div class="col-12 p-0">
                                    <div class="col-12 p-0">
                                        <div class="footer-title  footer-business d-flex"  data-toggle="collapse" href="#footerBusiness" aria-expanded="false" aria-controls="footerBusiness">
                                            <a class="my-1 text-white">Business</a>
                                            <i class="fa fa-chevron-down text-white" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="collapse" id="footerBusiness">
                                        <div class="footer-item col-12 my-3 p-0">
                                            <a href="#" class="">Business</a>
                                        </div>
                                    </div>
                                </div>
                                --}}

                            </div>
                            

                    </div>
                
                </div>
               
                <div class="col-12 col-md-2 pb-3 py-md-0 text-md-right text-center">
                    <h4 class="text-white">@lang('common.footer.follow_us')</h4>
                    <a class="ml-0 ml-md-auto pr-2 pr-lg-0" href="https://www.facebook.com/VAIOIndia/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="ml-0 ml-md-3  pl-2 pl-lg-0" href="https://www.instagram.com/vaioind/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                   
                </div>
         
            </div>
          
        </div>
          
        <div class="footer-disclaimer py-3">
        
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 my-3 p-0">
                        <a style="color: inherit;" href="{{ route('privacy') }}">@lang('common.footer.policy_terms')</a>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 p-0">
                        @lang('common.footer.policy_terms_content')
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 my-3 p-0">
                        <?php echo '© '.date('Y').' Nexstgo Company Ltd'; ?> 
                    </div>
                </div>
            </div>
        </div>
</footer>
