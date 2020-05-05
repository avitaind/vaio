@extends('layout.app')

@section('title', 'VAIO A12')

@section('product_nav')
    @include('products.a12.product_nav')
@stop

@section('content')
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">
			
			<a href="https://vaio-sg.nexstmall.com/" target="_blank"  class="swiper-slide">
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/a12/A12e.jpg)">
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
        .cms-banner-5 .main-banner{
            background-image: url(/images/a12/A12e.jpg);
        }

        @media(max-width: 991px) {
            .cms-banner-5 .main-banner{
            background-image: url(/images/a12/A12-2e.jpg);
            }
			
			.swiper-container {
				padding-bottom: 0px;
			}
						
        }

    </style>

@endpush
<!--- Banner end here------------------------------------>

<!-----------------------INTRO----------------------------------------->        
	<section class="pt-section text-center" style="background-color: #eeeeee" >
		<div class="container">
			<h2 class="pt-title mt-4">A new generation of 2-in-1</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content mb-5">
A combination of a clamshell laptop and a tablet is what most computer users expect from a 2-in-1
<br /><br />

However, most 2-in-1 devices on the market have been far from perfect. <br />
Now, VAIO breaks through the limit and brings you the ideal "all-round computer" that you have always dreamt of.
</p>	
			</div>
		</div>                        
	</section>

<!----------------MENU 1------------------------------------------------>                    
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>Forms that fit all scenarios</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Make work easier</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Go beyond existing standards</h2>
                </a>
            </div>
        </div>
   </section>

<section class="pt-section text-center" id="pt-1">
		<div class="container">
			<div class="selling-pt-sm active px-3"><strong>Forms that fit all scenarios</strong></div>
			<h2 class="pt-title mt-4">When functionality meets style</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">	
				<p class="pt-content">
VAIO A12 features a touch screen and a detachable keyboard, making it possible to transform to fit the user’s habits and usage.
<br />
<br />
Smart designs such as the VAIO&reg; Stabilizer Flap, reverse hinge and natural slanting angle keyboard exemplify VAIO’s DNA. Through the meticulous design of various components and eliminating redundant parts, the perfect 2-in-1 device is born.
				</p>
			</div>
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/a12/img_area1_main.jpg" alt="">
			</div>
<!---------------------------------------------------------------->                    
			<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">Forms that fit every scenario</h2>
			<hr class="pt-title-hr">
				<p class="pt-content-title mx-auto text-left">4 unique versatile modes courtesy of detachable components</p>						
				<p class="pt-content text-left">
With the touch screen and the removable keyboard, VAIO A12 can function as a traditional laptop (① laptop mode) or as a tablet (② tablet mode) with the keyboard base removed.<br />
<br />
In addition, the device can be converted into ③ view mode when the screen is flipped backward with the keyboard attached, best for streaming content and videos. Flipping the screen back to back with the keyboard during view mode converts the device to ④ folding view mode, where it can be used as a tablet even without the need for removing the keyboard.
				</p>
			</div>
        <div class="d-flex flex-wrap py-5">
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_1.jpg" alt=""><br />
①Laptop mode
			</div>
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_2.jpg" alt=""><br />
②Tablet mode
			</div>
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_3.jpg" alt=""><br />
③View mode
			</div>
			<div class="col-12 col-lg-3 ">
				<img src="/images/a12/img_area1_article1_section1_4.jpg" alt=""><br />
④Folding view mode
			</div>
        </div>
			<div class="col-12 col-lg-12 ">	
				<p class="pt-content text-left txt_small">
※The input/output ports on the keyboard and the backup power supply can only be used in ① laptop mode.<br />
※ When equipped with a wireless keyboard, both the keyboard and tablet can be operated normally in modes ③.
<br /><br /><br /><br />

				</p>
			</div>
<!---------------------------------------------------------------->    
			<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">VAIO&reg; Stabilizer Flap that combines portability, stability and style<br />
</p>	
            </div>
			<div class="d-flex flex-wrap">
				<div class="col-12 col-lg-12 ">
                	<p class="pt-content text-left">
