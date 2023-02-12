window.addEventListener('load', (e) => {
    let projects = 0;
    document.querySelectorAll('#design .splide .project-card').forEach(project => {
        const cProj = project.cloneNode(true);
        const projPop = document.createElement('div');

        projPop.classList.add('popup');
        projPop.id = `project-${++projects}`;

        cProj.childNodes.forEach(child => {
            projPop.appendChild(child.cloneNode(true));
        });

        let link = projPop.querySelector('.text-button').dataset.projectLink;

        projPop.querySelector('.text-button').remove();

        projPop.innerHTML += `<div class="image_info"></div><a href="${link}" target="_blank" class="text-button interactable" data-interactable-type="external_link">Projekt ansehen</a>`;

        project.querySelector('.text-button').addEventListener('click', () => {
            let popup = projPop.id.replace('#', '');
            togglePopup(popup);
        });

        document.querySelector('#design .popups').appendChild(projPop);
    });

    document.querySelectorAll('#design .popup').forEach(popup => {
        popup.querySelector('.image_info').textContent = "Klicke auf ein Bild um mehr Informationen zu erhalten.";
    });

    document.querySelectorAll('.popup .image_preview').forEach(preview => {
        const description = preview.closest('.popup').querySelector('.image_info');

        if (description) {
            preview.addEventListener('click', () => {
                document.querySelectorAll('.popup .image_preview').forEach(preview => {
                    preview.classList.remove('active');
                });
                preview.classList.add('active');

                if (preview.dataset.imageDescription) {
                    description.innerHTML = preview.dataset.imageDescription;
                } else {
                    description.innerHTML = "Keine weiteren Informationen verfügbar.";
                }
            });
        }
    });

    reloadPopups();
});