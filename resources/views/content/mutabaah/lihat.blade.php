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
                        <button type="button" class="btn waves-effect waves-light green darken-1 modal-trigger" href="#modalMutabaah">Tambah Mutabaah</button>
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
<div id="modalMutabaah" class="modal modal-fixed-footer">
    <form action="" method="post">
        <div class="modal-content">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <select name="santri_id" required>
                            <option value="" disabled selected>Pilih Santri</option>
                            @foreach ($dataSantri as $item)
                                <option value="{{$item->id}}">{{$item->nama_santri}}</option>
                            @endforeach
                        </select>
                        <label>Nama Santri</label>
                    </div>
                </div>  
                <div class="row">
                    <div class="input-field col s12">
                        <select name="guru_id" required>
                            <option value="" disabled selected>Pilih Guru</option>
                            @foreach ($dataGuru as $item)
                                <option value="{{$item->id}}">{{$item->nama_guru}}</option>
                            @endforeach
                        </select>
                        <label>Nama Guru</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col s12">
                        <select name="mapel_id" required>
                            <option value="" disabled selected>Pilih Mapel</option>
                            @foreach ($dataMapel as $item)
                                <option value="{{$item->id}}">{{$item->mapel}} - {{$item->jenis}}</option>
                            @endforeach
                        </select>
                        <label>Nama Mapel</label>
                    </div>
                </div> 
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Nama Surat" id="nama_surat" type="text" name="nama_surat" class="validate" required>
                        <label for="nama_surat" class="active">Nama Surat</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input placeholder="Ayat Awal" id="ayat_awal" type="number" name="ayat_awal" class="validate" required>
                        <label for="ayat_awal" id="label_awal" class="active">Ayat Awal</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="Ayat Akhir" id="ayat_akhir" type="number" name="ayat_akhir" class="validate" required>
                        <label for="ayat_akhir" id="label_akhir" class="active">Ayat Akhir</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="Halaman" id="halaman" type="number" name="halaman" class="validate" required>
                        <label for="halaman" class="active">Halaman</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="catatan" data-length="120" required></textarea>
                        <label for="textarea1">Catatan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="status" required>
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="Lulus">Lulus</option>
                            <option value="Mengulang">Mengulang</option>
                        </select>
                        <label>Status</label>
                    </div>
                </div> 
            
        </div>
        <div class="modal-footer">
            <button  type="submit" class="btn waves-effect waves-light green darken-1">Simpan</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
        </div>
    </form>
</div>
<script>
    $('select[name="mapel_id"]').change(function(){

    })
</script>
@endsection