<?php
function getRota(array $Routes){
   $url = $_SERVER['PATH_INFO'];

   if(strpos($url, -1) <> '/'){
      $url .= '/';
   }

   foreach($Routes as $route){
      $parttern = '@^'.$route['url'].'/$@';

      $matches = [];

      if (preg_match($parttern, $url, $matches)){
         array_shift($matches);
         return call_user_func_array($route['callback'], $matches);
      }
   }
}