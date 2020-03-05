<?php include ("db.php");
  class lotFetch extends db{
    public function fetchLeftLots(){
      $table = $_POST['lotFloor'];
        $sql = "SELECT * FROM $table ORDER BY id ASC LIMIT 6";
        $conn = $this->connect();
        $result = $conn->query($sql);
       // echo $result->num_rows;
        foreach($result as $row){
            $special = $row['special'];
            $lotStatus = $row['lotStatus'];
            if($special == 1){
              $output = '
                  <div class="flex-fill lot lotSpecial">
                    '.$row['lotName'].'
                  </div>';
            }else {
                if(($row['booked']) == 0){
                  $output = '
                  <div class="flex-fill lot lotAvailable" >
                    '.$row['lotName'].'
                  </div>';
                }
                elseif(($row['booked'])==1){
                  $output = '
                  <div class="flex-fill lot lotBooked" onclick="getMe()">
                    '.$row['lotName'].'
                  </div>';
                }
            }
          echo $output;
        }
       
    }

    
    public function fetchRightLots(){
      $table = $_POST['lotFloor'];
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 6";
        $conn = $this->connect();
        $result = $conn->query($sql);
       // echo $result->num_rows;
        foreach($result as $row){
            $special = $row['special'];
            $lotStatus = $row['lotStatus'];
            if($special == 1){
              $output = '
                  <div class="flex-fill lot lotSpecial">
                    '.$row['lotName'].'
                  </div>';
            }else {
                if(($row['booked']) == 0){
                  $output = '
                  <div class="flex-fill lot lotAvailable" >
                    '.$row['lotName'].'
                  </div>';
                }
                elseif(($row['booked'])==1){
                  $output = '
                  <div class="flex-fill lot lotBooked" onclick="getMe()">
                    '.$row['lotName'].'
                  </div>';
                }
            }
          echo $output;
        }
       
    }

  }  
?>
