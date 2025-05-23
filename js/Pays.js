document.addEventListener('DOMContentLoaded', function () {
    const domaine = window.location.origin;
    const categorieLis = document.querySelectorAll('.categorie__ul__li');
    const destinationList = document.querySelector('.destination__list');

    categorieLis.forEach(li => {
        li.addEventListener('click', function () {
            const categoryId = li.dataset.id;
            const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    destinationList.innerHTML = '';
                    if (data.length === 0) {
                        destinationList.innerHTML = "<p>Aucun article trouvé pour ce pays.</p>";
                        return;
                    }
                    data.forEach((article, index) => {
                        const articleElement = document.createElement('div');
                        const uniqueId = `article-${index}`;

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
                        contentDiv.style.display = 'none';
                        contentDiv.innerHTML = `
                            <p>${article.excerpt.rendered}</p>
                            <a href="${article.link}">Lire plus</a>
                        `;

                        radio.addEventListener('change', function () {
                            document.querySelectorAll('.destination__list div.article-content').forEach(div => {
                                div.style.display = 'none';
                            });
                            if (radio.checked) {
                                contentDiv.style.display = 'block';
                            }
                        });

                        articleElement.appendChild(radio);
                        articleElement.appendChild(label);
                        articleElement.appendChild(contentDiv);

                        destinationList.appendChild(articleElement);
                    });
                })
                .catch(error => {
                    destinationList.innerHTML = "<p>Erreur lors de la récupération des articles.</p>";
                    console.error(error);
                });
        });
    });
});