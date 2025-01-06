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
    <a href="{{ route('admin.rawatInap.createAdmin') }}" class="btn btn-primary mb-3">Tambah Data</a>
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
                    <td>
                        <a href="{{ route('rawatInap.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('rawatInap.destroy', $data->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection