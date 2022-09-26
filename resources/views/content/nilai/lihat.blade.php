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
                        <a class="btn waves-effect waves-light green darken-1 modal-trigger" href="{{route('tambah-nilai')}}">Tambah Nilai</a>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <th>Nama</th>
                                    <th>Guru</th>
                                    <th>Mapel</th>
                                    <th>Nilai</th>
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
<div id="modalNilai" class="modal modal-fixed-footer">
    <form action="{{route('simpan-santri')}}" method="post">
        <div class="modal-content">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <select name="santri_id" required>
                            <option value="" disabled selected>Pilih Santri</option>
                        </select>
                        <label>Nama Santri</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="guru_id" required>
                            <option value="" disabled selected>Pilih Guru</option>
                        </select>
                        <label>Nama Guru</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="mapel_id" required>
                            <option value="" disabled selected>Pilih Mapel</option>
                        </select>
                        <label>Nama Mapel</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Nilai" id="nilai" type="number" name="nilai" class="validate" required>
                        <label for="nilai" class="active">Nilai</label>
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