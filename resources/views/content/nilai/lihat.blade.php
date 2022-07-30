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
                        <button type="button" class="btn waves-effect waves-light green darken-1 modal-trigger" href="#modalNilai">Tambah Nilai</button>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <th>NAMA SANTRI</th>
                                    <th>TAHFIZH</th>
                                    <th>NILAI</th>
                                    <th>PREDIKAT</th>
                                    <th>TAHSIN</th>
                                    <th>NILAI</th>
                                    <th>PREDIKAT</th>
                                    <th>ADAB</th>
                                    <th>DOA</th>
                                    <th>HADITS</th>
                                    <th>SIRAH</th>
                                    <th>ACTION</th>
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
                    <div class="input-field col s4">
                        <input placeholder="Tahfizh" id="tahfizh" type="text" name="tahfizh" class="validate" required>
                        <label for="tahfizh" class="active">Tahfizh</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="Nilai" id="nilai_tahfizh" type="number" name="nilai_tahfizh" class="validate" required>
                        <label for="nilai_tahfizh" class="active">Nilai</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="predikat" required>
                            <option value="" disabled selected>Pilih Predikat</option>
                            <option value="Mumtaz">Mumtaz</option>
                            <option value="Jayyid Jiddan">Jayyid Jiddan</option>
                            <option value="Jayyid">Jayyid</option>
                            <option value="Maqbul">Maqbul</option>
                        </select>
                        <label>Predikat</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col s4">
                        <input placeholder="Tahsin" id="tahsin" type="text" name="tahsin" class="validate" required>
                        <label for="tahsin" class="active">Tahsin</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="Nilai" id="nilai_tahsin" type="number" name="nilai_tahsin" class="validate" required>
                        <label for="nilai_tahsin" class="active">Nilai</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="predikat" required>
                            <option value="" disabled selected>Pilih Predikat</option>
                            <option value="Mumtaz">Mumtaz</option>
                            <option value="Jayyid Jiddan">Jayyid Jiddan</option>
                            <option value="Jayyid">Jayyid</option>
                            <option value="Maqbul">Maqbul</option>
                        </select>
                        <label>Predikat</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="adab" required>
                            <option value="" disabled selected>Pilih Grade</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <label>Adab</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="doa" required>
                            <option value="" disabled selected>Pilih Grade</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <label>Do'a</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="hadits" required>
                            <option value="" disabled selected>Pilih Grade</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <label>Hadits</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="sirah" required>
                            <option value="" disabled selected>Pilih Grade</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <label>Sirah</label>
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