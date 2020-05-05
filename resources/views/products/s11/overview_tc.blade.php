@extends('layout.app')

@section('title', 'VAIO S11 VAIO S13')

@section('product_nav')
    @include('products.s11.product_nav')
@stop

@section('content')

    @include('products.banner')

    <section id="vaio-product">
        <div class="main-content container-fluid">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>品質保證</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>性能優異</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>設計獨特</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>堅固可靠</h2>
                </a>
            </div>

            <section class="pt-section text-center" style="background-color: #eeeeee" id="pt-1">
                <div class="container">
                    <div class="selling-pt-sm active px-3">品質保證</div>
                    <h2 class="pt-title mt-4">VAIO：對品質要求的完美演繹</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content mb-4">
                            每一部S11及S13均於日本長野縣•安曇野市的VAIO總部生產，並由專業技術人員進行嚴謹的品質檢查工序後才赴運上市。
                        </p>
                        <p class="pt-content">
                            此一確保最高品質的最後工序，我們將之命名為「安曇野FINISH」，是VAIO對最高品質要求的完美釋義。
                        </p>
                    </div>
                    <div class="fs-0 my-4 my-lg-5">
                        <img src="/images/pt-pic/pt01-1.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan"><img src="/images/pt-pic/pt01-2.jpg" class="w-50" alt="VAIO headquarters in Azumino, Nagano Prefecture, Japan">
                    </div>

                    <div class="selling-pt-sm active px-3">品質保證</div>
                    <h2 class="pt-title mt-4">「安曇野 FINISH」</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content-title mx-auto">本著匠心精神，追求最高品質，精益求精，直至完工。</p>
                        <p class="pt-content mb-0">
                            VAIO株式會社坐落於日本長野縣安曇野，作為一家日本的筆記本電腦制造商，對產品的品質有着不懈地追求。安曇野沉淀了VAIO豊富的歷史與生產經驗，擁有令人自豪的高科技技術，也擁有具備匠心精神的人才。
                        </p>
                    </div>

                    <a href="{{ route('quality.azumino_finish') }}" class="btn pink-btn mt-3">了解更多</a>
                </div>
            </section>

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>品質保證</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>性能優異</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>設計獨特</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>堅固可靠</h2>
                </a>
            </div>


            <section class="pt-section text-center" id="pt-2">
                <div class="container">
                    <div class="selling-pt-sm active px-3">性能優異</div>
                    <h2 class="pt-title mt-4">VAIO TruePerformance提升CPU性能</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <h3 class="pt-content-title">與同級第八代Intel®Core™處理器相比，表現高出達11%至13%！</h3>
                        <p class="pt-content-sm mt-3 mb-5">* 與關掉VAIO TruePerformance功能時之對比結果</p>
                    </div>
                    <img src="/images/icons/vaio-performance-lg.png" class="mb-5" style="width: 50%;" alt="VAIO TruePerformance">
                    <img src="/images/pt-pic/pt02-1.jpg" class="mb-5" alt="VAIO TruePerformance Technology Optimises CPU Performances">
                    <div class="row">
                        <div class="mb-5 mb-lg-0 col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;">CPU Performance Comparison
                                <br>
                                <span style="font-size: 1rem;">CPU: Benchmark score with MAXON Cinebend Version 15.0.3.8</span>
                            </h4>
                            <img src="/images/pt-pic/pt02-2.jpg" class="mt-auto" alt="VAIO TruePerformance CPU Performance Comparison CPU: Benchmark score with MAXON Cinebend Version 15.0.3.8">
                        </div>
                        <div class="col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;">GPU Performance Comparison
                                <br>
                                <span style="font-size: 1rem">GPU: Benchmark score with Futuremark 3DMark 11 Version 1.0.132.0</span>
                            </h4>
                            <img src="/images/pt-pic/pt02-3.jpg" class="mt-auto" alt="VAIO TruePerformance GPU Performance Comparison GPU: Benchmark score with Futuremark 3DMark 11 Version 1.0.132.0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-section text-center text-white section-bg-1 b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     data-src="/images/pt-pic/pt03-1.jpg">
                <div class="container">
                    <div class="selling-pt-sm active px-3">性能優異</div>
                    <h2 class="pt-title mt-4">優化散熱設計</h2>
                    <hr class="pt-title-hr bg-white">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content text-white mt-2 mx-auto">VAIO TruePerformance的核心技術在於優化散熱模組的設計，從而顯著提升散熱表現。新一代S13增加導熱管面積，並採用更高散熱效率的風扇，並優化了組件結構，確保處理器能長時間高效而穩定運作。</p>
                    </div>
                </div>
            </section>

            <section class="pt-section text-center">
                <div class="container">
                    <div class="selling-pt-sm active px-3">性能優異</div>
                    <h2 class="pt-title mt-4">第三代高速專業SSD</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content">S11及S13採用了專業級的高速PCIe SSD(M.2接口)，與標準的SATA SSD相比，速度提升達6倍！於啟動應用程序及各種數據的讀寫操作方面，全面提升速度！</p>
                    </div>
                    <div class="row mt-5">
                        <div class="mb-5 mb-lg-0 col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;color: #585858;">SSD性能比較
                                <br>
                                <span style="font-size: 1rem;">讀/寫速度比較</span>
                            </h4>
                            <img src="/images/pt-pic/pt04-1.png" class="mt-auto" alt="SSD Performances Read/Write speed comparisons">
                        </div>
                        <div class="col-12 col-md-10 col-lg-6 mx-auto text-left d-flex flex-wrap align-items-start">
                            <h4 style="font-size: 1.3rem;color: #585858;">SSD性能比較
                                <br>
                                <span style="font-size: 1rem;">1000個文件從文件夾拷貝到另一個文件夾需要的時間 (秒)</span>
                            </h4>
                            <img src="/images/pt-pic/pt04-2.png" class="mt-auto" alt="SSD Performances Time required to copy 1,000 documents from a folder to another (Seconds)">
                        </div>
                    </div>
                    <div class="pt-content-wrapper mx-auto mt-4">
                        <p class="pt-content-sm mb-0">* VAIO測試結果。由於環境和條件不同，實際使用情況及性能測試數據或有差異。</p>
                        <p class="pt-content-sm">* 僅512GB及以上型號採用第三代高速專業級SSD，而256GB型號則採用第三代高速SSD</p>
                    </div>
                </div>
            </section>

            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>品質保證</h2>
                </a>
                <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>性能優異</h2>
                </a>
                <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center active">
                    <h2>設計獨特</h2>
                </a>
                <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center">
                    <h2>堅固可靠</h2>
                </a>
            </div>

            <section class="pt-section text-center" id="pt-3">
                <div class="container">
                    <div class="selling-pt-sm active px-3">設計獨特</div>
                    <h2 class="pt-title mt-4">六棱貝</h2>
                    <hr class="pt-title-hr">
                    <div class="pt-content-wrapper mx-auto mb-4">
                        <p class="pt-content mx-auto">「六棱貝」外觀設計是可靠與美觀的完美結合，更活現了VAIO設計的DNA。通過穩固的六邊形機身結構及50多項測試，我們不但確保機身具備與眾不同的美觀外形，而即使受到擠壓衝擊，亦可保持可靠耐用。</p>
                    </div>
                    <img src="/images/pt-pic/pt05-1.jpg" alt="Graced with an attractive hexagonal design that encompasses the exterior and interior of the notebook, VAIO notebooks cleverly combine form and function in exemplifying its design DNA.">
                    <div class="d-flex flex-wrap mt-5">
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                            <div class="selling-pt-sm active px-3">設計獨特</div>
                            <h2 class="pt-title mt-4">自然傾斜度</h2>
                            <hr class="pt-title-hr">
                            <p class="pt-content mx-auto">配合下沉式轉軸設計，於開啟屏幕時機身與桌面形成自然傾斜角度，令手腕可舒適安放於鍵盤及桌面之間。貼心設計大幅減輕手掌和手腕負擔，進一步提升舒適的使用體驗。</p>
                        </div>
                        <div class="col-12 col-lg-6 d-flex align-items-center">
                            <img src="/images/pt-pic/pt05-2.png" alt="VAIO keyboard">
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
                        <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                        <h2 class="pt-title mt-4">機身輕薄</h2>
                        <hr class="pt-title-hr bg-white">
                        <div class="pt-content-wrapper-lg mx-auto">
                            <p class="pt-content mx-auto" style="color: #ceced2">S11及S13主機重量分別為0.85千克及1.06千克，機身最薄處僅15mm，無論手持還是放入背包也同樣輕鬆自如！</p>
                            <p class="pt-content-title mb-0 mt-4">特選材質，輕薄堅固</p>
                            <p class="pt-content mx-auto" style="color: #ceced2">S11頂蓋使用碳纖維物料，S13則以鎂合金為頂蓋，從而確保每個方向均有足夠強度。既能保持同等強度，又可保持輕巧。S11及S13能在維持機身硬度的同時，實現0.85千克（S11）及1.06千克（S13）的纖巧重量！</p>
                            <p class="pt-content mx-auto" style="color: #ceced2;"><small>* 重量會因組態及製造差異而有所不同。</small></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-section text-center text-white" style="background-color: #000;">
                <div class="container">
                    <div class="selling-pt-sm active px-3">設計獨特</div>
                    <h2 class="pt-title mt-4">靜音鍵盤</h2>
                    <hr class="pt-title-hr bg-white">
                    <div class="pt-content-wrapper mx-auto">
                        <p class="pt-content text-white">使用一般鍵盤打字時，會於2KHz的頻譜發出擾人噪音。S11及S13提高鍵帽支撐結構的加工精準度，更準確控制鍵帽的行程軌跡，成功地降低打字時發出的刺耳噪音。</p>
                    </div>
                    <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/images/banner/product-banner-3.png"
                         style="min-width: 1px; min-height: 1px" alt="Exceptionally crafted keyboard on the VAIO S11 and S13 successfully reduces typing noise">
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
                                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                                <h2 class="pt-title mt-4" style="color:black">防污塗層</h2>
                                <hr class="pt-title-hr">
                                <div class="pt-content-wrapper mx-auto">
                                    <p class="pt-content mx-auto" style="color: #808090;">鍵盤表面塗上了專門開發的硬化塗層。抗指紋、防油污、高耐磨。即使長時間使用，鍵盤字母亦能保持清晰。</p>
                                </div>
                            </div>
                        </div>
                        <div class="row col-12 col-lg-6 py-lg-5 mx-auto">
                                <div class="col-6 p-0">

                                <img src="/images/stainedkey.png" class="w-100" alt="Stained Key">
                                <div class="pt-3" style="color: #808090;">舊式塗層</div>
                            </div>

                            <div class="col-6 p-0">

                                <img src="/images/enhancedkey.png" class="w-100" alt="Enhanced Key">
                                <div class="pt-3" style="color: #808090;">新研發的塗層</div>
                            </div>

                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12 col-lg-6 py-5">
                            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center">
                                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                                <h2 class="pt-title mt-4" style="color:black">背光鍵盤</h2>
                                <hr class="pt-title-hr">
                                <div class="pt-content-wrapper mx-auto">
                                    <p class="pt-content mx-auto" style="color: #808090;">
                                        會議室或機艙光線不足亦無阻打字<br>
                                        背光鍵盤令鍵盤字母清晰可見，讓用家不再受環境光線限制，盡情享受舒適打字體驗。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-5">
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
                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                <h2 class="pt-title mt-4">指紋解鎖</h2>
                <hr class="pt-title-hr bg-white">
                <div class="pt-content-wrapper mx-auto">
                    <p class="pt-content mx-auto" style="color: #ceced2;">從此無需再輸入密碼，大大提高賬戶安全性。
                        接觸式指紋傳感器，支持Windows Hello功能，觸摸一瞬即可完成Windows登錄，無需滑動手指，為用戶提供安全及高效的舒適感受。</p>
                    <p class="pt-content mx-auto mt-4" style="color: #ceced2;">* 默認關閉狀態，用戶購買產品后，需要在VAIO Control Center界面啟動功能。</p>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-6 py-5 order-3" style="background-color: #000;">
            <div class="d-flex flex-wrap flex-column align-items-center justify-content-center h-100">
                <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                <h2 class="pt-title mt-4">持久續航力</h2>
                <hr class="pt-title-hr bg-white">
                <div class="pt-content-wrapper mx-auto">
                    <p class="pt-content" style="color: #ceced2;">分別長達8小時(S13)及11小時(S11)的電池續航時間*，足以應付出差及旅行途中使用。快速充電功能能於 1 小時充電約 80%。即使出發前忘記充電，亦能瞬間恢復足夠電量！同時配備 USB充電端口，可隨時為手機充電。</p>
                    <p class="pt-content-sm mt-4" style="color: #ceced2;">* 電池續航時間是基於VAIO工程師使用內部測試工具得出的測試結果。由於使用環境和操作方式不同，實際電池續航時間會和以上提及的電池續航時間或有差異。</p>
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
                        <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                        <h2 class="pt-title mt-4" style="color:black">Wi-Fi連接快速、穩定</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper mx-auto">
                            <p class="pt-content mx-auto" style="color: #808090;">
                                網速慢未必是網絡出問題，亦可能是Wi-Fi信號接收不良。S13 的Wi-Fi天線位於顯示屏頂端，即筆電的最高處，從而減少干擾，並提高接收靈敏度，令網絡快速而穩定。
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
                        <div class="selling-pt-sm active px-3" style="background-color: #b3b3bc;">設計獨特</div>
                        <h2 class="pt-title mt-4" style="color:black">無時無刻都處於最佳網絡</h2>
                        <hr class="pt-title-hr">
                        <div class="pt-content-wrapper mx-auto">
                            <p class="pt-content mx-auto" style="color: #808090;">
                                支援載波聚合技術 隨時隨地享受LTE網絡
                            </p>
                            <p class="pt-content mx-auto" style="color: #808090;">筆電內置流動數據LTE上網功能，用家無需Wi-Fi路由器或智能手機的共享網絡，單靠筆電本身即可上網。用家再無需因應身處的場所切換無線和流動網絡，省卻麻煩。</p>
                            <p class="pt-content mx-auto" style="color: #808090;">筆電配以MicroSIM咭槽<br>SIM咭咭槽配以有蓋設計，減少遺失SIM咭或咭槽積塵的情況。</p>
                            <p class="pt-content mx-auto" style="color: #808090;"><small>* LTE 功能功能僅適用於指定型號, 詳情請參閱產品規格。</small></p>
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
            <div class="selling-pt-sm active px-3">設計獨特</div>
            <h2 class="pt-title mt-4">全面接口 無需轉換</h2>
            <hr class="pt-title-hr">
            <div class="pt-content-wrapper mx-auto">
                <h3 class="pt-content-title">內置HDMI、VGA、三個USB3.0端口及SD讀卡器，日常使用無需連接轉換器，輕鬆應對數據傳輸和輸出外置顯示器。</h3>
            </div>
            <img class="b-lazy mx-auto mt-4" style="width: 90%;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                 data-src="/images/banner/product-banner-6.png" alt="The new VAIO S11 and S13 requires no external adaptors during everyday use for data transfer and connecting to external display units.">
            <div class="pt-content-wrapper mx-auto">
                <p class="pt-content mt-5">主機屏幕支援HDMI／VGA同時輸出，可支援3屏畫同時顯示，全面滿足如股票買賣操作及圖形設計等常見的畫面擴充需求。</p>
                <p class="pt-content-sm mt-4">* 機身右側之USB端口可支援筆電於關機狀態為手機、平板電腦充電，滿足應急充電需求。</p>
            </div>
        </div>
    </section>

    <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
        <a href="#pt-1" class="col-6 col-lg-3 selling-pt py-4 text-center">
            <h2>品質保證</h2>
        </a>
        <a href="#pt-2" class="col-6 col-lg-3 selling-pt py-4 text-center">
            <h2>性能優異</h2>
        </a>
        <a href="#pt-3" class="col-6 col-lg-3 selling-pt py-4 text-center ">
            <h2>設計獨特</h2>
        </a>
        <a href="#pt-4" class="col-6 col-lg-3 selling-pt py-4 text-center active">
            <h2>堅固可靠</h2>
        </a>
    </div>

    <section class="pt-section text-center" id="pt-4">
        <div class="container">
            <div class="selling-pt-sm active px-3">堅固可靠</div>
            <h2 class="pt-title mt-4">通過50餘項測試</h2>
            <hr class="pt-title-hr">
            <div class="pt-content-wrapper mx-auto mb-5">
                <p class="pt-content mx-auto">品質源自對細節的堅持，每一部VAIO均需要通過50多項的測試，從而確保能全面滿足用戶對產品耐用性的要求。</p>
                <p class="pt-content mx-auto mt-4">每一代VAIO筆電均會徹底重新評估產品設計結構，並於進行50多項根據實際使用場景設置的測試之后，才會開始生產程序。</p>
            </div>
            <div class="embed-responsive embed-responsive-16by9 mx-auto pt-10-video">
                <iframe class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/dqTI4zxXDlA?rel=0" allow="encrypted-media"
                        allowfullscreen="" title="VAIO S11 and S13 are equipped with anti-spill keyboards."></iframe>
            </div>
            <div class="pt-content-wrapper mx-auto mt-5">
                <div class="pt-content">
                    <p>S11及S13鍵盤採用防濺水設計，具備一定的阻水能力。於測試中，在傾倒150毫升水於鍵盤上，筆電仍能於足夠儲存數據的時間內正常運作。</p>
                </div>
                <div class="pt-content-sm mt-4">
                    <p class="mb-0">* 如遇到濺水事故，應立即清理表面水跡，並攜帶筆電到就近之VAIO特約維修中心進行檢測或維修。</p>
                    <p>* 防濺水功能僅限鍵盤部份，而不適用於筆電其他部份進水的情形</p>
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
                            <h3 class="text-white mb-4 video-title">夾筆測試</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-1" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/kUeRPz_OjKM?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO Pen Bend Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>夾筆測試的目的是測試在電腦袋中出現像筆等的物件被夾於筆電的情況下，電腦內部的底板和相關硬件也不會損壞，從而保護電腦的重要數據。</p>
                                <p>
                                        <span>
                                            <b>測試內容：</b>
                                        </span>
                                    <br>將測試用筆（直徑10mm的鉛筆類似於圓形狀的棒子）夾在液晶顯示屏和鍵盤之間，並關閉顯示屏。在左右兩邊各進行1次測試後，再測試筆電結構，從而確保機身得到保護，並研發針對液晶顯示屏及液晶顯示屏邊框破損的對策。
                                </p>
                                <p>考慮到電腦於電腦袋內或會面對未能預測的風險隱患，因此，我們於輕便容易攜帶的基礎上力求保証電腦機身堅固，提升保護。</p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">夾筆測試</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-1" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/kUeRPz_OjKM?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO Pen Bend Test"></iframe>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/images/icons/play_button.svg"
                             class="play-btn d-block d-lg-none b-lazy">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://i1.ytimg.com/vi/kUeRPz_OjKM/maxresdefault.jpg"
                             class="thumbnail d-block d-lg-none b-lazy" alt="VAIO Pen Bend Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2 active">
                            <div class="cross mr-4"></div>
                            <span>了解更多</span>
                        </div>
                        <div class="upper-tri" style="display: block;"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">90CM撞擊測試</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-2" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/bb9ww4ZcgCc?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO 90CM Drop Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>在各種下跌狀態下，追求機器的堅固性。</p>
                                <p>可能出現的下跌衝擊包括：</p>
                                <p>● 夾在腋下跌落（90cm取自身高170cm的人腰部高度的平均值）
                                    <br>● 從桌面跌至地面
                                    <br>● 日常使用引起的衝擊等</p>
                                <p>如能在受到衝擊時保護筆電基板及顯示器等裝置，可以降低重要數據損壞及遺失的風險。</p>
                                <p>於進行撞擊測試時，我們將VAIO筆電從上下、左右、前後六個面，按指定的高度跌落地上。如果機身強度不足，機身便會出現變形，零件會脫落飛散。在進行測試後，我們細致地檢查每一處機身及內部，確保在各種撞擊情況下，用戶的數據得到最大程度的保護。</p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">90CM撞擊測試</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-2" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/bb9ww4ZcgCc?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO 90CM Drop Test"></iframe>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/images/icons/play_button.svg"
                             class="play-btn d-block d-lg-none b-lazy">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://i1.ytimg.com/vi/bb9ww4ZcgCc/maxresdefault.jpg"
                             class="thumbnail d-block d-lg-none b-lazy" alt="VAIO 90CM Drop Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2">
                            <div class="cross mr-4"></div>
                            <span>了解更多</span>
                        </div>
                        <div class="upper-tri"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content-wrapper">
            <div class="video-content">
                <div class="container py-5">
                    <p>夾筆測試的目的是測試在電腦袋中出現像筆等的物件被夾於筆電的情況下，電腦內部的底板和相關硬件也不會損壞，從而保護電腦的重要數據。</p>
                    <p>
                        <span style="color:#000;"><b>測試內容：</b></span><br>
                        將測試用筆（直徑10mm的鉛筆類似於圓形狀的棒子）夾在液晶顯示屏和鍵盤之間，並關閉顯示屏。在左右兩邊各進行1次測試後，再測試筆電結構，從而確保機身得到保護，並研發針對液晶顯示屏及液晶顯示屏邊框破損的對策。
                    </p>
                    <p>考慮到電腦於電腦袋內或會面對未能預測的風險隱患，因此，我們於輕便容易攜帶的基礎上力求保証電腦機身堅固，提升保護。</p>
                </div>
            </div>
            <div class="video-content">
                <div class="container py-5">
                    <p>在各種下跌狀態下，追求機器的堅固性。</p>
                    <p>可能出現的下跌衝擊包括：</p>
                    <p>● 夾在腋下跌落（90cm取自身高170cm的人腰部高度的平均值）
                        <br>● 從桌面跌至地面
                        <br>● 日常使用引起的衝擊等</p>
                    <p>如能在受到衝擊時保護筆電基板及顯示器等裝置，可以降低重要數據損壞及遺失的風險。</p>
                    <p>於進行撞擊測試時，我們將VAIO筆電從上下、左右、前後六個面，按指定的高度跌落地上。如果機身強度不足，機身便會出現變形，零件會脫落飛散。在進行測試後，我們細致地檢查每一處機身及內部，確保在各種撞擊情況下，用戶的數據得到最大程度的保護。</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-0 py-lg-5">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">加壓振動測試</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-3" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/w19Vc1TGGfI?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO Pressurized Vibration Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>即使面對壓力與振動，VAIO筆電仍能維持卓越的堅固性。</p>
                                <p>假設於上下班繁忙時段帶著筆電乘坐地鐵，當乘客的身體被擠壓得不能動彈，筆電的液晶顯示屏、鍵盤和機身也會像三文治般被擠壓。加壓振動測試則使用模擬加壓的測試設備，對VAIO筆電施施加150kgf*的壓力。在施壓狀態測試下，由固定振動測試機保持一定時間的壓力和振動，對筆電進行功能確認測試。VAIO筆電雖然機身輕薄，仍可通過嚴苛的測試，即使在擠逼地鐵車廂中承受重壓與振動下，筆電機身仍然堅固可靠。 </p>
                                <p>*kgf = 千克力／公斤力，品質為1公斤的物體在標準重力加速度下受到的地心引力。</p>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">加壓振動測試</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-3" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/w19Vc1TGGfI?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO Pressurized Vibration Test"></iframe>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/images/icons/play_button.svg"
                             class="play-btn d-block d-lg-none b-lazy">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://i1.ytimg.com/vi/w19Vc1TGGfI/maxresdefault.jpg"
                             class="thumbnail d-block d-lg-none b-lazy" alt="VAIO Pressurized Vibration Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2">
                            <div class="cross mr-4"></div>
                            <span>了解更多</span>
                        </div>
                        <div class="upper-tri"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center">
                    <div class="video-mobile-page py-5">
                        <div class="cross"></div>
                        <div class="container">
                            <h3 class="text-white mb-4 video-title">邊角抗衝擊測試</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player-mb-4" class="embed-responsive-item b-lazy" data-src="https://www.youtube.com/embed/I6ob6z6vcd0?autoplay=1;rel=0;showinfo=0;enablejsapi=1;origin="
                                        allow="encrypted-media" allowfullscreen="" title="VAIO Corner Impact Test"></iframe>
                            </div>
                            <div class="text-white text-left mt-5">
                                <p>即使邊角在日常使用中受到反覆衝擊，VAIO筆電仍能保持堅耐用。於單手放置筆電時，往往會令邊角撞到桌子，形成衝擊。於邊角抗沖擊測試，用測試機器，將VAIO個人電腦的4個邊角分別從5cm的高度放下5,000次。雖然每次衝擊均屬於相對輕微力度，但是經過連續多次撞擊，累積的破壞力不可忽視。VAIO筆電在持續邊角衝擊下，仍能維持超卓的堅固性。</p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-white mb-4 video-title">邊角抗衝擊測試</h3>
                    <div class="embed-responsive embed-responsive-16by9 align-self-end">
                        <iframe id="player-4" class="embed-responsive-item b-lazy normal-video d-none d-lg-block" data-src="https://www.youtube.com/embed/I6ob6z6vcd0?rel=0;showinfo=0;enablejsapi=1;origin="
                                allow="encrypted-media" allowfullscreen="" title="VAIO Corner Impact Test"></iframe>
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/images/icons/play_button.svg"
                             class="play-btn d-block d-lg-none b-lazy">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://i1.ytimg.com/vi/I6ob6z6vcd0/maxresdefault.jpg"
                             class="thumbnail d-block d-lg-none b-lazy" alt="VAIO Corner Impact Test">
                    </div>
                    <div class="d-none d-lg-inline-block position-relative">
                        <div class="d-flex know-more mt-4 px-4 py-2">
                            <div class="cross mr-4"></div>
                            <span>了解更多</span>
                        </div>
                        <div class="upper-tri"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-content-wrapper">
            <div class="video-content">
                <div class="container py-5">
                    <p>即使面對壓力與振動，VAIO筆電仍能維持卓越的堅固性。</p>
                    <p>假設於上下班繁忙時段帶著筆電乘坐地鐵，當乘客的身體被擠壓得不能動彈，筆電的液晶顯示屏、鍵盤和機身也會像三文治般被擠壓。加壓振動測試則使用模擬加壓的測試設備，對VAIO筆電施施加150kgf*的壓力。在施壓狀態測試下，由固定振動測試機保持一定時間的壓力和振動，對筆電進行功能確認測試。VAIO筆電雖然機身輕薄，仍可通過嚴苛的測試，即使在擠逼地鐵車廂中承受重壓與振動下，筆電機身仍然堅固可靠。 </p>
                    <p>*kgf = 千克力／公斤力，品質為1公斤的物體在標準重力加速度下受到的地心引力。</p>
                </div>
            </div>
            <div class="video-content">
                <div class="container py-5">
                    <p>即使邊角在日常使用中受到反覆衝擊，VAIO筆電仍能保持堅耐用。於單手放置筆電時，往往會令邊角撞到桌子，形成衝擊。於邊角抗沖擊測試，用測試機器，將VAIO個人電腦的4個邊角分別從5cm的高度放下5,000次。雖然每次衝擊均屬於相對輕微力度，但是經過連續多次撞擊，累積的破壞力不可忽視。VAIO筆電在持續邊角衝擊下，仍能維持超卓的堅固性。</p>
                </div>
            </div>
        </div>

        <a href="{{ route('quality') }}" class="btn pink-btn mt-3">了解更多</a>
    </section>

    <section class="pt-section">
        <div class="d-flex flex-wrap align-items-center">
            <div class="col-12 offset-lg-2 col-lg-5 order-2 order-lg-1">
                <div class="gift-pic-wrapper">
                    <div class="gift-pic" title="Experience In First Hand More Information"></div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 text-center">
                <h2 class="section-title mb-5">現已登場</h2>
                <a href="{{ $store_url }}" class="btn pink-btn regis-btn mt-3">立即購買</a>
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

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop
