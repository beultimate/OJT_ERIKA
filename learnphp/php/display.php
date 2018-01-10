<?php //displaying data


	include 'connectionstring.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    
		echo "<table id='disp-table'>";
	  	echo "<tr>";
		echo "<th> ID </th>";
		echo "<th> Name </th>";
		echo "<th> Age </th>";
		echo "<th> Track </th>";
		echo "</tr>";	
				
	 while($row = mysqli_fetch_array($result)) {
	        
	  echo "<tr>";
		echo "<td>"; echo $row["ID"]; echo"</td>";
		echo "<td>"; echo $row["Name"]; echo "</td>";
		echo "<td>"; echo $row["Age"]; echo"</td>";
		echo "<td>"; echo $row["Track"]; echo "</td>";
		echo "</tr>";
	  
	  }
	} 

	else {
	  echo "0 results";
	}
		echo "</table>";	


?>


<script>
var table = document.getElementById("disp-table");
  for(var i = 0; i < table.rows.length; i++) {
  table.rows[i].onclick = function() {
  
  //rIndex = this.rowIndex;
	  document.getElementById("id").value = this.cells[0].innerHTML;
	  document.getElementById("name").value = this.cells[1].innerHTML;
	  document.getElementById("age").value = this.cells[2].innerHTML;
	  document.getElementById("track").value = this.cells[3].innerHTML;
	}
}
</script>