<body class="bgP">
<div class="change-image">
    <img class="image-edit  img-fluid  picture-user" src="./image_profil/<?php echo $users[0]["Image_profil"]; ?>" alt="<?php echo $users[0]["Pseudo_profil"]; ?>">

    <label for="file" class="label-file">Choisir une image</label>
    <input id="file" class="input-file" type="file">

    <button class=" btn-edit text-dark">Supprimer image</button>
</div>
<div class="edit-profil">
    <div class="card-body">
        <form action="./profil.php?profil=<?php echo $profilstatus[0]; ?>%2Cedit" method="post">
            <div>
                <label >Pseudo : </label> <?php if($success['pseudo'] == "true") {?> <i class="fas fa-check"></i> Modification réussi <?php } elseif($success['pseudo'] == "failpseudo") { ?> <i class="fas fa-times"></i> Modification impossible <?php } ?>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo" value="<?php echo $users[0]["Pseudo_profil"]; ?>" required>
            </div>
            <div>
                <label >E-mail : </label> <?php if($success['mail'] == "true") { ?> <i class="fas fa-check"></i> Modification réussi <?php } elseif($success['mail'] == "failmail") { ?> <i class="fas fa-times"></i> Modification impossible <?php } elseif($success['mail'] == "mailexist") { ?> <i class="fas fa-times"></i> Cet e-mail existe déjà <?php } ?>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value="<?php echo $users[0]["Mail_profil"]; ?>" required>
            </div>
            <div class=" mb-3">
                <label>Mot de passe actuel : </label> <?php if($success['mdp'] == "true") {?> <i class="fas fa-check"></i> Modification réussi <?php } elseif($success['mdp'] == "failmdp") { ?> <i class="fas fa-times"></i> Modification du mot de passe impossible - Mot de passe incorrect <?php } ?>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="" aria-describedby="inputGroupPrepend" name="mdp">
                </div>
            </div>
            <div class=" mb-3">
                <label>Nouveau mot de passe : </label> <?php if($success['mdp'] == "true") {?> <i class="fas fa-check"></i> Modification réussi <?php } elseif($success['mdp'] == "failnvmdp") { ?> <i class="fas fa-times"></i> Modification du mot de passe impossible - Les mots de passe saisis ne correspondent pas <?php } ?>
                <div class="input-group">
                    <input type="password" class="form-control" id="validationCustomMDP" placeholder="" aria-describedby="inputGroupPrepend" name="nvmdp">
                </div>
            </div>
            <div class=" mb-3">
                <label>Confirmation mot de passe : </label> <?php if($success['mdp'] == "true") {?> <i class="fas fa-check"></i> Modification réussi <?php } elseif($success['mdp'] == "failnvmdp") { ?> <i class="fas fa-times"></i> <?php } ?>
                <div class="input-group">
                    <input type="password" class="form-control" id="validationCustomMDP" placeholder="" aria-describedby="inputGroupPrepend" name="nvmdpconfirm">

                </div>
            </div>
        
            <div>
                <label >Description :</label> <?php if($success['description'] == "true") {?> <i class="fas fa-check"></i> Modification réussi <?php } ?>
                <textarea type="text" class="form-control autoExpand w-100" name="description"><?php echo $users[0]["Description_profil"]; ?></textarea>
            </div>
            <div >
                <label >Genre :</label> <?php if($success['genre'] == "true") {?> <i class="fas fa-check"></i> Modification réussi <?php } ?>
                    <select class="custom-select mb-2" name="genre" required>
                        <option value="Homme" <?php if($users[0]["Genre_profil"] == "Homme") { ?>selected<?php } ?>>Homme</option>
                        <option value="Femme" <?php if($users[0]["Genre_profil"] == "Femme") { ?>selected<?php } ?>>Femme</option>
                        <option value="Non-binaire" <?php if($users[0]["Genre_profil"] == "Non-binaire") { ?>selected<?php } ?>>Non-binaire</option>
                        <option value="Hélicoptère d'attaque" <?php if($users[0]["Genre_profil"] == "Hélicoptère d'attaque") { ?>selected<?php } ?>>Hélicoptère d'attaque</option>
                    </select>
            </div>
        
            <button type="submit" class="btn btn-primary" name="inscription" value="valide">Accepter</button>
        </form>
    </div>
</div>
<?php footer()?>