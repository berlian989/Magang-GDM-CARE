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
                                        <li class="nav-item"><a href="http://localhost/pm/user/history"
                                                class="active nav-link">Transaksi</a></li>
                                        <li class="nav-item"><a href="http://localhost/pm/user/riwayatreward"
                                                class="nav-link">Riwayat Reward</a></li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="table100 ver1">
                                                <div class="table100-head">
                                                    <table>
                                                        <thead>
                                                            <tr class="row100 head">
                                                                <th class="cell100 column1">Nama</th>
                                                                <th class="cell100 column2">Quantity</th>
                                                                <th class="cell100 column3">Tanggal</th>
                                                                <th class="cell100 column4">Harga</th>
                                                                <th class="cell100 column4">Poin</th>

                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="table100-body js-pscroll" style="height:350px">
                                                    <table>
                                                        <tbody>
                                                            <?php foreach ($hsltrans as $rr) {?>
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1"><?= $rr->nama_barang; ?>
                                                                </td>
                                                                <td class="cell100 column2"><?= $rr->Qty; ?></td>
                                                                <td class="cell100 column3"><?= $rr->tanggal; ?></td>
                                                                <td class="cell100 column4"><?= $rr->Total_bayar; ?>
                                                                </td>
                                                                <td class="cell100 column5">
                                                                    <?= $rr->Total_bayar/10000; ?></td>
                                                            </tr>
                                                            <?php } ;?>
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