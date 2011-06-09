<?php
class Jobeet
{
  static public function slugify($text)
  {
    // sostituisce tutto tranne lettere e punti con -
    $text = preg_replace('/\W+/', '-', $text);
 
    // cancella gli spazi e converte in minuscolo
    $text = strtolower(trim($text, '-'));
 
    return $text;
  }
}