<template>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 display background-white size-bloc-left-menu">
                <div class="align-center padding-top-20 padding-bottom-20"><img class="size-logo-navbar" src="img/logo-menu-liste.png"></div>
                <hr>
                <p><strong>Service</strong></p>
                <ul>
                    <li>
                        <a href=""><p class="margin-bottom-0">Liste complète</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Nouveau service</p></a>
                    </li>
                </ul>
                <p><strong>Produit</strong></p>
                <ul>
                    <li>
                        <a href=""><p class="margin-bottom-0">Liste complète</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Nouveau produit</p></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="container padding-top-10-large-screen">
                    <div class="row">
                        <div class="col-12 bg-onglet-navbar-orange padding-10">
                            <p class="white margin-bottom-0 align-center" style="font-size:45px"><strong>Service</strong></p>
                        </div>
                    </div>
                </div>
                <div class="container padding-top-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 background-white padding-10">
                            <p class="bg-onglet-navbar-orange white padding-10">Nouveau Service / Produit</p>
                            <form class="">
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Réf">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Libellé">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Prix de vente TTC">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Service</option>
                                        <option>produit</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-service btn-primary bg-onglet-navbar-orange">Enregistrer</button>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 padding-10 background-white margin-top-10">
                            <p class="bg-onglet-navbar-orange white padding-10">Les 10 derniers services / produits modifiés</p>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Réf</th>
                                    <th scope="col">Libellé</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Type</th>
                                </tr>
                                </thead>
                                <tbody class="font-size-12 margin-table">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>PEC_01</td>
                                    <td>P_ECO_CITADINE</td>
                                    <td>30€</td>
                                    <td>Service</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PEC_02</td>
                                    <td>P_ECO_BERLINE</td>
                                    <td>50€</td>
                                    <td>Service</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>PEC_03</td>
                                    <td>P_ECO_COMPACTE</td>
                                    <td>70€</td>
                                    <td>Service</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>PEC_04</td>
                                    <td>P_ECO_SPORT</td>
                                    <td>100€</td>
                                    <td>Produit</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>PEL_01</td>
                                    <td>P_LUX_CITADINE</td>
                                    <td>90€</td>
                                    <td>Produit</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>PEL_02</td>
                                    <td>P_LUX_BERLINE</td>
                                    <td>110€</td>
                                    <td>Service</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>PEL_03</td>
                                    <td>P_LUX_COMPACTE</td>
                                    <td>130€</td>
                                    <td>Service</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>PEL_04</td>
                                    <td>P_LUX_COMPACTE</td>
                                    <td>130€</td>
                                    <td>Service</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>PEL_05</td>
                                    <td>P_LUX_SPORT</td>
                                    <td>160€</td>
                                    <td>produit</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>PEL_06</td>
                                    <td>P_LUX_BERLINE</td>
                                    <td>150€</td>
                                    <td>Service</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 padding-10 background-white margin-top-10">
                            <div class="container align-center">
                                <div class="card col-12 margin-bottom-20">
                                    <div class="card-body">
                                        <h5 class="card-title size-total">Total services</h5>
                                        <p class="card-text size-somme">12</p>
                                    </div>
                                </div>
                                <div class="card col-12 margin-bottom-20">
                                    <div class="card-body">
                                        <h5 class="card-title size-total">Total produits</h5>
                                        <p class="card-text size-somme">30</p>
                                    </div>
                                </div>
                                <div class="card col-12 bg-onglet-navbar-grey white">
                                    <div class="card-body margin-bottom-mobile-20">
                                        <h5 class="card-title size-total">TOTAL Services / Produits</h5>
                                        <p class="card-text size-somme">42</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Service"
    }
</script>

<style scoped>

</style>