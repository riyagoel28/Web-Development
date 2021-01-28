<html>

<head>
    <title>Welcome to PHP</title>
    <style>
    .form {
        border: 2px solid black;
        width: 50%;
        padding: 25px;
        margin-left: 200px;
        margin-top: 40px;
        border-radius: 25px;
        
        
       
    }

    h1 {
        text-align: center;
        color: red;
        

        
    }

    form {
        font-weight: 500;
        background-image: url('C:/xampp/htdocs/image.jpg')
    }

    form input {
        border: 1px solid gray;
        padding: 20px;
        border-radius: 10px;
        margin-left: 40px;
    }

    form input:first-child {
        margin-left: 45px;
    }

    table {
        margin-top: 50px;
        margin-left: 200px;
        /* display:none; */
    }

    table,
    th,
    td {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 10px;
    }

    th {
        colspan: 2;
    }
    </style>
</head>

<body>
    <div class="form">
        <h1>Application Form</h1>
        <form method="GET">
            NAME <input type="text" name="name" placeholder="Enter your Name" required><br><br>
            EMAIL <input type="email" name="mail" placeholder="Enter your Email" required><br><br>
            CONTACT <input type="text" name="contact" placeholder="Enter your Contact" required minlength="10" maxlength="10"
                style="margin-left:15px;"><br><br>
            CITY <input type="text" name="city" placeholder="Enter your City" required
                style="margin-left:60px;"><br><br>
            COURSE <input type="text" name="course" placeholder="Enter your course" required
                style="margin-left:28px;"><br><br>
            BRANCH <input type="text" name="branch" placeholder="Enter your Branch" required
                style="margin-left:30px;"><br><br>
            INTEREST <input type="checkbox" id="badminton" name="interest[]" value="badminton" style="margin-left:10px;">
            <label for="badminton">Badminton</label> 
            <input type="checkbox" id="reading books" name="interest[]"  value="Reading Books" style="margin-left:10px;">
            <label for="reading books">Reading Books</label>
            <input type="checkbox" id="carrom" name="interest[]"  value="Carrom" style="margin-left:10px;">
            <label for="carrom">Carrom</label>

            <input type="submit" value="Submit" name="submit" id="btn" style="margin-left:150px;">
        </form>
    </div>
    <?php
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['mail'];
    $contact=$_GET['contact'];
    $city=$_GET['city'];
    $course=$_GET['course'];
    $branch=$_GET['branch'];
    $interest=$_GET['interest'];
    foreach($interest as $selected){
        // echo "<p>".$selected."</p>";
    }
    echo "<table><tr><th>Name</th><th>Email</th><th>Contact</th><th>City</th><th>Course</th><th>Branch</th><th>Interest</th></tr>
    <tr><td>$name</td><td>$email</td><td>$contact</td><td>$city</td><td>$course</td><td><td>$branch</td>$selected</td></tr></table>";
}
?>
    <script>
    var btn = document.getElementById('btn');
    btn.addEventListener('click', function() {
        if (table.style.display === "none") {
            table.style.display = "block";
        }
    })
    </script>
</body>

</html>