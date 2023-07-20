
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>White Hats</span></a>
            </header>
            <nav class="dash-nav-list">

                <a href="<?php echo base_url("user/Dashboard") ?>" class="dash-nav-item">
                    <i class="fas fa-home"></i>Anasayfa</a>

                        <a href="<?php echo base_url("user//Profile") ?>" class="dash-nav-item">
                        <i class="fa-solid fa-user"></i>Profilim</a>
                
                <a href="<?=base_url("user/Login/logout/")?>" class="dash-nav-item">
                    <i class="fas fa-xmark "></i>Çıkış Yap</a>
            </nav>
        </div>
