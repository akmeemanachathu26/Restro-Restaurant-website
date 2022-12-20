<style>
body{ margin:0; font-family:'tahoma'}

nav {
  margin:0 auto;
  width:100%;
  height:auto;
  display:inline-block;
  background:#37bc9b;
}

nav ul {
  margin:0;padding:0;
  list-style-type:none;
  float:left;
  display:inline-block;
}

nav ul li {
  position:relative;
  margin:0 20px 0 0;
  float:left;
  display:inline-block;
}

li > a:after { content: ' »'; } /* Change this in order to change the Dropdown symbol */

li > a:only-child:after { content: ''; }

nav ul li a {
  padding:20px;
  display:inline-block;
  color:white;
  text-decoration:none;
}

nav ul li a:hover {
  opacity:0.5;
}

nav ul li ul {
  display:none;
  position:absolute;
  left:0;
  background:#37bc9b;
  float:left;
}

nav ul li ul li {
  width:100%;
  border-bottom:1px solid rgba(255,255,255,.3);
}

nav ul li:hover ul {
  display:block;
}
</style>
<!DOCTYPE html>
<html>
  <body>
  <nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Portfolio</a>
      <ul>
        <li><a href="#">Graphic</a></li>
        <li><a href="#">Web</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a>
      <ul>
        <li><a href="#">Map</a></li>
        <li><a href="#">Form</a></li>
      </ul>
    </li>
  </ul>
</nav>
    </body>
  </html>
