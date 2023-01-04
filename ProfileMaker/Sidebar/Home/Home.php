<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="C:\Users\namjo\OneDrive\Documents\Namjote.S.Dulay\A-levels\Computer Science\Year 12\web iterations\Web programming (2)\GlobalCSS\SocialMediaIcons.css">
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
  position: absolute;
  font-family: "Audiowide", sans-serif;
}

iframe {
  -webkit-transform:scale(calc(100vw/85vw));
  -moz-transform-scale(calc(100vw/85vw));
  position:  absolute;
  height:  100%;
  border:  none;
  z-index: 2;
}

.sidebar {
  margin:  0px;
  padding-top: 15vw;
  width: 15vw;
  background-color: #333333;
  height: 100%;
  top: 0;
  left:  0;
  position: fixed;
  overflow: auto;
}

.tabcontent {
  
  display:  none;
  margin-left:  15vw;
  height:  100%;
  width:  85vw;

}

.sidebar button {
  display: block;
  background-color: #333333;
  color: white;
  margin-left: 60px;
  margin-top: 60px;
  font-family: "Audiowide", sans-serif;
  font-size: 22px;
  border: none;
  transition: all 500ms;
  
}

.sidebar button:hover {
  background-color: #1f1e1e;
  border-radius: 15px;
}

.HomeTile {
  opacity: 0;
  transition: opacity 1s, visibility 1s;
  position: absolute;
  background-color: #262626;
  width: 600px;
  height: 600px;
  border: 5px solid #333333;
  border-radius: 50px;
}



.HomeTile:hover {
  opacity: 1;
}

.HomeCoverTile { 
  display: block;
  position: absolute;
  width: 600px;
  height: 600px;
  background-color: #1f1e1e;
  border: 5px solid #333333;
  border-radius: 50px;
}

.HomeSubTile {
  position: absolute;
  background-color: #1f1e1e;
  width: 200px;
  height: 100px;
  border-radius: 50px;
  border: 5px solid #333333;
}

.ProfileNameandPFP {
  position: absolute;
}

.ProfileNameandPFP img {
  border: 5px solid #333333;
  border-radius: 30px;
  width: 20%;
  height: 20%;
}

.fa {
  position: absolute;
  padding: 3px;
  font-size: 15px;
  width: 15px;
  text-align: center;
  text-decoration: none;
  margin: 2px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.HomeGrid {
  display: grid;
  
 

  grid-template-colums:  auto auto;
  grid-template-rows: 15% 15% auto;

  grid-template-areas:  "Title Title"
                        "SubTitle1 SubTitle2"
                        "Tile1 Tile2";

}

.Title {
  grid-area:  Title;
  align-items:  center;
}

.SubTitle1 {
  grid-area: SubTitle1;
  align-items: center;
}
.SubTitle2 {
  grid-area: SubTitle1;
  align-items: center;
}
.Tile1 {
  grid-area: Tile1;
  align-items: center;
}
.Tile2 {
  grid-area: Tile2;
  align-items: center;
}

i

</style>

<body>

<div class="sidebar">
  <button class="SideLink pointer" onclick="openSide('Home')" id="defaultOpen">Home</button>
  <button class="SideLink pointer" onclick="openSide('Search')">Search</button>
  <button class="SideLink pointer" onclick="openSide('Create')">Create</button>
</div>

<iframe id="Home" class="tabcontent" src="NewHome.php"></iframe>
<iframe id="Search" class="tabcontent" src="../Search/Search.php"></iframe>
<iframe id="Create" class="tabcontent" src="../Create/FinalCreate.php"></iframe>

<script>

</script>

<script>
function openSide(sideLink) {
  var i, tabcontent, SideLink;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) { // Banks the webpage blank temporarily
    tabcontent[i].style.display = "none";
  }

  document.getElementById(sideLink).style.display = "block"; // Loads the correct menu (Home/Search/Create)
}



</script>




</body>
</html>>