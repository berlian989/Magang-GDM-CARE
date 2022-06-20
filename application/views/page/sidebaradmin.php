<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?php echo base_url()?>assets/img/profile/profile.jpg">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <?= $login['Nama_Lengkap']; ?>
                        <span class="user-level">Administrator</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <ul class="nav">
            <?php if ($title =='Management Customer'): ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/admin/">
                    <i class="la la-home"></i>
                    <p>Management Customer</p>
                </a>
            </li>
            <?php if ($title =='Management Admin'): ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/admin/adminmanagementpage">
                    <i class="la la-home"></i>
                    <p>Management Admin</p>
                </a>
            </li>
            <?php if ($title =='Management Transaksi'): ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/admin/managementtransaksi">
                    <i class="la la-home"></i>
                    <p>Management Transaksi</p>
                </a>
            </li>
            <?php if ($title =='Edit Reward'): ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/admin/editreward">
                    <i class="la la-home"></i>
                    <p>Edit Reward</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/pm/auth/logout">
                    <i class="la la-sign-out"></i>
                    <p>Sign out</p>
                </a>
            </li>
        </ul>
    </div>
</div>