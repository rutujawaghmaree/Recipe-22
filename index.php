<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./NEXT/stylesss.css">
    <title>RECIPE HUB | Rutuja</title>
</head>

<body data-user-logged-in="<?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>">

    <header>
        <div class="container">
            <h1 class="logo">RECIPE HUB</h1>
            <nav>
                <div class="menu-icon">&#9776;</div>
                <ul class="nav_list">
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./NEXT/support.php">SUPPORT</a></li>
                    <li><a href="./NEXT/contact.php">CONTACT</a></li>
                    <li><a href="./NEXT/about.php">ABOUT US</a></li>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="./logout.php">LOGOUT</a></li>
                    <?php else: ?>
                        <li><a href="./login/login.php">LOGIN</a></li>
                        <li><a href="./login/signup.php">SIGN UP</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>


    <section class="hero">
        <section class="categories">
            <div class="category-dropdown">
                <select id="categorySelect">
                    <option value="all">Categories</option>
                    <option value="dessert">Desserts</option>
                    <option value="main-course">Main Course</option>
                    <option value="snacks">Snacks</option>
                </select>
            </div>
        </section>


        <div class="hero-section">
            <h2>WELCOME TO RECIPE HUB</h2>
            <form action="#" class="search-box">
                <input type="text" id="searchInput" placeholder="Search Recipe...">
                <button type="button" onclick="searchRecipe()">Search</button>
            </form>
        </div>
    </section>

    <section class="recipes">
        <br>
        <h2 id="featuredRecipes">FEATURED RECIPES</h2>

        <div class="recipe-section">
            <div class="recipe-card" data-name="Strawberry Curd" data-category="dessert">
                <img src="./NEXT/dish-1.jpg">
                <h2>Strawberry Curd</h2>
                <p>A creamy, tangy dessert made with fresh strawberries and rich custard.</p>
                <a href="./card/strawberry.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Paneer Tikka" data-category="snacks">
                <img src="./NEXT/paneertikka.jpg">
                <h2>Paneer Tikka</h2>
                <p>Spiced, grilled paneer cubes marinated in yogurt and aromatic spices.</p>
                <a href="./card/paneertikka.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Belgian Kebab" data-category="snacks">
                <img src="./NEXT/dish-3.jpg">
                <h2>Belgian Kebab</h2>
                <p>Delicious grilled kebabs infused with a blend of European spices.</p>
                <a href="./card/belgiankebab.html"><span>View Recipe</span></a>
            </div>



            <div class="recipe-card" data-name="Zhanzhanit Misal" data-category="snacks">
                <img src="./NEXT/dish-5.jpg">
                <h2>Zhanzhanit Misal</h2>
                <p>A spicy Maharashtrian delicacy made with sprouted lentils and a fiery curry.</p>
                <a href="./card/zhanzhanitmisal.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Ice Cream" data-category="dessert">
                <img src="./NEXT/ice.jpg">
                <h2>Ice Cream</h2>
                <p>Rich and creamy frozen dessert in various flavors to satisfy your sweet cravings.</p>
                <a href="./card/icecream.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Pasta" data-category="Snacks">
                <img src="./NEXT/pasta.jpg">
                <h2>Pasta</h2>
                <p >Classic Italian dish made with al dente pasta and a choice of flavorful
                    sauces.</p>
                <a href="./card/pasta.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Biryani" data-category="main-course">
                <img src="./NEXT/biryani.jpg">
                <h2>Biryani</h2>
                <p>Fragrant and spicy rice dish cooked with tender meat and aromatic spices.</p>
                <a href="./card/biryani.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Butter Chicken" data-category="main-course">
                <img src="./NEXT/butterchicken.jpg">
                <h2>Butter Chicken</h2>
                <p>Creamy tomato-based curry with tender chicken pieces and rich Indian spices.</p>
                <a href="./card/butterchicken.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Masala Dosa" data-category="snacks">
                <img src="./NEXT/masaladosa.jpg">
                <h2>Masala Dosa</h2>
                <p>South Indian crispy rice crepe filled with spiced potato filling.</p>
                <a href="./card/masaladosa.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Rajma Chawal" data-category="main-course">
                <img src="./NEXT/rajmachawal.jpg">
                <h2>Rajma Chawal</h2>
                <p>Comforting combination of red kidney bean curry served with steamed rice.</p>
                <a href="./card/rajmachawal.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Pani Puri" data-category="snacks">
                <img src="./NEXT/panipuri.jpg">
                <h2>Pani Puri</h2>
                <p>Crunchy puris filled with spicy and tangy flavored water and potato mixture.</p>
                <a href="./card/panipuri.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Gulab Jamun" data-category="dessert">
                <img src="./NEXT/gulabjamun.jpg">
                <h2>Gulab Jamun</h2>
                <p>Soft deep-fried balls soaked in rose-flavored sugar syrup, a classic Indian dessert.</p>
                <a href="./card/gulabjamun.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Chole Bhature" data-category="main-course">
                <img src="./NEXT/cholebhature.jpg">
                <h2>Chole Bhature</h2>
                <p>Spicy chickpea curry served with deep-fried bread. A Delhi street food staple!</p>
                <a href="./card/cholebhature.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Pav Bhaji" data-category="snacks">
                <img src="./NEXT/pavbhaji.jpg">
                <h2>Pav Bhaji</h2>
                <p>A buttery, spiced vegetable mash served with soft toasted buns</p>
                <a href="./card/pavbhaji.html"><span>View Recipe</span></a>
            </div>


            <div class="recipe-card" data-name="Veg Biryani" data-category="main">
                <img src="./NEXT/vegbiryani.jpg">
                <h2>Veg Biryani</h2>
                <p>Fragrant basmati rice layered with spiced vegetables, saffron, and fried onions </p>
                <a href="./card/vegbiryani.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Samosa" data-category="snacks">
                <img src="./NEXT/samosa.jpg">
                <h2>Samosa</h2>
                <p>Golden, crispy triangles filled with spiced potatoes and peas</p>
                <a href="./card/samosa.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Dhokla" data-category="snacks">
                <img src="./NEXT/dhokla.jpg">
                <h2>Dhokla</h2>
                <p>A fluffy, steamed savory cake made from fermented gram flour batter</p>
                <a href="./card/dhokla.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Palak Paneer" data-category="main">
                <img src="./NEXT/palakpaneer.jpg">
                <h2>Palak Paneer</h2>
                <p>Soft paneer cubes in a creamy spinach gravy — healthy, flavorful</p>
                <a href="./card/palakpaneer.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Aloo Paratha" data-category="snacks">
                <img src="./NEXT/aloparatha.jpg">
                <h2>Aloo Paratha</h2>
                <p>Stuffed flatbread filled with spiced mashed potatoes best with curd</p>
                <a href="./card/aloparatha.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Rasgulla" data-category="dessert">
                <img src="./NEXT/rasgulla.jpg">
                <h2>Rasgulla</h2>
                <p>Soft and spongy cheese balls soaked in light sugar syrup </p>
                <a href="./card/rasgulla.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Prawn Masala" data-category="main">
                <img src="./NEXT/prawnsmasala.jpg">
                <h2>Prawn Masala</h2>
                <p>Juicy prawns cooked in a fiery, flavorful masala gravy best with butter naan</p>
                <a href="./card/prawnsmasala.html"><span>View Recipe</span></a>
            </div>

            <div class="recipe-card" data-name="Vada Pav" data-category="snacks">
                <img src="./NEXT/vadapav.jpg">
                <h2>Vada Pav</h2>
                <p> A spicy potato fritter tucked in a bun, served with chutneys </p>
                <a href="./card/vadapav.html"><span>View Recipe</span></a>
            </div>


        </div>

        <div id="notFound" class="hidden">
            <h2>🔍 Oops! Recipe Not Found!</h2>
            <p>We couldn't find the recipe you're looking for. Try searching for something else!</p>
        </div>
    </section>

    <footer>
        <div>
            <p>&copy; 2025 RECIPE HUB PVT LIMITED</p>
        </div>
    </footer>

    <script src="./NEXT/new.js"></script>
</body>