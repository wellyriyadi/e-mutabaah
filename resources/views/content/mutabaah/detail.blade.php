@extends('index')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    <div class="row vertical-modern-dashboard">
        <div class="col-xl-12">
            <div class="card animate fadeLeft">
                <div class="card-content">
                    <!-- Isi kontennya disini-->
                    <h5>Mutaba'ah</h5>
                    <div class="modal-content">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Nama Guru Kelas" id="nama_guru" type="text" name="nama_guru" class="validate" disabled value="{{$dataGuru->guru_id}}">
                                <label for="nama_guru" class="active">Nama Guru Kelas</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Nama Guru Pendamping" id="" type="text" name="" class="validate" disabled value="">
                                <label for="" class="active">Nama Guru Pendamping</label>
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
                                                <td>
                                                    <a href="#" class="btn-floating waves-effect waves-light red darken-1" onclick="deletedata(this)" data-src="{{route('delete-santri-kelas',[$value->id])}}"><i class="material-icons">delete_forever</i></a>                                     
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