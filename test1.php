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

          if ($_POST['try'] == $a || $_POST['try'] == $b)
          {
            echo '<div class="alert alert-success" role="alert">
                  Doğru
                 </div>';
            header("Refresh:1.3");
          }
          else
          {
            echo "<div class='alert alert-danger' role='alert'>
                  Yanlış $a $b
                 </div>";
            header("Refresh:1.3");
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