 const validCredentials = {
            username: 'hackersunion',
            password: 'hackersunion254',
            activationCode: 'hackersunion2345',
        };

        document.getElementById('loginBtn').addEventListener('click', () => {
            // Show the loader
            document.querySelector('.spinner').classList.remove('hidden');
            // Simulate a 2-second delay before showing the error messages
            setTimeout(() => {
                document.querySelector('.spinner').classList.add('hidden');
                // Validate and display error messages
                validateForm();
            }, 2000);
        });

        function validateForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const activationCode = document.getElementById('activationCode').value;

            let isValid = true;

            // Reset error messages
            document.getElementById('usernameError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('activationCodeError').textContent = '';

            // Validate username, password, and activation code
            if (username.trim() === '') {
                document.getElementById('usernameError').textContent = 'Username is required';
                isValid = false;
            }

            if (password.trim() === '') {
                document.getElementById('passwordError').textContent = 'Password is required';
                isValid = false;
            }

            if (activationCode.trim() === '') {
                document.getElementById('activationCodeError').textContent = 'Activation Code is required';
                isValid = false;
            }

            // If any of the fields are empty, return without further validation
            if (!isValid) {
                return;
            }

            // Check for valid credentials
            if (
                username !== validCredentials.username ||
                password !== validCredentials.password ||
                activationCode !== validCredentials.activationCode
            ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Credentials',
                    text: 'Please enter the correct credentials or contact admin for proper login information.',
                });
            } else {
                // Perform any action after successful login here (e.g., redirect to a dashboard)
                Swal.fire({
                    icon: 'success',
                    title: 'Login Successful',
                    text: 'You are now logged in, await redirection...',
                    showConfirmButton: false, // Hide the OK button
                    timer: 2000, // Auto-close the popup after 2 seconds
                }).then(() => {
                    // Redirect to another page
                    window.location.href = 'https://aviator--hackersunion.repl.co/predictor.html';
                });
            }
        }