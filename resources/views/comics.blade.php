@extends('layouts/main')

@section('page-title')
Comics
@endsection

@section('page-main')
<main>
    <section id="comics-section" class="text-white">
        <div class="container d-flex flex-wrap">
        @for ($x = 0; $x <= count($db['comicsList'])-1; $x++)
            <div class="comics-card">
                <div class="overflow-hidden">
                    <a id="link" href="{{ url('comics/single?'.$x) }}">
                        <img src="<?php echo $db['comicsList'][$x]['thumb']?>" alt="...">
                    </a>
                </div>
                <span class="mt-3"><?php echo $db['comicsList'][$x]['series'] ?></span>
            </div>
            @endfor
            <button id="pippo">LOAD MORE</button>
        </div>
    </section>
    @include('partials.pre-footer')
</main>
@endsection
