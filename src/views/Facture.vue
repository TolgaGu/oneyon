<template>


    <div class="container-fluid">
        <div class="row">
            <!--COLONNE A GAUCHE-->
            <div class="col-lg-2 col-md-2 display background-white size-bloc-left-menu">
                <div class="align-center padding-top-20 padding-bottom-20"><img class="size-logo-navbar" src="img/logo-menu-liste.png"></div>
                <hr>
                <p><strong>Facture</strong></p>
                <ul>
                    <li>
                        <a href=""><p class="margin-bottom-0">Nouvelle facture</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Nouveau client</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Liste complète</p></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="container padding-top-10-large-screen">
                    <div class="row">
                        <div class="col-12 bg-onglet-navbar-purple padding-10">
                            <p class="white margin-bottom-0 align-center" style="font-size:45px"><strong>Facture / Devis</strong></p>
                        </div>
                    </div>
                </div>
                <div class="container padding-top-10-large-screen">
                    <div class="row">
                        <div class="col-12 background-white padding-10">
                            <p class="bg-onglet-navbar-purple-2 align-center white padding-10">Nouvelle facture</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <p class=""><strong>Client</strong></p>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Client</option>
                                            <option>Eddy Gob</option>
                                            <option>Cyril Boulot</option>
                                            <option>Manu Bertrand</option>
                                        </select>
                                    </div>
                                    <form class="">
                                        <div class="form-row form-group">
                                            <div class="col">
                                                <input type="date" class="form-control" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect166">
                                                        <option>Moyen de règlement</option>
                                                        <option>Espèce</option>
                                                        <option>Carte bleu</option>
                                                        <option>Chèque</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Durée de validité">
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect12">
                                                        <option>Jours</option>
                                                        <option>Mois</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6">
                                    <p class=""><strong>Ajouter un service</strong></p>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect13">
                                            <option>Service</option>
                                            <option>PEC_01 - P_ECO_CITADINE - 30€</option>
                                            <option>PEC_02 - P_ECO_COMPACTE - 20€</option>
                                            <option>PEC_91 - P_ECO_BERLINE - 80€</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Quantité">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Réduction">
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect14">
                                                    <option>€</option>
                                                    <option>%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <p class=""><strong>Ajouter un produit</strong></p>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect15">
                                            <option>produit</option>
                                            <option>PEC_04 - Plastique - 19€</option>
                                            <option>PEC_03 - iRonX - 19€</option>
                                            <option>PEC_07 - Cuir - 19€</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Quantité">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Réduction">
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect16">
                                                    <option>€</option>
                                                    <option>%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <p class=""><strong>Ajouter une nouvelle ligne</strong></p>
                                    <div class="form-row form-group">
                                        <div class="col">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Quantité">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Prix">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Réduction">
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect17">
                                                    <option>€</option>
                                                    <option>%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn margin-bottom-10 white bg-onglet-navbar-orange">Ajouter nouvelle(s) ligne(s)</button>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-devis white bg-onglet-navbar-purple-2 padding-20 ombre">Générer facture</button>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-enregistrer white bg-onglet-navbar-green padding-20 ombre">Enregistrer facture</button>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-annuler white bg-onglet-navbar-grey padding-20 ombre">Annuler facture</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 padding-10 background-white ">
                            <p class="bg-onglet-navbar-purple-2 white padding-10">Les 5 derniers factures</p>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Réf</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">État</th>
                                </tr>
                                </thead>
                                <tbody class="font-size-12 margin-table">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>FAC_0921</td>
                                    <td>Eddy Gob</td>
                                    <td>Client</td>
                                    <td>Payé</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>FAC_0621</td>
                                    <td>Cyril Haini</td>
                                    <td>Client</td>
                                    <td>En attente</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>FAC_2921</td>
                                    <td>Manu Bertrand</td>
                                    <td>Client</td>
                                    <td>Payé</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>FAC_0321</td>
                                    <td>Thomas Chenard</td>
                                    <td>Client</td>
                                    <td>Payé</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>FAC_0981</td>
                                    <td>Bastien Hetler</td>
                                    <td>Client</td>
                                    <td>En attente</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 padding-10 background-white">
                            <p class="bg-onglet-navbar-purple-2 white padding-top-20 padding-10">Les 5 derniers clients</p>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Type Client</th>
                                </tr>
                                </thead>
                                <tbody class="font-size-12 margin-table">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Hanouna</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Eddy</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-12 padding-10 background-white margin-top-10">
                    <div class="container align-center">
                        <div class="row">
                            <div class="white col-4">
                                <div class="bg-onglet-navbar-grey-clair card-body margin-bottom-mobile-20">
                                    <h5 class="card-title size-total">Liste complète facture</h5>
                                    <p class="card-text"><i class="fa fa-address-book" style="font-size:30px"></i></p>
                                </div>
                            </div>
                            <div class="white col-4">
                                <div class="bg-onglet-navbar-grey-clair card-body margin-bottom-mobile-20">
                                    <h5 class="card-title size-total">Nouveau client</h5>
                                    <p class="card-text"><i class="fa fa-address-book-o" style="font-size:30px"></i></p>
                                </div>
                            </div>
                            <div class="white col-4">
                                <div class="bg-onglet-navbar-purple-2 card-body margin-bottom-mobile-20">
                                    <h5 class="card-title size-total">Nouvelle facture</h5>
                                    <p class="card-text"><i class="fa fa-plus-square" style="font-size:30px"></i></p>
                                </div>
                            </div>
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
        name: "Facture"
    }
</script>

<style scoped>

</style>