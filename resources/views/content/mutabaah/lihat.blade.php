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
                        <button type="button" class="btn waves-effect waves-light green darken-1">Tambah Mutabaah</button>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <th>Nama Santri</th>
                                    <th>Nama Guru</th>
                                    <th>Nama Mapel</th>
                                    <th>Nama Surat</th>
                                    <th>Ayat</th>
                                    <th>Catatan</th>
                                    <th>Status</th>
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