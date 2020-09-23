<!-- Body BEGIN -->
<body class="corporate">
    <div class="main">
        <div class="container">
        <!-- FORM BEGIN -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <form>
                <fieldset class="fieldsetku">
                    <legend class="legendku">
                        <h4>Formulir Permohonan Sertifikasi Kompetensi</h4>
                    </legend>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="Masukan Nomor Induk Kependudukan" name="nik">
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control" placeholder="Masukan Nomor Induk Siswa" name="nis">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Tempat & Tgl. Lahir</label>
                        <input type="text" class="form-control" placeholder="Contoh : Karanganyar, 13/05/2001" name="ttl">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jenkel" value="Laki - Laki">
                            <label>Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jenkel" value="Perempuan">
                            <label>Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Satuan Pendidikan</label>
                        <select class="form-control" name="nsp">
                            <option>SMKN 2 Karanganyar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Koptensi Keahlian</label>
                        <select class="form-control" name="komKe">
                            <option>Rekayasa Perangkat Lunak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat">Alamat lengkap domisili</textarea>
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" class="form-control" placeholder="Contoh : 08996668479" name="nohp">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Masukan alamat email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Upload File</label>
                        <input type="file" class="form-control-file" placeholder="Masukan alamat email" name="file">
                        <small class="form-text text-muted">Silahkan upload file FR-APL-01 anda dalam bentuk .jpg, .png, .pdf dengan kapasitas maksimum </small>
                    </div>
                    <div class="form-group">
                        <label>reCAPTCHA</label>
                        <!-- ? -->
                    </div>
                    <button class="button btn-success">Kirim</button>
                </fieldset>
            </form>
            </div>
        </div>
        <!-- END FORM -->
        </div>
    </div>
</body>
<!-- END BODY -->