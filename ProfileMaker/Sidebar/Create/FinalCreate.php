<?php
//Template for profile
//include('ProfileTemplateGrid.php');
if (isset($_POST['Submit'])){
  $DB_Connection = mysqli_connect('localhost', 'Test1', 'Test', 'profilemakertest');
  $PFP = mysqli_real_escape_string($DB_Connection, $_POST['PFP']);
  $NAME = mysqli_real_escape_string($DB_Connection, $_POST['NAME']);
  $STATUS = mysqli_real_escape_string($DB_Connection, $_POST['STATUS']);
  $SocialLink1 = mysqli_real_escape_string($DB_Connection, $_POST['SocialLink1']);
  $SocialLink2 = mysqli_real_escape_string($DB_Connection, $_POST['SocialLink2']);
  $SocialLink3 = mysqli_real_escape_string($DB_Connection, $_POST['SocialLink3']);
  $SocialLink4 = mysqli_real_escape_string($DB_Connection, $_POST['SocialLink4']);
  $SocialLink5 = mysqli_real_escape_string($DB_Connection, $_POST['SocialLink5']);
  $SocialFeedURL = mysqli_real_escape_string($DB_Connection, $_POST['SocialFeedURL']);
  $InfoTitle1 = mysqli_real_escape_string($DB_Connection, $_POST['InfoTitle1']);
  $InfoTitle2 = mysqli_real_escape_string($DB_Connection, $_POST['InfoTitle2']);
  $InfoTitle3 = mysqli_real_escape_string($DB_Connection, $_POST['InfoTitle3']);
  $InfoTitle4 = mysqli_real_escape_string($DB_Connection, $_POST['InfoTitle4']);
  $InfoTitle5 = mysqli_real_escape_string($DB_Connection, $_POST['InfoTitle5']);
  $InfoContent1 = mysqli_real_escape_string($DB_Connection, $_POST['InfoContent1']);
  $InfoContent2 = mysqli_real_escape_string($DB_Connection, $_POST['InfoContent2']);
  $InfoContent3 = mysqli_real_escape_string($DB_Connection, $_POST['InfoContent3']);
  $InfoContent4 = mysqli_real_escape_string($DB_Connection, $_POST['InfoContent4']);
  $InfoContent5 = mysqli_real_escape_string($DB_Connection, $_POST['InfoContent5']);

  $sql = "INSERT INTO userprofilestest(PFP, NAME, STATUS, SocialLink1, SocialLink2, SocialLink3, SocialLink4, SocialLink5, SocialFeedURL, InfoTitle1, InfoTitle2, InfoTitle3, InfoTitle4, InfoTitle5, InfoContent1, InfoContent2, InfoContent3, InfoContent4, InfoContent5) VALUES('$PFP', '$NAME', '$STATUS', '$SocialLink1', '$SocialLink2', '$SocialLink3', '$SocialLink4', '$SocialLink5', '$SocialFeedURL', '$InfoTitle1', '$InfoTitle2', '$InfoTitle3', '$InfoTitle4', '$InfoTitle5', '$InfoContent1', '$InfoContent2', '$InfoContent3', '$InfoContent4', '$InfoContent5')";

  mysqli_query($DB_Connection, $sql);
}

?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="C:\Users\namjo\OneDrive\Documents\Namjote.S.Dulay\A-levels\Computer Science\Year 12\web iterations\Web programming (2)\GlobalCSS\SocialMediaIcons.css">
<script src="jquery-3.5.1.min.js"></script>

<style>

.pointer {cursor: pointer;}

body {
  margin-left: 3vw;
  margin-top: 4vw;
  background-color: #1b1818;
  z-index: 1;


}

h1 {
  color: white;
  position: absolute;
  font-family: "Audiowide", sans-serif;
}

h2 {
 color: white;
 position: absolute;
 font-family: "Audiowide", sans-serif;
}

p {
  color: white;
  position: absolute;
  font-family: "Audiowide", sans-serif;
}

.GRID1 {
  display: grid;
  width: 45vw;
  height: 90vh;
  margin-left: 0px;
  grid-template-rows: repeat(15, 1fr);
  grid-template-columns: 1fr;
  grid-gap: 1vw;
}

.GRID2 {
	position: absolute;
	display: grid;
	width: 45vw;
	height: 90vh;
	grid-template-rows: repeat(5, 1fr);
	grid-auto-flow: column;
	grid-auto-columns: auto;
	grid-gap: 1vw;
	top: 4vw;
	right: 3vw;
	justify-content: space-between;
	align-content: space-around;

}

.griditem {
	display: flex;
	align-content: center;
	justify-content: center;
}

input {
	border-radius: 5vw;
	border: 0.5vw solid #333333;
	background-color: #1f1e1e;
	color: white;
	font-family: "Audiowide", sans-serif;
  font-size: 1vw;
}

textarea {
	border-radius: 2vw;
	white-space: normal;
    text-align: justify;
    -moz-text-align-last: center; 
    text-align-last: center;
    border: 0.5vw solid #333333;
    border-radius: 2vw;
    color: white;
    background-color: #1f1e1e;
    font-family: "Audiowide", sans-serif;
}

</style>

<body>
 <form method="POST" action="FinalCreate.php">

 <section class="GRID1">
  <input type="text" placeholder="Enter name" name="NAME">
  <input type="text" placeholder="Enter PFP URL" name="PFP">
  <input type="text" placeholder="Enter status" name="STATUS">
  <input type="text" placeholder="Enter social media link. Format --> 'facebook: https://www.facebook.com/example/'" name="SocialLink1">
  <input type="text" placeholder="Enter social media link" name="SocialLink2">
  <input type="text" placeholder="Enter social media link" name="SocialLink3">
  <input type="text" placeholder="Enter social media link" name="SocialLink4">
  <input type="text" placeholder="Enter social media link" name="SocialLink5">
  <input type="text" placeholder="Social Media Feed URL" name="SocialFeedURL">
  <input type="text" placeholder="Enter info box title" name="InfoTitle1">
  <input type="text" placeholder="Enter info box title" name="InfoTitle2">
  <input type="text" placeholder="Enter info box title" name="InfoTitle3">
  <input type="text" placeholder="Enter info box title" name="InfoTitle4">
  <input type="text" placeholder="Enter info box title" name="InfoTitle5">
  <input type="submit" name="Submit" value="Submit" class="pointer" placeholder="SUBMIT">
</section>

<section class="GRID2">
  <textarea placeholder="Info Box Content" rows="10" cols="1000" name="InfoContent1"></textarea> 
  <textarea placeholder="Info Box Content" rows="10" cols="10" name="InfoContent2"></textarea> 
  <textarea placeholder="Info Box Content" rows="10" cols="10" name="InfoContent3"></textarea> 
  <textarea placeholder="Info Box Content" rows="10" cols="10" name="InfoContent4"></textarea> 
  <textarea placeholder="Info Box Content" rows="10" cols="10" name="InfoContent5"></textarea> 
</section>

</form>

</body>
</html>