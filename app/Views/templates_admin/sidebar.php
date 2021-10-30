<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Elco</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Vote -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Voters Access
    </div>

    <!-- Nav Item - Vote -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('vote')?>">
            <i class="fas fa-vote-yea"></i>
            <span>Vote</span></a>
    </li>

    <!-- Nav Item - Candidate -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('candidate')?>">
            <i class="fas fa-user-tie"></i>
            <span>Candidate</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Committee Access
    </div>

    <!-- Nav Item - Result -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('/admin/result')?>">
            <i class="fas fa-poll-h"></i>
            <span>Result</span></a>
    </li>
    
    <!-- Nav Item - Voters -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('/admin/voters')?>">
            <i class="fas fa-address-book"></i>
            <span>Voters List</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('/Auth/logout')?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>