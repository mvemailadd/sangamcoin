@extends('layouts.master')

@section('content')
    <section id="productdetails" class="">
        <div>
            <p></p>
            <p></p>
            <p></p>
        </div>
        <div class="container">
            <div class="row">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                            href="/assets/img/chandragupta-001-f.jpg">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="/assets/img/chandragupta-001-f.jpg">
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="/assets/img/chandragupta-001-f.jpg">
                            <img width="60" height="60" class="rounded-2" src="/assets/img/chandragupta-001-f.jpg">
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="/assets/img/chandragupta-001-b.jpg">
                            <img width="60" height="60" class="rounded-2" src="/assets/img/chandragupta-001-b.jpg">
                        </a>
                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            Chandragupta I, with halo, standing facing left.
                        </h4>

                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">
                                    5.0
                                </span>
                            </div>
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                            <span class="text-success ms-2">In stock</span>
                        </div>

                        <div class="mb-3">
                            <span class="h5">₹5,02,500.00</span>
                            <span class="text-muted">only</span>
                        </div>

                        <p>Chandragupta I, with halo, standing facing left, wearing cap, decorated coat and trousers, ear
                            rings and armlets. Holds a crescent topped standard in left hand and offers an object to
                            Kumaradevi with his right hand. Kumaradevi, standing facing right, wears a long loose robe, a
                            necklace, earrings and headdress. A halo surrounds her head.</p>

                        <p>Goddess seated facing on a recumbent lion facing to the right. Wearing a loose robe and with a
                            halo around head. Right arm outstretched, holding a fillet, with a cornucopia resting on left
                            arm. In left field a symbol. Surrounded by a border of dots.</p>

                        <div class="row">
                            <dt class="col-3">Issuer:</dt>
                            <dd class="col-9">Gupta Empire (India (ancient)) </dd>

                            <dt class="col-3">Type</dt>
                            <dd class="col-9">Standard circulation coin</dd>

                            <dt class="col-3">Composition</dt>
                            <dd class="col-9">Gold</dd>

                            <dt class="col-3">Weight</dt>
                            <dd class="col-9">7.35 g</dd>

                            <dt class="col-3">Diameter</dt>
                            <dd class="col-9">25.9 mm</dd>

                            <dt class="col-3">Shape</dt>
                            <dd class="col-9">Round (irregular)</dd>

                            <dt class="col-3">Number</dt>
                            <dd class="col-9">N#316859</dd>

                        </div>

                        <hr>

                        <div class="row mb-4">
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <button class="btn btn-white border border-secondary px-3" type="button"
                                        id="button-addon1" data-mdb-ripple-color="dark">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border border-secondary"
                                        placeholder="1" aria-label="Example text with button addon"
                                        aria-describedby="button-addon1">
                                    <button class="btn btn-white border border-secondary px-3" type="button"
                                        id="button-addon2" data-mdb-ripple-color="dark">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="cta">
                            <div class="cta-btn-container1 text-center">
                                <a class="cta-btn1 align-middle" href="#">Buy Now</a>
                            </div>
                        </div>
                        <div class="cta">
                            <div class="cta-btn-container text-center">
                                <a class="cta-btn align-middle" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection('content')
