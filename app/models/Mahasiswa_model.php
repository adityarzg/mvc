<?php 

    class Mahasiswa_model 
    {
        private $table = 'mahasiswa';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllMahasiswa()
        {
           $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY NIM');
           return $this->db->resultSet();
        }

        public function getMahasiswaByNim($nim)
        {
            $this->db->query('SELECT * FROM ' .$this->table. ' WHERE nim=:nim');
            $this->db->bind('nim', $nim);
            return $this->db->single();
        }

        public function tambahDataMahasiswa($data)
        {
            $query = "INSERT INTO mahasiswa VALUES('', :nim, :nama, :jurusan)";
            $this->db->query($query);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jurusan', $data['jurusan']);

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function hapusDataMahasiswa($nim)
        {
            $query = "DELETE FROM mahasiswa WHERE nim = :nim";
            $this->db->query($query);
            $this->db->bind('nim', $nim);

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function ubahDataMahasiswa($data)
        {
            $query = "UPDATE mahasiswa SET nim = :nim, nama = :nama, jurusan = :jurusan WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jurusan', $data['jurusan']);

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function cariDataMahasiswa()
        {
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");
            return $this->db->resultSet();
        }

    }

?>