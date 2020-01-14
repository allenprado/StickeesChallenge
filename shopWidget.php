<?php

class shopWidget
{

  public $listPacks;

  public function sendPacks(int $nWidget, array $val)
  {

    foreach ($val as $key => $value)

    {
       $this->$listPacks[] = [ 0 => (ceil($nWidget / $value) * $value) - $nWidget,
                               1 => ceil($nWidget / $value),
                               2 =>  $val[$key]
                             ];
    }

    sort($this->$listPacks);

    $return = array_shift($this->$listPacks);

    return $return[1] . " Pack x " . $return[2] . " Widgets.";

  }

}

?>
