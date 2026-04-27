<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; } /* Warna background abu muda cantik */
        .container { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary">Daftar Dosen</h2>
            <a href="{{ url('dosen/create') }}" class="btn btn-success">+ Tambah Dosen</a>
        </div>

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>NIDN</th>
                    <th>Nama Lengkap</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dosens as $dsn)
                <tr>
                    <td>{{ $dsn->id }}</td>
                    <td>{{ $dsn->nidn }}</td>
                    <td>{{ $dsn->fullname }}</td>
                    <td class="text-center">
                        <a href="{{ url('dosen/'.$dsn->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ url('dosen/'.$dsn->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>