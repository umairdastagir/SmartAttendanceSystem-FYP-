  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#" class="navbar-brand" style="color: whitesmoke; text-decoration-style: wavy; font-weight: bold;">BUITEMS Smart Attendance System&nbsp;</a>
        </li>

        <li>
          <a href="<?php echo base_url();?>admin/Departments/Add_Department" class="nav-link" style="color: whitesmoke; text-decoration-style: wavy; "><span style="color: white">Departments</span></a>
        </li>
        <li><a href="#" class="nav-link" style="color: whitesmoke; text-decoration-style: wavy; " onclick="checklogin()"><span style="color: white">My Blogs</span></a></li>
      </ul>

      <div class="dropdown navbar-right">
        <button id="option-id" class="btn btn-light dropdown-toggle bg-dark text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>

        <div class="dropdown-menu" aria-labelledby="option-id">
          <a class="dropdown-item" id="btn-logout" href="#" onclick="logout()">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  </body>
  </html>

  