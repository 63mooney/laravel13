<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f8fafc;
            font-family: Arial, sans-serif;
        }

        .table-container {
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        }

        .table thead th {
            background-color: #f1f5f9;
            color: #475569;
            font-size: 13px;
            padding: 16px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px;
            vertical-align: middle;
            font-size: 14px;
        }

        .portfolio-img {
            width: 48px;
            height: 48px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn {
            font-size: 12px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-1">Data Portfolio</h4>
                <p class="text-secondary mb-0">
                    Daftar portfolio yang telah ditambahkan.
                </p>
            </div>

            <button class="btn btn-primary px-3 py-2">
                <a href="{{ route('portfolio.create') }}" class="text-white text-decoration-none">
                    + Tambah Portfolio
                </a>
            </button>
        </div>

        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($dataPortfolio as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->birthday }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <a href="{{ route('portfolio.edit', $item->pelanggan_id) }}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('portfolio.destroy', $item->pelanggan_id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                    <a href="{{ route('portfolio.show', $item->pelanggan_id) }}" class="btn btn-sm btn-success">
                                        Lihat
                                    </a>
                                    </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
