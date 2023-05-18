<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bostrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bostrap/bootstrap.min.js"></script>
   
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/img/334018515_3413401262311897_8863148242789559263_n.jpg" alt="" class="img" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Lista de Registro</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

                    <section class="conten" >
                        <div class="container">
                        <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="card bg-warning text-center ext-bg-black">
                                        Formulario de Registro
                                    </div>
                        </div> 
                        <div class="col-md-4"></div>
                        </div>
                    </section>
                    <main>
        <div class="container">
            <div class="card">
                <h5 class="card-header">Registro de clientes</h5>
                <div class="card-body">
                        <div class="container1">
                            <div class="row g-3">
                                <div class="col-12">
                                    <form id = "frmData">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="nombre" class="form-label">Nombre(s) del candidato</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">                  
                                            </div>
                                            <div class="col-6">
                                                <label for="apellidos" class="form-label">Apellido(s) del candidato</label>
                                                <input type="text" class="form-control" id="apellidos" name="apellidos">
                                            </div>
                                            <div class="row g-3">
                                            <div class="col-6">
                                                <label for="email" class="form-label">Email del candidato</label>
                                                <input type="email" class="form-control" id="email" name="email">                  
                                            </div>
                                            <div class="col-6">
                                                <label for="telefono" class="form-label">Telefono de Contacto del candidato</label>
                                                <input type="text" class="form-control" id="telefono" name="telefono">
                                            </div>
                                            <div class="row g-3">
                                            <div class="col-6">
                                                <label for="nivelEst" class="form-label">Nivel de estudio del candidato</label>
                                                <select class="form-select" aria-label="Default select example" id="nivelEst" name="nivelEst">
                                                    <option selected>Seleccione el nivel de estudio</option>
                                                    <option value="1">Bachiller</option>
                                                    <option value="2">Tecnico</option>
                                                    <option value="3">Tecnologo</option>
                                                    <option value="4">Profesional</option>
                                                    <option value="5">Estudiante Universitario</option>
                                                </select>                  
                                            </div>
                                            <div class="col-6">
                                                <label for="nivelIng" class="form-label">Nivel de ingles del candidato</label>
                                                <select class="form-select" aria-label="Default select example" id="nivelIng" name="nivelIng">
                                                    <option selected>Seleccione el nivel de ingles</option>
                                                    <option value="1">Basico</option>
                                                    <option value="2">Intermedio</option>
                                                    <option value="3">Avanzado</option>
                                                </select>                  
                                            </div>
                                            <div class="row g-3">
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="python">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                    Python
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="html">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                HTML
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="js">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                JavaScript
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="css">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                CSS
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row g-3">
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="php">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                    Php
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="nodejs">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                nodeJs
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="c">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                C#
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="typeScript">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                TypeScript
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="container mt-4 text-center" >
                                                <input type="submit" data-accion="POST" class="btn btn-primary" value="Guardar Clientes">
                                                <input type="delete" data-accion="POST" class="btn btn-primary" value="Borrar">
                                                
                                            </div>
                                        </div>
                                    </form>                         
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>


</body>
</html>