@extends('index')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    <div class="row vertical-modern-dashboard">
        <div class="col-xl-12">
            <div class="card animate fadeLeft">
                <div class="card-content">
                    <!-- Isi kontennya disini-->
                    <div class="row">
                        <button type="button" class="btn waves-effect waves-light green darken-1">Tambah Santri</button>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <th>Nama Santri</th>
                                    <th>Alamat</th>
                                    <th>Ttl</th>
                                    <th>Tingkat Pendidikan</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>No Telp</th>
                                    <th>Waktu Belajar</th>
                                    <th>Action</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection