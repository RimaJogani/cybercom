<?php
require_once "./Model/Core/Request.php";
class Admin{

        protected $request=NULL;

            public function __construct(){

                $this->setRequest();
            }
        public function setRequest(){

            $this->request=new Request();
            return $this;

        }
        public function getRequest(){
            return $this->request;

        }


        public function redirect($actionName = NULL,$controllerName = NULL,$params =NULL ,$resetParams=false){ 
           
            header("location:".$this->getUrl($actionName,$controllerName,$params,$resetParams));
            exit();
        }

        public function getUrl($actionName = NULL,$controllerName = NULL, $params=NULL,$resetParams=false){ 

            $final=$_GET;
            if($resetParams){
                $final=[];
            }

            if($actionName == NULL){
                $actionName=$_GET['a'];
            }
            if($controllerName == NULL){
                $controllerName=$_GET['c'];

            }

            $final['c']=$controllerName;
            $final['a']=$actionName;
            if(is_array($params)){
                $final=array_merge($final,$params);
            }
           
            $queryString=http_build_query($final);
            unset($final);

            return "http://localhost/new_cycr/e-comapp-12-02-21-action-controller/index.php?{$queryString}";
        }
}


?>