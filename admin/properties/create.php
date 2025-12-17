<?php

    // Database
    require '../../includes/config/database.php';
    $db = connectDB();

    // Query to get sellers
    $query = "SELECT * FROM sellers";
    $result = mysqli_query($db, $query);

    // Array to store errors
    $errors = [];

    $title = $_POST['title'] ?? '';
    $price = $_POST['price'] ?? '';
    $description = $_POST['description'] ?? '';
    $bedrooms = $_POST['bedrooms'] ?? '';
    $bathrooms = $_POST['bathrooms'] ?? '';
    $parking = $_POST['parking'] ?? '';
    $seller = $_POST['seller'] ?? '';

    // Execute the code after the user sends the form
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $title = mysqli_real_escape_string($db, $_POST['title'] ?? '');
        $price = mysqli_real_escape_string($db, $_POST['price'] ?? '');
        $description = mysqli_real_escape_string($db, $_POST['description'] ?? '');
        $bedrooms = mysqli_real_escape_string($db, $_POST['bedrooms'] ?? '');
        $bathrooms = mysqli_real_escape_string($db, $_POST['bathrooms'] ?? '');
        $parking = mysqli_real_escape_string($db, $_POST['parking'] ?? '');
        $seller = mysqli_real_escape_string($db, $_POST['seller'] ?? '');
        $created = date('Y/m/d');

        // Assign file to a variable
        $image = $_FILES['image'] ?? null;


        if(!$title) {
            $errors[] = "The title is required";
        }
        if(!$price) {
            $errors[] = "The price is required";
        }
        if(!$image || $image['error'] || !$image['name']) {
            $errors[] = "The image is required";
        }
        if($image && !$image['error']) {
            // Validate image size (1MB max)
            $maxSize = 1000 * 1000;
            if($image['size'] > $maxSize) {
                $errors[] = "The image is too large. The maximum size is 1MB";
            }

            // Validate image type (JPG or PNG)
            $allowedTypes = ['image/jpeg', 'image/png'];
            if(!in_array($image['type'], $allowedTypes)) {
                $errors[] = "The image must be JPG or PNG";
            }
        }
        if(strlen($description) < 50) {
            $errors[] = "The description is required and must be at least 50 characters";
        }
        if(!$bedrooms) {
            $errors[] = "The number of bedrooms is required";
        }
        if(!$bathrooms) {
            $errors[] = "The number of bathrooms is required";
        }
        if(!$parking) {
            $errors[] = "The number of parking spaces is required";
        }
        if(!$seller) {
            $errors[] = "The seller is required";
        }

        //Check if there are no errors
            // echo "<pre>";
            // var_dump($errors);
            // echo "</pre>";
        
        if(empty($errors)) {
            
            //** FILE UPLOAD **//
            // Create a folder
            $imagesDir = '../../images/';
            if(!is_dir($imagesDir)) {
                mkdir($imagesDir);
            }

            // Generate a unique name for the image
            $imageName = md5(uniqid(rand(), true)) . ".jpg";
            // Upload the image
            move_uploaded_file($image['tmp_name'], $imagesDir . $imageName);


            //Insert to DB
            $query = "INSERT INTO properties (title, price, image, description, bedrooms, bathrooms, parking, created, seller_id) VALUES ('$title', '$price', '$imageName', '$description', $bedrooms, $bathrooms, $parking, '$created', $seller);";

            $result = mysqli_query($db, $query);
            if($result) {
                header('Location: /admin');
            }
        }
    }

    require '../../includes/functions.php';
    includeTemplate('header');
?>

    <main class="container section">
        <h1>Create</h1>
        
        <a href="/admin" class="button-green">Back</a>

        <?php foreach($errors as $error): ?>
            <div class="alert error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form action="/admin/properties/create.php" method="POST" class="form" enctype="multipart/form-data">
            <fieldset>
                <legend>General Information</legend>
                
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Property Title" value="<?php echo $title; ?>">
                
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Property Price" value="<?php echo $price; ?>">
                
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/jpeg, image/png">
                
                <label for="description">Description</label>
                <textarea id="description" name="description"><?php echo $description; ?></textarea>
                
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>
                
                <label for="bedrooms">Bedrooms</label>
                <input type="number" id="bedrooms" name="bedrooms" placeholder="e.g. 3" min="1" max="9" value="<?php echo $bedrooms; ?>">
                
                <label for="bathrooms">Bathrooms</label>
                <input type="number" id="bathrooms" name="bathrooms" placeholder="e.g. 2" min="1" max="9" value="<?php echo $bathrooms; ?>">
                
                <label for="parking">Parking Spaces</label>
                <input type="number" id="parking" name="parking" placeholder="e.g. 2" min="1" max="9" value="<?php echo $parking; ?>">
            </fieldset>

            <fieldset>
                <legend>Seller</legend>
                
                <select id="seller" name="seller">
                    <option value="" disabled selected>-- Select --</option>
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                        <option <?php echo $seller === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['name'] . " " . $row['lastname']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Create Property" class="button-green-block">
        </form>
        
    </main>

<?php includeTemplate('footer'); ?>