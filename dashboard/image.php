<?php
if (isset($_POST['submit'])) {
    // Your existing code for input validation here...

    if (empty($err)) { // If there are no validation errors
        if (isset($_FILES['mobile_photo'])) {
            $uploadDir = 'uploads/'; 
            $uploadedFile = $_FILES['mobile_photo'];

            if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
                $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
                $uniqueFileName = uniqid('mobile_') . '.' . $fileExtension;

                if (move_uploaded_file($uploadedFile['tmp_name'], $uploadDir . $uniqueFileName)) {
                    // Image uploaded successfully
                    $imagePath = $uploadDir . $uniqueFileName;

                    // Your database insertion code here...

                    echo "Mobile and Image Added Successfully";
                    // Clear form fields after successful submission
                    $mobile_name = "";
                    $mobile_details = "";
                    $add_date = "";
                    $status = "";
                } else {
                    echo "Failed to upload image. Please try again.";
                }
            }
        } else {
            echo "No file was uploaded.";
        }
    } else {
        // If there are errors, you can delete the uploaded file
        if (isset($imagePath)) {
            unlink($imagePath); // Delete the uploaded image file
        }
    }
}
?>



    <label for="mobile_photo">Image</label>
    <input type="file" name="mobile_photo" id="mobile_photo"><br><br>