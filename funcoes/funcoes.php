<?php
// base: http://www.diogomatheus.com.br/blog/php/expressoes-regulares-no-php/
// documentação: http://php.net/manual-lookup.php?pattern=preg&scope=quickref
function getRota(array $Routes){
   $urlParse = get_url();

   $url = $urlParse['path'];

   if(substr($url, -1) <> '/'){
      $url .= '/';
   }

   foreach($Routes as $route){
      $urlRoute = ($route['url'] <> '/') ? $route['url'] : '';

      $parttern = '@^'.$urlRoute.'/$@';

      $matches = [];

      if (preg_match($parttern, $url, $matches)){
         array_shift($matches);
         return call_user_func_array($route['callback'], $matches);
      }
   }
}

// fonte: http://php.net/manual/pt_BR/function.parse-url.php
function get_url(){
   $arr = array();
   $uri = $_SERVER['REQUEST_URI'];

    // query
   $x = array_pad( explode( '?', $uri ), 2, false );
   $arr['query'] = ( $x[1] )? $x[1] : '' ;
   
   // resource
   $x = array_pad( explode( '/', $x[0] ), 2, false );
   $x_last = array_pop( $x );
   if( strpos( $x_last, '.' ) === false ){
      $arr['resource'] = '';
      $x[] = $x_last;
   }
   else{
      $arr['resource'] = $x_last;
   }

   // path    
   $arr['path'] = implode( '/', $x );
   if( substr( $arr['path'], -1 ) !== '/' ) $arr['path'] .= '/';

   // domain
   $arr['domain'] = $_SERVER['SERVER_NAME'];

   // scheme
   $server_prt = explode( '/', $_SERVER['SERVER_PROTOCOL'] );
   $arr['scheme'] = strtolower( $server_prt[0] );

   // url
   $arr['url'] = $arr['scheme'].'://'.$arr['domain'].$uri;

   return $arr;
}