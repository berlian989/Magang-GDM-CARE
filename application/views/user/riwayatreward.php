<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="row flex-lg-nowrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="http://localhost/pm/user/history"
                                                class="nav-link">Transaksi</a></li>
                                        <li class="nav-item"><a href="http://localhost/pm/user/riwayatreward/"
                                                class="active nav-link">Riwayat Reward</a></li>
                                    </ul>

                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table100 ver1">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            <tr class="row100 head">
                                                                <th class="cell100 column1">Hadiah</th>
                                                                <th class="cell100 column2">Tanggal Penukaran</th>
                                                                <th class="cell100 column5">Point yang berkurang</th>
                                                                <th class="cell100 column4">Status</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="table100-body js-pscroll" style="height:350px">
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($riawayat_reward as $rr) :?>
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1"><?= $rr['Nama_hadiah']; ?>
                                                                </td>
                                                                <td class="cell100 column2">
                                                                    <?=date('d F Y', $rr['tanggal_penukaran']); ?></td>
                                                                <td class="cell100 column5">
                                                                    <?= $rr['point_di_tukar']; ?></td>
                                                                <td class="cell100 column4"><?= $rr['Status']; ?></td>
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