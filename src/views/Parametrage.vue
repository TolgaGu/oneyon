<template>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 display background-white size-bloc-left-menu">
                <div class="align-center padding-top-20 padding-bottom-20"><img class="size-logo-navbar" src="img/logo-menu-liste.png"></div>
                <hr>
                <p><strong>Mes outils</strong></p>
                <ul>
                    <li>
                        <a href=""><p class="margin-bottom-0">Mon compte</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Mon entreprise</p></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="container padding-top-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 background-white padding-10">
                            <p class="bg-onglet-navbar-grey white padding-10">Mon Entreprise</p>
                            <form class="">
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Nom société">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Nom">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Adresse">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="CP">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Ville">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Web">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Téléphone">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Numéro SIRET">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="NAF / APE">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-client btn-primary bg-onglet-navbar-green">Enregistrer</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 background-white padding-10">
                            <p class="bg-onglet-navbar-grey white padding-10">Mon compte</p>
                            <p>identifiant : netcar@oneyon.com</p>
                            <p class="bg-onglet-navbar-grey white padding-10">Modifier mot de passe</p>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Modifier votre mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe actuel">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nouveau mot de passe">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nouveau mot de passe">
                            </div>
                            <button type="submit" class="btn btn-client btn-primary bg-onglet-navbar-green">Enregistrer</button>

                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Parametrage"
    }
</script>

<style scoped>

</style>