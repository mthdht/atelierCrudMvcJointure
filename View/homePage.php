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
      <table class="w3-table-all">
	<thead>
          <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Age</th>
          </tr>
	</thead>

	<tbody>
	  <?php
	  foreach ($users as $key => $user)
	  {
	  ?>
	    <tr>
	      
	      <td>
		<a href="user.php?id=<?= $user['id']; ?>"><?= $user['id']; ?> </a>
	      </td>
	      <td>
		<a href="user.php?id=<?= $user['id']; ?>"><?= $user['nom']; ?> </a>
	      </td>
	      <td>
		<a href="user.php?id=<?= $user['id'];?>" class="" title=""><?= $user['age']; ?></a>
	      </td>
	    
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

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

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
