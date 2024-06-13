<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portifolio</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
</head>


<body>


    <div id="header">
        <div class="container">
            <nav>
                <img src="../assets/mamage/logo.png" class="logo">

                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/porto">Portofolio</a></li>
                    <li><a href="/kontak">Contact</a></li>
                    <i class="material-icons">close</i>
                </ul>
                <i class="material-icons">menu</i>
            </nav>
            
    <!-------- About--------->
  @yield('konten')
    </div>
    </div>




    <!---------------------------------- services ---------------------------->
  
    <!-------------------- portofolio --------------------------->


    <!-- contact -->
    

    <script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classlist.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classlist.remove("active-tab");
            }
            event.currentTarget.classlist.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }

    </script>
</body>

</html>