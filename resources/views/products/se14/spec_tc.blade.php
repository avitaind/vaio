@extends('layout.app')

@section('title', 'VAIO SE14 2021')

@section('product_nav')
    @include('products.se2021.product_nav')
@stop

@section('content')

<!--------------- Product SPEC here----------------------->

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; SE2021</h3>
                    <img src="/images/pt-pic/SE14vaio-black.png" class="my-4" alt="VAIO® SE14">
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="/images/pt-pic/SE14vaio-black.png"></li>
                        <li class="color-pick" style="background-color: #926c65" data-src="/images/pt-pic/SE14vaio-brown.png"></li>
                    </ul>
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
                        <div class="offset-md-1 spec-item-content">古銅棕、型格灰</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 家用版</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">CPU<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">11代Intel® Core™處理器<br>i5-1135G7<br>i7-1165G7</div>
                    </li>		
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® Iris® Xe Graphics</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">8GB / 16GB DDR4 2400MHz</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">儲存裝置</div>
                        <div class="offset-md-1 spec-item-content">512GB / 1TB SSD</div>
                    </li>
					
					 <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">14" 16:9 全高清 IPS 防眩液晶螢幕 (1920x1080) 超寬闊可視角度</div>
                    </li>			
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">無線網絡</div>
                        <div class="offset-md-1 spec-item-content">Wi-Fi 6 (Gig+)<br/>802.11 ax Bluetooth® 5.1</div>
                    </li>	
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">接口</div>
                        <div class="offset-md-1 spec-item-content">
							2 x USB type-C Thunderbolt 4 (PD, DP)<br/>
							2 x USB type-A 3.2 (one support charging)<br/>
							HDMI v1.4 (supporting up to 3840×2160p @ 30 Hz)<br/>
							Headphone-out and Mic-in (combo)<br/>
							Card reader support SD/SDHC/SDXC
                        </div>
                    </li>		
					 
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池容量<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">最高12小時</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">前置鏡頭</div>
                        <div class="offset-md-1 spec-item-content">1080P IR Front Web Camera</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">4-Speaker design (Top-firing dual speakers, Down-firing dual speakers)</div>
                    </li>					
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">鍵盤<sup>5</sup></div>
                        <div class="offset-md-1 spec-item-content">Island style backlit keyboard with spill resistance</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">保安功能</div>
                        <div class="offset-md-1 spec-item-content">TPM2.0 HW solution<br>
							Finger-print reader (Integrated with power button)<br>
							Lock slot</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸 (闊 x 深 x 高)</div>
                        <div class="offset-md-1 spec-item-content">324.4 x 229.6 x 19.95mm</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">約 1.39kg</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">配件</div>
                        <div class="offset-md-1 spec-item-content">電源變壓器<br/>手提電腦袋</div>
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
