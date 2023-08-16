@extends('layouts.dashboard')

@section('titel')
Kategori
@endsection

@section('konten')
    <div class="section-content section-dash-home" data-aos="flip-left">
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dash-tittle">Akun Saya</h2>
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
                        <label for="nama">Nama</label>
                        <input
                            type="text"
                            id="nama"
                            class="form-control"
                            name="nama"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            id="email"
                            class="form-control"
                            name="email"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="addressOne">Alamat 1</label>
                        <input
                            type="text"
                            id="addressOne"
                            class="form-control"
                            name="addressOne"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="text">Alamat 2</label>
                        <input
                            type="text"
                            id="addressTwo"
                            class="form-control"
                            name="addressTwo"
                        />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="province">Provinsi</label>
                        <select
                            id="province"
                            class="form-control"
                            name="province"
                        >
                            <option value="Jambi">Jambi</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="city">Kota/Kabupaten</label>
                        <select
                            id="city"
                            class="form-control"
                            name="city"
                        >
                            <option value="TJT">TJT</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                            id="postalCode"
                            class="form-control"
                            name="postalCode"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="country">Negara</label>
                        <input
                            type="text"
                            id="country"
                            class="form-control"
                            name="country"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="pNumber">No. HP</label>
                        <input
                            type="text"
                            id="pNumber"
                            class="form-control"
                            name="pNumber"
                        />
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