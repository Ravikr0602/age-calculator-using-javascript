<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="contanier">
        <!---------Get input box ------------------------> 
        
        <div class="form_box">
            <h1 id="title">Age Calculator</h1>
                
                <input type="date" id="calculate_input" name="document[]" />
                
                <input type="submit" onclick="calculate_age()" value="Calculate" id="calculate_btn">
            
        </div>
        <!---------Get Result box ------------------------> 

        <div class="result_box">


             <!--------days---------->
             <div class="box">
                <h2 id="days_name">Days</h2>
                <h2 id="count_days">-</h2>
            </div>
          
          
            <!--------months---------->
            <div class="box">
                <h2 id="months_name">Months</h2>
                <h2 id="count_months">-</h2>
            </div>
            
                <!--------Years---------->
            <div class="box">
               <h2 id="years_name">Years</h2>
               <h2 id="count_years">-</h2>
  
            </div> 
 

            <!--------close----------> 
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>