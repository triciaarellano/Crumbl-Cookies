
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5 w-50 border border-primary rounded mt-5">
        <div class="row mb-4">
            <div class="col text-center fw-bold">
                <span class="display-2 text-primary" >Register</span>
            </div>
        </div>
        <form action="sampleform.php" method="post" enctype="multipart/form-data"> <!-- to create function and put js to submit button -->
        <!-- require yung ENCTYPE if there is an image/document upload ^^^ -->
        <div class="row">
            <div class="col">
                <img src="" id="prev_img" alt="" width=200 height=200>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="file" name="upload_img" id="" accept="image" onchange=previewImage(event)> <!-- pangalan nung function na gagamitin for later yung previewImage -->
            </div>
        </div>


            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="firstname" name="fname" class="form-control" >
                        <label class="form-label" id="firstname-label" for="firstname">First name</label>
                
                    </div>
  
                </div>
                <div class="col">
                <div class="form-outline">
                    <input type="text" id="lastname" name="lname" class="form-control " />
                    <label class="form-label" for="lastname">Last name</label>
                </div>
            </div>
            <div class="form-outline my-4">
            <span class="form-label ">Gender</span>
                <div class="btn-group mx-5" id="btn-group-3" >
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Female" />
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Male" />
                        <label class="form-check-label" for="inlineRadio2">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3" value="Others"/>
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                </div>
            </div>
    

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" name="address" class="form-control" />
                <label class="form-label" for="form6Example4">Address</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" id="email" name="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="number" id="form6Example6" name="phone" class="form-control" />
                <label class="form-label" for="form6Example6">Phone</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" name="addinfo" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Additional information</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" name="type" id="form6Example8" checked />
                <label class="form-check-label" for="form6Example8"> Create an account? </label>
            </div>
    
            <input type="submit"  name="sub" class="btn btn-primary btn-block w-100" value="Save Details" id=sub>

        </form>

    
    </div>
    <script>
        function previewImage(event){
            var displayimg = document.getElementById("prev_img");
            displayimg.src = URL.createObjectURL(event.target.files[0]);
            console.log(displayimg);
        }

    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</script>
</body>
</html>

<?php

require_once "dbconnect.php";

// if(!$conn->connect_error){
//    echo "Connected";
// }

//button function
if (isset($_POST['sub'])) {
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $gender = $_POST['Gender'];
    $add = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addinfo = $_POST['addinfo'];

    //Guest or User
    if (isset($_POST['type'])) {
        $usertype = "User";

    } else {
        $usertype = "Guest";
    }
    
    //basename function - for us to get the name of image only
    //($_FILES["upload_img"]["name"]) - get the file array of uploaded image
    $imagepath = "images/".basename($_FILES["upload_img"]["name"]);
    //transfer the image to its new permanent location $imagepath
    //$_FILES["upload_img"]["tmp_name"] = previous temporary location from browser
    move_uploaded_file($_FILES["upload_img"]["tmp_name"],$imagepath); //default yung tmp_name (pag naupload nayung img at nakuha na yung name nung file, yung tmp_name mo yung way para ma access yung loc path nung img)


//insert query

$insertsql = "Insert into new_table (fname,lname,gender,address,email,phone_num,addinfo,account_type,img)
values ('$first','$last','$gender','$add','$email',$phone,'$addinfo','$usertype','$imagepath')
"; //yung phone lang hindi naka single quote kasi numeric siya

//convert $insertsql to query and transfer to mysql 
$result= $conn-> query($insertsql);

//check if successfully added
if ($result == True){
    echo "Successfully Added";
}else{
    //if not inserted, check query error details
    echo $conn->error;
}




}

?>