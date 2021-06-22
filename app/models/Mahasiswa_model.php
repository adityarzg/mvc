<?php 

    class Mahasiswa_model 
    {
        // private $mhs = [
        //     [
        //         "nama" => "Aditya Reza Gusnanda",
        //         "nim" => "142406051",
        //         "jurusan" => "Teknik Informatika"
        //     ],
        //     [
        //         "nama" => "Radoth RL Sidabalok",
        //         "nim" => "142406052",
        //         "jurusan" => "Teknik Informatika"
        //     ],
        //     [
        //         "nama" => "Ayu Puspita Retno",
        //         "nim" => "142406050",
        //         "jurusan" => "Teknik Informatika"
        //     ]
        //     ];

        private $dbh, $stmt; //database handler & statement

        public function __construct()
        {
            //data source name
            $dsn = 'mysql:host=localhost;dbname=mvc';
            
            try{
                $this->dbh = new PDO($dsn, 'root', '');
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>