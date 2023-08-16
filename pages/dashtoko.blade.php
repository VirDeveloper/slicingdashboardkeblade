@extends('layouts.dashboard')

@section('titel')
Kategori
@endsection

@section('konten')

          <div class="section-content section-dash-home" data-aos="flip-left">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dash-tittle">Atur Toko</h2>
                <p class="dash-subtittle">
                  Lihat Apa yang Sudah Kamu lakukan hari ini
                </p>
              </div>
              <div class="dash-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Nama Toko</label>
                                <input type="text" id="" class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="">Kategori</label>
                                <select
                                  name="category"
                                  id=""
                                  class="form-control"
                                ></select>
                              </div>
                              <div class="form-group">
                                <label for="">Toko</label>
                                <p class="text-muted">
                                  Apakah anda juga ingin membuka toko?
                                </p>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="store_open"
                                    id="openStore"
                                    value="true"
                                  />
                                  <label
                                    for="openStore"
                                    class="custom-control-label"
                                    >Buka</label
                                  >
                                </div>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="store_open"
                                    id="openStoreNo"
                                    value="false"
                                  />
                                  <label
                                    for="openStoreNo"
                                    class="custom-control-label"
                                    >Tutup</label
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button class="btn btn-success px-5">
                                Simpan
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection