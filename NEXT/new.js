document.addEventListener("DOMContentLoaded", function () {
    // Toggle menu functionality
    const menuIcon = document.querySelector(".menu-icon");
    const navMenu = document.querySelector("nav ul");

    if (menuIcon && navMenu) {
        menuIcon.addEventListener("click", function () {
            navMenu.classList.toggle("active");
        });
    }

    // Search functionality (only if form submission is needed)
    const searchForm = document.querySelector(".search-box");
    if (searchForm) {
        searchForm.addEventListener("submit", function (event) {
            event.preventDefault();
            searchRecipe();
        });
    }
});

// Search function
function searchRecipe() {
    let input = document.getElementById("searchInput")?.value.toLowerCase() || "";
    let recipes = document.querySelectorAll(".recipe-card");
    let featuredRecipesText = document.getElementById("featuredRecipes");
    let notFoundMessage = document.getElementById("notFound");
    let found = false;

    recipes.forEach(recipe => {
        let name = recipe.getAttribute("data-name") || "";
        if (name.toLowerCase().includes(input)) {
            recipe.style.display = "";
            found = true;
        } else {
            recipe.style.display = "none";
        }
    });
//Not found
    if (notFoundMessage) notFoundMessage.style.display = found ? "none" : "block";
    if (featuredRecipesText) featuredRecipesText.style.display = found ? "block" : "none";
}
 // Save recipe

 document.addEventListener("DOMContentLoaded", function () {
    const recipeCards = document.querySelectorAll(".recipe-card");
    const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

    recipeCards.forEach((card) => {
        const recipeName = card.dataset.name;
        const heartIcon = document.createElement("span");
        heartIcon.classList.add("heart");
        heartIcon.innerHTML = favorites.includes(recipeName) ? "❤️" : "🤍";
        card.appendChild(heartIcon);

        heartIcon.addEventListener("click", function () {
            if (favorites.includes(recipeName)) {
                favorites.splice(favorites.indexOf(recipeName), 1);
                heartIcon.innerHTML = "🤍"; // Unfavorited
            } else {
                favorites.push(recipeName);
                heartIcon.innerHTML = "❤️"; // Favorited
            }

            localStorage.setItem("favorites", JSON.stringify(favorites));
        });
    });
});


//categories
/*document.addEventListener("DOMContentLoaded", function() {
    const categorySelect = document.getElementById("categorySelect");
    const recipeCards = document.querySelectorAll(".recipe-card");

    categorySelect.addEventListener("change", function() {
        const selectedCategory = this.value;

        recipeCards.forEach(card => {
            if (card.dataset.category === selectedCategory || selectedCategory === "all") {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
});*/

document.getElementById("categorySelect").addEventListener("change", function () {
    let selectedCategory = this.value;
    let recipes = document.querySelectorAll(".recipe-card");

    recipes.forEach(recipe => {
        let category = recipe.getAttribute("data-category");

        // Show all if "all" is selected, otherwise match category
        if (selectedCategory === "all" || category === selectedCategory) {
            recipe.style.display = "block"; // Show matching recipes
        } else {
            recipe.style.display = "none"; // Hide non-matching recipes
        }
    });
});
