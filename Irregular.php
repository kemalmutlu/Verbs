<?php require "inc_header.php"; ?>

<div class="container">
  <div class="row">
    <div class="jumbotron mt-5">
      <h3>Irregular Verbs List</h3>
        This list contains all the irregular verbs of the English language. Each entry includes the base or bare infinitive first, followed by the simple past (V2) form and the past participle (V3) form. Taking some time to make sentences using each irregular verb form will help you to use these verbs correctly when speaking and writing. Simply reading through this list will help you to recognize an irregular verb when you see one.
      </div>
      </div>
</div>




<div class="container mt-5">
        <div class="row">

      <?php


          foreach(range('A', 'Z') as $a){
            echo '<a href="Irregular.php?harf='.$a.'" class="btn btn-lg btn-primary m-1">'.$a.'</a>';

          }
          if(isset($_GET['harf']))
          {
            echo '  <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Base Form</th>
                    <th scope="col">Past Simple (V2)</th>
                    <th scope="col">Past Participle (V3)</th>
                  </tr>
                </thead>';

            echo HarfCagir(strtolower($_GET['harf']));

          }
          else {




        ?>
      </table>


        </div>
</div>

<div class="container mt-5">
  <div class="row">
    <h2>Irregular Verbs – Complete List</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Base Form</th>
          <th scope="col">Past Simple (V2)</th>
          <th scope="col">Past Participle (V3)</th>
        </tr>
      </thead>


    <?php

      }
        if ( isset($_GET['page'])=='')
        {
          $_GET['page']=1;
        }
        $listCount = 10;
	      $viewCount = 0;
        $ifadeler = file('ifadeler.txt');
	      $total = 0;
        $status = false;

        ara(@$_GET['search']);

       if(isset($_GET["page"]))
       {
         $pageCount = $_GET["page"] * $listCount - $listCount;
       }
       else
       {
         $pageCount = 0;
       }
       foreach ($ifadeler as $ifade)
       {
          if($status)
          {
            break;
          }

          $total++;
          list($i1,$i2,$i3) = explode("," , $ifade);

	     if($pageCount < $total && $viewCount < $listCount)
       {

	         $viewCount++;
           if(!isset($_GET['search'])){
             if(isset($_GET['harf'])==""){
    ?>

        <tr>
          <th scope="row"><?=$total;?></th>
          <td><?php echo $i1; ?></td>
          <td><?php echo $i2; ?></td>
          <td><?php echo $i3; ?></td>
        </tr>
      <?php } } } } ?>
      </tbody>
    </table>
  </div>
</div>

<div class="container">
  <div class="row">
  <?php
      if(isset($_GET['harf']) == "") {
      $process = $total / $listCount;
      for($i = 1; $i < $process + 1; $i++){
        if($_GET['page'] == $i){
          echo '<a class="btn btn-success m-1" href="Irregular.php?page='.$i.'" role="button">'.$i.'</a>';
        } else {
          echo '<a class="btn btn-primary m-1" href="Irregular.php?page='.$i.'" role="button">'.$i.'</a>';
        }
      }

  ?>

  <?php } ?>
  </div>

</div>

<?php require "inc_footer.php"; ?>
