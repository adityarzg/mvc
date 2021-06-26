<?php 

    class Mahasiswa extends Controller
    {
        public function index()
        {
            $data['judul'] = 'Mahasiswa';
            $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

            $this->view('templates/header', $data);
            $this->view('mahasiswa/index', $data);
            $this->view('templates/footer');
        }

        public function detail($nim)
        {
            $data['judul'] = 'Detail Mahasiswa';
            $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByNim($nim);

            $this->view('templates/header', $data);
            $this->view('mahasiswa/detail', $data);
            $this->view('templates/footer');
        }
    }

?>