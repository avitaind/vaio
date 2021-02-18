@extends('layout.app')

@section('title', 'VAIO Z')

@section('product_nav')
    @include('products.z.product_nav')
@stop

@section('content')
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/z/vaio_z_kv_pc_tc.jpg)">
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
            background-image: url(/images/z/vaio_z_kv_pc_tc.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/z/vaio_z_kv_mo_tc.jpg);
            }
        }
		
		/* CSS for Z images */
		.mb_px-10 {
			padding: 0px 0px 0px 0px;
		} 

       .mb_only {
				display:none;
        }
       .pc_only {
				display:block;
        }
		
		
		h1{
			font-size: 3rem;
			font-weight: bolder;
			letter-spacing: 2px;
		}
		
		h3{
			font-weight: bold;
			color: #000;
		}
			
		
		.pt-title {
			font-size: 2.3rem;
			font-weight: bold; 
		}
		
		.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
			width: calc(100% - 60px);
		}
		
		.pt-container-m{
			padding: 45px;
		}
		
		
		.pt-container-s{
			padding: 30px;
		}
		
		
		
		.bg-grey{
			background-color: #f0f0f0;
		}
		
		.text-white{
			color: #fff  !imporant;
		}
		
		.box{
			border:1px solid #fff;
			padding: 30px;
		}
		
		.white-btn{
			border: 1px solid #fff;
			background-color: transparent;
			color: #fff;
			border-radius: 0;
			padding: 1rem 4rem;
		}
		
		.white-btn:hover{
			border: 1px solid #fff;
			background-color: transparent;
			color: #fff;
			opacity: 0.7;
		}
		
		.black-btn{
			border: 1px solid #000;
			background-color: transparent;
			color: #000;
			border-radius: 0;
			padding: 1rem 1.5rem;
		}
		
		.black-btn:hover{
			border: 1px solid #000;
			background-color: transparent;
			color: #000;
			opacity: 0.7;
		}
		

		
        @media(max-width: 991px) {
		.mb_px-10 {
			padding: 10px 0px 10px 0px;
		}
		 
            .pc_only {
				display:none;
            }
            .mb_only {
				display:block;
            }
			
			
			
			h1{
				font-size: 2rem;
				font-weight: bolder;
				letter-spacing: 1px;
			}
			
			.pt-title{
				font-size: 1.5rem; 
    			letter-spacing: 1px !important;
			}
			
			h3{
				font-size: 1.2rem;
			}
			
			.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
				width: calc(100% - 30px);
			}
			
			.py-5 {
				padding-top: 2rem!important;
				padding-bottom: 2rem!important;
			}
			
			h1.my-4{
				margin-top: 0rem!important;
    			margin-bottom: 0rem!important;
			}
			
			.black-btn{				
				padding: .5rem;
				font-size: 14px;
				letter-spacing: 0px;
				width: auto;
				min-width: auto;
				max-width: 100%;
				margin-bottom: 40px;
			}
			
			.box{ 
   				padding: 15px;
			}
			
			.pt-container-m{				
    			padding: 30px;
			}
		
			
        }

    </style>

@endpush 

<!--
	<section class="pt-section text-center py-5" style="background-color: #0b122e;" >
		<div class="container">
        <a href="https://vaio.nexstmall.com/zh_hk/vaio/sx14/vaio-sx14-14-inch-laptop-kachiiro-color-windows-10-pro-vaio-5th-anniversary-special-edition.html?utm_source=website&utm_medium=launch&utm_campaign=kachiiro&utm_content=buynow
" class="btn" style="color: #dbad7a !important; border: 1px solid; padding: 1rem 5rem;" target="_blank">立即購買勝色限定版</a>
		</div>                        
	</section>

-->


<!---Page content here--------------------------------------------->

	<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row"> 
			<div class="col-12 py-5 order-1 order-lg-2" >
				<h3 class="my-4 my-lg-3">挑戰極限﹒突破常規</h3>
				<h1 class="my-4 my-lg-3">VAIO<sub class="vtp">®</sub> Z 強勢登場</h1>

				<div class="pt-content-wrapper-lg mx-auto text-left mt-5"> 
					<p class="pt-content">
						機身以全碳纖3D立體成型的VAIO® Z打破傳統材質的束縛，集輕量與堅韌於一身，各項性能同步全面提升。VAIO® Z突破常規，配備14吋闊屏幕仍極致輕薄，內藏壓倒性的效能之餘同時提供強大續航力，將輕量筆電的界限推至全新境界。
					</p> 
				</div>

			</div>	  
		</div><!-- row -->
	</div><!--container -->

</section> 
 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec01-main.jpg"> 
</section> 

		  

