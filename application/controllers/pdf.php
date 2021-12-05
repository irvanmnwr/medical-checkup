<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pdf extends CI_Controller {

	public function __construct(){
		parent::__construct();

        $this->load->model('master');
	}

	public function cetak($id){
		ob_start();

		$data['pasien'] = $this->master->view_row($id);
		//$data['checkup'] = $this->master->view_row($id 'pasien');
		$this->load->view('Admin/v_print', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en',true, 'UTF-8', array(10, 20, 20, 20), false);
		$pdf->setDefaultFont('arial');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Medical Check Up.pdf', 'D');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
