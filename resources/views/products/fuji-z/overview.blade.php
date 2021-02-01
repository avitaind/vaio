@extends('layout.app')

@section('title', 'Fuji Z')
@section('product_nav')


@section('content')

<!--- Banner here------------------------------------>
<section class="fuji-z-section">
    <a href="/login" ><img src="/images/fuji-z/vaio_comingsoon_page_pc_en.jpg" id="desktop" alt="VAIO Launch Event" width="100%" /></a>
    <a href="/login" ><img src="/images/fuji-z/vaio_comingsoon_page_mo_en.jpg" id="mobile" alt="VAIO Launch Event" width="100%" /></a>


</section>

<!--- Banner end here------------------------------------>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop
