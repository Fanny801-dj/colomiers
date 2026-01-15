// Sélectionne tous les boutons "Modifier"
let editButtons;

function setupListeners() {

    editButtons = document.querySelectorAll('.btn-edit');
    let title = document.getElementById('titre-article-edit');
    let form = document.getElementById("edit-article");

    editButtons.forEach(button => {
        button.addEventListener('click', () => {

            // Récupère les données de l'article depuis les data-attributes
            let articleId = button.dataset.id;
            let titre = button.dataset.titre;
            let taxonomie = button.dataset.taxonomie;
            let texte = button.dataset.texte;
    
            // Sélectionne le formulaire

            if (form.classList.) {

            }

            // Remplit les champs du formulaire
            form.querySelector('input[name="id"]').value = articleId;
            form.querySelector('input[name="titre"]').value = titre;
            form.querySelector('input[name="taxonomie"]').value = taxonomie;
            form.querySelector('textarea[name="texte"]').value = texte;
            title.innerHTML = titre;
        });
    });
}

document.addEventListener("DOMContentLoaded", setupListeners);