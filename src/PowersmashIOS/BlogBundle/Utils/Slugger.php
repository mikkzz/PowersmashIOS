<?php

namespace PowersmashIOS\BlogBundle\Utils;

class Slugger
{
  public function slugify($name)
  {
    return preg_replace('/[^a-z0-9]/', '-', strtolower(trim(strip_tags($name))));
  }
}
