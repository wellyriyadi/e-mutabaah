@extends('index')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    <div class="row vertical-modern-dashboard">
        <div class="col-xl-12">
            <div class="card animate fadeLeft">
                <div class="card-content">
                    <div class="modal-content">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="semester_id" required>
                                    <option value="" disabled selected>Pilih Tahun Ajaran</option>
                                    @foreach($dataTahunAjaran as $value)
                                    <option value="{{$value->id}}">{{$value->tahun_ajaran}}</option>
                                    @endforeach
                                </select>
                                <label for="semester_id" class="active">Tahun Ajaran</label>
                                <label>Tahun Ajaran</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="kelas_id" required>
                                    <option value="" disabled selected>Pilih Kelas</option>
                                    @foreach($dataKelas as $value)
                                    <option value="{{$value->id}}">{{$value->nama_kelas}}</option>
                                    @endforeach
                                </select>
                                <label for="nama_kelas" class="active">Nama Kelas</label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="surat_id" required>
                                    <option value="" disabled selected>Pilih Surat</option>
                                    @foreach($dataSurat as $value)
                                    <option value="{{$value->id}}">{{$value->nama_santri}}</option>
                                    @endforeach
                                </select>
                                <label for="waktu_belajar" class="active">Nama Surat</label>
                                <label>Nama Surat</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="santri_id" required>
                                    <option value="" disabled selected>Pilih Santri</option>
                                    @foreach($dataSantri as $value)
                                    <option value="{{$value->id}}">{{$value->nama_santri}}</option>
                                    @endforeach
                                </select>
                                <label for="waktu_belajar" class="active">Nama Santri</label>
                                <label>Nama Santri</label>
                            </div>
                        </div>
                    </div>
                    <!-- Isi kontennya disini-->
                    <h5>Nilai</h5>
                    <div class="row">
                        <div class="col m12">
                            <form  action="{{route('simpan-nilai')}}" method="post" id="formNilai">
                                @csrf
                                
                                <button  type="submit" class="btn waves-effect waves-light green darken-1">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection