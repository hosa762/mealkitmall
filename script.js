document.addEventListener('DOMContentLoaded', () => {
    const nameInput = document.getElementById('name');
    const phoneNumberInput = document.getElementById('phone-number');
    const verificationButton = document.getElementById('get-verification-code');

    function validateForm() {
        const name = nameInput.value.trim();
        const phoneNumber = phoneNumberInput.value.trim();
        if (name && phoneNumber) {
            verificationButton.classList.add('enabled');
            verificationButton.disabled = false;
        } else {
            verificationButton.classList.remove('enabled');
            verificationButton.disabled = true;
        }
    }

    nameInput.addEventListener('input', validateForm);
    phoneNumberInput.addEventListener('input', validateForm);
});
