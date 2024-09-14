document.querySelectorAll('.accordion__toggle').forEach(button => {
    button.addEventListener('click', () => {
        const accordionContent = button.nextElementSibling;

        // Toggle active class on button
        button.classList.toggle('accordion__toggle--active');

        // Show or hide the content
        if (accordionContent.classList.contains('accordion__content--show')) {
            accordionContent.classList.remove('accordion__content--show');
        } else {
            accordionContent.classList.add('accordion__content--show');
        }
    });
});



