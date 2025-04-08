(function () {
    console.log("vive Javascript");

    let categoryId = 3;
    const domaine = window.location.href;
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
    console.log("categorie__ul__li.length", categorie__ul__li.length);

    categorie__ul__li.forEach(li => {
        li.addEventListener("click", function () {
            console.log(li.dataset.id);
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            console.log("apiUrl = ", apiUrl);
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
                    const uniqueId = `article-${index}`; // ID unique pour chaque bouton checkbox
                    articleElement.innerHTML = `
                        <input type="checkbox" id="${uniqueId}" style="display: none;">
                        <label for="${uniqueId}" style="cursor: pointer;">
                            <h3>${article.title.rendered}</h3>
                        </label>
                        <p class="hidden">${article.excerpt.rendered}</p>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})();
