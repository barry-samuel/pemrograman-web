<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="http://www.upj.ac.id/web/templates/assets/images/favicon.png">
</head>
<body>
    <div class="container-overflow">
        <header>
            <div class="container sticky-top">
                <div class="row">
                    <div class="col-xs-6 col-sm-5 col-md-6">
                        <div class="logo">
                            <a href="#"><img alt="Logo" src="logo2.png"/></a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                            <br/>
                            <h21 class="title-topa" style="font-size: 18px;">INTEGRITY</h21><br/>
                            <h21 class="title-topb" style="font-size: 18px;">PROFESSIONALISM</h21><br/>
                            <h21 class="title-topc" style="font-size: 18px;">ENTREPRENEURSHIP</h21>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="site-header sticky-top py-1">
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block" href="#">Tentang UPJ</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Akademik</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Pendaftaran</a>
                <a class="py-2 d-none d-md-inline-block" href="#">PJ-Community</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Penelitian</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Kerjasama</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Karir</a>
                </div>
            </nav>
        </header>
    </div>
    <div class="container">
        <h3>Pendaftaran Online</h3>
        <form class="form" method="post" action="konfirmasipmb.php">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Jalur Penerimaan Mahasiswa Baru*</label>
                    <select required="" class="form-control" name="jalurpmb" id="">
                        <option value="" selected="selected">--- Pilih Jalur Penerimaan ---</option>
                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Akademik - Khusus Lulusan 2021">
                            Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Akademik - Khusus Lulusan 2021
                        </option>
                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Non Akademik - Khusus Lulusan 2021">
                            Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Non Akademik - Khusus Lulusan 2021
                        </option>
                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa OSIS - Khusus Lulusan 2021">
                            Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa OSIS - Khusus Lulusan 2021
                        </option>
                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Desain Produk - Khusus">
                            Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Desain Produk - Khusus
                        </option>
                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Agama Katholik">
                            Tahun akademik 2021-2022 Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Agama Katholik
                        </option>
                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Potongan Anak Karyawan Tetap Jaya Grup (Khusus untuk orang tua yang berkerja di Jaya Grup)">
                            Tahun Akademik 2021-2022 Jalur Reguler - Potongan Anak Karyawan Tetap Jaya Grup (Khusus untuk orang tua yang berkerja di Jaya Grup)
                        </option>
                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Ujian Saringan Masuk (USM)">
                            Tahun Akademik 2021-2022 Jalur Reguler - Ujian Saringan Masuk (USM)
                        </option>
                        <option value="Tahun Akademik 2021/2022 Jalur Reguler - Potongan Anak Guru/Staf Sekolah">
                            Tahun Akademik 2021/2022 Jalur Reguler - Potongan Anak Guru/Staf Sekolah
                        </option>
                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Rata-rata Rapor">
                            Tahun Akademik 2021-2022 Jalur Reguler - Rata-rata Rapor
                        </option>
                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Peringkat Kelas">
                            Tahun Akademik 2021-2022 Jalur Reguler - Peringkat Kelas
                        </option>
                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Rapor dan USM">
                            Tahun Akademik 2021-2022 Jalur Reguler - Rapor dan USM
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Nama Calon Mahasiswa (Sesuai Akte Kelahiran)*</label>
                    <input type="text" required="" class="form-control" name="namapmb" placeholder="Silahkan masukkan nama lengkap..." />
                </div>
            </div> 
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Tempat &amp; Tanggal Lahir *</label>
                        <input type="text" required="" class="form-control" name="lahirpmb" placeholder="Silahkan masukkan tempat, tanggal/bulan/tahun lahir..." />
                    </div>
                    <div class="col-md-6">
                        <label>NIK (Nomor Induk Kependudukan KTP / KK) *</label>
                        <input type="text" required="" class="form-control" name="nikpmb" placeholder="Silahkan masukkan Nomor Induk Kependudukan..." />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Jenis Kelamin*</label>
                        <select required="" class="form-control" name="jkelpmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Agama*</label>
                        <select required="" class="form-control" name="agamapmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Status*</label>
                        <select required="" class="form-control" name="snikahpmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Alamat*</label> 
                    <textarea required="" rows="3" class="form-control" name="alamatpmb" placeholder="Silahkan masukkan alamat lengkap..."></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Kode Pos*</label> 
                        <input type="text" required="" class="form-control" name="kodepospmb"placeholder="Silahkan masukkan kodepos..." />
                    </div>
                    <div class="col-md-4">
                        <label>No Handphone*</label> 
                        <input type="text" required="" class="form-control" name="hppmb"  placeholder="Silahkan masukkan no. handphone..." />
                    </div>
                    <div class="col-md-4">
                        <label>Email*</label> 
                        <input type="email" required="" class="form-control" name="emailpmb" placeholder="Silahkan masukkan email..." />
                    </div>
                </div>
            </div>
            <br>
            <h2 class="col-lg-12">DATA SEKOLAH ASAL CALON MAHASISWA</h2>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Asal Sekolah (SMA/SMK/MA)*</label>
                        <input type="text" required="" class="form-control" name="lulusanpmb" placeholder="Silahkan masukkan asal sekolah..." />
                    </div>
                    <div class="col-md-4">
                        <label>Wilayah Sekolah*</label>
                        <select required="" class="form-control" name="wilayahpmb" >
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Jakarta Barat">Jakarta Barat</option>
                            <option value="Jakarta Pusat">Jakarta Pusat</option>
                            <option value="Jakarta Selatan">Jakarta Selatan</option>
                            <option value="Jakarta Timur">Jakarta Timur</option>
                            <option value="Jakarta Utara">Jakarta Utara</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Depok">Depok</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Tangerang Selatan">Tangerang Selatan</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Luar Kota">Luar Kota</option>
                            <option value="Luar Negri">Luar Negri</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Jurusan Sekolah*</label>
                        <input type="text" required="" class="form-control" name="jurusanpmb" placeholder="Silahkan masukkan jurusan sekolah..." />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                <div class="col-md-6">
                    <label>Tahun Lulus*</label>
                    <input type="text" required="" class="form-control" name="tluluspmb" placeholder="Silahkan masukkan tahun lulus..." />
                </div>
                <div class="col-md-6">
                        <label>Biaya kuliah dibiayai oleh*</label>
                        <select required="" class="form-control" name="biayapmb" id="">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Beasiswa">Beasiswa</option>
                            <option value="Ikatan Dinas">Ikatan Dinas</option>
                            <option value="Orangtua">Orangtua</option>
                            <option value="Wali">Wali</option>
                            <option value="Sendiri">Sendiri</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <h2 class="col-lg-12">DATA ORANG TUA CALON MAHASISWA</h2>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama Ayah*</label> 
                        <input type="text" required="" class="form-control" name="namaayahpmb" placeholder="Silahkan masukkan nama ayah..." />
                    </div>
                    <div class="col-md-6">
                        <label>Nama Ibu*</label> 
                        <input type="text" required="" class="form-control" name="namaibupmb" placeholder="Silahkan masukkan nama ibu..." />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Alamat*</label> <textarea required="" rows="3" class="form-control" name="alamatorangtuapmb" placeholder="Silahkan masukkan alamat lengkap..."></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Kode Pos*</label> 
                        <input type="text" required="" class="form-control" name="kodeposorantuapmb" placeholder="Silahkan masukkan kodepos..." />
                    </div>
                    <div class="col-md-6">
                        <label>No. Handphone*</label> 
                        <input type="text" required="" class="form-control" name="hporangtuapmb" placeholder="Silahkan masukkan no. handphone..." />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Pendidikan Terakhir Ayah*</label>
                        <select required="" class="form-control" name="pakhirayahpmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="A">A - Tidak Tamat SD</option>
                            <option value="B">B - Tamat SD</option>
                            <option value="C">C - Tamat SMP</option>
                            <option value="D">D - Tamat SMA</option>
                            <option value="E">E - Diploma ( D1 - D2 )</option>
                            <option value="F">F - Sarjana ( D3 )</option>
                            <option value="G">G - Sarjana ( D4 - S1 )</option>
                            <option value="H">H - Pascasarjana ( S2 )</option>
                            <option value="I">I - Doktor ( S3 )</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Pendidikan Terakhir Ibu*</label>
                        <select required="" class="form-control" name="pakhirpmbibu">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="A">A - Tidak Tamat SD</option>
                            <option value="B">B - Tamat SD</option>
                            <option value="C">C - Tamat SMP</option>
                            <option value="D">D - Tamat SMA</option>
                            <option value="E">E - Diploma ( D1 - D2 )</option>
                            <option value="F">F - Sarjana ( D3 )</option>
                            <option value="G">G - Sarjana ( D4 - S1 )</option>
                            <option value="H">H - Pascasarjana ( S2 )</option>
                            <option value="I">I - Doktor ( S3 )</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Status Ayah*</label>
                        <select required="" class="form-control" name="statuayahpmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Status Ibu*</label>
                        <select required="" class="form-control" name="statusibupmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <dev class="row">
                    <div class="col-md-6">
                        <label>Pekerjaan Ayah*</label>
                        <select required="" class="form-control" name="kerjaayahpmb" id="">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Pensiun">Pensiun</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Pekerjaan Ibu*</label>
                        <select required="" class="form-control" name="kerjaibupmb" id="">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Pensiun">Pensiun</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Penghasilan Ayah*</label>
                        <select required="" class="form-control" name="gajiayahpmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="&lt; Rp 1.000.000">&lt; Rp 1.000.000</option>
                            <option value="Rp 1.000.000 - Rp 5.000.000">Rp 1.000.000 - Rp 5.000.000</option>
                            <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                            <option value="&gt; Rp 10.000.000">&gt; Rp 10.000.000</option>
                            <option value="Pensiun">Pensiun</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Penghasilan Ibu*</label>
                        <select required="" class="form-control" name="gajiibupmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="&lt; Rp 1.000.000">&lt; Rp 1.000.000</option>
                            <option value="Rp 1.000.000 - Rp 5.000.000">Rp 1.000.000 - Rp 5.000.000</option>
                            <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                            <option value="&gt; Rp 10.000.000">&gt; Rp 10.000.000</option>
                            <option value="Pensiun">Pensiun</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <h2 class="col-lg-12">PEMINATAN PROGRAM STUDI</h2>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Pilihan Program Studi*</label>
                        <select required="" class="form-control" name="prodipmb">
                            <option value="" selected="selected">--- Pilih ---</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Psikologi">Psikologi</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Desain Produk">Desain Produk</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Arsitektur">Arsitektur</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <h2>Ujian Saringan Masuk</h2>
            <br>
            <div class="row">
                <div class="col-md-8">USM (Ujian Saringan Masuk): Jadwal dan link akan diberikan kemudian setelah proses awal pendaftaran dinyatakan memenuhi persyaratan</div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="clear:both; margin: 8px 0">
                    <div class="col-lg-3 ">
                        <button class="btn btn-primary" value="Submit" name="submit" type="submit">Submit</button>
                        <button class="btn btn-danger" value="Reset" name="B2" type="submit">Reset</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" id="contactError">
                        *Wajib diisi
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container-overflow">
        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                            <p><i class="fas fa-home me-3"></i> Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413</p>
                            <p><i class="fas fa-phone me-3"></i>(021)7455555 - (021) 29045405</p>
                            <p><i class="fas fa-fax me-3"></i> (021)29861525</p>
                        </div>  
                        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Link to Jaya Group</h6>
                            <p>
                            <a href="#!" class="text-reset">Pembangunan Jaya</a>
                            </p>
                            <p>
                            <a href="#!" class="text-reset">Yayasan Pendidikan Jaya</a>
                            </p>
                            <p>
                            <a href="#!" class="text-reset">Yayasan Marga Pembangunan Jaya</a>
                            </p>
                            <p>
                            <a href="#!" class="text-reset">Yayasan Pembangunan Jaya Raya</a>
                            </p>
                        </div>
                </section>
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="http://upj.ac.id/">Universitas Pembangunan Jaya</a>
                </div>
            </footer>
    </div>
</body>
</html>