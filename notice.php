<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("gymkhana",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
 $result = mysql_query("SELECT * FROM notices WHERE id = '" .$_GET['id'] . "'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

while ($row = mysql_fetch_array($result)) {
    echo "<!-- Modal -->

  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'>".$row{'subject'}. "</h4>
      </div>
      <div class='modal-body'>
      <div class='container'>
      <div class=well>".$row{'content'}."
      


      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    ";
}
?>
