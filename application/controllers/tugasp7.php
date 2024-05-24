<?php
class tugasp7 extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-tugasp7');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'Kode terlalu pendek'
            ]
        );

        $this->form_validation->set_rules(
            'nis',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nomor Telepon Matakuliah Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-tugasp7');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-tugasp7', $data);
        }
    }
}
