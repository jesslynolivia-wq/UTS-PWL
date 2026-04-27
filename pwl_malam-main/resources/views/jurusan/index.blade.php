<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; }
        .container { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary font-weight-bold">Daftar Jurusan</h2>
            <a href="{{ url('jurusan/create') }}" class="btn btn-success px-4">+ Tambah Jurusan</a>
        </div>

        <table class="table table-hover table-bordered shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th width="10%">ID</th>
                    <th>Nama Jurusan</th>
                    <th width="20%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jurusans as $jrs)
                <tr>
                    <td>{{ $jrs->id }}</td>
                    <td>{{ $jrs->nama_jurusan }}</td>
                    <td class="text-center">
                        <a href="{{ url('jurusan/'.$jrs->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ url('jurusan/'.$jrs->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jurusan ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>