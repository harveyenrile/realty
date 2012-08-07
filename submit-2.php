<?php require_once('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="header">
            <a class="logo" href="index.php"></a></a>
           <div class="top-nav"> Are you an agent? <a href="#" class="btn signup-agent">Signup here</a>
           <a href="#" class="submit-listing"><span>+</span>Submit a listing</a>
           </div>
        </div>
       
        <div class="user-new center">
            <h1>Last step: Create your account</h1>
            <h2>Complete one last step by logging in with your facebook or creating an account</h2>
        </div>
        
        <div class="user-login-types">
            <div class="threecol"></div>
            
    
            <div class="fourcol">
                <div class="user-login-box white">
                    <h3>Create an account</h3>
                    <div class="user-form">
                    <form>
                        <fieldset>
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email">
                        </fieldset>
                        <fieldset>
                            <label for="fname">First name</label>
                            <input type="text" id="fname" name="fname">
                        </fieldset>
                        <fieldset>
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" name="lname">
                        </fieldset>
                        <fieldset>
                            <label for="contact">Contact number</label>
                            <input type="text" id="contact" name="contact">
                        </fieldset>
                        <fieldset>
                            <label for="npass">New password</label>
                            <input type="password" id="lpass" name="npass">
                        </fieldset>
                        <fieldset>
                            <input type="submit" value="Create your account" class="green">
                        </fieldset>
                    </form>
                    <fieldset>
                        Are you already a member? <a href="#"><strong>Login here</strong></a>
                    </fieldset>
                    </div>
                </div>
            </div>
            
            <div class="threecol">
                <div class="user-login-box">
                    <h3>or, verify your account</h3>
                    <div class="user-form">
                    <fieldset>
                        <a href="#" class="fbconnect"></a>
                    </fieldset>
                    <fieldset>
                        <a href="#" class="twconnect"></a>
                    </fieldset>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
</div>

<?php require_once('footer.php'); ?>