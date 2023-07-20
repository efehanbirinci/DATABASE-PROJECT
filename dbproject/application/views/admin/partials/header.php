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
                <a href="<?php echo base_url("admin/Dashboard") ?>" class="dash-nav-item">
                    <i class="fas fa-home"></i>Anasayfa</a>
                    
                    <a href="<?php echo base_url("admin/AdminA") ?>" class="dash-nav-item">
                        <i class="fa-solid fa-users"></i>Yöneticiler</a>
              
                    <a href="<?php echo base_url("admin/Admins") ?>" class="dash-nav-item ">
                        <i class="fas fa-users"></i>Personeller</a>
                
           
                    <a href="<?php echo base_url("admin/Products") ?>" class="dash-nav-item">
                        <i class="fas fa-screwdriver-wrench"></i> Ürünler</a>
                
            
                    <a href="<?php echo base_url("admin/WorkFollow") ?>" class="dash-nav-item">
                        <i class="fas fa-hammer"></i>İş Takibi</a>
                
                    <a href="<?php echo base_url("admin/Admins/productList") ?>" class="dash-nav-item">
                        <i class="fas fa-toolbox"></i> Zimmetli Ürünler</a>

                    <a href="<?php echo base_url("admin/Profile") ?>" class="dash-nav-item">
                        <i class="fa-solid fa-user"></i>Profilim</a>
            
                <a href="<?=base_url("admin/Login/logout/")?>" class="dash-nav-item">
                    <i class="fas fa-xmark "></i>Çıkış Yap</a>
            </nav>
        </div>
