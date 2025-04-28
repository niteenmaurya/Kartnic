document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.querySelector(".search-form"); // Search form element
    const searchInput = document.querySelector(".search-form input"); // Search input field
    const mobileMenuButton = document.querySelector(".mobile-menu-toggle"); // Mobile menu button
    const searchButtons = document.querySelectorAll(".search-button"); // All search buttons
    const srForm = document.querySelector(".sr-form"); // sr-form element

    let isFormOpen = false; // Form open/close state
    let isClosedByEscapeOrSrForm = false; // Track if form was closed by ESC or sr-form click
    let hasPageInteraction = false; // Track if user interacted with the page
    let lastFocusedElement = null; // Track the last focused element before opening the form

    // **Form Open/Close karne ka function**
    function toggleSearchForm(open) {
        isFormOpen = open !== undefined ? open : !isFormOpen; // State toggle karo
        searchForm.classList.toggle("open", isFormOpen); // Form ko open/close karo

        if (isFormOpen) {
            lastFocusedElement = document.activeElement; // Track the last focused element
            searchInput.focus(); // Form open hone par input par focus
            isClosedByEscapeOrSrForm = false; // ESC or sr-form flag reset
            hasPageInteraction = false; // Page interaction reset
        } else {
            if (lastFocusedElement) {
                lastFocusedElement.focus(); // Return focus to the last focused element before opening the form
            }
            isClosedByEscapeOrSrForm = true; // Mark that the form was closed
        }
    }

    // **Focus Trap: Form ke andar focus trap karna**
    function trapFocus(event) {
        if (!isFormOpen) return; // Agar form open nahi hai toh kuch mat karo

        const focusableElements = searchForm.querySelectorAll("input, button"); // Focusable elements
        const firstElement = focusableElements[0]; // Pehla element
        const lastElement = focusableElements[focusableElements.length - 1]; // Aakhri element

        if (event.key === "Tab") {
            if (event.shiftKey && document.activeElement === firstElement) {
                lastElement.focus(); // Shift + Tab pe last element pe focus
                event.preventDefault();
            } else if (!event.shiftKey && document.activeElement === lastElement) {
                firstElement.focus(); // Tab pe first element pe focus
                event.preventDefault();
            }
        }
    }

    // **Search Button ke liye Click aur Keyboard Events**
    searchButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            event.stopPropagation(); // Event bubble hone se roko
            toggleSearchForm(true); // Form open karo
        });

        button.addEventListener("keydown", (event) => {
            if ([" ", "Enter"].includes(event.key)) {
                event.preventDefault(); // Default behavior roko
                toggleSearchForm(true); // Form open karo
            }
        });
    });

    // **ESC Key se Form Close karo**
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && isFormOpen) {
            toggleSearchForm(false); // Form close karo
            isClosedByEscapeOrSrForm = true; // Mark that form was closed by ESC
        }

        // Space or Enter key press hone par Form Reopen karo
        if (
            (event.key === " " || event.key === "Enter") &&
            !isFormOpen &&
            isClosedByEscapeOrSrForm &&
            !hasPageInteraction // Ensure no page interaction occurred
        ) {
            event.preventDefault(); // Default space/enter behavior roko
            toggleSearchForm(true); // Form reopen karo
        }
    });

    // **Kahin aur click hone par Form Close karo**
    document.addEventListener("click", (event) => {
        if (
            !event.target.closest(".search-form") && // Agar click search form ke bahar hua
            !event.target.closest(".search-button") && // Aur button ke bahar hua
            !event.target.closest(".sr-form") // Aur sr-form ke bahar hua
        ) {
            toggleSearchForm(false); // Form close karo
            hasPageInteraction = true; // Page interaction mark karo
        }
    });

    // **sr-form par click hone par Form Close karo**
    srForm.addEventListener("click", function (event) {
        if (!event.target.closest("input") && !event.target.closest("button")) {
            // Agar input ya button par click nahi hua
            toggleSearchForm(false); // Form close karo
            isClosedByEscapeOrSrForm = true; // Mark that form was closed by sr-form
        } else {
            event.stopPropagation(); // Input aur button par click hone par close mat karo
        }
    });

    // **Tab Key Press hone par Page Interaction**
    document.addEventListener("keydown", (event) => {
        if (event.key === "Tab") {
            hasPageInteraction = true; // Mark page interaction on Tab press
        }
    });

    // **Focus Trap: Form ke andar Tab key handle karo**
    searchForm.addEventListener("keydown", trapFocus);
});
