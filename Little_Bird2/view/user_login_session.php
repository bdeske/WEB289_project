


<body>

<ul id="navbar">
		<li><a href="?action=home">Home</a></li>
		
	</ul>

	
<form name="frmUser" method="post" action="">
<input type="hidden" name="action" value="validate_email">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Email</td>
<td><input type="text" name="Email"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="Password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>