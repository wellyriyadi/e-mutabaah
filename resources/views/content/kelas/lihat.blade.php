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
                        <button type="button" class="btn waves-effect waves-light green darken-1 modal-trigger" href="#modalKelas">Tambah Kelas</button>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <th>Nama Kelas</th>
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
<div id="modalKelas" class="modal modal-fixed-footer">
    <form action="{{route('simpan-kelas')}}" method="post">
        <div class="modal-content">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Nama Kelas" id="nama_kelas" type="text" name="nama_kelas" class="validate" required>
                        <label for="nama_kelas" class="active">Nama Kelas</label>
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