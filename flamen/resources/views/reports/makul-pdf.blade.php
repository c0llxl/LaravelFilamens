<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Mata Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .header {
            margin-bottom: 30px;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-style: italic;
        }
        .summary {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Laporan Data Mata Kuliah</h1>
        <p>Tanggal: {{ now()->format('d/m/Y') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Makul</th>
                <th>Nama Makul</th>
                <th>SKS</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($makuls as $index => $makul)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $makul->kode_makul }}</td>
                <td>{{ $makul->nama_makul }}</td>
                <td>{{ $makul->sks }}</td>
                <td>{{ $makul->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="summary">
        <h3>Ringkasan:</h3>
        <p>Total Mata Kuliah: {{ $makuls->count() }}</p>
        <p>Total SKS: {{ $makuls->sum('sks') }}</p>
    </div>

    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d/m/Y H:i:s') }}</p>
    </div>
</body>
</html>
