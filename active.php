<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Activate</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: red;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 380px;
	max-width: 100%;
	min-height: 480px;
  margin: 50px auto;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 100%;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

        /* Define different colors for each platform class */
        .whatsapp-button,
.telegram-button,
.channel-button {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    font-size: 10px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.whatsapp-button {
    background-color: #25d366; /* Green color for WhatsApp */
    color: #fff;
}

.telegram-button {
    background-color: #0088cc; /* Blue color for Telegram */
    color: #fff;
}

.channel-button {
    background-color: #9933cc; /* Purple color for Channel */
    color: #fff;
}

.whatsapp-button:hover,
.telegram-button:hover,
.channel-button:hover {
    background-color: #222; /* Dark background color on hover */
    color: #fff; /* Text color on hover */
}

      .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body onload="if (document.referrer == '') self.location='./index.html';">
<div id="login" class="modal fade" role="dialog">
    <div class="container">
        <div class="form-container sign-in-container">
            <form id="login-form" action="#">
                <img src="https://luckyaviator.com/img/aviator-game.png" width="120px" height="100px">
                <h1>Sign in</h1>
                <div class="social-container">
                    <!-- ... (existing social buttons) ... -->
                </div>
                <span>Enter activation code to use your account</span><br>
              <div id="error-message" class="error-message"></div>
                <input type="text" id="activation-code" placeholder="Enter Activation Code" />
                <button id="proceed-button">Proceed to Dashboard</button>
                <a href="https://wa.link/k5jgot" class="whatsapp-button">CONTACT ADMIN WHATSAPP</a>
                <a href="http://t.me/tamarawambui" class="telegram-button">CONTACT ADMIN TELEGRAM</a>
                <a href="https://t.me/aviatorpredictor254" class="channel-button">JOIN TELEGRAM CHANNEL</a>
               
            </form>
        </div>
    </div>
</div>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // JavaScript for form validation and error message
    $(document).ready(function() {

        $("#proceed-button").click(function(e) {
            e.preventDefault();
            const activationCode = $("#activation-code").val().trim();

            if (activationCode === "") {
                $("#error-message").text("Please enter your activation code.");
            } else {
                // For demonstration, show a SweetAlert popup for invalid credentials
                Swal.fire('Error', 'Invalid credentials. Enter correct credentials to proceed. Contact admin to get credentials.', 'error');
            }
        });
    });
</script>
</body>
</html>
