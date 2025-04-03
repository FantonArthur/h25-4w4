(function(){
  console.log("Destination JS loaded")
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(apiUrl);
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          // <div>${article.excerpt.rendered}</div>
            const destinationList = document.querySelector('.destination__list');
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
})()