@extends('layout.member_portal')

@section('portal_content')

    <div class="register_form">  
    	<div class="ml-5">Register your product to enjoy an additional warranty. (This offer is subject to terms)</div>   
        <h1 class="ml-5">@lang('member.product_registration_title')</h1>
        <form method="POST" action="{{ route('member.reg_product') }}" id="productForm" accept-charset="UTF-8" class="ls-0">
            @csrf
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="@lang('member.step1')" class="nav-link active">
                                <span class="round-tab"><div>1</div></span>
                            </a>

                        </li>
                        <li role="presentation" class="nav-item mx-auto">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="@lang('member.step2')" class="nav-link disabled">
                                <span class="round-tab"><div>2</div></span>
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="@lang('member.step3')" class="nav-link disabled">
                                <span class="round-tab"><div>3</div></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    @include('member.partial.product_reg_step1')
                    @include('member.partial.product_reg_step2')

                    <div class="clearfix"></div>
                </div>

            </div>
        </form>
    </div>

@stop

@section('css')

    <style>
        .wizard {
            margin: 20px auto;
            background: #fff;
        }

        .wizard .nav-tabs {
            position: relative;
            margin: 40px auto;
            margin-bottom: 0;
            border-bottom: 0;
        }

        .wizard>div.wizard-inner {
            position: relative;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .wizard .nav-tabs>li.active>a,
        .wizard .nav-tabs>li.active>a:hover,
        .wizard .nav-tabs>li.active>a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 70px;
            height: 70px;
            line-height: 65px;
            display: inline-block;
            border-radius: 100px;
            background: #fff;
            border: 2px solid #818092;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
            transition: 0.25s linear;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li a.active span.round-tab {
            background: rgb(255, 160, 0);

            border: 2px solid rgb(255, 160, 0);

        }

        .wizard li a.active span.round-tab div {
            color: white;
        }

        span.round-tab div {
            color: #818092;
        }

        span.round-tab:hover {
            color: #333;
            border: 2px solid rgb(220, 221, 223);
        }

        .wizard .nav-tabs>li {
            width: 19%;
        }

        .wizard li a:after {
            content: " ";
            position: relative;
            left: 46%;
            top: -20px;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #5bc0de;
            transition: 0.1s ease-in-out;
        }

        .wizard li.active.nav-item:after {
            content: " ";
            position: relative;
            left: 46%;
            top: -20px;
            opacity: 1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #5bc0de;
        }

        .wizard .nav-tabs>li a {
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
            position: relative;
        }

        .wizard .nav-tabs>li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
        }

        .wizard h3 {
            margin-top: 0;
        }

        @media( max-width: 585px) {

            .wizard {
                width: 90%;
                height: auto !important;
            }

            span.round-tab {
                font-size: 16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard .nav-tabs>li a {
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard li.active:after {
                content: " ";
                position: absolute;
                left: 35%;
            }
        }
    </style>


    <link type="text/css" rel="stylesheet" href="{{ asset('libs/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" />
@stop


@section('js')

    <script src="{{ asset('libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>


    <script>
        $(function () {
            $('#purchase_date').datepicker();
            $('#birthday').datepicker();
        });
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {
            var curStep = $(this).closest(".tab-pane"),
                curStepBtn = curStep.attr("id"),
                curInputs = curStep.find("input[type='text'],select"),
                isValid = true;
            $(".form-group").removeClass("has-danger").removeClass('has-success');
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-danger");
                }
            }
            if (isValid) {
                var $active = $('.wizard .nav-tabs .nav-item .active');
                var $activeli = $active.parent("li");
                $($activeli).next().find('a[data-toggle="tab"]').removeClass("disabled");
                $($activeli).next().find('a[data-toggle="tab"]').click();
            }
        });
        $("input").change(function (e) {
            $(this).parent("div").parent("div").removeClass('has-danger').addClass('has-success');
        });
        $("select").change(function (e) {
            $(this).parent("div").parent("div").removeClass('has-danger').addClass('has-success');
        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs .nav-item .active');
            var $activeli = $active.parent("li");

            $($activeli).prev().find('a[data-toggle="tab"]').removeClass("disabled");
            $($activeli).prev().find('a[data-toggle="tab"]').click();

        });

    </script>

@stop