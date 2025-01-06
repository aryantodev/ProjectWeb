@extends('/admin/layout')

@section('title', 'Data Rawat Inap')

@section('konten')
<div class="container mt-5">
    <h2 class="text-center mb-4">Data Rawat Inap</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('user.rawatInap.createUser') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Tanggal Check In</th>
                <th>Tanggal Check Out</th>
                <th>Tipe Kamar</th>
                <th>Harga</th>
                <th>Jumlah Tamu</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rawatInap as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->tanggalCheckIn }}</td>
                    <td>{{ $data->tanggalCheckOut }}</td>
                    <td>{{ $data->tipeKamar }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->jumlahTamu }}</td>
                    <td>{{ $data->catatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection