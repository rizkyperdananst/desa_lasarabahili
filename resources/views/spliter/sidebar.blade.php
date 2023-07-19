<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Lasarabahili</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ Request()->is('admin/dashboard*') ? 'active' : '' }}">
         <a class="nav-link" href="{{ route('dashboard') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>

     <!-- Nav Item - Penduduk -->
     <li class="nav-item mt-0 mb-0  {{ Request()->is('admin/penduduk*') ? 'active' : '' }}">
        <a class="nav-link mt-0 pb-0" href="{{ route('penduduk.index') }}">
            <i class="fa-solid fa-house"></i>
            <span>Penduduk</span></a>
     </li>

     <!-- Nav Item - Pindah -->
     <li class="nav-item mt-0 mb-0  {{ Request()->is('admin/pindah*') ? 'active' : '' }}">
        <a class="nav-link mt-0 pb-0" href="{{ route('pindah.index') }}">
            <i class="fa-solid fa-wheelchair-move"></i>
            <span>Pindah</span></a>
     </li>

     <!-- Nav Item - Pendatang -->
     <li class="nav-item mt-0 mb-0  {{ Request()->is('admin/pendatang*') ? 'active' : '' }}">
        <a class="nav-link mt-0 pb-0" href="{{ route('pendatang.index') }}">
            <i class="fa-solid fa-camera-retro"></i>
            <span>Pendatang</span></a>
     </li>

     <!-- Nav Item - Kematian -->
     <li class="nav-item mt-0 mb-0  {{ Request()->is('admin/kematian*') ? 'active' : '' }}">
        <a class="nav-link mt-0 pb-0" href="{{ route('kematian.index') }}">
            <i class="fa-solid fa-skull"></i>
            <span>Kematian</span></a>
     </li>

     <!-- Nav Item - Pendatang -->
     <li class="nav-item mt-0 mb-0  {{ Request()->is('admin/kelahiran*') ? 'active' : '' }}">
        <a class="nav-link mt-0 pb-0" href="{{ route('kelahiran.index') }}">
            <i class="fa-solid fa-cake-candles"></i>
            <span>Kelahiran</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     {{-- <!-- Heading -->
     <div class="sidebar-heading">
         Addons
     </div>

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Charts</span></a>
     </li> --}}

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>