<?php

require_once ('connect.php');

if (isset($_POST) & !empty($_POST)){
    $nom= ($_POST['nom']);
    $prenom= ($_POST['prenom']);
    $Dnaissance= ($_POST['Dnaissance']);
    $netablissement= ($_POST['netablissement']);
    $anneeobtention= ($_POST['anneeobtention']);
    $image= ($_POST['image']);
    $createSql = "INSERT INTO `dipbet`  (nom, prenom , Dnaissance , Netablissement , Anneeobtention ,src) 
      VALUES('$nom ' , '$prenom' , ' $Dnaissance' , '$netablissement' , ' $anneeobtention' ,'$image')";
    
       $res = mysqli_query($con, $createSql) or die(mysqli_error($con));

       if ($res){
       //Rediriger l'utilisateur vers la page d'accueil
       header('Location: paye.php');
       } else {
        $erreur = "erreur d indertion ";
       }
      
   
    }

    


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FILETECH</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">



</head>

<body id="page-top">



<?php
                  session_start();
                   if(!isset($_SESSION['log']))
                { 
              header("location:  href=http://localhost/filetech/");
                   }
                
              
?>
    
    <?php
          
                if($_SESSION['log'] !== ""){
                    $user = $_SESSION['log']; 
                }
               ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FILETECH</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Acceuil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            Demande de retrait du diplôme
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>MEPSA</span>
                </a>
                <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">MEPSA</h6>
                        <a class="collapse-item " href="BacGeneral.php">BAC</a>
                        <a class="collapse-item" href="BEPCGeneral.php">BEPC</a>
                        <a class="collapse-item" href="CEPE.php">CEPE</a>
                    </div>
                </div>
            </li>
             

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>METP</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner  rounded ">
                        <h6 class="collapse-header">METP</h6>
                        <a class="collapse-item " href="#">BAC</a>
                        <a class="collapse-item active" href="bepctechnique.php">BET</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Aides</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Aides:</h6>
                        <a class="collapse-item" href="AjoutUtilisateur.php">Plaintes</a>
                        <a class="collapse-item" href="#">Requetes</a>
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       
                             <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">1+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifications
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Septembre 12, 2021</div>
                                        <span class="font-weight-bold">Bonjour cher Monsieur Votre diplôme est prêt! Assurez-vous de vous rapprocher de la DEC avec votre reçu </span>
                                    </div>
                                </a>
                                
                            </div>
                        </li>





                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php
               
                                      echo " $user";
                                 
                                    ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Options
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mes demandes
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href='http://localhost/filetech/'>
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Deconnexion
                                </a>
                                    <!-- tester si l'utilisateur est connecté -->
                                 <?php
                                     if(isset($_GET['deconnexion']))
                                     { 
                                        if($_GET['deconnexion']==false)
                                        {  // Détruit toutes les variables de session
                                         
                                           header("location: http://localhost/filetech/");
                                         
                                        }
                                        $_SESSION = array();
                                        session_destroy();
                                         session_unset();
                                       
                                     }
                                   
                  
               
             
                                   ?>





                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Demande de retrait du BET</h1>
                        
                                   
                    </div>
                
                   
                    

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7 container">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Nouvelle demande</h6>
                                    <div class="dropdown no-arrow">

                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <?php
                                  if (isset($message)){ ?>
                                    <div class="alert alert-sucess " style="background-color:green; color:white;" role="alert"> 
                                    <?php  echo $message; ?>
                                    </div> <?php  }?>

                                    <?php
                                  if (isset($erreur)){ ?>
                                    <div class="alert alert-danger " style="background-color:red; color:white;" role="alert"> 
                                    <?php  echo $erreur; ?>
                                    </div> <?php  }?>
                                 
                                 

                                <form class="container" method="POST">
                                <h6 class="m-0 font-weight ">Veillez remplir le formulaire</h6>
                                <!-- Divider -->
                                <hr class="sidebar-divider my-0">
                                <br>

        

        <div class="mb-3">
            <label for="input1" class="form-label">Nom(s)</label>
            <input type="text" class="form-control" name="nom" id="input1" required="">
        </div>
        <div class="mb-3">
            <label for="input1" class="form-label">Prenom(s)</label>
            <input type="text" class="form-control" name="prenom" id="input1" required="">
        </div>
        <div class="mb-3">
            <label for="input1" class="form-label">Date de naissance</label>
            <input type="date" class="form-control" name="Dnaissance" id="input1" required="">
        </div>
        <div class="mb-3">
            <label for="input1" class="form-label"> Noms de votre Etablissement</label>
            <input type="text" class="form-control" name="netablissement" id="input1" required="">
        </div>
      
        <div class="mb-3">
            <label for="input1" class="form-label">Année d'obtention du Bac</label>
            <input type="text" class="form-control" name="anneeobtention" id="input1" required="">
            
        </div>

       

        
    <p class="error">
        <?php 
           //afficher une erreur si la variable message existe
           if(isset($message)) echo $message ;
        ?>
    </p>
    
        <label>Ajouter une image de l'acte de naissance ou la pièce d'identité du candidat</label>
        <br>
        <input type="file" name="image">
        </input>
        <br>
        <input type="submit" class=" container btn btn-primary m-a" value="Etape suivante">
        
        </input>
                               
                                </div>
                            </div>
                        </div>
                        

                       
                            </div>
                        </div>
                    </div>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Filetech 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>