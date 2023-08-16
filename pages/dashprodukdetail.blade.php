@extends('layouts.dashboard')

@section('titel')
Detail Produk Dashboard
@endsection

@section('konten')
    <div class="section-content section-dash-home" data-aos="flip-left">
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dash-tittle">Detail Produk</h2>
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
                    </div>
                    <div class="row">
                    <div class="col">
                        <button class="btn btn-success px-5 btn-block">
                        Update
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    <div class="gallery-container">
                        <img
                        src="/images/boneka.jpg"
                        alt=""
                        class="w-100"
                        />
                        <a href="@" class="hapus-gambar"
                        ><img src="/images/remove.svg" alt=""
                        /></a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="gallery-container">
                        <img src="/images/cat.jpg" alt="" class="w-100" />
                        <a href="@" class="hapus-gambar"
                        ><img src="/images/remove.svg" alt=""
                        /></a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="gallery-container">
                        <a href="@" class="hapus-gambar"
                        ><img src="/images/remove.svg" alt=""
                        /></a>
                        <img
                        src="/images/crsel.jpg"
                        alt=""
                        class="w-100"
                        />
                    </div>
                    </div>
                    <div class="col-12 mt-3">
                    <input
                        type="file"
                        id="file"
                        style="display: none"
                        multiple
                    />
                    <div
                        class="btn btn-secondary btn-block"
                        onclick="fileUpload()"
                    >
                        Tambah Photo
                    </div>
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
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("editor1");
    </script>
    <script>
      function fileUpload() {
        document.getElementById("file").click();
      }
    </script>
    
@endpush