<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/main.js" type="text/javascript"></script>
    <title>LOCATIA</title>
</head>
<body>

    <?php require_once './inc/aside.php' ?>
    <?php require_once './inc/header.php' ?>

    <main class="content">
        <nav class="navigation">
            <ul class="navigation__items">
                <li>
                    <a href="#add_appart" class="button anchor">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#add"></use>
                        </svg>
                        Ajouter
                    </a>
                </li>
            </ul>
            <div class="search">
                <!-- //////////////////////////////////////////////// -->
                <div class="select">
                    <div class="selected">
                        <span data-value="1" class="label_selected">IDENTIFIANT</span>
                        <svg class="arrow">
                            <use href="public/img/sprite.svg#down"></use>
                        </svg>
                        <ul id="select" class="hide_options">
                            <li><a class="option_item" data-id="1" href="#"><span>Identifiant</span></a></li>
                            <li><a class="option_item" data-id="2" href="#"><span>Position</span></a></li>
                            <li><a class="option_item" data-id="3" href="#"><span>Date</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- //////////////////////////////////////////////// -->
                <!--<div class="criteria">
                    <ul id="criteria_items">
                        <li><a href="#" class="criteria__item">Identifiant</a></li>
                        <li><a href="#" class="criteria__item">Position</a></li>
                        <li><a href="#" class="criteria__item">Date</a></li>
                    </ul>
                    <a href="#criteria_items" class="criteria__selected btn_dashed">
                        Identifiant
                        <svg class="navigation__icon">
                            <use href="public/img/sprite.svg#down"></use>
                        </svg>
                    </a>
                </div>-->
                <form>
                    <input type="search" class="input_text" name="search" placeholder="">
                    <button class="btn">
                        <svg>
                            <use href="public/img/sprite.svg#search"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
        <h2 class="head-2">Affichage de 30 / 125 appartements</h2>
        <section class="data">
            <div class="table">
                <h3 class="thead">Id</h3>
                <h3 class="thead">Prix</h3>
                <h3 class="thead thead__views">Vues</h3>
                <h3 class="thead">Actions</h3>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                    <li><a href="#view_appart">
                        <svg class="actions_icon">
                            <use href="public/img/sprite.svg#details"></use>
                        </svg>
                        <span class="actions_label">Détails</span></a></li>
                    <li><a href="#edit_appart">
                        <svg class="actions_icon">
                            <use href="public/img/sprite.svg#edit"></use>
                        </svg>
                        <span class="actions_label">éditer</span></a></li>
                    <li><a href="#delete_appart">
                        <svg class="actions_icon">
                            <use href="public/img/sprite.svg#trash"></use>
                        </svg>
                        <span class="actions_label">Supprimer</span></a></li>
                </ul>
                </div>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="table">
                <h3 class="thead">Id</h3>
                <h3 class="thead">Prix</h3>
                <h3 class="thead thead__views">Vues</h3>
                <h3 class="thead">Actions</h3>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="table">
                <h3 class="thead">Id</h3>
                <h3 class="thead">Prix</h3>
                <h3 class="thead thead__views">Vues</h3>
                <h3 class="thead">Actions</h3>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>

                <div class="trow trow__id">#ADC257410</div>
                <div class="trow trow__price">350DH</div>
                <div class="trow trow__views">230</div>
                <div class="trow trow__actions">
                    <ul class="actions_menu">
                        <li><a href="#view_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#details"></use>
                            </svg>
                            <span class="actions_label">Détails</span></a></li>
                        <li><a href="#edit_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#edit"></use>
                            </svg>
                            <span class="actions_label">éditer</span></a></li>
                        <li><a href="#delete_appart">
                            <svg class="actions_icon">
                                <use href="public/img/sprite.svg#trash"></use>
                            </svg>
                            <span class="actions_label">Supprimer</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--<section class="test">
            <h2>FIRST TEXT</h2>
            <div class="locatia">
            </div>
            <h2>LAST TEXT</h2>
            <div class="map">MAP</div>
        </section>-->
    </main>
    <div id="options" class="popup">
    <div class="popup__closer">
        <a href="#">&times;</a>
    </div>
    <div class="popup__content">
        <p class="popup__names">Abell Raffick</p>
        <ul class="popup__options">
            <li><a href="#">Profil</a></li>
            <li><a href="#">Messages<span class="count">21</span></a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </div>
</div>

    <!--///////////////////////////////////////////-->
    <div class="element" id="add_appart">
        <div class="markup">
            <h2 class="head-1">Ajouter un nouvel appartement</h2>
            <form action="">
                <div class="data_primitif">
                    <div class="group position">
                        <h4>Type et position</h4>
                        <label for="type">Type du bien :</label>
                        <select name="type" id="type">
                            <option value="1">Appartement</option>
                            <option value="2">Maison</option>
                        </select>
                        <label for="city">Ville :</label>
                        <select name="city" id="city">
                            <option value="1">Rabat</option>
                            <option value="2">Salé</option>
                            <option value="3">Témara</option>
                        </select>
                        <label for="zone">Zone :</label>
                        <select name="zone" id="zone">
                            <option value="1">Souissi</option>
                            <option value="2">Alirfane</option>
                            <option value="3">Hay Ryad</option>
                            <option value="3">Agdal</option>
                        </select>
                        <label for="address">Adresse complète :</label>
                        <textarea name="address" id="address"></textarea>
                    </div>
                    <div class="group details">
                        <h4>Détails</h4>
                        <label for="pieces">Nombre de pièces :</label>
                        <select name="pieces" id="pieces">
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
                        <label for="rooms">Nombre de chambres :</label>
                        <select name="rooms" id="rooms">
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
                        <label for="surface">Surface :</label>
                        <input type="text" name="surface" id="surface">
                        <label for="price">Prix :</label>
                        <input type="text" name="price" id="price">
                    </div>
                    <div class="group owner">
                        <h4>Information du propiétaire</h4>
                        <label for="owner">Propriétaire :</label>
                        <input type="text" name="owner" id="owner">
                        <label for="phone">Téléphone :</label>
                        <input type="tel" name="phone" id="phone">
                    </div>
                </div>
                <div class="data_deep">
                    <div class="group description">
                        <h4>Description et conditions</h4>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                        <label for="external">Grosso modo</label>
                        <textarea name="external" id="external"></textarea>
                        <label for="internal">à l'intérieur</label>
                        <textarea name="internal" id="internal"></textarea>
                        <label for="condition">Condition à remplir</label>
                        <textarea name="condition" id="condition"></textarea>
                    </div>
                </div>
            </form>
            <div class="controls">
                <ul>
                    <li><a href="#" class="button cancel">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#cancel"></use>
                        </svg>
                        Annuler
                    </a></li>
                    <li><a href="" class="button validate">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#valid"></use>
                        </svg>
                        Enregistrer
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--///////////////////////////////////////////-->
    <div class="element" id="view_appart">
        <div class="markup">
            <h2 class="head-1">Détails de #CDA456389</h2>
            <div class="show">
                <div>
                    <ul>
                        <li>
                            <p><span>Id : </span><strong>DAC5467</strong></p>
                        </li>
                        <li>
                            <p><span>Type : </span><strong>Appartement</strong></p>
                        </li>
                        <li>
                            <p><span>Pièces : </span><strong>03</strong></p>
                        </li>
                        <li>
                            <p><span>Chambres : </span><strong>02</strong></p>
                        </li>
                        <li>
                            <p><span>Surface : </span><strong>80 m<sup>2</sup></strong></p>
                        </li>
                        <li>
                            <p><span>Ville : </span><strong>Rabat</strong></p>
                        </li>
                        <li>
                            <p><span>Zone : </span><strong>Souissi</strong></p>
                        </li>
                        <li>
                            <p><span>Prix : </span><strong>400 DH</strong></p>
                        </li>
                        <li>
                            <p><span>Vues : </span><strong>231</strong></p>
                        </li>
                        <li class="secret">
                            <p><span>Adresse : </span><strong>14 Rue mariol</strong></p>
                        </li>
                        <li class="secret">
                            <p><span>Propriétaire : </span><strong>Sander Hitlock</strong></p>
                        </li>
                        <li class="secret">
                            <p><span>Téléphone : </span><strong>0654324567</strong></p>
                        </li>
                        <li class="secret">
                            <p><span>Date de création : </span><strong>12/02/2019</strong></p>
                        </li>
                        <li class="secret">
                            <p><span>Dérnière modification : </span><strong>12/02/2019</strong></p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>Description</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque eum exercitationem harum
                        labore maxime molestiae. Aperiam aut, cumque dolores nesciunt pariatur perspiciatis quasi quos. Iure
                        nobis non optio perferendis!
                    </p>
                    <h4>Grosso Modo</h4>
                    <p>
                        <span>Jardin Publique</span><span>Gardien Parking</span><span>Station de bus</span><span>Mini Market</span>
                    </p>
                    <h4>à l'intéreiur</h4>
                    <p>
                        <span>Cuisine équipée</span><span>Chauffe eau électrique</span><span>Interphone</span>
                    </p>
                    <h4>Conditions</h4>
                    <p>
                        <span>être d'une carte CNIE</span><span>Pour les mariés présenter une copie d'acte de mariage</span>
                    </p>
                </div>
            </div>
            <div class="controls">
                <ul>
                    <li><a href="#" class="button validate">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#valid"></use>
                        </svg>
                        OK
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--///////////////////////////////////////////-->
    <div class="element" id="delete_appart">
        <div class="markup">
            <h2 class="head-1">Supprimer l'appartement #CDA456389</h2>
            <div class="controls">
                <ul>
                    <li><a href="#" class="button cancel">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#cancel"></use>
                        </svg>
                        NON
                    </a></li>
                    <li><a href="#" class="button validate">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#valid"></use>
                        </svg>
                        OUI
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--///////////////////////////////////////////-->
    <div class="element" id="edit_appart">
        <div class="markup">
            <h2 class="head-1">Ajouter un nouvel appartement</h2>
            <form action="">
                <div class="data_primitif">
                    <div class="group position">
                        <h4>Type et position</h4>
                        <label for="type">Type du bien :</label>
                        <select name="type" id="type">
                            <option value="1">Appartement</option>
                            <option value="2">Maison</option>
                        </select>
                        <label for="city">Ville :</label>
                        <select name="city" id="city">
                            <option value="1">Rabat</option>
                            <option value="2">Salé</option>
                            <option value="3">Témara</option>
                        </select>
                        <label for="zone">Zone :</label>
                        <select name="zone" id="zone">
                            <option value="1">Souissi</option>
                            <option value="2">Alirfane</option>
                            <option value="3">Hay Ryad</option>
                            <option value="3">Agdal</option>
                        </select>
                        <label for="address">Adresse complète :</label>
                        <textarea name="address" id="address"></textarea>
                    </div>
                    <div class="group details">
                        <h4>Détails</h4>
                        <label for="pieces">Nombre de pièces :</label>
                        <select name="pieces" id="pieces">
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
                        <label for="rooms">Nombre de chambres :</label>
                        <select name="rooms" id="rooms">
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
                        <label for="surface">Surface :</label>
                        <input type="text" name="surface" id="surface">
                        <label for="price">Prix :</label>
                        <input type="text" name="price" id="price">
                    </div>
                    <div class="group owner">
                        <h4>Information du propiétaire</h4>
                        <label for="owner">Propriétaire :</label>
                        <input type="text" name="owner" id="owner">
                        <label for="phone">Téléphone :</label>
                        <input type="tel" name="phone" id="phone">
                    </div>
                </div>
                <div class="data_deep">
                    <div class="group description">
                        <h4>Description et conditions</h4>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                        <label for="external">Grosso modo</label>
                        <textarea name="external" id="external"></textarea>
                        <label for="internal">à l'intérieur</label>
                        <textarea name="internal" id="internal"></textarea>
                        <label for="condition">Condition à remplir</label>
                        <textarea name="condition" id="condition"></textarea>
                    </div>
                </div>
            </form>
            <div class="controls">
                <ul>
                    <li><a href="#" class="button cancel">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#cancel"></use>
                        </svg>
                        Annuler
                    </a></li>
                    <li><a href="" class="button validate">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#valid"></use>
                        </svg>
                        Enregistrer
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--///////////////////////////////////////////-->
    <div class="element" id="add_newsletter">
        <div class="markup">
            <h2 class="head-1">Ajouter une Newsletter</h2>
            <form action="">
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" placeholder="Titre comme idée générale">
                <label for="body">Contenu :</label>
                <textarea name="body" class="big" id="body" placeholder="Composez un message en détails"></textarea>
            </form>
            <div class="controls">
                <ul>
                    <li><a href="#" class="button cancel">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#cancel"></use>
                        </svg>
                        Annuler
                    </a></li>
                    <li><a href="" class="button validate">
                        <svg class="button__icon">
                            <use href="public/img/sprite.svg#valid"></use>
                        </svg>
                        Enregistrer
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--///////////////////////////////////////////-->
</body>
</html>