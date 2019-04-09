 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">



      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      	.info{
      		position: relative;
      	}

      	.user-in{
      		padding: 10px;
      		background:red;
      		height: 41rem;
      		text-align: center;
      		color:white;
      	}

      	.user-in img{
      		position: relative;
      		width: 30%;
      		border-radius: 300px;
      		margin-top:8%;
      	}
      	.about{
      		color:white;
      		padding: 10px;
      		background:aqua;
      		text-align: center;
      	}

      	.price{
      		background: red;
      		margin-top:50px;
      		color:white;
      		height: 120px;
      	}

      	.head-about{
      		font-size: 30px;
      		text-align: center;
      		color: white;
      	}

      	.price i.fa-clock{
      		color:white;
      		font-size: 30px;
      		margin-top:10px;
      	}

      	.price i.fa-cogs{
      		color:white;
      		font-size: 30px;
      		margin-top:10px;
      	}

      	.price i.fa-headset{
      		      		color:white;
      		font-size: 30px;
      		margin-top:10px;

      	}

      	.price i.fa-credit-card{

      	    color:white;
      		font-size: 30px;
      		margin-top:10px;
      	}

      </style>
    </head>


    <body>

		 <nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">EFSE-TEAM</a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="sass.html">Home</a></li>
		        <li><a href="badges.html">About</a></li>
		        <li><a href="collapsible.html">Galery</a></li>
		        <li><a href="mobile.html">Contac us</a></li>
		      </ul>
		    </div>
		  </nav>

		  <ul class="sidenav" id="mobile-demo">
		        <li><a href="sass.html">Home</a></li>
		        <li><a href="badges.html">About</a></li>
		        <li><a href="collapsible.html">Galery</a></li>
		        <li><a href="mobile.html">Contac us</a></li>
		  </ul>

		  <div class="info">
		  	<div class="user-in">
		  		<img src="https://srv4.imgonline.com.ua/result_img/imgonline-com-ua-shape-qe6TTUxShqLdJK.png">
		  		<p>Saepudin</p>
		  	</div>
		  </div>


			<div class="about">
				<div class="head-about">
					About ME
				</div>
				<p>Kenapa Memilih Kami ? . Pelayanan Kami Cepat dan Tepat Waktu . Kami Selalu Sedia Melayani Keluhan Anda</p>
		    <div class="row">

			      <div class="col s12 m3">
			      	<div class="price">
			       		<i class="far fa-clock"></i>
			       		<p>FAST RESPONSE</p>
			        </div>
			      </div>

			      <div class="col s12 m3">
			      	<div class="price">
			       		<i class="fas fa-headset"></i>
			       		<p>24/7 Support</p>
			        </div>
			      </div>

			      <div class="col s12 m3">
			      	<div class="price">
			       		<i class="fas fa-cogs"></i>
			      		  <p>MAINTEANCE</p>
			        </div>
			      </div>

			      <div class="col s12 m3">
			      	<div class="price">
			       		<i class="far fa-credit-card"></i>
			       		<p>Harga Kompetitif</p>
			        </div>
			      </div>

   				</div>
	 	  	</div>






        <script
          src="https://code.jquery.com/jquery-3.3.1.js"
          integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
          crossorigin="anonymous"></script>

	<script type="text/javascript">
		  $(document).ready(function(){
	    $('.sidenav').sidenav();
	  });

		    $(document).ready(function(){
    $('.slider').slider();
  });

	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
