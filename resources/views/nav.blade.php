<!DOCTYPE html>
<html lang="en">
  <head>
    <title>header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>   
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="#">BRAND</a>
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto">
          <li><a href="/v2/guide/login.html" class="nav-link login">login</a></li>  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <h5>Documentation</h5>
              <a class="dropdown-item" href="#">Guide</a>
              <a class="dropdown-item" href="#">API</a>
              <a class="dropdown-item" href="#">Style Guide</a>
              <a class="dropdown-item" href="#">Example</a>
              <a class="dropdown-item" href="#">Cookbook</a>
              <div class="dropdown-divider"></div>
              <h5>Vue Courses</h5>
              <a class="dropdown-item" href="#">Vue Mastery</a>
              <a class="dropdown-item" href="#">Vue School</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <h5>Help</h5>
              <a class="dropdown-item" href="#">Forum</a>
              <a class="dropdown-item" href="#">Chat</a>
              <a class="dropdown-item" href="#">Meetups</a>
              <div class="dropdown-divider"></div>
              <h5>Tooling</h5>
              <a class="dropdown-item" href="#">Devtools</a>
              <a class="dropdown-item" href="#">Vue CLI</a>
              <a class="dropdown-item" href="#">Vue Loader</a>
              <div class="dropdown-divider"></div>
              <h5>Core Libraries</h5>
              <a class="dropdown-item" href="#">Vue Router</a>
              <a class="dropdown-item" href="#">Vuex</a>
              <a class="dropdown-item" href="#">Vue Server Renderer</a>
              <div class="dropdown-divider"></div>
              <h5>News</h5>
              <a class="dropdown-item" href="#">Weekly News</a>
              <a class="dropdown-item" href="#">Roadmap</a>
              <a class="dropdown-item" href="#">Events</a>
              <a class="dropdown-item" href="#">Twitter</a>
              <a class="dropdown-item" href="#">Blog</a>
              <a class="dropdown-item" href="#">Jobs</a>
              <a class="dropdown-item" href="#">DEV Community</a>
            </div>
          </li>
          <li><a href="/v2/guide/team.html" class="nav-link team">Team</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>              
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Partners</a>
              <a class="dropdown-item" href="#">Themes</a>
              <a class="dropdown-item" href="#">Awesome Vue</a>
              <a class="dropdown-item" href="#">Browser packages for Vue</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Email</a>
              <a class="dropdown-item" href="#">Mobile</a>
              <a class="dropdown-item" href="#">Chat</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Translation
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">French</a>
              <a class="dropdown-item" href="#">Chinese</a>
              <a class="dropdown-item" href="#">Português</a>
              <a class="dropdown-item" href="#">English</a>
              <a class="dropdown-item" href="#">Hindi</a>
              <a class="dropdown-item" href="#">Spanish</a>
              <a class="dropdown-item" href="#">Bahasa Indonesia</a>
              <a class="dropdown-item" href="#">Korean</a>
              <a class="dropdown-item" href="#">Russian</a>
            </div>
            <li><div class="container-fluid">
                <form class="d-flex input-group w-auto">
                    <input
                        type="search"
                        class="form-control rounded"
                        placeholder="Search"
                        aria-label="Search"
                        aria-describedby="search-addon"
                    />
                </form>
            </div></li>
          </li>
        </ul>
      </div>
    </nav> 
  </body>
</html>
