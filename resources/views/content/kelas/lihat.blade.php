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
                                <tbody>
                                    @foreach($dataKelas as $value)
                                    <tr>
                                        <td>{{$value->nama_kelas}}</td>
                                        <td>{{$value->waktu_belajar}}</td>
                                        <td>
                                            <a href="#" onclick="edit(this)" data-src="{{route('edit-kelas',[$value->id])}}"><i class="material-icons">create</i></a>
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
                            <option value="Pagi Pukul 07.30 - 10.30 WIB">Pagi Pukul 07.30 - 10.30 WIB</option>
                            <option value="Siang Pukul 14.00 - 17.00 WIB">Siang Pukul 14.00 - 17.00 WIB</option>
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
<script>
    function edit(e)
    {
        $.get($(e).data('src'),function(d){
            console.log(d)
            $('input[name="nama_kelas"]').val(d.nama_kelas)
            $('select[name="waktu_belajar"]').val(d.waktu_belajar)
            $('#modalKelas').modal('open');
        })
    }
</script>
@endsection