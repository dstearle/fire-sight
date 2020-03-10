<template>

  <div style="height: 400px; width: 100%">

        <!-- Leaflet Map -->
        <l-map
            :zoom="zoom"
            :center="center"
            style="height: 100%"
        >

            <!-- Tile Layer -->
            <l-tile-layer
				:url="url"
				:attribution="attribution"
            />

            <!-- Marker -->
            <l-marker 
                ref="marker"
                v-for="post in postsGet"
                :post="post"
                v-bind:key="post.id" 
                :lat-lng="[post.marker_latitude, post.marker_longitude]"
            >

                <!-- Icon -->
                <l-icon
					:icon-anchor="staticAnchor"
					class-name="custom-div-icon"
                >

                    <div :class='post.fire_status_button' class='marker-pin'></div>
                    
                    <img :src= myIcon class="my-auto">

                </l-icon>

            </l-marker>

        </l-map>

    </div>

</template>

<script>

  import { LMap, LTileLayer, LMarker, LIcon, } from "vue2-leaflet";
  import { latLng, icon } from "leaflet";

  export default {

    name: "Icon",

    components: {

      LMap,
      LTileLayer,
      LMarker,
      LIcon,

    },

    props: ['posts'],

    data() {

      return {

        myIcon: require("./../../../../public/storage/icons/flame-icon.png"),

        // Zoom out
        zoom: 5,
        // Map location
        center: latLng(37.52732, -119.278882),
        url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        attribution:
          '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
        // Icon Properties
        // icon: icon({
        //   iconUrl: require("./../images/dinoIcon.png"),
        //   iconSize: [40, 56],
        //   iconAnchor: [16, 37],
        // }),
        staticAnchor: [16, 37],
        iconSize: 64

      };

    },

    computed: {

        postsGet() {
           
           let postsArray = this.posts;
           return postsArray;

        }

    }

  };

</script>

<style>

  .someExtraClass {

    background-color: lightgreen;
    padding: 10px;
    border: 1px solid #333;
    border-radius: 0 20px 20px 20px;
    box-shadow: 5px 3px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: auto !important;
    height: auto !important;
    margin: 0 !important;

  }

  .marker-pin {

    width: 40px;
    height: 40px;
    border-radius: 50% 50% 50% 0;
    position: absolute;
    transform: rotate(-45deg);
    left: 50%;
    top: 50%;
    margin: -15px 0 0 -15px;

  }

.marker-pin::after {

  content: '';
  width: 30px;
  height: 30px;
  margin: 5px 0 0 5px;
  background: #fff;
  position: absolute;
  border-radius: 50%;

 }

.custom-div-icon img {

  position: absolute;
  width: 24px;
  font-size: 22px;
  left: 0;
  right: 0;
  margin: 10px auto;
  text-align: center;

}

.Smoke {    background: #A8A8A8 !important; }
.Flame {    background: #ccff00 !important; }
.Blaze {    background: #F76706 !important; }
.wide_spread {    background: #cb4154 !important; }
.Extinguished {    background: #36454f !important; }

</style>