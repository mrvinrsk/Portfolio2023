window.onload = e => {
    const cursor = document.querySelector('#mouse');

    const getIconClass = (type) => {
        switch (type) {
            case 'link':
                return 'flaticon-link';

            case 'video':
                return 'flaticon-play';
        }
    }

    const handleMouseHiding = () => {
        clearTimeout(timerId);
        cursor.classList.remove('hidden');
        timerId = setTimeout(function () {
            cursor.classList.add('hidden');
        }, 4500);
    }

    const animateCursor = (e, interacting) => {
        const x = e.clientX - cursor.offsetWidth / 2, y = e.clientY - cursor.offsetHeight / 2;
        const keyframes = {
            transform: `translate(${x}px, ${y}px) scale(${interacting ? 1.7 : 1})`
        }

        cursor.animate(keyframes, {
            duration: 800,
            fill: 'forwards'
        });

        if (interacting) {
            cursor.classList.add('interacting');
        } else {
            cursor.classList.remove('interacting');
        }
    }

    let timerId = null;
    window.onmousemove = e => {
        const interactable = e.target.closest('.interactable'), interacting = interactable !== null;

        animateCursor(e, interacting);

        if (interacting) {
            cursor.querySelector('.mouse-icon').className = 'mouse-icon shown ' + getIconClass(interactable.dataset.interactableType);
        } else {
            cursor.querySelector('.mouse-icon').className = 'mouse-icon';
        }

        // hide after 3 seconds of inactivity
        handleMouseHiding();
    }

    window.onscroll = e => {
        handleMouseHiding();
    }

    window.onkeydown = e => {
        handleMouseHiding();
    }


    // Popups
    document.querySelectorAll(".popup").forEach((popup) => {
        const close = document.createElement("div");
        close.classList.add("close");
        close.addEventListener("click", () => {
            togglePopup(popup.id);
        });

        popup.appendChild(close);
    });

    document.querySelectorAll("[data-toggle-popup]").forEach((toggle) => {
        toggle.addEventListener("click", () => {
            togglePopup(toggle.getAttribute("data-toggle-popup"));
        });
    });

    if (document.querySelector('.popups')) {
        document.querySelector('.popups').addEventListener('click', () => {
            document.querySelectorAll('.popup').forEach(popup => {
                popup.classList.remove('show');
            });

            document.querySelector('.popups').classList.remove('show');
            document.body.classList.remove('popup-shown');
        });
    }

    if (document.querySelector('.popup')) {
        document.querySelectorAll('.popup').forEach(popup => {
            popup.addEventListener('click', e => {
                e.stopImmediatePropagation();
                e.stopPropagation();
            });
        });
    }
}

function togglePopup(id) {
    document.getElementById(id).classList.toggle("show");

    if (document.getElementById(id).classList.contains("show")) {
        document.body.classList.add('popup-shown');
        document.querySelector('.popups').classList.add('show');
    } else {
        document.body.classList.remove('popup-shown');
        document.querySelector('.popups').classList.remove('show');
    }
}

function popupShown(id = null) {
    if (id) {
        return document.getElementById(id).classList.contains("show");
    } else {
        return document.querySelector('.popup.show') !== null;
    }
}