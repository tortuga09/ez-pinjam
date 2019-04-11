<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Sistem Pinjaman Aset Sewaan ICT</title>
  <meta http-equiv="Content-Language" content="English" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="images/jata.png">

  <style>
  body, table {
    font: 13px Arial, Sans-Serif;
    font-family: Arial, Sans-Serif;
  }

  #collapse {
    border-collapse:collapse;
  }
</style>

<style type="text/css" media="print">
    @page
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>

<body onload="window.print(); window.close(); ">

  <div align="center">
    <br><br>
    <h1>BORANG PERMOHONAN<br>PINJAMAN PERALATAN ASET SEWAAN ICT JPNIN</h1>

    <table width="700" border="0" cellspacing="5" cellpadding="5" id="collapse">
      <tr>
        <td align="right">Rujukan Permohonan : <strong>{{ $permohonan->ref }}</strong></td>
      </tr>
    </table>
    <br />
    <table width="700" border="1" cellspacing="5" cellpadding="5" id="collapse">
      <tr>
        <td colspan="2" bgcolor="#B7B7B7"><strong>A. MAKLUMAT PEMINJAM</strong></td>
      </tr>
      <tr>
        <td width="200">Nama Pegawai</td>
        <td>{{ $permohonan->nama }}</td>
      </tr>
      <tr>
        <td>Bahagian / Cawangan / Unit</td>
        <td>{{ $permohonan->bahagian }} / {{ $permohonan->unit }}</td>
      </tr>
      <tr>
        <td>No. Telefon</td>
        <td>{{ $permohonan->notel }}</td>
      </tr>
      <tr>
        <td>Emel</td>
        <td>{{ $permohonan->email }}</td>
      </tr>
    </table>
    <br />
    <table width="700" border="1" cellspacing="5" cellpadding="5" id="collapse">
      <tr>
        <td colspan="2" bgcolor="#B7B7B7"><strong>B. BUTIRAN PINJAMAN</strong></td>
      </tr>
      <tr>
        <td width="200">Tujuan Pinjaman</td>
        <td>{{ $permohonan->tujuan }}</td>
      </tr>
      <tr>
        <td>Tarikh Peminjaman</td>
        <td>{{ $permohonan->tarikh_pinjam }} hingga {{ $permohonan->tarikh_pulang }}</td>
      </tr>
      <tr>
        <td width="200">Masa Pengambilan Aset</td>
        <td>{{ $permohonan->masa }}</td>
      </tr>
      <tr>
        <td>Tempat / Lokasi</td>
        <td>{{ $permohonan->location }}</td>
      </tr>
    </table>
    <br />
    <table width="700" border="1" cellspacing="5" cellpadding="5" id="collapse">
      <tr>
        <td colspan="4" bgcolor="#B7B7B7"><strong>C. JENIS PERALATAN ICT</strong></td>
      </tr>
      <tr>
        <td width ="30" align="center">a.</td>
        <td width="180">Komputer Riba</td>
        <td width="300">
          @if($agihan->nb1 != '') {{ $agihan->nb1 }}, @endif
          @if($agihan->nb2 != '') {{ $agihan->nb2 }}, @endif
          @if($agihan->nb3 != '') {{ $agihan->nb3 }}, @endif
          @if($agihan->nb4 != '') {{ $agihan->nb4 }}, @endif
          @if($agihan->nb5 != '') {{ $agihan->nb5 }}, @endif
          @if($agihan->nb6 != '') {{ $agihan->nb6 }}, @endif
          @if($agihan->nb7 != '') {{ $agihan->nb7 }} @endif
        </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah / Unit : {{ $permohonan->nb }}</td>
      </tr>
      <tr>
        <td align="center">b.</td>
        <td>Projektor LCD</td>
        <td>
          @if($agihan->lcd1 != '') {{ $agihan->lcd1 }}, @endif
          @if($agihan->lcd2 != '') {{ $agihan->lcd2 }}, @endif
          @if($agihan->lcd3 != '') {{ $agihan->lcd3 }}, @endif
          @if($agihan->lcd4 != '') {{ $agihan->lcd4 }}, @endif
          @if($agihan->lcd5 != '') {{ $agihan->lcd5 }} @endif
        </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah / Unit : {{ $permohonan->lcd }}</td>
      </tr>
      <tr>
        <td align="center">c.</td>
        <td>Pencetak</td>
        <td>
          @if($agihan->print1 != '') {{ $agihan->print1 }}, @endif
          @if($agihan->print2 != '') {{ $agihan->print2 }}, @endif
          @if($agihan->print3 != '') {{ $agihan->print3 }}, @endif
          @if($agihan->print4 != '') {{ $agihan->print4 }} @endif
        </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah / Unit : {{ $permohonan->print }}</td>
      </tr>
      <tr>
        <td align="center">d.</td>
        <td>Wireless Presenter</td>
        <td>
          @if($agihan->present1 != '') {{ $agihan->present1 }}, @endif
          @if($agihan->present2 != '') {{ $agihan->present2 }} @endif</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah / Unit : {{ $permohonan->present }}</td>
      </tr>
      <tr>
        <td align="center">f.</td>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah / Unit : </td>
      </tr>
      <tr>
        <td align="center">g.</td>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah / Unit : </td>
      </tr>
    </table>
    <br />
    <table width="700" border="1" cellspacing="5" cellpadding="5" id="collapse">
      <tr>
        <td bgcolor="#B7B7B7"><strong>D. PERAKUAN</strong></td>
      </tr>
      <tr>
        <td align="justify">
          <strong>Saya dengan ini mengaku menerima dan akan bertanggungjawab ke atas peralatan ICT yang telah diserahkan kepada saya seperti di atas. Sekiranya peralatan ICT tersebut hilang saya akan membuat laporan polis dan sekiranya berlaku sebarang kerosakan saya akan melapor kepada pihak CTM. Namun, sekiranya berlaku kecuaian saya akan membuat penggantian semula kepada pihak Jabatan. Jabatan juga boleh mengambil tindakan tatatertib ke atas saya atas sebab-sebab yang dinyatakan di atas.<br><br>
            Pihak CTM berhak mengambil semula peralatan ICT tersebut bagi tujuan penyelenggaraan / pembaikan.</strong>
          </td>
        </tr>
      </table>
      <br>
      <table width="700" border="1" cellspacing="5" cellpadding="5" id="collapse">
        <tr>
          <td colspan="2" bgcolor="#B7B7B7"><strong>E. PENGESAHAN</strong></td>
        </tr>
        <tr>
          <td width="50%">
            <table border="0" cellspacing="5" cellpadding="5">
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Pegawai Bertanggungjawab / Peminjam :</td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr height="50">
                <td width="15">&nbsp;</td>
                <td style="border-bottom-style:dotted">&nbsp;</td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Nama : <strong>{{ $permohonan->nama }}</strong></td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Jawatan : <strong>{{ $permohonan->jawatan }}</strong></td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Tarikh :</td>
                <td width="15">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td width="50%" >
            <table border="0" cellspacing="5" cellpadding="5">
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Pegawai Yang Menyerahkan :</td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr height="50">
                <td width="15">&nbsp;</td>
                <td style="border-bottom-style:dotted">&nbsp;</td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Nama :</td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Jawatan :</td>
                <td width="15">&nbsp;</td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="100%">Tarikh :</td>
                <td width="15">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>
  </html>
