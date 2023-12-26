<!-- resources/views/pdf/export.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kerjasama</title>
    <style>
        /* Add any custom styles for your PDF here */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        /* Add more styles as needed */
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Kerjasama</h1>

        <div class="row">
            <div class="col-6">
                <p><strong>Nama Instansi:</strong> {{ $kerjasama->nama_instansi }}</p>
                <p><strong>Nomor Perusahaan:</strong> {{ $kerjasama->nomor_perusahaan }}</p>
                <p><strong>Contact Person:</strong> {{ $kerjasama->contact_person }}</p>
                <p><strong>Jenis Kegiatan:</strong> {{ $kerjasama->jenis_kegiatan }}</p>
                <p><strong>Manfaat Kerjasama:</strong> {{ $kerjasama->manfaat }}</p>
                <p><strong>Implementasi Kerjasama:</strong> {{ $kerjasama->implementasi }}</p>
                <p><strong>Tanggal Mulai:</strong> {{ $kerjasama->tgl_mulai }}</p>
                <p><strong>Tanggal Berakhir:</strong> {{ $kerjasama->tgl_berakhir }}</p>
            </div>
            <div class="col-6">
                <p><strong>Prodi:</strong>
                    @foreach ($kerjasama->prodi as $prodi)
                        {{ $prodi->nama_prodi }},
                    @endforeach
                </p>
                <p><strong>Kategori:</strong> {{ $kerjasama->kategori->nama_kategori }}</p>
                <p><strong>Nomor Mou:</strong> {{ $kerjasama->nomor_mou }}</p>
                <p><strong>Hard File:</strong> {{ $kerjasama->hard_file == 1 ? 'Ada' : 'Tidak Ada' }}</p>
            </div>
        </div>
    </div>
</body>
</html>
