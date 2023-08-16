@extends('layouts.dashboard')

@section('titel')
Produk Dashboard
@endsection

@section('konten')
    <div class="section-content section-dash-home" data-aos="flip-left">
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dash-tittle">Produk Saya</h2>
        <p class="dash-subtittle">
            Lihat Apa yang Sudah Kamu lakukan hari ini
        </p>
        </div>
        <div class="dash-content">
        <div class="row">
            <div class="col-12">
            <a href="dash-products-add.html" class="btn btn-success"
                >Tambah Produk Baru</a
            >
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a
                href="/dash-products-details.html"
                class="card card-dash-produk d-block"
                ><div class="card-body">
                <img src="/images/cat.jpg" alt="" class="w-100 mb-2" />
                <div class="product-tittle">Cat Ajaib</div>
                <div class="product-kategori">tools</div>
                </div></a
            >
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a
                href="/dash-products-details.html"
                class="card card-dash-produk d-block"
                ><div class="card-body">
                <img src="/images/cat.jpg" alt="" class="w-100 mb-2" />
                <div class="product-tittle">Cat Ajaib</div>
                <div class="product-kategori">tools</div>
                </div></a
            >
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a
                href="/dash-products-details.html"
                class="card card-dash-produk d-block"
                ><div class="card-body">
                <img
                    src="/images/sepatu.jpg"
                    alt=""
                    class="w-100 mb-2"
                />
                <div class="product-tittle">Cat Ajaib</div>
                <div class="product-kategori">tools</div>
                </div></a
            >
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a
                href="/dash-products-details.html"
                class="card card-dash-produk d-block"
                ><div class="card-body">
                <img src="/images/cat.jpg" alt="" class="w-100 mb-2" />
                <div class="product-tittle">Cat Ajaib</div>
                <div class="product-kategori">tools</div>
                </div></a
            >
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a
                href="/dash-products-details.html"
                class="card card-dash-produk d-block"
                ><div class="card-body">
                <img src="/images/cat.jpg" alt="" class="w-100 mb-2" />
                <div class="product-tittle">Cat Ajaib</div>
                <div class="product-kategori">tools</div>
                </div></a
            >
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection