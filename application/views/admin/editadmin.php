<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <div class="container">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Edit Profile</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <?php foreach ($admin as $ctr) {?>
                                                    <?php echo form_open_multipart('admin/updateadmin');?>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap</label>
                                                                        <input type="hidden" name="id"
                                                                            class="form-control"
                                                                            value="<?=$ctr->id_pegawai ?>">
                                                                        <input class="form-control" type="text"
                                                                            name="name"
                                                                            value="<?=$ctr->Nama_Lengkap ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input class="form-control" type="text"
                                                                            name="email" value="<?=$ctr->email ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>No Telp</label>
                                                                        <input class="form-control" type="text"
                                                                            name="notlp" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr->no_telp ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Alamat</label>
                                                                        <input class="form-control" type="text"
                                                                            name="alamat" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr->alamat ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label>Password</label>
                                                                        <input class="form-control" type="password"
                                                                            name="pass" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr->password ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
                                                    </div>

                                                    </form>
                                                    <?php   }  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>