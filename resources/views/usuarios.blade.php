<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Usuarios</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Ferreteria</h3>
                </a>
                <div class="navbar-nav w-100">
                        <a href="/admin" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Formularios</a>
                    <a href="/producto" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Productos</a>
                    <a href="/categorias" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Categorias</a>
                    <a href="/usuarios" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Usuarios</a>
                    <a href="/imagenes" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Imagenes</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <h6 class="mb-4">Tabla de Usuarios</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Usuario</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Teléfono</th>
                            <th>Fecha de Registro</th>
                            <th>Correo</th>
                            <th>Tipo de Usuario</th>
                            <th>Ruta Imagen Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>******</td>
                            <td>123456789</td>
                            <td>2023-01-01</td>
                            <td>juan@example.com</td>
                            <td>Admin</td>
                            <td><img src="img/user1.jpg" alt="Usuario 1" style="width: 50px;"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>María García</td>
                            <td>******</td>
                            <td>987654321</td>
                            <td>2023-02-15</td>
                            <td>maria@example.com</td>
                            <td>Usuario</td>
                            <td><img src="img/user2.jpg" alt="Usuario 2" style="width: 50px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table End -->

         
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/admin/main.js"></script>
</body>

</html>
