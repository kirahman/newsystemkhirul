<?php
    include "adminchecksession.php";
?>
<?php include "include/header.template.php"; ?>


<div class="card">
    <div class="card-header">
        <h1>Admin tasks</h1>
    </div>
    <div class="card-body">
        1. <a href="staffuseradd.php">Add staff user </a><br>
        2. <a href="staffuserlist.php">Modify/edit/reset/delete staff user </a><br>
        3. <a href="guestuserlist.php">Modify/edit/reset/delete guest user </a><br>
    </div>

</div>
<!-- end class card for admin tasks -->
<br>
<hr>
<br>

<h1>Admin user profiles data update</h1>
<?php include "noti.php"; ?>
<form action="adminsaveupdate.php" method="post"
    enctype="multipart/form-data">
    Username
    <input type="text" name="username" class="form-control"
    value="<?php echo $_SESSION['username'] ?>">
    Email (locked for now)
    <input type="text" name="email" class="form-control" readonly 
    value="<?php echo $_SESSION['email'] ?>">
    Fullname
    <input type="text" name="fullname" class="form-control"  
    value="<?php echo $_SESSION['fullname'] ?>">
    <hr>
    Current imageprofile<br>
    <?php 
    if($_SESSION['profileimage']==null){
        //no image profile yet
        echo "<img src='usersprofileimages/noimageprofileyet.png' width='200'>";
    }
    else{
        //already has image profile
        echo "<img src='".$_SESSION['profileimage']."' width='200'>";
    }
    ?>
    <br>Upload new profile image (gif,jpg,png)
    <input type="file" name="imagetoupload" class="form-control"><br>
    <button type="submit" class="btn btn-primary">Save update profile</button>
</form>

<?php include "include/footer.template.php"; ?>