<section class="pt-section d-flex flex-wrap text-center  p-0">
		
		<div class="container">   
			<div class="row">

 
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">全球首款全碳纖維機身</h1>
		</div>	 
		
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
				
				
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title my-4 my-lg-4">突破常規界限</h2>
					<p class="pt-content">
						VAIO® Z打破傳統材質的束縛，機身絕大部份採用先前只用於部份部件的碳纖物料，完全釋放電腦的強勁強悍效能。
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*由連續碳纖維材料製成，該材料自2021年1月6日起已在筆記本電腦外殼的所有側面進行三維模製。
					</p>
				</div>
			</div>
		</div>
		 
				
		<div class="col-12 col-lg-6 order-2 order-lg-1 px-0">
			<div class="fs-0">
				<img src="/images/z/z_01.jpg" alt="">
			</div>
		</div>
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 
		
		
	<section class="pt-section d-flex flex-wrap text-left p-0" >
 
		<div class="container bg-grey">   
			<div class="row">



			<div class="col-12 py-5 order-1 order-lg-2" >
				
				<div class="pt-content-wrapper-lg mx-auto">     
					
					<h2 class="pt-title my-4 my-lg-4">甚麼是碳纖？</h2>
					<p class="pt-content mt-4" >
						碳纖是新一代電腦的理想物料，強韌度遠超傳統材質，但礙於加工技術極其繁複，一直未被廣泛採用。
					</p>
				</div>
			</div>	


			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
					<img src="/images/z/z_02.jpg" alt="">
					
					<div class="pt-content mx-auto">        
						<h3 class="my-4"><b>與一般物料比較</b></h3>
						<p class="pt-content text-left">
							碳纖比一般筆記型電腦機身所採用的鎂和鋁堅韌約兩倍。
						</p>
						
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
					<img src="/images/z/z_03.jpg" alt="">
					
					<div class="pt-content mx-auto">   
						<h3 class="my-4"><b>碳纖機身構造</b></h3>                        
					<p class="pt-content text-left">
						碳纖物料的韌度，可以靠改變纖維的種類、密度，以及排列方向調整，可塑度極高，因此機身的韌度及重量可按照產品的實際需要自由調整。
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*纖物料全名為「單向碳纖」，纖維以同一方向並列形成碳纖層，各層纖維縱橫交錯，交織成韌度極高的碳纖板，有效抵擋不同方向的撞擊及屈曲。
					</p>
					</div>
				</div>
			</div>	
				
				
			</div><!-- row -->
		</div><!--container -->
    </section> 	


 

	<section class="pt-section d-flex flex-wrap text-left p-0" >

		<div class="container pt-container-s">   
			<div class="row">
 
			<div class="col-12 col-lg-6 mb-4 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">機體美感渾然天成</h2>  				
					  <p class="pt-content  mt-4">
						  VAIO® Z機身俐落的設計完美發揮碳纖所長，摒棄累贅，同時造就電腦強大效能，達至真正的內外兼備，精準而絕不浪費。
					  </p>
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6">
			   <img src="/images/z/z_04.jpg" >
			</div>

				
			</div><!-- row -->
		</div><!--container -->
	</section>




	

	<section class="pt-section d-flex flex-wrap text-left p-0" >

		<div class="container bg-grey pt-container-s">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">質感獨一無二</h2>  				
					  <p class="pt-content  mt-4">
						  冠以「極尚機型」美譽、以全碳纖打造的VAIO® Z – SIGNATURE EDITION，每部機身均擁有獨一無二的觸感，綻放碳纖魅力。
					  </p>
					  
						<a href="{{ route('product.overview_signature_z141') }}" class="btn black-btn mt-3">了解更多「VAIO® Z | SIGNATURE EDITION」</a>
					   
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6">
			   <img src="/images/z/z_05.jpg" >
			</div>

				
			</div><!-- row -->
		</div><!--container -->
	</section>

 
	<section class="pt-section text-left p-0" id="pt-4"> 
		<div class="container  pt-container-s">   
				<div class="row">

				<div class="pt-content-wrapper mx-auto">	

				  <h2 class="pt-title my-4 my-lg-4">突破筆電界限</h2> 
				  <p class="pt-content mt-4 my-lg-4">
					VAIO® Z佔盡全碳纖機身之利，全面提升電腦的各項性能。14吋型號不但超輕（僅重1.06kg）、超薄（最薄處僅12.2毫米），更能提供壓倒性的效能及續航力，表現不再受機身所限，將輕量筆電的界限推至全新境界。

				</p>
					
				<p class="pt-content mt-4 my-lg-4 text-center"> 
		   			<img src="/images/z/z_06.jpg" >
				</p>

				</div> 
			</div><!-- row -->
		</div>
	</section>




 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec02-main.jpg"> 
</section> 

		  


		
<section class="pt-section d-flex flex-wrap text-center  p-0 text-white" style="background-color: #1a1a1a;">
	  
	<div class="container">   
		<div class="row">
		
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">性能傲視同群</h1>
			 
		</div>	
  
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column align-items-center  h-100">  
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title">唯一搭載高速處理器的輕量筆記型電腦</h2>
					<p class="pt-content text-white mt-4">
						VAIO® Z採用VAIO自身研發的VAIO® TruePerformance技術，配以第11代Intel® Core™ H系列處理器，性能得以顯著提升，亦是業界唯一一部內置高速處理器而重量輕於1千克的大尺吋筆記型電腦。
					</p>
				</div>
			</div>
		</div>	
		
		
		<div class="col-12 py-4 col-lg-6">
		   <img src="/images/z/z_07.png" >
		</div>
	 </div><!-- row -->
		
		
	
	<div class="row">
		 
   		<div class="col-12 py-4  col-lg-6">
		   <img src="/images/z/z_07_2.jpg" >
		</div>
		
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_07_3.jpg" >
		</div>
	 </div><!-- row -->
		 
		
		 
	</div><!--container--->
 </section> 	





		
