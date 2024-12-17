function togglePassword(id) {
    const passwordField = document.getElementById(id);
    const passwordType = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', passwordType);
}

document.getElementById('signupForm').addEventListener('submit', function (e) {
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirm_password').value.trim();

    // Memeriksa kesesuaian password
    if (password !== confirmPassword) {
        e.preventDefault();
        document.getElementById('confirmPasswordError').textContent = 'Password dan konfirmasi password tidak cocok!';
    }
    
});