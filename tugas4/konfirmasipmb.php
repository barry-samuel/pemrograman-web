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
    <div class="container">
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
    <div class="container align-items-center">
        <div class="row">
            <form class="form">
                <fieldset disabled>
                    <h3>Pendaftaran Online</h3>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Jalur Penerimaan Mahasiswa Baru*</label>
                            <p><?= $_POST["jalurpmb"] ?></p>
                            <select required="" class="form-control" name="jalurpmb" id="">
                            <option>
                                <?= $_POST["jalurpmb"] ?>
                            </option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Nama Calon Mahasiswa (Sesuai Akte Kelahiran)*</label>
                            <input type="text" required="" class="form-control" name="namapmb" value="<?= $_POST["namapmb"] ?>" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tempat &amp; Tanggal Lahir *</label>
                                <input type="text" required="" class="form-control" name="lahirpmb" value="<?= $_POST["lahirpmb"] ?>" />
                            </div>
                            <div class="col-md-6">
                                <label>NIK (Nomor Induk Kependudukan KTP / KK) *</label>
                                <input type="text" required="" class="form-control" name="nikpmb" placeholder="<?= $_POST["nikpmb"] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Jenis Kelamin*</label>
                                <select required="" class="form-control" name="jkelpmb">
                                    <option><?= $_POST["jkelpmb"] ?></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Agama*</label>
                                <select required="" class="form-control" name="agamapmb">
                                    <option><?= $_POST["agamapmb"] ?></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Status*</label>
                                <select required="" class="form-control" name="snikahpmb">
                                    <option><?= $_POST["snikahpmb"] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Alamat*</label> 
                            <textarea required="" rows="3" class="form-control" name="alamatpmb" value="<?= $_POST["alamatpmb"] ?>"><?= $_POST["alamatpmb"] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Kode Pos*</label> 
                                <input type="text" required="" class="form-control" name="kodepospmb" value="<?= $_POST["kodepospmb"] ?>" />
                            </div>
                            <div class="col-md-4">
                                <label>No Handphone*</label> 
                                <input type="text" required="" class="form-control" name="hppmb"  value="<?= $_POST["hppmb"] ?>" />
                            </div>
                            <div class="col-md-4">
                                <label>Email*</label> 
                                <input type="email" required="" class="form-control" name="emailpmb" value="<?= $_POST["emailpmb"] ?>" />
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
                                <input type="text" required="" class="form-control" name="lulusanpmb" value="<?= $_POST["lulusanpmb"] ?>" />
                            </div>
                            <div class="col-md-4">
                                <label>Wilayah Sekolah*</label>
                                <select required="" class="form-control" name="wilayahpmb" >
                                    <option><?= $_POST["wilayahpmb"] ?></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Jurusan Sekolah*</label>
                                <input type="text" required="" class="form-control" name="jurusanpmb" value="<?= $_POST["jurusanpmb"] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                            <label>Tahun Lulus*</label>
                            <input type="text" required="" class="form-control" name="tluluspmb" value="<?= $_POST["tluluspmb"] ?>" />
                        </div>
                        <div class="col-md-6">
                                <label>Biaya kuliah dibiayai oleh*</label>
                                <select required="" class="form-control" name="biayapmb" id="">
                                    <option><?= $_POST["biayapmb"] ?></option>
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
                                <input type="text" required="" class="form-control" name="namaayahpmb" value="<?= $_POST["namaayahpmb"] ?>" />
                            </div>
                            <div class="col-md-6">
                                <label>Nama Ibu*</label> 
                                <input type="text" required="" class="form-control" name="namaibupmb" placeholder="<?= $_POST["namaibupmb"] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Alamat*</label> <textarea required="" rows="3" class="form-control" name="alamatorangtuapmb" value="<?= $_POST["alamatorangtuapmb"] ?>"><?= $_POST["alamatorangtuapmb"] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kode Pos*</label> 
                                <input type="text" required="" class="form-control" name="kposorangtuapmb" value="<?= $_POST["kposorangtuapmb"] ?>" />
                            </div>
                            <div class="col-md-6">
                                <label>No. Handphone*</label> 
                                <input type="text" required="" class="form-control" name="hporangtuapmb" value="<?= $_POST["hporangtuapmb"] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Pendidikan Terakhir Ayah*</label>
                                <select required="" class="form-control" name="pakhirayahpmb">
                                    <option><?= $_POST["pakhirayahpmb"] ?></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Pendidikan Terakhir Ibu*</label>
                                <select required="" class="form-control" name="pakhiribupmb">
                                    <option><?= $_POST["pakhiribupmb"] ?></option>
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
                                    <option><?= $_POST["statusayahpmb"] ?></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Status Ibu*</label>
                                <select required="" class="form-control" name="statusibupmb">
                                    <option value="" selected="selected">--- Pilih ---</option>
                                    <option><?= $_POST["statusibupmb"] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <dev class="row">
                            <div class="col-md-6">
                                <label>Pekerjaan Ayah*</label>
                                <select required="" class="form-control" name="kerjaayahpmb" id="">
                                    <option><?= $_POST["kerjaayahpmb"] ?>/option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Pekerjaan Ibu*</label>
                                <select required="" class="form-control" name="kerjaibupmb" id="">
                                    <option><?= $_POST["kerjaibupmb"] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Penghasilan Ayah*</label>
                                <select required="" class="form-control" name="gajiayahpmb">
                                    <option><?= $_POST["gajiayahpmb"] ?></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Penghasilan Ibu*</label>
                                <select required="" class="form-control" name="gajiibupmb">
                                    <option><?= $_POST["gajiibupmb"] ?></option>
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
                                    <option><?= $_POST["prodipmb"] ?></option>
                                </select>
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
                </fieldset>
            </form>
        </div>
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