<div class="row d-flex no-gutters py-3 col-12 col-sm-8 col-lg-12 mx-auto ml-0">
    <div class="col-12 d-flex ls-0">Model Number:
        <p class="font-weight-bold mx-2"> {{ $model_number }} </p> | <p class="font-weight-bold mx-2">{{ $total }}</p> results found
    </div>
</div>

<div id="product-support-accordion">

    @foreach( $all_drivers as $driver_group => $drivers )
        <div  class="row d-flex no-gutters py-1 col-12 col-sm-8 col-lg-12 mx-auto ml-0">

            <a class="col-12 d-flex p-3 text-white justify-content-start" style="background-color: #9897A5; text-decoration: none;" data-toggle="collapse"
               href="#support-collapse-{{ snake_case($driver_group) }}" role="button" aria-expanded="false" aria-controls="support-collapse-{{ snake_case($driver_group) }}">
                <div class="ml-3 ls-0">{{ $driver_group }}</div>
                <i class="fa fa-plus fa-guide-icon mt-1 ml-auto" aria-hidden="true"></i>
            </a>
            <div class="collapse driver-bar row py-5 col-12 col-sm-8 col-lg-12 mx-auto ml-0" id="support-collapse-{{ snake_case($driver_group) }}">

                @foreach( $drivers as $driver )

                    @php
                        $necessity = array_get( $driver, 'necessity' );

                        $necessity_text = "";

                        switch ( $necessity )
                        {
                            case 'critical':
                                $necessity_text = "(Critical Update)"; break;
                            case 'recommended':
                                $necessity_text = "(Recommended Update)"; break;
                            case 'optional':
                                $necessity_text = "(Optional Update)"; break;
                        }

                    @endphp


                    <div class="col-12" style="
                                            border-bottom: 1px solid grey;">
                        <div class="row ml-3">
                            <div class="h5 pt-3 col-12 p-0">Version {{ $driver['version'] }}
                                {{ $necessity_text }}</div>
                            <div class="col-12 py-3 p-0">
                                <div class="col-12 p-0 font-weight-bold">Description</div>
                                <div class="col-12 p-0">{{ $driver['name'] }}</div>
                                <div class="col-12 p-0">{!! nl2br($driver['description'])  !!}</div>
                            </div>

                        </div>
                        <div class="row mt-3 ml-3">
                            <div class="col-2 p-0 font-weight-bold">File Size</div>
                            <div class="col-2 p-0 font-weight-bold">Update Date</div>
                            <div class="col-2 p-0 font-weight-bold">Download</div>
                        </div>
                        <div class="row mb-3 ml-3">
                            <div class="col-2 p-0 font-weight-light">{{ bytesToHuman($driver['file_size']) }}</div>
                            <div class="col-2 p-0 font-weight-light">{{ $driver['release_date'] }}</div>
                            <div class="col-2 p-0 font-weight-light"><a href="{{ $driver['file_url'] }}">Global</a></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    @endforeach

</div>




