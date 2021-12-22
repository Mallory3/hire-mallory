<template>
  <div class="m-auto">
    <vue-particles
      style="z-index: -1; background-color: rgb(18, 24, 24)"
      class="fixed w-full h-screen"
    >
      color="#CFCFCF" :bg="true">
    </vue-particles>
    <div class="max-w-5xl m-auto pt-10 mb-10 flex justify-center">
      <button class="p-3 button-green bg-green-500 text-white rounded" @click="onClick()">
        <i class="fa fa-download"></i> Download Resume
      </button>
    </div>
    <div
      data-aos="flip-left"
      data-aos-easing="ease-out-cubic"
      data-aos-duration="2000"
      style="z-index: 100"
      class="hidden sm:block max-w-5xl m-auto sm:mb-40"
    >
      <img class="min-h-content" src="/images/resume.png" alt="resume" />
    </div>
    <div class="h-5 ms:h-10"></div>
  </div>
</template>

<script>
import axios from 'axios';


export default {


  methods: {
          onClick() {
              axios({
                    url: '/images/mallory_resume.pdf',
                    method: 'GET',
                    responseType: 'blob',
                }).then((response) => {
                     var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                     var fileLink = document.createElement('a');

                     fileLink.href = fileURL;
                     fileLink.setAttribute('download', 'mallory_resume.pdf');
                     document.body.appendChild(fileLink);

                     fileLink.click();
                });
          }
      }
};

</script>
<style>
/* FONTS */
  @import url('https://fonts.googleapis.com/css2?family=Geo&family=Open+Sans:wght@800&display=swap');

  .geo {
    font-family: 'Geo', sans-serif;
  }

  .text-header {
    font-family: 'Open Sans', sans-serif;
  }
/* THEME */
  .router-link-exact-active {
    color: rgb(96,175,65);
  }
  .button-green {
    background-color: rgb(96,175,65) !important;
  }
  :hover.button-green {
    background-image: linear-gradient(to right, rgb(96,175,65), rgb(86, 206, 38));
  }
  .text-coral {
      color: rgb(241,82,46);
  }
  .bg-coral {
      background-color: rgb(241,82,46);
  }
  .bg-coral-grad {
    background-color: rgb(241,82,46);
    background: linear-gradient(90deg, rgba(241,82,46,1) 0%, rgba(250,48,0,1) 100%);
  }
  .bg-teal {
    background-color: rgb(29,72,79);
  }
</style>
