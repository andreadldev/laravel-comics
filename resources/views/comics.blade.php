@extends('layouts/main')

@section('page-title')
Comics
@endsection

@section('page-main')
<main>
    <section id="comics-section" class="text-white">
        <div class="container d-flex flex-wrap">
            @foreach ($db['comicsList'] as $comic)
            <div class="comics-card">
                <div class="overflow-hidden">
                    <img src="<?php echo $comic['thumb'] ?>" alt="<?php echo $comic['series'] ?>">
                </div>
                <span class="mt-3"><?php echo $comic['series'] ?></span>
            </div>
            @endforeach
            <button>LOAD MORE</button>
        </div>
    </section>
</main>
@endsection