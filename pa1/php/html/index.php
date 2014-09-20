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

     $albumid = $_GET['albumid'];
     $picid = $_GET['id'];
     $output;
     // Connectivity stuff
      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);


        $query2 = "SELECT * FROM Photo WHERE picid = '" . $picid . "';";
        $result2 = mysql_query($query2, $con);


        $picurl = mysql_result($result2, 0, 'url');
        $picid = mysql_result($result2, 0, 'picid');
        

      
      //"SELECT * FROM Contain WHERE picid = '" . $picid . "' and sequencenum = ".$next .";";
      $query = "SELECT * FROM Contain WHERE picid = '" . $picid . "';";

      $result = mysql_query($query, $con);
      $samealbumid = mysql_result($result, 0, 'albumid');
      $sequencenum = mysql_result($result, 0, 'sequencenum');
      $queryformax = "Select MAX(sequencenum) from Contain where albumid = ".$samealbumid.";";
      $result = mysql_query($query, $con);
      $maxcol = mysql_result($queryformax, 0, 'sequencenum');

      $next = $sequencenum + 1;
      $prev = $sequencenum - 1;
      $query = "SELECT * FROM Contain WHERE albumid = " . $samealbumid . " and sequencenum = ".$next .";";
      $nextresult = mysql_query($query, $con);

      
      while(mysql_num_rows($nextresult) == 0 && $next < 2000)//should fix next
      {
        $next = $next + 1;
        $query = "SELECT * FROM Contain WHERE albumid = '" . $samealbumid .
        "' and sequencenum = '".$next ."';";
        $nextresult = mysql_query($query, $con);
        echo "$next";
      }
      $nextpicid = mysql_result($nextresult, 0, 'picid');

      $query = "SELECT * FROM Photo WHERE picid = '" . $nextpicid . "';";
      $result = mysql_query($query, $con);

      $nextpicurl = mysql_result($result, 0, 'url');
        $nextbutton = "
              <form action='/pic' method='get'>
               <input type='submit' value='Next'/>
               <input type='hidden' name='id' value='$nextpicid'/>
               </form> <br>"; //If the user clicks on a photo they see the next /pic view.


      $query = "SELECT * FROM Contain WHERE albumid = " . $samealbumid . " and sequencenum = ".$prev .";";
      $prevresult = mysql_query($query, $con);

      
      while(mysql_num_rows($prevresult) == 0 && $prev >= 0)
      {
        $prev = $prev - 1;
        $query = "SELECT * FROM Contain WHERE albumid = '" . $samealbumid .
        "and sequencenum = ".$prev ."';";
        $prevresult = mysql_query($query, $con);
      }

      $prevpicid = mysql_result($prevresult, 0, 'picid');
      //echo "$prevpicid";
      $query = "SELECT * FROM Photo WHERE picid = '" . $prevpicid . "';";
      $result = mysql_query($query, $con);

        $prevbutton = 
              "<form action='/pic' method='get'>
               <input type='submit' value='Previous'/> 
               <input type='hidden' name='id' value='$prevpicid'/>
               </form> <br>"; //If the user clicks on a photo they see the previous /pic view.

        $output = "<img src='$picurl'/>";

     $smarty->assign('picid', $picid);

      $smarty->assign('output', $output);
      if(mysql_num_rows($nextresult) != 0)
      {
         $smarty->assign('nextbutton', $nextbutton);
      }

      if(mysql_num_rows($prevresult) != 0)
      {
          $smarty->assign('prevbutton', $prevbutton);
      }

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
        $picid = mysql_result($result2, 0, 'picid');

        $output = $output . 
              "<p>$picid</p>
              <form action='/pic' method='get'>
               <input type='submit' value='View Picture'/>  
               <img src='$picurl'/>
               <input type='hidden' name='id' value='$picid'/>
               </form> <br>"; //If the user clicks on a photo they see the /pic view.
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



