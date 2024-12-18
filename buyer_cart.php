<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">

    <style>
        body {
            background-color: #ffe6e2;
            font-family: 'Heebo', sans-serif;
        }

        .cart-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #ffeedd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .cart-item img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 15px;
            background-color: #ffebcc;
        }

        .cart-item-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .cart-item-title {
            font-size: 16px;
            font-weight: 600;
        }

        .cart-item-price {
            color: #e82c2c;
            font-weight: bold;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-item-quantity button {
            background-color: #ffcc66;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .cart-item-quantity span {
            font-size: 16px;
            text-align: center;
        }

        .custom-checkbox {
            border: 5px solid black !important; /* Black border with higher thickness */
            border-radius: 5px; /* Optional: rounded corners */
            appearance: none; /* Remove default checkbox style */
        }

        /* When the checkbox is checked */
        .custom-checkbox:checked {
            background-color: black; /* Optional: black fill when checked */
            border-color: black; /* Ensure the border stays black */
        }

        .cart-item-actions {
            display: flex;
            gap: 15px; /* Add space between checkbox and delete icon */
            align-items: center;
        }

        .cart-item-actions button {
            background: none; /* No background */
            border: none; /* No border */
            padding: 0;
            cursor: pointer;
        }

        .cart-item-actions i {
            font-size: 18px;
            color: #e82c2c; /* Trash icon color */
        }

        /* Adjust cart-container padding and flex direction for smaller devices */
        @media (max-width: 768px) {
            .cart-container {
                flex-direction: column; /* Stack items vertically */
                padding: 15px;
            }
            .cart-item {
                flex-direction: column; /* Stack each item content vertically */
                align-items: flex-start; /* Align content to the left */
            }
            .cart-item img {
                margin: 0 auto 10px; /* Center image and add space below */
            }
        }

        /* Adjust for smaller screens like phones */
        @media (max-width: 576px) {
            .cart-container {
                padding: 10px;
            }
        }

    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button class="back-btn" onclick="window.location.href='Buyer_index.php'">
                <i class="fas fa-arrow-left"></i> Back
            </button>
        </div>

        <div>
            <input class="form-control mb-3" type="text" value="My Cart" 
            aria-label="Disabled input example" disabled readonly 
            style="background-color: white; color: black; border-radius: 8px; border: 2px solid #E95F5D; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
        </div>

        <!-- Cart Items and Summary -->
        <div class="d-flex flex-wrap justify-content-between align-items-start cart-container " style="border: 2px solid #E95F5D; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <!-- Cart Items -->
            <div class="cart-container w-100 d-flex flex-column justify-content-between">
                <div class="cart-item d-flex align-items-center justify-content-between">
                    <img src="img/bicol express.jpg" alt="Macarons" class="img-fluid" style="max-width: 120px;">
                    <div class="d-flex flex-column flex-grow-1 mx-3">
                        <h5>Bicol Express</h5>
                        <span class="cart-item-price">Php 20.00</span>
                        <div class="cart-item-quantity">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="quantity">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <input class="form-check-input custom-checkbox" type="checkbox" style="width: 25px; height: 25px;">
                        <!-- Delete Button with Icon -->
                        <button onclick="deleteItem(this)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-item d-flex align-items-center justify-content-between">
                    <img src="img/fried rice.jpg" alt="Macarons" class="img-fluid" style="max-width: 120px;">
                    <div class="d-flex flex-column flex-grow-1 mx-3">
                        <h5>Fried Rice</h5>
                        <span class="cart-item-price">Php 5.00</span>
                        <div class="cart-item-quantity">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="quantity">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <input class="form-check-input custom-checkbox" type="checkbox" style="width: 25px; height: 25px;">
                        <!-- Delete Button with Icon -->
                        <button onclick="deleteItem(this)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-item d-flex align-items-center justify-content-between">
                    <img src="img/ginataangGulay.jpg" alt="Macarons" class="img-fluid" style="max-width: 120px;">
                    <div class="d-flex flex-column flex-grow-1 mx-3">
                        <h5>Ginataang Gulay</h5>
                        <span class="cart-item-price">Php 10.00</span>
                        <div class="cart-item-quantity">
                            <button onclick="decreaseQuantity(this)">-</button>
                            <span class="quantity">1</span>
                            <button onclick="increaseQuantity(this)">+</button>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <input class="form-check-input custom-checkbox" type="checkbox" style="width: 25px; height: 25px;">
                        <!-- Delete Button with Icon -->
                        <button onclick="deleteItem(this)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="pb-2"></div>
                </div>

                 <!-- Bottom Summary and Checkout -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div>
                <h5>Total Amount:</h5>
                <span class="cart-item-price">Php 35.00</span>
            </div>
            <div>
                <button class="btn btn-warning" onclick="window.location.href='buyer_place_order.php'" style="border-radius: 15px;">Checkout</button>
            </div>
        </div>
       
            </div>
           
        </div>

      
    </div>

    <script>
        // Function to increase quantity
        function increaseQuantity(button) {
            const quantityElement = button.parentElement.querySelector('.quantity');
            let currentQuantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = currentQuantity + 1;
        }

        // Function to decrease quantity
        function decreaseQuantity(button) {
            const quantityElement = button.parentElement.querySelector('.quantity');
            let currentQuantity = parseInt(quantityElement.textContent);
            if (currentQuantity > 1) {
                quantityElement.textContent = currentQuantity - 1;
            }
        }

        // Function to delete cart item
        function deleteItem(button) {
            const cartItem = button.closest('.cart-item'); // Find the closest cart item
            cartItem.remove(); // Remove the cart item from the DOM
        }
    </script>

    <!-- External Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
