<template>

    <nav class="navbar navbar-expand-lg navbar-light bg-navbar fixed-top ombre">
        <div class="container">
            <router-link to="/" class="navbar-brand title" href="#">
                <img class="size-logo-navbar" src="img/logo-navbar-oneyon.png"
                     alt="Gestion commercial pour autoentrepreneur GesYon"
                     title="Gestion commercial - client - service - facture - devis pour autoentrepreneur GesYon">
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-align-center">
                    <li class="nav-item active padding-right-20 margin-2 font-size-14">
                        <router-link :to="{ name: 'Home'}" class="nav-link bg-onglet-navbar-blue padding-10" href="#">
                            <i class="fa fa-home white" style="font-size:30px"></i>
                            <p class="white margin-bottom-0">Accueil</p></router-link>
                    </li>
                    <li class="nav-item active padding-right-20 margin-2 font-size-14">
                        <router-link :to="{ name: 'Client'}" class="nav-link bg-onglet-navbar-green padding-10"
                                     href="#">
                            <i class="fa fa-address-book-o white" style="font-size:30px"></i>
                            <p class="white margin-bottom-0">Clients</p></router-link>
                    </li>
                    <li class="nav-item active padding-right-20 margin-2 font-size-14">
                        <router-link :to="{ name: 'Service'}" class="nav-link bg-onglet-navbar-orange padding-10"
                                     href="#">
                            <i class="fa fa-archive white" style="font-size:30px"></i>
                            <p class="white margin-bottom-0">Services</p></router-link>
                    </li>
                    <!--<li class="nav-item active padding-right-20 margin-2 font-size-14">
                        <a class="nav-link bg-onglet-navbar-blue padding-10" href="{{ path_for('devis')}}">
                          <i class="fa fa-file white" style="font-size:30px"></i><p class="white margin-bottom-0">Devis</p></a>
                    </li>-->
                    <li class="nav-item active padding-right-20 margin-2 font-size-14">
                        <router-link :to="{ name: 'Facture'}" class="nav-link bg-onglet-navbar-purple-2 padding-10"
                                     href="#">
                            <i class="fa fa-files-o white" style="font-size:30px"></i>
                            <p class="white margin-bottom-0">Facture / Devis</p></router-link>
                    </li>
                    <li class="nav-item active padding-right-20 margin-2 font-size-14">
                        <router-link :to="{ name:'Parametrage' }" class="nav-link bg-onglet-navbar-grey padding-10" href="#">
                            <i class="fa fa-gears white" style="font-size:30px"></i>
                            <p class="white margin-bottom-0">Outils</p></router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Navbar"
    }
</script>

<style scoped>

</style>