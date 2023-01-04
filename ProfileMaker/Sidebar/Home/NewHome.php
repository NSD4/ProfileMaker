<<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../GlobalCSS/SocialMediaIcons.css">
<script src="jquery-3.5.1.min.js"></script>
<style>
.pointer {cursor: pointer;}

body {
  margin: 0px;
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

  font-family: "Audiowide", sans-serif;
}

Title {
	color: white;
	font-family: "Audiowide", sans-serif;
}

.fa {
  padding: 0.3vw;
  font-size: 0.65vw;
  width: 0.65vw;
  text-align: center;
  text-decoration: none;
  margin: 2px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.HomeTile {
  display: grid;

  opacity: 0;
  transition: opacity 1s, visibility 1s;
  position: absolute;
  background-color: #262626;
  width: 30vw;
  height: 30vw;
  border: 5px solid #333333;
  border-radius: 50px;
  display: grid;
  grid-template-rows: 15% 7.5% 7.5% auto;
  grid-template-columns: 30% auto;
  grid-template-areas:  "PFP Name"
                        "PFP SocialLinks"
                        "PFP Status"
                        "Info Info";
}



.HomeTile:hover {
  opacity: 1;
}

.HomeCoverTile { 
  display: block;
  position: absolute;
  width: 30vw;
  height: 30vw;
  background-color: #1f1e1e;
  border: 5px solid #333333;
  border-radius: 50px;
}

.HomeSubTile {
  position: absolute;
  background-color: #1f1e1e;
  width: 30vw;
  height: 30vw;
  border-radius: 50px;
  border: 5px solid #333333;
}

.ProfileNameandPFP {
  position: absolute;
}


.HomeGrid {
  display: grid;
  height: 95%;
  width:  100vw;
  margin: 0;

  grid-template-colums:  auto auto;
  grid-template-rows: 15% 15% auto;

  grid-template-areas:  "Title Title"
                        "SubTitle1 SubTitle2"
                        "Tile1 Tile2";

}

.Title-area {
  display: flex;
  grid-area:  Title;
  align-items: center;
  justify-content: center;
}

.SubTitle1-area {
  display: flex;
  grid-area: SubTitle1;
  align-items: center;
  justify-content: center;
}
.SubTitle2-area {
  display: flex;
  grid-area: SubTitle2;
  align-items: center;
  justify-content: center;
}
.Tile1-area {

  grid-area: Tile1;
  place-items:  center;
  display: grid;
  grid-template-rows: 100%;
  grid-template-columns: 100%;
  grid-template-areas:  "NestedGrid";
}

.PFP-area {
  display: flex;
  grid-area: PFP;
  justify-content: center;
  align-items: center;
}

.Name-area {
  display: flex;
  grid-area: Name;
  align-items: center;
  
}

.SocialLinks-area {
  display: flex;
  grid-area: SocialLinks;
  align-items: center;
  justify-content: flex-start;
}

.Status-area {
  display: flex;
  grid-area: Status;
  align-items: center;
}

.Info-area {
  grid-area: Info;
}


.Tile2-area {
  display: flex;
  grid-area: Tile2;
  align-items: center;
  justify-content: center;
  grid-template-areas:  "";
}

.ProfileNameandPFP {
  position: absolute;
}

.PFP-area img {
  border: 5px solid #333333;
  border-radius: 30px;
  width: 80%;
  height: 80%;
}
}
</style>
<body>

  <section class="HomeGrid">	
  	<div class="Title-area"><p style="font-size: 3vw;">Profile Maker</p></div>
  	<div class="SubTitle1-area"><p style="font-size: 1.5vw;">Create Profiles...</p></div>
  	<div class="SubTitle2-area"><p style="font-size: 1.5vw;">Search Profiles...</p></div>
  	<div class="Tile1-area">
  	  <div style="z-index: 2;" class="HomeCoverTile"></div>
      <div style="z-index: 3;" class="HomeTile">
      	<div class="PFP-area"><img src="images\doris.jpg"></div>
      	<div class="Name-area"><p style="font-size: 2vw;">BoJo</p></div>
      	<div class="Status"><p style="font-size: 0.7vw;"><i>"Not partying at a work event"</i></p></div>
      	<div class="SocialLinks-area">
      	  <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwi4le_O-JP2AhW8Q0EAHX_dAeMQ6F56BAgCEAE&url=https%3A%2F%2Ftwitter.com%2FBorisJohnson%3Fref_src%3Dtwsrc%255Egoogle%257Ctwcamp%255Eserp%257Ctwgr%255Eauthor&usg=AOvVaw3-aXj3_jnxvD5P7c4adNfZ" class="fa fa-twitter"></a>
          <a href="https://www.instagram.com/borisjohnsonuk/?hl=en" target="_parent" class="fa fa-instagram"></a>
          <a href="https://www.snapchat.com/add/boris?sender_web_id=986088a8-fd30-4dae-a5e1-69c6a2bf8f64&device_type=desktop&is_copy_url=true" class="fa fa-snapchat-ghost"></a>
          <a href="https://www.facebook.com/borisjohnson/" class="fa fa-facebook"></a>
      	</div>
      	<div class="Info-area"><p>Hi</p></div>
      </div>
  	</div>

  	<div class="Tile2-area">
  	  <div style="z-index: 2;" class="HomeCoverTile"></div>
      <div style="z-index: 3;" class="HomeTile">
      	
      </div>
  	</div>
  </section>

</body>
</html>
