tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#5E6FFB',
                secondary: '#1E40AF',
                accent: '#10B981',
            }
        }
    }
}


  document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input, select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('ring-2', 'ring-primary', 'ring-opacity-0');
        });
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('ring-2', 'ring-primary', 'ring-opacity-50');
        });
    });
});