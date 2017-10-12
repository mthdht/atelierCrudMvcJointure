<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="MthDht"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link href="custom.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- header of page -->
    <header>
      <nav>
	
      </nav>
    </header>
    <!-- header of page -->

    <!--main page -->
    <section class="main w3-container w3-margin">
      <h2 class="w3-padding"> Utilisateur </h2>
      <table class="w3-table-all">
		<thead>
	<tr>
	<th>id</th>
	<th>Nom</th>
		<th>password</th>
	<th>Age</th>
          </tr>
	</thead>

		<tbody>
		
		<tr>
		
		<td>
			<a href="user.php?id=<?= $user['id']; ?>"><?= $user['id']; ?> </a>
	      </td>
		<td>
			<a href="user.php?id=<?= $user['id']; ?>"><?= $user['nom']; ?> </a>
	      </td>
		<td>
			<a href="user.php?id=<?= $user['id'];?>" class="" title=""><?= $user['password']; ?></a>
	      </td>
		<td>
			<a href="user.php?id=<?= $user['id'];?>" class="" title=""><?= $user['age']; ?></a>
	      </td>

		<td><button class="w3-button w3-orange" id="edit">Editer</button></td>
	    </tr>
		
	</tbody>
            </table>

      <form action="user.php?id=<?= $user['id']; ?>" method="post" id="form" class="w3-margin" style="display:none">

	<input name="nom" type="text" value="<?=$user['nom']; ?>" placeholder="" class="w3-input w3-col m7" /> <br/>
	<input name="password" type="password" value="<?=$user['password']; ?>" placeholder="" class="w3-input w3-col m7" /> <br/>
	<input name="age" type="number" value="<?=$user['age']; ?>" placeholder="" class="w3-input w3-col m7" /> <br/>
	
	<input type="submit" value="Submit" class="w3-button w3-green w3-margin" >
      </form> 
    </section>

    <section class="w3-container w3-margin">
      <h2 class="w3-padding"> Ses articles </h2>
      <table class="w3-table-all">
	<thead>
          <tr>
            <th>id</th>
            <th>titre</th>
	    <th>description</th>
            <th>date</th>
          </tr>
	</thead>

	<tbody>
	  <?php
	  foreach ($articles as $key => $article)
	  {
	  ?>
	    
	    <tr>
	      
	      <td>
		<a href="article.php?id=<?= $article['id']; ?>"><?= $article['id']; ?> </a>
	      </td>
	      <td>
		<a href="article.php?id=<?= $article['id']; ?>"><?= $article['titre']; ?> </a>
	      </td>
	      <td>
		<a href="article.php?id=<?= $article['id'];?>" class="" title=""><?= $article['description']; ?></a>
	      </td>
	      <td>
		<a href="article.php?id=<?= $article['id'];?>" class="" title=""><?= $article['date']; ?></a>
	      </td>

	      <td><button class="w3-button w3-orange" id="edit">Editer</button></td>
	    </tr>
	  <?php 
	  }
	  ?>
	  
	  
	</tbody>
      </table>
    </section>
    <!--main page -->

    <!-- footer of page -->
    <footer>

    </footer>
    <!-- footer of page -->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script type="text/javascript">
     document.getElementById('edit').addEventListener("click", displayForm);

     function displayForm() {
	 if (document.getElementById('form').style.display == 'block') {
	     document.getElementById('form').style.display = 'none';
	 } else document.getElementById('form').style.display = 'block';
     }
    </script>
    

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
     (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
         function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
         e=o.createElement(i);r=o.getElementsByTagName(i)[0];
         e.src='//www.google-analytics.com/analytics.js';
         r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
</html>
