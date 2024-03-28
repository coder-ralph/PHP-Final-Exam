<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Assignments</title>
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css')?>">
    <!-- Ajax Script Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            //* Fetch assignments initially
            $.get("<?= base_url("assignments/update_table")?>", function(res){
                $(".table").html(res);
            });
            //* Handle form submission
            $(document).on("submit", "form", function(){
                $.post($(this).attr("action"), $(this).serialize(), function (res){
                    $(".table").html(res); 
                });
                //* Update the count of assignments
                $.post("<?= base_url("assignments/get_count")?>", $(this).serialize(), function (data){
                    let initialH1 = " Assignments"
                    $("h1").text(data.count + initialH1);  
                }, "json");
                
                return false; 
            });
            //* Handle change event for input fields and select element
            $(document).on("change", "input, #track", function(){
                $("form").submit();
            });

        });
    </script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>All Assignments</h1>
        <!-- Radio button for level -->
        <form action="<?= base_url("assignments/update_table")?>" method="post" id="form">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
            <input type="radio" name="level" id="easy" value="Easy">
            <label for="recent">Easy</label>
            <input type="radio" name="level" id="intermediate" value ="Intermediate">
            <label for="recent">Intermediate</label>
            <select name="track" id="track">
                <option disabled selected value>Select an option</option>
                <option value="Web Fundamentals">Web Fundamentals</option>
                <option value="PHP">PHP</option>
            </select>
        </form>
    </header>

    <!-- Display Table -->
    <div class="table"></div>
</body>
</html>
