<template>
    
    <div class="container">
        
        <div class="row py-3">

            <div class="col">

                <!-- Links To Portfolio & Github -->
                <app-portfolio-card class="mb-5"></app-portfolio-card>

                <!-- Welcome -->
                <div class="my-5">

                    <h1 class="text-black">Welcome To Fire Sight!</h1>

                    <hr class="my-3">

                    <div class="card text-white about-card">

                        <div class="card-body">

                            <!-- What Is This? -->
                            <h5><u class="about-ul">What Is This Project?</u></h5>

                            <p>
                                Fire Sight is an emergency response app where guests can register and login to report fires. 
                                Using the PHP framework Laravel and a Model View Controller approach (MVC) I have set up an authentication system so that 
                                different types of users have access to different parts of the app. For instance an unregistered user can view sightings 
                                but only registered users are able to create posts. Although this project is mainly to demonstrate my capabilities with PHP and Laravel, 
                                I am also using a Javascript library called <a href="https://leafletjs.com/index.html">Leaflets</a> to generate the maps for sightings.

                            </p>

                            <!-- What Do I Do? -->
                            <h5><u class="about-ul">What Do I Do?</u></h5>

                            <p>
                                Feel free to register as a user on the Dashboard page and from there you can create new sightings or even comment other people's sightings.
                                You do not need to be registered to view the Sightings page or individual posts for sightings but only to create, edit and delete sightings and discussion posts made by you.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Page Descriptions -->
                <div class="my-5">

                    <h1 class="text-black">What Are The Functions For Each Page?</h1>

                    <hr class="my-3">

                    <div class="card text-white about-card">

                        <div class="card-body">

                            <!-- Dashboard Description -->
                            <h5><u class="about-ul">Dashboard</u></h5>

                            <p>
                                For unrigestered users (guests) the dashboard is where you can either register yourself to become an authenticated user or login with your email and password. 
                                Once registered or logged in, users can then use the dashboard to report new sightings or edit and delete previosly created posts.
                            </p>

                            <!-- Sightings Description -->
                            <h5><u class="about-ul">Sightings</u></h5>

                            <p>
                                The sightings page is where you can view all currently reported sightings. 
                                At the top of the page is a large map displaying icons for the location of each sighting.
                                Below is a listing of each individual sighting with a zoomed in version of its map location and other information posted with it.
                                Clicking on a sighting will take you to a thread specifically for that sighting to view even more information. 
                                Registered users may post questions and comments for said sighting below in the discussion posts area.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Notable Features -->
                <div class="my-5">

                    <h1 class="text-black">Notable Features</h1>

                    <hr class="my-3">

                    <div class="card text-white about-card">

                        <div class="card-body">

                            <!-- Leaflet Maps Description -->
                            <h5><u class="about-ul">Leaflet Maps</u></h5>

                            <p>
                                One of the most important features used in this project are the maps used to display the reported fires.
                                Using the open source Javascript library called <a href="https://leafletjs.com/index.html">Leaflets</a> I was able to display the data stored into a database by registered users.
                                In order to use this Javascript library in my PHP focused project I used the Javascript framework Vue.js that comes prepackaged with Laravel.
                                By creating Vue components to hold the Javascript used to build my maps, I was able to integrate this feature where ever I needed such as php blade files. 
                                In order to get the data needed for the maps such as the latitude and longitude for plotting map markers it was as simple as passing it to the Vue components via props and Laravel Helpers.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>
    
</template>

<script>
    import PortfolioCard from "./PortfolioCard.vue"
    export default {
        components: {
        
            appPortfolioCard: PortfolioCard,
            
        },
        
    }
</script>

<style scoped>
    hr {              
        background-color: white;
        height: 0.5px;
    }
    .about-card {
        background: rgba(0,0,0,0.6);
    }
    .about-ul { text-decoration: underline #F76707; }

    a:link, a:visited {
        color: white;
        border-bottom-style: solid;
        border-bottom-color: #F76707;
    }

    a:hover, a:active {
        border-bottom: none;
        text-decoration: none;
    }
</style>