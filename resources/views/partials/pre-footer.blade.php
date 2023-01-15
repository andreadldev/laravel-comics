<section id="pre-footer">
    <div class="container text-center d-flex flex-column flex-wrap flex-lg-row justify-content-between align-items-start w-25 m-auto text-nowrap text-white py-5 px-lg-5">
        @foreach ($db['preFooterItems'] as $item)
        <div class="wrapper">
            <a class="d-flex justify-content-center align-items-center" href="#">
                <img class="my-3 my-lg-0" src="{{asset('img/').'/'.$item['img']}}" alt="...">
                <h6 class="pt-3 ps-3 pe-3"><?php echo $item['title'] ?></h6>
            </a>
        </div>
        @endforeach
    </div>
</section>