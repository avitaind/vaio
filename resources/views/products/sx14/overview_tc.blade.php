@extends('layout.app')

@section('title', 'VAIO SX14')

@section('product_nav')
    @include('products.sx14.product_nav')
@stop

@section('content')
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
			<a href="javascript:void(0);" target="_blank"  class="swiper-slide">
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/sx14/SX14_tc.jpg)">
                            <div class="main-banner" title=""></div>
                        </div>
                    </a>
    </div>
</section>
@push('css')

    <style>
        .cms-banner:before {
            padding-top: 37.51%;
        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-5 .main-banner {
            background-image: url(/images/sx14/SX14_tc.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/sx14/SX14-2_tc.jpg);
            }
        }
		
		/* CSS for SX14 images */
		.mb_px-10 {
			padding: 0px 0px 0px 0px;
		}
		.sx14_bg1 {
			background-image: url(/images/sx14/sx14_bg01.jpg);
			height:550px;
		}
		.sx14_bg2 {
			background-image: url(/images/sx14/sx14_bg02.jpg);
			height:450px;

		}

       .mb_only {
				display:none;
        }
       .pc_only {
				display:block;
        }

        @media(max-width: 991px) {
		.mb_px-10 {
			padding: 10px 0px 10px 0px;
		}
			.sx14_bg1 {
			background-color:#000;
			background-image: url();
			}
			.sx14_bg2 {
			background-color:#000;
			background-image: url();
			}
            .pc_only {
				display:none;
            }
            .mb_only {
				display:block;
            }
        }

    </style>

@endpush
<!--- Banner end here------------------------------------>

<!---Page content here--------------------------------------------->
	<section class="pt-section d-flex flex-wrap text-center text-white p-0 sx14_bg1">
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">VAIO SX14</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">性能更強、屏幕更大、連接性更廣、耐用性更高，商務效能全面提升</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mb_only" >
                        <img src="/images/sx14/sx14_bg01B.jpg" alt="">
            	</div>
    </section>
<!------------------TAB Menu 1---------------------------------------------->   
    <section id="vaio-product mb_px-10">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>性能超卓</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>精巧設計</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>方便隨行</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>品質保證</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   
	<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-1" >
                <div class="col-12 col-lg-6 order-2 order-lg-1 px-0" >
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/sx14/sx14_pic01.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                     <div class="selling-pt-sm active px-3"><strong>性能超卓</strong></div>
                        <h2 class="pt-title mt-4">色彩極致</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper-lg mx-auto">                            
						<p class="pt-content-title mx-auto">超高清畫面</p>						
                      <p class="pt-content text-left">
                            VAIO SX14配備14吋超窄邊框顯示屏，屏幕內容一覽無遺。顯示屏採用4K超高清技術，就連工作中都能讓你感受清晰亮麗的畫面。
                        </p>
                        </div>
                    </div>
                </div>
    </section>
	<section class="pt-section d-flex flex-wrap text-center text-white p-0 sx14_bg2">
        <div class="container">
                <div class="col-12 col-lg-12 py-5 order-2 order-lg-2" >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">性能超卓</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">   
						<p class="pt-content-title mx-auto">表現出類拔萃</p>						
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">配備第八代Intel® Core<sup>TM</sup> Whiskey Lake四核處理器，配合VAIO TruePerformance技術，性能更顯超卓。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 rect-banner-wrapper px-0 mb_only">
                    <div class="rect-banner" style="background-image: url(/images/sx14/sx14_bg02.jpg);"></div>
                </div>
            	</div>
        </div>
    </section>

<!---------------------------------------------------------------->   

	<section class="pt-section d-flex flex-wrap text-center text-white p-0" style="background-color:#000; ">
            <div class="container">
                <div class="col-12 col-lg-12 py-5 order-1 order-lg-2" >
                        <img src="/images/sx14/vaio-sx14-pdp-true-performance-min.png" alt="">
            	</div>
            </div>
                <div class="col-12 col-lg-6 " >
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <div class="pt-content-wrapper-lg mx-auto">   
						<p class="pt-content-title mx-auto">甚麼是VAIO TruePerformance？</p>						
                            <p class="pt-content mx-auto" style="color: #fff; text-align:left;">Intel處理器，包括VAIO採用的Core i7，均採用Intel®渦輪加速技術 2.0，可提高電腦的尖峰負載效能，而電腦維持在最高性能的時間長短會受到耗電量及溫度限制，性能亦隨之受影響。VAIO TruePerformance技術則提高CPU功率限制，並加強散熱效率，確保處理器能長時間高效而穩定運作。</p> 
<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem; color:#ccc">
* 概念圖。在特定操作條件下實際性能可能出現差異。</p>  
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 " >
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/sx14/vaio-sx14-pdp-true-performance-animated-min.gif" alt="">
                    </div>
                </div>    
    </section>
<!---------------------------------------------------------------->   

	<section class="pt-section d-flex flex-wrap text-center p-0" >
                <div class="col-12 col-lg-4 rect-banner-wrapper px-0 pc_only">
                    <div class="rect-banner" style="background-image: url(/images/sx14/vaio-sx14-pdp-fingerprint-scan.jpg);"></div>
                </div>
                <div class="col-12 col-lg-8 " style="background-color: #ddd;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">安全可靠</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content-title mb-0 mt-4">謝絕惡意入侵</p>
                            <p class="pt-content mx-auto" >VAIO SX14內置全新指紋識別器，助你彈指之間安全登入。如此嚴密的保安設計能杜絕一切惡意入侵。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 rect-banner-wrapper px-0 mb_only">
                    <div class="rect-banner" style="background-image: url(/images/sx14/vaio-sx14-pdp-fingerprint-scan.jpg);"></div>
                </div>
	</section>


