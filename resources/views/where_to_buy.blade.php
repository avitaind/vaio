@php
    $centers = \App\NewWhereToBuy::orderBy('id', 'asc')->paginate(10);
@endphp
@extends('layout.app')

@section('title', __('common.nav.where_to_buy'))

@section('content')

    <section class="top-nav-padding" style="background-color:white; margin-top: 50px;">

        <div class="container">
            <div class="contact-enquire-wrapper mt-5 pt-0 pt-lg-4">
                <h2 class="page-title ">Online Stores</h2>
            </div>
        </div>
        <br/>


        <div class="container">
            <div class="card-deck">
                <div class="card" style="border:none;">
                    <a class="" target="_blank" href="https://in.nexstmall.com/collections/vaio/">
                        <img class="pt-4"  src="images/Nexstgo_mall_logo.png">
                    </a>
                </div>
                <div class="card" style="border:none;">
                    <a class="" target="_blank" href="https://bit.ly/3ffjy0b">
                        <img class=""  src="images/FK-logo.png">
                    </a>
                </div>
                <div class="card" style="border:none;">
                    <a class="" target="_blank" href="https://www.reliancedigital.in/search?q=vaio:relevance">
                        <img class=""  src="images/RD-logo.png">
                    </a>
                </div>
                <div class="card" style="border:none;">
                    <a class="" target="_blank" href="https://amzn.to/3fpWnA1">
                        <img class="pt-4"  src="images/AZ-logo.png">
                    </a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="contact-enquire-wrapper mt-5 pt-0 pt-lg-4">
                <h2 class="page-title ">Offline Stores</h2>
            </div>
        </div>

        <div class="container py-5">
          <div class="row">
                {{-- Search Bar Start --}}
                <div class="container">
                    <div class="input-group">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Type your City / State Here"> </input>
                    <div class="input-group-addon overlay-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
                    </div>
                </div>
                {{-- Search Bar End --}}

                <div class="container  ls-0">
                    <div class="shopsList" id="shopsList">
                    @if(!empty($centers) && $centers->count())
                        @foreach( $centers as $shop )
                            <div class="col-md-6">
                                <div class="pb-1"><h4>{{ $shop->name }}</h4></div>
                                <div class="">
                                    <i class="fa fa-map icon"></i>
                                    {{ $shop->address }}
                                </div>
                                <div class="">
                                    <i class="fa fa-phone icon"></i>
                                    {{ $shop->phone }}
                                </div>
                                <br>
                            </div>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="10">There are no data.</td>
                        </tr>
                    @endif
                    </div>
                </div>
            </div>

            {!! $centers->links() !!}

            <div class="contact-enquire-wrapper mt-5 pt-0 pt-lg-4">
                <h2 class="page-title">@lang('common.contact_us.sales.title')</h2>
                <h3 class="content-text mt-3 mb-5">@lang('common.contact_us.sales.open_hour')</h3>
                <div class="row">
                    <div class="col-12 col-md-6 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/phone.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.sales.phone')</p>
                        <a href="tel:18001039635" class="sub-text">1800-103-9635</a>
                    </div>
                    <div class="col-12 col-md-6 text-center mb-4 mb-lg-0">
                        <img class="info-icon" src="/images/icons/email-icon.png">
                        <p class="content-text mt-3 mb-0">@lang('common.contact_us.sales.email')</p>
                        <a href="mailto:salesin@in.vaio.com" class="sub-text">Salesin@in.vaio.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop


@section('js')
        <script type="text/javascript">
            $('#search').on('keyup', function(){
                    $value=$(this).val();
                    $.ajax({
                        type: 'get',
                        url: '{{URL::to('searchWhereToBuy')}}',
                        data: { 'search': $value},
                        success:function(data){
                            $('#shopsList').html(data);
                        }
                    })
                })
        </script>

    <script type="text/javascript" src="{{ asset('js/support.js') }}"></script>

@endsection
