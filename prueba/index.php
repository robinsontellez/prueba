<?php
class REST{  
  function request()
  { 
    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    $input = json_decode(file_get_contents('php://input'),true);
      switch ($method) {
        case 'GET':
        case 'PUT':
        case 'POST':
          $id=$_POST["id"];        
          $request=$this->call("https://jsonplaceholder.typicode.com/posts/$id");
          $respuesta=str_replace("\n"," ",$request[title].",".$request[body]);
          $contador_caracteres=strlen($respuesta);    
          echo json_encode(["error"=>"","msg"=>"",["respuesta"=>$respuesta,"contador_caracteres"=>$contador_caracteres]]);
        case 'DELETE':
  
      }
  }
  function call($url)
  {
    return json_decode(file_get_contents($url),true);
  }  
}
global $test;
$test = new REST;
$test->request();
?>