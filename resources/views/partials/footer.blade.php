<footer>
    <section class="footer-top overflow-hidden">
        <div class="container d-flex justify-content-between">
            <div class="d-flex py-5 mx-4 mx-md-0 ">

                <div class="text-light me-5 text-nowrap">
                    @for ($i = 0; $i <= 1; $i++)
                    <ul class="list-unstyled d-flex flex-column">
                        <li><h4 class="ps-1"><?php echo $footerItems[$i]['title'] ?></h4></li>
                        <?php foreach ($footerItems[$i]['links'] as $link) 
                            {echo "<li><a href='#'>$link</a></li>";} 
                        ?>
                    </ul>
                    @endfor
                </div>
                @for ($i = 2; $i <= 3; $i++)
                <div class="text-light me-4 text-nowrap">
                    <ul class="list-unstyled">
                        <li><h4 class="ps-1"><?php echo $footerItems[$i]['title'] ?></h4></li>
                        <?php foreach ($footerItems[$i]['links'] as $link) 
                            {echo "<li><a href='#'>$link</a></li>";} 
                        ?>
                    </ul>
                </div>
                @endfor

            </div>
            <div class="d-flex justify-content-center align-items-center position-relative w-100">
                <img id="logo" class="position-absolute user-select-none pe-none" src="{{ Vite::asset('public/img/dc-logo-bg.png') }}" alt="..." />
            </div>
        </div>
    </section>

    <section class="footer-bottom py-4">
        <div class="container d-flex justify-content-between">
            <button id="btn-signup" class="text-white border-none px-4 py-3">SIGN-UP NOW</button>
            <div class="btn-container d-flex flex-column flex-md-row justify-content-center align-items-center">
                <span class="fw-bold mb-1 mb-md-0">FOLLOW US</span>
                <?php $socials=['facebook-f','twitter','youtube','pinterest-p','location-dot'] ?>
                <form>
                    @foreach ($socials as $social)
                    <button formaction="#">
                        <i class="fa-<?php if ($social == 'location-dot') {echo 'solid';} else {echo 'brands';}?> fa-<?php echo $social ?> m-auto"></i>
                    </button>
                    @endforeach
                </form>
            </div>
        </div>
    </section>
</footer>