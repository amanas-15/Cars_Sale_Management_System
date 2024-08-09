<!DOCTYPE html>
<html lang="en">

<head>
    <title>Loan Calculator</title>
</head>



<body>
    
    <div class="calculator">
        
        <h1>Loan Calculator</h1>

        <!-- Calling Calculate function defined in app.js -->
        <p>Amount (₹) &nbsp;&nbsp;&nbsp;&nbsp;:
            <input id="amount" type="number" onchange="Calculate()">
        </p>

        <p>Interest Rate &nbsp;:
            <input id="rate" type="number" onchange="Calculate()">
        </p>

        <p>Months to Pay :
            <input id="months" type="number" onchange="Calculate()">
        </p>

        <h2 id="total"></h2>
    </div>

    <script src="app.js"></script>
</body>

</html>
<style>
    body {
        background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url("bentley.jpeg");
        background-size: cover ;
     font-family: 'Trebuchet MS';
    }
     h1 {
     font-size: 35px;
    }
     h1 {
     font-size: 21px;
     margin-top: 20px;
    }
     .calculator {
     width: 400px;
     height: 450px;
     background-color: black;
     position: absolute;
     left: 50%;
     top: 50%;
     transform: translateX(-50%) translateY(-50%);
     padding: 20px 0px 0px 100px;
     border-radius: 50px;
     color: white;
    }
     input {
     padding: 7px;
     width: 70%;
     margin-top: 7px;
    }
    
</style>
<script>
    function Calculate() {
    
    // Extracting value in the amount 
    // section in the variable
    const amount = document.querySelector("#amount").value;
    
    // Extracting value in the interest
    // rate section in the variable
    const rate = document.querySelector("#rate").value;
    
    // Extracting value in the months 
    // section in the variable
    const months = document.querySelector("#months").value;
    
    // Calculating interest per month
    const interest = (amount * (rate * 0.01)) / months;
    
    // Calculating total payment
    const total = ((amount / months) + interest).toFixed(2);
    
    document.querySelector("#total")
        	.innerHTML = "EMI : (₹)" + total;

            
    }  
    
</script>
