<div id="driver_n_tools" class="support-search-wrap py-5">
    <div class="container">
        <div class="row">

        <div class="warranty-center-wrap py-5 text-center" style="background-color:#fff;">            
            	<div class="container h-100">
                	<div class="row h-100 align-items-center">
                    
                    	<div class="col-12 col-lg-6">
	                        <img src="/images/warranty-extension/VAIO_warranty.png" style="width:100%; max-width:600px;">
                        </div>
                        <div class="col-12 col-lg-6">                        
                            <div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension Service is available now</div>                            
                            <div class="warranty-content text-left mt-4 mb-3 font-weight-light">
                            Thanks for the valuable suggestion from our customers. You can purchase the newly launched “Warranty Extension Service” online now. You may choose to extend 1 or 2 years to enjoy our worry-free warranty service.
                            </div>                           
                            <div class="text-center purchase_steps">
                                <a href="https://warranty.nexstgo.com/products/vi" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">
                                    See More
                                </a> 
                            </div>  
                        </div>                                     
	                </div>
                </div>
            </div>


            <div class="col-12 col-lg-10">
            
                <div>
                    <form method="POST" action="" class="">
                        <div class="row no-gutters my-4 col-12 mx-auto ml-0">
                            <div class="h1 page-title my-2 ls-0 font-weight-light">@lang('common.support.dnt.title')</div>
                            <div class="col-12 col-md-12">
                                <div class="content-title my-4 ls-0 font-weight-light">@lang('common.support.dnt.sub_title')</div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-8 col-md-8">
                                            <select id="model_number_field" name="type" class="form-control">
                                                <option value="" disabled selected>@lang('common.support.dnt.select_model_number')</option>
                                                @foreach( $model_numbers as $model_number )
                                                    <option value="{{ $model_number }}">{{ $model_number }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4 pt-md-0 pt-3">
                                            <button type="button" id="driver_search_btn" class="btn btn-primary support-search-btn-block" style="min-width: 200px !important;">@lang('common.support.dnt.go_btn')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row no-gutters col-12 col-sm-8 col-lg-12 ml-0">
                        <div class="col-12 col-md-12">
                            <div class="sub-text">
                                @lang('common.support.dnt.content_line1')
                            </div>
                            <div class="sub-text">
                                @lang('common.support.dnt.content_line2')
                            </div>
                        </div>
                    </div>

                    <div id="driver_result">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@push('js')

    <script>



        $(function () {


            $('#driver_result').delegate('.driver-bar', 'show.bs.collapse', function () {
                $(this).parent().find('.fa-guide-icon').addClass('fa-minus').removeClass('fa-plus');
            });

            $('#driver_result').delegate('.driver-bar', 'hide.bs.collapse', function () {
                $(this).parent().find('.fa-guide-icon').addClass('fa-plus').removeClass('fa-minus');
            });

            $('#driver_search_btn').click(function() {
                var selected_model_number = $("#model_number_field").val();

                if ( !selected_model_number ) {
                    return; // Do nothing.
                }

                var url = "/drivers?model_number=" + selected_model_number;
                $("#driver_result").load( url );
            });


            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results==null){
                    return null;
                }
                else{
                    return decodeURI(results[1]) || 0;
                }
            };

            var selected_model_number = $.urlParam('model_number');

            if ( selected_model_number ) {

                $("#model_number_field").val(selected_model_number);
                $("#driver_search_btn").trigger('click');

            }




        });



    </script>

@endpush
