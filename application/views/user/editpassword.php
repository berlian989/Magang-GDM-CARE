<div class="main-panel">
    <div class="content">
        <div class="container-fluid ">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <?=$this->session->flashdata('massage')?>
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">

                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="" class="active nav-link">Edit Password</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">
                                                <form class="form" method="post"
                                                    action="<?= base_url('user/editpassword'); ?>">
                                                    <div class="row">
                                                        <div class="col-12 ">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Current Password</label>
                                                                        <input class="form-control" name="pass"
                                                                            type="password" placeholder="••••••">
                                                                    </div>
                                                                    <?= form_error('pass', '<small class="text-danger">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>New Password</label>
                                                                        <input class="form-control" name="pass1"
                                                                            type="password" placeholder="••••••">
                                                                    </div>

                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Confirm <span
                                                                                class="d-none d-xl-inline">Password</span></label>
                                                                        <input class="form-control" name="pass2"
                                                                            type="password" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?= form_error('pass1', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
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