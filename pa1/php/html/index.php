<?php
   // Include the Smarty Templating Engine
   define('SMARTY_DIR', __DIR__ . '/Smarty-3.1.14/libs/');
   require_once(SMARTY_DIR . 'Smarty.class.php');
   $smarty = new Smarty();

   $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
   $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
   $smarty->setConfigDir(__DIR__ . '/templates/configs/');
   $smarty->setCacheDir(__DIR__ . '/templates/cache/');

   // Notice how you can set variables here in the PHP that will get carried into the template files
   $smarty->assign('title', "EECS485");


   // Setup the Routing Framework
   require_once __DIR__ . '/vendor/autoload.php';
   $klein = new \Klein\Klein();


   /* Define routes here */

   $klein->respond('GET', '/', function ($request, $response, $service) use ($smarty) {

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      $query = "SELECT * FROM User;"; 
      $result = mysql_query($query, $con); 
      $num = mysql_num_rows($result);


      $output = "<form name='input' action='albums' method='get'>";
      $output = $output . "<p>Select User</p>";
      $output = $output . "<select name='username'>";

      for ($i = 0; $i < $num ; ++$i) { 

        $user = mysql_result($result, $i,"username");  
        $output = $output . " <option value = '$user'>$user</option> ";
      }       

      $output = $output . "</select>";
      $output = $output . "<input type = 'submit' value='Submit'></form>";

      $smarty->assign('output', $output);

      $smarty->display('index.tpl');
   });

   $klein->respond('GET', '/pic\?[:id]?', function ($request, $response, $service) use ($smarty) {

     // Notice how you can set variables here in the PHP that will get carried into the template files
     $smarty->assign('picid', $request->id);



     $smarty->display('pic.tpl');
   });

   $klein->respond('GET', '/album\?[:id]?', function ($request, $response, $service) use ($smarty) {

      $albumid = $_GET['id'];
      $output;

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      $query = "SELECT * FROM Contain where albumid = " . $albumid . ";"; 
      $result = mysql_query($query, $con); 
      $num = mysql_num_rows($result);

      for ($i = 0; $i < $num ; ++$i) { 

        $picid = mysql_result($result, $i, 'picid');

        $query2 = "SELECT * FROM Photo WHERE picid = '" . $picid . "';";
        $result2 = mysql_query($query2, $con);

        $picurl = mysql_result($result2, 0, 'url');

        $output = $output . "<img src='$picurl' /> <br>";
      } 

      $smarty->assign('output', $output);

      $smarty->display('album.tpl');
   });

   $klein->respond('GET', '/albums\?[:username]?', function ($request, $response, $service) use ($smarty) {

      $username = $_GET['username'];
      $smarty->assign('user', $username);

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      $query = "SELECT * FROM Album where username = '" . $username . "';"; 
      $result = mysql_query($query, $con); 
      $num = mysql_num_rows($result);

      $output = '<body><table border=\"1\">';
      $output = $output . "<tr> <td><b> Album </b></td> <td><b> View Album</b></td> </tr> ";

      for ($i = 0; $i < $num ; ++$i) { 

        $title = mysql_result($result, $i,"title");  
        $id = mysql_result($result, $i, "albumid");

        $output = $output . "<tr><td> $title </td> 
                             <td> <form action='/album' method='get'>
                                  <input type='submit' value='View'/> 
                                  <input type='hidden' name='id' value='$id'/> 
                                  </form> 
                              </td> </tr>";
      } 
        $output = $output . '</table></body>';


       //Edit Albums button
      $output = $output." <form action='/albums/edit' method='get'> 
        <input type='hidden' name='username' value = '$username'/>
        <input type='submit' value='Go to Edit' />
        </form>";

       $smarty->assign('output', $output);

      mysql_close(); 

      $smarty->display('albums.tpl');
   });

 $klein->respond('GET', '/albums/edit\?[:username]?', function ($request, $response, $service) use ($smarty) {

      $username = $_GET['username'];
      $smarty->assign('user', $username);

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      $query = "SELECT * FROM Album where username = '".$username."';"; 
      $result = mysql_query($query, $con); 
      $num = mysql_num_rows($result);

      $output = '<body><table border=\"1\" >';
      $output = $output."<tr> <td> <b> Album </b> </td> 
                              <td> <b> Edit </b> </td> 
                              <td> <b> Delete </b> </td> </tr> 
      <form action='edit' method='POST'>";

      for ($i = 0; $i < $num ; ++$i) { 
        
        $albumid = mysql_result($result,$i,"albumid");
        $title = mysql_result($result,$i,"title");  
        $output = $output."<tr><td> $title </td>
					"//Edit Album Button
					."
        <td>
          <form action='/albums/edit' method='GET'> 
          <input type='hidden' name='id' value = '$albumid'/>
          <input type='submit' value='Edit' />
          </form>
        </td>
        <td> <input type='submit' value='Delete'/> 
             <input type='hidden' name='op' value='delete'  />
             <input type='hidden' name='username' value='$username'/>
             <input type='hidden' name='albumid' value = '$albumid'/> 
        </td> </tr> ";
      }     
       $output = $output."</form></table></body>";

       //Post method to add new album
       $output = $output."<form action='edit' method='POST'>
          <input type='hidden' name='op' value='add'  />
          <input type='hidden' name='username' value='$username'/>
          <input type='text' name='title' />
          <input type='submit'value='Add Album'/>
      </form>";

      /*Need some type of way to go back to the albums view from albums/edit mode*/
      $output = $output . "<form action='/albums' method='get'>
                <input type='submit' value='Exit Edit Mode' />
                <input type='hidden' name='username' value = '$username'/>";

       $smarty->assign('output', $output);

       $smarty->display('albumedit.tpl');
       mysql_close(); 
  });

  $klein->respond('POST', '/albums/edit', function ($request, $response, $service) use ($smarty) {

      $username= $_POST['username'];
      $id = $_POST['albumid'];
      $op = $_POST['op'];
      $title = $_POST['title'];

      echo "$username - $id - $title -$op<br>";

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      if(strcmp($op, "add") == 0)
      {
        $query = "INSERT into Album (title, created, lastupdated, username)
         values ('$title', curdate(), curdate(), '$username');";
         mysql_query($query, $con);
      }

      if(strcmp($op, "delete") == 0)
      {
        $query = "DELETE from Album where albumid = $id;";
         mysql_query($query, $con);
      }


      $smarty->assign('output', $output);
      $smarty->assign('user', $username);
      mysql_close(); 


      //$smarty->display('albumedit.tpl');
      
      //This code sends the user back to the get request part of the website.
      //For some reason we needed 2 of these for it to actually work.
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
  });


    // Working...
 $klein->respond('GET', '/albums/edit\?[:id]?', function ($request, $response, $service) use ($smarty) {

      $albumid = $_GET['id'];
      $output;

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      $query = "SELECT * FROM Contain where albumid = " . $albumid . ";"; 
      $result = mysql_query($query, $con); 
      $num = mysql_num_rows($result);

      for ($i = 0; $i < $num ; ++$i) { 

        $picid = mysql_result($result, $i, 'picid');

        $query2 = "SELECT * FROM Photo WHERE picid = '" . $picid . "';";
        $result2 = mysql_query($query2, $con);

        $picurl = mysql_result($result2, 0, 'url');

        $output = $output . "<img src='$picurl' /> <br>";
        $output = $output . "
         <input type='submit' value='Delete'/> 
             <input type='hidden' name='op' value='delete'  />
             <input type='hidden' name='username' value='$username'/>
             <input type='hidden' name='albumid' value = '$albumid'/> ";
        
      } 

      $smarty->assign('output', $output);

      $smarty->display('albumedit.tpl');
   });

   $klein->dispatch();

?>
