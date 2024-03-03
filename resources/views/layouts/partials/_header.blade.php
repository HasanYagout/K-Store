<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="Images/logo.jpeg" alt="logo" width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item"><a class="nav-link fs-5" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="All_products.php?id=<?php echo md5(0) ?>">Products</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="News.php">News</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="About.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link fs-5" id="login" href="Login-Signup.php">Login</a></li>
                <li class="dropdown-center nav-item">
                    <a class=" dropdown-toggle nav-link fs-5" data-bs-toggle="dropdown" aria-expanded="false">
                        Manage
                    </a>
                    <ul class="dropdown-menu">
                        <a class="nav-link fs-5" href="admin/ManageProducts.php">Products</a>
                        <a class="nav-link fs-5" href="admin/ManageUsers.php">Users</a>
                        <a class="nav-link fs-5" href="ManageNews.php">News</a>

                    </ul>
                </li>

            </ul>
            <input type="text" id="search" placeholder="Search" />

        </div>

    </div>

</nav>
