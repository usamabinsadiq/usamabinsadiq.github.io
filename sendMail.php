<?php 
if(isset($_POST['submit'])){
    $to = "usamabinsadiq@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	//$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	//$subject2 = "Copy of your form submission";
    $message = $name . "\n" . "Contact Person Name: " . $name . "\n" . " wrote the following:" . "\n" . $_POST['message'];
	//$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
	//$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
	//mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
	//header('Location: Thank_you.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>