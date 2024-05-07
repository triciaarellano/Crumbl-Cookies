<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>OTP Verification Form</title>
    <link rel="stylesheet" href="regstyle.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <style>
    .container {
    position: relative;
    max-width: 400px;
    width: 100%;
    height: 50vh;
    background: rgba(255, 255, 255, 0.5); 
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(50px);
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    margin-top: 80px;
    margin-left: 150px;
}

.circle {
    height: 85px;
    width: 85px;
    background: #ff8ba0;
    color: #fff;
    font-size: 2.5rem;
    border-radius: 50%;
}

.container h4 {
    font-size: 1.25rem;
    color: #333;
    font-weight: 500;
    text-align: center;
    margin: 20px 0; 
}

.input-field input {
    height: 45px;
    width: 42px;
    border-radius: 6px;
    outline: none;
    font-size: 1.125rem;
    text-align: center;
    border: 1px solid #ddd;
}

form button {
    margin-top: 25px;
    width: 100%;
    color: #fff;
    font-size: 1rem;
    border: none;
    padding: 9px 0;
    cursor: pointer;
    border-radius: 6px;
    background: #f095a8;
    transition: all 0.2s ease;
}

form button.active {
    background: #f095a8;
}

form button:hover {
    background: #ff8ba0;
}

.input-field input[type="number"]::-webkit-inner-spin-button,
.input-field input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

</style>
  </head>
  <body>
    <div class="container">
      <div class="circle">
        <i class="bx bxs-check-shield" style="color: #fff; font-size: 60px; margin-top: 13px; margin-left: 13px;"></i>
      </div>
      <h4>Enter OTP Code</h4>
      <form action="verify_otp.php" method="post">
        <div class="input-field">
        <input type="number" name="otp[]" required/>
        <input type="number" name="otp[]" disabled/>
        <input type="number" name="otp[]" disabled/>
        <input type="number" name="otp[]" disabled/>
        <input type="number" name="otp[]" disabled/>
        <input type="number" name="otp[]" disabled/>

        </div>
        <button>Verify OTP</button>
      </form>
    </div>
    <script>
         const inputs = document.querySelectorAll("input"),
  button = document.querySelector("button");

inputs.forEach((input, index1) => {
  input.addEventListener("keyup", (e) => {
    
    const currentInput = input,
      nextInput = input.nextElementSibling,
      prevInput = input.previousElementSibling;
    // pag lumagpas ng 1 char, clear dapat
    if (currentInput.value.length > 1) {
      currentInput.value = "";
      return;
    }

    if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
      nextInput.removeAttribute("disabled");
      nextInput.focus();
    }
    // if the backspace key is pressed
    if (e.key === "Backspace") {
      // iterate over all inputs again
      inputs.forEach((input, index2) => {
        // if the index1 of the current input is less than or equal to the index2 of the input in the outer loop
        // and the previous element exists, set the disabled attribute on the input and focus on the previous element
        if (index1 <= index2 && prevInput) {
          input.setAttribute("disabled", true);
          input.value = "";
          prevInput.focus();
        }
      });
    }
    //if the fourth input( which index number is 3) is not empty and has not disable attribute then
    //add active class if not then remove the active class.
    if (!inputs[3].disabled && inputs[3].value !== "") {
      button.classList.add("active");
      return;
    }
    button.classList.remove("active");
  });
});
//focus the first input which index is 0 on window load
window.addEventListener("load", () => inputs[0].focus());
</script>
  </body>
</html>
