<?php require_once('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="header">
            <a class="logo" href="index.php"></a></a>
           <div class="top-nav"> Are you an agent? <a href="#" class="btn signup-agent">Signup here</a>
           <a href="#" class="submit-listing"><span>+</span>Submit a listing</a>
           </div>
        </div>
       
        <div class="user-new center ">
            <h1>Login to your account</h1>
            <h2>Don't have an account yet? <a href="#"><strong>Create one</strong></a> </h2>
        </div>
        
        <div class="user-login-types">
         
            
    <div class="threecol"></div>
            <div class="fourcol">
                <div class="user-login-box white">
                   
                    <div class="user-form">
                    <form>
                        <fieldset>
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email">
                        </fieldset>
                        <fieldset>
                            <label for="pass">password</label>
                            <input type="password" id="pass" name="pass">
                        </fieldset>
                        
                        
                        <fieldset>
                            <input type="submit" value="Login" class="green">
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