<section class="pt-section d-flex flex-wrap text-center  p-0 text-white" style="background-color: #1a1a1a;">
	 

	<div class="container pt-container-m">     
	<div class="box">
	<div class="row">
		 
	
		<div class="col-12 col-lg-6 order-1 order-lg-2" >
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto  text-left">	 	
				 <h2 class="pt-title text-white">甚麼是VAIO® TruePerformance？</h2> 			
				  <p class="pt-content my-4 text-white">
					  VAIO® TruePerformance為VAIO自身研發的專屬技術。透過加強電量及改良散熱機制，處理器效能得以進一步提升，並長時間維持於巔峰狀態。
				  </p>
				</div> 
			</div>
		</div>
		 
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_08.png" >
		</div>
		
		
		
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
			<div class="d-flex flex-wrap flex-column align-items-center">

				<div class="pt-content mx-auto  text-left">	 	
				 <h2 class="pt-title text-white">搭載5.00GHz新型處理器</h2>
				  <p class="pt-content my-4 text-white">
					  為滿足不同用家需要，VAIO® Z極尚版「SIGNATURE EDITION」及標準版均可選擇搭載第11代Intel® Core™ H系列最新版「i7-11375H」處理器，速度最高達5.00GHz，提供前所未有的流暢度。
				  </p>
				</div> 
			</div>
		</div>
		 
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_05.jpg" >
		</div>
		
		
		 
		</div><!-- row -->	
		</div>	
		
	</div><!--container--->
 </section> 	


  
 

	<section class="pt-section d-flex flex-wrap text-center p-0 text-white text-left" style="background-color: #1a1a1a;">
				
		<div class="container">   
			<div class="row">
			
		<div class="col-12 order-1 order-lg-2" >
			
			<div class="pt-content-wrapper mx-auto text-left">	
			
			  <h2 class="pt-title my-4 my-lg-4">超高速硬碟</h2> 
				
			  <p class="pt-content mt-4 text-white">
				  內置第4代高速固態硬碟 （SSD）及PCIe 4.0傳輸介面，資料存取速度比過往提升一倍至每秒6GB*，迅速無間完成檔案抄寫及啟動程式等日常任務。
				</p>
				<p class="pt-content-sm mt-3 mb-5 text-left text-white" style="font-size: 0.8rem;">
					*連續讀寫時計算
				</p>
			                     
			</div>  
		</div>	
				
				
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
				
				<img src="/images/z/SSD_01_tc.jpg" alt="">

				<div class="pt-content mx-auto">        
					<h3 class="mt-4 my-lg-4 text-left  text-white"><b>高速高容量記憶體</b></h3>
					<p class="pt-content text-left  text-white">
						VAIO® Z採用高頻寬LPDDR4X記憶體，容量最高可達32GB，實現穩定、無縫的工作流程。
					</p>
				</div>
			</div>
		</div>
				
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center pt-content-wrapper-lg mx-auto"> 
				<img src="/images/z/SSD_02_tc.jpg" alt="">

				<div class="pt-content mx-auto">        
					<h3 class="mt-4 my-lg-4 text-left  text-white"><b>USB4™ 及Thunderbolt™ 4</b></h3>
					<p class="pt-content text-left  text-white">
						機身兩個 USB Type-C™ 插頭支援 USB4™ 及 Thunderbolt™ 4，資料傳輸速度達40 Gbps。即使連接外置硬碟或其他裝置，資料傳輸都迅如閃電，締造驚人的工作效率。
					</p>
				</div>
			</div>
		</div>		
		
  
		</div><!-- row -->
	</div>	 				
		 
    </section>




<!--
	<section class="pt-section d-flex flex-wrap text-left p-0 py-5 text-white text-left" style="background-color: #1a1a1a;">

		<div class="container ">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">新世代5G流動網絡</h2>  				
					  <p class="pt-content  mt-4 text-white">
						  第五代流動通訊系統5G比傳統4G LTE速度更快、流量更大、時延更短，遨遊網絡從此再無拘無束。
					  </p>
					</div> 
				</div>
			</div>
		
			<div class="col-12 col-lg-6">
			   <img src="/images/z/5G_download.jpg">
			</div>

				
			</div> 
		</div> 
	</section>

