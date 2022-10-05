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
                        <a class="btn waves-effect waves-light green darken-1 modal-trigger" href="{{route('tambah-summary-nilai')}}">Tambah Nilai</a>
                        <a class="btn waves-effect waves-light darken-1 modal-trigger" href="{{route('kalkulasi-summary-nilai')}}">Kalkulasi Nilai</a>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal Penilaian</th>
                                        <th>Nama Santri</th>
                                        <th>Kelas</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($dataNilai as $item)
                                    <tr>
                                        <td>{{date('d M Y',strtotime($item->tanggal_pengambilan_nilai))}}</td>
                                        <td>{{$item->data_santri->nama_santri}}</td>
                                        <td>{{$item->data_kelas->nama_kelas}}</td>
                                        <td>{{$item->data_semester->tahun_ajaran}}</td>
                                        <th><span
                                            class="badge badge pill {{($item->nilai_iman==null || $item->nilai_doa==null || $item->nilai_hadist==null || $item->nilai_sirah == null?'':'green')}}"
                                            style="color:black !important;">{{($item->nilai_iman==null || $item->nilai_doa==null || $item->nilai_hadist==null || $item->nilai_sirah == null?'Nilai Belum Lengkap':'Nilai Lengkap')}}</span>
                                            
                                            </th>
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
@endsection