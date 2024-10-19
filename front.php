<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Página de prueba</title>
            <link href="css/bootstrap.css" rel="stylesheet">
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
            </style>
            <script src="js/bootstrap.bundle.js"></script>
            <script src="js/jquery-3.7.1.min.js"></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            
            <form>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                        Departamentos
                        </div>
                        <div class="col">
                        Acción
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <select id="lista_departamentos_xml" class="form-select">
                                    <option>Seleccione</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <button type="button" id="btn_completar_lista_xml" class="btn btn-primary mb-3">Completar lista con datos XML</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <select id="lista_departamentos_json" class="form-select">
                                    <option>Seleccione</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <button type="button" id="btn_completar_lista_json" class="btn btn-primary mb-3">Completar lista con datos JSON </button>
                        </div>
                    </div>
                </div>
            </form>

            <div>
                <table id="tbl_departamentos" style="margin:auto;width:50%;text-align:center;">
                    <thead>
                        <tr>
                            <td><b>id</b></td>
                            <td><b>Zona</b></td>
                            <td><b>Departamento</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </body>
</html>