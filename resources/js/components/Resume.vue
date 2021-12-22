<template>
  <div class="m-auto">
    <vue-particles
      style="z-index: -1; background-color: rgb(18, 24, 24)"
      class="fixed w-full h-screen"
    >
      color="#CFCFCF" :bg="true">
    </vue-particles>
    <div class="max-w-5xl m-auto pt-10 mb-10 flex justify-center">
      <button class="p-3 button-green text-white rounded" @click="onClick()">
        <i class="fa fa-download"></i> Download Resume
      </button>
    </div>
    <div
      data-aos="flip-left"
      data-aos-easing="ease-out-cubic"
      data-aos-duration="2000"
      style="z-index: 100"
      class="max-w-5xl m-auto mb-40"
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
