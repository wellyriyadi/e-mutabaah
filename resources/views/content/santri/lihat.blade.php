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
<div id="modalMutabaah" class="modal modal-fixed-footer">
    <form action="" method="post">
        <div class="modal-content">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Nama Santri" id="nama_santri" type="text" name="nama_santri" class="validate" required>
                        <label for="nama_santri" class="active">Nama Santri</label>
                    </div>
                </div>  
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Alamat" id="Alamat" type="text" name="Alamat" class="validate" required>
                        <label for="Alamat" class="active">Alamat</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Tempat Lahir" id="tempat_lahir" type="text" name="tempat_lahir" class="validate" required>
                        <label for="tempat_lahir" class="active">Tempat Lahir</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Tanggal Lahir" id="tanggal_lahir" type="date" name="tanggal_lahir" class="validate" required>
                        <label for="tanggal_lahir" class="active">Tanggal Lahir</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col s12">
                        <select name="tingkat_pendidikat" required>
                            <option value="" disabled selected>Pilih Pendidikan</option>
                            <option value="SD SEDERAJAT">SD SEDERAJAT</option>
                            <option value="SMP SEDERAJAT">SMP SEDERAJAT</option>
                            <option value="SMA SEDERAJAT">SMA SEDERAJAT</option>
                        </select>
                        <label>Status</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nama Ayah" id="nama_ayah" type="text" name="nama_ayah" class="validate" required>
                        <label for="nama_ayah" class="active">Nama Ayah</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Nama Ibu" id="nama_ibu" type="text" name="nama_ibu" class="validate" required>
                        <label for="nama_ibu" class="active">Nama Ibu</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Nomor Telepon" id="nomor_telepon" type="number" name="nomor_telepon" class="validate" required>
                        <label for="nomor_telepon" class="active">Nomor Telepon</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="waktu_belajar" required>
                            <option value="" disabled selected>Pilih Waktu Belajar</option>
                            <option value="Pagi">Pagi Pukul 07.30 - 10.30 WIB</option>
                            <option value="Siang">Siang Pukul 14.00 - 17.00 WIB</option>
                        </select>
                        <label>Waktu Belajar</label>
                    </div>
                </div> 
        </div>
        <div class="modal-footer">
            <button  type="submit" class="btn waves-effect waves-light green darken-1">Simpan</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
        </div>
    </form>
</div>
@endsection