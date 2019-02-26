<?php
<<<<<<< HEAD
class Core
{
    public function run()
    {
        $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);
          
            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
            } else {
                $currentAction = 'index';
            }
            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
      
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
    } 
  
=======
class Core {

	public function run() {
                $url = explode('index.php', $_SERVER['PHP_SELF']);
                $url = end($url);

		$params = array();
		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);

	}

>>>>>>> 8fdbedb6744e074dbb6e57209d6fb327482c36d2
}
