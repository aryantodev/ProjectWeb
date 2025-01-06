@extends('/admin/layout')
@section('konten')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form UGD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Form Unit Gawat Darurat (UGD)</h2>
        <form>
            <div class="form-group">
                <label for="nama">Nama Pasien</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <label for="tanggalMasuk">Tanggal Masuk</label>
                <input type="datetime-local" class="form-control" id="tanggalMasuk" name="tanggalMasuk" required>
            </div>
            <div class="form-group">
                <label for="gejala">Gejala</label>
                <textarea class="form-control" id="gejala" name="gejala" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="riwayatPenyakit">Riwayat Penyakit</label>
                <textarea class="form-control" id="riwayatPenyakit" name="riwayatPenyakit" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="tindakan">Tindakan</label>
                <textarea class="form-control" id="tindakan" name="tindakan" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="dokterPenanggungJawab">Dokter Penanggung Jawab</label>
                <input type="text" class="form-control" id="dokterPenanggungJawab" name="dokterPenanggungJawab" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="kritis">Kritis</option>
                    <option value="stabil">Stabil</option>
                    <option value="ringan">Ringan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection