<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  table, td, th {
    border: 1px solid #000;
    /* text-align: left; */
    font-size: 10px;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    padding: 5px;
  }

  .title {
    font-size: 14px;
    font-weight: bold;
  }

  .item {
    font-size: 12px;
    font-weight: bold;
  }

  .footnote {
    text-align:right;
    font-size: 8px;
    font-style: italic;
  }
  </style>

  <center class="title">DAFTAR PERGERAKAN ASET SEWAAN ICT</center>
  <br>
  <div class="item">
    ID Aset : {{ $list->nama }}<br>
    Jenis Aset : {{ $name }}<br>
    Pemilik : {{ $list->sykt }}<br>
    Sewaan / Aset : {{ $list->title }}
  </div>
  <br>

  <table>
    <tr>
      <th>Bil.</th>
      <th>Nama Peminjam</th>
      <th>Dikeluarkan</th>
      <th>Dipulangkan</th>
      <th>Dikeluarkan Oleh</th>
      <th>Tarikh</th>
      <th>Diterima Oleh</th>
      <th>Tarikh</th>
      <th>Catatan</th>
    </tr>
    @foreach($pergerakan as $gerak)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $gerak->nama }}</td>
      <td>{{ $gerak->tarikh_pinjam }}</td>
      <td>{{ $gerak->tarikh_pulang }}</td>
      <td>{{ $gerak->peg_keluar }}</td>
      <td>{{ $gerak->tarikh_pinjam }}</td>
      <td>{{ $gerak->peg_pulang }}</td>
      <td>{{ $gerak->tarikh_pulang }}</td>
      <td>{{ $gerak->catatan }}</td>
    </tr>
    @endforeach
  </table>

  <br>
  <div class="footnote">
    Maklumat ini dijana pada : {{ date('d/m/Y H:i:s') }}
  </div>
</body>
</html>
