@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])

            <img src="https://hk.vaio.com/images/icons/logo.png"  alt="vaio-logo" />
            {{--{{ config('app.name') }}--}}
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} Nexstgo Company Ltd. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
