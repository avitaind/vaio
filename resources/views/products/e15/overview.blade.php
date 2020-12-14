@extends('layout.app')

@section('title', 'VAIO E15')

@section('product_nav')
    @include('products.e15.product_nav')
@stop


@section('content')
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="swiper-container swiper-container-horizontal">

       <!--- 	<a href="https://vaio-sg.nexstmall.com" target="_blank"  class="swiper-slide"> --->
                        <div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/e15/E15.jpg)">
                            <div class="main-banner" title=""></div>
                        </div>
         <!---           </a>  ---->
        
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
            background-image: url(/images/e15/E15.jpg);
        }

        @media(max-width: 991px) {
            .cms-banner-5 .main-banner {
            background-image: url(/images/e15/E15-2.jpg);
            }
        }

    </style>

@endpush
<!--- Banner end here------------------------------------>

<!---Page content here--------------------------------------------->

    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Guaranteed Quality</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Extraordinary Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Unique Design</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Strong and Reliable</h2>
                </a>
            </div>

            <section class="pt-section text-center" style="background-color: #eeeeee" id="pt-1">
                <div class="container">
                    <div class="selling-pt-sm active px-3">Guaranteed Quality</div>
                    <h2 class="pt-title mt-4">VAIO - the quest for perfection</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content mb-4">
                            Every S11 and S13 is carefully assembled at the VAIO headquarters in Azumino, Nagano Prefecture, Japan. Each VAIO notebook
                            computer has to pass a stringent series of quality control tests before it can be delivered
                            to the hands of customers.
                        </p>
                        <p class="pt-content">
                            We named this particular set of procedures, designed to ensure the highest quality and standards, the “Azumino Finish”. It
                            is the definition of how we pursue perfection at VAIO.
                        </p>
                    </div>
                    <div class="fs-0 my-4 my-lg-5">

                        <img src="/images/e15/pt01-1.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan"><img src="/images/e15/pt01-2.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan">
                    </div>

                    <div class="selling-pt-sm active px-3">Guaranteed Quality</div>
                    <h2 class="pt-title mt-4">The “Azumino Finish”</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content-title mx-auto">The pursuit of perfection in craftsmanship and total quality, from start to finish.</p>
                        <p class="pt-content mb-0">
                            Located in Azumino, Nagano Prefecture, Japan, the VAIO Corporation prides itself as a notebook computer manufacturer with
                            a relentless pursuit of quality. At its core, the VAIO brand stands for a wealth of experience
                            in top-notch manufacturing, state-of-the-art technologies and dedicated talents with a passion
                            for craftsmanship. All VAIO notebook computers are either fully manufactured or assembled
                            in Azumino, and can only be taken to the market after passing over 50 stringent quality control
                            tests.
                        </p>
                    </div>

                    <a href="{{ route('quality.azumino_finish') }}" class="btn pink-btn mt-3">Learn More</a>
                </div>
            </section>

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Quality</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Extraordinary Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Unique Design</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Strong and Reliable</h2>
                </a>
            </div>

            <section class="pt-section text-center" id="pt-2">
                <div class="container">
                    <div class="selling-pt-sm active px-3">Extraordinary Performance</div>
                    <h2 class="pt-title mt-4">VAIO TruePerformance technology
                        <br>optimises CPU performances</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <h3 class="pt-content-title">The VAIO TruePerformance technology optimises CPU performances and is tested to improve the 8th-Generation
                            Intel® Core™ processors by 11% to 13%.</h3>
                        <p class="pt-content-sm mt-3 mb-5">* when compared with the VAIO TruePerformance feature disabled</p>
                    </div>
                    <img src="/images/icons/vaio-performance-lg.png" class="mb-5" style="width: 50%;" alt="VAIO TruePerformance">
                    <img src="/images/e15/pt02-1-en.png" class="mb-5" alt="VAIO TruePerformance Technology Optimises CPU Performances">
                    <div class="row">
                        <div class="mb-5 mb-lg-0 col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;">CPU Performance Comparison
                                <br>
                                <span style="font-size: 1rem;">CPU: Benchmark score with MAXON Cinebend Version 15.0.3.8</span>
                            </h4>
                            <img src="/images/e15/pt02-2-en.png" class="mt-auto" alt="VAIO TruePerformance CPU Performance Comparison CPU: Benchmark score with MAXON Cinebend Version 15.0.3.8">
                        </div>
                        <div class="col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;">GPU Performance Comparison
                                <br>
                                <span style="font-size: 1rem">GPU: Benchmark score with Futuremark 3DMark 11 Version 1.0.132.0</span>
                            </h4>
                            <img src="/images/e15/pt02-3-en.png" class="mt-auto" alt="VAIO TruePerformance GPU Performance Comparison GPU: Benchmark score with Futuremark 3DMark 11 Version 1.0.132.0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-section text-center text-white section-bg-1 b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     data-src="/images/e15/pt03-1.jpg">
                <div class="container">
                    <div class="selling-pt-sm active px-3">Extraordinary Performance</div>
                    <h2 class="pt-title mt-4">optimises the architecture of the heat sink</h2>
                    <hr class="pt-title-hr bg-white">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content text-white">At its core, the VAIO TruePerformance optimises the architecture of the heat sink, thus maintaining
                            higher performance for a longer period of time by increasing CPU power limits and more efficiently
                            eliminating processor heat.</p>
                        <p class="pt-content text-white mt-2 mx-auto">The new S13 has a new cooler with thicker vent, a new fan system with higher heatdispersing capability
                            and a new module design to ensure stable and high-capacity operation of the processor.</p>
                    </div>
                </div>
            </section>

            <section class="pt-section text-center">
                <div class="container">
                    <div class="selling-pt-sm active px-3">Extraordinary Performance</div>
                    <h2 class="pt-title mt-4">The 3
                        <sup>rd</sup>-generation SSD</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content">The S11 and S13, which comes with a professional-grade PCIe SSD storage (with an M.2 interface),
                            is six times faster than conventional SATA SSD. The new SSD offers a faster and crispier
                            experience in launching applications, as well as reading and writing data.</p>
                    </div>
                    <div class="row mt-5">
                        <div class="mb-5 mb-lg-0 col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;color: #585858;">SSD Performances
                                <br>
                                <span style="font-size: 1rem;">Read/Write speed comparisons</span>
                            </h4>
                            <img src="/images/e15/pt04-1-en.png" class="mt-auto" alt="SSD Performances Read/Write speed comparisons">
                        </div>
                        <div class="col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;color: #585858;">SSD Performances
                                <br>
                                <span style="font-size: 1rem;">Time required to copy 1,000 documents from a folder to another (Seconds)</span>
                            </h4>
                            <img src="/images/e15/pt04-2-en.png" class="mt-auto" alt="SSD Performances Time required to copy 1,000 documents from a folder to another (Seconds)">
                        </div>
                    </div>
                    <div class="pt-content-wrapper mx-auto mt-4">
                        <p class="pt-content-sm mb-0">* VAIO test results. Actual performance could vary from test results due to differences in operating
                            environment and conditions.</p>
                        <p class="pt-content-sm">* The 3
                            <sup>rd</sup>-generation professional-grade SSD is only available on models with storage capacity
                            of 512GB or above. The 256GB model is equipped with the 3
                            <sup>rd</sup>-generation high-speed SSD.</p>
                    </div>
                </div>
            </section>

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Guaranteed Quality</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Extraordinary Performance</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>Unique Design</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>Strong and Reliable</h2>
                </a>
            </div>

            <section class="pt-section text-center" id="pt-3">
                <div class="container">
                    <div class="selling-pt-sm active px-3">Unique Design</div>
                    <h2 class="pt-title mt-4">Hexagonal design</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto mb-4">
                        <p class="pt-content mx-auto">Graced with an attractive hexagonal design that encompasses the exterior and interior of the
                            notebook, VAIO notebooks cleverly combine form and function in exemplifying its design DNA.
                            Thanks to a hexagonal body design and over 50 different tests, VAIO notebook computers are
                            not only a beauty in itself, but also highly durable and reliable even when subject to impacts.</p>
                    </div>
                    <img src="/images/e15/pt05-1.jpg" alt="Graced with an attractive hexagonal design that encompasses the exterior and interior of the notebook, VAIO notebooks cleverly combine form and function in exemplifying its design DNA.">
                    <div class="d-flex flex-wrap mt-5">
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                            <div class="selling-pt-sm active px-3">Unique Design</div>
                            <h2 class="pt-title mt-4">Natural slanting angle</h2>
                            <hr class="pt-title-hr">
                            <p class="pt-content mx-auto">When the computer screen is opened, the keyboard is automatically tilted to reduce stress
                                on the wrists. The delicate design reduces stress on your palms and wrists, creating
                                a user experience with added comfort.</p>
                        </div>
                        <div class="col-12 col-lg-6 d-flex align-items-center">
                            <img src="/images/e15/pt05-2.png" alt="VAIO keyboard">
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-section d-flex flex-wrap text-center text-white p-0">
                <div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0">
                    <div class="rect-banner rect-banner-1" title="VAIO S11, S13 Thin and Lightweight Body"></div>
                </div>
                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #808090;">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                        <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                        <h2 class="pt-title mt-4">Thin and lightweight body</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">
                            <p class="pt-content mx-auto" style="color: #ceced2">The S11 and S13 are incredibly light, at 0.85kg and 1.06kg, respectively, and thin (15mm).
                                It feels light whether it is held in hand or put into a back pack.</p>
                            <p class="pt-content-title mb-0 mt-4">Lightweight and sturdy casing</p>
                            <p class="pt-content mx-auto" style="color: #ceced2">The S11 adopts carbon fiber chassis, while S13 adopts magnesium alloy chassis. Both offers
                                sturdy protection from all angles. It remains light in weight while offering the same
                                stiffness, thus achieving the remarkable light weight of the S11 (at 0.85kg) and S13
                                (at 1.06kg).</p>
                            <p class="pt-content mx-auto" style="color: #ceced2;"><small>* Weights vary depending on configuration and manufacturing variability.</small></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-section text-center text-white" style="background-color: #000;">
                <div class="container">
                    <div class="selling-pt-sm active px-3">Unique Design</div>
                    <h2 class="pt-title mt-4">Silent keyboard</h2>
                    <hr class="pt-title-hr bg-white">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content text-white">While typing on a conventional keyboard generates an annoying 2KHz noise, the exceptionally crafted
                            keyboard on the VAIO S11 and S13 successfully reduces typing noise.</p>
                    </div>
                    <img src="/images/banner/product-banner-3.png" style="min-width: 1px; min-height: 1px" alt="Exceptionally crafted keyboard on the VAIO S11 and S13 successfully reduces typing noise">
                </div>
            </section>
            <section class="pt-section text-center text-white" style="background-color: white;">
                <div class="container-fluid" style="
                        padding-left: 10%;
                        padding-right: 10%;
                    ">
                    <div class="row pb-lg-5">
                        <div class="col-12 col-lg-6 py-5">
                            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center">
                                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                                <h2 class="pt-title mt-4" style="color:black">Anti-fingerprint coating</h2>
                                <hr class="pt-title-hr">
                                <div class="pt-content-wrapper mx-auto">
                                    <p class="pt-content mx-auto" style="color: #808090;">
                                        A specialized coating applied on the keyboard surface prevents smudges and streaks. The high abrasion resistance coating keeps the keys clean and clear for a long time.

                                    </p>






                                </div>
                            </div>
                        </div>
                        <div class="row col-12 col-lg-6 py-lg-5 mx-auto">
                            <div class="col-6 p-0">

                                <img src="/images/stainedkey.png" class="w-100" alt="Stained Key">
                                <div class="pt-3" style="color: #808090;">Old coating</div>
                            </div>

                            <div class="col-6 p-0">

                                <img src="/images/enhancedkey.png" class="w-100" alt="Enhanced Key">
                                <div class="pt-3" style="color: #808090;">New coating</div>
                            </div>

                        </div>
                    </div>
                    <div class="row pt-lg-5">
                        <div class="col-12 col-lg-6 py-5">
                            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center">
                                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                                <h2 class="pt-title mt-4" style="color:black">Backlit keyboard</h2>
                                <hr class="pt-title-hr">
                                <div class="pt-content-wrapper mx-auto">
                                    <p class="pt-content mx-auto" style="color: #808090;">
                                        Convenient typing experience in a dimly-lit conference room or aircraft cabin.
                                        The backlit keyboard makes it easier for users to see the keycaps, offering a comfortable input experience that is not limited by the surrounding light environment.


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-lg-5">
                            <img src="/images/backlit.png" class="w-100" alt="Backlit">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="pt-section d-flex flex-wrap text-center text-white p-0">
        <div class="col-12 col-lg-6 rect-banner-wrapper order-2 order-lg-1 px-0">
            <div class="rect-banner rect-banner-2" title="VAIO S11, S13 Fingerprint Scanner is compatible with Windows Hello"></div>
        </div>
        <div class="col-12 col-lg-6 py-5 order-1 order-lg-2" style="background-color: #808090;">
            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                <h2 class="pt-title mt-4">Unlocking using
                    <br>fingerprint scanner</h2>
                <hr class="pt-title-hr bg-white">
                <div class="pt-content-wrapper mx-auto">
                    <p class="pt-content mx-auto" style="color: #ceced2;">Gone are the days when you need to memorise your password to unlock your notebook computer. With
                        fingerprint unlocking, your data security is significantly enhanced. </p>
                    <p class="pt-content mx-auto mt-4" style="color: #ceced2;">The fingerprint scanner is compatible with Windows Hello and can sign you into the Windows operating
                        system by means of a quick touch of a finger, with no scrolling required, making logging in all
                        the more easier and secure.</p>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-6 py-5 order-3" style="background-color: #000;">
            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                <h2 class="pt-title mt-4">Outstanding battery life</h2>
                <hr class="pt-title-hr bg-white">
                <div class="pt-content-wrapper mx-auto">
                    <p class="pt-content" style="color: #ceced2;">With battery life of up to 8 hours (S13) and 11 hours (S11), you can travel free of hassles knowing
                        your VAIO notebook computer will always be available. The speedy charging feature will replenish
                        around 80% of battery power within an hour’s charging. Even if you forget to fully charge your
                        notebook computer before leaving home, you can always conduct a power charge within a short period
                        of time.</p>
                    <p class="pt-content-sm mt-4" style="color: #ceced2;">* Data on battery life is obtained from tests deploying internal tools by VAIO engineers. The actual
                        battery performances could vary from battery life tests shown above, due to differences in operating
                        environment and conditions.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 rect-banner-wrapper order-4 px-0">
            <div class="rect-banner rect-banner-3" title="Battery life of VAIO S11, S13 are up to 11 and 8 hours respectively"></div>
        </div>
    </section>
    <section class="pt-section text-center text-white" style="background-color: white;">
        <div class="container-fluid" style="
                    padding-left: 10%;
                    padding-right: 10%;
                ">
            <div class="row pb-5">
                <div class="col-12 col-lg-6 py-5">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center">
                        <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                        <h2 class="pt-title mt-4" style="color:black">Fast and stable Wi-Fi connection</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper mx-auto">
                            <p class="pt-content mx-auto" style="color: #808090;">
                                Slow network connection does not necessarily mean poor network. It can be a problem with the Wi-Fi signal reception. S13 has its Wi-Fi antenna installed at the top of the screen, the highest part of the laptop, to minimize interference, improve reception and ensure a fast and stable network connection.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <img src="/images/wifi.png" class="w-100" alt="Wifi">
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-12 col-lg-6 py-5">
                    <div class="d-flex flex-wrap flex-column align-items-center justify-content-center">
                        <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">Unique Design</div>
                        <h2 class="pt-title mt-4" style="color:black">Optimal network connection anywhere</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper mx-auto">
                            <p class="pt-content mx-auto" style="color: #808090;">
                                Compatible with LTE supported by carrier aggregation, creating mobile office experience.
                            </p>
                            <p class="pt-content mx-auto" style="color: #808090;">LTE model has built-in mobile data connection capability. Users can assess the internet with the laptop itself without the need of a Wi-Fi router or tethering from another device. The design also saves the user’s time and effort in switching between Wi-Fi and cellular networks.</p>
                            <p class="pt-content mx-auto" style="color: #808090;">SIM slot with cover, preventing loss of SIM card and dust accumulation</p>
                            <p class="pt-content mx-auto" style="color: #808090;"><small>* LTE function is only available for specific models, please refer to specification for details.</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <img src="/images/sim.png" class="w-100" alt="LTE">
                </div>
            </div>

        </div>
    </section>

    <section class="pt-section text-center" style="background-color: #f6f6f6;">
        <div class="container">
            <div class="selling-pt-sm active px-3">Unique Design</div>
            <h2 class="pt-title mt-4">Seamless connectivity</h2>
            <hr class="pt-title-hr">
            <div class="pt-content-wrapper mx-auto">
                <h3 class="pt-content-title">The new VAIO S11 and S13 come with a built-in HDMI port, a VGA port and three USB 3.0 ports, as well
                    as an SD card reader, requiring no external adaptors during everyday use for data transfer and connecting
                    to external display units.</h3>
            </div>
            <img class="mx-auto mt-4" style="width: 90%;" src="/images/banner/product-banner-6.png" alt="The new VAIO S11 and S13 requires no external adaptors during everyday use for data transfer and connecting to external display units.">
            <div class="pt-content-wrapper mx-auto">
                <p class="pt-content mt-5">Via the notebook computer’s HDMI and VGA ports, the screen’s output signals can be simultaneously output
                    to up to 3 screens, which is perfect for applications requiring extra screen displays, such as stock
                    trading and graphic designs.</p>
                <p class="pt-content-sm mt-4">* The USB port on the right side of the notebook computer can support power charging of mobile phones
                    and tablets when the notebook computer is powered off.</p>
            </div>
        </div>
    </section>

    <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
        <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
            <h2>Guaranteed Quality</h2>
        </a>
        <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
            <h2>Extraordinary Performance</h2>
        </a>
        <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
            <h2>Unique Design</h2>
        </a>
        <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center active">
            <h2>Strong and Reliable</h2>
        </a>
    </div>

    <section class="pt-section text-center" id="pt-4">
        <div class="container">
            <div class="selling-pt-sm active px-3">Strong and Reliable</div>
            <h2 class="pt-title mt-4">Pass over 50 quality tests</h2>
            <hr class="pt-title-hr">
            <div class="pt-content-wrapper mx-auto mb-5">
                <p class="pt-content mx-auto">Each VAIO notebook computer has to undergo and pass over 50 quality tests in realising our pledge of
                    durability to customers.</p>
                <p class="pt-content mx-auto mt-4">We reassess and overhaul the design architecture our notebook computer, including conducting over 50
                    tests based on actual usage scenarios, before commencing production of a new generation of products.
                </p>
            </div>
            <div class="embed-responsive embed-responsive-16by9 mx-auto pt-10-video">
                <iframe class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/dqTI4zxXDlA?rel=0" allow="encrypted-media"
                        allowfullscreen="" title="VAIO S11 and S13 are equipped with anti-spill keyboards."></iframe>
            </div>
            <div class="pt-content-wrapper mx-auto mt-5">
                <div class="pt-content">
                    <p>The S11 and S13 are equipped with anti-spill keyboards. These laptops were tested to be able to continue
                        normal operation for a period sufficient to complete data storage, even after 150ml of water
                        was spilled on the keyboard.</p>
                </div>
                <div class="pt-content-sm mt-4">
                    <p class="mb-0">* In the event of a water spillage, users should wipe away the water, before bringing the laptop
                        to a VAIO service center for inspection or repair.</p>
                    <p>* The anti-spill feature is only available on the keyboard and is not applicable on water damage
                        to other parts of the laptop.</p>
                </div>
            </div>




        </div>
    </section>

    <section class="pt-section text-center" style="background-color: #808090">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">The pen bend test</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-1" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/kUeRPz_OjKM?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO Pen Bend Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>The pen bend test is carried out to simulate an alien object, such a pen, is caught between
                                    a notebook computer’s screen and keyboard when closed. A user’s data could be better
                                    protected if the notebook computer’s mother boards and other hardware are not damaged
                                    under this scenario.</p>
                                <p>
                                        <span>
                                            <b>How the test is conducted:</b>
                                        </span>
                                    <br>A pen (with a diameter of 10mm) is placed between the screen and keyboard, before
                                    the notebook computer is closed. The test is repeated with the pen being placed on
                                    the left and right side of the computer, before it is closely examined to ensure
                                    that the chassis is well protected. Solutions to prevent and minimise damage to the
                                    screen and its rims were developed thanks to such tests.
                                </p>
                                <p>Considering the risks of unforeseen damage to a laptop inside a computer bag, efforts
                                    were made to ensure that the notebook computer is sturdy enough to withstand impact.
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">The pen bend test</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-1" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/kUeRPz_OjKM?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO Pen Bend Test"></iframe>
                        <img src="/images/icons/play_button.svg" class="play-btn d-block d-lg-none b-la">
                        <img src="https://i1.ytimg.com/vi/kUeRPz_OjKM/maxresdefault.jpg" class="thumbnail d-block d-lg-none" alt="VAIO Pen Bend Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2 active">
                            <div class="cross mr-4"></div>
                            <span>Know more</span>
                        </div>
                        <div class="upper-tri" style="display: block;"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">90CM drop test</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-2" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/bb9ww4ZcgCc?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO 90CM Drop Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>The unexpected happens. VAIO engineers simulated the following impact tests to make each
                                    notebook computer being able to withstand life’s mishaps:</p>
                                <p>●Dropping to the floor when carried under a 170cm-tall person’s arm, which is about from
                                    a height of 90cm
                                    <br>●Dropping from the height of a desk to the floor
                                    <br>●Impacts from everyday use</p>
                                <p>The risk of your important data being damaged or lost can be reduced if the components
                                    and screen of a notebook computer can be protected during an impact.</p>
                                <p>During impact tests, the VAIO notebook computers are dropped on all six sides, at preset
                                    angles from 90cm. A notebook computer can be deformed and parts could be sent flying
                                    if its casing is not sturd enough to withstand the impact from a drop. After each
                                    drop test, we carefully examine all parts of the notebook computer to improve our
                                    design for maximum protection of user’s data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">90CM drop test</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-2" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/bb9ww4ZcgCc?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO 90CM Drop Test"></iframe>
                        <img src="/images/icons/play_button.svg" class="play-btn d-block d-lg-none">
                        <img src="https://i1.ytimg.com/vi/bb9ww4ZcgCc/maxresdefault.jpg" class="thumbnail d-block d-lg-none" alt="VAIO 90CM Drop Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2">
                            <div class="cross mr-4"></div>
                            <span>Know more</span>
                        </div>
                        <div class="upper-tri"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content-wrapper">
            <div class="video-content">
                <div class="container py-5">
                    <p>The pen bend test is carried out to simulate an alien object, such a pen, is caught between a notebook
                        computer’s screen and keyboard when closed. A user’s data could be better protected if the notebook
                        computer’s mother boards and other hardware are not damaged under this scenario.</p>
                    <p>
                            <span style="color:#000;">
                                <b>How the test is conducted:</b>
                            </span>
                        <br>A pen (with a diameter of 10mm) is placed between the screen and keyboard, before the notebook
                        computer is closed. The test is repeated with the pen being placed on the left and right side
                        of the computer, before it is closely examined to ensure that the chassis is well protected.
                        Solutions to prevent and minimise damage to the screen and its rims were developed thanks to
                        such tests.</p>
                    <p>Considering the risks of unforeseen damage to a laptop inside a computer bag, efforts were made to
                        ensure that the notebook computer is sturdy enough to withstand impact.</p>
                </div>
            </div>
            <div class="video-content">
                <div class="container py-5">
                    <p>The unexpected happens. VAIO engineers simulated the following impact tests to make each notebook
                        computer being able to withstand life’s mishaps:</p>
                    <p>●Dropping to the floor when carried under a 170cm-tall person’s arm, which is about from a height
                        of 90cm
                        <br>●Dropping from the height of a desk to the floor
                        <br>●Impacts from everyday use</p>
                    <p>The risk of your important data being damaged or lost can be reduced if the components and screen
                        of a notebook computer can be protected during an impact.</p>
                    <p>During impact tests, the VAIO notebook computers are dropped on all six sides, at preset angles from
                        90cm. A notebook computer can be deformed and parts could be sent flying if its casing is not
                        sturd enough to withstand the impact from a drop. After each drop test, we carefully examine
                        all parts of the notebook computer to improve our design for maximum protection of user’s data.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-0 py-lg-5">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">Pressurized Vibration Test</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-3" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/w19Vc1TGGfI?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO Pressurized Vibration Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>VAIO laptops are robust and built to last, even under pressure and vibration.</p>
                                <p>Imagine yourself carrying a laptop inside a crowded train compartment during peak hours,
                                    the screen, keyboard and the body unit of the laptop could be under serious pressure
                                    like a hard squeezed sandwich. During pressurized vibration tests, a VAIO laptop
                                    was tested for functionalities when a 150kgf* pressure was applied to it. Although
                                    boasting an ultra thin casing, VAIO laptops were tested to be sturdy under extreme
                                    conditions.
                                </p>
                                <p>* kgf is a gravitational metric unit of force, equalling to the magnitude of the force
                                    exerted on one kilogram of mass under standard gravity.</p>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">Pressurized Vibration Test</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-3" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/w19Vc1TGGfI?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO Pressurized Vibration Test"></iframe>
                        <img src="/images/icons/play_button.svg" class="play-btn d-block d-lg-none">
                        <img src="https://i1.ytimg.com/vi/w19Vc1TGGfI/maxresdefault.jpg" class="thumbnail d-block d-lg-none" alt="VAIO Pressurized Vibration Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2">
                            <div class="cross mr-4"></div>
                            <span>Know more</span>
                        </div>
                        <div class="upper-tri"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">Corner Impact Test</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-4" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/I6ob6z6vcd0?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO Corner Impact Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>VAIO laptops remain sturdy even after receiving repeated impacts on the corners. One
                                    could make the corners of a laptop hit the desk by placing it on a surface single-handedly.
                                    During corner impact tests, all four corners of a VAIO laptop was simulated to have
                                    received impacts by placing it onto a desk surface from a height of 5cm for 5,000
                                    times. Although the impact is relatively small each time, the damage can still be
                                    significant given the sheer number of impacts. VAIO laptops remains study and durable
                                    under repeated and prolonged corner impacts.</p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">Corner Impact Test</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-4" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/I6ob6z6vcd0?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO Corner Impact Test"></iframe>
                        <img src="/images/icons/play_button.svg" class="play-btn d-block d-lg-none">
                        <img src="https://i1.ytimg.com/vi/I6ob6z6vcd0/maxresdefault.jpg" class="thumbnail d-block d-lg-none" alt="VAIO Corner Impact Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2">
                            <div class="cross mr-4"></div>
                            <span>Know more</span>
                        </div>
                        <div class="upper-tri"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content-wrapper">
            <div class="video-content">
                <div class="container py-5">
                    <p>VAIO laptops are robust and built to last, even under pressure and vibration.</p>
                    <p>Imagine yourself carrying a laptop inside a crowded train compartment during peak hours, the screen,
                        keyboard and the body unit of the laptop could be under serious pressure like a hard squeezed
                        sandwich. During pressurized vibration tests, a VAIO laptop was tested for functionalities when
                        a 150kgf* pressure was applied to it. Although boasting an ultra thin casing, VAIO laptops were
                        tested to be sturdy under extreme conditions.</p>
                    <p>* kgf is a gravitational metric unit of force, equalling to the magnitude of the force exerted on
                        one kilogram of mass under standard gravity.</p>
                    <p>
                    </p>
                </div>
            </div>
            <div class="video-content">
                <div class="container py-5">
                    <p>VAIO laptops remain sturdy even after receiving repeated impacts on the corners. One could make the
                        corners of a laptop hit the desk by placing it on a surface single-handedly. During corner impact
                        tests, all four corners of a VAIO laptop was simulated to have received impacts by placing it
                        onto a desk surface from a height of 5cm for 5,000 times. Although the impact is relatively small
                        each time, the damage can still be significant given the sheer number of impacts. VAIO laptops
                        remains study and durable under repeated and prolonged corner impacts.</p>
                </div>
            </div>
        </div>

        <a href="{{ route('quality') }}" class="btn pink-btn mt-3">Learn More</a>

    </section>

    <section class="pt-section">
        <div class="d-flex flex-wrap align-items-center">
            <div class="col-12 offset-lg-2 col-lg-5 order-2 order-lg-1">
                <div class="gift-pic-wrapper">
                    <div class="gift-pic" title="Experience In First Hand More Information"></div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 text-center">
                <h2 class="section-title mb-5">AVAILABLE NOW</h2>

                <a href="{{ $store_url }}" target="_blank" class="btn pink-btn regis-btn mt-3">BUY NOW</a>
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


@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop
