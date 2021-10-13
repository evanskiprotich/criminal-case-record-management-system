<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
</head>

<body>
    <div id="content">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
            echo "<img src='images/" . $row['image'] . "' >";
            echo "<p>" . $row['image_text'] . "</p>";
            echo "</div>";
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <?php $statusMsg = ''; ?>
            Select Image File to Upload:
            <input type="file" name="image">
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>
</body>

</html>
<?php
// Create database connection
$db = mysqli_connect('localhost', 'crime', '', 'criminalsystem');
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["image"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $db->query("INSERT into images (image, uploaded_on) VALUES ('" . $fileName . "', NOW())");
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>