<?php
$name = $emp_id = $email = $department = "";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
   // Check if keys exist before accessing them
   $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
   $emp_id = isset($_POST['emp_id']) ? htmlspecialchars($_POST['emp_id']) : "";
   $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
   $department = isset($_POST['department']) ? htmlspecialchars($_POST['department']) : "";
}
?>