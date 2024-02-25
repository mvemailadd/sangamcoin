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
                            href="assets/img/sivaji-001-f.webp">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="assets/img/sivaji-001-f.webp">
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="assets/img/sivaji-001-f.webp">
                            <img width="60" height="60" class="rounded-2" src="assets/img/sivaji-001-f.webp">
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="assets/img/sivaji-001-b.webp">
                            <img width="60" height="60" class="rounded-2" src="assets/img/sivaji-001-b.webp">
                        </a>
                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            Two Rs Rare Chatrapati Shivaji Maharaj Ji Hyderabad Mint Extra Fine Condition 13
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">
                                    4.5
                                </span>
                            </div>
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                            <span class="text-success ms-2">In stock</span>
                        </div>

                        <div class="mb-3">
                            <span class="h5">₹1,311.45</span>
                            <span class="text-muted">only</span>
                        </div>

                        <p>Ashoka Lion pedestal, denomination below
                            Lettering:
                            भारत INDIA
                            रुपया 2 RUPEES
                            सत्यमेव जयते </p>
                        <p>Bust of Shivaji facing right</p>
                        <p>NOTE: Different mintmarks</p>
                        <p>♦ (small dot/diamond) = Mumbai</p>
                        <p>M (letter "M") = Mumbai Proof Issues
                            (no mintmark) = Calcutta</p>
                        <p>* (five-pointed star) = Hyderabad</p>
                        <p>° (circular dot) = Noida</p>

                        <div class="row">
                            <dt class="col-3">Issuer:</dt>
                            <dd class="col-9">India</dd>

                            <dt class="col-3">Type</dt>
                            <dd class="col-9">Circulating commemorative coin</dd>

                            <dt class="col-3">Composition</dt>
                            <dd class="col-9">Copper-nickel</dd>

                            <dt class="col-3">Weight</dt>
                            <dd class="col-9">5.69 g</dd>

                            <dt class="col-3">Diameter</dt>
                            <dd class="col-9">25.9 mm</dd>

                            <dt class="col-3">Thickness</dt>
                            <dd class="col-9">1.46 mm</dd>

                            <dt class="col-3">Shape</dt>
                            <dd class="col-9">Hendecagonal (11-sided)</dd>

                            <dt class="col-3">Number</dt>
                            <dd class="col-9">N#5020</dd>

                            <dt class="col-3">References</dt>
                            <dd class="col-9">KM#290</dd>

                        </div>

                        <hr>

                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                </select>
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <button class="btn btn-white border border-secondary px-3" type="button"
                                        id="button-addon1" data-mdb-ripple-color="dark">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="form-control text-center border border-secondary"
                                        placeholder="14" aria-label="Example text with button addon"
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