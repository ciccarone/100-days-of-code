<?php

use Mexitek\PHPColors\Color;

class SColorss
{

  public function generateScheme()
  {
    $this->__setSchema();
    $scheme['$color--main'] = $this->original;
    $scheme['$color--dark'] = $this->darken;
    $scheme['$color--opposite'] = $this->opposite;
    $scheme['$color--mix'] = $this->mix;

    foreach ($scheme as $key => $value) {
      echo $key . ': #' . $value . ';' . "<br />";
    }
  }

  private function __setSchema()
  {
    $color = new Color($this->color);
    $this->original = $color->getHex();
    $this->isDark = $color->isDark();
    $this->darken = $color->darken();
    $this->opposite = $color->complementary();
    $this->mix = $color->mix($this->opposite);
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

}
