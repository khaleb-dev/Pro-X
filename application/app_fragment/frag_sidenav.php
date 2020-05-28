    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="../assets/img/logo.png" class="header-logo" /> <span
                class="logo-name"><?= Utility::APPLICATION_NAME ?></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="" id="dbdLink">
                <a href="./dashboard?<?=Utility::random_strings(15)?>" class="nav-link">
                    <i data-feather="command"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="" id="catLink">
                <a class="nav-link" href="./categories?<?=Utility::random_strings(15)?>">
                    <i data-feather="archive"></i><span>Categories</span>
                </a>
            </li>
            <li class="" id="proLink">
                <a class="nav-link" href="./products?<?=Utility::random_strings(15)?>">
                    <i data-feather="shopping-bag"></i><span>Products</span>
                </a>
            </li>
            <li class="menu-header">Pro Mode</li>
            <li class="" id="starterLink">
                <a class="nav-link" href="./starter?<?=Utility::random_strings(15)?>">
                    <i data-feather="file"></i><span>Starter/Tesst</span>
                </a>
            </li>
          </ul>
        </aside>
    </div>