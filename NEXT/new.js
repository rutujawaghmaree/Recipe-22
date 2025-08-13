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

    // Add authentication check to recipe links
    addAuthenticationCheck();
});

// Check if user is logged in (you'll need to implement this based on your session management)
function isUserLoggedIn() {
    // This is a simple check - you might want to make an AJAX call to verify session
    return document.body.dataset.userLoggedIn === 'true';
}

// Add authentication check to all recipe links
function addAuthenticationCheck() {
    const recipeLinks = document.querySelectorAll('.recipe-card a');
    
    recipeLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (!isUserLoggedIn()) {
                e.preventDefault();
                showLoginWarning();
            }
        });
    });
}

// Show login warning modal
function showLoginWarning() {
    // Create modal if it doesn't exist
    let modal = document.getElementById('loginWarningModal');
    if (!modal) {
        modal = createLoginWarningModal();
        document.body.appendChild(modal);
    }
    
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

// Create login warning modal
function createLoginWarningModal() {
    const modal = document.createElement('div');
    modal.id = 'loginWarningModal';
    modal.className = 'login-warning';
    
    modal.innerHTML = `
        <div class="login-warning-content">
            <h3>🔒 Login Required</h3>
            <p>You need to be logged in to view recipe details. Please login or create an account to access our delicious recipes!</p>
            <div class="login-warning-buttons">
                <a href="./login/login.php" class="login-btn">Login</a>
                <a href="./login/signup.php" class="signup-btn">Sign Up</a>
                <button class="close-btn" onclick="closeLoginWarning()">Maybe Later</button>
            </div>
        </div>
    `;
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeLoginWarning();
        }
    });
    
    return modal;
}

// Close login warning modal
function closeLoginWarning() {
    const modal = document.getElementById('loginWarningModal');
    if (modal) {
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }
}

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
            // Add heart beat animation
            heartIcon.classList.add("favorite");
            
            if (favorites.includes(recipeName)) {
                favorites.splice(favorites.indexOf(recipeName), 1);
                heartIcon.innerHTML = "🤍"; // Unfavorited
                heartIcon.classList.remove("favorite");
            } else {
                favorites.push(recipeName);
                heartIcon.innerHTML = "❤️"; // Favorited
                heartIcon.classList.add("favorite");
            }

            localStorage.setItem("favorites", JSON.stringify(favorites));
            
            // Remove animation class after animation completes
            setTimeout(() => {
                if (!favorites.includes(recipeName)) {
                    heartIcon.classList.remove("favorite");
                }
            }, 600);
        });
    });
 } );

// Categories
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
}
)