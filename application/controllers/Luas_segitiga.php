<?php 

class Luas_segitiga extends CI_Controller {

	public function index()
	{
		if(isset($_REQUEST['btnsubmit'])) {
		$this->load->model('Luas_segitiga_model');

		$model = $this->Luas_segitiga_model;

		$alas = $_REQUEST['a'];
		$tinggi = $_REQUEST['t'];

		$model->set_alas($alas);
		$model->set_tinggi($tinggi);

		$this->load->view('segitiga_view', array('model' => $model));
	}else{
		$this->load->view('segitiga_view_input');
	}
}
}
?>