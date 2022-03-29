public function sendmailtest(){
       

        $this->load->library('mailme');
       
        /* PHPMailer object */
        $mail = $this->mailme->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'INSERT YOUR EMAIL HERE';
        $mail->Password = 'INSERT YOUR PASSWORD HERE';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('info@yourdomain.com', 'Newsletter Mail');
        $mail->addReplyTo('info@yourdomain.com', 'Newsletter Mail');
       
        /* Add a recipient */
        $mail->addAddress('INSERT RECEPIENT EMAIL HERE');
       
        /* Add cc or bcc */
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
       
        /* Email subject */
        $mail->Subject = 'INSERT EMAIL SUBJECT HERE';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $mailContent = "<h1>THIS IS A TEST EMAIL</h1>
        <p>sent with codeigniter with PHPmailer.</p>";
        $mail->Body = $mailContent;
       
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }
    }
