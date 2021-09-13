<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">

    <title>I Want Flowers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css">
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="Products.php" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="locations.php" class="nav-link">Store Location</a></li>
            <li class="nav-item"><a href="Contact.php" class="nav-link active" aria-current="page">Contact Us</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
      

          </ul>
        </header>
      </div>

      <h2 style="text-align: center;">Contact</h2>
                
                <p style="text-align: center;">If you have any queries for us please feel free to fill out the form below or contact us by copying the teams email adress <a href="mailto:website@IWantFlowers.com.au">here</a> to your Email provider of choice. </p>
                <div id="error"></div>
                <form style="text-align: center;" id="form" action="/" method="GET">
                    <div>
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email">
                    </div>
                    <div>
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" type="subject" >
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <input id="description" name="description" type="description">
                    </div>
                    <button type="submit" id="submit" >Submit</button>
                </form>
            </div>
                <script>
                  const name = document.getElementById('name')
                  const description = document.getElementById('description')
                  const form = document.getElementById('form')
                  const errorElement = document.getElementById('error')
                  const submit = document.getElementById('submit')


                  form.addEventListener('submit', (e) => {
                    let messages = []
                    if (name.value === '' || name.value == null) {
                      messages.push('Name is required')
                    }

                    if (description.value.length <= 6) {
                      messages.push('Description must be longer than 6 characters')
                    }
                    if (messages.length > 0) {
                      e.preventDefault()
                      errorElement.innerText = messages.join(', ')
                    }
                  })

                </script>
    
      
    <!-- TODO: Here goes your content! -->


    <div style="text-align: center;">© 2020 Copyright:
        <a href="xyz"> Isaac Gannon</a>
      </div>
    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="form.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>