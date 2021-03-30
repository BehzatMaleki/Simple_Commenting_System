<!--
This code is free for private or commercial use as long as you don't remove or change the copyright notes.
Maleki B. Copyright ©2021
BehzatMaleki@Gmail.com
Github.com/BehzatMaleki
-->

<html lang="en">
    <head>
		<style>html, body {height:100%}</style>
        <meta charset="utf-8" />
    </head>
    <body>
		<table style="width:100%;height:100%;">
		  <tbody>
			<tr>
			  <td colspan="2">
				<div>
					<h2  align='left'>Post 1 Header</h2>
					<p align='justify'>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
			  </td>
			</tr>
			<tr>
			  <td width="70%" style="vertical-align:top">
				<?php
					//=======
					$PID = 1;
					//=======
					include "php/connecting_db.php";
					//Saved messages table
					$query = "select * from comments_saved where PID='".$PID."' order by CID asc";
					$result = mysqli_query($con, $query);
					while($rows = mysqli_fetch_array($result)){
						if(count($rows)>0){echo "<h3>Comments:</h3>";}
						$cmnt= "<hr><div><h4 style='margin-top:0;margin-bottom:0'>".$rows['Name']."</h4></div><div><h5 style='margin-top:0;margin-bottom:5'>".$rows['Email']."</h5></div><div style='margin-top:0;margin-bottom:5'>".$rows['Comment']."</div>";
						echo $cmnt;
					}
				?>
			  </td>
			  <td width="30%">
				<div align='center'>
					<h3>Send a new comment:</h3>
					<form id="comment_form" method="post" action="php/process_cmnt.php">
						<input type="hidden" name="PID" value="<?=$PID;?>">
						<label>Name:</label><div><input type="text" name="name" required></div><br>
						<label>Email Address:</label><div><input type="text" name="email"></div><br>
						<label>Comment:</label><div><textarea type="text" name="comment" rows="10" cols="25" required></textarea></div><br>
						<div><input type="submit" name="submit_cmnt">&nbsp;<input type="reset"></div><br>
					</form>
					<b><a href='php/control_cmnt.php'>Go to comment control panel</a></b>
				</div>
			  </td>
			</tr>
		  </tbody>
		</table>
    </body>
</html>
