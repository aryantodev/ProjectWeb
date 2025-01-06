@extends('/admin/layout')

@section('title', 'Edit Data Rawat Inap')

@section('konten')
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Data Rawat Inap</h2>
    <form action="{{ route('rawatInap.update', $rawatInap->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $rawatInap->nama }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type=" text" class="form-control" id="email" name="email" value="{{ $rawatInap->email }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $rawatInap->telepon }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalCheckIn">Tanggal Check In</label>
            <input type="date" class="form-control" id="tanggalCheckIn" name="tanggalCheckIn" value="{{ $rawatInap->tanggalCheckIn }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalCheckOut">Tanggal Check Out</label>
            <input type="date" class="form-control" id="tanggalCheckOut" name="tanggalCheckOut" value="{{ $rawatInap->tanggalCheckOut }}" required>
        </div>
        <div class="form-group">
            <label for="tipeKamar">Tipe Kamar</label>
            <select class="form-control" id="tipeKamar" name="tipeKamar" value="{{ $rawatInap->tipeKamar}}" required>
                <option value="" selected disabled>Pilih tipe kamar</option>
                <option value="VIP1">VIP1</option>
                <option value="VIP2">VIP2</option>
                <option value="KELAS1">KELAS1</option>
                <option value="KELAS2">KELAS2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $rawatInap->harga}}"  readonly>
        </div>
        <div class="form-group">
            <label for="jumlahTamu">Jumlah Tamu</label>
            <input type="number" class="form-control" id="jumlahTamu" name="jumlahTamu" value="{{ $rawatInap->jumlahTamu }}" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea class="form-control" id="catatan" name="catatan">{{ $rawatInap->catatan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>

<script>
    document.getElementById('tipeKamar').addEventListener('change', function() {
        const tipeKamar = this.value;
        const hargaField = document.getElementById('harga');
    
        // Tentukan harga berdasarkan tipe kamar
        let harga = 0;
        switch (tipeKamar) {
            case 'VIP1':
                harga = 1575000;
                break;
            case 'VIP2':
                harga = 1200000;
                break;
            case 'KELAS1':
                harga = 900000;
                break;
            case 'KELAS2':
                harga = 500000;
                break;
            default:
                harga = 0;
        }
    
        // Format harga ke dalam format mata uang (contoh: 1,575,000) dan ubah ke string
        hargaField.value = harga.toLocaleString('id-ID').toString();
    });
    </script>
@endsection