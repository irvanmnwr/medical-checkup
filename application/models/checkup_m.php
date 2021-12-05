<?php
class checkup_m extends CI_Model
{
    public function get($id = null)
    {

        if ($id != null) {
            $query = $this->db->query("SELECT id, checkup.id_pasien, amannesa, diagnosa, pengobatan, kesadaran, td, hr, rr, suhu, tgl_periksa  FROM checkup,pasien WHERE checkup.id_pasien = pasien.id AND id = '$id'");
        } else {
            $query = $this->db->query("SELECT id, checkup.id_pasien, amannesa, diagnosa, pengobatan, kesadaran, td, hr, rr, suhu, tgl_periksa  FROM checkup,pasien WHERE checkup.id_pasien = pasien.id");
        }
        return $query;
    }

    function getpasien()
    {
        $query = $this->db->get('pasien');
        return $query;
    }

    function add($data, $tambahan)
    {
        $param = array(
            'id_pasien' => $data['id'],
            'amannesa' => $tambahan['amannesa'],
            'diagnosa' => $tambahan['diagnosa'],
            'pengobatan' => $tambahan['pengobatan'],
            'td' => $data['td'],
            'rr' => $data['rr'],
            'hr' => $data['hr'],
            'suhu' => $data['suhu'],
            'kesadaran' => $data['kesadaran'],
            'tgl_periksa' => date('Y-m-d')
        );
        $this->db->insert('checkup', $param);
    }
}
