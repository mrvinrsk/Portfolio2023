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
            transform: `translate(${x}px, ${y}px) scale(${interacting ? 2 : 1})`
        }

        cursor.animate(keyframes, {
            duration: 50,
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
}