<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'header.php'; ?>
</head>

<body>
    <main class="form-page">
        <div class="form-box">
            <form action="admin-confirm.php">
               <label class="title" >Admin - Add Adventures</label>
               <br>
                <label class="subtitle">Input Details About the Trip</label>
                <br>   
               </select>
               Heading: <input type="text" id="heading" name="heading"  required minlength='2' maxlength='100'><br>
               Trip Date: <input type="text" id="tripDate" name="tripDate" placeholder = mm/dd/yy required minlength='2' maxlength='10'><br>
               Duration:<input type="text" id="duration" name="duration" required minlength='2' maxlength='10'><br>
               summary: <input type="text" id="summary" name="summary" required minlength='2' maxlength='500'><br>
                </select>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <script src="main.js"></script>
</body>

</html>