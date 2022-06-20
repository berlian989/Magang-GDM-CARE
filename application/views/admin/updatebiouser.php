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
                                                    <?php foreach ($customer as $ctr) {?>
                                                    <?php echo form_open_multipart('admin/update_biouser');?>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto mb-3">
                                                            <div class="mx-auto" style="width: 140px;">
                                                                <div class="d-flex justify-content-center align-items-center rounded"
                                                                    style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                    <img style="width: 140px;"
                                                                        src="<?php echo base_url()?>assets/img/profile/<?= $ctr->gambar ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">
                                                                    <?= $ctr->nama_lengkap ?></h4>
                                                                <div class="text-muted"><small>Registered Since
                                                                        <?=date('d F Y', $ctr->date_create) ?></small>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"
                                                                            id="image" name="image">
                                                                        <label class="custom-file-label"
                                                                            for="image">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center text-sm-right">
                                                                <span class="badge badge-secondary">User</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap</label>
                                                                        <input type="hidden" name="id"
                                                                            class="form-control"
                                                                            value="<?=$ctr->id_cust ?>">
                                                                        <input class="form-control" type="text"
                                                                            name="name"
                                                                            value="<?=$ctr->nama_lengkap ?>">
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
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir </label>
                                                                        <input placeholder="*Tolong di isi" type="text"
                                                                            class="form-control datepicker"
                                                                            name="tgl_lahir"
                                                                            value="<?=$ctr->tgl_lahir ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Tempat Lahir</label>
                                                                        <input class="form-control" type="text"
                                                                            name="tempat_lahir"
                                                                            placeholder=" *Tolong di isi "
                                                                            value="<?=$ctr->tempat_lahir ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Jenis Kelamin</label>
                                                                        <input class="form-control" type="text"
                                                                            name="gender" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr->jenis_kelamin ?>">
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
                                                                        <label>No Telp</label>
                                                                        <input class="form-control" type="text"
                                                                            name="notlp" placeholder="*Tolong di isi"
                                                                            value="<?=$ctr->no_telp ?>">
                                                                    </div>
                                                                </div>
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