@extends('layouts.dashboard')

@section('titel')
Tambah Produk Dashboard
@endsection

@section('konten')
    <div class="section-content section-dash-home" data-aos="flip-left">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dash-tittle">Tambah Produk</h2>
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
                                <label for="">Nama Produk</label>
                                <input type="text" id="" class="form-control" />
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Harga</label>
                                <input
                                  type="number"
                                  id=""
                                  class="form-control"
                                />
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Kategori</label>
                                <select
                                  name="category"
                                  id=""
                                  class="form-control"
                                ></select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea name="editor1"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Thumbnails</label>
                                <input type="file" id="" class="form-control" />
                                <p class="text-muted">Tambah</p>
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

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("editor1");
    </script>
@endpush