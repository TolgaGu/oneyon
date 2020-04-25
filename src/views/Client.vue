<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 display background-white size-bloc-left-menu">
                <div class="align-center padding-top-20 padding-bottom-20"><img class="size-logo-navbar" src="img/logo-menu-liste.png"></div>
                <hr>
                <p><strong>Client</strong></p>
                <ul>
                    <li>
                        <a href=""><p class="margin-bottom-0">Liste complète</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Nouveau client</p></a>
                    </li>
                </ul>
                <p><strong>Prospect</strong></p>
                <ul>
                    <li>
                        <a href=""><p class="margin-bottom-0">Liste complète</p></a>
                    </li>
                    <li>
                        <a href=""><p class="margin-bottom-0">Nouveau prospect</p></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="container padding-top-10-large-screen">
                    <div class="row">
                        <div class="col-12 bg-onglet-navbar-green padding-10">
                            <p class="white margin-bottom-0 align-center" style="font-size:45px"><strong>Client</strong></p>
                        </div>
                    </div>
                </div>
                <div class="container padding-top-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 background-white padding-10">
                            <p class="bg-onglet-navbar-green white padding-10">Nouveau Client / Prospect</p>
                            <form class="">
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
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Téléphone">
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
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Client</option>
                                        <option>Prospect</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-client btn-primary bg-onglet-navbar-green">Enregistrer</button>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 padding-10 background-white margin-top-10">
                            <p class="bg-onglet-navbar-green white padding-10">Les 10 derniers clients / prospects modifiés</p>
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
                                    <td>Prospect</td>
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
                                    <td>Prospect</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Eddy</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Gob</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Gob</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Gob</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Gob</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Gob</td>
                                    <td>the Bird</td>
                                    <td>Client</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 padding-10 background-white margin-top-10">
                            <div class="container align-center">
                                <div class="card col-12 margin-bottom-20">
                                    <div class="card-body">
                                        <h5 class="card-title size-total">Total clients</h5>
                                        <p class="card-text size-somme">18</p>
                                    </div>
                                </div>
                                <div class="card col-12 margin-bottom-20">
                                    <div class="card-body">
                                        <h5 class="card-title size-total">Total prospects</h5>
                                        <p class="card-text size-somme">7</p>
                                    </div>
                                </div>
                                <div class="card bg-onglet-navbar-green white">
                                    <div class="card-body col-12 margin-bottom-20">
                                        <h5 class="card-title size-total">TOTAL Clients / Prospects</h5>
                                        <p class="card-text size-somme">25</p>
                                    </div>
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
        name: "Client"
    }
</script>

<style scoped>

</style>