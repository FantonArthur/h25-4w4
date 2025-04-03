(function () {
    console.log("Destination JS loaded");

    let categoryId = 3; // Remplacez par l'ID de la catégorie par défaut
    const domaine = window.location.origin; // Utiliser uniquement le domaine
    let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;

    let categorie__ul__li = document.querySelectorAll('.categorie__ul__li');
    console.log("categorie__ul__li.length", categorie__ul__li.length);

    categorie__ul__li.forEach(li => {
        li.addEventListener('click', function () {
            console.log("Catégorie sélectionnée :", li.dataset.id);
            categoryId = li.dataset.id; // Mettre à jour l'ID de la catégorie
            apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
            console.log("Nouvelle URL API :", apiUrl);

            // Vider la liste actuelle avant d'ajouter de nouveaux articles
            const destinationList = document.querySelector('.destination__list');
            destinationList.innerHTML = '';

            // Récupérer les articles de la catégorie sélectionnée
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    data.forEach(article => {
                        const articleElement = document.createElement('div');
                        articleElement.innerHTML = `
                            <h3>${article.title.rendered}</h3>
                            <a href="${article.link}">Lire plus</a>
                        `;
                        destinationList.appendChild(articleElement);
                    });
                })
                .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        });
    });
})();