The hinge of VAIO A12 connecting the screen and the keyboard adopts a specially designed VAIO&reg; Stabilizer Flap mechanism. The Flap opens under the hinge as the screen opens and effectively stabilizes the device. This solves the problem where most traditional 2-in-1 devices either have restricted viewing angles due to the poor balance between the screen and the keyboard, or have a heavy bottom to compensate the weight of the screen.
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
					<p class="pt-content text-left">2-in-1 computers on the market</p>
                </div>
               <div  class="col-12 col-lg-4 py-4 text-center" >
				<img src="/images/a12/img_area1_article1_section2_2e.jpg" alt=""><br />Kick stand at the back of the screen
               </div>
               <div  class="col-12 col-lg-4 py-4 text-center" >
				<img src="/images/a12/img_area1_article1_section2_3e.jpg" alt=""><br />Inserting screen on a dock
               </div>
               <div  class="col-12 col-lg-4 py-4 text-center" >
				<img src="/images/a12/img_area1_article1_section2_4e.jpg" alt=""><br />Screen attached through a giant hinge
               </div>
               </div>
               
        </div>
<!---------------------------------------------------------------->    
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
                	<p class="pt-content text-left">
Other than providing stability and portability, VAIO&reg; Stabilizer Flap has no visible screw holes, preserving the overall aesthetics.					</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area1_article1_section2_5.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 "><p class="pt-content-title text-left">Dual Release Switch to detach the screen any time<br />
</p></div>
				<div class="col-12 col-lg-4 ">
                	<p class="pt-content text-left">
By incorporating two release switches on both the inside and outside of the device, the screen can be detached with ease whether it is closed or not. Besides, we care about how smoothly the keyboard base snaps on and off the screen. Magnets hidden inside the hinge are carefully designed to give the perfect amount of force so the screen can be detached from the keyboard with a single touch.
					</p>
                </div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area1_article1_section3_1e.jpg" alt="">
				</div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area1_article1_section3_2.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
			<div class="col-12 col-lg-12 ">	
			<h2 class="pt-title mt-4">Stay true to VAIO's Smart Design</h2>
			<hr class="pt-title-hr">
				<p class="pt-content-title mx-auto text-left">A 2-in-1 that functions and feels like a true laptop</p>						
				<p class="pt-content text-left">
Accommodating ground-breaking designs like the VAIO&reg; Stabilizer Flap mechanism, VAIO A12 has the appearance of a regular clamshell laptop. Graced with stylish designs like VAIO’s iconic natural slanting angle keyboard and VAIO S11’s well-beloved aluminum alloy palm rest, VAIO A12 offers practicality without compromising its aesthetics.<br />
				</p>
			</div>
             

<!--------------------Slide gallery------------->            
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
                <img src="/images/a12/img_productMovie.jpg" alt="VAIO A12 product introduction video" >
            </a>
            <a href="/images/a12/img_area1_article2_section1_1.jpg">
                <img src="/images/a12/img_area1_article2_section1_1.jpg" alt="Natural slanting angle keyboard that exemplifies VAIO’s design DNA" >
            </a>
            <a href="/images/a12/img_area1_article2_section1_2.jpg">
                <img src="/images/a12/img_area1_article2_section1_2.jpg" alt="When the screen is opened, the keyboard is tilted automatically to reduce stress on the wrists, creating a delightful typing experience." >
            </a>
            <a href="/images/a12/img_area1_article2_section1_3.jpg">
                <img src="/images/a12/img_area1_article2_section1_3.jpg" alt="Developed by the Toyo Rikagaku Kenkyusho, Ltd, the aluminum alloy palm rest has an elegant finish and excellent touch. The dust-proof and stain-resistant palm rest also lends extra protection to the device." >
            </a>
            <a href="/images/a12/img_area1_article2_section1_4.jpg">
                <img src="/images/a12/img_area1_article2_section1_4.jpg" alt="Simple design with accented details." >
            </a> 
        </div> 
	</div>
    
    </div>
</section>                
                    
<!--------------------Section 2-------------------------------------------->            
    <section id="vaio-product">
        <div class="main-content container  py-5">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Forms that fit all scenarios</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>Make work easier</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Go beyond existing standards</h2>
                </a>
            </div>
        </div>
   </section>
<!---------------------------------------------------------------->            
	<section class="pt-section text-center" style="background-color: #fff"  id="pt-2">
		<div class="container">
			<div class="selling-pt-sm active px-3"><strong>Make work easier</strong></div>
			<h2 class="pt-title mt-4">The ideal work style</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content text-left mb-5">
The VAIO A12 allows you to embrace a brand-new work style by supporting multiple modes and a wide range of functionalities that make you work more comfortably and efficiently. The stylus pen provides the natural feel of a pen-on-paper experience so you can achieve more than you could with a regular pen.</p>	
			</div>

<!---------------------------------------------------------------->                    
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/a12/img_area2_main.jpg" alt="">
			</div>