//==================================================================================================================
//Below is the Albums/Edit get and post requests.

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
                              <td> <b> Delete </b> </td> </tr>"; 

      for ($i = 0; $i < $num ; ++$i) { 
        
        $albumid = mysql_result($result,$i,"albumid");
        $title = mysql_result($result,$i,"title");  
        $output = $output."<tr><td> $title </td>"

        //Edit Album
        ."<td>
          <form action='/album/edit' method='GET'> 
          <input type='hidden' name='id' value = '$albumid'/>
          <input type='submit' value='Edit' />
          </form>
        </td>"
        //Post method to delete Album
        ."
        <td> <form action='edit' method='POST'>
             <input type='submit' value='Delete'/> 
             <input type='hidden' name='op' value='delete'  />
             <input type='hidden' name='username' value='$username'/>
             <input type='hidden' name='albumid' value = '$albumid'/>
             </form> 
        </td> </tr> ";
      }     
       $output = $output."</table></body>";

       //Post method to add new album
       $output = $output."<form action='edit' method='POST'>
          <input type='hidden' name='op' value='add'  />
          <input type='hidden' name='username' value='$username'/>
          <input type='text' name='title' />
          <input type='submit'value='Add Album'/>
      </form>";

      //Button used to go back to Album view
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

      if(strcmp($op, "add") == 0 && strcmp($title, "") != 0)
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
      
      //This code sends the user back to the get request part of the website.
      //For some reason we needed 2 of these for it to actually work.
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
  });


//==================================================================================================================
//Below is the Album/Edit get and post request.

   //This is used to edit individual albums. User should upload new pictures here or delete pictures from an album.
   //**Still need to make the post request to add or delete pictures, just like we did for Albums.  
   //When you insert a picture, need to add it to Photo and also need to add the album/picure to Contain.
   $klein->respond('GET', '/album/edit\?[:id]?', function ($request, $response, $service) use ($smarty) {

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

      //Allows user to select a photo to upload
      $output = $output . "<form method='post' action='/album/edit' enctype='multipart/form-data' >
            <label for='file'>Filename:</label>
            <input type='file' name='file' id='file' accept='image/*' />
            <input type='hidden' name='op' value='add' />
            <input type='submit' name='submit' value='Upload Photo' />
            </form> <br>";


      for ($i = 0; $i < $num ; ++$i) { 

        $picid = mysql_result($result, $i, 'picid');

        $query2 = "SELECT * FROM Photo WHERE picid = '" . $picid . "';";
        $result2 = mysql_query($query2, $con);

        $picurl = mysql_result($result2, 0, 'url');

        $output = $output . "<form method = 'post' action='/album/edit'>
         <input type='submit' value='Delete'>
         <input type='hidden' name='op' value='delete'  />
				 <input type='hidden' name='picid' value = '$picid'/>
				 <input type='hidden' name='albumid' value = '$albumid'/> 
         </form>
         <div class=\"albumview\">
           <img src='$picurl'/>
         </div>
         <br>";

      } 

      $smarty->assign('output', $output);

      $smarty->display('albumpicedit.tpl');
   });

  
  $klein->respond('POST', '/album/edit', function ($request, $response, $service) use ($smarty) {

      $picid = $_POST['picid'];
      $albumid = $_POST['albumid'];
      $op = $_POST['op'];
      $filename = $_FILES["file"]["name"];


      echo "picid: $picid <br> 
            albumid: $albumid <br>
            operator: $op <br>
            filename: $filename <br>
            filetype: $filetype <br>";

      $user="group45"; 
      $password="nas485"; 
      $database="group45"; 
      $con = mysql_connect('127.0.0.1',$user,$password) or die('Could not connect: ' . mysql_error());
      mysql_select_db($database, $con);

      if(strcmp($op, "add") == 0)
      {
          // $query = "INSERT INTO Photo (parameters) VALUES (values)";
      }

      if(strcmp($op, "delete") == 0)
      {
        // $query = "DELETE from Contain where picid = '$picid';";
        // mysql_query($query, $con);

        // $query = "DELETE FROM Photo WHERE picid= '$picid';";
        // mysql_query($query, $con);
      }


      $smarty->assign('output', $output);
      $smarty->assign('albumid', $albumid);
      mysql_close(); 
      
      // This code sends the user back to the get request part of the website.
      // For some reason we needed 2 of these for it to actually work.
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
        // die;
  });





   $klein->dispatch();

?>
