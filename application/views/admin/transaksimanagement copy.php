<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <div class="row flex-lg-nowrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="http://localhost/pm/admin/managementtransaksi"
                                                class="active nav-link">Transaksi</a></li>
                                        <li class="nav-item"><a href="http://localhost/pm/admin/transaksi_reward"
                                                class="nav-link">Transaksi Hadiah</a></li>
                                        <button type="submit" class="btn btn-primary" style="margin-left: 645px;"
                                            data-toggle="modal" data-target="#exampleModal">Tambah data</button>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table-responsive">
                                                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                    <table id="dtDynamicVerticalScrollExample"
                                                        class="table table-bordered table-hover table-striped"
                                                        cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Customer</th>
                                                                <th>Nama Barang</th>
                                                                <th>Qty</th>
                                                                <th>Total Bayar</th>
                                                                <th>Poin</th>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($atransaksi as $ctr) :?>
                                                            <tr>
                                                                <td><?= $ctr->nama_lengkap ?></td>
                                                                <td><?= $ctr->nama_barang ?></td>
                                                                <td><?= $ctr->Qty ?></td>
                                                                <td><?= $ctr->Total_bayar ?></td>
                                                                <td><?= $ctr->Total_bayar/1000 ?></td>
                                                                <td>
                                                                    <?= anchor('admin/edit_transaksi/'
                            .$ctr->id_transaksi, '<div class="btn btn-success btn-sm"> 
					<i class="fa fa-edit"></i>Edit</div>') ?>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php $idtrans++; endforeach;?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background-color: #2fe9b1;">
                                                            <form method="post"
                                                                action="<?= base_url('admin/tambah_trans'); ?>">
                                                                <input type="hidden" name="idtrans" class="form-control"
                                                                    value="<?php echo  $idtrans+1 ;?>">
                                                                <div class="form-group">
                                                                    <label>Nama Pegawai</label>
                                                                    <select name="id_peg" class="form-control">
                                                                        <?php foreach ($admin as $hdh) :?>
                                                                        <option value="<?=$hdh->id_pegawai ?>">
                                                                            <?= $hdh->Nama_Lengkap ?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama Customer</label>
                                                                    <select name="id_cus" class="form-control">
                                                                        <?php foreach ($customer as $hdh) :?>
                                                                        <option value="<?=$hdh->id_cust ?>">
                                                                            <?= $hdh->nama_lengkap ?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama Barang</label>
                                                                    <select name="id_bar" class="form-control">
                                                                        <?php foreach ($barang as $hdh) :?>
                                                                        <option value="<?=$hdh->id_barang ?>">
                                                                            <?= $hdh->nama_barang ?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Transaksi</label>
                                                                    <input placeholder="*Tolong di isi" type="text"
                                                                        class="form-control datepicker"
                                                                        name="tgl_trans">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Quantity</label>
                                                                    <input type="text" name="quan" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Discount</label>
                                                                    <input type="text" name="dis" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Total Biaya</label>
                                                                    <input type="text" name="tobi" class="form-control">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
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


                </div>
            </div>



        </div>
    </div>