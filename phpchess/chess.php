<html>
<head>
<title>PHP CHESS</title>
</head>
<body background="images/animknot.gif">
<link rel="stylesheet" href="/styles/main.css" type="text/css">
<style>
 A:visited { font-family: Arial, Helvetica, sans-serif; font-size: 7pt; color: #FF0000; text-decoration: none; font-weight: bold; background-color : transparent; } 
 A:link { font-family: Arial, Helvetica, sans-serif; font-size: 7pt; color: #FF0000; text-decoration: none; font-weight: bold;  background-color : transparent; }  
 A:hover { font-family: Arial, Helvetica, sans-serif; font-size: 7pt; color: #FF0000; text-decoration: underline; font-weight: bold; background-color : transparent; }
</style>
<div align="center">
 <table>
  <tr>
   <td valign="top"><font face="arial" size="-2">PHP Chess developed by</td>
   <td valign="top"><img src="images/weeredlionimage.gif" border="0"></td>
   <td valign="top"><a href="http://www.redlionwebdesign.com" target="_blank">RED LION WEB DESIGN, INC.</a></font></td>
  </tr>
 </table>
</div>
<table border="1" bgcolor="#C0C0C0">
 <tr>
  <td>
   <form action="makeamove.php" method="post">
    <table>
     <tr>
      <td><font face="arial" size="-1">Make a move, i.e. e2e4</font></td>
      <td><input type="text" name="move" size="5" maxlength="4">   </td>
	 </tr>
     <tr>
      <td colspan="2"><input type="submit" value="Make Your Move! >>"></td>
     </tr>
    </table>
   </form>
  </td>
 </tr>
</table>
<p>
 <table border="1" bgcolor="#C0C0C0">
  <tr>
   <td>
    <form action="entermessage.php" method="post">
     <table>
      <tr>
       <td><font face="arial">Enter your chat message below.</font></td>
	  </tr>
      <tr>
       <td><input type="text" name="message" size="32" maxlength="500"></td>
      </tr>
      <tr>
       <td><input type="submit" value="Submit Message >>"></td>
      </tr>
     </table>
    </td>
   </tr>
  </table>
 </form>
</p>
<table border="1" bgcolor="#C0C0C0">
 <tr>
  <td>
   <form action="modifyboard.php" method="post">
    <table>
     <tr>
      <td colspan="2" align="center"><font face="arial">Modify Chess Board</font></td>
     </tr>
     <tr>
      <td><font face="arial">Select a piece</font></td>
      <td>
	   <select name="modifypiece">
        <option value="wr"> <font face="arial">White Rook </font>
        <option value="wn"> <font face="arial">White Knight</font>
        <option value="wb"> <font face="arial">White Bishop</font>
        <option value="wq"> <font face="arial">White Queen</font>
        <option value="wk"> <font face="arial">White King</font>
        <option value="wp"> <font face="arial">White Pawn</font>
        <option value="br"> <font face="arial">Black Rook </font>
        <option value="bn"> <font face="arial">Black Knight</font>
        <option value="bb"> <font face="arial">Black Bishop</font>
        <option value="bq"> <font face="arial">Black Queen</font>
        <option value="bk"> <font face="arial">Black King</font>
        <option value="bp"> <font face="arial">Black Pawn</font>
        <option value=""> <font face="arial">Empty Square</font>
       </select>
      </td>
     </tr>
     <tr>
      <td><font face="arial">Which square will this piece go?</font></td>
      <td><input type="text" name="modifiedsquare" size="3" maxlength="2"></td>
     </tr>
     <tr>
      <td colspan="2"><input type="submit" value="Make Chess Board Modification >>"> </td>
     </tr>
    </table>
   </form>
  </td>
 </tr>
</table>
</body>
</html>