<template>
    <div id="wrapper">
        <sidebar></sidebar>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <navbar></navbar>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <router-view></router-view>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
</template>

<script>
import navbar from "./navbar.vue";
import sidebar from "./sidebar.vue";

export default {
    components: {
        navbar,
        sidebar,
    },
};
</script>