<!---------------------------------------------------------------->                    
			<div class="col-12 col-lg-12 ">
			<h2 class="pt-title mt-4">More comfortable to use</h2>
			<hr class="pt-title-hr">
				<p class="pt-content-title mx-auto text-left">Lightweight tablet</p>						
				<p class="pt-content text-left">
The ultra-lightweight detachable screen weighs only 623g, far lighter than other 12-inch tablets. It is only 7.4mm thick, making it easy to be popped into a briefcase and carry around with no hassle.
				</p>
                <p class="text-left">
<span class="txt_small">* Weights vary depending on configuration and manufacturing variability.</span>
				</p>
			</div>

			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Intuitive touch operation and a stylus pen that provides a pen-on-paper feel</p>						
				<p class="pt-content text-left">
                The 12.5-inch touch screen supports intuitive touch actions such as swiping, zooming in and zooming out. Operating through the screen is a breeze.

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
				<p class="pt-content text-left">You can also turn your device into a digital notebook with the stylus developed by Wacom. The pen has 4,096 levels of pressure sensitivity, giving you a natural pen-like drawing experience.
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
Besides, a layer of special optical resin fills the air gap between the LCD and glass panel to minimize light refraction. Improved visibility enhances accurate cursor positioning so you can write and draw with high precision.
					</p>
                </div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area2_article1_section2_4e.jpg" alt="">
				</div>
				<div class="col-12 col-lg-4 ">
				<img src="/images/a12/img_area2_article1_section2_5e.jpg" alt="">
				</div>
			</div>
<!---------------------------------------------------------------->    
<div class="col-12 col-lg-12 " style="border:1px solid #808090;">
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Ultimate portability</p>						
				<p class="pt-content text-left">
VAIO 12 is a 2-in-1 device that functions as a laptop with uncompromised portability, typing experience and connectivity.				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_1.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Ultra-light and versatile tablet mode</p>						
				<p class="pt-content text-left">
When separated from the keyboard base, the screen weights about 623g and is only 7.4mm thick - as thin as a regular document. The lightweight design makes every business trip a breeze.
				</p>
                <p class="text-left">
<span class="txt_small">* Weights vary depending on configuration and manufacturing variability.</span>
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_2.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Make the most with screen sharing</p>						
				<p class="pt-content text-left">
Get the job done by sharing information on the screen with your business partners and presenting your ideas with the stylus and many other accessories.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_4.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Heart of a smart home</p>						
				<p class="pt-content text-left">
Search for your favorite recipes, browse news feeds, and even make video calls with your family.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area2_article1_section6_6.jpg" alt="">
				</div>
			</div>
			<!--div class="d-flex flex-wrap py-5">
					</p>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Draw with the stylus</p>						
				<p class="pt-content text-left">
The specially designed stylus replicates the natural feel of drawing, offering a smooth and delightful drawing experience.				</p>
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
                    <h2>Forms that fit all scenarios</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-4 selling-pt py-4 text-center">
                    <h2>Make work easier</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center active">
                    <h2>Go beyond existing standards</h2>
                </a>
            </div>
        </div>
   </section>
<!---------------------------------------------------------------->            
<section class="pt-section text-center" style="background-color: #fff"  id="pt-3">
	<div class="container">
			<div class="selling-pt-sm active px-3"><strong>Go beyond existing standards</strong></div>
			<h2 class="pt-title mt-4">Strive for perfection</h2>
			<hr class="pt-title-hr">
			<div class="pt-content-wrapper mx-auto">
				<p class="pt-content mb-5">
Conventional 2-in-1 computers often fall short of offering the most basic functions of a clamshell laptop.<br />
<br />
VAIO&reg; Stabilizer Flap mechanism overcomes the long-standing problem of 2-in-1 devices.<br />
<br />
By providing users with a hassle-free experience, VAIO A12 boosts work efficiency and helps users to unleash their potential.
</p>	
			</div>

<!---------------------------------------------------------------->                    
			<div class="fs-0 my-4 my-lg-5">
				<img src="/images/a12/img_area3_main.jpg" alt="">
			</div>
<!---------------------------------------------------------------->                    

			<h2 class="pt-title mt-4">Handy device that you can bring anywhere effortlessly</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Screen with keyboard attached weights only around 1.1 kg
</p>						
				<p class="pt-content text-left">
