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