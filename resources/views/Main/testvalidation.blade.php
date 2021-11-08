<!doctype html>
<html>   

<link rel="stylesheet" href="{{asset('css/style.css')}}">

<script src="{{asset ('script/validation.js')}}"></script>

<script  type="text/javascript" src = "./jQuery/jquery-3.6.0.js"></script>
</script>
<script src="./jQuery/jquery_validation.js">
</script>

<body>
    <h2>Form Validation</h2>
    
    <form id="testForm" name="myForm" action="registered.php" onsubmit="return(validate());">
    
        <div class="row">
        <label>Full Name</label>
        <input type="text" name="Name"/>

        <div class="error" id="nameErr">Write your name in this format Juan Dela Cruz</div>

        </div>

        <div class="row">
            <label>Age</label>
            <input type="text" name="Age"/>
            <div class="error" id="ageErr"></div>
         </div>

        <div class="row">
            <label>E-mail</label>
            <input type="text" name="Email"/>
            <div class="error" id="emailErr"></div>
        </div>

        <div class="row">
            <label>Username</label>
            <input type="text" name="username"/>
            <div class="error" id="userErr"></div>
        </div>
        
        <div class="row">
            <label>Password</label>
            <input type="password" name="password"/>
            <div class="error" id="passErr"></div>
        </div>
    
        <div class="row">
            <label>Confirm Password</label>
            <input type="password" name="password2"/>
            <div class="error" id="passErr"></div>
        </div>
    
        <div class="row">
            <label>Account Type</label>
            <select name="account">
                <option value="-1" selected>[Choose Account Type]</option>
                <option value ="1">Administrator</option>
                <option value ="2">Standard User</option>
            </select>
           <div class="error" id="AccountErr"></div>
        </div>
    

        <input type="submit" value="submit"/>

    </form>
</body>
</html>