<template>

    <div>

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="container padding-top-10-large-screen">
                <div class="row">
                    <div class="col-12 padding-10 background-white margin-top-10">
                        <div class="container align-center">
                            <div class="row">
                                <div class="white col-lg-4 col-md-4 col-12">
                                    <div class="bg-onglet-navbar-green card-body margin-bottom-mobile-20">
                                        <h5 class="card-title size-total">CHIFFRE D'AFFAIRES MENSUEL</h5>
                                        <p class="card-text" style="font-size:30px">1903,45€</p>
                                    </div>
                                </div>
                                <div class="white col-lg-4 col-md-4 col-12">
                                    <div class="bg-onglet-navbar-grey-clair card-body margin-bottom-mobile-20">
                                        <h5 class="card-title size-total">CHIFFRE D'AFFAIRES ANNUEL</h5>
                                        <p class="card-text" style="font-size:30px">32909,65€</p>
                                    </div>
                                </div>
                                <div class="white col-lg-4 col-md-4 col-12">
                                    <div class="bg-onglet-navbar-orange card-body margin-bottom-mobile-20">
                                        <h5 class="card-title size-total">CHARGE URSSAF MENSUEL</h5>
                                        <p class="card-text" style="font-size:30px">329€</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 padding-10 background-white ">
                                <p class="bg-onglet-navbar-purple white padding-10">Les 5 derniers devis</p>
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
                                        <td>DEVIS_0921</td>
                                        <td>Eddy Gob</td>
                                        <td>Prospect</td>
                                        <td>Validé</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>DEVIS_0621</td>
                                        <td>Cyril Haini</td>
                                        <td>Client</td>
                                        <td>En attente</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>DEVIS_2921</td>
                                        <td>Manu Bertrand</td>
                                        <td>Client</td>
                                        <td>Enregistré</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>DEVIS_0321</td>
                                        <td>Thomas Chenard</td>
                                        <td>Prospect</td>
                                        <td>Validé</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>DEVIS_0981</td>
                                        <td>Bastien Hetler</td>
                                        <td>Prospect</td>
                                        <td>En attente</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 padding-10 background-white">
                                <p class="bg-onglet-navbar-purple white padding-top-20 padding-10">Les 5 derniers prospects</p>
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
                                        <td>Prospect</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Prospect</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Prospect</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Hanouna</td>
                                        <td>the Bird</td>
                                        <td>Prospect</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Eddy</td>
                                        <td>the Bird</td>
                                        <td>Prospect</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        name: 'Dashboard',
        props: {
            msg: String
        }
    }
</script>
