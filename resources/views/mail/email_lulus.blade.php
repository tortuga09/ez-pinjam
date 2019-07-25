<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="font-family:Verdana; font-size:12px;">
  Salam Sejahtera dan Salam Perpaduan,
  <br><br>
  Rujukan Permohonan : <strong>{{ $content->ref }}</strong>
  <br><br>
  Permohonan anda bertarikh {{ $content->apply_date }} telah <strong>DILULUSKAN</strong>.<br>
  <br>
  <table width='400' border='1' style='border-collapse:collapse; font-family:Verdana; font-size:12px;'>
    <tr>
      <td width='100'><strong>Item</strong></td>
      <td width='60'><strong>Dipohon</strong></td>
      <td width='60'><strong>Lulus</strong></td>
      <td width='180'><strong>Catatan</strong></td>
    </tr>
    <tr>
      <td>Komputer Riba</td>
      <td>{{ $content->bil_nb }}</td>
      <td>{{ $lulus->bil_nb }}</td>
      <td>{{ $lulus->note_nb }}</td>
    </tr>
    <tr>
      <td>Projektor LCD</td>
      <td>{{ $content->bil_lcd }}</td>
      <td>{{ $lulus->bil_lcd }}</td>
      <td>{{ $lulus->note_lcd }}</td>
    </tr>
    <tr>
      <td>Pencetak</td>
      <td>{{ $content->bil_print }}</td>
      <td>{{ $lulus->bil_print }}</td>
      <td>{{ $lulus->note_print }}</td>
    </tr>
    <tr>
      <td>Wireless Presenter</td>
      <td>{{ $content->bil_present }}</td>
      <td>{{ $lulus->bil_present }}</td>
      <td>{{ $lulus->note_present }}</td>
    </tr>
  </table><br>
  Sila hadir ke Cawangan Teknologi Maklumat, Aras 8 untuk mengambil peralatan seperti ketetapan.<br><br>
  Sebarang masalah, sila hubungi : 03-8883 7013 / 7194 atau emel kepada : helpdeskict@perpaduan.gov.my
  <br><br><br>
  Pentadbir<br>Sistem Pinjaman Aset Sewaan ICT<br>Cawangan Teknologi Maklumat, PERPADUAN
  <br><br><em>* Ini adalah emel pemberitahuan dan dijana secara automatik. Tidak perlu dibalas.</em>
</body>
</html>
