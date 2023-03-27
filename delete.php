<?php
include 'dbconnect.php';
$roll = $_GET['roll_no'];
$sql = "DELETE FROM student_reg WHERE roll_no=$roll";
$query = mysqli_query($conn,$sql);
if ($query==true) {
    // echo "Record deleted successfully";
    ?>
    <script>
        alert("Record has been Deleted");
        //location.replce('reg_table.php');
    </script>
    <?php
    header("Location: reg_table.php"); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
// header('location:view.php');
?>

