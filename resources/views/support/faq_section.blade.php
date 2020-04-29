@php

    $locale = app()->getLocale();

    $faqs = collect( config('data.faq_categories') )->map(function ( $faq ) use ($locale) {
        return [
            'icon_class' => $faq['icon_class'],
            'title' => ($locale == 'tc') ? $faq['title_tc'] : $faq['title_en'],
            'description' => ($locale == 'tc') ? $faq['description_tc'] : $faq['description_en'],
        ];
    });

@endphp

<div id="faq" class="support-faq-wrap" style=" background-color: #4D5268;">
    <div class="container  ">
        <div class="row  ">
            <div class="row no-gutters my-4 col-12 mx-auto ml-0 ml-md-4">
                <div class="col-12" style="color:white;">
                    <div class="py-3 d-none clickable faq-back" data-backTo="faq" >
                        <i class="fa-1 fa fa-chevron-left" aria-hidden="true"></i> @lang('common.faq.back_btn')
                    </div>
                    <div class="faq-text page-title mb-3 ls-0">@lang('common.faq.title')</div>
                </div>
                <div class="faq-title ls-0 px-2 py-1 d-none" style="background-color:white ;color:#4D5268;"></div>
                <div class="faq-question-no h2 col-12 ls-0 py-1 d-none" style="color:white; font-size: 1.7rem;"></div>
                <div class="page-title faq-question h1 col-12 ls-0 py-1 d-none" style="color:white;"></div>
                <div class="faq-solution col-12 ls-0 py-1 d-none" style="color:white;"></div>

                <div class="faq-question-group col-12 ls-0 text-center mt-4 d-none">
                    <ul class="list-group">
                    </ul>
                </div>
                <div class="faq-content content-title col-12 h5 ls-0" style="color:white;">@lang('common.faq.sub_title')</div>

                @foreach( $faqs as $faq_key => $faq )

                    <div class="faq-content col-12 col-md-6 ls-0 text-center mt-4">
                        <div class="clickable col-12">
                            <div data-json="{{ route('api.faqs', ['type' => $faq_key]) }}" class="faq justify-content-center p-5">
                                <i class="{{ $faq['icon_class'] }} pt-3" aria-hidden="true"></i>
                                <div class="faq-category mt-3">{{ $faq['title'] }}</div>
                                {{--<div class="faq-desc">{{ $faq['description'] }}</div>--}}
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