-->





	<section class="pt-section d-flex flex-wrap text-left text-white text-left" style="background-color: #1a1a1a; padding-top: 0px;">

		<div class="container">   
			<div class="row">
				
				<!--
				<div class="col-12 col-lg-4 order-1 order-lg-2" >
					
					<div class="d-flex flex-wrap flex-column align-items-center text-left ">

						<div class="pt-content-wrapper mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left text-white">4G LTE</h3>  				
						  <p class="pt-content  mt-4 text-white">
							   即使離開5G覆蓋範圍，VAIO® Z仍可以經4G LTE上網。上網時最高下載速度可達150 Mbps*，上載速度可達50 Mbps*。若配合載波聚合技術，網絡速度更可提升至450 Mbps*（理論值）。無論何時何地，你都可以享受高速上網體驗。
						  </p>
						 <p class="pt-content-sm mt-3 mb-5 text-left text-white"  style="font-size: 0.8rem;">
							   *數值為產品最高速度。實際網絡速度會受電訊供應商、電訊服務、網絡覆蓋以及通訊環境等因素所影響。
						  </p>
						</div> 
					</div>
					 
				</div>-->



				<div class="col-12 col-lg-6 order-1 order-lg-2" >
					
					<div class="d-flex flex-wrap flex-column align-items-center text-left ">

						<div class="pt-content-wrapper mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left text-white">Wi-Fi 6 + MU-MIMO</h3>  				
						  <p class="pt-content  mt-4 text-white">
							   VAIO® Z支援最新規格的Wi-Fi 6連線技術，速度較以往*快8倍，而且連接更容易，同時提供極佳安全性*。除此之外，電腦亦支援MU-MIMO技術，即使多人同時連接同一網絡亦不會拖慢網速，網路效能全面升級。
						  </p>
						 <p class="pt-content-sm mt-3 mb-5 text-left text-white"  style="font-size: 0.8rem;">
							   *與Wi-Fi 4 （IEEE802.11n）比較。<br/>
								*需連接支援Wi-Fi 6的路由器。
						  </p>
						</div> 
					</div>
					 
				</div> 
				
				
				
				<div class="col-12 col-lg-6 order-1 order-lg-2" >
					
					<div class="d-flex flex-wrap flex-column align-items-center text-left ">

						<div class="pt-content-wrapper mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left text-white">天線敏感度同步升級</h3>  				
						  <p class="pt-content  mt-4 text-white">
							   為進一步達至流暢上網體驗，除了安裝於屏幕頂的天線之外，VAIO® Z亦另外加裝兩個天線於觸控屏兩側，全方位接收信號，令上網速度更穩定。
						  </p>
						  
						</div> 
					</div>
					 
				</div>  
				
				
			</div><!-- row -->
		</div><!--container -->
	</section>


  

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec06-main.jpg"> 
</section> 

 

	<section class="pt-section text-left p-0 mb-5" id="pt-4">

		<div class="container">   
			<div class="row">
				
				<div class="col-12 py-5 order-1 order-lg-2 text-center">
					<h1 class="my-4 my-lg-3">壓倒性的筆記型電腦</h1>

				</div>
				

				<div class="pt-content-wrapper mx-auto">	

					<h2 class="pt-title my-4 my-lg-4">強大續航力</h2> 

					<p class="pt-content mt-4">
						VAIO® Z採用最新研發、經特別設計的高電量電池，不但超薄超輕，而且內藏源源不絕動力。
					</p> 
				</div> 
			</div><!-- row --> 
		</div>
	</section>





	<section class="pt-section d-flex flex-wrap text-left p-0 mt-5 text-left" >

		<div class="container ">   
			<div class="row">
 
			<div class="col-12 col-lg-6 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center text-left ">

					<div class="pt-content-wrapper mx-auto">	
					  <h2 class="pt-title">兼容各種充電裝置</h2>  				
					  <p class="pt-content  mt-4">
						 除了VAIO研發的「5V輔助充電*」之外，VAIO® Z亦支援一般手機充電器及移動電源充電。
					  </p>
						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
							*未必適用於所有充電裝置。充電速度亦取決於使用情況，而且耗電量有機會高於充電速度。
						</p>
					</div> 
				</div>
			</div> 
			 
		
			<div class="col-12 col-lg-6">
				<img src="/images/z/z_powerbank.jpg" alt="">
			</div>

				
			</div>
		</div>
	</section>




	<section class="pt-section d-flex flex-wrap text-center p-0 text-left">
				
		<div class="container">   
			<div class="row">
 
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					
					<div class="d-flex flex-wrap flex-column align-items-center"> 
						  
						<div class="pt-content-wrapper text-left mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left">極速喚醒   爭分奪秒</h3>  				
						  <p class="pt-content  mt-4 ">
							  VAIO® Z支援新式待命（modern standby）功能，可即時從睡眠狀態切換至工作模式，一分一刻都不會浪費。除此之外，處於睡眠狀態的電腦仍然連接互聯網，電郵收發如常無誤*，因此重新開機後你可以立即繼續任務。
						  </p>
							<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
								*僅適用於支援新式待命的應用程式。
						</p>	
						  
						</div> 
 

					</div>
				</div>

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center"> 
					  
						<div class="pt-content-wrapper text-left mx-auto">	
						  <h3 class="mt-4 my-lg-4 text-left">「電池維護」模式</h3>  				
						  <p class="pt-content  mt-4 ">
							  長期充電至100%會縮短電池壽命，因此VAIO® Z內設「電池維護」模式，當電量達一定程度便會自動停止充電，延長內置電池壽命。
						  </p>
							  
						</div> 
						 

					</div>
				</div>

			</div><!-- row -->
		</div>	 
		
    </section>




 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec03-main.jpg"> 
