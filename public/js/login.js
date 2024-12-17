function togglePassword(id) {
    const passwordField = document.getElementById(id);
    const passwordType = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', passwordType);
}