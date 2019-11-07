<!DOCTYPE html>
<html>
<head>
<title>Contacto</title>
	<meta charset="utf-8">
	<meta name="viewport"  content="width=device/width, initial-scale=1, shrink-to-fit=no"></meta>
	<meta http-equiv="x-ua-compatible" content="ie-edge">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/Contacto.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
    
    <style>

      body {
  padding: 20px 0;
  font-family: Lato, sans-serif;
}
.parallax {
  /* The image used */
  background-image: url("img/panelHome.jpg");

  /* Set a specific height */
  height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

</head>




<body>



<div class="container"><!-- Bloque de menu -->

	
	<div class="row  align-items-start border-bottom mt-30"   >

			<div class="col-9 col-sm-6 col-md-6 col-lg-8">
			<nav class="navbar navbar-expand-md bg-light" >  
				<ul class="navbar-nav">
					<li class="navbar-brand"><a href="#pruebaBootsrap.html">SUNLIGHT</a></li>

					<li class="nav-item"><a href="#horario" class="nav-link">Catalógo</a></li>
                    <li class="nav-item"><a href="#ubicacion" class="nav-link">Contactenos</a></li>
                    <li class="nav-item"><a href="#ubicacion" class="nav-link">Empresa</a></li>
					
				</ul>

			</nav>
		</div>


		<div class="col-3 col-sm-6 col-md-6 col-lg-4 align-self-center  ">
		<form action="" method="POST" class="form-inline">
			<!--<h5 class="text-dark"> Buscar:&nbsp; &nbsp; </h5>  <input type="text" placeholder="Cedula" class="form-control mr-sm-2" ></input> -->
		</form>
		</div>


	</div>
</div><!-- Bloque de menu final -->




<div class="container-fluid parallax" ><!-- Bloque 1 -->
	<div class="row pt-5">
		<div class="col-12 col-md-2 bg-dark d-none d-sm-none d-md-block"></div>
		<div class="col-12 col-md-4 bg-light align-self-center pl-5">
			
			<h3>SUNLIGHT</h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			

			</p>

		</div>
		
		<!--<div class="col-12 col-md-6 d-none d-sm-none d-md-block justify-content-center parallax ">
			
		<img src="img/gym2.jpg" class="rounded img-fluid">

		</div> -->
</div>
</div> <!-- Bloque 1 Final-->

<div class="container mt-5 >"

    <div class="row">
<h3 class="text-center text-uppercase">Contáctanos</h3>
        <p class="text-center w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales. Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam.</p>
      <div class="col-lg-8 col-lg-offset-2 mx-auto mt-1">


        <form id="contact-form" method="post" data-toggle="validator" action="" role="form">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name ">Nombre *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Porfavor ingresa tu nombre *" required="required" data-error="El nombre es requerido.">
                <div class="help-block with-errors text-danger"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Apellido *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control " placeholder="Porfavor ingresa tu apellido *" required="required" data-error="El apellido es requerido.">
                <div class="help-block with-errors text-danger"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Porfavor ingresa tu email *" required="required" data-error="Un Email valido es requerido.">
                <div class="help-block with-errors text-danger"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_phone">Teléfono</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Porfavor ingresa tu teléfono">
                <div class="help-block with-errors text-danger"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Mensaje *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Escriba su mensaje aquí *" rows="4" required data-error="Porfavor escribe un mensaje."></textarea>
                <div class="help-block with-errors text-danger"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Enviar mensaje">
            </div>
          </div>
         
        </div>

        </form>

      </div>

    </div>

  </div> <!--Fin div de contacto -->

<section id="contact"> <!-- Div de info contacto-->
       <div class="container mx-auto">
           
           
           <div class="row pl-5 pr-5">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5 mx-auto">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Llámanos</h4>
                    <p>11223344</p>
                  </div>
                </div>
             </div>
         
             <div class="col-sm-12 col-md-6 col-lg-3 my-5 mx-auto">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Email</h4>
                    <p>http://al.a.noman1416@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section><!-- Fin Div de info contacto-->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



<!-- Footer -->
<div class="container border-top border-left bo">
<div class="row">
	<div class="col-8  pt-3">
		<h6>Telefonos:</h6><p> 1234-1234 <br>7894-7894</p>
	</div>
	<div class="col-4  pt-3">
		<h6>Redes sociales</h6><p>Facebook instagram</p>
	</div>
</div>
</div>

<!-- footer final -->









</body>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js'></script>

<!--
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery.js"></script> -->
</body>

</html>						