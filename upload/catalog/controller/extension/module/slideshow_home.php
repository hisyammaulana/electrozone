<?php
class ControllerExtensionModuleSlideshowHome extends Controller {
	public function index() {	

		$this->load->model('design/banner');
		
		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($this->config->get('theme_default_x_slideshow_home_banner_id'));

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => 'image/' . $result['image'],
					'description'  => $result['description'],
					'text_button'  => $result['text_button'],
					'position'     => $result['position']
				);
			}
		}

		return $this->load->view('extension/module/slideshow_home', $data);
	}
}