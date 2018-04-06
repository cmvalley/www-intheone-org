<?php
$servername = "localhost";
$username = "herit568_dbread";
$password = "cmeb4ugo!";
$dbname = "herit568_www";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT e_name, e_date FROM `events` WHERE e_date >= CURDATE() ORDER BY e_date ASC LIMIT 6"); 
    $stmt->execute();

    // set the resulting array to associative
   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   $eventname = $row ['e_name'];
   $eventdate = $row['e_date'];
   $phpdate = strtotime( $eventdate );
   $eventdate = date( 'm-d-Y', $phpdate );
   $li = '<li>
			<a href="#">
				<h3 class="event-title">' . $eventname . '</h3>
				<span class="event-meta">
					<span><i class="fa fa-calendar"></i>' . $eventdate . '</span>
				</span>
			</a>
		</li>';
	echo $li;
   
}
      
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>