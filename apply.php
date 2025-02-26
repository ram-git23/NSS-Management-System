<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include "header.php" ?>

    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-sm navbar-dark p-0"
      style="background-color: var(--primary_blue)"
    >
      <div class="container-fluid d-flex justify-content-between">
        <!-- Toggler for collapsing links -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible Section for all links -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav d-flex mx-auto">
            <a class="nav-item nav-link" href="home.php"
              >HOME</a
            >
            <a class="nav-item nav-link" href="about.php">ABOUT</a>
            <a class="nav-item nav-link" href="contact.php">CONTACT</a>
            <a class="nav-item nav-link" href="gallery.php">GALLERY</a>
            <a class="nav-item nav-link" href="announcements.php">ANNOUNCEMENTS</a>
            <a class="nav-item nav-link active" aria-current="page" href="apply.php">APPLY</a>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="student/login.php" target="_blank">Student Login</a>
                <a class="dropdown-item" href="executive/login.php" target="_blank">Executive Login</a>
                <a class="dropdown-item" href="po/login.php" target="_blank">Program Officer Login</a>
                <a class="dropdown-item" href="admin/login.php" target="_blank">Admin Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Content  -->
     <div class="container mt-4">
        <!-- <span class="display-6 fw-normal">Register For NSS Volunteer</span> -->
        <form>
            <div class="mb-3">
                <label for="registerNo" class="form-label">Register No</label>
                <input type="text" class="form-control" id="registerNo" placeholder="222BCAA42">
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Leo">
            </div>
            <div class="mb-3">
                <label for="fatherName" class="form-label">Father Name</label>
                <input type="text" class="form-control" id="fatherName" placeholder="Antony">
            </div>
            <div class="mb-3">
                <label for="motherName" class="form-label">Mother Name</label>
                <input type="text" class="form-control" id="motherName" placeholder="Angel">
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="phoneNumber" placeholder="987xxxxx13">
            </div>
            <div class="mb-3">
                <label for="emailId" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailId" placeholder="email@example.com">
            </div>
            <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dateOfBirth" placeholder="01-01-2000">
            </div>
            <div class="mb-3">
                <label for="addressStd" class="form-label">Address</label>
                <textarea class="form-control" id="addressStd" rows="3" placeholder="#25, Langford Road, Bengaluru - 27"></textarea>
            </div>
            <div class="mb-3">
                <label for="genderStd" class="form-label">Gender</label>
            <select class="form-select" id="genderStd" aria-label="Default select example">
                <option selected disabled>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="categoryStd" class="form-label">Category</label>
            <select class="form-select" id="categoryStd" aria-label="Default select example">
                <option selected disabled>Select Category</option>
                <option value="general">General</option>
                <option value="obc">OBC</option>
                <option value="sc">SC</option>
                <option value="st">ST</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="shiftStd" class="form-label">Shift</label>
            <select class="form-select" id="shiftStd" aria-label="Default select example">
                <option selected disabled>Select Shift</option>
                <option value="1">Shift-1</option>
                <option value="2">Shift-2</option>
                <option value="3">Shift-3</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="ageStd" class="form-label">Age</label>
                <input type="number" class="form-control" id="ageStd" placeholder="xx">
            </div>
            <div class="mb-3">
                <label for="bloodGroup" class="form-label">Bloodgroup</label>
            <select class="form-select" id="bloodGroup" aria-label="Default select example">
                <option selected disabled>Select Bloodgroup</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="courseName" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="courseName" placeholder="BCA">
            </div>
            <div class="mb-3">
                <label for="profilePhoto" class="form-label">Profile Photo</label>
                <input type="file" class="form-control" id="profilePhoto">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </div>
        </form>
     </div>

    <!-- Footer and logos -->
    <?php include "footer.php" ?>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
