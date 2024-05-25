document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.querySelector('input[name="password"]');
    const passwordHelp = document.getElementById('passwordHelp');
    const btnLogin = document.getElementById('btnLogin');

    // Function to check if password meets the pattern
    function checkPassword() {
        let password = passwordInput.value;
        const pattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/;

        
        if (pattern.test(password)) {
            passwordHelp.style.display = 'none';
            btnLogin.removeAttribute('disabled');
        } else {
            passwordHelp.style.display = 'block';
            btnLogin.setAttribute('disabled', true);

        }
    }

    // Check password on input change
    passwordInput.addEventListener('input', checkPassword);
});