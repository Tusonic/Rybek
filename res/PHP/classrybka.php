<?php
class Ranking
{
    public $name;
    public $score;


    public static function Polaczenie()
    {


        try {
            $db = new PDO(DSN, DB_USERNAME, DB_PW, array(PDO::ATTR_PERSISTENT => true));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        } catch (PDOException $error) {
            echo "Connection Error: " . $error->getMessage();
        }

    }

    static public function PokazWynik()
    {

        $rank = 1;

        try {
            $conn = self::Polaczenie(); // statyczna -> tej samej -> self
            $stmt = $conn->query("SELECT name, score FROM ranking ORDER BY score DESC LIMIT 10 ");

            foreach ($stmt as $row) {
                echo "<tr><td>" . $rank . "</td><td>" . $row[1] . "</td><td>" . $row[0] . "</td></tr> ";
                $rank++;
            }

            $stmt->closeCursor();
            $conn = null;
        } catch (PDOException $error) {
            echo 'dbSelect error:' . $error->getMessage();
        }

    }

    public function DodajWynik()
    {
        try {

            $score = $_GET['score'];
            $name = $_GET['name'];
			$date = date('Y-m-d'); 
            $pdo = Ranking::Polaczenie();

            $stmt = $pdo->prepare("INSERT INTO ranking (id, name, score, date) VALUES('', '$name', '$score', '$date')");

            $stmt->execute();
            $stmt->closeCursor();
            $pdo = null;
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
	
	  public function TabelaStart()
    {
        try {

				
		echo "<table class='table table-striped'>
						<thead>
						  <tr>
							<th>#</th>
							<th>Score</th>
							<th>Name</th>
						  </tr>
						</thead>
						<tbody>";
		
          
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function TabelaKoniec()
    {
        try {

            echo " </tbody></table>";

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

	
	
}

?>