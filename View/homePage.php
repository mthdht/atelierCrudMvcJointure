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
    <h2 class="main w3-container w3-margin">
      <h2 class="w3-padding"> Utilisateurs <button class="w3-button w3-green w3-margin-left w3-medium" id="addUser">Add User</button></h2>
      <form action="user.php" method="post" id="formAddUser" class="w3-margin" style="display:none">

	<input name="nom" type="text" value="" placeholder="Name" class="w3-input w3-col m7" /> <br/>
	<input name="password" type="password" value="" placeholder="****" class="w3-input w3-col m7" /> <br/>
	<input name="age" type="number" value="" placeholder="Ex: 17" class="w3-input w3-col m7" /> <br/>
	
	<input type="submit" value="Submit" class="w3-button w3-green w3-margin" >
      </form> 
      <table class="w3-table-all w3-margin">
	<thead>
          <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Age</th>
	    <th>Action</th>
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
	      <td>
		<form action="user.php" method="post" class="" style="">
		  <input name="delete" type="hidden" value="<?= $user['id'];?>"/>
		  <input class="w3-button w3-red" id="" type="Submit" name="" value="Supprimer"/>
		</form>
		
	      </td>
	        
	      </tr>
	    <?php
	    }
	    ?>
	</tbody>
                        </table>


      <!-- <h2 class="w3-padding"> articles  <button class="w3-button w3-green w3-margin-left w3-medium" id="addArticle">Add Article</button></h2>

	   <form action="article.php" method="post" id="formAddArticle" class="w3-margin" style="display:none">

	   <input name="titre" type="text" value="" placeholder="titre de l article" class="w3-input w3-col m7" /> <br/>
	   <textarea name="description" id="" rows="" cols="" tabindex="" placeholder="une description de l article" class="w3-input w3-col m7"></textarea>
	   <input name="date" type="date" value="" placeholder="YYYY-MM-DD" class="w3-input w3-col m7 w3-margin-bottom" /> <br/>
	   
	   <select id="" name="user_id" class="w3-select">
	   <?php
	   foreach($users as $key => $user)
	   {
	   ?>
	   <option value="<?php echo $user['id'] ?>"><?php echo $user['id'] ?></option>
	   <?php 
	   }
	   ?>
	   </select>
	   <input type="submit" value="Submit" class="w3-button w3-green w3-margin" >
	   </form> 
	   <table class="w3-table-all w3-margin">
	   <thead>
           <tr>
           <th>id</th>
           <th>titre</th>
           <th>description</th>
	   <th>date</th>
	   <th>Action</th>
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
	   <td>
	   <form action="article.php" method="post" class="" style="">
	   <input name="delete" type="hidden" value="<?= $article['id'];?>"/>
	   <input class="w3-button w3-red" id="" type="Submit" name="" value="Supprimer"/>
	   </form>
	   </td>
	   
	   </tr>
	   <?php
	   }
	   ?>
	   </tbody>
      </table> -->
      
    
    <!--main page -->

    <!-- footer of page -->
    <footer>

    </footer>
    <!-- footer of page -->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
     document.getElementById('addUser').addEventListener("click", displayFormUser);
     document.getElementById('addArticle').addEventListener("click", displayFormArticle);

     function displayFormUser() {
	 if (document.getElementById('formAddUser').style.display == 'block') {
	     document.getElementById('formAddUser').style.display = 'none';
	 } else document.getElementById('formAddUser').style.display = 'block';
     }

     function displayFormArticle() {
	 if (document.getElementById('formAddArticle').style.display == 'block') {
	     document.getElementById('formAddArticle').style.display = 'none';
	 } else document.getElementById('formAddArticle').style.display = 'block';
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
