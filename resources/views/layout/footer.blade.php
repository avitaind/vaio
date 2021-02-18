<footer class="footer">
    <div class="footer-info py-0 pt-md-5">
        <div class="container-fluid px-5">
            <div class="row pb-md-5">
                <div class="col-12 col-md-2 p-0 pl-2">
                        <span class="d-inline-block navbar-brand hidden-sm-down">
                            <img src="/images/vaio.png">
                        </span>
                </div>
                <div class="col-12 col-md-8 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="col-4 mr-3 ml-md-0 small-lsm-little">

                            @if( $store_enabled )

                                <div class="footer-content col-12 p-0 mb-3">
                                    <div class="footer-title col-12 p-0">
                                        <a href="{{ $store_url }}" class="sub-title mt-1 mt-md-0 mb-1 buy-now" rel="noreferrer nofollow"  target="_blank" style="color: rgb(255, 160, 0);">@lang('common.nav.buy_now')</a>
                                    </div>
                                </div>
                            @endif
                        
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <div class="sub-title mt-1 mt-md-0 mb-1 text-white">@lang('common.nav.product.title')</div>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('product.overview_e15') }}" class=""> @lang('common.nav.product.vaio_e15')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('product.overview_se14') }}" class=""> @lang('common.nav.product.vaio_s14')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('product.overview_fuji_z') }}" class=""> @lang('common.nav.product.vaio_fuji_z')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('product.overview_signature_z141') }}" class=""> @lang('common.nav.product.vaio_signature_z141')</a>
                                </div>
                             <!---
                                <div class="footer-item col-12 p-0 my-2">
                                        <a href="{{ route('product.overview_fuji-z') }}" class="" > @lang('common.nav.product.vaio_fuji-z')</a>
                                </div>
                                ---->
                               
                            </div>
                            <!---
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <a href="{{ route('news.news') }}" class=""><div class="sub-title my-1 text-white">@lang('common.nav.offer')</div></a>
                                </div>
                            </div>
                            --->
                            {{--<div class="footer-content col-12 p-0 mb-3">--}}
                                {{--<div class="footer-title col-12 p-0">--}}
                                    {{--<a href="{{ route('news.life') }}" class=""><div class="sub-title my-1 text-white">@lang('common.nav.life')</div></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                       
                        <div class="col-4 mr-3 ml-md-0 small-lsm-little">
                              
      

                          <!---
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <div class="sub-title mt-1 mt-md-0 mb-1 text-white">@lang('common.nav.quality.title')</div>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('quality.azumino_finish') }}" class="">@lang('common.nav.quality.azumino_finish')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('quality') }}" class="">@lang('common.nav.quality.tests')</a>
                                </div>
                            </div>
                            --->
                         
                            <div class="footer-content col-12 p-0 mb-3">
                                <div class="footer-title col-12 p-0">
                                    <div class="sub-title mt-1 mt-md-0 mb-1 text-white">@lang('common.nav.support.title')</div>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('support') }}#support-center" class="">@lang('common.nav.support.service_center')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('support') }}#faq" class="">@lang('common.nav.support.faq')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('support') }}#driver_n_tools" class="">@lang('common.nav.support.tools')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('support') }}#support-warranty" class="">@lang('common.nav.support.warranty')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-2">
                                    <a href="{{ route('support.repair_tnc') }}" class="">@lang('common.nav.support.terms_cond')</a>
                                </div>
                            </div>
                      
                        </div>
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
                                    <a href="{{ route('where_to_buy') }}" class="" ><div class="sub-title my-1 text-white">@lang('common.nav.where_to_buy')</div></a>
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

                    <div class="footer-md col-12 p-0 hidden-sm-up">
                   
                        <div class="col-12 p-0">
                      
                                <div class="col-12 p-0">
                                {{-- 
                                <div class="footer-title footer-product d-flex">
                                    <a href="{{ route('product.overview') }}" class="sub-title my-1 text-white">@lang('common.nav.product.title')</a>
                                </div>
                            </div>
                            --}}
                               <div class="col-12 p-0">
                                 <a class="footer-title footer-product d-flex" data-toggle="collapse" href="#footerProduct" aria-expanded="false" aria-controls="footerProduct">
                                    <div class="sub-title my-1 text-white">@lang('common.nav.product.title')</div>
                                    <i class="fa fa-chevron-down text-white" aria-hidden="true"></i>
                                </a>
                            </div>
                              <div class="collapse" id="footerProduct">
                                <div class="footer-item col-12 p-0 my-3">
                                    <a href="{{ route('product.overview_e15') }}" class=""> @lang('common.nav.product.vaio_e15')</a>
                                </div>
                                <div class="footer-item col-12 p-0 my-3">
                                    <a href="{{ route('product.overview_se14') }}" class=""> @lang('common.nav.product.vaio_s14')</a>
                                </div>
                               <!---
                                <div class="footer-item col-12 p-0 my-3">
                                        <a href="{{ route('product.overview_fuji-z') }}" class="" > @lang('common.nav.product.vaio_fuji-z')</a>
                                </div>
                                 --->   
                            </div>
                        </div>
                        <!----        
                            <div class="col-12 p-0">
                                <div class="col-12 p-0">
                                    <div class="footer-title footer-offer d-flex">
                                        <a href="{{ route('news.news') }}" class="sub-title my-1 text-white">@lang('common.nav.offer')</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-12 p-0">
                                <div class="col-12 p-0">
                                    <div class="footer-title footer-life d-flex">
                                        <a href="{{ route('news.life') }}" class="sub-title my-1 text-white">@lang('common.nav.life')</a>
                                        {{-- <i class="fa fa-chevron-down text-white" aria-hidden="true"></i> --}}
                                    </div>
                                </div>
                            </div> 
                            
                           

                            
                            <div class="col-12 p-0">
                                <div class="col-12 p-0">
                                    <a class="footer-title footer-quality d-flex"  data-toggle="collapse" href="#footerQuality" aria-expanded="false" aria-controls="footerQuality">
                                        <div class="sub-title my-1 text-white">@lang('common.nav.quality.title')</div>
                                        <i class="fa fa-chevron-down text-white" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="collapse" id="footerQuality">
                                    <div class="footer-item col-12 my-3 p-0">
                                        <a href="{{ route('quality.azumino_finish') }}" class="">@lang('common.nav.quality.azumino_finish')</a>
                                    </div>
                                    <div class="footer-item col-12 my-3 p-0">
                                        <a href="{{ route('quality') }}" class="">@lang('common.nav.quality.tests')</a>
                                    </div>
                                </div>
                            </div>
                            ---->
                            <div class="col-12 p-0">
                                <div class="col-12 p-0">
                                    <a class="footer-title  footer-support d-flex"  data-toggle="collapse" href="#footerSupport" aria-expanded="false" aria-controls="footerSupport">
                                        <div class="sub-title my-1 text-white">@lang('common.nav.support.title')</div>
                                        <i class="fa fa-chevron-down text-white" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="collapse" id="footerSupport">
                                    <div class="footer-item col-12 p-0 my-3">
                                        <a href="{{ route('support') }}#support-center" class="">@lang('common.nav.support.service_center')</a>
                                    </div>
                                    <div class="footer-item col-12 p-0 my-3">
                                        <a href="{{ route('support') }}#faq" class="">@lang('common.nav.support.faq')</a>
                                    </div>
                                    <div class="footer-item col-12 p-0 my-3">
                                        <a href="{{ route('support') }}#driver_n_tools" class="">@lang('common.nav.support.tools')</a>
                                    </div>
                                    <div class="footer-item col-12 p-0 my-3">
                                        <a href="{{ route('support') }}#support-warranty" class="">@lang('common.nav.support.warranty')</a>
                                    </div>
                                    <div class="footer-item col-12 p-0 my-3">
                                        <a href="{{ route('support.repair_tnc') }}" class="">@lang('common.nav.support.terms_cond')</a>
                                    </div>
                                </div>
                            </div>

                           
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
                                        <a href="{{ route('where_to_buy') }}" class="footer-title  footer-where d-flex">
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
                    <a class="ml-0 ml-md-3  pl-2 pl-lg-0" href="https://www.facebook.com/VAIOIndia/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="ml-0 ml-md-3  pl-2 pl-lg-0" href="https://www.instagram.com/vaioind/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a class="ml-0 ml-md-3  pl-2 pl-lg-0" href="https://twitter.com/vaioind/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="ml-0 ml-md-3  pl-2 pl-lg-0" href="https://www.youtube.com/channel/UCLP1mht0ajXrFHZT7ep4JGw" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
        <div class="footer-disclaimer py-3">
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 my-3 p-0" style="text-align: justify;">
                        <a style="color: inherit;" href="{{ route('privacy') }}">@lang('common.footer.policy_terms')</a>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 p-0"  style="text-align: justify;">
                        @lang('common.footer.policy_terms_content')
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-md-8 offset-md-2 my-3 p-0"  style="text-align: justify;">
                        <?php echo '© '.date('Y').' Nexstgo Company Ltd'; ?> 
                    </div>
                </div>
            </div>
        </div>
</footer>
