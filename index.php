<!-- <?php 
// require_once "config.php";
// ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHealth.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="responsivestyle.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="otherdevices.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HQM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services-container">Departments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#client-section">Our Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/login/register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/login/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/login/logout.php">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>
    <section id="home">
        <h1 class="h-primary">Welcome to My Health Care</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime consequuntur ratione.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <form action="http://localhost/login/register.php" method="">
            <button type="submit" class="btn">My Medical</button>
        </form>
    </section>
    
    <section id="services-container">
        <h1 class="h-primary center">Our Departments</h1>
        <div id="services">
            <div class="box">
                <img src="C:\xampp\htdocs\login\1x\burger2.png" alt="food image">
                <h2 class="h-secondary center">Cardio</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia suscipit excepturi
                    nam hic at sint eius sapiente tempora, veniam ratione, aliquam impedit, odit asperiores natus ea
                    architecto. Atque aut, nisi nobis a enim amet.</p>
            </div>
            <div class="box">
                <img src="/1x/Pepperoni-Pizza.png" alt="food image">
                <h2 class="h-secondary center">Orthopedic</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia suscipit excepturi
                    nam hic at sint eius sapiente tempora, veniam ratione, aliquam impedit, odit asperiores natus ea
                    architecto. Atque aut, nisi nobis a enim amet.</p>
            </div>
            <div class="box">
                <img src="/1x/food delivery.png" alt="food image">
                <h2 class="h-secondary center">neuro</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia suscipit excepturi
                    nam hic at sint eius sapiente tempora, veniam ratione, aliquam impedit, odit asperiores natus ea
                    architecto. Atque aut, nisi nobis a enim amet.</p>
            </div>
        </div>
        <div id="services2">
            <div class="box">
                <img src="/1x/burger2.png" alt="food image">
                <h2 class="h-secondary center">Cardio</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia suscipit excepturi
                    nam hic at sint eius sapiente tempora, veniam ratione, aliquam impedit, odit asperiores natus ea
                    architecto. Atque aut, nisi nobis a enim amet.</p>
            </div>
            <div class="box">
                <img src="/1x/Pepperoni-Pizza.png" alt="food image">
                <h2 class="h-secondary center">Orthopedic</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia suscipit excepturi
                    nam hic at sint eius sapiente tempora, veniam ratione, aliquam impedit, odit asperiores natus ea
                    architecto. Atque aut, nisi nobis a enim amet.</p>
            </div>
            <div class="box">
                <img src="/1x/food delivery.png" alt="food image">
                <h2 class="h-secondary center">neuro</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia suscipit excepturi
                    nam hic at sint eius sapiente tempora, veniam ratione, aliquam impedit, odit asperiores natus ea
                    architecto. Atque aut, nisi nobis a enim amet.</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Partners</h1>
        
        <div id="clients">
            
            <div class="client-item">
                <img src="/1x/z comp.png" alt="our client">
            </div>

            <div class="client-item">
                <img src="/1x/b comp.png" alt="our client">
            </div>

            <div class="client-item">
                <img src="/1x/x comp.png" alt="our client">
            </div>

            <div class="client-item">
                <img src="/1x/a comp.png" alt="our client">
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center" id = "appointHead">Contact us </h1>
        <div id="contact-box">
            <form action="get" method="">
                <div class="form-group">
                    <label class="lab" for="name">Name: </label>
                    <input class="inp" type="text" name="name" id="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label class="lab" for="email">Email: </label>
                    <input class="inp" type="email" name="email" id="email" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label class="lab" for="number">Contact: </label>
                    <input class="inp" type="tel" name="number" id="number" placeholder="Enter Your contact" required>
                </div>
                <div class="form-group">
                    <label class="lab" for="number">Age: </label>
                    <input class="inp" type="number" name="age" id="age" placeholder="Enter Your Age" required>
                </div>
                <div class="radiobtn">
                    <label for="male"> Male: </label>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="female"> Female: </label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="other"> Other: </label>
                    <input type="radio" name="gender" id="other" value="other">
                </div>
                <div class="dep">
                    Departments:
                    <select>
                        <option>Cardio</option>
                        <option>Respiratory</option>
                        <option>Orthopedic</option>
                        <option>Physician</option>
                        <option>Neuro</option>
                        <option>Digestive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="lab" for="message">Description: </label>
                    <textarea name="message" id="message" cols="20" rows="10"></textarea>
                </div>
                <div >
                    <form action="get" method="">
                        <button type="submit" class="btnt extra" onclick="">Submit</button>
                    </form>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.MyHealth.com. All Rights Reserved!
        </div>
    </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>
