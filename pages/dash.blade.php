@extends('layouts.dashboard')

@section('titel')
Dashboard
@endsection

@section('konten')
    <div class="section-content section-dash-home" data-aos="flip-left">
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dash-tittle">Dashboard</h2>
        <p class="dash-subtittle">
            Lihat Apa yang Sudah Kamu lakukan hari ini
        </p>
        </div>
        <div class="dash-content">
        <div class="row">
            <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dash-card-tittle">Customer</div>
                <div class="dash-card-subtittle">14233</div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dash-card-tittle">Revenue</div>
                <div class="dash-card-subtittle">14233</div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dash-card-tittle">Transaksi</div>
                <div class="dash-card-subtittle">14233</div>
                </div>
            </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 mt-4">
            <h5 class="mb-3">Transaksi Terbaru</h5>
            <a
                href="/dash-transaksi-detail.html"
                class="card card-list d-block"
                ><div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img src="/images/tkopi.jpg" alt="" />
                    </div>
                    <div class="col-md-3">MomoDev</div>
                    <div class="col-md-3">Nama</div>
                    <div class="col-md-3">1 Tanggal 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/panahkanan.svg" alt="" />
                    </div>
                </div></div></a
            ><a
                href="/dash-transaksi-detail.html"
                class="card card-list d-block"
                ><div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img src="/images/tkursi.jpg" alt="" />
                    </div>
                    <div class="col-md-3">MomoDev</div>
                    <div class="col-md-3">Nama</div>
                    <div class="col-md-3">1 Tanggal 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/panahkanan.svg" alt="" />
                    </div>
                </div></div></a
            ><a
                href="/dash-transaksi-detail.html"
                class="card card-list d-block"
                ><div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img src="/images/tspt.jpg" alt="" />
                    </div>
                    <div class="col-md-3">MomoDev</div>
                    <div class="col-md-3">Nama</div>
                    <div class="col-md-3">1 Tanggal 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/panahkanan.svg" alt="" />
                    </div>
                </div></div
            ></a>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection