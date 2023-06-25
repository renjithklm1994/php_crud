<?php
function validaton_db( $name, $email, $phone,$reg_number,$gender,$course, $errors
)
{ $valid = true;
    
    if (empty($name)) {
        $errors[] = "Name is required.";
        $valid = false; 
    } else {
        if (empty($email)) {
            $errors[] = "Email is required.";
            $valid = false; 
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
            $valid = false; 
        }
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
        $valid = false; 
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Invalid phone number format.";
        $valid = false; 
    }

    if (empty($reg_number)) {
        $errors[] = "Registration number is required.";
        $valid = false; 
    }

    $allowedGenders = ['male', 'female', 'other'];
    if (empty($gender) || !in_array($gender, $allowedGenders)) {
        $errors[] = "Invalid gender.";
        $valid = false; 
    }

    if (empty($course)) {
        $errors[] = "Course is required.";
        $valid = false; 
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        $valid = false;
    }

    return $valid;
}

?>
