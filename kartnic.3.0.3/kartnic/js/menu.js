document.addEventListener('DOMContentLoaded', function() {
    const kartnic_hamburger = document.querySelector('.mobile-menu-toggle');
    const kartnic_navMenu = document.querySelector('.mobile-drop-navigation');
    const kartnic_menuIcon = document.querySelector('.mobile-icon-menu-bars');
    const kartnic_closeIcon = document.querySelector('.mobile-icon-close-bars');
    let kartnic_toggleEnabled = false;

    kartnic_hamburger.addEventListener('click', (event) => {
        event.stopPropagation();
        kartnic_navMenu.classList.toggle('hide');
        kartnic_menuIcon.style.display = kartnic_menuIcon.style.display === 'none' ? 'block' : 'none';
        kartnic_closeIcon.style.display = kartnic_closeIcon.style.display === 'none' ? 'block' : 'none';
        kartnic_toggleEnabled = true;
    });

    document.addEventListener('keydown', function(event) {
        if ((event.key === ' ' || event.key === 'Enter') && kartnic_toggleEnabled && document.activeElement === kartnic_hamburger) {
            event.preventDefault();
            kartnic_navMenu.classList.toggle('hide');
            kartnic_menuIcon.style.display = kartnic_menuIcon.style.display === 'none' ? 'block' : 'none';
            kartnic_closeIcon.style.display = kartnic_closeIcon.style.display === 'none' ? 'block' : 'none';
        }
    });

    kartnic_hamburger.addEventListener('focus', () => {
        kartnic_toggleEnabled = true;
    });

    document.querySelectorAll('.main-navigation li').forEach(function(menuItem) {
        menuItem.addEventListener('mouseenter', function() {
            this.querySelector('ul li').style.display = 'block';
        });

        menuItem.addEventListener('focusin', function() {
            this.querySelector('ul li').style.display = 'block';
        });
 
    });

    document.querySelectorAll('.menu-item-has-children').forEach(function(menuItem) {
        const toggleButton = document.createElement('span');
        toggleButton.classList.add('toggle-button');
        toggleButton.textContent = '▼';
        toggleButton.setAttribute('tabindex', '0');
        menuItem.querySelector('a').appendChild(toggleButton);

        toggleButton.addEventListener('click', function(event) {
            event.preventDefault();
            const subMenu = menuItem.querySelector('.sub-menu');
            if (subMenu.style.display === 'block') {
                subMenu.style.display = 'none';
                toggleButton.textContent = '▼';
            } else {
                subMenu.style.display = 'block';
                toggleButton.textContent = '▲';
            }
        });

        toggleButton.addEventListener('keydown', function(event) {
            if (event.key === ' ' || event.key === 'Enter') {
                event.preventDefault();
                const subMenu = menuItem.querySelector('.sub-menu');
                if (subMenu.style.display === 'block') {
                    subMenu.style.display = 'none';
                    toggleButton.textContent = '▼';
                } else {
                    subMenu.style.display = 'block';
                    toggleButton.textContent = '▲';
                }
            }
        });
    });

    
});
