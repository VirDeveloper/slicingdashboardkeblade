@extends('layouts.dashboard')

@section('titel')
Transaksi
@endsection

@section('konten')
<div class="section-content section-dash-home" data-aos="flip-left">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dash-tittle">Detail Transaksi</h2>
                <section
                  class="store-breadcrumbs"
                  data-aos="fade-down"
                  data-aos-delay="150"
                >
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <nav>
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              <a href="/dashboard.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                              Detail Transaksi
                            </li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="dash-content" id="detailTransaksi">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="/images/kursi.jpg"
                              alt=""
                              class="w-100 mb-5"
                            />
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="product-tittle">Nama Pelanggan</div>
                                <div class="product-subtittle">MomoDev</div>
                              </div>
                              <div class="col-md-6">
                                <div class="product-tittle">Nama Produk</div>
                                <div class="product-subtittle">Kursi Empuk</div>
                              </div>
                              <div class="col-md-6">
                                <div class="product-tittle">
                                  Tanggal Transaksi
                                </div>
                                <div class="product-subtittle">
                                  12 Januari, 2020
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="product-tittle">
                                  Status Pengiriman
                                </div>
                                <div class="product-subtittle text-success">
                                  Pending
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="product-tittle">Total Harga</div>
                                <div class="product-subtittle">123123</div>
                              </div>
                              <div class="col-md-6">
                                <div class="product-tittle">No Hp</div>
                                <div class="product-subtittle">0808080808</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 mt-3">
                            <h5>Informasi Pengiriman</h5>
                            <div class="row">
                              <div class="col-12 col-md-8">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="product-tittle">Alamat</div>
                                    <div class="product-subtittle">MomoDev</div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="product-tittle">Alamat</div>
                                    <div class="product-subtittle">
                                      Kursi Empuk
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="product-tittle">Provinsi</div>
                                    <div class="product-subtittle">
                                      12 Januari, 2020
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="product-tittle">Kota</div>
                                    <div class="product-subtittle text-success">
                                      Pending
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="product-tittle">Kode Pos</div>
                                    <div class="product-subtittle">123123</div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="product-tittle">Negara</div>
                                    <div class="product-subtittle">
                                      0808080808
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="product-tittle">Status</div>
                                    <select
                                      name="status"
                                      id="status"
                                      v-model="status"
                                      class="form-control"
                                    >
                                      <option value="UNPAID">Unpaid</option>
                                      <option value="PENDING">Pending</option>
                                      <option value="SHIPPING">Shipping</option>
                                      <option value="SUCCESS">Success</option>
                                    </select>
                                  </div>
                                  <template v-if="status=='SHIPPING'">
                                    <div class="col-md-3">
                                      <div class="product-tittle">
                                        Input Resi
                                      </div>
                                      <input
                                        type="text"
                                        class="form-control"
                                        name="resi"
                                        v-model="resi"
                                      />
                                    </div>
                                    <div class="col-md-3">
                                      <button
                                        class="btn btn-success btn-block mt-5"
                                      >
                                        Update Resi
                                      </button>
                                    </div>
                                  </template>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right mt-3">
                            <button class="btn btn-success px-5">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection


@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var detailTransaksi = new Vue({
        el: "#detailTransaksi",
        data: { status: "Dalam Perjalanan", resi: "123123123" },
      });
    </script>
    @endpush