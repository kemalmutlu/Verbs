<?php

function HarfCagir($harf)
{
  $harfler = file('ifadeler.txt');
  $count =  0;

  foreach ($harfler as $val) {
      if(substr($val,0,1) == $harf)
      {
        $count++;
         list($a,$b,$c) = explode(',' , $val);
         echo '
         <tr>
           <th scope="row">'.$count.'</th>
           <td>'.$a.'</td>
           <td>'.$b.'</td>
           <td>'.$c.'</td>
         </tr>
         ';
      }
  }
}

function ara($aranan)
{
  $ifadeler = file('ifadeler.txt');
          if (isset($aranan))
          {
            $tmp = $aranan;
            foreach ($ifadeler as $ifade)
            {
                list($a,$b,$c) = explode(",",$ifade);
                if($a == $tmp)
                {
                  $status = true;
                  echo '
                  <tr>
                    <th scope="row">1</th>
                    <td>'.$a.'</td>
                    <td>'.$b.'</td>
                    <td>'.$c.'</td>
                  </tr>
                  ';
                }


            }
          }
}
