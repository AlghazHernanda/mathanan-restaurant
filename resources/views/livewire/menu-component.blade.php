<div>
    <section style="background-image: url(assets/images/menu-bg.png);"
    class="our-menu section bg-light repeat-img" id="menu">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">our menu</p>
                        <h2 class="h2-title">wake up early, <span>eat fresh & healthy</span></h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/images/title-shape.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-tab-wp">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="menu-tab text-center">
                            <ul class="filters">
                                <div class="filter-active"></div>
                                <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                    <img src="assets/images/menu-1.png" alt="">
                                    All
                                </li>
                                <li class="filter" data-filter=".breakfast">
                                    <img src="assets/images/menu-2.png" alt="">
                                    Breakfast
                                </li>
                                <li class="filter" data-filter=".lunch">
                                    <img src="assets/images/menu-3.png" alt="">
                                    Lunch
                                </li>
                                <li class="filter" data-filter=".dinner">
                                    <img src="assets/images/menu-4.png" alt="">
                                    Dinner
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-list-row">
                <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                    

                    @foreach ($menus as $menu)
                    <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                        <div class="dish-box text-center">
                            <div class="dist-img">
                                <img src="{{ asset('assets/images/menu/menu-')}}{{$menu->id}}-1.jpeg" alt="">
                            </div>
                            <div class="dish-rating">
                                5
                                <i class="uil uil-star"></i>
                            </div>
                            <div class="dish-title">
                                <h3 class="h3-title">{{$menu->name}}</h3>
                                <p>{{$menu->description}}</p>
                            </div>
                           
                            <div class="dist-bottom-row">
                                <ul>
                                    <li>
                                        <b>{{$menu->reguler_price}}</b>
                                    </li>
                                    <li>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up dish-add-btn" href="#" wire:click.prevent="store({{ $menu->id}},'{{ $menu->name }}', {{ $menu->regular_price }})">
                                                <i class="uil uil-plus"></i></a>
                                        </div>
                                        {{-- <button class="dish-add-btn">
                                            <i class="uil uil-plus"></i>
                                        </button> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
    
                   
                    <!-- 6 -->
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section class="two-col-sec section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="sec-img mt-5">
                    <img src="assets/images/pizza.png" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sec-text">
                    <h2 class="xxl-title">Chicken Pepperoni</h2>
                    <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                        eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                        totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                        distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                        laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                    <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                        voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>
    
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section class="two-col-sec section pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="sec-text">
                    <h2 class="xxl-title">Chicken Pepperoni</h2>
                    <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                        eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                        totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                        distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                        laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                    <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                        voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="sec-img">
                    <img src="assets/images/sushi.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
