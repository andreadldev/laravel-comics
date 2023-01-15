@extends('layouts/main')

@section('page-title')
Single
@endsection

@section('page-main')
<?php 
    $url = $_SERVER['REQUEST_URI'];
    $index = substr($url, strpos($url, "?") + 1); ?>
<main id="single">
    <div class="container">
        <section class="row d-flex align-items-center py-5">
            <div class="col-8">
                <h2><?php echo $db['comicsList'][$index]['series']?></h2>
                <span class="d-block py-3">Price: <?php echo $db['comicsList'][$index]['price']?></span>
                <p><?php echo $db['comicsList'][$index]['description']?></p>
                <a href="{{ url('comics') }}"><i class="fa-solid fa-circle-arrow-left fs-2 pt-5"></i></a>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <img class="w-50" src="<?php echo $db['comicsList'][$index]['thumb']?>" alt="">
            </div>
        </section>
    </div>

    <section class="bg-beige py-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="py-3">Talent</h4>
                    <hr>
                        <div class="row">
                            <div class="col-6">
                                <span class="fw-semibold">Art by:</span>
                            </div>
                            <div class="col-6 d-flex flex-wrap wrapper">
                                @for ($x = 0; $x <= count($db['comicsList'][$index]['artists'])-1; $x++)
                                <ul class="list-unstyled">
                                    <li class="text-primary text-nowrap lh-sm">
                                        <a href="#">
                                            <?php echo $db['comicsList'][$index]['artists'][$x].',&nbsp &nbsp' ?>
                                        </a>
                                    </li>
                                </ul>
                                @endfor
                            </div>
                        </div>
                    <hr>
                    <div class="row">
                            <div class="col-6">
                                <span class="fw-semibold">Written by:</span>
                            </div>
                            <div class="col-6 d-flex flex-wrap wrapper">
                                @for ($x = 0; $x <= count($db['comicsList'][$index]['artists'])-1; $x++)
                                <ul class="list-unstyled">
                                    <li class="text-primary text-nowrap lh-sm">
                                        <a href="#">
                                            <?php echo $db['comicsList'][$index]['writers'][$x].',&nbsp &nbsp' ?>
                                        </a>
                                    </li>
                                </ul>
                                @endfor
                            </div>
                        </div>
                        <hr>
                    </div>

                <div class="col-6">
                    <h4 class="py-3">Specs</h4>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            Series:
                        </div>
                        <div class="col-8">
                            <?php echo $db['comicsList'][$index]['series']?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            U.S. Price:
                        </div>
                        <div class="col-8">
                            <?php echo $db['comicsList'][$index]['price']?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            On Sale Date:
                        </div>
                        <div class="col-8">
                            <?php echo $db['comicsList'][$index]['sale_date']?>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection