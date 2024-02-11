<?php

    
?>
    <form action="./handle/handlelogin.php" class="login-box" method="POST">
    <input class="input-box" type="email" name="email" required placeholder="@mgmcen.ac.in" value="@mgmcen.ac.in">

            <input class="input-box" name="password" type="password" placeholder="Password">
            <a class="login-link" href="#">Forgot password?</a>
            <input type="submit" name="login" class="login-btn" value="Log In"> 
            <div class="con">
    <?php 
    
    if(isset($_SESSION['errors'])) {
          foreach ($_SESSION['errors'] as $error) {
          echo ' <li class="error-li">
          <div class="span-fp-error">'.$error.'</div>
          </li>';
          
          }
          unset($_SESSION['errors']);  

         
          
    } 
        
      ?>

<script>
        document.getElementById("registration-form").addEventListener("submit", function(event) {
            // Validate email
            var emailInput = document.getElementById("email");
            var email = emailInput.value.trim();
            var validDomain = "@mgmcen.ac.in";
            var emailError = document.getElementById("email-error");
            if (!email.endsWith(validDomain)) {
                emailError.textContent = "Please enter a valid college email ID ending with '@mgmcen.ac.in'.";
                emailInput.focus();
                event.preventDefault();
                return false;
            } else {
                emailError.textContent = ""; // Clear the error message if the email is valid
            }
        });
    </script>
    </div>
    </form>

    
 
	
	