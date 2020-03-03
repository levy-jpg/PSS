<?php include ("db.php");
  class lotFetch extends db{
    public function fetchLeftLots(){
        $sql = "SELECT * FROM firstfloor ORDER BY id ASC LIMIT 6";
        $conn = $this->connect();
        $result = $conn->query($sql);
       // echo $result->num_rows;
        foreach($result as $row){
            $special = $row['special'];
            $lotStatus = $row['lotStatus'];
            if($special == 1){
              $output = '
                  <div class="flex-fill lotSpecial">
                     Special Parking
                  </div>';
            }else {
                if(($row['booked']) == 0){
                  $output = '
                  <div class="flex-fill lotAvailable">
                     Available
                  </div>';
                }
                elseif(($row['booked'])==1){
                  $output = '
                  <div class="flex-fill lotBooked">
                     Occupied
                  </div>';
                }
            }
          echo $output;
        }
       
    }

    public function fetchRightLots(){
        $sql = "SELECT * FROM firstfloor ORDER BY id DESC LIMIT 6";
        $conn = $this->connect();
        $result = $conn->query($sql);
       // echo $result->num_rows;
        foreach($result as $row){
            $special = $row['special'];
            $lotStatus = $row['lotStatus'];
            if($special == 1){
              $output = '
                  <div class="flex-fill lotSpecial">
                  '.$row['lotName'].'
                  </div>';
            }else {
                if(($row['booked']) == 0){
                  $output = '
                  <div class="flex-fill lotAvailable">
                  '.$row['lotName'].'
                  </div>';
                }elseif(($row['booked'])==2){
                  $output = '
                  <div class="flex-fill lotBooked">
                     '.$row['lotName'].'
                  </div>';
                }
            }
          echo $output;
        }
       
    }
  }  
?>
