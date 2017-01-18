<?php
class Base{
	var $params = null;
	function Base($params = array()){
		$this->params = $params;
	}

	function load($viewToLoad){
		extract($this->params);
        //print $arg0;
		include("./views/".$viewToLoad. ".php");
	}
}
?>