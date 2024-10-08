<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad XYZ - Bienvenidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            padding-top: 56px; /* Altura de la navbar */
        }
        .header-background {
    background-color: #007bff; /* Azul */
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
}


        .footer {
    background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradiente de púrpura a azul */
    color: white;
    padding: 20px 0;
    text-align: center;
}

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Universidad XYZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#programas">Programas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#admisiones">Admisiones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="header-background">
        <div class="container text-center">
            <img src="{{ asset('images/logo-universidad.png') }}" alt="Logo Universidad XYZ" class="mb-4 img-fluid" style="max-width: 200px;">
            <h1>Bienvenidos a la Universidad XYZ</h1>
            <p>Excelencia académica y formación integral</p>
            <div class="role-buttons mt-4">
                <a href="#" class="btn btn-primary">Iniciar Sesión como Estudiante</a>
                <a href="#" class="btn btn-success">Iniciar Sesión como Profesor</a>
                <a href="#" class="btn btn-danger">Iniciar Sesión Administrativo</a>
            </div>
        </div>
    </header>

    <!-- Contenido Principal -->
    <div class="content">
        <section id="programas" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nuestros Programas Académicos</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/imagen1.jpeg') }}" class="card-img-top" alt="Programa 1">
                            <div class="card-body">
                                <h5 class="card-title">Ingeniería</h5>
                                <p class="card-text">Desarrollamos profesionales altamente capacitados en diversas ramas de la ingeniería.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/imagen2.png') }}" class="card-img-top" alt="Programa 2">
                            <div class="card-body">
                                <h5 class="card-title">Ciencias Sociales</h5>
                                <p class="card-text">Ofrecemos programas en sociología, psicología y otras ciencias sociales para comprender mejor la sociedad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/programa3.jpg') }}" class="card-img-top" alt="Programa 3">
                            <div class="card-body">
                                <h5 class="card-title">Negocios</h5>
                                <p class="card-text">Formamos líderes empresariales con habilidades en gestión, finanzas y marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="admisiones" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Admisiones</h2>
                <p class="text-center">Únete a nuestra comunidad académica. Descubre el proceso de admisión y los requisitos necesarios para ser parte de la Universidad XYZ.</p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary btn-lg">Más Información</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light text-center">
        <div class="container">
            <p>&copy; 2024 Universidad XYZ. Todos los derechos reservados.</p>
            <p>
                <a href="#">Política de Privacidad</a> | 
                <a href="#">Términos de Servicio</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
