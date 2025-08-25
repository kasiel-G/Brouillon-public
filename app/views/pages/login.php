
<section id="overlay"></section>

<section id="inscri">
        <div class="inscri-box">
            <h2>C'est ici que tout commence</h2>
            <p>Veuillez remplir le formulaire pour créer votre compte</p>
            <form id="form-inscri" method="POST" enctype="multipart/form-data">
                <div class="from-inscri-head">
                    <img src="" alt="">
                    <div class="boxbox">
                        <label for="PDP">Choisir une photo de profile</label><br>
                        <input type="file" name="PDP" id="PDP">
                    </div>
                </div>
                <div class="form-inscrit-IP">
                    <h3>Informations personnelles</h3>

                    <label for="nom">Nom</label>
                    <label for="prenom" class="prenom">Prénom</label> <br>
                    
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">

                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" placeholder="Entrez votre age" min="14">
                </div>
                
                <div class="form-inscrit-coordonnees">
                    <h3>Coordonnées</h3>

                    <label for="email">Email</label>
                    <label for="Adresse" class="prenom">Adresse</label><br>
                    <input type="email" name="email" id="email" placeholder="Entrez votre email">

                    <input type="text" name="Adresse" id="password" placeholder="Entrez votre adresse">

                    <label for="tel">Téléphone</label><br>
                    <input type="text" name="tel" id="tel" placeholder="Entrez votre numéro de téléphone">
                </div>
                <div class="form-inscrit-MDP">
                    <h3>Mot de passe</h3>

                    <label for="password">Mot de passe</label>
                    <label for="confirm-password" class="prenom2">Confirmer le mot de passe</label><br>
                    <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">

                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirmez le mot de passe">
                </div>
                <div class="form-inscrit-btn">
                    <button type="submit">Créer un compte</button>
                    <p>Vous avez déjà un compte ? <a href="/connexion/">Connectez-vous</a></p>
                </div>
            </form>
        </div>
    </section>