<?php
if(isset($_POST['submit'])) {
    
    // Form डेटा कलेक्ट करना
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // जिस ईमेल पर आपको मैसेज चाहिए (अपनी ईमेल डालें)
    $to = "chandan15042004gupta@gmail.com"; 
    
    $subject = "New Portfolio Contact from: $name";
    
    // ईमेल का बॉडी
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // ईमेल भेजना
    if(mail($to, $subject, $body, $headers)) {
        // सफलता मिलने पर अलर्ट दिखाकर वापस पोर्टफोलियो पर भेजना
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Sorry, failed to send your message. Please try WhatsApp.');
                window.location.href = 'index.php#contact';
              </script>";
    }
} else {
    // अगर कोई सीधा इस पेज पर आने की कोशिश करे
    header("Location: index.php");
    exit();
}
?>