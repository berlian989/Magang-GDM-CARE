<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?php echo base_url()?>assets/img/profile/<?= $login['gambar']; ?>">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <?= $login['nama_lengkap']; ?>
                        <span class="user-level">User</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="http://localhost/pm/user/editprofile">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                            <a href="http://localhost/pm/user/editpassword">
                                <span class="link-collapse">Change Password</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <?php if ($title =='Home'): ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/user/">
                    <i class="la la-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <?php if ($title =='History'):?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/user/history/">
                    <i class="la la-history"></i>
                    <p>Riwayat</p>
                </a>
            </li>
            <?php if ($title =='Reward'):?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/user/reward">
                    <i class="la la-gift"></i>
                    <p>Reward</p>
                </a>
            </li>
            <?php if ($title =='Support'):?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif ; ?>
                <a href="http://localhost/pm/user/support">
                    <i class="la la-phone"></i>
                    <p>Support</p>
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