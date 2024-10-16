document.addEventListener("DOMContentLoaded", requestCategories);

function requestCategories() {
    fetch("http://localhost:8081/E-commerce/user/backend/menu.php")
    .then((res) => res.json())
    .then((data) => {
        console.log(data);
        const nav = document.querySelector(".navigation");
        if (data.categories) {
            const ul = document.createElement("ul");
            data.categories.forEach(cat => {
                const li = document.createElement("li");
                li.className = cat; 
                li.textContent = cat; 
                li.addEventListener("click", getCategoryProducts);
                ul.appendChild(li); 
            });
            nav.appendChild(ul); 
        }
    })
    .catch((err) => console.log(err));
}

function getCategoryProducts() {
    console.log("Category clicked");
}