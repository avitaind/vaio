<div class="row">
    @foreach( $lifes as $item )

        @component('news.cards.life_card', ['item' => $item])

        @endcomponent

    @endforeach
</div>