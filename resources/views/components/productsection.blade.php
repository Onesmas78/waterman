<div class="container pt-60">
    <div class="row flex-row-reverse">
        <div class="col-lg-9">
            <div class="product-area pb-115">
                <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-20">
                    <div class="section-title-7">
                        <h2>Meters</h2>
                    </div>
                    <div class="tab-style-8 nav tab-res-mrg">
                        <a class="active" href="#product-6" data-bs-toggle="tab">Brass Meters </a>
                        <a href="#product-7" data-bs-toggle="tab">Single Valve </a>
                        <a href="#product-8" data-bs-toggle="tab">Dual Valve </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-6" class="tab-pane active">
                        <div
                            class="product-slider-active-7 dot-style-2 dot-style-2-position-static dot-style-2-active-green-2">
                            @for ($i = 0; $i <= 10; $i++)
                                <x-productsingle />
                            @endfor
                        </div>
                    </div>
                    <div id="product-7" class="tab-pane">
                        <div
                            class="product-slider-active-7 dot-style-2 dot-style-2-position-static dot-style-2-active-green-2">
                            @for ($i = 0; $i <= 10; $i++)
                                <x-productsingle />
                            @endfor
                        </div>
                    </div>
                    <div id="product-8" class="tab-pane">
                        <div
                            class="product-slider-active-7 dot-style-2 dot-style-2-position-static dot-style-2-active-green-2">
                            @for ($i = 0; $i <= 10; $i++)
                                <x-productsingle />
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="service-area mb-30">
                <div class="service-wrap-border service-wrap-padding-2">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 col-sm-6">
                            <div class="single-service-wrap-2 single-service-wrap-2-modify mb-30">
                                <div class="service-icon-2 icon-green-2">
                                    <i class="icon-cursor"></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Free Shipping</h3>
                                    <p>Orders over $99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12 col-sm-6">
                            <div class="single-service-wrap-2 single-service-wrap-2-modify mb-30">
                                <div class="service-icon-2 icon-green-2">
                                    <i class="icon-refresh "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>90 Days Return</h3>
                                    <p>For any problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12 col-sm-6">
                            <div class="single-service-wrap-2 single-service-wrap-2-modify mb-30">
                                <div class="service-icon-2 icon-green-2">
                                    <i class="icon-credit-card "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Secure Payment</h3>
                                    <p>100% Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12 col-sm-6">
                            <div class="single-service-wrap-2 single-service-wrap-2-modify mb-30">
                                <div class="service-icon-2 icon-green-2">
                                    <i class="icon-earphones "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>24h Support</h3>
                                    <p>Dedicated support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
