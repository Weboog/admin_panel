<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/admin_panel/public/css/style.css">
    <script src="/admin_panel/public/js/main.js" type="text/javascript"></script>
    <title>LOCATIA</title>
</head>
<body>

<?php require_once './inc/aside.php' ?>
<?php require_once './inc/header.php' ?>

    <main class="content">
        <nav class="navigation">
            <ul class="navigation__items">
                <li>
                </li>
            </ul>
            <div class="search">
                <!-- //////////////////////////////////////////////// -->
                <div class="select">
                    <div class="selected">
                        <span data-value="1" class="label_selected">IDENTIFIANT</span>
                        <svg class="arrow">
                            <use href="/admin_panel/public/img/sprite.svg#down"></use>
                        </svg>
                        <ul id="select" class="hide_options">
                            <li><a class="option_item" data-id="1" href="#"><span>Identifiant</span></a></li>
                            <li><a class="option_item" data-id="2" href="#"><span>Position</span></a></li>
                            <li><a class="option_item" data-id="3" href="#"><span>Date</span></a></li>
                        </ul>
                    </div>
                </div>
                <form>
                    <input type="search" class="input_text" name="search" placeholder="">
                    <button class="btn">
                        <svg>
                            <use href="/admin_panel/public/img/sprite.svg#search"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
        <section class="appart_form">
            <h2 class="head_form">Ajouter un nouvel appartement</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="owner">
                    <select name="owner" id="owner">
                        <option value="Abell">Abell</option>
                        <option value="Joseph">Joseph</option>
                    </select>
                    <a href="owners" class="add_owner">Nouveau propriétaire</a>
                </div>
                <div class="address">
                    <select name="type" id="type">
                        <option value="0">Type du bien</option>
                        <option value="1">Appartement</option>
                        <option value="2">Maison</option>
                    </select>
                    <select name="city" id="city">
                        <option value="0">Ville</option>
                        <option value="1">Rabat</option>
                        <option value="2">Salé</option>
                        <option value="3">Témara</option>
                    </select>
                    <select name="district" id="district">
                        <option value="0">Zone</option>
                        <option value="1">Zone 1</option>
                        <option value="2">Zone 2</option>
                        <option value="3">Zone 3</option>
                        <option value="4">Zone 4</option>
                        <option value="5">Zone 5</option>
                    </select>
                    <select name="borough" id="borough">
                        <option value="0">Quartier</option>
                        <option value="1">Quartier 1</option>
                        <option value="2">Quartier 2</option>
                        <option value="3">Quartier 3</option>
                        <option value="4">Quartier 4</option>
                        <option value="5">Quartier 5</option>
                    </select>
                    <textarea name="address" id="address" placeholder="Addresse complète"></textarea>
                </div>
                <div class="infos">
                    <select name="pieces" id="pieces">
                        <option value="0">Pièces</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <select name="rooms" id="pieces">
                        <option value="0">Chambres</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <input type="text" name="surface" placeholder="Surface">
                    <input type="text" name="price" placeholder="Prix">
                </div>
                <div class="details">
                    <textarea name="description" id="description" placeholder="Decription"></textarea>
                    <textarea name="nearby" id="nearby" placeholder="à l'éxtérieur"></textarea>
                    <textarea name="inside" id="inside" placeholder="à l'intérieur"></textarea>
                    <textarea name="conditions" id="conditions" placeholder="Conditions à remplir"></textarea>
                </div>
                <div class="gallery">
                    <label for="gallery">Sélectionnez des images</label>
                    <input type="file" id="gallery" name="gallery" accept="image/jpeg" multiple>
                </div>
                <input type="reset" value="Réinitialiser">
                <button>Enregistrer</button>
            </form>
            <div class="guide">
                <p class="guide__address">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad cumque eius eos magnam necessitatibus nulla possimus ratione, reprehenderit sit, sunt vero vitae. Accusamus excepturi ipsum itaque modi nemo praesentium.
                </p>
            </div>
        </section>
    </main>
</body>
</html>