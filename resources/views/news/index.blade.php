@extends('layouts.app')

@section('title')
    @lang('title.whats_new')
@stop

@php

$page = 'events';

@endphp

@section('content')
    <main>
        <section class="focus-event top-nav-padding">
            <div class="container">
                <h3 class="section-title ls-0 my-5">News and Media</h3>
                <!---
                --->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="event-item mb-5">
                            <p>AVITA CARES joins hand with The Robin Hood Army to conduct classes for underprivileged children!</p>
                            <figure>
                                <div class="image-wrap">
                                    <img style="width: 100%; height:100%;" src="/images/publication/avita-cares.jpg" />
                                </div>
                                <figcaption class="d-flex event-caption coming_soon px-4 py-1">
                                    <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> 2020.12.02</div>
                                    <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Communication and Computers India</div>
                                </figcaption>
                            </figure>
                            <a class="overlay-link" href="https://candcindia.com/avita-cares-joins-hand-with-the-robin-hood-army-to-conduct-classes-for-underprivileged-children/"></a>

                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="event-item mb-5">
                            <p>AVITA Partners With Robin Hood Army To Help Underprivileged Children</p>
                            <figure>
                                <div class="image-wrap">
                                    <img style="width: 100%; height:100%;" src="/images/publication/dt-web.jpg" />
                                </div>
                                <figcaption class="d-flex event-caption coming_soon px-4 py-1">
                                    <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> 2020.12.02</div>
                                    <div class="event-status coming_soon ml-auto"></strong>Publication:</strong>Digital Terminal</div>
                                </figcaption>
                            </figure>
                            <a class="overlay-link" href="https://digitalterminal.in/news/avita-partners-with-robin-hood-army-to-help-underprivileged-children/20982.html"></a>
                        </div>
                    </div>
                </div>
                <!---
                --->

                </div>
            </section>
        
         <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

@section('js')
    <script>
        $('#news-month-option').change( function(event) {
            window.location = 'news/'+ $(this).val() ;
        })
    </script>
@endsection


@section('css')

    <style>
        .status {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: #692c90;
        }


        .status.in_progress { background-color: #65318f; }
        .status.coming_soon { background-color: #a270c9; }
        .status.finished    { background-color: #a1a1a1; }

        .status-sm {

            display: inline;
            font-size: 0.8rem;
            padding: 3px 1rem;
        }

        .status-md {

            min-width: 160px;

        }
    </style>
@endsection