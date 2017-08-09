<article class="card">
    {{ $card->body }}
    <ul>
        @foreach($card->notes as $note)
            @include('cards._note')
        @endforeach
    </ul>
</article>