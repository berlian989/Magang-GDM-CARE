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
                                                class="nav-link">Transaksi</a></li>
                                        <li class="nav-item"><a href="http://localhost/pm/admin/transaksi_reward"
                                                class="active nav-link">Transaksi Hadiah</a></li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table100 ver1">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th class="cell100 column1">Nama Customer</th>
                                                                <th class="cell100 column1">Nama Hadiah</th>
                                                                <th class="cell100 column1">Tgl Penukaran</th>
                                                                <th class="cell100 column1">Status</th>
                                                                <th class="cell100 ">Konfirmasi</th>
                                                                <th class="cell100 column1">Hapus</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="table100-body js-pscroll" style="height:350px">
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($riwayatreward as $ctr) :?>
                                                            <tr>
                                                                <td class="cell100 column1"><?= $ctr->Nama_hadiah ?>
                                                                </td>
                                                                <td class="cell100 column1"><?= $ctr->Nama_hadiah ?>
                                                                </td>
                                                                <td class="cell100 column1">
                                                                    <?=date('d F Y', $ctr->tanggal_penukaran); ?></td>
                                                                <td class="cell100 column1"><?= $ctr->Status ?></td>
                                                                <td class="cell100">
                                                                    <?= anchor('admin/konfirmasi/'
                                    .$ctr->id_rr, '<button class="btn btn-success"> Konfirmasi </button>') ?>
                                                                    </a>
                                                                </td>
                                                                <td class="cell100 column1">
                                                                    <?= anchor('admin/hapustransreward/'
                                    .$ctr->id_rr, '<button class="btn btn-danger"> Hapus </button>') ?>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach;?>
                                                        </tbody>
                                                    </table>
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