VAIO A12 outcompetes ordinary laptops in weight at only 1.115kg even when the keyboard is attached, granting supreme portability.
				</p>
                <p class="text-left">
                <span class="txt_small">* Weights vary depending on configuration and manufacturing variability.</span>
                </p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article1_section1_1.jpg" alt="">
				</div>
			</div>
			<!--div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">Outstanding battery life</p>						
				<p class="pt-content text-left">
Battery lasts for 7.4 to 8.1 hours when connected to the keyboard. Smart charging technology is adopted to prevent sudden drop in battery capacity.In addition, even if you forget to fully charge your device before leaving home, you can always conduct a power charge within a short period of time by fast charging.<br />
<span class="txt_small">*Battery life is calculated based on the Japan Electronics and Information Technology Industries Association (JEITA) Measurement Method version 2.0. Due to the different environments and operating methods, the actual battery life may differ from the battery life mentioned above.</span>
				</p>
                </div>
			</div-->
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">Thoughtful design</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">Silent keyboard that prevents distraction</p>						
				<p class="pt-content text-left">
Made with highly durable material, each keycap of VAIO A12 is precision-engineered on the keyboard for greater comfort while minimizing annoying typing noises at the same time. A quieter keyboard means you and the people around you can work without distraction.<br />
<br />
Structurally, 2-in-1 does not overheat around the palm wrist rest and at the bottom, meaning you can stay cool and comfortable even after a long day of work with the device put on your lap.
				</p>
                </div>
			</div>
			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">
The surface of each keycap is coated with specially developed high abrasion resistance UV coating that keeps the keys durable and clean. The fluoride in the coating also mitigate smudge and keep the keyboard good as new even after prolonged usage.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article2_section1_1e.jpg" alt="">
				</div>
			</div>
			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content text-left">
Typing in a dimly-lit conference room or aircraft cabin is made easy with the backlit keyboard*.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article2_section1_2e.jpg" alt="">
				</div>
			</div>
<!----------------------------------------------------------------->

			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-12 ">
                	<p class="pt-content-title mx-auto text-left">Silky smooth touchpad
</p>						
				</div>
				<div class="col-12 col-lg-6 py-3">
				<p class="pt-content text-left">
Smooth as a smartphone screen, the high-precision, noise-free touchpad features the left and right physical buttons so you don’t have to worry about pressing the wrong buttons by mistake.
				</p>
				<img src="/images/a12/img_area3_article2_section2_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-6 py-3">
				<p class="pt-content text-left">
Correspond to Windows 10’s touchpad gestures where you can perform scroll, zoom in/out, go to the previous/next page and other actions with ease.
				</p>
				<img src="/images/a12/img_area3_article2_section2_2e.jpg" alt="">
				</div>
                
			</div>
<!----------------------------------------------------------------->

			<div class="d-flex flex-wrap py-3">
				<div class="col-12 col-lg-6 ">
                <p class="pt-content-title mx-auto text-left">“Infinite palm rest” that offers maximum comfort</p>						
				<p class="pt-content text-left">
The natural slanting angle mechanism acts like a support that raises the keyboard to an optimum angle to give maximum comfort. It feels as if the palm rest extended along the keyboard. This ergonomic design greatly reduces the stress on your palms and wrists and lets you work more efficiently.
				</p>
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article2_section3_1e.jpg" alt="">
				</div>
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">Compact but serves all your needs</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Our ports mean business</p>						
				<p class="pt-content text-left">
New ports and connectors for computers emerge constantly. But when it comes to business settings, VGA (analog RGB output) is still the most common connector among conference room projectors.<br />
<br />
The VAIO A12 meets real-world needs and is compatible with both the old and the new standards. On the side of the screen is a USB Type-C&#8482; port while the keyboard houses an HDMI port *<sup>1</sup>, a VGA connector*<sup>2</sup>, a LAN port, three USB ports, an SD card slot and many more, providing all necessary connections. In addition, HDMI/VGA and USB Type-C&#8482; (video interface)*<sup>3</sup> can work at the same time and output content on three different screens simultaneously together with the tablet screen. <br /><br />
 <span class="txt_small">*1 The maximum output resolution is 1920 × 1200 / 60Hz. Cannot be used with VGA at the same time.<br />
*2 The maximum output resolution is 1920×1080. Cannot be used with HDMI at the same time.<br />
*3 The maximum output resolution is 4096 × 2160 / 30Hz or 3840 × 2160 / 60Hz.
</span>
</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article3_section1_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-12 ">
				<img src="/images/a12/img_area3_article3_section1_2.jpg" alt="">
				<p class="pt-content text-left">
