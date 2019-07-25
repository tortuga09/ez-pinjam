<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="font-family:Verdana; font-size:12px;">
  Salam Sejahtera dan Salam Perpaduan<br><br>
  Tuan / Puan,<br><br>
  <strong>Permohonan Pinjaman Aset Sewaan ICT (#{{ $content->ref }})</strong><br><br>
  Perkara di atas adalah dirujuk.<br><br>
  Butiran pinjaman adalah seperti berikut :<br><br>

  <table width="400" border="1" style="border-collapse:collapse; font-family:Verdana; font-size:12px;" cellpadding="3">
    <tr>
      <td width="150">Nama Pemohon</td>
      <td width="250"><strong>{{ $content->nama }}</strong></td>
    </tr>
    <tr>
      <td>Bahagian</td>
      <td><strong>{{ $content->bahagian }}</strong></td>
    </tr>
    <tr>
      <td>Tarikh Digunakan</td>
      <td><strong>{{ $content->tarikh_pinjam }}</strong></td>
    </tr>
    <tr>
      <td>Masa Pengambilan Aset</td>
      <td><strong>{{ $content->masa }}</strong></td>
    </tr>
    <tr>
      <td>Tujuan Penggunaan</td>
      <td><strong>{{ $content->tujuan }}</strong></td>
    </tr>
    <tr>
      <td>Lokasi</td>
      <td><strong>{{ $content->location }}</strong></td>
    </tr>
    <tr>
      <td>Komputer Riba</td>
      <td><strong>{{ $content->bil_nb }}</strong></td>
    </tr>
    <tr>
      <td>Projektor LCD</td>
      <td><strong>{{ $content->bil_lcd }}</strong></td>
    </tr>
    <tr>
      <td>Pencetak</td>
      <td><strong>{{$content-> bil_print }}</strong></td>
    </tr>
    <tr>
      <td>Wireless Presenter</td>
      <td><strong>{{ $content->bil_present }}</strong></td>
    </tr>
  </table><br>

  Sekian, terima kasih.<br><br>
  {{ $content->nama }}<br>
  {{ $content->bahagian }}<br>
  Jabatan Perpaduan Negara Dan Integrasi Nasional<br>
  {{ $content->no_tel }}<br>
  <br><br><a href='http://app.perpaduan.gov.my/e-pinjam' target='_blank'><strong>Klik Sini</strong></a> untuk Log Masuk Sistem e-Pinjam
</body>
</html>
