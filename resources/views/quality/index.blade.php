@extends('layout.app')

@section('title', __('common.nav.quality.tests'))

@section('content')
    <section class="top-nav-padding" id="quality">
        <div class="container py-5">
            <h1 class="page-title mb-5">@lang('common.quality.title')</h1>


            <ul class="d-flex no-gutters mb-5 nav nav-tabs">
                <li class="nav-item col-3">
                    <a class="tab-toggler active p-3 py-md-4 navTab_button" data-toggle="tab" role="tab" href="#general-tab">
                        @lang('common.quality.general_test')
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="tab-toggler p-3 py-md-4 navTab_button" data-toggle="tab" role="tab" href="#s11-13-tab">
                        @lang('common.quality.product_test')
                    </a>
                </li>
                 <li class="nav-item col-3">
                    <a class="tab-toggler p-3 py-md-4 navTab_button" data-toggle="tab" role="tab" href="#sx14-tab">
                        @lang('common.quality.product_sx_14_test')
                    </a>
                </li>
                  <li class="nav-item col-3">
                    <a class="tab-toggler p-3 py-md-4 navTab_button" data-toggle="tab" role="tab" href="#a12-tab">
                        @lang('common.quality.product_a_12_test')
                    </a>
                </li>
            </ul>

            <div class="tab-content">

                <!-- General Tab -->
                <div class="tab-pane active" id="general-tab">

                    <div class="content-title mb-3">@lang('common.quality.sub_title')</div>

                    <p class="content-text ">@lang('common.quality.general_test_intro')</p>



                    <div class="row">

                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/xXkyhDRVvGQ?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_9.title')</div>
                            @lang('common.quality.general.card_9.content')
                        </div>

                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/cHrcRjTsnzw?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_2.title')</div>
                            @lang('common.quality.general.card_2.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/QdEDok79J14?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_1.title')</div>
                            @lang('common.quality.general.card_1.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/F3yaHRN-Nuo?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_4.title')</div>
                            @lang('common.quality.general.card_4.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/08TkgoHeq2Q?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_5.title')</div>
                            @lang('common.quality.general.card_5.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/Yvh-k8dSRE8?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_8.title')</div>
                            @lang('common.quality.general.card_8.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/71kiAKvpXZY?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_3.title')</div>
                                @lang('common.quality.general.card_3.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/tA6jpQaTEqc?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_6.title')</div>
                                @lang('common.quality.general.card_6.content')
                        </div>



                        <div class="col-12 quality-item px-0 mb-5 pb-4 pb-lg-0">

                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/H_jVbpQyDQo?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.general.card_7.title')</div>
                                @lang('common.quality.general.card_7.content')
                        </div>
                        </div>
 
                    </div>
                    
                    <div class="row">
                        <div class="row no-gutters my-3 col-12 mx-auto ml-0">
                            <p class="spec-item-name" style="font-size: 0.8rem;">
                            @lang('common.quality.general.card_10.content_remark')</p>
                        </div>
                    </div>
                </div>

                <!-- S11 S13 Test Tab -->
                <div class="tab-pane" id="s11-13-tab">

                    <div class="content-title mb-3">@lang('common.quality.product_test')</div>

                    <p class="content-text ">@lang('common.quality.product_test_intro')</p>

                    <div class="row">
                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BN3XCKDHBU0?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_1.title')</div>
                            @lang('common.quality.product.card_1.content')
                        </div>

                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-DQwrDm8jmI?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_2.title')</div>
                            @lang('common.quality.product.card_2.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dqTI4zxXDlA?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_3.title')</div>
                            @lang('common.quality.product.card_3.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I6ob6z6vcd0?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_7.title')</div>
                            @lang('common.quality.product.card_7.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bb9ww4ZcgCc?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_5.title')</div>
                            @lang('common.quality.product.card_5.content')
                        </div>
                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w19Vc1TGGfI?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_6.title')</div>
                            @lang('common.quality.product.card_6.content')
                        </div>


                        <div class="col-12 quality-item px-0 mb-5 pb-4 pb-lg-0">
                            <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kUeRPz_OjKM?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_4.title')</div>
                                @lang('common.quality.product.card_4.content')
                            </div>
                        </div>

                    </div><!--row-->
                    
                </div><!-- End S11 S13 Test Tab -->
                
                
                
                
                 <!-- SX14 Test Tab -->
                <div class="tab-pane" id="sx14-tab">

                    <div class="content-title mb-3">@lang('common.quality.product_sx_14_test')</div>

                    <p class="content-text ">@lang('common.quality.product_sx_14_test_intro')</p>

                    <div class="row">
                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BN3XCKDHBU0?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_1.title')</div>
                            @lang('common.quality.product.card_1.content')
                        </div>
 
                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dqTI4zxXDlA?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.sx14_card_3.title')</div>
                            @lang('common.quality.product.sx14_card_3.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I6ob6z6vcd0?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_7.title')</div>
                            @lang('common.quality.product.card_7.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bb9ww4ZcgCc?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_5.title')</div>
                            @lang('common.quality.product.card_5.content')
                        </div>
                        
                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w19Vc1TGGfI?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_6.title')</div>
                            @lang('common.quality.product.card_6.content')
                        </div>


                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0"> 
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QJ0aDcXObjI?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_4.title')</div>
                                @lang('common.quality.product.card_4.content') 
                        </div>
                        
                        
                         <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-DQwrDm8jmI?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_8.title')</div>
                            @lang('common.quality.product.card_8.content')
                        </div>


                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0"> 
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OTZtquFBRMQ?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_9.title')</div>
                                @lang('common.quality.product.card_9.content') 
                        </div>

                    </div><!--row-->
                    
                    <div class="row">
                        <div class="row no-gutters my-3 col-12 mx-auto ml-0">
                            <p class="spec-item-name" style="font-size: 0.8rem;">
                            @lang('common.quality.general.card_10.content_remark')</p>
                        </div>
                    </div>
                    
                </div><!-- End SX14 Test Tab -->
                
                
                 
                 <!-- A12 Test Tab -->
                <div class="tab-pane" id="a12-tab">

                    <div class="content-title mb-3">@lang('common.quality.product_a_12_sub_title')</div>

                    <p class="content-text ">@lang('common.quality.product_a_12_test_intro')</p>

                    <div class="row">
                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Nio7-GP0Qdc?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_10.title')</div>
                            @lang('common.quality.product.card_10.content')
                        </div>
 
                        <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/H5UgbE5GtZQ?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_11.title')</div>
                            @lang('common.quality.product.card_11.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GreHL7n9ot8?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_12.title')</div>
                            @lang('common.quality.product.card_12.content')
                        </div>

                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MbHH7s8LGkM?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_13.title')</div>
                            @lang('common.quality.product.card_13.content')
                        </div>
                        
                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/99yHGos-xjI?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_14.title')</div>
                            @lang('common.quality.product.card_14.content')
                        </div>


                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0"> 
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9LE8oVRLlG8?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_15.title')</div>
                                @lang('common.quality.product.card_15.content') 
                        </div>
                        
                        
                         <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/00ajPX6IoN4?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_16.title')</div>
                            @lang('common.quality.product.card_16.content')
                        </div>


                        <div class="col-12 col-lg-6 quality-item mb-5 pb-4 pb-lg-0"> 
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-6dNrvtirNk?rel=0;showinfo=0;enablejsapi=1" allow="encrypted-media" allowfullscreen frameborder="0"></iframe>
                                </div>
                                <div class="content-title mt-5 mb-4">@lang('common.quality.product.card_17.title')</div>
                                @lang('common.quality.product.card_17.content') 
                        </div>

                    </div><!--row-->
                    
                     <div class="row">
                        <div class="row no-gutters my-3 col-12 mx-auto ml-0">
                            <p class="spec-item-name" style="font-size: 0.8rem;">
                            @lang('common.quality.general.card_10.content_remark')</p>
                        </div>
                    </div>
                    
                </div><!-- End A12 Test Tab -->
                
                
                
            </div>

        </div>
        
        <div class="support-center-wrap">
            <div class="container">
    
                <div class="row  ">
                    <div class="row no-gutters my-3 col-12 mx-auto ml-0">
                        <p class="spec-item-name" style="font-size: 0.8rem;">
                        @lang('common.quality.general.card_10.content')</p>
                    </div>
                </div>
            </div>
        </div>
     </section>
@stop
