<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/extend/icons/" class="icons">
    <link rel="stylesheet" href=" https://cdnjs.com/libraries/font-awesome" class="icons">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Homepage</title>
  </head>
  <body>
    
         
    <x-partials.header/>

    <main>
    {{ $slot }}  
    </main>
    

    <x-partials.footer/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
