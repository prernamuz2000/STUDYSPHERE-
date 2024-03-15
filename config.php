<?php
$server_name = "localhost";
$server_username = "root";
$server_password = "";
$server_database = "studyverse";

$con = mysqli_connect($server_name, $server_username, $server_password, $server_database);


// Index page form details

if (isset($_POST["form_contact_submit_btn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data
        // Insert data into the database

        // Redirect to another page to prevent form resubmission

        $contact_name = $_POST["contact_name"];
        $contact_email = $_POST["contact_email"];
        $contact_company = $_POST["contact_company"];
        $contact_message = $_POST["contact_message"];

        $sql = "INSERT INTO `contact_form`(`contact_name`, `contact_email`, `contact_company`, `contact_message`) VALUES ('$contact_name','$contact_email','$contact_company','$contact_message')";

        mysqli_query($con, $sql);

        header("Location: index.php");
        exit();
    }
}

// Ticket page config page


if (isset($_POST["ticket_page_btn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data
        // Insert data into the database

        // Redirect to another page to prevent form resubmission

        $member_form_name = $_POST["member_form_name"];
        $member_form_email = $_POST["member_form_email"];
        $member_form_phone = $_POST["member_form_phone"];
        $memberform = $_POST["memberform"];
        $member_form_message = $_POST["member_form_message"];

        $member_form_query = "INSERT INTO `purchase_form`(`member_form_name`, `member_form_email`, `member_form_phone`, `memberform`, `member_form_message`) VALUES ('$member_form_name','$member_form_email','$member_form_phone','$memberform', '$member_form_message')";

        mysqli_query($con, $member_form_query);

        header("Location: ticket.php");
        exit();
    }
}


?>