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
                :lat-lng="[this.lat, this.lng]"
            >

                <!-- Icon -->
                <l-icon
					:icon-anchor="staticAnchor"
					class-name="custom-div-icon"
                >

                    <div :class="this.fire_status" class='marker-pin'></div>
                    
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

    props: ['lat', 'lng', 'fire_status', 'icon'],

    data() {

      return {

        myIcon: require("./../../../../public/storage/icons/" + this.icon),

        // Zoom out
        zoom: 15,
        // Map location
        center: latLng(this.lat, this.lng),
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

  };

</script>

<style>

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

.Smoke { background: #A8A8A8 !important; }
.Flame { background: #ccff00 !important; }
.Blaze { background: #F76706 !important; }
.Wide-Spread { background: #cb4154 !important; }
.Extinguished { background: #36454f !important; }

</style>