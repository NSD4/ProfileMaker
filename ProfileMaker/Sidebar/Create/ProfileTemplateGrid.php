
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
  grid-template-rows: 33% 17.5% 17.5%;
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
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
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
</style>

<body>

<section class="template-grid">
  <div class="pfp-area"> 
    <img src="<!--PFP-->" alt="Image not found" onerror="this.onerror=null;this.src='../Create/PFP_Placeholder.PNG'">
  </div>
  
  <div class="name-socialLinks-status-area">
    <div style="background-color: ;"class="name-area"><p><!--NAME--></p></div>
    <div style="background-color: ;" class="social-links-area">
      <a href="<!--SOCIALLINKHREF1-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF2-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF3-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF4-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF5-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF6-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF7-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF8-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF9-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF10-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF11-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF12-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF13-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF14-->" class="<!--SOCIALLINKCLASS-->"></a>
      <a href="<!--SOCIALLINKHREF15-->" class="<!--SOCIALLINKCLASS-->"></a>
    </div>
    <div class="status-area"><p><i><!--STATUS--></i></p></div>
  </div>

  <div class="info-boxes-area">
    <div class="info-area"><p><!--SOCIALLINKCLASS--></p></div>
    <div class="info-area"><p><!--SOCIALLINKCLASS--></p></div>
    <div class="info-area"><p><!--SOCIALLINKCLASS--></p></div>
    <div class="info-area"><p><!--SOCIALLINKCLASS--></p></div>
    <div class="info-area"><p><!--SOCIALLINKCLASS--></p></div>
  </div>

  <div class="comments-area">10</div>

  <div class="social-feed-area">11</div>
</section>


</body>
</html>
