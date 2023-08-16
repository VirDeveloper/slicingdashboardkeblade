@extends('layouts.dashboard')

@section('titel')
Transaksi
@endsection

@section('konten')
          <div class="section-content section-dash-home" data-aos="flip-left">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dash-tittle">Transaski</h2>
                <p class="dash-subtittle">
                  Lihat Apa yang Sudah Kamu lakukan hari ini
                </p>
              </div>
              <div class="dash-content">
                <div class="row mt-5">
                  <div class="col-12 mt-4">
                    <ul
                      class="nav nav-pills mb-3"
                      id="pills-tab"
                      role="tablist"
                    >
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="pills-home-tab"
                          data-toggle="pill"
                          href="#pills-home"
                          role="tab"
                          aria-controls="pills-home"
                          aria-selected="true"
                          >Terjual</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="pills-profile-tab"
                          data-toggle="pill"
                          href="#pills-profile"
                          role="tab"
                          aria-controls="pills-profile"
                          aria-selected="false"
                          >Dibeli</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                      >
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
                            </div></div
                        ></a>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                        <a
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
            </div>
          </div>
@endsection

