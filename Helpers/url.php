<?php

function retornarUrlConfig($url)
{
	if(isset($url)) {

		$url = explode('/', $url);
		$urlConfig = array();
		$urlAtual = '';

		if(isset($url[0])) {
		$urlConfig['modulo'] = $url[0];
		$urlAtual = $url[0];
		}

		// if(isset($url[1])) {
		// $urlConfig['controller'] = $url[1];
        // $urlAtual .= '/'.$url[1];
        // $urlConfig['urlPagListagem'] = $urlAtual;
		// }

		if(isset($url[1])) {
		$urlConfig['action'] = $url[1];
		$urlAtual .= '/'.$url[1];
		}

        if(isset($url[2])) {
        $urlConfig['id'] = $url[2];
        $urlAtual .= '/'.$url[2];
        }

        $urlConfig['urlAtual'] = BASE_URL.$urlAtual;

		return $urlConfig;
	}
}

