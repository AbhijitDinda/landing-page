document.querySelectorAll('.accordion__toggle').forEach(button => {
    button.addEventListener('click', () => {
        // Get all the content elements
        const allContents = document.querySelectorAll('.accordion__content');
        
        // Get the content for the clicked button
        const accordionContent = button.nextElementSibling;

        // Check if the clicked button's content is already active
        if (accordionContent.classList.contains('accordion__content--show')) {
            // If it's already active, simply deactivate it
            accordionContent.classList.remove('accordion__content--show');
            button.classList.remove('accordion__toggle--active');
        } else {
            // If it's not active, first deactivate all other content
            allContents.forEach(content => content.classList.remove('accordion__content--show'));
            // Also remove active class from all buttons
            document.querySelectorAll('.accordion__toggle').forEach(btn => btn.classList.remove('accordion__toggle--active'));
            
            // Now activate the clicked content and button
            accordionContent.classList.add('accordion__content--show');
            button.classList.add('accordion__toggle--active');
        }
    });
});
