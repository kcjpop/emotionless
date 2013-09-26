<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MY_Controller
{
	public function avatar()
	{
		$json = array(
			'success' => FALSE,
			'data'    => ''
		);

		$config['upload_path']   = './uploads/avatar';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']      = '100';
		$config['encrypt_name']  = TRUE;
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('qqfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$json['data'] = $error;
		}
		else
		{
			$data = $this->upload->data();

			// Store image
			$this->load->model('user_info_model');
			$user_info = $this->user_info_model->get($this->user_info_model->get_id());
			$user_info['avatar'] = $data['file_name'];
			$this->user_info_model->update($user_info);

			// Resize 
			$config['image_library']  = 'gd2';
			$config['source_image']   = $data['full_path'];
			$config['width']          = 140;
			$config['height']         = intval($data['image_height'] * $config['width'] / $data['image_width']);

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$json['success'] = TRUE;
			$json['data']    = $data;
		}

		echo json_encode($json);
	}
}