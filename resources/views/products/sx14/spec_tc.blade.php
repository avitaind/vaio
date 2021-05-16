@extends('layout.app')

@section('title', 'VAIO SX14 Specification')

@section('product_nav')
    @include('products.sx14.product_nav')
@stop

@section('content')

<!--------------- Product SPEC here----------------------->

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-4 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; SX14</h3>
                    <img src="/images/sx14/SX14vaio-black.png" class="my-4" alt="VAIO® SX14">                     
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="/images/sx14/SX14vaio-black.png"></li>
                        <li class="color-pick" style="background-color: #926c65" data-src="/images/sx14/SX14vaio-brown.png"></li>
                        <li class="color-pick" style="background-color: #cccccc" data-src="/images/sx14/SX14vaio-silver.png"></li>
                    </ul>
                </a>
                <a href="#spec-2" class="text-center spec-product nav-link col-4" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; SX14 KACHI-IRO</h3>
                    <img src="/images/sx14/sx14_kachiiro.png" class="my-4" alt="VAIO® SX14 KACHI-IRO">
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #012d62" data-src="/images/sx14/sx14_kachiiro.png"></li>
                    </ul>
                </a>
                <a href="#spec-3" class="text-center spec-product nav-link col-4" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; SX14 (10<sup>th</sup> Gen)</h3>
                    <img src="/images/sx14/SX14vaio-black.png" class="my-4" alt="VAIO® SX14">                     
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="/images/sx14/SX14vaio-black.png"></li>
                        <li class="color-pick" style="background-color: #926c65" data-src="/images/sx14/SX14vaio-brown.png"></li>
                        <li class="color-pick" style="background-color: #cccccc" data-src="/images/sx14/SX14vaio-silver.png"></li>
                    </ul>
                </a>
            </nav>
        </div>
    </section>

    <section class="tab-content py-5">
<!--------------- Product SPEC-1 here----------------------->
        <div class="tab-pane active mb-5" id="spec-1" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顏色</div>
                        <div class="offset-md-1 spec-item-content">深夜黑、霧鋁銀、古銅棕</div>
                    </li> 
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">Intel® Core<sup>TM</sup>  i5-8265U <br/>Intel® Core<sup>TM</sup> i7-8565U</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 家用版 / Windows 10 專業版</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">14" FHD 1920x1080 / 14" UHD 4K IPS (3840 x 2160) 16:9</div>
                    </li>	   
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">前置鏡頭</div>
                        <div class="offset-md-1 spec-item-content">0.92 MP</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">16GB LPDDR3</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">儲存裝置</div>
                        <div class="offset-md-1 spec-item-content">512GB PCIe NVMe SSD</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
                    </li>				
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">內置揚聲器</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac, 無線網絡, 藍芽 4.1, 4G LTE (視乎型號)</div>
                    </li>		
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">I/O port</div>
                        <div class="offset-md-1 spec-item-content">1 X Network(LAN) : 1000BASE-T/100BASE-TX/10BASE-T<br/>1 x USB Type-C™ (3.1) w/power delivery and DisplayPort (1.2)<br/>1 x SuperSpeed USB (3.1) w/charge<br/>2 x SuperSpeed USB (3.0)<br/>1 x HDMI<br/>1 x VGA<br/>1 x Headphone + Microphone</div>
                    </li>			 
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD 讀卡器 (SDHC、SDXC)</div>
                    </li>	
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">鍵盤<sup>5</sup></div>
                        <div class="offset-md-1 spec-item-content">背光鍵盤</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">指紋辨識</div>
                        <div class="offset-md-1 spec-item-content">有</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池</div>
                        <div class="offset-md-1 spec-item-content">35Wh</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">續航力<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">Approx 6 hours with UHD display, Approx 7.75 hours with FHD display</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸 (闊 x 深 x 高)</div>
                        <div class="offset-md-1 spec-item-content">約320.4 x 222.7 x 15~17.9mm</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">約1.05kg</div>
                    </li>
					
                </ul>
            </div>
        </div>
<!--------------- Product SPEC-2 here----------------------->
        <div class="tab-pane mb-5" id="spec-2" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顏色</div>
                        <div class="offset-md-1 spec-item-content">Kachi-iro</div>
                    </li> 
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">Intel® Core<sup>TM</sup> i7-8565U</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 專業版</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">14" FHD IPS (1920 x 1080) 16:9 / 14" UHD 4K IPS (3840 x 2160) 16:9</div>
                    </li>	   
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">前置鏡頭</div>
                        <div class="offset-md-1 spec-item-content">0.92 MP</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">16GB LPDDR3</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">儲存裝置</div>
                        <div class="offset-md-1 spec-item-content">512GB PCIe NVMe SSD</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
                    </li>				
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">內置揚聲器</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac, 無線網絡, 藍芽 4.1, 4G LTE (視乎型號)</div>
                    </li>		
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">I/O port</div>
                        <div class="offset-md-1 spec-item-content">1 X Network(LAN) : 1000BASE-T/100BASE-TX/10BASE-T<br/>1 x USB Type-C™ (3.1) w/power delivery and DisplayPort (1.2)<br/>1 x SuperSpeed USB (3.1) w/charge<br/>2 x SuperSpeed USB (3.0)<br/>1 x HDMI<br/>1 x VGA<br/>1 x Headphone + Microphone</div>
                    </li>			 
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD 讀卡器 (SDHC、SDXC)</div>
                    </li>	
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">鍵盤<sup>5</sup></div>
                        <div class="offset-md-1 spec-item-content">背光鍵盤</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">指紋辨識</div>
                        <div class="offset-md-1 spec-item-content">有</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池</div>
                        <div class="offset-md-1 spec-item-content">35Wh</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">續航力<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">Approx 6 hours with UHD display, Approx 7.75 hours with FHD display</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸 (闊 x 深 x 高)</div>
                        <div class="offset-md-1 spec-item-content">約320.4 x 222.7 x 15~17.9mm</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">約1.05kg</div>
                    </li>
					
                </ul>
            </div>
        </div>
        
        
<!--------------- Product SPEC-3 here----------------------->
        <div class="tab-pane mb-5" id="spec-3" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顏色</div>
                        <div class="offset-md-1 spec-item-content">深夜黑、霧鋁銀、古銅棕</div>
                    </li> 
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">Intel® Core<sup>TM</sup>  i5-10210U <br/>Intel® Core<sup>TM</sup> i7-10710U</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 家用版 / Windows 10 專業版</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">14" FHD 1920x1080 / 14" UHD 4K 3840x2160</div>
                    </li>	   
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">前置鏡頭</div>
                        <div class="offset-md-1 spec-item-content">IR Cam</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">8GB LPDDR3 / 16GB LPDDR3</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">儲存裝置</div>
                        <div class="offset-md-1 spec-item-content">256GB / 512GB / 1TB PCIe NVMe SSD</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics</div>
                    </li>				
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">內置揚聲器</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac, 無線網絡, 藍芽 4.1, 4G LTE (視乎型號)</div>
                    </li>		
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">I/O port</div>
                        <div class="offset-md-1 spec-item-content">1 X Network(LAN) : 1000BASE-T/100BASE-TX/10BASE-T<br/>1 x USB Type-C™ (3.1) w/power delivery and DisplayPort (1.2)<br/>1 x SuperSpeed USB (3.1) w/charge<br/>2 x SuperSpeed USB (3.0)<br/>1 x HDMI<br/>1 x VGA<br/>1 x Headphone + Microphone</div>
                    </li>			 
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD 讀卡器 (SDHC、SDXC)</div>
                    </li>	
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">鍵盤<sup>5</sup></div>
                        <div class="offset-md-1 spec-item-content">背光鍵盤</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">指紋辨識</div>
                        <div class="offset-md-1 spec-item-content">有</div>
                    </li>
                    <!--<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池</div>
                        <div class="offset-md-1 spec-item-content">35Wh</div>
                    </li>-->
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">續航力<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">全高清顯示約12.00(小時) / 4K顯示約6.00(小時)</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸 (闊 x 深 x 高)</div>
                        <div class="offset-md-1 spec-item-content">約320.4 x 222.7 x 15~17.9mm</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">約1.06 (kg)</div>
                    </li>
					
                </ul>
            </div>
        </div>

      <div class="container">
            <p class="spec-item-name" style="font-size: 0.8rem;">1. 多核心技術的設計旨在提高部分軟體產品的功效。並非所有客戶或軟體應用程式需受惠於此一技術的使用。此技術要求 64 位元計算系統。表現會因硬體和軟體配置而有所不同。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">2. 可選擇語言：繁體中文版 / 英文版 / 簡體中文版。並非所有功能在 Windows 所有版本中都可用。系統要求升級和/或另行購買的硬體、驅動程式、軟體或BIOS更新，才能充分使用 Windows 功能。Windows 10 會不時自動更新。有可能涉及供應商收費及有可能需其他要求才可更新。請瀏覽 http://windows.microsoft.com。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">3. 重量會因組態及製造差異而有所不同。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">4. 電池使用時間因應產品型號、規格、應用程式、功能、使用情況、網絡連線情況及電源設定而異。</p>
			 <p class="spec-item-name" style="font-size: 0.8rem;">5.  如遇到濺水事故，應立即清理表面水跡，並攜帶筆電到就近之VAIO特約維修中心進行檢測或維修。<br>
防濺水功能僅限鍵盤部份，而不適用於筆電其他部份進水的情形</p>
			
			<p class="spec-item-name" style="font-size: 0.8rem;">Intel, Intel 圖誌, the Intel Inside 圖誌和 Intel Core 均是Intel Corporation 在美國或其他國家的商標。<br>
"VAIO" 商標使用權是獲得 VAIO Corporation 授權使用。</p>
        </div>
    </section>

@endsection

@section('css')

@stop

@section('js')

    <script src="{{ asset('js/product.js') }}"></script>
@stop
