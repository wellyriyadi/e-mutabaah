@extends('index')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    <div class="row vertical-modern-dashboard">
        <div class="col-xl-12">
            <div class="card animate fadeLeft">
                <div class="card-content">
                    <!-- Isi kontennya disini-->
                    <h5>Nilai</h5>
                    <div class="modal-content">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Nama Kelas" id="nama_kelas" type="text" name="nama_kelas" class="validate" disabled value="{{$dataKelas->nama_kelas}}">
                                <label for="nama_kelas" class="active">Nama Kelas</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Waktu Belajar" id="waktu_belajar" type="text" name="waktu_belajar" class="validate" disabled value="{{$dataKelas->waktu_belajar}}">
                                <label for="waktu_belajar" class="active">Waktu Belajar</label>
                                <label>Waktu Belajar</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label>Guru Kelas</label>
                                    <ol style="margin-top:5vh;">
                                        @foreach($dataGuru as $d)
                                        <li>{{$d->nama_guru}}</li>
                                        @endforeach
                                    </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card animate fadeLeft">
                        <div class="card-content">
                            <div class="row">
                                <div class="col m12">
                                    <table class="striped">
                                        <thead>
                                            <th>Nama Santri</th>
                                            <th>Ttl</th>
                                            <th>Tingkat Pendidikan</th>
                                            <th>Nama Ayah</th>
                                            <th>Waktu Belajar</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($dataSantri as $value)
                                            <tr>
                                                <td>{{$value->nama_santri}}</td>
                                                <td>{{$value->tempat_lahir}} {{$value->tanggal_lahir}}</td>
                                                <td>{{$value->tingkat_pendidikan}}</td>
                                                <td>{{$value->nama_ayah}}</td>
                                                <td>{{$value->waktu_belajar}}</td>
                                                <td><span class="badge badge pill {{($value->data_nilai->count()>0?'green':'')}}" style="color:black !important;">{{($value->data_nilai->count()>0?'Sudah Dinilai':'Belum Dinilai')}}</span> </td>
                                                <td>  
                                                    <a href="{{route('nilai-nilai',[$dataKelas->id,$value->id])}}" class="btn-floating waves-effect waves-light purple lightrn-1"  data-src=""><i class="material-icons">open_in_new</i></a>                               
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection