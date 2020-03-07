<template>
    
    <div class="container">
        
        <div class="row py-3">

            <div class="col">

                <!-- Links To Portfolio & Github -->
                <app-portfolio-card class="mb-5"></app-portfolio-card>

                <!-- Welcome -->
                <div class="my-5">

                    <h1 class="text-white">Welcome To Shrimp King!</h1>

                    <hr class="my-3">

                    <div class="card text-white about-card">

                        <div class="card-body">

                            <!-- What Is This? -->
                            <h5><u class="about-ul">What Is This Project?</u></h5>

                            <p>
                                Shrimp King is an ecommerce website sim where you can buy or sell fancy shrimp.
                                The main purpose of this project is to demonstrate my skills using Vuex.
                                Vuex is a state management pattern tool for Vue.js just like React's "Redux" or Facebook's "Flux".
                                With this very useful tool you can create a centralized store which can serve as the source of a state for data used across multiple components.

                            </p>

                            <!-- What Do I Do? -->
                            <h5><u class="about-ul">What Do I Do?</u></h5>

                            <p>
                                At the top right of your screen you can see your funds. 
                                Go ahead and visit the market page and purchase whatever you can.
                                Once you have made your purchases or if you would rather wait and see how the prices change head over to the Dashboard and end your day.
                                Each day will randomize the prices and available quantities of shrimp available for sale on the market page (Note: some shrimp might not be available on certain days).
                                The prices of shrimp you have purchased will match that current day's market price, so try to buy then sell high to gain a profit!
                            </p>

                            <!-- Anything Else? -->
                            <!-- <h5><u class="about-ul">Anything Else?</u></h5>
                            <p>
                                This site has many tools and features that can help .
                            </p> -->

                        </div>

                    </div>

                </div>

                <!-- Page Descriptions -->
                <div class="my-5">

                    <h1 class="text-white">What Are The Functions For Each Page?</h1>

                    <hr class="my-3">

                    <div class="card text-white about-card">

                        <div class="card-body">

                            <!-- Dashboard Description -->
                            <h5><u class="dash-ul">Dashboard</u></h5>

                            <p>
                                The dashboard page is where the user can save their current progress, load a previously saved game or end they fiscal day. 
                                Ending the day will randomize the prices and available quantities for shrimp in the market. 
                                The prices for shrimp you purchased in your inventory will also match their current market prices.
                                The dashboard also showcases a line chart displaying the prices of favorited shrimp over a period of two weeks.
                                Adding or removing shrimp to your favorites list will add or remove them from the chart regardless what page you are on.
                            </p>

                            <!-- Inventory Description -->
                            <h5><u class="inventory-ul">Inventory</u></h5>

                            <p>
                                The inventory page allows you to sell shrimp you have purchased. 
                                The quantity for each shrimp will only change as you buy or sell more shrimp. The prices for the shrimp will match the current day's market price. 
                                So make sure to sell when the market price is higher than what you originally purchased.
                            </p>

                            <!-- Market Description -->
                            <h5><u class="market-ul">Market</u></h5>

                            <p>
                                The market is where you may buy shirmp. 
                                Each day will have new prices and quantities. 
                                If you buy all of the available quantity for a particular shrimp its card will disappear until you either sell any amount of that type of shrimp or by ending the day (Note: Some shrimp might not always be available).
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Notable Features -->
                <div class="my-5">

                    <h1 class="text-white">Notable Features</h1>

                    <hr class="my-3">

                    <div class="card text-white about-card">

                        <div class="card-body">

                            <!-- Favorites System Description -->
                            <h5><u class="about-ul">The Favorites System</u></h5>

                            <p>
                                When exploring your Inventory or the Market page you will notice a star in the upper right corner of the image for each item.
                                This star allows the user to mark that item as "favorited" and will immeadiately remove said item from its current category and add it to the favorites list at the top (or vice versa if it is already favorited).
                                Favoriting an item on any page will correlate across the pages. 
                                So if you favorite an item in your Inventory, said item will also be added to favorites on the Market page.
                                This is because each item has a data object with a boolean of true or false.
                                Through Vuex the boolean in said data object is toggled in the store so any page making use of the favorites system can correctly keep track of what items are currently being favorited.
                                You are allowed to favorite up to six items, as you add items to your favorites list a counter showing your current amount of available slots will apear when you hover over the star icon.
                                If your favorites list is full hovering over the star icon will inform you that you must remove items from favorites in order to add new ones.
                            </p>

                            <!-- Dashboard Chart Description -->
                            <h5><u class="about-ul">The Search Filter</u></h5>

                            <p>
                                Both the Inventory and Market pages feature a search filter at the top of the page. When you hover the tag icon for an item you will
                                see a list of tags associated with that card. When a user types into or selects the input field for the search filter, a drop down list
                                of available tags will apear. This list is populated by a function that searches through each item and brings back a set of unique tags.
                                As long as the data supplied is formatted correctly, the search list will always bring back a list of available tags. When one or more tags are selected by the user, a filtered list 
                                will appear below the search filter showing all of items that contain all of those tags (but not limited to). The list will update whenever 
                                a tag is added or removed from the selected tags array which appears below the search filter after a selection is made.
                            </p>

                            <!-- Dashboard Chart Description -->
                            <h5><u class="about-ul">The Dashboard Chart</u></h5>

                            <p>
                                On the Dashboard page you will see a large chart I made using a package called Chart.js (documentation here https://www.chartjs.org/).
                                Building off of the favorites system, this chart displays the prices for favorited items over a period of two weeks.
                                The idea being that when you hit the "End Day" button above the chart you can immeadiately see the current day's prices (located on the far right of the chart) for any favorited items and decide if it is a good time to buy or sell.
                                The chart is dynamic and will move older prices (the data being shown) and day labels (on the X axis) to the left to make room for new data.
                                Hovering over the data points on the chart will also bring up "tooltips" to display the name and price of said item.

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
    .about-ul { text-decoration: underline lightgreen; }
    .dash-ul { text-decoration: underline red; }
    .inventory-ul { text-decoration: underline yellow; }
    .market-ul { text-decoration: underline blue; }
</style>