</section> 

		  
 

		
<section class="pt-section d-flex flex-wrap text-center  p-0 ">
	 
	<div class="container">   
		<div class="row">
			 
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">硬件設計絕不妥協</h1>
			 
		</div>	
  
		<div class="col-12 col-lg-6 order-1 order-lg-2 ">
			<div class="d-flex flex-wrap flex-column ">  
				<div class="pt-content-wrapper-lg mx-auto text-left">
					<h2 class="pt-title">全新設計新一代鍵盤</h2>
					<p class="pt-content mt-4">
						新設計鍵盤經過多方面優化，進一步降低擾人噪音，鍵帽及傾角設計亦再次精心改良，更符合人體工學，減輕手腕負擔，打字就更暢快利落。
					</p>
					<p class="pt-content mt-4">
						鍵帽之間的間距達19 毫米，鍵程亦由1.2毫米加深*至1.5毫米，打字時更舒適，同時有效抑制噪音。
					</p>
					<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
						*與VAIO SX14比較。
					</p>
				</div>
			</div>
		</div>	
		
		
		<div class="col-12 col-lg-6">
		   <img src="/images/z/z_10.jpg">
		</div>
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 	




 




	
	<section class="pt-section d-flex flex-wrap text-left  p-0">
		  		
		<div class="container">   
			<div class="row">
	
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_11.jpg" alt="">  
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">鍵帽貼合指尖   減少出錯</h3> 							
						    <p class="pt-content text-left">
							 鍵帽呈碟型，頂部有0.3毫米的凹位，使按鍵時鍵帽更貼合指尖，減少打錯字的機會。
						    </p> 
						</div> 
					</div>
				</div>

		
		
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_12.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">防污鍵帽及掌托</h3> 							
						    <p class="pt-content text-left">
							 鍵盤按鍵的表層塗上專門開發、含氟化物的UV硬化塗層，掌托位置亦有抗指紋的防汚塗層，不論鍵盤抑或掌托都能夠歷久彌新。
						    </p> 
						</div> 
 
					</div>
				</div> 

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_13.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">貼心背光設計</h3> 							
						    <p class="pt-content text-left">
								標準尺吋的鍵盤採用背光設計，全面照顧不同環境所需。即使你身處昏暗的會議室或機艙座位，鍵盤字母亦清晰可見，無損你工作效率。
						    </p> 
						</div> 

						 
					</div>
				</div>



				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_14.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">VAIO專屬字型</h3> 							
						    <p class="pt-content text-left">
								VAIO® Z鍵盤上的全新字型經過一番精心設計，自然的曲線令字樣更清晰之餘，亦不乏優雅大方的美感。
						    </p> 
						</div> 

 
					</div>
				</div>

				<!--

				<div class="col-12 col-lg-4 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_15.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">自選鍵盤排列方式 / 刻印</h3> 							
						    <p class="pt-content text-left">
								提供兩款日式鍵盤（設仮名及不設仮名選項）。用家亦可選擇英式鍵盤。
						    </p> 
						</div> 
 
					</div>
				</div> 

				<div class="col-12 col-lg-4 py-5 order-1 order-lg-2" style="background-color: #fff;">
					<div class="d-flex flex-wrap flex-column align-items-center">

						<img src="/images/z/z_15.jpg" alt="">  
						
						<div class="pt-content mx-auto text-left">
							<h3 class="my-4">優雅刻字鍵盤</h3>
						    <p class="pt-content text-left">
								除傳統鍵盤之外，VAIO® Z亦提供時尚優雅的「刻印」字樣鍵盤，黑色鍵帽上雕刻上黑色字樣，盡顯風格。
						    </p> 
						</div>  
						
					</div>
				</div>

			-->
				
			</div><!-- row -->
		</div>	   
    </section> 

 


	<section class="pt-section d-flex flex-wrap text-center p-0">

		<div class="container">   
			<div class="row">
		
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center"> 

						
						<div class="pt-content-wrapper-lg mx-auto text-left">    
						<h2 class="pt-title">大尺吋觸控板</h2>                        
						<p class="pt-content mt-4 text-left">
							觸控板面積比傳統型號*大約190%，表面亦經過仔細打磨，只需輕輕觸碰就能精準、流暢地控制鼠標。另外，觸控板採用左右獨立實體鍵，有效減少誤觸。
						</p>

						<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
							*與VAIO SX14比較。
						</p>		

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
						<img src="/images/z/z_16.jpg" alt="">  
					</div>
				</div>
			</div><!-- row -->
		</div>	 
    </section>



	<section class="pt-section d-flex flex-wrap p-0">
	 		
		<div class="container">   
			<div class="row">
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				  
				<div class="pt-content-wrapper-lg text-left mx-auto">   
				<h2 class="pt-title">4K屏幕   影像細緻驚豔</h2>                         
			  	<p class="pt-content mt-4 text-left">
					VAIO® Z顯示屏提供4K（3840 x 2160像素）選擇，能重現數碼鏡頭下HDR*影像的驚豔色彩及光影效果，即使以肉眼觀賞影片，畫質同樣栩栩如生，恍如親歷其景。
				</p>
				 	 
				<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem; ">
					*僅適用於支援HDR的內容。當啟用HDR功能，顯示屏會根據屏幕的基本色調自動調整亮度，以減少耗電量及提高對比度。
				</p>		
				 
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				<img src="/images/z/z_17.jpg" alt="">  
			</div>
		</div>
		
		 
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/z_18_1.png" alt="">   
				<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					VAIO® Z 的色域（虛線為一般sRGB色域）<br/>
					Color gamut of VAIO® Z (Dotted lines denote normal sRGB gamut)
				</p>
			</div>
		</div>
				
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap align-items-center">  
				<img src="/images/z/z_18_2.jpg" style="width: 50%;">  
				<img src="/images/z/z_18_3.jpg" style="width: 50%;">  
			</div>
		</div>		
		
	
		</div><!-- row -->
	</div>	 
    </section>





<!--
	<section class="pt-section d-flex flex-wrap text-left  p-0">

		<div class="container">   
			<div class="row">
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">  
				
				<div class="pt-content-wrapper-lg mx-auto  text-left">      
				<h2 class="pt-title">三重4K顯示 切實可行</h2>                      
			  	<p class="pt-content  mt-4">
					透過另購Type-C 4K接駁器，用家可以將最多兩個外置4K顯示屏連接至電腦，使4K影像同步放映到三個顯示屏，不論用於工作或娛樂亦同樣方便。
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				<img src="/images/z/z_20.jpg" alt="">  
			</div>
		</div>
		
		</div>
	</div>	   
    </section>
-->

 




	<section class="pt-section d-flex flex-wrap text-left p-0">
				
	<div class="container">   
		<div class="row">
			  
		
		<div class="pt-content-wrapper mx-auto">	

			<h2 class="pt-title my-4 my-lg-4">優質鏡頭及咪高峰	居家工作得心應手</h2> 

			<p class="pt-content mt-4">
				VAIO® Z前置鏡頭擁有約207萬像素，攝像畫質高清而細緻。咪高峰亦經過重新設計，進一步提升降噪技術，大幅改善收音質素。
			</p> 
		</div> 	

			
 
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center0"> 
				 <img src="/images/z/z_21.jpg"> 
				
				<div class="pt-content mx-auto text-left"> 
				<h3 class="my-4">細心考量裝備位置</h3>                            
			  	<p class="pt-content text-left mt-4">
					前置鏡頭位於顯示屏頂部中央，立體聲咪高峰則設置於前置鏡頭兩旁，無論錄像或收音效果都更清晰、更準確。
				</p>
				 
				 
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				 <img src="/images/z/z_22.jpg"> 
				
				<div class="pt-content mx-auto  text-left">
				<h3 class="my-4">鏡頭滑蓋   保護私隱</h3> 
			  	<p class="pt-content text-left mt-4">
					前置鏡頭附有滑動式遮蓋，你可以於進行會議前手動關上滑蓋，私隱保障從此萬無一失。
				</p>
				  
				</div>
			</div>
		</div>
			
		</div><!-- row -->
	</div>	 			
		
    </section>






	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				
				<div class="pt-content mx-auto text-left">        
				<h3 class="my-4">大直徑揚聲器</h3>                    
			  	<p class="pt-content mt-4 text-left">
					大型揚聲器設置於機身前方，配合經VAIO改良的Dolby Audio™ 技術，音質更清晰，為正在進行視像會議或沉醉於視像體驗的你提供極致音效。
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/z_23.jpg" alt="">  
				<div class="pt-content mx-auto text-left">  
					<h3 class="my-4">全部靜音捷徑</h3>                           
					<p class="pt-content mt-4 text-left">
						引入全新靜音捷徑（Fn + Tab鍵），一個動作便可即時暫停收音。而Tab鍵上緣亦設有提示燈，收音功能開啟與否一目了然。
					</p>
				</div>
			</div>
			
		</div><!-- row -->
	</div>	 			
		
		  
    </section>
		
		 

	<section class="pt-section d-flex flex-wrap text-center  p-0">
				
	<div class="container">   
		<div class="row">
 
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/z_24.jpg"> 
				
				<div class="pt-content mx-auto text-left">     
				<h3 class="my-4">開合屏幕   一手掌握</h3>                        
			  	<p class="pt-content mt-4 text-left">
					經過改良的轉軸更平滑流暢，只需單手就能開合屏幕，一個動作就可俐落展開工作。
				</p> 
				 
				</div>
			</div>
			
			
			<div class="d-flex flex-wrap flex-column align-items-center"> 
			 
				
				<div class="pt-content mx-auto text-left">    
				<h3 class="my-4">左右USB Type-C™ 插頭</h3>                         
			  	<p class="pt-content mt-4 text-left">
					機身左右均配置USB Type-C™ 插頭，你再不需要為遷就插座位置移動電腦。
				</p> 
				</div>
			</div>
			
			
		</div>
		
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/z_25.jpg"> 
				
				<div class="pt-conteny mx-auto text-left">      
				<h3 class="my-4">180度轉軸設計   翻轉視野</h3>                       
			  	<p class="pt-content mt-4 text-left">
					VAIO顯示屏可以揭開至180度，輕按專屬捷徑（Fn + 2）就可以將屏幕影像翻轉，觸控板控制亦會同時自動翻轉，工作或娛樂都更靈活自如。
				</p>
				  
				</div>
			</div>
			
			<div class="d-flex flex-wrap flex-column align-items-center py-4 "> 
				 <img src="/images/z/z_26.jpg"> 
				
				<div class="pt-content-wrapper-lg mx-auto text-left">
				<h3 class="pt-title mt-4">人體工學機底設計</h3>                            
			  	<p class="pt-content mt-4 text-left">
					轉軸部份經特別設計，輕易抓住手指，即使要將放在枱面的電腦迅速拿起亦不易滑落，大大減少意外發生。
				</p>
			 
				</div>
			</div>
			
		</div>
			
		</div><!-- row -->
	</div>	 			
		
    </section>	

		
		
		


	<section class="pt-section d-flex flex-wrap text-center  py-5 p-0">
				
	<div class="container">   
		<div class="row">
			
			
			
		<div class="col-12 py-4 order-1 order-lg-2" >
			 <img src="/images/z/z_27.jpg">
			
			<div class="col-12 py-5 order-1 order-lg-2">
				<h1 class="my-4 my-lg-3">安全驗證一應俱全</h1> 
			</div> 
			
			<div class="pt-content-wrapper-lg mx-auto text-left">   
			
			<h2 class="pt-title ">VAIO多重登入認證</h2> 
			<p class="pt-content mt-4 mx-auto">
				VAIO® Z同時配備指紋及面部識別器，無需按鍵亦無需密碼，省卻煩人的登入步驟，同時提供強大安全保障。
			</p>
			
			</div>
		</div>	
 
			
 
		
		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/sec04-01-01.png"> 
				
				<div class="pt-conteny mx-auto text-left">      
					<h3 class="my-4">無需按鍵   自動登入</h3>                       
					<p class="pt-content mt-4 text-left">
						你只要坐於電腦面前，動態感應器就會自動偵測並進行面部識別，做到無需按鍵就可以自動登入，既方便又安全。
					</p>
				</div>
 
			</div>
		</div>
		
		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				 <img src="/images/z/sec04-01-02.png"> 
				 
				<div class="pt-content mx-auto">    
				<h3 class="my-4">離開座位   自動鎖機</h3>                          
			  	<p class="pt-content text-left">
					當動態感應器偵測到你離開電腦範圍，就會自動鎖上電腦，讓你安心離開座位。
				</p> 
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-4 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/sec04-01-03.jpg"> 
				
				<div class="pt-conteny mx-auto text-left">        
					<h3 class="my-4">智能感應   防止鎖機</h3>                     
					<p class="pt-content mt-4 text-left">
						動態感應器只要偵測到你仍然在電腦面前，就會防止系統進入睡眠狀態或螢幕保護程式，達至零打擾。	
					</p>
				</div>
				 
			</div>
		</div>
		<!--
		<div class="col-12 col-lg-6 py-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 
				<img src="/images/z/sec04-01-04.jpg"> 
				<div class="pt-conteny mx-auto text-left">      
					<h3 class="my-4">開機登入   同步進行</h3>                       
					<p class="pt-content mt-4 text-left">
						指紋感應器設置於開關掣，按掣開機時自動進行指紋識別，減省你輸入密碼的步驟，開機到工作無縫接合。
					</p>
				</div> 
			</div>
		</div>
			-->
		</div><!-- row -->
	</div>	 			
		
    </section>
		
		 

	<section class="pt-section d-flex flex-wrap text-left   p-0">
	  		
	<div class="container">   
		<div class="row">
			 
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				
				<div class="pt-content-wrapper-lg mx-auto text-left">   
				<h2 class="pt-title">BIOS認證*進一步升級</h2>                         
			  	<p class="pt-content  mt-4 text-left">
					VAIO® Z支援指紋認證、藍牙配對、FIDO2保安鎖匙、USB記憶體等方式，取代實體BIOS開機密碼。
				</p>
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*BIOS內置Phoenix PassKey™ 功能。Phoenix PassKey™ 為Phoenix Technologies Ltd註冊商標。
				</p>
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 order-1 py-5 order-lg-2">  
			<img src="/images/z/sec04-01-05.jpg" alt="">   
		</div>

		</div><!-- row -->
	</div>	 			
			
    </section>

		
		
		<!--
	<section class="pt-section d-flex flex-wrap text-left   p-0 ">
	  		
	<div class="container">   
		<div class="row">
			
			
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				
				<div class="pt-content-wrapper-lg mx-auto">  
				<h2 class="pt-title ">遺失追蹤及遙距刪除資料</h2>                          
			  	<p class="pt-content mt-4 text-left">
					一旦遺失VAIO電腦，用家可以利用TRUST DELETE for VAIO®（個人帳戶）功能，經手機或其他裝置追蹤電腦位置、進行遙距鎖機及清除資料，進一步保障資料。
				</p>
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*本服務支援的語言版本不一定適用於所有地區。<br/>
					*The supported languages might not be available in all regions.
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6  py-5 order-1 order-lg-2">
			<img src="/images/z/sec04-02-01.png" alt="">  
		</div>
			
		</div>
	</div>	 			
		 
    </section>
-->

	 




	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		<!--
		<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
				<img src="/images/z/z_34.jpg" alt="">  
				
				<div class="pt-content-wrapper-lg mx-auto text-left">   
				<h3 class="my-4">VAIO專屬防窺膜</h2>                         
			  	<p class="pt-content mt-4">
					VAIO所研發的專屬防窺膜，經特別設計後，無需膠貼固定亦能緊貼邊框，無損外觀美感，移除亦簡單容易。
				</p>
			  
				</div>
			</div>
		</div> -->
		
		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center"> 

			<div class="pt-content-wrapper-lg mx-auto  text-left">     
				<h3 class="my-4">BIOS自動修復功能</h3>                        
				<p class="pt-content mt-4">
					內設BIOS自動修復功能，當BIOS因更新受損或受攻擊時可以自動修復。
				</p>
			</div>
			</div>
		</div>
			
			
		
		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
  
				<div class="pt-content-wrapper-lg mx-auto  text-left">   
					
				<h3 class="my-4">TPM保安晶片</h3> 
					
			  	<p class="pt-content mt-4">
					為了提供更強大的資料加密保護，VAIO® Z可搭載獨立於作業系統及其他硬件的TPM*1保安晶片，用家從此不再需要倚賴外接式硬碟（HDD）或高速固態硬碟（SDD），直接通過TPM獨立管理數據加密，處理重要資料就再無後顧之憂*2。
				</p>
					
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*1 TPM︰可信平台模塊<br/>
					*2 TPM並不保證資料和硬件得到百分百保護。
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-4 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center "> 
				  
				<div class="pt-content-wrapper-lg mx-auto  text-left">     
				<h3 class="my-4">實體防盜鎖槽   更添保障</h3>                        
			  	<p class="pt-content mt-4">
					機身設有實體防盜鎖槽，方便你將電腦固定於枱面。
				</p>
					 
			</div>
		</div>
			
			
			
			
		</div><!-- row -->
	</div>	 
		
    </section>
		
		 <!--
	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center">  
  
				<div class="pt-content-wrapper-lg mx-auto  text-left">   
					
				<h3 class="my-4">TPM保安晶片</h3> 
					
			  	<p class="pt-content mt-4">
					為了提供更強大的資料加密保護，VAIO® Z可搭載獨立於作業系統及其他硬件的TPM*1保安晶片，用家從此不再需要倚賴外接式硬碟（HDD）或高速固態硬碟（SDD），直接通過TPM獨立管理數據加密，處理重要資料就再無後顧之憂*2。
				</p>
					
			 	<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
					*1 TPM︰可信平台模塊<br/>
					*2 TPM並不保證資料和硬件得到百分百保護。
				</p>
			  
				</div>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="d-flex flex-wrap flex-column align-items-center "> 
				  
				<div class="pt-content-wrapper-lg mx-auto  text-left">     
				<h3 class="my-4">實體防盜鎖槽   更添保障</h3>                        
			  	<p class="pt-content mt-4">
					機身設有實體防盜鎖槽，方便你將電腦固定於枱面。
				</p>
					 
			</div>
		</div>
		
		  
    </section>	 -->
			
			
 

<section class="pt-section d-flex flex-wrap text-center  p-0">  
 	<img src="/images/z/sec05-main.jpg"> 
</section> 
			
 
	<section class="pt-section d-flex flex-wrap text-center  p-0">
				
	<div class="container">   
		<div class="row">
			  
		<div class="col-12 py-5 order-1 order-lg-2">
			<h1 class="my-4 my-lg-3">由始至終	一絲不苟</h1> 
		</div>
			 
		<div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">
			<div class="pt-content-wrapper-lg mx-auto  text-left">    
				<h2 class="pt-title">通過品質測試   堅固耐用</h2> 
				<p class="pt-content mt-4 mx-auto">
					為了追求完美品質，VAIO設計數十個場景模擬各種使用情況，並進行內部測試，確保電腦堅固耐用。另外，VAIO® Z亦通過美國國防部訂立的多項軍事級嚴格測試及檢定（MIL-STD-810H），質量毋庸置疑。
				</p> 
			</div>
		</div>
		
		
		
		<div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">
			 <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100"> 
				<img src="/images/z/z_36.jpg" alt="">  
			</div>
		</div>
			
		</div><!-- row -->
	</div>	 			
		 
    </section>
		
		
		
		
		
	
	

	<section class="pt-section d-flex flex-wrap text-center  p-0">
	 		
	<div class="container">   
		<div class="row">
		
				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
					<div class="d-flex flex-wrap flex-column align-items-center ">  

						
					<div class="pt-content-wrapper-lg mx-auto  text-left">    
						<h2 class="pt-title">力臻完美	匠心之作</h2>                        
						<p class="pt-content mt-4">
							VAIO秉承日本一貫的匠工精神，致力為用家帶來極致體驗。由設計到生產，VAIO將各方精英雲集於長野縣安曇野市的總部，以引以為傲的日本技術及日本美學，打造出一部部精緻細膩的電腦。每部於VAIO總部出廠的電腦，生產過程都一絲不苟，品質亦絕不妥協，竭力追求成為「日本製造」的典範。
						</p>

						</div>
					</div>
				</div>


				<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
						<img src="/images/z/z_35.jpg" alt="">  
				</div>
		 
			</div><!-- row -->
		</div>	 	  
    </section>	
		 
		<!--

	<section class="pt-section d-flex flex-wrap text-center  p-0">
	  		
		<div class="container">   
			<div class="row">
 
			<div class="col-12 mb-5 order-1 order-lg-2">
				<div class="d-flex flex-wrap flex-column align-items-center">  

					
					<div class="pt-content-wrapper-lg mx-auto  text-left">   
					<h2 class="pt-title">關懷環境</h2>                         
					<p class="pt-content  mt-4">
						VAIO在致力開發產品的同時亦顧及環境，進行並跟從嚴格的環境標準評估，旨在為建立一個可持續及有利資源循環的社會出一分力。

					</p>
					<p class="pt-content text-left">
						我們與Mirai化成有限公司（Mirai Kasei Co., Ltd. ）合作，該公司於碳纖物料的循環再生方面擁有出色的獨門技術，正正展現我們保護環境的決心。VAIO會繼續進行研發，創造更高增值的循環再生技術。
					</p>

					</div>
				</div>
			</div>

			</div>
		</div>	 			
		  
    </section>	 -->
		
 
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
