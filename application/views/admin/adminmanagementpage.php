<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <?=$this->session->flashdata('massage')?>
            <div class="row flex-lg-nowrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="http://localhost/pm/admin"
                                                class="active nav-link">Management Admin</a></li>
                                        <button type="submit" class="btn btn-primary" style="margin-left: 717px;"
                                            data-toggle="modal" data-target="#exampleModal">Tambah data</button>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table100 ver1">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            <tr class="row100 head">
                                                                <th class="cell100 column1">Nama</th>
                                                                <th class="cell100 column2">Email</th>
                                                                <th class="cell100 column5">No Telepon</th>
                                                                <th class="cell100 column5">Action</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="table100-body js-pscroll" style="height:350px">
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($admin as $hdh) :?>
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1"><?= $hdh->Nama_Lengkap ?>
                                                                </td>
                                                                <td class="cell100 column2"><?= $hdh->email ?></td>
                                                                <td class="cell100 column5"><?= $hdh->no_telp ?></td>
                                                                <td class="cell100 column5"><?= anchor('admin/edit_admin/'
                                    .$hdh->id_pegawai, '<button class="btn btn-success"> Edit </button>') ?>
                                                                    <?= anchor('admin/hapus_admin/'
                                    .$hdh->id_pegawai, '<button class="btn btn-danger" > Delete User </button>') ?>
                                                                </td>
                                                            </tr>

                                                            <?php $idad++; endforeach;?>

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="background-color: #2fe9b1;">
                                            <form method="post" action="<?= base_url('admin/tambah_admin'); ?>">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>email</label>
                                                    <input type="text" name="email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>password</label>
                                                    <input type="password" name="pass" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>alamat</label>
                                                    <input type="text" name="alamat" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor Telepon</label>
                                                    <input type="text" name="notlp" class="form-control">
                                                </div>
                                                <input type="hidden" name="id_ad" value="PG00<?php echo  $idad+1 ;?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
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