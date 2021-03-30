# Simple_Commenting_System
This is a simple comment manager for website. Follow steps below to make it workes:

# Step 1:
Upload all files to your web server

# Step 2:
Create this database on your web server:

Database Name: comments_DB
Collate: utf8_general_ci

Table 1: 
  Name: comments_inbox
  Fields:
    CID (int, not null, primary key, AUTO_INCREMENT)
    PID (int)
    Name (Text)
    Email (Text)
    Comment (Text)

Table 2: 
  Name: comments_saved
  Fields: as comments_inbox

# Step 3:
Edit "connecting_db.php":
  $DB_ip = 'Your database IP address';
  $DB_user = 'Your database uesrname';
  $DB_pass = 'Your database password';

# Step 4:
Set the Post ID:

"SamplePost.php" is a sample post page. Set a post_ID for your current post by changing the valu of "$PID" in line 31. 
It must be a number between 0 to 2147483647.

# Step 5:
Enjoy your messaging system

** Clicking on the "Go to comment control panel" link will lead you to the "comment control panel".
** The username ane password for the "comment control panel"  is same as the username ane password of your database.
  
# Note:
This code is free for private or commercial use as long as you don't remove or change the copyright notes.<br><br>
Maleki B. Copyright ©2021<br>
BehzatMaleki@Gmail.com<br>
Github.com/BehzatMaleki
