@extends('layouts.app')

@section('pagina-raccolte', 'Album-artisti')

@section('content')

<div class="contenitore">
    <div class="contenitore-dischi">
        @foreach ($album as $disco_corrente)
            @if ($disco_corrente['numero_tracce'] < 10)
                <div class="dischi sfondo-chiaro">
                    <p>{{ $disco_corrente['artista'] }}</p>
                    <p>{{ $disco_corrente['genere'] }}</p>
                    <p>{{ $disco_corrente['titolo'] }}</p>
                    <p>{{ $disco_corrente['anno'] }}</p>
                    <p>{{ $disco_corrente['nazione_artista'] }}</p>
                </div>
            @else
                <div class="dischi sfondo-scuro">
                    <p>{{ $disco_corrente['artista'] }}</p>
                    <p>{{ $disco_corrente['genere'] }}</p>
                    <p>{{ $disco_corrente['titolo'] }}</p>
                    <p>{{ $disco_corrente['anno'] }}</p>
                    <p>{{ $disco_corrente['nazione_artista'] }}</p>
                </div>
            @endif
        @endforeach
    </div>
</div>

@endsection

{{-- Questa è la parte ottimizzata che pensavo fosse piu adatta ma che non funziona --}}

{{-- <div class="contenitore">
    <div class="contenitore-dischi">
        @foreach ($album as $disco_corrente)
            @if ($disco_corrente['numero_tracce'] < 10 ? 'sfondo-chiaro' : 'sfondo-scuro')
                <div class="dischi">
                    <p>{{ $disco_corrente['artista'] }}</p>
                    <p>{{ $disco_corrente['genere'] }}</p>
                    <p>{{ $disco_corrente['titolo'] }}</p>
                    <p>{{ $disco_corrente['anno'] }}</p>
                    <p>{{ $disco_corrente['nazione_artista'] }}</p>
                </div>
            @endif
        @endforeach
    </div>
</div> --}}
