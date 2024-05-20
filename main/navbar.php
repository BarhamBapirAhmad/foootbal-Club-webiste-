<style>
  

  nav {
    font-size: large !important;
    position: fixed;
     height: 70px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
  }

  img {
    height: 80px;
    margin-top: -15px;
    margin-left: 15px;
    vertical-align: middle;
  }

  nav ul {
    width: 100%;
    list-style: none;
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  nav li {
    height: 50px;
     padding-left: 15px ;
  }
  nav li:hover {
  background-color: #f0f0f0;
 }

  nav a {
    height: 100%;
    padding: 0 30px;
    text-decoration: none;
    display: flex;
    align-items: center;
    color: black;
  }

  /* nav a:hover {
    background-color: #f0f0f0;
    text-decoration: underline; /* Add underline on hover */


  nav li:first-child {
    margin-right: auto;
  }
  nav li:nth-child(7) {
    margin-left:20%;
    text-align: center;
    border: #fec709 2px solid;
    border-radius: 16px;
    padding: -10px;
  }  

  .sidebar {
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 250px;
    background-color: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(12px);
    box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
    list-style: none;
    display: none;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    z-index: 99999;
  }

  .sidebar li {
    width: 100%;
  }

  .sidebar a {
    width: 100%;
  }

  .menu-button {
    display: none;
  }

  @media (max-width: 900px) {
    .hideOnMobile {
      display: none;
    }

    .menu-button {
      display: block;
    }
  }

  @media (max-width: 400px) {
    .sidebar {
      width: 100%;
      height: 50%;
    }
  }
  * {
  margin: 0;
  padding: 0;
}

nav {
  font-size: large !important;
  position: fixed;
  z-index: 99999999999;
  height: 70px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
}

img {
  height: 80px;
  margin-top: -15px;
  margin-left: 15px;
  vertical-align: middle;
}

nav ul {
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

nav li {
  height: 50px;
}

nav a {
  height: 100%;
   text-decoration: none;
  display: flex;
  align-items: center;
  color: black;
  position: relative; /* Added for pseudo-element positioning */
  transition: .2s linear;
}

nav a::before {
  content: "";
  position: absolute;
  top: 92%;
  left: 0;
  background-color: #fec709;
  height: 3px;
  width: 0;
  transition: width .2s linear; /* Added transition for width change */
}

nav a:hover {
  background-color: #f0f0f0;
  transform: translate(8px) scale(1.1);
}

nav a:hover::before {
  width: 100%;
}

.menu-button {
  display: none;
}
nav li:nth-child(7) {
    margin-left:20%;
    text-align: center;
    border: #fec709 2px solid;
    border-radius: 16px;
    padding: -10px;
    width: auto;
    height: auto;
  }  
@media (max-width: 1000px) {
  .hideOnMobile {
    display: none;
  }
.nav li:nth-child(7) {
  margin-left: 5%;
}
  .menu-button {
    display: block;
  }
}

@media (max-width: 400px) {
  .sidebar {
    width: 100%;
    height: 50%;
  }
}

</style>
<?php   
        $href = isset($_SESSION['email']) ? '../logout.php' : '../login.php';
       
        $text = isset($_SESSION['email']) ? 'Logout' : 'Login';
      ?>
<nav>
  <ul class="sidebar">
    <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
    <li><a href="Home.php">Home</a></li>
    <li><a href="about-club.php">AboutUS</a></li>
    <li><a href="squad.php">Squad</a></li>
    <li><a href="matches.php">season Table</a></li>
    <li><a href="contactus.php">contact us </a></li>
    <li>
      <a href= "../login.php" class="login-button">login</a>
      

      </li>
  </ul>
  <ul class="pcscreen">
    <li><img src="https://github.com/luukhopman/football-logos/blob/master/logos/L1/Bayer%2004%20Leverkusen.png?raw=true" alt=""></li>
    <li class="hideOnMobile"><a href="Home.php">Home</a></li>
    <li class="hideOnMobile"><a href="about-club.php">AboutUS</a></li>
    <li class="hideOnMobile"><a href="squad.php">squad</a></li>
    <li class="hideOnMobile"><a href="matches.php">Season Table</a></li>
    <li class="hideOnMobile"><a href="contactus.php">contact us </a></li>
    <li class="hideOnMobile"><a href="../login.php">login</a></li>
    <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
  </ul>
  
</nav>

<script>
  function showSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
  }

  function hideSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
  }
</script>
