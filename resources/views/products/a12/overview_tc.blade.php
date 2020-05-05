@extends('layout.app')

@section('title', 'VAIO A12')

@section('product_nav')
    @include('products.a12.product_nav')
@stop

@section('content')


<script src="https://hk.vaio.com/js/html5gallery.js"></script>

<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
			<a href="https://vaio.nexstmall.com/en_hk?utm_source=brandsite&utm_medium=se14productpage&utm_campaign=vaiomallhomepage1" target="_blank"  class="swiper-slide">
                        <div class="main-banner-wrapper cms-banner cms-banner-5">
                            <div class="main-banner" title=""></div>
                        </div>
                    </a>
    </div>
</section>
@push('css')

    <style>
		.txt_small {
			font-size: 0.8rem;
		}
        .cms-banner:before {
            padding-top: 37.51%;
        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-5 .main-banner {
            background-image: url(/images/a12/A12.jpg);
        }

        @media(max-width: 991px) {
            .cms-banner-5 .main-banner{
            background-image: url(/images/a12/A12-2.jpg);
            }
			 
			.swiper-container {
				padding-bottom: 0px;
			}
				
        }

    </style>

@endpush
<!--- Banner end here------------------------------------>

<!---Page content here--------------------------------------------->

<!-----------------------INTRO----------------------------------------->        
	<section class="pt-section text-center" style="background-color: #eeeeee" >
		<div class="container">
			<h2 class="pt-title mt-4">「二合一」的新次元。</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content mb-5">
將大家最常見的摺合式筆記簿型電腦，<br />
與平板電腦結合而成的「二合一」概念，<br />
是大部分電腦用家所期待的夢幻組合。<br />
<br />
但市場上大部分筆電平板二合一產品到目前為止都未臻完美， <br />
現在，就由VAIO來打破這個框架，為你帶來夢寐以求，最理想的「全方位型電腦」。
</p>
			</div>
		</div>                        
	</section>

<!----------------MENU 1------------------------------------------------>                    
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>全方位使用模式</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>令工作更便利</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>超越既有標準</h2>
                </a>
            </div>
        </div>
   </section>

   <section class="pt-section text-center" id="pt-1">
		<div class="container">
			<div class="selling-pt-sm active px-3"><strong>全方位使用模式</strong></div>
			<h2 class="pt-title mt-4">「功能」與「美學」兼備</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">	
				<p class="pt-content">
VAIO A12配備了平板螢幕及可拆式鍵盤，<br />
可因應用家的習慣及使用情況去轉換不同形態。<br />
<br />
這種貼心設計正是VAIO的核心價值，如懸掛式升降台、內嵌式鉸位、下沉式轉軸設計……<br />
透過各部組件精密的設計及剔除多餘的組件，將最完美的筆電平板「二合一」展現在大家眼前。
				</p>
			</div>
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/a12/img_area1_main.jpg" alt="">
			</div>
<!---------------------------------------------------------------->                    
			<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">將「全方位」實現的新形態</h2>
			<hr class="pt-title-hr">
				<p class="pt-content-title mx-auto text-left">利用可拆卸式組件隨意轉換出4種獨一無二的模式</p>						
				<p class="pt-content text-left">
VAIO A12成功活用平板螢幕及可拆卸式鍵盤，結合時可作為一般的摺合型電腦（①筆記簿模式）使用，將鍵盤拆除後則可以當作平板電腦使用（②平板模式）。<br />
<br />
除此之外，將平板螢幕反轉安裝在鍵盤時可成為③「閱覽模式」，最適合用作觀看影視節目；同時也能在「閱覽模式」下合上電腦，轉為④「閉合閱覽模式」，即使安裝著鍵盤仍可當作平板電腦使用。
				</p>
			</div>
        <div class="d-flex flex-wrap py-5">
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_1.jpg" alt=""><br />
①筆記簿模式
			</div>
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_2.jpg" alt=""><br />
②平板模式
			</div>
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_3.jpg" alt=""><br />
③閱覽模式
			</div>
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_4.jpg" alt=""><br />
④閉合閱覽模式
			</div>
        </div>
			<div class="col-12 col-lg-12 ">	
				<p class="pt-content text-left txt_small">
※在鍵盤上的輸入／輸出插孔、以及後備電源，只能在①筆記簿模式使用。<br />
※在配備無線鍵盤的情況下，在③模式中鍵盤和平板都能夠正常操作。
<br /><br /><br /><br />

				</p>
			</div>
<!---------------------------------------------------------------->    
			<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">輕巧、安全與美學兼備的「懸掛式升降台」<br />
</p>	
            </div>
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-12 ">
                	<p class="pt-content text-left">
VAIO A12的平板螢幕和鍵盤間連接的鉸位採用了專為本產品而新開發的「懸掛式升降台」設計，當螢幕打開時，鉸位下方的「升降台」隨即打開令重心往後移，有效確保機身穩定安全。在本產品推出前，市場上其他二合一筆記簿型電腦一般重心較高，螢幕打開的角度亦有所限制，需要加重底部重量以取得平衡以防止機身向後翻倒。
					</p>
                </div>
				<div class="col-12 col-lg-12  my-lg-5">
				<img src="/images/a12/img_area1_article1_section2_1.jpg" alt=""><br />
				</div>
			</div>
<!---------------------------------------------------------------->    
        <div class="main-content container  py-5" style="border:1px solid #808090;">
                <div class="d-flex flex-wrap">
                <div  class="col-12 col-lg-12 text-center" >
					<p class="pt-content text-left">市場上的二合一筆記簿型電腦</p>
                </div>
               <div  class="col-12 col-lg-4 py-4 text-center" >
				<img src="/images/a12/img_area1_article1_section2_2.jpg" alt=""><br />螢幕背部立架固定的類型
               </div>
               <div  class="col-12 col-lg-4 py-4 text-center" >
				<img src="/images/a12/img_area1_article1_section2_3.jpg" alt=""><br />將平板螢幕放在插槽的類型
               </div>
               <div  class="col-12 col-lg-4 py-4 text-center" >
				<img src="/images/a12/img_area1_article1_section2_4.jpg" alt=""><br />以巨型鉸位去固定螢幕的類型
               </div>
               </div>
               
        </div>
<!---------------------------------------------------------------->    
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
                	<p class="pt-content text-left">
「懸掛式升降台」除了安全穩定及輕巧外，表面連一個外露的螺絲孔也沒有，保留著對「美學」的執著。
					</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area1_article1_section2_5.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 "><p class="pt-content-title text-left">在電腦打開或關閉時都能使用的「雙重拆除按鈕」
					<br />
</p></div>
				<div class="col-12 col-lg-4 ">
                	<p class="pt-content text-left">
在機身的內外都分別裝配了兩個拆除螢幕按鈕，當螢幕打開或關閉時，都可以輕鬆將平板螢幕拆出，非常方便。除此之外，螢幕及鍵盤結合或拆除時的流暢感亦非常重要，藏在接駁部件裡面的磁石，磁力恰到好處，只要輕輕一觸就能輕鬆完成。					</p>
                </div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area1_article1_section3_1.jpg" alt="">
				</div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area1_article1_section3_2.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
			<div class="col-12 col-lg-12 ">	
			<h2 class="pt-title mt-4">秉承VAIO的「時尚靈巧」</h2>
			<hr class="pt-title-hr">
				<p class="pt-content-title mx-auto text-left">螢幕及鍵盤結合後有如普通筆記簿電腦一樣</p>						
				<p class="pt-content text-left">
採用了「懸掛式升降台」等嶄新的設計，令VAIO A12在外觀上與一般的摺合型筆記簿電腦幾乎是毫無分別，但當然也擁有VAIO下沉式轉軸設計、VAIO S11大獲好評的「超薄鋁合金腕托」等時尚設計，將美學與實用性完美結合。<br />
				</p>
			</div>
             

            
			<div class="col-12 col-lg-12 py-5">	
            
            
     <div style="display:none;margin:0px auto 0px;" 
	class="html5gallery"
	data-responsive="true"
	data-responsivefullscreen="true"
    data-mobileresizeevent="true"
    data-enabletouchswipe="true" 
	data-html5player="true"
	data-autoslide="false" 
	data-skin="gallery" 
	data-showtitle="true" 
    data-thumbshowtitle="false" 
    data-thumbheight="120" 
	data-showsocialmedia="false" 
	data-showfullscreenbutton="false"   
	data-autoplayvideo="false" 
	data-width="800" 
	data-height="450" 
	data-effect="slide" 
	data-resizemode="fit" 
	data-padding="0"
	data-galleryshadow="false"
	data-slideshadow="false"
	data-carouselmargin="20"
    data-showplaybutton="false"
    data-lightbox="false"
	>
            <a href="http://210.6.227.146/VAIO/vaio-hk/public/video/VAIO_A12_fin.mp4">
                <img src="/images/a12/img_productMovie.jpg" alt="VAIO A12介紹影片" >
            </a>
            <a href="/images/a12/img_area1_article2_section1_1.jpg">
                <img src="/images/a12/img_area1_article2_section1_1.jpg" alt="繼承了VAIO的身分象徵—「下沉式轉軸設計」。" >
            </a>
            <a href="/images/a12/img_area1_article2_section1_2.jpg">
                <img src="/images/a12/img_area1_article2_section1_2.jpg" alt="採用下沉式轉軸，打開螢幕時就會將鍵盤升高形成自然傾斜角度，令手腕在打字時更舒適。" >
            </a>
            <a href="/images/a12/img_area1_article2_section1_3.jpg">
                <img src="/images/a12/img_area1_article2_section1_3.jpg" alt="由株式會社東陽理化學研究所開發的「超薄鋁合金腕托」，不只有尊貴的外觀，就連觸感都是最頂級的，既可防塵抗污，亦令機身更加堅固。" >
            </a>
            <a href="/images/a12/img_area1_article2_section1_4.jpg">
                <img src="/images/a12/img_area1_article2_section1_4.jpg" alt="簡約耀目的設計概念" >
            </a> 
        </div> 
	</div>
</section>                
                    
<!--------------------Section 2-------------------------------------------->            
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>全方位使用模式</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>令工作更便利</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>超越既有標準</h2>
                </a>
            </div>
        </div>
   </section>
<!---------------------------------------------------------------->            
	<section class="pt-section text-center" style="background-color: #fff"  id="pt-2">
		<div class="container">
			<div class="selling-pt-sm active px-3"><strong>令工作更便利</strong></div>
			<h2 class="pt-title mt-4">理想的工作模式</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content text-left mb-5">
                VAIO A12的多種使用模式及新功能，令您工作更舒適、更有效率，
為你展現全新的工作模式。配合專用的觸控筆，給您有如書寫於紙上般順暢的體驗，將應用層面進一步擴闊！
</p>	
			</div>

<!---------------------------------------------------------------->                    
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/a12/img_area2_main.jpg" alt="">
			</div>
<!---------------------------------------------------------------->                    
			<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">更舒適地使用</h2>
			<hr class="pt-title-hr">
				<p class="pt-content-title mx-auto text-left">輕巧的平板電腦</p>						
				<p class="pt-content text-left">
可拆卸式平板螢幕，重量只有607g〜622g，與其他12寸級別的平板電腦相比絕對是超輕量級。厚度亦僅7.4mm，能夠輕鬆放進一般的公事包，易於攜帶。
				</p>
                <p class="text-left">
<span class="txt_small">* 重量會因組態及製造差異而有所不同。</span>
				</p>
			</div>

			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">觸控操作及重現書寫感覺的手寫筆輸入</p>						
				<p class="pt-content text-left">
                12.5寸顯示屏對應觸控操作，掃撥、放大、縮小等簡單直接的觸控動作，讓您輕鬆純熟地操作電腦。

                </p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section2_1.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">您亦可選擇使用專屬的觸控筆，將電腦變成電子筆記，觸控筆由Wacom公司研發，具 4,096 級感壓，提供自然的繪圖體驗。
                </p>
                <img src="/images/a12/img_area2_article1_section2_2.jpg" alt="">
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section2_3.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    

			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-4 ">
                	<p class="pt-content text-left">
另外，為了確保筆尖的觸碰位置與實際上所描繪的位置一致，液晶顯示屏與玻璃外層之間以特殊的光學樹脂進行全貼合加工，確保在書寫時不會出現視覺上的誤差。
					</p>
                </div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area2_article1_section2_4.jpg" alt="">
				</div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area2_article1_section2_5.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
<div class="col-12 col-lg-12 " style="border:1px solid #808090;">
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">方便攜帶的完美電腦</p>						
				<p class="pt-content text-left">
雖然是「二合一電腦」，但是除了為大家帶來手提電腦的方便外，輕巧、打字舒適感、擴充性等等各方面都從不妥協。
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_1.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">輕巧靈活的平板模式</p>						
				<p class="pt-content text-left">
將平板螢幕分開後，重量約607〜622g，厚度僅7.4mm，薄如普通文件，外型非常輕巧，就算要外攜電腦公幹，也變得輕鬆自在。
				</p>
                <p class="text-left">
<span class="txt_small">* 重量會因組態及製造差異而有所不同。</span>
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_2.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">共享畫面發揮團隊合作</p>						
				<p class="pt-content text-left">
利用平板螢幕，可與伙伴一同分享資訊，配合觸控筆等工具，就一同將工作完成吧！
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_4.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">成為智能家居的核心</p>						
				<p class="pt-content text-left">
由搜尋食譜、資訊板、以至和家人的視像通話。
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_6.jpg" alt="">
				</div>
			</div>
			<!--div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">用觸控筆繪圖</p>						
				<p class="pt-content text-left">
專用觸控筆有著繪畫時的手感，讓您在輕鬆繪畫時也能享受樂趣。
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_7.jpg" alt="">
				</div>
			</div-->
</div>
<!---------------------------------------------------------------->                    

		</div>                        
	</section>

<!--------------------Section 3-------------------------------------------->            
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>全方位使用模式</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>令工作更便利</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>超越既有標準</h2>
                </a>
            </div>
        </div>
   </section>
<!---------------------------------------------------------------->            
<section class="pt-section text-center" style="background-color: #fff"  id="pt-3">
	<div class="container">
			<div class="selling-pt-sm active px-3"><strong>超越既有標準</strong></div>
			<h2 class="pt-title mt-4">精益求精</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content mb-5">
市場中「二合一」電腦所面對的最大問題就是未能發揮可拆卸式筆記簿型電腦的常用應用功能。<br />
<br />
VAIO A12以「懸掛式升降台」設計克服了這個「二合一」一直存在的難題。<br />
<br />
我們深信使用VAIO A12，能令用家的效率大幅度提升，發揮出前所未有的效能。
</p>	
			</div>

<!---------------------------------------------------------------->                    
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/a12/img_area3_main.jpg" alt="">
			</div>
<!---------------------------------------------------------------->                    

			<h2 class="pt-title mt-4">每日攜帶外出也不覺倦</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">螢幕連接鍵盤時也只重約1kg</p>						
				<p class="pt-content text-left">
市場上可拆卸式的筆記簿型電腦，主機一般都是非常重，但VAIO A12就算是螢幕與鍵盤結合時的狀態也只重約1.099kg〜1.114kg，輕巧完美展現。
				</p>
                <p class="text-left">
                <span class="txt_small">* 重量會因組態及製造差異而有所不同。</span>
                </p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article1_section1_1.jpg" alt="">
				</div>
			</div>
			<!--div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">特強續航力</p>						
				<p class="pt-content text-left">
電池續航時間在連接鍵盤時可長達至約7.4〜8.1小時。同時亦配備防止電池容量急降的智慧充電技術。
除此之外，快速充電功能令你即使出發前忘記充電，亦能瞬間恢復足夠電量。<br />
<span class="txt_small">*電池續航時間是基於「日本電子情報技術產業協會JEITA測定法 2.0」規定計算。由於使用環境和操作方式不同，實際電池續航時間會和以上提及的電池續航時間或有差異。</span>
				</p>
                </div>
			</div-->
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">貼心設計</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">不會阻礙集中力的「靜音鍵盤」</p>						
				<p class="pt-content text-left">
VAIO A12在高精準度的鍵盤中選用了高強度的物料，提供更舒適的打字環境，降低了打字時發出的刺耳噪音。用家不用再擔心自己的打字聲會阻礙到身邊的人。<br />
<br />
基於二合一電腦的結構特點，腕托的周圍和底部不會出現過熱的情況，即使是長時間打字，或者將電腦放在膝上長時間使用，也不會感到不適。
				</p>
                </div>
			</div>
			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">
鍵盤的按鍵表層塗上了專門開發的UV硬化塗層。高耐磨、防汚的能力大大提升。含氟化物的UV硬化塗層同時有抗指紋的功效，令黑色鍵盤能夠歷久彌新。
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article2_section1_1.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">
當然，在光線不足的情況下如投影發放中的會議室或者是關燈後的機艙等，背光鍵盤* 也是必要之功能。
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article2_section1_2.jpg" alt="">
				</div>
			</div>
<!----------------------------------------------------------------->

			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-12 ">
                	<p class="pt-content-title mx-auto text-left">平滑流暢的觸控板
</p>						
				</div>
				<div class="col-12 col-lg-6 py-3">
				<p class="pt-content text-left">
配備有如智能手機螢幕一樣平滑流暢的「高精準度觸控屏」。為了防止用戶不小心地按錯左右鍵，特地裝配了左右實體按鍵，按鍵也跟鍵盤一樣做了細心的防噪音處理。
				</p>
				<img src="/images/a12/img_area3_article2_section2_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-6 py-3">
				<p class="pt-content text-left">
對應Windows 10的觸控板手勢，捲動、放大／縮小、上一頁／下一頁等基本操作都可以在觸控板輕鬆處理。				
				</p>
				<img src="/images/a12/img_area3_article2_section2_2.jpg" alt="">
				</div>
                
			</div>
<!----------------------------------------------------------------->

			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-6 ">
                <p class="pt-content-title mx-auto text-left">全力支撐兩手的「無限腕托」</p>						
				<p class="pt-content text-left">
採用會在使用時將鍵盤後方升高的下沉式轉軸設計，令腕托有一直往機身無限伸延的感覺，就如「無限腕托」，大幅減輕打字時對手掌以及手腕的負擔，讓您打字時更靈敏。
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article2_section3_1.jpg" alt="">
				</div>
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">機身細小應付一切需要</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">職場所需的全面接口</p>						
				<p class="pt-content text-left">
雖說供個人電腦使用的接駁口及格式一直推陳出新，但實際在職場上，VGA（模擬RGB輸出）仍然是會議室內的投影機最常見的接口。<br />
<br />
VAIO A12符合現實需要，同時兼容新舊制式。在平板螢幕側有USB Type-C™，在鍵盤側就配備了HDMI*<sup>1</sup>、VGA*<sup>2</sup>、有線LAN、以及三個USB接口、SD記憶卡槽等、必要的配備都全部有齊。除此之外，HDMI／VGA以及USB Type-C™（影像接口）*<sup>3</sup> 可以同時輸出，連同平板螢幕可以同時三畫面顯示。
              <br /><br />
 <span class="txt_small">*1最大輸出解像度為1920×1200/60Hz。不能同時與VGA使用。<br />
*2最大輸出解像度為1920×1080。不能同時與HDMI使用。<br />
*3最大輸出解像度為4096×2160/30Hz或3840×2160/60Hz。
</span>
</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article3_section1_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-12 ">
				<img src="/images/a12/img_area3_article3_section1_2.jpg" alt="">
				<p class="pt-content text-left">
平板螢幕側的USB Type-C™，可以一條傳送線連接各款周邊產品，同時進行傳送及充電的最新型接口。即使在與鍵盤分離的狀態，亦不會出現擴展性不足的情況。			
				<br />
<br />
</p>
                </div>
<!------------------------->                
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">配備高品質的揚聲器及麥克風</p>						
				<p class="pt-content text-left">
揚聲器內置於螢幕的左右兩側，立體聲令影音效果更加逼真震撼。內置雙重麥克風能隔除雜音，在視像會議或通話時清晰地只接收講者的聲音。同時，雙重麥克風能對應波束賦形技術，可清楚反映話者方向，即使在嘈雜的環境亦能向對方傳遞清晰的聲音。
				</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article3_section2_1.jpg" alt="">
                </div>
<!------------------------
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">以高畫質後鏡頭作即時資訊傳遞</p>						
				<p class="pt-content text-left">
配備後鏡頭的型號都在螢幕背部裝有高解像度CMOS拍攝鏡頭，可以輕鬆拍攝白板或紙張上的資訊，並存取到電腦內。
				</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article3_section3_1.jpg" alt="">
                </div>
<!------------------------->   
				<div class="col-12 col-lg-6"  style="margin-top:60px;">
				<p class="pt-content-title mx-auto text-left">多人使用依然保持高速的最新Wi-Fi技術</p>						
				<p class="pt-content text-left">
同時對應既高速又不容易受到干擾的5GHz Wi—Ｆi、以及能夠高速傳送數據的Wi-Fi最新規格「IEEE802.11ac」及就算同時多人連線也不會拖慢速度的「MU-MIMO」
				</p>
                </div>
                <div class="col-12 col-lg-6"  style="margin-top:60px;">
                    <img src="/images/a12/img_area3_article4_section4_2.jpg" alt="">
                </div>
<!------------------------->   
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">防範於未然的保安系統</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">指紋或容貌的生物辨識防護</p>						
				<p class="pt-content text-left">
VAIO A12有兩款對應Windows Hello的生物認證方式可供選擇。在掃描器放上手指就可以識別的指紋認證、以及內置在前鏡頭自動識別用家外貌的容貌識別，兩種方法都可以瞬間登入電腦（指紋識別亦可用於電腦從睡眠狀態回復*）。免除煩瑣的密碼輸入，透過生物認證方式，保安強度亦能提高，同時降低登入時被偷看密碼或者以間諜程式進行盜取的風險，確保電腦的安全性。</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article5_section1_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article5_section1_2.jpg" alt="">
                </div>
				<!--div class="col-12 col-lg-12 py-5">
				<p class="pt-content-title mx-auto text-left ">全面涵蓋企業所期待的規格要求</p>						
				<p class="pt-content text-left">
除了鍵盤備有固定主體的保險鎖之外，作業系統和其他硬件都備有獨立的保安晶片（TPM*<sup>1</sup>）。以往於HDD或SSD中保存的加密金鑰亦可以獨立管理，提供職場上必須有的強大保安*<sup>2</sup>。
				<br />
<br />
</p>
				</div>
				<div class="col-12 col-lg-12 ">
                
<p class="pt-content text-left">
<span class="txt_small">*1 TPM:Trusted Platform Module。<br />
*2 TPM並不完全保證資料或硬件受到絕對保護。<br />
</span>
                </p>
                </div-->
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">保護重要資料的堅固機身</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">通過嚴格品質測試的耐用保證</p>						
				<p class="pt-content text-left">
即使是可拆卸式組件，VAIO為了保持一直受到大眾好評的耐用度，作出了各種各樣不同的努力。螢幕方面使用了AGC強化玻璃「Dragontrail™ Pro」，最講求耐用度的本體連接部分也是用由日本國內廠商共同研發的高耐用度接駁組件。再基於實際使用時的情境，進行各式各樣的品質測試，務求每一台出廠的電腦都有最高的耐用度。
</p>
                </div>
				<div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article6_section1_2.jpg" alt="">
                <div class="pt-content text-left">螢幕的角落部分先空出較大的弧位，然後再以一層更堅固的強化玻璃保護。</div>
                </div>
                <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="524" height="308" src="https://www.youtube.com/embed/Su9Q2awpbQM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="" id="player2"></iframe>
                    </div>
                <div class="pt-content text-left">連接部分在拆除時會有自動清理機能，防止接觸不良的情況發生。</div>
                </div>

				<div class="col-12 col-lg-4 ">
                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="334" height="188" src="https://www.youtube.com/embed/Nio7-GP0Qdc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="" id="player2"></iframe>
                    </div>
                </div>
				<div class="col-12 col-lg-4 ">
                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="334" height="188" src="https://www.youtube.com/embed/MbHH7s8LGkM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="" id="player3"></iframe>
                    </div>
                </div>
				<div class="col-12 col-lg-4 ">
                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="334" height="188" src="https://www.youtube.com/embed/00ajPX6IoN4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="" id="player4"></iframe>
                    </div>
                </div>
				<div class="col-12 col-lg-12 ">
                    <a href="https://hk.vaio.com/tc/quality" class="btn pink-btn mt-3">了解更多</a>
                </div>
				<div class="col-12 col-lg-12 py-5">
				<p class="pt-content text-left txt_small">
※品質測試是基於本公司的規定於特定的環境下進行。本產品的品質測驗並不代表確保產品沒有任何破損或故障，亦不保證SSD內的資料安全。<br />
*1 防水只限於鍵盤表面水濺的情況，並不包括對排氣／吸氣口、各種插口的入水情況進行測試。如遇到水濺事故，應立即到就近之VAIO特約維修中心進行檢測或維修。
                </p>
                </div>
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">高效能表現</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-8 ">
				<p class="pt-content-title mx-auto text-left">採用節電能力更佳的第八代Intel®Core™處理器</p>						
				<p class="pt-content text-left">
為了同時達到高性能及節電效能，CPU採用了第八代Intel®Core™處理器。覆蓋CPU的外殼使用了鋁和不鏽鋼複合材質製造，在輕巧的同時能有效地為CPU散熱，配合VAIO獨有的高效散熱設計，就算沒有配置散熱扇也沒有問題。既不會過熱，也沒有散熱扇的嘈吵雜音，同時亦減省了多餘的裝置，多方面的優點令產品更值得可信賴。</p>
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/a12/img_area3_article7_section1_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-12 ">
				<!--p class="pt-content-title mx-auto text-left">根據您的用途選擇合適的SSD</p>						
				<p class="pt-content text-left">
SSD方面除了一般的SATA SSD之外，可以選用更高速的「第三代高速SSD」。
使用高速的內存，可以令檔案抄讀及啟動應用程序等各方面的日常應用更加快捷，更加高效。
</p-->
				<p class="pt-content-title mx-auto text-left">對應大容量16GB記憶體</p>						
				<p class="pt-content text-left">
能配備大容量16GB記憶體，誠意推薦給需要同時開啟或播放多個高解像度圖片、映像以及檔案進行工作的人士。
				</p>
                </div>

                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">高可視角度的高畫質螢幕</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-4 ">
				<p class="pt-content-title mx-auto text-left">高亮度・廣視角<br />
高對比度的IPS液晶</p>						
				<p class="pt-content text-left">
配備對應全高清顯示（1920×1080解像度）的12.5寸液晶顯示屏，利用IPS液晶螢幕，做成高亮度、廣視角、高對比度的顯示質素。在屏幕與玻璃之間以樹脂作全貼合加工，令液晶螢幕的效能全面發揮，顯示出最鮮明、引以為傲的高畫質。                
                </p>
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/a12/img_area3_article8_section1_1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/a12/img_area3_article8_section1_2.jpg" alt="">
                </div>
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">「MADE IN JAPAN」的安心感</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">日本製造的VAIO A12</p>						
				<p class="pt-content text-left">
VAIO A12是由組裝工序開始就在日本長野縣安曇野市的VAIO本社進行的「日本製」型號，「超薄鋁合金腕托」等重要部分都是用日本製造的配件，觸控屏、鍵盤等組裝時要求高精準度的部分，都是由日本國內的工場仔細地逐步處理，務求確保最好的品質。
               </p>
                </div>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">「安曇野FINISH」為每台電腦作嚴謹檢查</p>						
				<p class="pt-content text-left">
所有VAIO個人電腦都是由日本長野縣安曇野市的VAIO本社內的專業技術人員處理，經過多達50項品質檢查後才會出廠上市，我們為此冠上「安曇野FINISH」這個稱號。這是我們為了對所有產品的質素負責而所施行的最後工序。
               </p>
                </div>
				<div class="col-12 col-lg-12 ">
                    <a href="{{ route('quality.azumino_finish') }}" class="btn pink-btn mt-3">了解更多</a>
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
