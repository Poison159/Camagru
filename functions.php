<?php
     function confirm_query($result_set){
        if(!result_set){
            die("datase query failed");
        }
    }
    function check_user($conn,$login,$result){

        $find_user = $conn->query("SELECT USERNAME FROM users");
			foreach($find_user as $user_row){
                if ($user_row['USERNAME'] == $login)
                {
                    
                    $result = "Username already in use";
                    return false;
                }
            }
    }

    function check_email($conn,$email,$result)
    {
        $find_email = $conn->query("SELECT EMAIL FROM users");
            foreach($find_email as $email_row)
            {
                if ($email_row['EMAIL'] == $email)
                {
                    $result = "E-Mail already in use";
                    return false;
                }
            }
    }

  function check_usr_email_exists($conn,$login,$email,$password){
        if (isset($login) && isset($email) && isset($password) && !empty($login) 
            && !empty($email) && !empty($password)){
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $lastChecks = true;
                //Check if Username already exists
                check_user($conn,$lastChecks);
                //Check if email alrady exists
                check_email($conn,$lastChecks);
                if ($lastChecks)
                {
                        //All checks done, add user to DB
                    $populate = $conn->prepare("INSERT INTO users (USERNAME, EMAIL, PASSWORD, SATATUS)
                        VALUES(:USERNAME, :EMAIL, :PASSWORD, :STATUS)");
                    $populate->bindParam(":USERNAME", $login);
                    $populate->bindParam(":EMAIL", $email);
                    $populate->bindParam(":PASSWORD", $password);
                    
                    $populate->execute();
                  
                }
            }
            else
                echo "Invalid E-Mail";
        }
    }

    function sendmail($login,$password,$email){

            $subject = "cAmAgru | Activation";
            $message = "
            Thank you for registering with cAmAgru.
            You can log in using the following credentals after verification:
            -------------------
            USERNAME :".$login."
            PASSWORD :".$password."
            -------------------
            please verify your account by clicking the link below
            http://127.0.0.1:8080/config/verify.php?user=$login&status=1

            Kind regards
            cAmAgru Team";
            $head = 'From:noreply@camagru' . "\r\n";
            try{
            mail($email, $subject, $message, $head);
            }catch(MailException $ex){
                echo "mail could not to sent"; 
            }
    }
?>