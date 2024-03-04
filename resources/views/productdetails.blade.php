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
                            href="/assets/img/{{ $productid }}-f.webp">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="/assets/img/{{ $productid }}-f.webp">
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="/assets/img/{{ $productid }}-f.webp">
                            <img width="60" height="60" class="rounded-2"
                                src="/assets/img/{{ $productid }}-f.webp">
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="/assets/img/{{ $productid }}-b.webp">
                            <img width="60" height="60" class="rounded-2"
                                src="/assets/img/{{ $productid }}-b.webp">
                        </a>
                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    @include("{$productid}-detail")
                </main>
            </div>
        </div>
    </section>
@endsection('content')