The new USB Type-C&#8482; port allows the screen to connect to various peripherals and accessories through a cable and transmit data while charging simultaneously. The port is placed on the side of the screen so connectivity isn’t hindered even if the screen is used as a standalone tablet without the keyboard. <br />
<br />
</p>
                </div>
<!------------------------->                
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Premium speakers and microphone</p>						
				<p class="pt-content text-left">
With the quality speakers on both sides of the screen, VAIO A12 delivers stereo sound that makes any audios and videos more realistic than ever. The built-in dual microphone filters out noises and receives only the speaker's voice during video conferences or calls. Moreover, the dual microphone adopts the beamforming technology and can reflect the voice direction clearly, ensuring the sound delivered is crystal-clear even in a noisy environment.
				</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article3_section2_1e.jpg" alt="">
                </div>
<!------------------------->   
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Capture documents instantly with high-quality rear camera</p>						
				<p class="pt-content text-left">
Models with a rear camera like VAIO A12 are equipped with a high-resolution CMOS sensor on the back of the screen, making it easy to capture information on a whiteboard or paper and store it in the device.<br />
<br />
				</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article3_section3_1e.jpg" alt="">
                </div>
<!------------------------->   
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Latest ultra-fast Wi-Fi ensures speedy multiple connections</p>						
				<p class="pt-content text-left">
Support the fast and stable 5GHz Wi-Fi, the latest IEEE802.11ac Wi-Fi that is able to transmit data at high speed, as well as "MU-MIMO" that maintains high transmission speed even multiple people are connected to the network simultaneously.
				</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article4_section4_2e.jpg" alt="">
                </div>
<!------------------------->   
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">Exceptional security to prevent malicious intent</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">Fingerprint and face recognition biometric authentication</p>						
				<p class="pt-content text-left">
The VAIO A12 supports the two biometric login options enforced by Windows Hello. You can log in almost instantly by placing your finger on the fingerprint sensor, or through face authentication that automatically recognizes your face with the built-in camera (Fingerprint recognition can also wake the PC from sleep mode*). By eliminating the cumbersome password input, biometric authentication fortifies the security of your PC and minimizes the risk of exposing your password or being hacked by spyware.<br />
<br />
<span class="txt_small">* The function is turned off by default and can be activated via “VAIO Control Center".</span></p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article5_section1_1e.jpg" alt="">
                </div>
				<div class="col-12 col-lg-6 ">
				<img src="/images/a12/img_area3_article5_section1_2e.jpg" alt="">
                </div>
				<!--div class="col-12 col-lg-12 py-5">
				<p class="pt-content-title mx-auto text-left ">Comprehensive specifications that meet the needs of any business</p>						
				<p class="pt-content text-left">
Other than the physical lock that secures the screen onto the keyboard, separate security chips (TPM*<sup>1</sup>) is equipped to enhance the security of the operating system and other hardware. The encryption keys previously stored in HDD or SSD can also be managed independently, offering superb security*<sup>2</sup> that every business needs.
				<br />
<br />
</p>
				</div>
				<div class="col-12 col-lg-12 ">
                
<p class="pt-content text-left">
<span class="txt_small">*1 TPM:Trusted Platform Module。<br />
*2 TPM does not guarantee complete protection of data or hardware.<br />
</span>
                </p>
                </div-->
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">Robust chassis to protect valuable information</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-12 ">
				<p class="pt-content-title mx-auto text-left">Durability that passes stringent quality tests</p>						
				<p class="pt-content text-left">
To keep up with the durability that the brand has known for, VAIO goes the extra mile to make sure even the detachable parts live up to everyone’s expectation. The screen uses AGC’s DragontrailTM Pro tempered glass, and the hinge – a part that requires the highest level of durability – is made of high-endurance connecting units that are jointly developed by various Japanese manufacturers. A suite of quality tests reflecting actual usage scenarios are carried out to ensure each computer sent to the market has the highest structural strength.
</p>
                </div>
				<div class="col-12 col-lg-6 ">
                    <img src="/images/a12/img_area3_article6_section1_2.jpg" alt="">
                <div class="pt-content text-left">The corners of the bezel are made slightly thicker to provide extra protection of the glass.</div>
                </div>
                <div class="col-12 col-lg-6 mb-5 pb-4 pb-lg-0">
                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="524" height="308" src="https://www.youtube.com/embed/Su9Q2awpbQM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="" id="player2"></iframe>
                    </div>
                <div class="pt-content text-left">Contact issues are avoided with a self-cleaning mechanism that swipes away dust every time the screen is snapped on and off.</div>
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
                    <a href="https://sg.vaio.com/quality" class="btn pink-btn mt-3">Read more</a>
                </div>
				<div class="col-12 col-lg-12 py-5">
				<p class="pt-content text-left txt_small">
