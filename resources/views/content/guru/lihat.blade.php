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
                        <button type="button" class="btn waves-effect waves-light green darken-1">Tambah Guru</button>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Tgl Bergabung</th>
                                    <th>Tgl Berhenti</th>
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