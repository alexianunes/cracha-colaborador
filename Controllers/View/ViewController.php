<?php
namespace Controllers;
namespace Controllers\View;

use \Core\Controller;
use \Models\Pessoas;

class ViewController extends Controller {

	protected $data = array();

	public function index() {
		//redirecionar para agenciapegasus
		header("Location: ".URL_SITE);
		exit;
	}

	public function colaborador() {

		global $urlConfig;
		
		if(isset($urlConfig['id']) && !empty($urlConfig['id'])){
			$colaboradores = new Pessoas();
			$this->data['colaborador'] = $colaboradores->get(trim(addslashes($urlConfig['id'])));

			if(isset($this->data['colaborador']['idpessoas']) && !empty($this->data['colaborador']['idpessoas'])){
				$data_atual = date('Y-m-d');
				$data_admissao = formatarData($this->data['colaborador']['dt_admissao'], 'en', 0);

				$data_nascimento = formatarData($this->data['colaborador']['aniversario'], 'br', 0);
				$this->data['colaborador']['idade'] = retornarIdade($data_nascimento);

				$this->data['colaborador']['diasAtivos'] = retornarDiferencaDatas($data_admissao, $data_atual);

				$this->data['colaborador']['dt_admissao'] = formatarData($this->data['colaborador']['dt_admissao'], 'br', 0);

				if ($this->data['colaborador']['imagem_interna_externa'] == '1') {
					$img_url = BASE_URL_EXTERNA."files/thumbs.php?arquivo=".$this->data['colaborador']["imagem"]."&altura=472&largura=354";
				} else if ($this->data['colaborador']['imagem_interna_externa'] == '2') {
					$img_url = BASE_URL_COLABORADOR.$this->data['colaborador']["imagem"];
				} else if ($this->data['colaborador']['imagem_interna_externa'] == '3') {
					$img_url = URL_SITE.'files/thumbs.php?arquivo='.$this->data['colaborador']["imagem"];
				}

				$this->data['colaborador']['url_img'] = $img_url;

				$this->loadView('View','Colaborador', $this->data);
			}else{
				header("Location: ".URL_SITE);
				exit;
			}
		}else{
			header("Location: ".URL_SITE);
			exit;
		}

		
	}

}
















