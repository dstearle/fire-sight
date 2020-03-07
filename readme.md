# fire-sight

<br>

**What Is This Project? :**

- Fire Sight is an emergency response app where guests can register and login to report fires. Using the PHP framework Laravel and a Model View Controller approach (MVC) I have set up a system of authentication so that different types of users have access to different parts of the app. For instance an unregistered user can view sightings but only registered users are able to create posts. Although this project is mainly to demonstrate my capabilities with PHP and Laravel, I am also using a Javascript library called Leaflets to generate the maps for sightings.

<br>

**What Do I Do? :**

- Feel free to register as a user on the Dashboard page if you havenot already and from there you can create new sightings or even comment other people's sightings. You do not need to be registered to view the Sightings page or individual posts for sightings but only to create, edit and delete sightings and discussion posts made by you.

<br>

**What Are The Functions For Each Page? :**

Dashboard:

- For unrigestered users (guests) the dashboard is where you can either register yourself to become an authenticated user or login with your email and password. Once registered or logged in, users can then use the dashboard to report new sightings or edit and delete previosly created ones.

Sightings:

- The sightings page is where you can view all currently reported sightings. At the top of the page is a large map displaying icons for the location of each sighting. Below is a listing of each individual sighting with a zoomed in version of its map location and other information posted with it. Clicking on sighting will take you to a thread for that sighting to view even more information. Registered users may post questions and comments for said sighting below.

<br>

**Notable Features :**

Leaflet Maps:

- One of the most important features used in this project are the maps used to display the reported fires. Using the open source Javascript library called Leaflets I was able to display the data stored into a database by registered users. In order to use this Javascript library in my PHP focused project I used the Javascript framework Vue.js that comes prepackaged with Laravel. By creating Vue components to hold the Javascript used to build my Maps I was able to integrate this feature where ever I needed such as blade files. In order to get the data need for the maps such as the latitude and longitude for plotting map markers it was as simple as passing it to the Vue components via props and Laravel Helpers.

<br>

**To Do List:**

- Navbar:
- Settings:
- About Section: Fix icons for portfolio card, style links, background image
- Dashboard Section: Area for discussions you are partaking in
- Sightings: Custom icons for map markers, multi colors for map markers, multiple images upload to post, counter for post images
- Misc: footer needed

<br>

**Future Developments:**

- Settings: Area for alert settings?

<br>

**Dependencies:**

- Laravel
- Leaflets
