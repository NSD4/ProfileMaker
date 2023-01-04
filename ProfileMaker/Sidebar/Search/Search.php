<!DOCTYPE html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../GlobalCSS/SocialMediaIcons.css">
<script src="jquery-3.5.1.min.js"></script>

<?php
$template = <<<EOD
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="C:\Users\namjo\OneDrive\Documents\Namjote.S.Dulay\A-levels\Computer Science\Year 12\web iterations\Web programming (2)\GlobalCSS\SocialMediaIcons.css">
<script src="jquery-3.5.1.min.js"></script>

<style>

.pointer {cursor: pointer;}

body {
  margin-left: 4.5%;
  margin-top: 2.5%;
  background-color: #262626;
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

img {
  object-fit: cover;
  width: 100%;
  max-height: 100%;
}

.template-grid {
  display: grid;
  width: 90vw;
  height: 90vh;
  margin:0;

  grid-template-columns: 10vw auto auto auto auto auto;
  grid-template-rows: 10vw 1fr 5fr;
  grid-gap: 2vw;

  grid-template-areas: "pfp name name name name name"
                       "info info info info info info"
                       "comments comments comments social social social";
}

.pfp-area {
  border: 0.5vw solid #333333;
  border-radius: 50px;
  grid-area: pfp;
  overflow: hidden;
 
}

.name-socialLinks-status-area {
  grid-area: name;
  display: grid;
  margin-top: 2vw;
  grid-template-columns: 1fr;
  grid-template-rows: 33% 19% 17.5%;
  grid-gap: 0.2vw;
 
  grid-template-areas: "name"
                       "socialLink"
                       "status";
}

.name-area {
  display: grid;
  font-size: 3vw;
  place-items: center start;
}

.social-links-area {
  grid-area: socialLink;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  background-color: red;
  gap: 0.1vw;
}

.status-area {
  display: grid;
  font-size: 1vw;
  place-items: center start;
}
.info-boxes-area {
  grid-area: info;
  border-radius: 50px;
  align-items: center;
  display: grid;

  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: 1fr;
  grid-gap: 2vw;

  grid-template-areas: "info info info info info";
}

.info-area {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #1f1e1e;
  border-radius: 50px;
  border: 5px solid #19191a;
  height: 80%;
  font-size: 1vw;
 
}

.comments-area {
  border: 0.5vw solid #333333;
  border-radius: 50px;
  grid-area: comments;
}

.social-feed-area {
  border: 0.5vw solid #333333;
  border-radius: 50px;
  grid-area: social;
}

.fa {
  padding: 0.4vw;
  font-size: 0.8vw;
  width: 0.8vw;
  text-align: center;
  text-decoration: none;

  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

#form {
  position: absolute;
  left: 56vw;

}

</style>

<body>

<section class="template-grid">
  <div class="pfp-area"> 
    <img src="<!--PFP-->" alt="Image not found" onerror="this.onerror=null;this.src='../Create/PFP_Placeholder.PNG'">
  </div>

  <div class="name-socialLinks-status-area">
    <div style="background-color: ;"class="name-area"><p><!--NAME--></p></div>
    <div style="background-color: ;" class="social-links-area">
      <a href="<!--SOCIALLINK1-->" class="fa fa-<!--SOCIALLINKCLASS1-->"></a>
      <a href="<!--SOCIALLINK2-->" class="fa fa-<!--SOCIALLINKCLASS2-->"></a>
      <a href="<!--SOCIALLINK3-->" class="fa fa-<!--SOCIALLINKCLASS3-->"></a>
      <a href="<!--SOCIALLINK4-->" class="fa fa-<!--SOCIALLINKCLASS4-->"></a>
      <a href="<!--SOCIALLINK5-->" class="fa fa-<!--SOCIALLINKCLASS5-->"></a>
    </div>
    <div class="status-area"><p><i>"<!--STATUS-->"</i></p></div>
  </div>

  <form method="POST" action="Search.php" id="form" style="background-color:red">
    <div class="SearchWrapper">
      <label><p style="font-size: 2vw;">Search:</p></label>
      <input type="text" name="name">
      <input type="submit" name="submit" value="submit" id="submit">
    </div>
  </form>

  <div class="info-boxes-area">
    <div class="info-area"><p><!--InfoTitle1--></p></div>
    <div class="info-area"><p><!--InfoTitle2--></p></div>
    <div class="info-area"><p><!--InfoTitle3--></p></div>
    <div class="info-area"><p><!--InfoTitle4--></p></div>
    <div class="info-area"><p><!--InfoTitle5--></p></div>
  </div>

  <div class="comments-area">10</div>

  <div class="social-feed-area">11</div>
</section>


</body>
</html>
EOD;



  if (isset($_POST['submit'])){

    $DB_Connection = mysqli_connect('localhost', 'Test1', 'Test', 'profilemakertest');
    $name = $_POST['name'];
    $sql = "SELECT * FROM userprofilestest WHERE NAME LIKE '$name'";
    $result = mysqli_query($DB_Connection, $sql);

    $array = mysqli_fetch_all($result, MYSQLI_ASSOC); // The associate array stores the DB data in format Array([0] --> Array([index] --> value [index1] --> value1)). You can see that it nests the single array inside another array which we do not want.
    $profile = $array[0]; //now only stores 1-D array

    mysqli_close($DB_Connection);

    if (isset($profile)) {
      $page = str_replace('<!--PFP-->', htmlentities($profile['PFP']), $template); 
      $page = str_replace('<!--NAME-->', htmlentities($profile['NAME']), $page); 
      $page = str_replace('<!--STATUS-->', htmlentities($profile['STATUS']), $page); 
      $page = str_replace('<!--SOCIALLINK1-->', htmlentities(substr($profile['SocialLink1'], strpos($profile['SocialLink1'], ":") + 1)), $page); // substr will get the substring of all characters after ":"
      $page = str_replace('<!--SOCIALLINK2-->', htmlentities(substr($profile['SocialLink2'], strpos($profile['SocialLink2'], ":") + 1)), $page);
      $page = str_replace('<!--SOCIALLINK3-->', htmlentities(substr($profile['SocialLink3'], strpos($profile['SocialLink3'], ":") + 1)), $page);
      $page = str_replace('<!--SOCIALLINK4-->', htmlentities(substr($profile['SocialLink4'], strpos($profile['SocialLink4'], ":") + 1)), $page);
      $page = str_replace('<!--SOCIALLINK5-->', htmlentities(substr($profile['SocialLink5'], strpos($profile['SocialLink5'], ":") + 1)), $page);
      $page = str_replace('<!--SOCIALLINKCLASS1-->', htmlentities(substr($profile['SocialLink1'], 0, strpos($profile['SocialLink1'], ':'))), $page);
      $page = str_replace('<!--SOCIALLINKCLASS2-->', htmlentities(substr($profile['SocialLink2'], 0, strpos($profile['SocialLink2'], ':'))), $page);
      $page = str_replace('<!--SOCIALLINKCLASS3-->', htmlentities(substr($profile['SocialLink3'], 0, strpos($profile['SocialLink3'], ':'))), $page);
      $page = str_replace('<!--SOCIALLINKCLASS4-->', htmlentities(substr($profile['SocialLink4'], 0, strpos($profile['SocialLink4'], ':'))), $page);
      $page = str_replace('<!--SOCIALLINKCLASS5-->', htmlentities(substr($profile['SocialLink5'], 0, strpos($profile['SocialLink5'], ':'))), $page);
      $page = str_replace('<!--InfoTitle1-->', htmlentities($profile['InfoTitle1']), $page); 
      $page = str_replace('<!--InfoTitle2-->', htmlentities($profile['InfoTitle2']), $page); 
      $page = str_replace('<!--InfoTitle3-->', htmlentities($profile['InfoTitle3']), $page); 
      $page = str_replace('<!--InfoTitle4-->', htmlentities($profile['InfoTitle4']), $page); 
      $page = str_replace('<!--InfoTitle5-->', htmlentities($profile['InfoTitle5']), $page); 

      echo $page;
    } else {
      echo "idk";
    }
  }
?>

<html>
<style>
body {
  background-color: #1b1818;
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
  font-family: "Audiowide", sans-serif;
}

.SearchWrapper {
  /*fixed takes element out of document flow, and is positioned relative to computer window. Absolute does the same but positions it relative to its parent window */
	display: flex;
	align-items: center;
	justify-content: flex-start;
	height: 5vw;
	width: 100vw;
	gap: 0.5vw;
}

form {
  display: block;
  position: fixed;
  background-color: purple;

}

#NewSearchBoxPosition {
  position: fixed;
  left: 56vw;
  top: 0vw;
  width: 5px;
  height: 5px;
  background-color: red;
}
</style>

<script>
  function OldSearchDisappear(){
   // document.getElementById("forms").style.display="none";
    //document.getElementById("textbox").style.display="none";
    document.getElementById("SearchWrapper").style.display="none";
  }
</script>

<body>
  <form method="POST" action="Search.php" id="forms">
    <!-- Hi-->
    <div class="SearchWrapper" id="2">
      <label><p style="font-size: 2vw;">Search:</p></label>
      <input type="text" name="name" id="textbox">
      <input type="submit" name="submit" value="submit" id="submit" onclick="OldSearchDisappear()">
    </div>
  </form>
  <div id="NewSearchBoxPosition"></div>

</body>

</html>