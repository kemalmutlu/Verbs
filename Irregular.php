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
      <tbody>
        <?php
    	$listCount = 5;
      $count = 0;
	    $viewCount = 0;
      $ifadeler = file('ifadeler.txt');
	    $total = 0;
	     if(isset($_GET["page"])){ $pageCount = $_GET["page"] * $listCount - $listCount; }else{ $pageCount = 0; }
          foreach ($ifadeler as $ifade) {
		          $total++;

          list($i1,$i2,$i3) = explode("\t" , $ifade);
          $count+=1;
	     if($pageCount < $count && $viewCount < $listCount){
	         $viewCount++;
          ?>
        <tr>
          <th scope="row"><?=$count;?></th>
          <td><?php echo $i1; ?></td>
          <td><?php echo $i2; ?></td>
          <td><?php echo $i3; ?></td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
  </div>
</div>


<div class="container">
  <div class="row">
  <?php
$process = $total / $listCount;

for($i = 1; $i < $process + 1; $i++){
  if($_GET['page'] == $i){
    echo '<a class="btn btn-success m-1" href="Irregular.php?page='.$i.'" role="button">'.$i.'</a>';
  } else {
    echo '<a class="btn btn-primary m-1" href="Irregular.php?page='.$i.'" role="button">'.$i.'</a>';
  }

?>

  <?php } ?>
  </div>

</div>

<?php require "inc_footer.php"; ?>