※Quality tests are carried out in a specific environments based on VAIO’s regulations. The product’s quality tests do not guarantee that it is free from any damage or malfunction, nor do they guarantee the safety of the data in the SSD.<br />
*1 The water-resistant test is limited to splashes on the surface of the keyboard and does not consider water seeping through air vents and ports. In the event of a splash, visit the nearest VAIO designated repair center immediately for examination or repair.
                </p>
                </div>
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">Exceptional performance that never disappoints</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-8 ">
				<p class="pt-content-title mx-auto text-left">More power-efficient with the 8th generation Intel®Core™ processor</p>						
				<p class="pt-content text-left">
Featuring the 8th generation Intel® Core™ processor, VAIO A12 delivers higher performance and power efficiency in a lightweight aluminum-stainless steel alloy chassis that effectively disperses heat generated by the CPU. VAIO’s unique efficient cooling system eliminates the need for a fan. Because the PC never overheats and no fan is needed, it eliminates unnecessary noise as well as redundant parts all together for a more reliable device.
</p>
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/a12/img_area3_article7_section1_1.jpg" alt="">
                </div>
				<div class="col-12 col-lg-12 py-3">
				<!--p class="pt-content-title mx-auto text-left">Choose the right SSD that is most suited for your needs</p>						
				<p class="pt-content text-left">
Optional 3rd generation high-speed SSD in addition to the general SATA SSD.<br />
Everyday tasks such as file copying and app loading are faster and more efficient with high-speed storage.
</p-->
				<p class="pt-content-title mx-auto text-left">Support large capacity 16 GB memory</p>						
				<p class="pt-content text-left">
The device supports memory of up to 16 GB, suitable for users who need constant multitasking or handle multiple high-resolution images or videos.
				</p>
                </div>

                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">High-definition screen with extended viewing angle</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-4 ">
				<p class="pt-content-title mx-auto text-left">Brighter and wider<br />
High contrast IPS LCD display</p>						
				<p class="pt-content text-left">
Featuring a 12.5-inch LCD screen with full HD display (1920×1080 resolution) and adopting the IPS LCD technology, VAIO A12 provides images of higher brightness and contrast with a wider viewing angle. The glass panel adheres to the LCD with optical resin that brings out the best on the screen by showing the images of their highest quality.
                </p>
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/a12/img_area3_article8_section1_1e.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 ">
                    <img src="/images/a12/img_area3_article8_section1_2e.jpg" alt="">
                </div>
                
			</div>
<!----------------------------------------------------------------->
			<h2 class="pt-title mt-4">Made in Japan – A quality assurance</h2>
			<hr class="pt-title-hr">
            
			<div class="d-flex flex-wrap py-5">
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">VAIO A12 that is made in Japan</p>						
				<p class="pt-content text-left">
Starting from the assembly work, VAIO A12 is a model entirely manufactured at VAIO’s headquarters in Azumino, Nagano Prefecture, Japan. To ensure the highest quality possible, crucial parts like the aluminum alloy palm rest and components that require high precision during assembly such as the touchpad and keyboard are all carefully processed by the factories in the country.               </p>
                </div>
				<div class="col-12 col-lg-6 ">
				<p class="pt-content-title mx-auto text-left">Every device is scrutinized to meet the standard of “Azumino Finish”</p>						
				<p class="pt-content text-left">
All VAIO personal computers are manufactured by the technicians at in VAIO’s headquarters in Azumino, Nagano Prefecture, Japan. Each VAIO computer has to pass 50 quality control tests before it can be delivered to the hands of customers. We named this particular set of procedures the “Azumino Finish”, which is the definition of how we pursue perfection at VAIO.               </p>
                </div>
				<div class="col-12 col-lg-12 ">
                    <a href="{{ route('quality.azumino_finish') }}" class="btn pink-btn mt-3">Read more</a>
                </div>
			</div>

	</div>
</section>
    <div class="support-center-wrap">
        <div class="container">

            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    <p class="spec-item-name" style="font-size: 0.8rem;">
                        Intel, the Intel logo, the Intel Inside logo and Intel Core are trademarks of Intel Corporation in the U.S. and/or other countries.<br>
                        The use of the "VAIO" trademark is by the permission of and subject to license with VAIO Corporation.
                    </p>

                </div>
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
