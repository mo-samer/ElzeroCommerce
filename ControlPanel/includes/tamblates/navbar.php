<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo lang('HOME_ADMIN') ?></a>
                </li>
                <a class="navbar-brand" href="Category.php"><?php echo lang('CATE'); ?></a>
                <a class="navbar-brand" href="#"><?php echo lang('ITEMS'); ?></a>
                <a class="navbar-brand" href="mems.php"><?php echo lang('MEMBERS'); ?></a>
                <a class="navbar-brand" href="#"><?php echo lang('STATI'); ?></a>
                <a class="navbar-brand" href="#"><?php echo lang('LOGS'); ?></a>
                <a class="dropdown-item" href="mems.php?do=Edit&id=<?php echo $_SESSION['ID'] ?>">Edit Profile</a>
                <a class="dropdown-item" href="#">Setting</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>