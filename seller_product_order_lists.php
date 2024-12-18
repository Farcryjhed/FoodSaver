<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/seller_product_order_lists.css">
  <link rel="stylesheet" href="css/profile.css">
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container py-4">
    <!-- Back Button aligned with title and content -->
    <div class="row justify-content-center mb-3">
      <div class="col-md-10 text-center">
        <button class="back-btn btn btn-link" onclick="window.location.href='Seller_index.php'" style="text-decoration: none;">
          <i class="fas fa-arrow-left"></i> Back
        </button>
      </div>
    </div>

    <!-- Page Title -->
    <div class="row justify-content-center mb-4">
      <div class="col-md-10 text-center">
        <input class="form-control" type="text" value="       Product Order Lists" aria-label="Disabled input example" disabled readonly style="background-color: white; color: black; border: 2px solid #E95F5D; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
      </div>
    </div>

      <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmationModalLabel">Confirm Cancellation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to cancel the order?
            </div>
            <div class="modal-footer">        
              <button type="button" class="btn btn-danger" id="confirmCancelBtn">Yes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Main Content (Product Orders) in one row and column -->
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="favorites-container" style="background-color: #FFD09B;" >
        <table class="table mt-3">
          <thead style="border-bottom: 1px solid #f59795;">
              <tr>
                  <th>Order ID</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th class="pl-5">Action</th>
              </tr>
          </thead>
          <tbody style="border-bottom: 1px solid #f59795;">
              <tr>
                  <td>#12345</td>
                  <td>Corned Beef</td>
                  <td>2</td>
                  <td>Php 20</td>
                  <td>Pending</td>
                  <td>
                      <button class="delete-btn btn btn-danger" style="margin-right: 5px;">Cancel</button>
                  </td>
              </tr>
              <tr>
                  <td>#12346</td>
                  <td>Pancit Canton</td>
                  <td>3</td>
                  <td>Php 6</td>
                  <td>Pending</td>
                  <td>
                      <button class="delete-btn btn btn-danger">Cancel</button>
                  </td>
              </tr>
              <tr>
                  <td>#12347</td>
                  <td>Century Tuna</td>
                  <td>1</td>
                  <td>Php 20</td>
                  <td>Pending</td>
                  <td>
                      <button class="delete-btn btn btn-danger">Cancel</button>
                  </td>
              </tr>
          </tbody>
      </table>

      <script>
    // Wait for the DOM to be ready
    document.addEventListener('DOMContentLoaded', () => {
        let rowToDelete = null; // Store the row to delete
        
        // Get all delete buttons
        const deleteButtons = document.querySelectorAll('.delete-btn');

        // Add event listener for each delete button
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Store the row to delete
                rowToDelete = button.closest('tr');
                
                // Show the Bootstrap modal
                const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                modal.show();
            });
        });

        // Confirm cancellation and remove row
        document.getElementById('confirmCancelBtn').addEventListener('click', function() {
            if (rowToDelete) {
                rowToDelete.remove(); // Remove the row from the table
            }
            
            // Hide the modal after confirming
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmationModal'));
            modal.hide();
        });
    });
</script>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
