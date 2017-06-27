

    <form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
        <input type="hidden" name="id" value="<?=$data->id ?? ''?>">
        <p>
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom" value="<?=$data->nom ?? ''?>">
        </p>
        <p>
            <label for="prenom">Prénom</label><br>
            <input type="text" name="prenom" id="prenom" value="<?=$data->prenom ?? ''?>">
        </p>

        <p>
            <label for="mail">mail</label><br>
            <input type="text" name="mail" id="mail" value="<?=$data->mail ?? ''?>">
        </p>
        <p>
            <label for="message">Message</label><br>
            <textarea type="text" name="message" id="message" cols="50" rows="10"><?=$data->message ?? ''?></textarea>
        </p>

        <p>
            <input type="Submit" value="valider">
        </p>

    </form>