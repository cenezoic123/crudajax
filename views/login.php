<?php
    if(isset($_POST['submit'])){
        echo 'Nisulod sa Btn Submit';
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link href = '../style.css' rel = "stylesheet" />
</head>

<body>
    <div class="container">
        <div class = "form-container">
            <form method = 'POST'>
                <h2>Sign-in</h2>
                <div class = "login-form">
                    <div class="form-group">
                        <input type = "text" class = "input-form" name = "username" placeholder = "Username" />
                    </div>    
                    <div class = "form-group">
                        <input type = "password" class = "input-form" name = "password" placeholder = "Password" />
                    </div>
                    <div class = "form-group">
                        <button type = "submit" name = "submit" class = "btn-submit">
                            Submit
                        </button>      
                    </div>
                </div>
            </form>    
        </div>
    </div>
</body>
</html>