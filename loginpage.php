<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<header>
<div id="page">
<h1>
<div id="title1">Electronic
</div>
<div id="title2">Voting
</div>
</h1>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="reg.php">Register</a></li>
</ul>
</nav>
</div>
</header>
<div class="banner1">
</div>
<div style="background:#EBE1EC; widows:1280px; height:70px"></div>
<div style="width:1280px; height:500px; background:#EBE1EC;">
<div style="font-style:italic; font-size:20px; font-weight:bold; margin-left:60px">Welcome to the Electronic Voting System</div>
<div style="margin-left:60px; font-size:16px; width:500px; margin-top:30px; color:#000040">To continue please login with your email id and password.New user has to register first and then login with their username and password.</div>
   <h1 style="margin-left:350px; margin-top:100px; color:#6F6F00; font-size:50px; text-shadow:2px 2px #000;  font-family:'Arial Narrow', 'Britannic Bold'">Login</h1>     	
		<div style="background:#CCC; border-color:#000; border-style:double; height:300px; width:800px; margin-left:280px; margin-top:-120px">
           <div style="margin-top:100px; margin-left:300px; font-size:20px">
           <form name="frm" id="frm" method="post" action="logincode2.php">
			<table>
				<tr><td>User Name:</td>
                <td><input type="email" id="email" name="email"></td></tr>
				<tr>
                <td>Password:</td>
                <td><input type="password" id="pwd" name="pwd"></td></tr>
                <tr>
				<td colspan='2' align='center' style="float:left; padding:50px"><input type="submit" id="ok" name="ok" value="Login"></td>
             <td><button style="float:left; padding-left:10px"><a href="index.php">Back</a></button></td>
             </tr>
             </table>
            </form>
         </div>
      </div>
</div>
<footer><p>All Rights Reserve &amp; &copy EVS,2015 &nbsp;&nbsp;&nbsp;&nbsp||&nbsp;&nbsp;&nbsp;&nbsp Designed By:NCDS</p></footer>
</body>
</html>