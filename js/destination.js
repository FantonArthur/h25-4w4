(function () {
    console.log("vive Javascript");

    let categoryId = 3;
    const domaine = window.location.href;
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
    console.log("categorie__ul__li.length", categorie__ul__li.length);

    // Retirer la catégorie "populaire" (data-id="3")
    document.querySelectorAll('.categorie__ul__li[data-id="10"]').forEach(li => li.remove());

    categorie__ul__li.forEach(li => {
        li.addEventListener("click", function () {
            console.log(li.dataset.id);
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            console.log("apiUrl = ", apiUrl);

            // Quand on clique sur une nouvelle catégorie, toutes les divs doivent être visibles
            document.querySelectorAll('.destination__list div.article-content').forEach(div => {
                div.style.display = 'block';
            });

            mon_fetch(apiUrl);
        });
    });

    function mon_fetch(apiUrl) {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Vide la liste précédente

                data.forEach((article, index) => {
                    const articleElement = document.createElement('div');
                    const uniqueId = `article-${index}`; // ID unique pour chaque bouton radio

                    const radio = document.createElement('input');
                    radio.type = 'radio';
                    radio.id = uniqueId;
                    radio.name = 'destination';
                    radio.style.display = 'none';

                    const label = document.createElement('label');
                    label.setAttribute('for', uniqueId);
                    label.style.cursor = 'pointer';
                    label.innerHTML = `<h3>${article.title.rendered}</h3>`;

                    const contentDiv = document.createElement('div');
                    contentDiv.classList.add('article-content');
                    contentDiv.style.display = 'none'; // Masqué par défaut
                    contentDiv.innerHTML = `
                        <p>${article.excerpt.rendered}</p>
                        <a href="${article.link}">Lire plus</a>
                    `;

                    // Ajoute un événement pour afficher/masquer la div
                    radio.addEventListener('change', function () {
                        // Masquer toutes les autres divs
                        document.querySelectorAll('.destination__list div.article-content').forEach(div => {
                            div.style.display = 'none';
                        });

                        // Afficher uniquement la div liée à ce bouton radio
                        if (radio.checked) {
                            contentDiv.style.display = 'block';
                        }
                    });

                    // Ajoute les éléments au conteneur
                    articleElement.appendChild(radio);
                    articleElement.appendChild(label);
                    articleElement.appendChild(contentDiv);

                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})();
