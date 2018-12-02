
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

          $arrAnswers = array();

          $arrVerbs = file('answers.txt');

          foreach($arrVerbs as $Verbs) {
            list($a,$b,$c) = explode(",",$Verbs);
            $arrAnswers[$a] = $Verbs;
            }
            
            function SelectBox($search , $true , $key){
              global $arrAnswers;
              list($a,$b,$c) = explode(",",$arrAnswers[$search]);
              return "<select name='cevap' onchange='control(this.value,$true,$key)'>
                      <option value='0'>Select</option>
                      <option value='1'>$a</option>
                      <option value='2'>$b</option>
                      <option value='3'>$c</option>
                      </select>
                      ";
            }

            

          $arrQuestion = file("question.txt");


          echo "<ul>";
          foreach ($arrQuestion as $key => $value) {
            list($Verb, $True, $cumle)  = explode("|", $value);
            list($start, $end) = explode("{}", $cumle);
            $INPUT = SelectBox($Verb, $True, $key);
            echo "\n<li id='$key'>$start $INPUT $end<br>&nbsp;</li>\n";
          }
          echo "</ul>";
          ?>

<script>
	function control(answers, truee, Key) {
		if(answers == 0) {
			document.getElementById(Key).style.color = "#000000"
			return;
		};
		
		if(answers == truee) {
			document.getElementById(Key).style.color = "#07C707"
		} else {
			document.getElementById(Key).style.color = "#FF0000"
		}
	}
</script>


       




</div>
</div>
