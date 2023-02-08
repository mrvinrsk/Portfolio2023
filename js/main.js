window.mobileAndTabletCheck = function () {
    let check = false;
    (function (a) {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

function fallbackCopyTextToClipboard(text) {
    var textArea = document.createElement("textarea");
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = "0";
    textArea.style.left = "0";
    textArea.style.position = "fixed";

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Fallback: Copying text command was ' + msg);
    } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
    }

    document.body.removeChild(textArea);
}

function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(text);
        return;
    }
    navigator.clipboard.writeText(text).then(function () {
        console.log('Async: Copying to clipboard was successful!');
    }, function (err) {
        console.error('Async: Could not copy text: ', err);
    });
}

window.addEventListener('load', (e) => {
    document.querySelector("body").classList.remove("no-js");
    const cursor = document.querySelector('#mouse');

    if (mobileAndTabletCheck()) {
        cursor.classList.add("mobile");
    }

    const getIconClass = (type) => {
        switch (type) {
            case 'link':
                return 'flaticon-link';

            case 'external_link':
                return 'flaticon-external';

            case 'broken_link':
                return 'flaticon-broken-link';

            case 'video':
                return 'flaticon-play';

            case 'close':
                return 'flaticon-close';

            case 'copy':
                return 'flaticon-copy';

            case 'download':
                return 'flaticon-download';

            case 'view':
                return 'flaticon-view';

            case 'code':
                return 'flaticon-code';
        }
    }

    const handleMouseHiding = () => {
        clearTimeout(timerId);
        cursor.classList.remove('hidden');
        timerId = setTimeout(function () {
            cursor.classList.add('hidden');
        }, 4500);
    }

    const maxTrail = 50;
    const animateCursor = (e, interacting) => {
        const x = e.clientX - cursor.offsetWidth / 2, y = e.clientY - cursor.offsetHeight / 2;
        const keyframes = {
            transform: `translate(${x}px, ${y}px) scale(${interacting ? 2 : 1})`
        }

        if (!document.querySelector(".trails")) {
            let trails = document.createElement("div");
            trails.classList.add("trails");
            document.body.appendChild(trails);
        }

        cursor.animate(keyframes, {
            duration: 800, fill: 'forwards'
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

    document.querySelectorAll("a:not([href])").forEach(a => {
        if (a.classList.contains('interactable')) {
            a.dataset.interactableType = 'broken_link';
        }
    });


    // Popups
    reloadPopups();

    window.oncontextmenu = e => {
        // right click
        e.preventDefault();
        let contextMenu = document.querySelector('.context_menu');

        if (contextMenu) {
            contextMenu.classList.add('shown');

            let margin = 15;
            // if the context menu is too close to the right edge of the screen, move it to the left, add margin
            if (e.clientX + contextMenu.offsetWidth + (margin * 2) > window.innerWidth) {
                contextMenu.style.left = e.clientX - contextMenu.offsetWidth - margin + 'px';
            } else {
                contextMenu.style.left = e.clientX + margin + 'px';
            }

            // if the context menu is too close to the bottom edge of the screen, move it up, add margin
            if (e.clientY + contextMenu.offsetHeight + (margin * 2) > window.innerHeight) {
                contextMenu.style.top = e.clientY - contextMenu.offsetHeight - margin + 'px';
            } else {
                contextMenu.style.top = e.clientY + margin + 'px';
            }


            contextMenu.querySelectorAll('.context_menu_ctx').forEach(ctx => {
                ctx.classList.remove('shown');
            });

            if (window.getSelection().toString().length > 0) {
                contextMenu.querySelector('.context_menu_ctx.selection').classList.add('shown');
            } else {
                contextMenu.querySelector('.context_menu_ctx.general').classList.add('shown');
            }
        }
    }

    window.onclick = e => {
        // left click
        let contextMenu = document.querySelector('.context_menu');

        if (contextMenu) {
            contextMenu.classList.remove('shown');
        }
    }

    window.onmousedown = e => {
        cursor.classList.add('clicked');
    }

    window.onmouseup = e => {
        cursor.classList.remove('clicked');
    }

    // Context menu
    document.querySelector('.context_menu .copy-text').addEventListener('mousedown', () => {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        if (window.getSelection().toString().length > 0) {
            copyTextToClipboard(window.getSelection().toString());
        } else {
            console.log("No selection");
        }
    });

    document.querySelector('.context_menu .search-w-google').addEventListener('mousedown', () => {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        if (window.getSelection().toString().length > 0) {
            window.open('https://www.google.com/search?q=' + encodeURI(window.getSelection().toString()), '_blank');
        } else {
            console.log("No selection");
        }
    });

    document.querySelectorAll('.context_menu_item').forEach(item => {
        if (item.querySelector('a')) {
            item.classList.add('has-link');
        }
    });

    const maxMoveX = window.innerWidth / 3;
    const maxMoveY = window.innerHeight / 3;
    // Animate all images in element .image_burst in random order and direction, slight rotation, consider not animating all images in the same direction, try to avoid overlapping
    document.querySelectorAll('.image_burst img').forEach(img => {
        let x = Math.floor(Math.random() * maxMoveX) - (maxMoveX / 2);
        let y = Math.floor(Math.random() * maxMoveY) - (maxMoveY / 2);
        let rotate = Math.floor(Math.random() * 10);


        // Use keyframes, so that the animation can be done through .animate(), add opacity transition (0->1)
        const keyframes = [
            {transform: `translate(0, 0) rotate(0deg) scale(1)`, opacity: 0},
            {transform: `translate(${x}px, ${y}px) rotate(${rotate}deg)`, opacity: 1}
        ];

        let options = {
            duration: 250,
            fill: 'forwards',
            easing: 'ease-out'
        };

        img.animate(keyframes, options);
    });


    // Typing animation
    document.querySelectorAll('.typing').forEach(el => {
        if (el.hasAttribute("data-list")) {
            let list = JSON.parse(el.dataset.list.replace(/'/g, '"'));

            const delay = 2000; // 2 seconds

            let index = 0;

            function type() {
                let text = list[index];
                let i = 0;

                function typeLetter() {
                    if (i < text.length) {
                        el.innerHTML = text.substring(0, i + 1) + '&nbsp;';
                        i++;
                        setTimeout(typeLetter, 90);
                    } else {
                        setTimeout(erase, delay);
                    }
                }

                function erase() {
                    if (i > 0) {
                        el.innerHTML = text.substring(0, i - 1) + '&nbsp;';
                        i--;
                        setTimeout(erase, 40);
                    } else {
                        index = (index + 1) % list.length;
                        setTimeout(type, Math.random() * delay);
                    }
                }

                typeLetter();
            }

            type();
        } else {
            el.innerHTML = "Keine Liste (data-list) angegeben.";
        }
    });
});

function reloadPopups() {
    document.querySelectorAll(".popup").forEach((popup) => {
        const close = document.createElement("div");
        close.classList.add("close", "interactable");
        close.dataset.interactableType = "close";
        close.addEventListener("click", () => {
            togglePopup(popup.id);
        });

        if (!popup.querySelector(".close")) {
            popup.appendChild(close);
        }
    });

    document.querySelectorAll("[data-toggle-popup]").forEach((toggle) => {
        if (toggle.onclick === null) {
            toggle.addEventListener("click", () => {
                togglePopup(toggle.getAttribute("data-toggle-popup"));
            });
        }
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
    if (document.getElementById(id)) {
        document.getElementById(id).classList.toggle("show");
    }

    if (document.getElementById(id)) {
        if (document.getElementById(id).classList.contains("show")) {
            document.body.classList.add('popup-shown');
            document.querySelector('.popups').classList.add('show');
        } else {
            document.body.classList.remove('popup-shown');
            document.querySelector('.popups').classList.remove('show');
        }
    }
}

function popupShown(id = null) {
    if (id) {
        return document.getElementById(id).classList.contains("show");
    } else {
        return document.querySelector('.popup.show') !== null;
    }
}