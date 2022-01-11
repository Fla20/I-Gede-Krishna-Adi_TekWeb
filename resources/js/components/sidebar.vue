<template>
    <div>
        <!-- Sidebar -->
        <ul
            class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            id="accordionSidebar"
        >
            <!-- Sidebar - Brand -->
            <router-link
                class="sidebar-brand d-flex align-items-center justify-content-center"
                :to="{ name: 'dashboard' }"
            >
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kasir Online</div>
            </router-link>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'dashboard' }">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></router-link
                >
            </li>

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-expanded="true"
                    aria-controls="collapseTwo"
                >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar"
                >
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Detail</h6>
                        <!-- customer page -->
                        <router-link
                            class="collapse-item"
                            :to="{ name: 'customerPage' }"
                        >
                            <span>Customer Page</span></router-link
                        >
                        <!-- paket makanan page -->
                        <router-link
                            class="collapse-item"
                            :to="{ name: 'paketPage' }"
                        >
                            <span>Paket Page</span></router-link
                        >
                        <!-- transaksi page -->
                        <router-link
                            class="collapse-item"
                            :to="{ name: 'transactionPage' }"
                        >
                            <span>Transaction Page</span></router-link
                        >
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->
    </div>
</template>
