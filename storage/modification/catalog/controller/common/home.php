<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

                if ($this->config->get('theme_default_x_slideshow_home_status') == 1) {
                    $this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
                    $this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');
                    $data['slideshow_home'] = $this->load->controller('extension/module/slideshow_home');
                } else {
                	$data['slideshow_home'] = '';
                }
			

				$data['map_home'] = $this->load->controller('extension/module/map_home');
			

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
