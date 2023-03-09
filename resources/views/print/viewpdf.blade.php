<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>TES</title>
  <link href="./assets/invoice_rapot.css" rel="stylesheet">
</head>

<body>
  <!-- Page 1 Sampul -->
  <div class="invoice-box">
    <div class="header">
      <table>
        <tr>
          <td style="width: 19%;">Nama Sekolah</td>
          <td style="width: 52%;">: SMA IZADA</td>
          <td style="width: 16%;">Kelas</td>
          <td style="width: 13%;">: 10A / I</td>
        </tr>
        <tr>

          <td style="width: 19%;">Alamat</td>
          <td style="width: 52%;">: :Jl. Jombang Raya No 25 A Tangerang Selatan</td>
          <td style="width: 16%;">Semester</td>
          <td style="width: 13%;">:
            {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
            1 (Ganjil)
            @else
            2 (Genap)
            @endif --}}
            GANJIL
          </td>

          {{-- <td style="width: 16%;">Fase</td>
          <td style="width: 13%;">: 3 </td> --}}
        </tr>
        <tr>
          <td style="width: 19%;">Nama Peserta Didik</td>
          <td style="width: 52%;">: NAMA PESERTA </td>
          <td style="width: 16%;">Fase</td>
          <td style="width: 13%;">: 3 </td>
        </tr>
        <tr>
          <td style="width: 19%;">Nomor Induk/NISN</td>
          <td style="width: 52%;">: 1721892819 / 12912182 </td>
          <td style="width: 16%;">Tahun Pelajaran</td>
          <td style="width: 13%;">: 2019/2021</td>
        </tr>
      </table>
    </div>

    <div class="content">
      <h3>
        <strong>
        I. LAPORAN PERKEMBANGAN ASPEK PENGETAHUAN DAN KETRAMPILAN
          {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
          GANJIL
          @else
          GENAP
          @endif
          <br>
          TAHUN PELAJARAN {{$anggota_kelas->kelas->tapel->tahun_pelajaran}} --}}
        </strong>
      </h3>

      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td rowspan="2" style="width: 20%; text-align: center">NO</td>
          <td rowspan="2" style="width: 50%; text-align: center">Mata Pelajaran</td>
           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td colspan="2" style="width: 20%; text-align: center">Nilai AKHIR</td>
        </tr>

        <tr class="heading">
            <td style="width: 20%; text-align: center">Angka</td>
            <td style="width: 20%; text-align: center">Predikat</td>
        </tr>

        <tr class="nilai">
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">IPA</td>
            <td style="text-align: center;">80</td>
            <td style="text-align: center;">A</td>

        </tr>


      </table>
      <br>
      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td style="width: 20%;">NO</td>
          <td style="width: 20%;">Ekstra Kurikuler</td>
          <td style="width: 20%;">PREDIKAT</td>
           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td style="width: 50%;">CATATAN</td>
        </tr>

        <tr class="nilai">

            <td style="text-align: center;">1</td>
            <td style="text-align: center;">Pramuka</td>
            <td style="text-align: center;">B</td>
            <td>Peserta Didik telah mampu menyelesaikan SKU Bantara dengan baik materi peta kompas menaksir PPGD, hasta karya, memasak dan baris berbaris.
            </td>

        </tr>







      </table>
      <br>
      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td style="width: 20%;">NO</td>
          <td style="width: 20%;">Ekstra Kurikuler</td>
          <td style="width: 20%;">PREDIKAT</td>
           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td style="width: 50%;">CATATAN</td>
        </tr>

        <tr class="nilai">

            <td style="text-align: center;">1</td>
            <td style="text-align: center;">Pramuka</td>
            <td style="text-align: center;">B</td>
            <td>Peserta Didik telah mampu menyelesaikan SKU Bantara dengan baik materi peta kompas menaksir PPGD, hasta karya, memasak dan baris berbaris.
            </td>

        </tr>







      </table>
      <br>
      <table cellspacing="0" style="padding-top: 5px; width:50%">
        <tr class="heading">
          <td  style="width: 20%;">NO</td>

          <td colspan="3" style="width: 50%;">Ketidakhadiran</td>
        </tr>

        <tr class="nilai">
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">Sakit</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: center;">-</td>


        </tr>

        <tr class="nilai">
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">Ijin</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: center;">2 Hari</td>


        </tr>

        <tr class="nilai">
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">Tanpa Keterangan</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: center;">2 Hari</td>


        </tr>







      </table>
    </div>

    <div class="content" style="width:100%; height:auto; margin:auto;">
        <div style="padding-left:5%; float:left; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;">
            Orang Tua<br>
             <br><br><br><br>
             <hr>
            <b>Nama Orang tua</b><br>

          </div>

        <div style="padding-right:5%; float:right;  font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;">
          JAKARTA, 10 JANUARI 2021<br>
          Wali Kelas, <br><br><br><br>
          <b><u>NAMA GURU, SPD</u></b><br>
          NIP. 1721107
        </div>
    </div>
    {{-- <div class="footer">
      <b style="padding-left:5%; float:left; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;"><i>NAMA KELAS | NAMA MURID | NIM</i></b>
      <b style="padding-right:2px; float: right;"><i>Halaman 1</i></b>
    </div> --}}
  </div>
  <div class="page-break"></div>

  <!-- Page 2 Identitas Sekolah -->
  <div class="invoice-box">
    <div class="header">
      <table>
        <tr>
          <td style="width: 19%;">Nama Sekolah</td>
          <td style="width: 52%;">: SMA IZADA</td>
          <td style="width: 16%;">Kelas</td>
          <td style="width: 13%;">: 10A / I</td>
        </tr>
        <tr>

          <td style="width: 19%;">Alamat</td>
          <td style="width: 52%;">: :Jl. Jombang Raya No 25 A Tangerang Selatan</td>
          <td style="width: 16%;">Semester</td>
          <td style="width: 13%;">:
            {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
            1 (Ganjil)
            @else
            2 (Genap)
            @endif --}}
            GANJIL
          </td>

          {{-- <td style="width: 16%;">Fase</td>
          <td style="width: 13%;">: 3 </td> --}}
        </tr>
        <tr>
          <td style="width: 19%;">Nama Peserta Didik</td>
          <td style="width: 52%;">: NAMA PESERTA </td>
          <td style="width: 16%;">Fase</td>
          <td style="width: 13%;">: 3 </td>
        </tr>
        <tr>
          <td style="width: 19%;">Nomor Induk/NISN</td>
          <td style="width: 52%;">: 1721892819 / 12912182 </td>
          <td style="width: 16%;">Tahun Pelajaran</td>
          <td style="width: 13%;">: 2019/2021</td>
        </tr>
      </table>
    </div>

    <div class="content">
      <h3>
        <strong>
            II. LAPORAN PERKEMBANGAN ASPEK SIKAP
          {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
          GANJIL
          @else
          GENAP
          @endif
          <br>
          TAHUN PELAJARAN {{$anggota_kelas->kelas->tapel->tahun_pelajaran}} --}}
        </strong>
      </h3>

      <h3 style="text-align:left">
        <strong>
            A. SIKAP SPIRITUAL
          {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
          GANJIL
          @else
          GENAP
          @endif
          <br>
          TAHUN PELAJARAN {{$anggota_kelas->kelas->tapel->tahun_pelajaran}} --}}
        </strong>
      </h3>
      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td rowspan="2" style="width: 20%; text-align: center">NO</td>
          <td rowspan="2" style="width: 50%; text-align: center">ASPEK SIKAP</td>

           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td rowspan="2" style="width: 20%; text-align: center">INDIKATOR SIKAP</td>
          <td colspan="3" style="width: 20%; text-align: center">PREDIKAT</td>

        </tr>

        <tr class="heading">
            <td style="width: 20%; text-align: center">SB</td>
            <td style="width: 20%; text-align: center">BSH</td>
            <td style="width: 20%; text-align: center">MB</td>
        </tr>

        <tr class="nilai">
            <td style="text-align: center;">1</td>
            <td rowspan="2" style="text-align: center;">Ketaatan Beribadah</td>
            <td style="text-align: center;">Berlatih sholat 5 waktu</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>

        </tr>

        <tr class="nilai">
            <td style="text-align: center;">2</td>
            {{-- <td rowspan="2" style="text-align: center;">IPA</td> --}}
            <td style="text-align: center;">Berlatih sholat 5 waktu</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>

        </tr>

        <tr class="nilai">
            <td style="text-align: center;">3</td>
            <td rowspan="2" style="text-align: center;">Ketaatan Beribadah</td>
            <td style="text-align: center;">Berlatih sholat 5 waktu</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>

        </tr>

        <tr class="nilai">
            <td style="text-align: center;">4</td>
            {{-- <td rowspan="2" style="text-align: center;">IPA</td> --}}
            <td style="text-align: center;">Berlatih sholat 5 waktu</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>

        </tr>


      </table>
      <br>
      <h3 style="text-align:left">
        <strong>
            B. SIKAP 4 ADAB IZADA
          {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
          GANJIL
          @else
          GENAP
          @endif
          <br>
          TAHUN PELAJARAN {{$anggota_kelas->kelas->tapel->tahun_pelajaran}} --}}
        </strong>
      </h3>
      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td rowspan="2" style="width: 20%; text-align: center">NO</td>
          <td rowspan="2" style="width: 20%; text-align: center">ASPEK SIKAP</td>
           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td rowspan="2" style="width: 20%; text-align: center">INDIKATOR SIKAP</td>
          <td colspan="3" style="width: 20%; text-align: center">PREDIKAT</td>
        </tr>

        <tr class="heading">
            <td style="width: 20%; text-align: center">SB</td>
            <td style="width: 20%; text-align: center">BSH</td>
            <td style="width: 20%; text-align: center">MB</td>
        </tr>

        <tr class="nilai">
            <td rowspan="6" style="text-align: center;">1</td>
            <td rowspan="6" style="text-align: center;">Shidiq</td>

            <td style="text-align: center;">Berbicara sesuai fakta/kondisi/keadaan sebenarnya</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

        <tr class="nilai">

            <td style="text-align: center;">Berbicara sesuai fakta/kondisi/keadaan sebenarnya</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

         <tr class="nilai">

            <td style="text-align: center;">Berbicara sesuai fakta/kondisi/keadaan sebenarnya</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

         <tr class="nilai">

            <td style="text-align: center;">Berbicara sesuai fakta/kondisi/keadaan sebenarnya</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

        <tr class="nilai">

            <td style="text-align: center;">Berbicara sesuai fakta/kondisi/keadaan sebenarnya</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

        <tr class="nilai">

            <td style="text-align: center;">Berbicara sesuai fakta/kondisi/keadaan sebenarnya</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>



      </table>
      <br><br><br>
      <h3 style="text-align:left">
        <strong>
            C. SIKAP 7 KEBIASAAAN EFEKTIF
          {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
          GANJIL
          @else
          GENAP
          @endif
          <br>
          TAHUN PELAJARAN {{$anggota_kelas->kelas->tapel->tahun_pelajaran}} --}}
        </strong>
      </h3>
      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td rowspan="2" style="width: 20%; text-align: center">NO</td>
          <td rowspan="2" style="width: 20%; text-align: center">ASPEK SIKAP</td>
           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td rowspan="2" style="width: 20%; text-align: center">INDIKATOR SIKAP</td>
          <td colspan="3" style="width: 20%; text-align: center">PREDIKAT</td>
        </tr>

        <tr class="heading">
            <td style="width: 20%; text-align: center">SB</td>
            <td style="width: 20%; text-align: center">BSH</td>
            <td style="width: 20%; text-align: center">MB</td>
        </tr>

        <tr class="nilai">
            <td rowspan="5" style="text-align: center;">1</td>
            <td rowspan="5" style="text-align: center;">Be Proaktif</td>

            <td style="text-align: center;">Aspek Pemahaman</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

        <tr class="nilai">

            <td style="text-align: center;">Aspek Penerapan</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

         <tr class="nilai">

            <td style="text-align: center;">Aspek Sikap Kemandirian</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

         <tr class="nilai">

            <td style="text-align: center;">Aspek Kedisiplinan</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>

        <tr class="nilai">

            <td style="text-align: center;">Aspek Sikap Tanggung Jawab</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>


        </tr>




      </table>


    </div>

    {{-- <div class="content" style="width:100%; height:auto; margin:auto;">
        <div style="padding-left:5%; float:left; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;">
            Orang Tua<br>
             <br><br><br><br>
             <hr>
            <b>Nama Orang tua</b><br>

          </div>

        <div style="padding-right:5%; float:right;  font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;">
          JAKARTA, 10 JANUARI 2021<br>
          Wali Kelas, <br><br><br><br>
          <b><u>NAMA GURU, SPD</u></b><br>
          NIP. 1721107
        </div>
    </div> --}}
    {{-- <div class="footer">
      <b style="padding-left:5%; float:left; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;"><i>NAMA KELAS | NAMA MURID | NIM</i></b>
      <b style="padding-right:2px; float: right;"><i>Halaman 1</i></b>
    </div> --}}
  </div>
  <div class="page-break"></div>

  <!-- Page 3 Identitas Peserta Didik -->
  <div class="invoice-box">
    <div class="header">
      <table>
        <tr>
          <td style="width: 19%;">Nama Sekolah</td>
          <td style="width: 52%;">: SMA IZADA</td>
          <td style="width: 16%;">Kelas</td>
          <td style="width: 13%;">: 10A / I</td>
        </tr>
        <tr>

          <td style="width: 19%;">Alamat</td>
          <td style="width: 52%;">: :Jl. Jombang Raya No 25 A Tangerang Selatan</td>
          <td style="width: 16%;">Semester</td>
          <td style="width: 13%;">:
            {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
            1 (Ganjil)
            @else
            2 (Genap)
            @endif --}}
            GANJIL
          </td>

          {{-- <td style="width: 16%;">Fase</td>
          <td style="width: 13%;">: 3 </td> --}}
        </tr>
        <tr>
          <td style="width: 19%;">Nama Peserta Didik</td>
          <td style="width: 52%;">: NAMA PESERTA </td>
          <td style="width: 16%;">Fase</td>
          <td style="width: 13%;">: 3 </td>
        </tr>
        <tr>
          <td style="width: 19%;">Nomor Induk/NISN</td>
          <td style="width: 52%;">: 1721892819 / 12912182 </td>
          <td style="width: 16%;">Tahun Pelajaran</td>
          <td style="width: 13%;">: 2019/2021</td>
        </tr>
      </table>
    </div>

    <div class="content">
      <h3>
        <strong>
        III. DESKRIPSI PERKEMBANGAN KOMPETENSI
          {{-- @if($anggota_kelas->kelas->tapel->semester == 1)
          GANJIL
          @else
          GENAP
          @endif
          <br>
          TAHUN PELAJARAN {{$anggota_kelas->kelas->tapel->tahun_pelajaran}} --}}
        </strong>
      </h3>

      <table cellspacing="0" style="padding-top: 5px;">
        <tr class="heading">
          <td rowspan="2" style="width: 20%; text-align: center">NO</td>
          <td rowspan="2" style="width: 50%; text-align: center">CAPAIAN PEMBELAJARAN</td>
           {{--<td rowspan="3" style="width: 7%;">KKM</td>
          <td colspan="4" style="width: 40%;">Rata-Rata</td> --}}
          <td rowspan="2" style="width: 50%; text-align: center">INDIKATOR CAPAIAN PEMBELAJARAN</td>
          <td colspan="3" style="width: 20%; text-align: center">PREDIKAT</td>
        </tr>

        <tr class="heading">
            <td style="width: 20%; text-align: center">SB</td>
            <td style="width: 20%; text-align: center">BSH</td>
            <td style="width: 20%; text-align: center">MB</td>
        </tr>

        <tr class="nilai">
            <td rowspan="5" style="text-align: center;">1</td>
            <td colspan="5" style="text-align: center">Pendidikan Agama Islam dan Budi Pekerti</td>

            {{-- <td style="text-align: center;"></td> --}}
        </tr>

        <tr class="nilai">
            <td rowspan="4" style="text-align: center;">
                1.1. Peserta didik mampu menganalisis ayat Al-Qur’an dan hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta larangan pergaulan bebas dan zina; dapat membaca Al-Qur’an dengan tartil, menghafal dengan fasih dan lancar ayat Al-Qur’an serta Hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta bahaya dari pergaulan bebas dan zina; dapat menyajikan konten dan paparan tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta larangan pergaulan bebas dan zina; meyakini bahwa sikap kompetitif dalam kebaikan dan etos kerja serta menghindari pergaulan bebas dan perbuatan zina adalah perintah agama; dan membiasakan sikap kompetitif dalam kebaikan dan etos kerja serta menghindari pergaulan bebas dan perbuatan zina dengan lebih berhati-hati dan menjaga kehormatan diri.
            </td>
            <td style="text-align: center;">1.1.1. Peserta didik mampu menganalisis ayat Al- Qur’an dan hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>

        </tr>

        <tr class="nilai">
            <td style="text-align: center;">1.1.2. Peserta didik mampu menganalisis ayat Al- Qur’an dan hadis tentang larangan pergaulan</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
        </tr>


        <tr class="nilai">
            <td style="text-align: center;">1.1.3. Peserta didik mampu membaca Al-Qur’an
                dengan tartil, dan lancar ayat Al-Qur’an serta Hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta bahaya dari</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
        </tr>

        <tr class="nilai">
            <td style="text-align: center;">1.1.4. Peserta didik mampu membaca Al-Qur’an
                dengan tartil, dan lancar ayat Al-Qur’an serta Hadis tentang bahaya dari pergaulan bebas dan zina.</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
        </tr>


      </table>
      <br>


    </div>

    {{-- <div class="content" style="width:100%; height:auto; margin:auto;">
        <div style="padding-left:5%; float:left; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;">
            Orang Tua<br>
             <br><br><br><br>
             <hr>
            <b>Nama Orang tua</b><br>

          </div>

        <div style="padding-right:5%; float:right;  font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;">
          JAKARTA, 10 JANUARI 2021<br>
          Wali Kelas, <br><br><br><br>
          <b><u>NAMA GURU, SPD</u></b><br>
          NIP. 1721107
        </div>
    </div> --}}
    {{-- <div class="footer">
      <b style="padding-left:5%; float:left; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;"><i>NAMA KELAS | NAMA MURID | NIM</i></b>
      <b style="padding-right:2px; float: right;"><i>Halaman 1</i></b>
    </div> --}}
  </div>

  <div class="page-break"></div>


</body>

</html>
