@extends('template.default')

@section('title','Edit Dokter | ')
    
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">Edit Dokter</h3>
            <hr width="80%">

            <form action="{{ route('DokterU', $data->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama" value="{{ $data->nama }}" required>
                        </div>

                        <div class="form-group">
                            <label>Spesialis</label>
                            <input class="form-control" type="text" name="spesialis" value="{{ $data->spesialis }}" required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input class="form-control" type="text" value="{{ $data->telp }}" name="telp" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" id="datepicker" class="form-control" value="{{ $data->tanggalMulai }}" name="tglMulai">
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input class="form-control" type="file" name="foto" value="{{ $data->foto }}">
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
