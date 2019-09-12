@extends('template.default')

@section('title','Data Dokter |')
    
@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">Data Dokter</h3>
            <hr width="80%">

            <a class="btn btn-info" href="{{ route('DokterT') }}" role="button"><i class="fas fa-plus"> Dokter</i></a>

            <table class="table table-default">
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>Action</td>
                        <td>Nama</td>
                        <td>Spesialis</td>
                        <td>Alamat</td>
                        <td>Tanggal Mulai Tugas</td>
                        <td>Status</td>
                    </tr>
                    <tr>
                        @foreach ($dokter as $key => $d)
                        <th>{{ $key+1 }}</th>
                        <td>
                        
                        </td>   
                        <td>{{ $d->nama }}</td>                            
                        <td>{{ $d->spesialis }}</td>                            
                        <td>{{ $d->alamat }}</td>                            
                        <td>{{ $d->tanggalMulai }}</td>                            

                        @endforeach
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection