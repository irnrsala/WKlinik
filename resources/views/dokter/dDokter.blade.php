@extends('template.default')

@section('title','Data Dokter |')
    
@section('content')

<style>
    .fa{
        color:black;
    }
</style>

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
                    @php $no = 1;@endphp
                        @foreach ($dokter as $d)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>
                             <a href="/dokter_edit_{{ $d->id }}"> <i class="fa fa-pencil-alt edit"></i></a> | 
                             <a href="/dokter_delete_{{ $d->id }}"> <i class="fa fa-trash-alt hapus"></i></a>
                        </td>   
                        <td>{{ $d->nama }}</td>                            
                        <td>{{ $d->spesialis }}</td>                            
                        <td>{{ $d->alamat }}</td>                            
                        <td>{{ $d->tanggalMulai }}</td>                            
                        <td>{{ $d->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection