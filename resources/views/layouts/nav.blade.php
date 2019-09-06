<body>

    <section class="d-flex" id="wrapper">
        <!-- wrapper -->
        @auth
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading "> Navigation </div>
            <div class="list-group list-group-flush">
                <a href="/schools#" class="list-group-item list-group-item-action bg-light"> Schools </a>
                <a href="/fees#" class="list-group-item list-group-item-action bg-light"> Fees </a>
                <a href="/uniforms#" class="list-group-item list-group-item-action bg-light">Uniforms </a>
                <a href="/awards#" class="list-group-item list-group-item-action bg-light">Awards </a>
                <a href="/reviews#" class="list-group-item list-group-item-action bg-light"> Reviews  </a>
                <a href="/logout" class="list-group-item list-group-item-action bg-light">Sign Out</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        @endauth

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                @auth
                <button class="btn btn-default" id="menu-toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @endauth

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        @guest
                        <li class="nav-item active">
                            <a data-toggle="modal" data-target="#register" class="nav-link" href="#"> SignUp</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#login" class="nav-link" href="#"> SignIn</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"> Sign Out</a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>

            <section class="container-fluid">
                <!-- content -->
                @include('modals')