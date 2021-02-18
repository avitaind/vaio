@extends('layout.app')

@section('title', 'VAIO Z Specification')

@section('product_nav')
    @include('products.z.product_nav')
@stop

@section('content')

<!--------------- Product SPEC here----------------------->

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-12 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; Z</h3>
                    <img src="/images/z/z-black.jpg" class="my-4" alt="VAIO® Z">                     
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #000" data-src="/images/z/z-black.jpg"></li> 
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
                        <div class="offset-md-1 spec-item-content">Signature Black</div>
                    </li> 
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器<sup>1</sup></div>
                        <div class="offset-md-1 spec-item-content">
							Intel® Core<sup>TM</sup> i7-11375H Processor
						</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統<sup>2</sup></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 專業版</div>
                    </li>	
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">14" UHD 4K (3840 x 2160) 16:9</div>
                    </li>	   
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">前置鏡頭</div>
                        <div class="offset-md-1 spec-item-content">2.0MP Hello Camera</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">32GB LPDDR4x</div>
                    </li>                    
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">儲存裝置</div>
                        <div class="offset-md-1 spec-item-content">2TB PCIe NVMe SSD Gen.4</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® Iris® Xe Graphics</div>
                    </li>				
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">Stereo Speaker<br/>Dolby Audio™</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE802.11 a/b/g/n/ac/ax compliant Wi-Fi 6 compliant</div>
                    </li>		
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">I/O port</div>
                        <div class="offset-md-1 spec-item-content">
							1x HDMI<br/>
							1x Combo Headphone+Microphone<br/>
							2x USB Type-C™ Supports<br/>
						 -Thunderbolt™ 4<br/>
						 -USB Power Delivery<br/>
						 -SuperSpeed USB 20Gbps (USB4™)<br/>
						 -DisplayPort 1.4<br/>
						 -5V assist charge
						</div>
                    </li>			 
					<!--<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD 讀卡器 (SDHC、SDXC)</div>
                    </li>	 -->
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
                        <div class="offset-md-1 spec-item-content">53Wh</div>
                    </li>
					<!--
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">續航力<sup>4</sup></div>
                        <div class="offset-md-1 spec-item-content">Approx 34 hours</div>
                    </li> -->
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸 (闊 x 深 x 高)</div>
                        <div class="offset-md-1 spec-item-content">約 320.4 x 220.8 x 12.2~16.9mm</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量<sup>3</sup></div>
                        <div class="offset-md-1 spec-item-content">約1.06kg</div>
                    </li>
					<li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">安全性</div>
                        <div class="offset-md-1 spec-item-content">-TPM2.0 (TCG ver.2.0 compliant)<br/>-Secutiry Lock slot</div>
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
