INSTRUCTIONS FOR INSTALLING PHP CHESS:

* Please note: You must have a mySQL database created for your account before running PHP Chess

1. Unzip the phpchess.zip file onto your computer. 

2. Using notepad open the constants.php file and make the following changes:

   Change $username to the mySQL database username you have been given for your Web account.
   Change $password to the mySQL database password you have been given for your Web account.
   Change $dbase to the mySQL database name you have been given for your Web account.

3. FTP to your Web Site and create a directory named Chess.

4. Upload all .php files to the Chess directory using ASCII transfer.

5. Create a subdirectory named Images under your Chess directory.

6. Upload all image files to the Images subdirectory using BINARY transfer.

7. From your Web Browser, run the createtables.php file:
   i.e. http://www.yourdomainname.com/chess/createtables.php

8. From your Web Browser, run the import.php file:
   i.e. http://www.yourdomainname.com/chess/import.php

9. You are now ready to run the PHP chess application from your Web Site:
   i.e. http://www.yourdomainname.com/chess/index.htm


RULES FOR PLAYING PHP CHESS AND CHATTING FEATURE:

1. To chat with your playing partner, just type in your message in the text box
   where it says "Enter your chat message below" and click on "Submit Message".

2. Before playing chess game, determine who will play White or Black Pieces with your
   playing partner. People playing the Black Pieces can click on the "Flip Chess Board Side"       button for their point of view of the Chess board.

3. Making a chess move by entering in your move in the textbox that says "Make a move",
   and click on "Make Your Move" button.

4. If a mistake is made, you can always modify the chess board by using the Modify Chess
   Board option. Just select the desired piece to place on Chess board or select empty
   square to remove a piece from the Chess Board, and then select which Chess square will
   receive the action.

   * You will also use the Modify Chess Board option to promote your piece when it reaches
     your opponents first rank, or when an En Passant move has been played, or for
     king and queen side castling.

** Please note:

To change the refresh rate for the Chess board, open the chessboard.php in notepad,
and change the line that reads <meta http-equiv="refresh" content="10"> and make the change
the content value to either a faster or slower rate.

To change the refresh rate for the messages, open the messages.php in notepad,
and change the line that reads <meta http-equiv="refresh" content="10"> and make the change
the content value to either a faster or slower rate.


PHP CHESS was developed by Red Lion Web Design, Inc. 

http://www.redlionwebdesign.com

 