@extends('layout.app')

@section('title', 'VAIO S11 VAIO S13 Specification')

@section('product_nav')
    @include('products.s11.product_nav')
@stop

@section('content')

    <section  style="background-color: #ededed;">
        <div class="container">
            <nav class="nav nav-tabs">
                <a href="#spec-1" class="text-center spec-product nav-link col-6 active" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4 pt-5 pt-lg-0">VAIO&#174; S11</h3>
                    <img src="{{ asset('images/banner/S11vaio-black.png')}}" class="my-5" alt="VAIO® S11">
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="{{asset('images/banner/S11vaio-black.png')}}"></li>
                        <li class="color-pick" style="background-color: #dbdcde" data-src="{{asset('images/banner/S11vaio-silver.png')}}"></li>
                        <li class="color-pick" style="background-color: #926c65" data-src="{{asset('images/banner/S11vaio-brown.png')}}"></li>
                        <li class="color-pick" style="background-color: #dda4aa" data-src="{{asset('images/banner/S11vaio-pink.png')}}"></li>
                        <li class="color-pick" style="background-color: #eeeeee" data-src="{{asset('images/banner/S11vaio-white.png')}}"></li>
                    </ul>
                </a>
                <a href="#spec-2" class="text-center spec-product nav-link col-6" data-toggle="tab" role="tab">
                    <h3 class="spec-product-name mb-4  pt-5 pt-lg-0">VAIO&#174; S13</h3>
                    <img src="{{ asset('images/banner/S13vaio-black.png')}}" class="my-5" alt="VAIO® S13">
                    <ul class="color-pick-list list-unstyled d-flex flex-wrap mx-auto align-items-center justify-content-center">
                        <li class="color-pick active" style="background-color: #37383a" data-src="{{asset('images/banner/S13vaio-black.png')}}"></li>
                        <li class="color-pick" style="background-color: #dbdcde" data-src="{{asset('images/banner/S13vaio-silver.png')}}"></li>
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
                        <div class="offset-md-1 spec-item-content">黑色, 銀灰, 咖啡, 櫻花粉, 白色</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器 <sub>1</sub></div>
                        <div class="offset-md-1 spec-item-content">第8代Intel® Core™i5-i7處理器<br>- Trusted Platform Module (TPM)：TCG Ver. 2.0</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統 <sub>2</sub></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 家用版 / Windows 10 專業版</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">11.6" FHD IPS（1920 x 1080）顯示屏<br>- CMOS Sensor HD 前置鏡頭</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">8GB - 16GB LPDDR3</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">SSD硬碟</div>
                        <div class="offset-md-1 spec-item-content">256GB - 512GB PCIe SSD</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">內置Intel® HD Audio揚聲器</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac 無線網絡, 藍芽4.1</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">接口</div>
                        <div class="offset-md-1 spec-item-content">
                            1 X Network（LAN）<br>
                            1 x SuperSpeed USB（3.0）可充電<br>
                            2 x SuperSpeed USB（3.0）<br>
                            1 x HDMI<br>
                            1 x VGA<br>
                            1 x Headphone + Microphone
                        </div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD讀卡器（SDHC、SDXC、UHS-I）</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">指紋傳感器</div>
                        <div class="offset-md-1 spec-item-content">有</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">4G LTE</div>
                        <div class="offset-md-1 spec-item-content">僅適用於指定黑色型號</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸（闊 x 深 x 高）</div>
                        <div class="offset-md-1 spec-item-content">283.4mm × 15～17.9mm × 195.5mm</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量 <sub>3</sub></div>
                        <div class="offset-md-1 spec-item-content">Approx. 0.85kg</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池 <sub>4</sub></div>
                        <div class="offset-md-1 spec-item-content">4-cell 鋰電</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane mb-5" id="spec-2" role="tabpanel">
            <div class="container">
                <ul class="list-unstyled spec-list">
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顏色</div>
                        <div class="offset-md-1 spec-item-content">黑色, 銀灰</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">處理器 <sub>1</sub></div>
                        <div class="offset-md-1 spec-item-content">
                            第7代 Intel® Core™ i3 處理器 / 第8代Intel® Core™i5-i7處理器<br>
                            - Trusted Platform Module (TPM)：TCG Ver. 2.0
                        </div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">操作系統 <sub>2</sub></div>
                        <div class="offset-md-1 spec-item-content">Windows 10 家用版 / Windows 10 專業版</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">顯示屏</div>
                        <div class="offset-md-1 spec-item-content">13.3" FHD IPS (1920 x 1080) 顯示屏<br>- CMOS Sensor HD 前置鏡頭</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">記憶體</div>
                        <div class="offset-md-1 spec-item-content">4GB - 16GB LPDDR3</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">SSD硬碟</div>
                        <div class="offset-md-1 spec-item-content">128GB - 512GB PCIe SSD</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">圖像控制卡</div>
                        <div class="offset-md-1 spec-item-content">Intel® UHD Graphics 620 / Intel® HD Graphics 620 (只適用於第7代 Intel® Core™ i3 處理器)</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">音效</div>
                        <div class="offset-md-1 spec-item-content">內置Intel® HD Audio揚聲器</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">網絡連接</div>
                        <div class="offset-md-1 spec-item-content">IEEE 802.11a/b/g/n/ac 無線網絡, 藍芽4.1</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">接口</div>
                        <div class="offset-md-1 spec-item-content">
                            1 X Network（LAN）<br>
                            1 x SuperSpeed USB（3.0）可充電<br>
                            2 x SuperSpeed USB（3.0）<br>
                            1 x HDMI<br>
                            1 x VGA<br>
                            1 x Headphone + Microphone
                        </div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">讀卡器</div>
                        <div class="offset-md-1 spec-item-content">SD讀卡器（SDHC、SDXC、UHS-I）</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">指紋傳感器</div>
                        <div class="offset-md-1 spec-item-content">有</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">尺寸（闊 x 深 x 高）</div>
                        <div class="offset-md-1 spec-item-content">320.4mm × 15～17.9mm × 216.6mm</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">重量 <sub>3</sub></div>
                        <div class="offset-md-1 spec-item-content">Approx. 1.07kg</div>
                    </li>
                    <li class="spec-item d-flex">
                        <div class="offset-md-1 col-4 col-md-3 spec-item-name">電池 <sub>4</sub></div>
                        <div class="offset-md-1 spec-item-content">4-cell 鋰電</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <p class="spec-item-name" style="font-size: 0.8rem;">1. 多核心技術的設計旨在提高部分軟體產品的功效。並非所有客戶或軟體應用程式需受惠於此一技術的使用。此技術要求 64 位元計算系統。表現會因硬體和軟件配置而有所不同。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">2. 可選擇語言：香港中文版 / 英文版 / 簡體中文版。並非所有功能在 Windows 所有版本中都可用。系統要求升級和/或另行購買的硬件、驅動程式、軟件或BIOS更新，才能充分使用 Windows 功能。Windows 10 會不時自動更新。有可能涉及供應商收費及有可能需其他要求才可更新。請瀏覽 http://windows.microsoft.com。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">3. 重量會因組態及製造差異而有所不同。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">4. 電池使用時間因應產品型號、規格、應用程式、功能、使用情況、網絡連線情況及電源設定而異。</p>
            <p class="spec-item-name" style="font-size: 0.8rem;">
                Intel, Intel 圖誌, the Intel Inside 圖誌和 Intel Core 均是Intel Corporation 在美國或其他國家的商標。<br>
                "VAIO" 商標使用權是獲得 VAIO Corporation 授權使用。
            </p>
        </div>
    </section>

@endsection

@section('css')

@stop

@section('js')

    <script src="{{ asset('js/product.js') }}"></script>
@stop