<!------------------TAB Menu---------------------------------------------->   
    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>性能超卓</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>精巧設計</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>方便隨行</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>品質保證</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   

<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-2">
                <div class="col-12 col-lg-6">
                   <img src="/images/sx14/img_main2.jpg" alt="">
                </div>

                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                    
                    <div class="selling-pt-sm active px-3">精巧設計</div>
<!---------------------------------------------------------------->                    
                    <h2 class="pt-title mt-4">結構堅固</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
						<p class="pt-content-title mx-auto">一如既往堅固耐用</p>						
                      <p class="pt-content text-left">機身以UD碳纖物料打造，並有支架加固，貫徹VAIO產品堅固耐用的特點。</p>
                    </div>

<!---------------------------------------------------------------->                    
                    <h2 class="pt-title mt-4">品質保證</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
						<p class="pt-content-title mx-auto">出品完美無瑕</p>						
                      <p class="pt-content text-left">每部VAIO SX14均由日本長野縣的VAIO總部生產，精準規格無庸置疑。</p>
                    </div>

                    </div>
                </div>
                
            </section>
            
<!------------------TAB Menu 3---------------------------------------------->   
    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>性能超卓</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>精巧設計</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>方便隨行</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>品質保證</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   

            <section class="pt-section text-center" id="pt-3">
                <div class="container">
					 <div class="selling-pt-sm active px-3">方便隨行</div>
<!---------------------------------------------------------------->                    
                    <h2 class="pt-title mt-4">輕鬆連接</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
						<p class="pt-content-title mx-auto">連接埠一應俱全</p>						
                      <p class="pt-content text-left">VAIO SX14內置USB Type-C<sup>TM</sup>連接埠、3個USB連接埠、HDMI插位、VGA輸出及LAN連接埠，你無需再額外攜帶外置轉駁器。</p>
                      
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">SD咭槽</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">USB (3.1)</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">USB Type-C<sup>TM</sup></div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">HDMI</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">LAN</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">VGA</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">交流電源</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">保安鎖</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">USB (3.0)</div>
                    <div class="px-3" style="border: 1px solid #808090; display: inline-block; margin:3px;">耳機插孔</div>
                    </div>
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/sx14/vaio-sx14-top.jpg" alt="">
                    </div>

<!---------------------------------------------------------------->                    
				</div>
            </section>
            
	
    <section class="pt-section d-flex flex-wrap text-center p-0" id="pt-4">
                <div class="col-12 col-lg-8 " style="background-color: #fff;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <h2 class="pt-title mt-4">方便隨行</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper-lg mx-auto">                            
                            <p class="pt-content-title mb-0 mt-4">屏幕偌大但保持輕巧</p>
                            <p class="pt-content mx-auto" >VAIO SX14屏幕比過往型號更大，而機身厚度僅15mm及重量僅1.05kg。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 rect-banner-wrapper px-0">
                    <div class="rect-banner" style="background-image: url(/images/sx14/vaio-sx14-pdp-performance-lightweight-min.jpg);"></div>
                </div>
	</section>
    
<!------------------TAB Menu---------------------------------------------->   
    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
               <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>性能超卓</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>精巧設計</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>方便隨行</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>品質保證</h2>
                </a>
            </div>
       </div>
	</section>
<!---------------------------------------------------------------->   

            <section class="pt-section text-center" id="pt-4">
                <div class="container">
					 <div class="selling-pt-sm active px-3">品質保證</div>
                    <h2 class="pt-title mt-4">VAIO：對品質要求的完美演繹</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
                      <p class="pt-content text-left">每一部SX14均於日本長野縣•安曇野市的VAIO總部生產，並由專業技術人員進行嚴謹的品質檢查工序後才赴運上市。</p>
                      <p class="pt-content text-left">此一確保最高品質的最後工序，我們將之命名為「安曇野FINISH」，是VAIO對最高品質要求的完美釋義。</p>                            
                    </div>
                    <div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/pt01-1.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan"><img src="/images/pt-pic/pt01-2.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan">
                    </div>
                    <a href="https://hk.vaio.com/tc/quality" class="btn pink-btn mt-3">了解更多</a>
				</div>
            </section>
            
	
            <section class="pt-section text-center">
                <div class="container">
					 <div class="selling-pt-sm active px-3">品質保證</div>
                    <h2 class="pt-title mt-4">「安曇野 FINISH」</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
                      <p class="pt-content-title mb-0 mt-4">本著匠心精神，追求最高品質，精益求精，直至完工。</p>
                      <p class="pt-content text-left">VAIO株式會社坐落於日本長野縣安曇野，作為一家日本的筆記本電腦制造商，對產品的品質有着不懈地追求。安曇野沉淀了VAIO豊富的歷史與生產經驗，擁有令人自豪的高科技技術，也擁有具備匠心精神的人才。</p>                            
                    </div>
                    <a href="{{ route('quality.azumino_finish') }}" class="btn pink-btn mt-3">了解更多</a>
				</div>
            </section>
    

<!---------Disclaimer------------------------------------------------------->                    




    <div class="support-center-wrap">
        <div class="container">

            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    <p class="spec-item-name" style="font-size: 0.8rem;">
                        Intel, Intel圖誌, the Intel Inside圖誌和Intel Core均是Intel Corporation在美國或其他國家的商標。<br>
                        "VAIO"商標使用權是獲得VAIO Corporation授權使用。
                    </p>

                </div>
            </div>
        </div>
    </div>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop
