@extends('layout.app')

@section('title', 'VAIO SE14 2021')

@section('product_nav')
    @include('products.se2021.product_nav')
@stop

@section('content')


<script src="https://hk.vaio.com/js/html5gallery.js"></script>

<!--- Banner here------------------------------------>

<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
        <div class="swiper-wrapper">
             <a href=""  target="_blank" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-1">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
            
             <a href=""  target="_blank" class="swiper-slide">
                <div class="main-banner-wrapper cms-banner cms-banner-2">
                    <div class="main-banner" title=""></div>
                </div>
            </a>
             
        </div>
        <div class="swiper-pagination"></div>  
    </div>
</section>

@push('css')

    <style>
        .cms-banner:before {
            padding-top: 37.51%;
        }
		
		
		.pt-title{ 
    		font-size: 2.5rem;
		}
		
		.pt-section.p-0{
			padding: 20px 0 !important;
		}
		
		.rect-banner{ 
			background-size: contain; 
			background-repeat: no-repeat;
		}

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-1 .main-banner {
            background-image: url(/images/se2021/VAIO-SE14-Clack-II_1_pc_en.jpg);
        }
		
		.cms-banner-2 .main-banner {
            background-image: url(/images/se2021/VAIO-SE14-Clack-II_2_pc_en.jpg);
        }
		
		
		@media(min-width: 992px) {
			.mo{
			 	display:none;
			}
		}


        @media(max-width: 991px) {
            .cms-banner-1 .main-banner {
            	background-image: url(/images/se2021/VAIO-SE14-Clack-II_1_mo_en.jpg);
            }
			
			.cms-banner-2 .main-banner {
            	background-image: url(/images/se2021/VAIO-SE14-Clack-II_2_mo_en.jpg);
            }
			
			.pc{
				display:none !important;
			}
			
			
			h1{ 
				font-size: 2.0rem;
			}
			.pt-title {
				font-size: 1.5rem;
			}
			
			.py-5{
				padding-top: 1.0rem!important;
				padding-bottom: 1.0rem!important;
			}
			
			.pt-section{
				padding: 20px 0 !important;
			}
			
			
        }

    </style>

@endpush
<!--- Banner end here------------------------------------>

<!---Page content here--------------------------------------------->

    <section id="vaio-product">
        <div class="main-content container-fluid">
			 
			
					
			
			
			<section class="pt-section text-center">
				<div class="container">  
					
						<h2 class="pt-title mt-4">工作娛樂 ‧ 智慧隨行</h2>
						<hr class="pt-title-hr">
						<div class="pt-content-wrapper mx-auto">	
						<p class="pt-content text-left">
						新一代VAIO SE14矚目回歸，以強悍效能締造出極致的工作及娛樂體驗。11代Intel® Core™ i7處理器為你帶來無與倫比的震撼效能，你可以沉醉於14吋全高清窄邊框顯示屏所帶來的驚艷色彩及細緻畫質，四個不同方位的揚聲器則為你還原仿如置身現場的音效。一部VAIO SE14在手就可以享受逼真的官能體驗，同時輕鬆提升工作效率。
						</p>
						  
						</div> 
						 
				</div>
			</section>
			
			<section class="pt-section text-center" style="background-color: #fff; padding-top: 0px;">
                <div class="container"> 
                    
					<div class="row">
						
                   <div class="col-12 pt-content-wrapper mx-auto">	
                       
						<h2 class="pt-title mt-4">搭載11代Intel® Core™ i7處理器的VAIO SE14</h2>
						<hr class="pt-title-hr">
				
						<div class="fs-0 my-4 my-lg-5">
							<img src="/images/se2021/se14_2021_1.jpg" >
						</div>
					 

						<div class="pt-content-wrapper mx-auto">						 
							<p class="pt-content text-left">
								SE14是VAIO系列首部搭載11代Intel® Core™ i7處理器以及Iris Xe圖像處理器的超高性能筆記型電腦。系列專門為追求高效率以及極致感官體驗的用家而設計，而新研發的散熱系統及強大續航力亦造就了SE14無可匹敵的性能。
							</p> 
							 
						</div>
					   
					  
                    </div> 
                    </div>  
                </div>
            </section>
			
			 
			
			<section class="pt-section text-center p-0">
                <div class="container">  
					<div class="row">
                   <div class="pt-content-wrapper mx-auto">	 
						<h1 class="mt-4">強悍效能	毫不妥協</h1>
						<hr class="pt-title-hr"> 
                    </div>  
                </div>
                </div>
            </section>
			
			  
			
			<section class="pt-section d-flex flex-wrap text-center  p-0" id="pt-1">
				
				<div class="container">   
					<div class="row">

				
					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_2.jpg');"></div>
					</div>

					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
							
							<div class="fs-0 my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_2.jpg" alt=""> 
                            </div>
							
							
							<h2 class="pt-title mt-4">流動會議絕佳夥伴</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">     
								<p class="pt-content mx-auto text-left">
									SE14 配備高畫質視像鏡頭，兩個數位陣列式咪高峰準確接收螢幕前方的聲音，配合內置AEC技術消除回音及過濾雜音，再加上四個優質揚聲器為你提供清晰厚實的音效，進行會議從此不受環境約束。另外，要轉換單人或多人會議模式時只需輕按一鍵，輕鬆便捷。
								</p>
							</div>
						</div>
					</div>
					
				</div>	
			  </div>	
               
            </section>
			
			
			
			<section class="pt-section d-flex flex-wrap text-center p-0">
				
				<div class="container"> 
				
					<div class="row">

					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
							
							<div class="fs-0 my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_3.jpg" alt=""> 
                            </div>
							
							<h2 class="pt-title mt-4">卓越效率　毫不妥協</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">     
								<p class="pt-content mx-auto text-left" >
									SE14為無間斷工作及娛樂體驗而打造，擁有長達12小時*驚人續航力，配合超快速充電技術，短短1小時即可充電至70% ，為你提供源源不絕動力。系列搭載家用版Windows 10，確保你在電腦面前的每分每秒都能換取最大效益。
								</p>
								<p class="pt-content-sm mt-3 mb-5 text-left" style="font-size: 0.8rem;">
									* 測試環境數據
								</p>

							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_3.jpg');"></div>
					</div>
					
					</div>			
               </div>
               
            </section>
			 
            <section class="pt-section text-center" id="pt-1">
                
				<div class="container">    
						
                    <h2 class="pt-title mt-4">嚴密保安 安全穩妥</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">	
					<div class="fs-0 my-4 my-lg-5">
                        <img src="/images/se2021/se14_2021_4.jpg" alt="">
                    </div> 					
                        <p class="pt-content text-left">
                            SE14機身備有防盜鎖槽，確保所有重要工作及資料萬無一失。開關掣結合指紋感應器，開機登入無縫接合，只需輕輕一按，強大效能隨即釋放。
                        </p> 
                    </div>                     
                </div>         
            </section>
			  
			
			<section class="pt-section text-center p-0" >
                <div class="container">     
					<div class="row">
                   <div class="pt-content-wrapper mx-auto">	 
						<h1 class="mt-4">娛樂體驗	無可匹敵</h1>
						<hr class="pt-title-hr"> 
                    </div>  
                </div>
                </div>
            </section>
			
			   
				
			<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-2">
				
				<div class="container">   
					<div class="row">
						
					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_5.jpg');"></div>
					</div>

					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
							
							<div class="fs-0 my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_5.jpg" alt=""> 
                            </div>
							
							
							<h2 class="pt-title mt-4">盡情享受視覺饗宴</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">     
								<p class="pt-content mx-auto text-left" >
									SE14全高清廣角IPS顯示屏配以極幼邊框，呈現懾人的視覺效果。14吋屏幕配合防眩光技術，避免造成眼睛疲勞。其出色的解像度及穩定的刷新頻率保證你不論工作或娛樂都不會錯過任何細節。
								</p>
							</div>
						</div>
					</div>
				</div>
				</div> 
            </section>
			
			
			
			<section class="pt-section d-flex flex-wrap text-center p-0">
				 
				<div class="container">   
					<div class="row">
				
					<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
						<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
							
							<div class="fs-0 my-lg-5 mo">
                                <img src="/images/se2021/se14_2021_6.jpg" alt=""> 
                            </div>
							
							<h2 class="pt-title mt-4">高速固態硬碟 疾速如電</h2>
							<hr class="pt-title-hr">
							<div class="pt-content-wrapper-lg mx-auto">     
								<p class="pt-content mx-auto text-left">
									SE14配備高速固態硬碟，可以儲存大量資料，同時將電腦性能推至全新境界。固態硬碟提供極致的多工作業效能，有效減少高CPU耗量程式運行時導致當機的狀況。
								</p>

							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
						<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_6.jpg');"></div>
					</div>
				
			
				</div>
				</div> 	
               
            </section>
			 
			
			<section class="pt-section text-center p-0" > 
				<div class="container">    
                   <div class="pt-content-wrapper mx-auto">	 
						<h1 class="pt-title mt-4">工作娛樂	同樣出色</h1>
						<hr class="pt-title-hr"> 
                    </div>   
                </div>
            </section>
			 
			
				
			<section class="pt-section d-flex flex-wrap text-center p-0" id="pt-3">
				 
				<div class="container">   
					<div class="row">

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_7.jpg');"></div>
						</div>

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
								
								
								<div class="fs-0 my-lg-5 mo">
									<img src="/images/se2021/se14_2021_7.jpg" alt=""> 
								</div>
								
								<h2 class="pt-title mt-4">全方位連接能力</h2>
								<hr class="pt-title-hr">
								<div class="pt-content-wrapper-lg mx-auto">     
									<p class="pt-content mx-auto text-left">
										SE14擁有一應俱全的連接埠，包括兩個USB Type-C™ Thunderbolt 4插位、兩個USB type A 3.2插位、HDMI連接埠以及Wi-Fi 6，可無縫連接多個裝置，即使要同一時間傳輸數據、顯示影像、充電和接駁外置裝置亦輕鬆自如。
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>        
            </section>
			
			
			
			<section class="pt-section d-flex flex-wrap text-center p-0" >
				 
				
				<div class="container">   
					<div class="row">

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
								
								
								<div class="fs-0 my-lg-5 mo">
									<img src="/images/se2021/se14_2021_8.jpg" alt=""> 
								</div>
								
								<h2 class="pt-title mt-4">經典人體工學轉軸</h2>
								<hr class="pt-title-hr">
								<div class="pt-content-wrapper-lg mx-auto">     
									<p class="pt-content mx-auto text-left">
										SE14秉承VAIO為迎合人體工學所設計的經典轉軸，筆電打開時與枱面形成自然傾角，大幅減輕手掌及手腕承受的壓力，令打字更舒適暢快。
									</p>
									<p class="pt-content mx-auto text-left">
										轉軸設計亦有效加強通風及散熱效果，進一步提升電腦效能。
									</p>

								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner"  style="background-image: url('/images/se2021/se14_2021_8.jpg');"></div>
						</div>
						
				
					</div>
				</div>      		
               
            </section>
			
			 
			
				
			<section class="pt-section d-flex flex-wrap text-center  p-0" >
				 
				<div class="container">   
					<div class="row">
				
						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_9.jpg');"></div>
						</div>

						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" >
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
								
								
								<div class="fs-0 my-lg-5 mo">
									<img src="/images/se2021/se14_2021_9.jpg" alt=""> 
								</div>
								
								<h2 class="pt-title mt-4">背光鍵盤</h2>
								<hr class="pt-title-hr ">
								<div class="pt-content-wrapper-lg mx-auto">     
									<p class="pt-content mx-auto text-left" >
										SE14的背光鍵盤營造出流暢、靈活、俐落的打字體驗。貼心的背光設計方便用家於昏暗的會議室或機艙環境下都能繼續任務，任何環境下使用都得心應手。
									</p>
								</div>
							</div>
						</div>
               
					</div>
				</div>
            </section>
			
			
			
			<section class="pt-section d-flex flex-wrap text-center  p-0">
				 
				<div class="container">   
					<div class="row">
				
						<div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #fff;">
							<div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
								
								<div class="fs-0 my-lg-5 mo">
									<img src="/images/se2021/se14_2021_10.jpg" alt=""> 
								</div>

								<h2 class="pt-title mt-4">設計簡約高尚</h2>
								<hr class="pt-title-hr">
								<div class="pt-content-wrapper-lg mx-auto">     
									<p class="pt-content mx-auto text-left">
										外型時尚輕便的SE14僅重1.39千克，設計簡約典雅。機身以鋁質打造，堅固耐用之餘亦為電腦添上細緻觸感。
									</p>

								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0 pc">
							<div class="rect-banner" style="background-image: url('/images/se2021/se14_2021_10.jpg');"></div>
						</div>
               
					</div>
				</div>
            </section>
			
			
			  
	<div class="support-center-wrap">
        <div class="container">

            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    <p class="spec-item-name" style="font-size: 0.8rem;">
                        Intel, Intel圖誌, the Intel Inside圖誌和Intel Core均是Intel Corporation在美國或其他國家的商標。<br>
                        "VAIO"商標使用權是獲得VAIO Corporation授權使用。<br />
                        <br />
                        * 安曇野 FINISH及品質測試僅適用於VAIO S11, VAIO S13, VAIO A12及VAIO SX14。
						 
                    </p>

                </div>
            </div>
        </div>
    </div>
		
		
	</div>
</section>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop
