<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {	
    	parent::__construct();
    	$this->load->library('form_validation');

        $this->load->model('master');
        $this->load->model('checkup_m');
        $this->load->database();
    }

	public function index()
	{
		$querypasien = $this->master->getpasien();
		$querycheckup = $this->master->getcheckup();
		$data = array(
			'totalpasien' => $querypasien->row(),
			'totalcheckup' => $querycheckup->row(),
		);
		$this->load->view('Admin/v_dashboard',$data);
	}

	public function add_pasien()
	{
		$this->load->view('Admin/v_add_pasien');
	}


	public function pasien()
	{
		$data['pasien'] = $this->master->pasien();
		$this->load->view('Admin/v_pasien', $data);
	}

	public function tambah_aksi(){
		$nama = $this->input->post('nama');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_bpjs = $this->input->post('no_bpjs');
		$alamat = $this->input->post('alamat');
		$jns_kelamin = $this->input->post('jns_kelamin');
 
		$data = array(
			'nama' => $nama,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir' => $tgl_lahir,
			'no_bpjs' => $no_bpjs,
			'alamat' => $alamat,
			'jns_kelamin' => $jns_kelamin
			);
		$this->master->input_pasien($data,'pasien');
		redirect('Dashboard/pasien');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['pasien'] = $this->master->edit_data($where,'pasien')->result();
		$this->load->view('admin/v_edit_pasien',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$tmpt_lahir = $this->input->post('tmpt_lahir');
	$tgl_lahir = $this->input->post('tgl_lahir');
	$no_bpjs = $this->input->post('no_bpjs');
	$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir' => $tgl_lahir,
			'no_bpjs' => $no_bpjs,
			'alamat' => $alamat,
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->master->update_data($where,$data,'pasien');
	redirect('Dashboard/index');
	}

	    public function delete_pasien($id)
    {
        $where = array('id' => $id);
        $this->master->hapus_pasien($where,'pasien');
        redirect('Dashboard/pasien');
    }

    public function data_checkup()
	{
		$data['hasil']=$this->master->checkup();
		$this->load->view('Admin/v_data_checkup',$data);
	}

    	public function checkup($id)
	{
     	$data['pasien'] = $this->master->edit_p($id)->row();
		$this->load->view('Admin/v_add_checkup',$data);
	}

    public function proses()
    {
        $amannesa = implode(";", $this->input->post('description'));
        $diagnosa = implode(";", $this->input->post('countermeasure'));
        $pengobatan = implode(";", $this->input->post('sparepart'));

        $tambahan = array(
            'amannesa' => $amannesa,
            'diagnosa' => $diagnosa,
            'pengobatan' => $pengobatan,
        );
            $inputan = $this->input->post(null, true);
            $this->checkup_m->add($inputan, $tambahan);
        
        redirect('Dashboard/index');
    }

	 // public function cetak(){
		// ob_start();
		// $data['pasien'] = $this->master->row_array();
		// $getdata = $data['pasien'];
		// $this->load->view('Admin/v_pasien',$data);
		// $html = ob_get_contents();
		// ob_end_clean();
		// require_once('./assets/html2pdf/html2pdf.class.php');
		// $pdf = new HTML2PDF('P','A4','en');
		// $pdf->WriteHTML($html);
		// ob_start();
		// $pdf->Output('Reservasi.pdf', 'D');
  // }
}
