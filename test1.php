<div class="container mt-5">
  <div class="row">
    <form action="<?php $_PHP_SELF ?>" method="post">
      <div class="form-group">

        <?php
        $x = "";
        $y = "";
        $z = "";

        if ($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            global $x , $y , $z;
            $asd = file('ifadeler.txt');
            shuffle($asd);

            list($x,$y,$z) = explode("," , $asd[0]);
            $myfile = fopen("Word-Status.txt", "w");
            $tmp = $y . "," . $z;
            fwrite($myfile ,  $tmp);



        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {

          $oku = file("Word-Status.txt");
          list($a,$b) = explode("," , $oku[0]);
          if(isset($_POST['try']) && $_POST['try'] == trim($a) or isset($_POST['try']) && $_POST['try'] == trim($b))  {
            echo '<div class="alert alert-success" role="alert">
                  True
                 </div>';
            header('Refresh:1');
          }  else
            {
              echo "<div class='alert alert-danger' role='alert'>
                    False $a $b
                   </div>";
                  header('Refresh:1');
                echo $_POST['try'];
            }
          }
        ?>


        <label for="exampleInputEmail1">
          <h1><?=$x; ?></h1>
            Can you ?
          </label>
        <input type="text" class="form-control"  name="try"  placeholder="Enter V2 OR V3">

      </div>


      <button type="submit" class="btn btn-primary">TRY IT</button>
    </form>
  </div>
</div>
