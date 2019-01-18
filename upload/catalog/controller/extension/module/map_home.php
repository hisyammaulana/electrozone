<?php
class ControllerExtensionModuleMapHome extends Controller {
	public function index() {

		$this->load->language('common/header');

		$data['text_titlemap'] = $this->language->get('text_titlemap');
		$data['geocode'] = $this->config->get('config_geocode');
		$data['status'] = $this->config->get('theme_default_x_map_home_status');

		if ($this->request->server['HTTPS']) {
			$data['google_key'] = str_replace('http', 'https', html_entity_decode($this->config->get('theme_default_x_map_home_key')));
		} else {
			$data['google_key'] = html_entity_decode($this->config->get('theme_default_x_map_home_key'));
		}

		return $this->load->view('extension/module/map_home', $data);
	}
}