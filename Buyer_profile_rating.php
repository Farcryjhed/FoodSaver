<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile / Rating</title>
    <link href="img/favicon.ico" rel="icon">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    
    <style>

        .profile-container {
            background-color: #ffe6e2;
            border-radius: 10px;
            padding: 20px;
        }

        .sidebar {
            background-color: #ffe6e2;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .sidebar img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar h5 {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .sidebar .menu-item {
            background-color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar .menu-item:hover {
            background-color: #ffdad6;
        }

        .sidebar .menu-item i {
            margin-right: 8px;
            color: #ff6b6b;
        }

        .favorites-container {
            background-color: #ffe6e2;
            border-radius: 10px;
            padding: 20px;
        }

        .favorite-item {
            background-color: #fff;
            border-radius: 10px;
            padding: 15px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .favorite-heart {
        font-size: 32px;
        color: red;
    }

        .favorite-item:hover {
            background-color: #ffdad6;
        }

        .favorite-item i {
            color: #ff6b6b;
        }

        .hov a:hover,
        .hov button:hover {
        background-color: #ffdad6 !important; /* Change background color on hover */
        color: #000000 !important; /* Optional: Change text color if needed */

   
}

    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Back Button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="back-btn" onclick="window.location.href='Buyer_index.php'">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
            </div>
        </div>
        <div style="border: 2px solid #E95F5D; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <input class="form-control" type="text" value="       My Profile / Rating" 
            aria-label="Disabled input example" disabled readonly 
            style="background-color: white; color: black;">
        </div>
        <!-- Profile Content -->
        <div class="row g-3 mt-1 ">
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar pt-5" style="border: 2px solid #E95F5D; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <!-- Profile Icon -->
                    <div class="profile-picture-container">
                        <img 
                            src="img/uriel1.png" 
                            alt="Profile Picture" 
                            id="profile-pic" 
                            style="cursor: pointer;" 
                            onclick="window.location.href='Buyer_profile.php';">
                    </div>

                    <a href="Buyer_profile.php" class="pb-4 name" style="text-decoration: none;"><h5>Hau C.</h5></a>
                    <!-- Favorites Menu Item -->

                    <div class="hov d-flex justify-content-center pt-3 pb-4">
                        <!-- Purchases Button -->
                        <a href="Buyer_profile_favorites.php" 
                           class="btn btn-light d-flex align-items-center px-4 py-3 bg-white" 
                           style="border-radius: 12px; width: 350px;">
                            <i class="fas fa-heart me-4"></i>
                            <span class="text-start">Favorites</span>
                        </a>
                    </div>
 

                    <div class="hov d-flex justify-content-center">
                        <!-- Rating Button -->
                        <a href="Buyer_profile_purchase.php" 
                           class="btn btn-light d-flex align-items-center px-4 py-3 bg-white" 
                           style="border-radius: 12px; width: 350px;">
                            <i class="fas fa-shopping-cart me-4"></i>
                            <span class="text-start">Purchases</span>
                        </a>
                    </div>
                    <div class="pb-4"></div>
                    <div class="d-flex justify-content-center" id="navbarCollapse">
                        <!-- Favorites Button -->
                        <button 
                            type="button" 
                            class="btn text-white d-flex align-items-center px-4 py-3" 
                            style="background-color: #ff6b6b;  border-radius: 12px; pointer-events: none; width: 350px;">
                            <i class="fas fa-star me-4"></i>
                            <span class="text-start">Rating</span>
                        </button>
                    </div>
                    
 
                    
                  
                    <div class="nav flex-column">           
                    </div>
                    <div class="pt-5 pb-5">
                    </div>

                    <div class="pt-2 ">
                    </div>
                 
                </div>
            </div>

            <!-- Favorites -->
            <div class="col-md-8">
                <div class="favorites-container" style="border: 2px solid #E95F5D; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <div class="favorite-item mt-2" data-bs-toggle="modal" data-bs-target="#centuryTunaModal">
                        <span>Kinilaw</span> <span>Rate us</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="centuryTunaModal" tabindex="-1" aria-labelledby="centuryTunaModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color: #FFECC8; border-radius: 12px; border: 2px solid #FFD09B;">
                                <div class="modal-header" style="border-bottom: 1px solid #FFD09B;">
                                    <h5 class="modal-title" id="centuryTunaModalLabel" style="font-family: 'Nunito', sans-serif; font-weight: 700; color: #E95F5D;">Customer’s Feedback</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFB0B0;"></button>
                                </div>
                                <div class="modal-body" style="padding: 20px;">
                                    <div class="d-flex align-items-center">
                                        <img src="img/kinilaw.jpg" alt="Century Tuna" style="width: 100px; height: 100px; border-radius: 10px; margin-right: 20px; border: 2px solid #FFD09B;">
                                        <div>
                                            <p style="margin: 0; font-family: 'Nunito', sans-serif; font-weight: 600;">Product Name: Kinilaw</p>
                                            <p style="margin: 0; font-family: 'Nunito', sans-serif;">Store Name: Legarose</p>
                                            <p style="margin: 0; font-family: 'Nunito', sans-serif;">Best Before: November 25, 2024</p>
                                            <p style="margin: 0; font-family: 'Nunito', sans-serif;">Price: Php 35.00</p>
                                            
                                        </div>
                                    </div>
                                  
                                    
                                    <div class=" star-widget">

                                        <input type="radio" name="star" id="star1"><label for="star1" class="fas fa-star"></label>
                                        <input type="radio" name="star" id="star2"><label for="star2" class="fas fa-star"></label>
                                        <input type="radio" name="star" id="star3"><label for="star3" class="fas fa-star"></label>
                                        <input type="radio" name="star" id="star4"><label for="star4" class="fas fa-star"></label>
                                        <input type="radio" name="star" id="star5"><label for="star5" class="fas fa-star"></label>                           
                                </div>
                                <label style="font-family: 'Nunito', sans-serif; font-weight: 600;">Rate:</label>
                                    
                                    <div class="mt-3">
                                        <label for="comments" style="font-family: 'Nunito', sans-serif; font-weight: 600;">Comments:</label>
                                        <textarea id="comments" class="form-control" rows="4" placeholder="Write your comments here..." style="border: 2px solid #FFD09B; border-radius: 10px;"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer" style="border-top: 1px solid #FFD09B;">
                                    
                                    <button type="button" class="btn" style="background-color: #E95F5D; color: #FFF; border-radius: 10px;" onclick="window.location.href='Buyer_profile_rating.php'">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

         
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
