<?php include("../../static/includes/db.php");
class stats extends db
{
    public function getGroundStats()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM groundfloor WHERE booked ='1'";
        $result= $conn->query($sql);
        $percentage =round(($result->num_rows)/12*100, 2);
        $output = '
            <p class="h5">Ground Floor Stats</p>
            <div id="level">
                <span style="width'.$percentage.'%">'.$percentage.'%</span>
            </div>
            ';
            echo $output;
  
    }
    public function getFirstStats()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM firstfloor WHERE booked ='1'";
        $result= $conn->query($sql);
        $percentage =round(($result->num_rows)/12*100, 2);
       $output = '
            <p class="h5">First Floor Stats</p>
            <div id="level">
                <span style="width:'.$percentage.'%">'.$percentage.'%</span>
            </div>
            ';
            echo $output;
    }
    public function getSecondStats()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM secondfloor WHERE booked ='1'";
        $result= $conn->query($sql);
        $percentage =round(($result->num_rows)/12*100, 2);
       $output = '
            <p class="h5">Second Floor Stats</p>
            <div id="level">
                <span style="width:'.$percentage.'%">'.$percentage.'%</span>
            </div>
            ';
            echo $output;
    }
}

if(isset($_POST['getStats'])){
    $table = $_POST['table'];
    $sql = "SELECT * FROM $table WHERE booked = '1'";
    $result = $conn->query($sql);
    foreach($result as $row){
        $asd = $row['lotName'];
         $sql1 = "SELECT * FROM users WHERE lot = '$asd'";
        foreach($conn->query($sql1) as $rw){
            $timeIn = date("D d/y h:m a", strtotime($rw['timeIn']));
            $timeOut = date("D d/y h:m a", strtotime($rw['timeOut']));
            $output = '
                <tr>
                    <td>'.$rw['firstName'].'</td>
                    <td>'.$rw['lastName'].'</td>
                    <td>'.$rw['numberPlate'].'</td>
                    <td class="small">'.$timeIn.'</td>
                    <td class="small">'.$timeOut.'</td>
                </tr>
            ';

            echo $output;
        }
    }
}


if (isset($_POST['stats'])) {
    $object = new stats;
    if($_POST['stats']== "ground"){
        $object->getGroundStats();
    }elseif($_POST['stats'] == "first"){
        $object->getFirstStats();
    }elseif($_POST['stats'] == "second"){
        $object->getSecondStats();
    }
    //$object->getStats();
}
?>