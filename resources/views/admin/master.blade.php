@include('admin/layouts/head')


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        @include('admin/layouts/leftSideBar')



        <div class="page-wrapper">
            <!-- Header -->
          @include('admin/layouts/navBar')


            <div class="content-wrapper">


                <div class="content">

                    @yield('content')

                </div>


            </div>

           @include('admin/layouts/footer')

        </div>
    </div>

   @include('admin/layouts/script')

</body>

</html>
