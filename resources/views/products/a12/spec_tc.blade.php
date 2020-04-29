@extends('layout.app')

@section('title', 'VAIO A12 Specification')

@section('product_nav')
    @include('products.a12.product_nav')
@stop

@section('content')

<!--------------- Product SPEC here----------------------->

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; A12</h3>
                    <img src="/images/a12/a12_spec.png" class="my-4" alt="VAIO® A12">
                </a>
            </nav>
        </div>
    </section>

    <section class="tab-content py-5">
        <div class="tab-pane active mb-5" id="spec-1" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顏色</div>
                        <div class="offset-md-1 spec-item-content">深夜黑平板電腦機身, 霧鋁銀鍵盤</div>
                    </li> 
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">第 8 代 Intel® Core<sup>TM</sup> i5 8200Y處理器</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 專業版</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">12.5" FHD IPS (1920 x 1080) 16:9 闊螢幕觸控顯示屏 10-points capacitive multitouch</div>
                    </li>	   
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">前置鏡頭</div>
                        <div class="offset-md-1 spec-item-content">2.07 MP (Windows Hello IR鏡頭)</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">8GB 或 16GB  LPDDR3</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">儲存裝置</div>
                        <div class="offset-md-1 spec-item-content">256GB 或 512GB PCIe SSD</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 615</div>
                    </li>				
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">內置揚聲器</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac, 無線網絡, 藍芽 4.1</div>
                    </li>		
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">I/O port</div>
                        <div class="offset-md-1 spec-item-content">1 x LAN(RJ45) : 1000BASE-T/100BASE-TX/10BASE-T<br />
                          1 x USB Type-C™ SuperSpeed USB (USB 3.0) w/power delivery and DisplayPort (1.2) on tablet<br />
                          1 x SuperSpeed USB (USB 3.0) w/charge on dock<br />
                          2 x HighSpeed USB (USB 2.0) on dock<br />
                          1 x HDMI <br />
                          1 x VGA <br />
                        1 x Headphone + Microphone (3.5mm) </div>
                    </li>			 
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD 讀卡器 (SDHC、SDXC)</div>
                    </li>	
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">鍵盤<sup>5</sup></div>
                        <div class="offset-md-1 spec-item-content">背光防潑水鍵盤</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">指紋辨識</div>
                        <div class="offset-md-1 spec-item-content">有</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池</div>
                        <div class="offset-md-1 spec-item-content">平板電腦 24Wh</div>
                    </li>
                    <!--li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">續航力<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">約 15 小時</div>
                    </li-->
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸 (闊 x 深 x 高)</div>
                        <div class="offset-md-1 spec-item-content">平板電腦+鍵盤 約305.5mm x 211.9 x 17.0~21.0mm<br/>
                        平板電腦 約305.5mm x 199.4 x 7.4mm<br />
                        鍵盤 約305.5mm x 211.9x 20.5mm
                        </div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">約1115 g , 492 g (鍵盤), 623 g (平板電腦)</div>
                    </li>
					
                </ul>
            </div>
        </div>
        <div class="container">
            <p class="spec-item-name" style="font-size: 0.8rem;">1. 多核心技術的設計旨在提高部分軟體產品的功效。並非所有客戶或軟體應用程式需受惠於此一技術的使用。此技術要求 64 位元計算系統。表現會因硬體和軟件配置而有所不同。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">2. 可選擇語言：香港中文版 / 英文版 / 簡體中文版。並非所有功能在 Windows 所有版本中都可用。系統要求升級和/或另行購買的硬件、驅動程式、軟件或BIOS更新，才能充分使用 Windows 功能。Windows 10 會不時自動更新。有可能涉及供應商收費及有可能需其他要求才可更新。請瀏覽 http://windows.microsoft.com。</p>
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
