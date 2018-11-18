
<div class="container mt-5">

  <div class="row">
    <div class="col-md-12">
    <div class="alert alert-info" role="alert">
        Irregular Verb Exercises
    </div>
      </div>
      <div class="col-md-12">
    Fill the blank spaces with the appropriate irregular verb.
  </div>

    <?php
        if(isset($_POST['check'])) {
          $q1 = $_POST['q1'];
          $q2 = $_POST['q2'];
          $q3 = $_POST['q3'];
          $q4 = $_POST['q4'];
          $q5 = $_POST['q5'];
          $q6 = $_POST['q6'];
          $q7 = $_POST['q7'];
          $q8 = $_POST['q8'];
}
          ?>



    <form action="<?php $_PHP_SELF ?>" method="post">
  <div class="form-group">
    <div class="col-12">

    <ul type=1>

      <!-- 1.soru -->
    <li class="mt-2">My dog jumped out of the swimming pool and

        <input type="text"  name="q1" value="<?php  if(isset($_POST['check'])){echo $q1;}?>" placeholder="(shake, shook, shaken)">
         himself, causing water to spray everywhere.</li>

         <?php if(isset($q1)  and   trim($q1)== 'shook') {
           echo '<b class="alert alert-success">&checkmark;</b>';
         }elseif(isset($_POST['check'])) {
           echo '<b class="alert alert-danger">&cross;</b><b>Shook</b>';
         }
         ?>

    <li class="mt-2">You should have
      <input type="text"  name="q2"  value="<?php  if(isset($_POST['check'])){echo $q2;}?>"    placeholder="(saw, had seen, seen)">
      Trish’s face when she got her surprise.</li>
      <?php if(isset($q2)  and   trim($q2)== 'seen') {
        echo '<b class="alert alert-success">&checkmark;</b>';
      }elseif(isset($_POST['check'])) {
        echo '<b class="alert alert-danger">&cross;</b><b>seen</b>';
      }
      ?>


<!-- 2.soru -->
    <li class="mt-2">
      We
      <input type="text"  name="q3"  value="<?php  if(isset($_POST['check'])){echo $q3;}?>"    placeholder="(spend, spent, had spend)">
      the whole day lounging on the beach.
    </li>

      <?php if(isset($q3)  and   trim($q3)== 'spent') {
        echo '<b class="alert alert-success">&checkmark;</b>';
      }elseif(isset($_POST['check'])) {
        echo '<b class="alert alert-danger">&cross;</b><b>spent</b>';
      }
      ?>

<!-- 3.soru -->
    <li class="mt-2">Let’s
      <input type="text"  name="q4"  value="<?php  if(isset($_POST['check'])){echo $q4;}?>"    placeholder="(take, took, taken)">
      a hike on Saturday.</li>
      <?php if(isset($q4)  and   trim($q4)== 'take') {
        echo '<b class="alert alert-success">&checkmark;</b>';
      }elseif(isset($_POST['check'])) {
        echo '<b class="alert alert-danger">&cross;</b><b>take</b>';
      }
      ?>

<!-- 4.soru -->
    <li class="mt-2">My brother Mike
      <input type="text"  name="q5"  value="<?php  if(isset($_POST['check'])){echo $q5;}?>"    placeholder="(leave, left, leaving)">
      his stinky socks on the coffee table.</li>
      <?php if(isset($q5)  and   trim($q5)== 'left') {
        echo '<b class="alert alert-success">&checkmark;</b>';
      }elseif(isset($_POST['check'])) {
        echo '<b class="alert alert-danger">&cross;</b><b>left</b>';
      }
      ?>
<!-- 5.soru -->
    <li class="mt-2">This is the ninth time that pitcher has
      <input type="text"  name="q6" value="<?php  if(isset($_POST['check'])){echo $q6;}?>"    placeholder="(throw, threw, thrown)">
      a foul ball.</li>
      <?php if(isset($q6)  and   trim($q6)== 'thrown') {
        echo '<b class="alert alert-success">&checkmark;</b>';
      }elseif(isset($_POST['check'])) {
        echo '<b class="alert alert-danger">&cross;</b><b>thrown</b>';
      }
      ?>
    <li class="mt-2">The water balloon
        <input type="text"  name="q7"  value="<?php  if(isset($_POST['check'])){echo $q7;}?>"    placeholder="(burst, busted, broken)">
      when it hit its target.</li>
      <?php if(isset($q7)  and   trim($q7)== 'burst') {
        echo '<b class="alert alert-success">&checkmark;</b>';
      }elseif(isset($_POST['check'])) {
        echo '<b class="alert alert-danger">&cross;</b><b>burst</b>';
      }
      ?>
    <li class="mt-2">Jesse intentionally
      <input type="text"  name="q8"  value="<?php  if(isset($_POST['check'])){echo $q8;}?>"    placeholder="(stick, stuck, sticky)">
        gum in Jeff’s hair.</li>
        <?php if(isset($q8)  and   trim($q8)== 'stuck') {
          echo '<b class="alert alert-success">&checkmark;</b>';
        }elseif(isset($_POST['check'])) {
          echo '<b class="alert alert-danger">&cross;</b><b>stuck</b>';
        }
        ?>



    </ul>
  </div>
</div>

  <button type="submit" name="check" class="btn btn-primary">Check</button>
</form>
  </div>

</div>
</div>
