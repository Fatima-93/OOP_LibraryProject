<?php

require_once('config.php');

$stmt = $pdo->query("SELECT * FROM books_table");

try {
    $stmt->execute($_GET);
} catch (PDOException $e) {
echo $e->getMessage();
$error = $e->errorInfo();
die();
}

$rows = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html>
<head>
<style>
.container{
  margin: 20px auto;
}
h2 {
  text-align: center;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

body{
  font-family:Arial, Helvetica, sans-serif;
  font-size:13px;
}
.success, .error{
  border: 1px solid;
  margin: 10px 0px;
  padding:15px 10px 15px 50px;
  background-repeat: no-repeat;
  background-position: 10px center;
}

.success {
  color: #4F8A10;
  background-color: #DFF2BF;
  background-image:url('success.png');
  display: none;
}
.error {
  display: none;
  color: #D8000C;
  background-color: #FFBABA;
  background-image: url('error.png');
}
</style>
</head>
<body>
  <div class="container">
    <h2>View Book Records</h2>
    <div class="success"></div>
    <div class="error"></div>
    <h2>Add / Edit Books</h2>
    <form>
       <table>
        <tr>
          <td colspan="4" style="text-align: center">
            <input type="hidden" id ='book_id' placeholder='Book ID' required />&nbsp;&nbsp;
            <input type='text' id='genre_id' placeholder='Genre ID' required />&nbsp;&nbsp;
          <input type='text' id='title' placeholder='Title' required />&nbsp;&nbsp;
          <input type='text' id='date_published' placeholder='Date Published' required />&nbsp;&nbsp;
          <input type='button' id='savebook'  value ='Add Book' /></td>
        </tr>
        
        <tr>
         
              <input type='button' id='viewbook'  value ='View All Books in this Library' />
            
        </tr>
      </table>
    </form>
    <h2>View Books</h2>
    <table>
      <tr>
        <th></th>
        <th>Book ID</th>
        <th>Genre ID</th>
        <th>Title</th>
        <th>Date Published</th>
      </tr>
  <?php
  /* FetchAll foreach with edit and delete using Ajax */
      
  $numRows= count($rows);

foreach ($rows as $row) {
    //echo $row[0] . " " . $row[2] . " " . $row[3] . "<br>";
    
   //echo $row[2] . "<br>";
}

echo "<h3> Here is a list of our  $numRows . Books </h3>";
?>
     <tr>
       <td><?php echo $row['BookID']; ?></td>
       <td><?php echo $row['GenreID']; ?></td>
       <td><?php echo $row['Title']; ?></td>
       <td><?php echo $row['DatePublished']; ?></td>
       <td><a data-pid = <?php echo $row; ?> class='editbtn' href= 'javascript:void(0)'></a></td>
     </tr>
   <?php  ?>
  <?php  ?>
  </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script>
    $(function(){


     /* Edit button ajax call */
      $('.editbtn').on( 'click', function(){
          var pid = $(this).data('pid');
          $.get( "backend.php", { id: pid })
            .done(function( product ) {
              data = $.parseJSON(product);

             
          });
      });

 </script>
</body>
</html>