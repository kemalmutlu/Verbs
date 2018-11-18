
<div class="container mt-5">

  <div class="row">
    <div class="col-md-12">
    <div class="alert alert-info" role="alert">
        Irregular Verb Exercises
    </div>

    Fill the blank spaces with the appropriate irregular verb.
  </div>


    <?php
        if(isset($_POST['check'])) {
          $q1 = $_POST['q1'];
          echo $q1;
        }


    ?>


    <form action="<?php $_PHP_SELF ?>" method="post">
  <div class="form-group">
    <ul type=1>


    <li class="mt-2">My dog jumped out of the swimming pool and
    <input type="text"  name="q1" placeholder="(shake, shook, shaken)">
    himself, causing water to spray everywhere.</li>

    <li class="mt-2">You should have
      <input type="text"  name="q2"  placeholder="(saw, had seen, seen)">
      Trish’s face when she got her surprise.</li>
    <li class="mt-2">
      We
      <input type="text"  name="q3"  placeholder="(spend, spent, had spend)">
      the whole day lounging on the beach.
    </li>
    <li class="mt-2">Let’s
      <input type="text"  name="q4"  placeholder="(take, took, taken)">
      a hike on Saturday.</li>


    <li class="mt-2">My brother Mike
      <input type="text"  name="q5"  placeholder="(leave, left, leaving)">
      his stinky socks on the coffee table.</li>


    <li class="mt-2">This is the ninth time that pitcher has
      <input type="text"  name="q6" placeholder="(throw, threw, thrown)">
      a foul ball.</li>

    <li class="mt-2">The water balloon
        <input type="text"  name="q7"  placeholder="(burst, busted, broken)">
      when it hit its target.</li>

    <li class="mt-2">Jesse intentionally
      <input type="text"  name="q8"  placeholder="(stick, stuck, sticky)">
        gum in Jeff’s hair.</li>




    </ul>
  </div>

  <button type="submit" name="check" class="btn btn-primary">Check</button>
</form>
  </div>
</div>
</div>
