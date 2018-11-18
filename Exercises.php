<?php require "inc_header.php"; ?>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
    <div class="card" style="width: 18rem;">

        <div class="card-body">
          <form action="<?php $_PHP_SELF ?>" method="get">
          <h5 class="card-title">What Are Irregular Verbs? </h5>
          <p class="card-text">Irregular verbs are verbs that don’t take on the regular –d, -ed, or -ied spelling patterns of the past simple (V2) or past participle (V3). </p>
          <button name="test1" class="btn btn-primary">TRY IT</button>
        </form>
        </div>
      </div>
    </div>

    <div class="col-md-4">

        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <form action="<?php $_PHP_SELF ?>" method="get">
            <h5 class="card-title">Irregular Verb Exercises  </h5>
            <p class="card-text">Fill the blank spaces with the appropriate irregular verb. </p>
            <button name="test2" class="btn btn-primary">TRY IT</button>
          </form>
          </div>
        </div>
      </div>

  </div>
</div>

<?php
      if(isset($_GET['test1']))
      {
        require "test1.php";
      }
      if(isset($_GET['test2']))
      {
        require "test2.php";
      }


 ?>








<?php require "inc_footer.php"; ?>
