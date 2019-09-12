@extends('template.default')

@section('title', 'Tambah Dokter | ')
    
@section('content')

<style>
    .kembali{
        margin-left: 80%;
    }
</style>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">Tambah Dokter</h3>
            <hr width="80%">

                <form action="/dokter_store" method="post"> 
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label>Spesialis</label>
                                <input class="form-control" type="text" name="spesialis" required>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="alamat" required>
                            </div>

                        </div>
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input class="form-control" type="text" name="telp" required>
                            </div>

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" id="datepicker" class="form-control" name="tglMulai">
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input class="form-control" type="file" name="foto">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success simpan"><i class="fas fa-check"> Simpan</i></button>
                        <a class="btn btn-danger kembali" href="" role="button"><i class="fas fa-chevron-left"> Kembali</i></a>
                        
                    </div>
                </form>

        </div>
    </div>
@endsection