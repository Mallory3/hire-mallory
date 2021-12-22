<template>
  <div>
    <section class="bg-teal text-white relative">
      <div
        data-aos="zoom-out-up"
        data-aos-duration="2000"
        class="hero-image bg-center bg-no-repeat bg-cover flex"
        style="
          min-height: 90.5vh;
          max-height: 90.5vh;
          background-image: url(/images/Hero.jpeg);
        "
      >
        <div class="relative container mx-auto p-4 flex items-start z-10">
          <div data-aos="zoom-out-down" data-aos-duration="2000">
            <div
              class="content float-left py-4 px-5 my-6 text-center sm:text-left"
            >
              <div class="heading mb-1 text-3xl md:text-5xl text-header">
                Mallory Zlomanchuk
              </div>
              <div class="text-2xl md:text-4xl text-header">Virtual Resume</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="bg-white md:mt-20 mb-20">
      <section>
        <div
          style="z-index: 100"
          class="xl:max-w-6xl md:m-auto bg-white md:px-4"
        >
          <div
            id="about"
            class="
              xl:max-w-6xl
              grid grid-cols-1
              md:grid-cols-3 md:shadow-xl
              px-8
              md:p-8
              rounded-xl
              md:m-auto md:static
              relative
            "
          >
            <div
              class="
                md:static
                absolute
                -top-16
                left-8
                md:flex md:flex-wrap md:items-center
              "
            >
              <img
                class="
                  h-60
                  lg:h-80
                  rounded-full
                  md:m-auto
                  border-4 border-white
                "
                src="/images/profile_pic.jpg"
                alt="profile picture"
              />
            </div>
            <div
              class="flex flex-wrap items-center col-span-2 p-4 md:mt-0 mt-44"
            >
              <div>
                <h1
                  class="text-2xl md:text-3xl lg:text-4x text-coral font-semibold"
                >
                  Hi, I'm Mallory.
                </h1>
                <div class="flex items-center mb-5">
                  <h2 class="text-base md:text-lg lg:text-xl font-semibold">
                    Software Developer & Certified Scrum Master
                  </h2>
                  <img
                    class="h-16 md:h-12"
                    src="/images/icons/csm.png"
                    alt="csm badge"
                  />
                </div>
              </div>

              <p>
                My experience and educational background has taught me my greatest strength, <strong>how to learn.</strong> I continously inspire to write <span class="underline decoration-dotted">dryer code</span>, discover mind altering new solutions to problems &#129327; and advance alongisde the technical industry. I am excited to continue my journey with growing company's that value team work, mentorship and agile software development. Check out my <router-link class="text-coral" :to="{ name: 'resume' }">resume</router-link> to learn more about me.
              </p>
              <div class="flex items-center mb-5 mt-10">
                <img
                  class="h-8 mr-3"
                  src="/images/icons/brain.svg"
                  alt="brain icon"
                />
                <h2
                  class="
                    text-sm
                    xl:text-base
                    font-semibold
                    md:flex md:flex-wrap md:items-center
                    text-coral
                  "
                >
                  CURRENT FOCUS: LARAVEL | VUE.JS | MYSQL
                </h2>
              </div>
            </div>
            <div
              class="col-span-3 flex justify-end"
            >
              <span class="font-bold text-white py-3 px-6 rounded button-green bg-green-500"
                ><router-link :to="{ name: 'resume' }"
                  >My Resume &rarr;</router-link
                ></span
              >
            </div>
          </div>
        </div>
      </section>

      <section class="mt-20 snap-mandatory">
        <div id="toolbox" class="xl:max-w-6xl m-auto p-8">
          <div class="mb-10">
            <h2>&#9473;&#9473; Check Out My</h2>
            <h1 class="text-3xl font-semibold">TOOLBOX</h1>
          </div>
          <blockquote
            class="text-lg font-semibold italic mb-20 hidden lg:block"
          >
            My mental dedication and obsessive attention to detail enables me to
            find&nbsp;
            <span class="relative">
              <span
                class="block absolute -inset-1 -skew-y-2 bg-coral"
                aria-hidden="true"
              ></span>
              <span class="relative text-white">creative solutions</span>
            </span>
            to complex problems.
          </blockquote>
          <blockquote class="text-base font-semibold italic mb-20 lg:hidden">
            My mental dedication and obsessive attention to detail enables me to
            find
            <span class="text-white bg-red-600 p-1">creative solutions</span>
            to complex problems.
          </blockquote>
          <div
            class="grid grid-cols-3 gap-4 md:grid-cols-6 md:gap-10"
          >
            <div
              class="
                lg:max-h-80
                max-w-lg
                py-1
                px-2
                sm:p-3
                rounded-lg
                shadow-xl
                xl:hover:scale-105
              "
              v-for="image in images"
              :key="image"
            >
              <img
                class="h-12 lg:h-16 min-h-fit m-auto"
                :src="image.url"
                :alt="image.name"
              />
              <span
                ><p class="text-center text-xs xl:text-base text-bold mt-2">
                  {{ image.name }}
                </p></span
              >
            </div>
          </div>
        </div>
      </section>

      <section class="mt-10">
        <div id="projects" class="xl:max-w-6xl m-auto p-8">
          <div class="mb-10">
            <h2>&#9473;&#9473; Check Out My</h2>
            <h1 class="text-3xl font-semibold">PROJECTS</h1>
          </div>
          <blockquote
            class="text-lg font-semibold italic mb-10 hidden lg:block"
          >
            I believe we are not defined by what we have done, but what we
            <span class="relative">
              <span
                class="block absolute -inset-1 -skew-y-2 bg-coral"
                aria-hidden="true"
              ></span>
              <span class="relative text-white">dream of accomplishing.</span>
            </span>
          </blockquote>
          <blockquote class="text-base font-semibold italic mb-10 lg:hidden">
            I believe we are not defined by what we have done, but what we
            <span class="text-white bg-coral p-1">dream of accomplishing.</span>
          </blockquote>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-20 gap-x-36">
            <div
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-anchor-placement="center-bottom"
              class="h-full"
              v-for="project in projects"
              :key="project"
            >
              <img class="" :src="project.image" alt="" />
              <!-- <span><p class="text-center text-xs xl:text-lg text-bold mt-2">{{ project.name }}</p></span> -->
              <div>
                <p class="text-sm text-justify xl:text-base text-bold mt-2">
                  {{ project.description }}
                </p>
              </div>
              <div class="flex justify-center flex-row m-auto">
                <div><img class="h-8 m-3" :src="project.skill1" alt="" /></div>
                <div><img class="h-8 m-3" :src="project.skill2" alt="" /></div>
                <div><img class="h-8 m-3" :src="project.skill3" alt="" /></div>
              </div>
              <div class="flex justify-center">
                <a
                  target="_blank"
                  class="font-bold text-white py-3 px-10 rounded button-green bg-green-500"
                  :href="project.url"
                  >View &rarr;</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
import VueScrollSnap from "vue-scroll-snap";
    export default {
        components: {
            VueScrollSnap,
        },
        data() {

            return {

            isDefaultImage: true,
            isOpen: false,

            images : [
                {
                    url : './images/skillsIcons/html.svg',
                    name : 'HTML5'
                },
                {
                    url : '/images/skillsIcons/css.svg',
                    name : 'CSS',
                },
                {
                    url : '/images/skillsIcons/javascript.svg',
                    name : 'JavaScript',
                },
                {
                    url : '/images/skillsIcons/jquery.svg',
                    name : 'jQuery',
                },
                {
                    url : '/images/skillsIcons/vue.svg',
                    name : 'VueJS',
                },
                {
                    url : '/images/skillsIcons/tailwindcss.svg',
                    name : 'tailwindcss',
                },
                {
                    url : '/images/skillsIcons/mysql.svg',
                    name : 'mySQL',
                },
                {
                    url : '/images/skillsIcons/php.svg',
                    name : 'PHP',
                },
                {
                    url : '/images/skillsIcons/laravel.svg',
                    name : 'Laravel',
                },
                {
                    url : '/images/skillsIcons/git.svg',
                    name : 'Git',
                },
                {
                    url : '/images/skillsIcons/github.svg',
                    name : 'Github',
                },
                {
                    url : '/images/skillsIcons/npm.svg',
                    name : 'npm',
                },
                {
                    url : '/images/skillsIcons/vscode.png',
                    name : 'VS Code',
                },
                {
                    url : '/images/skillsIcons/android.png',
                    name : 'Android Studio',
                },
                {
                    url : '/images/skillsIcons/adobe.png',
                    name : 'Adobe',
                },
                {
                    url : '/images/skillsIcons/wordpress.svg',
                    name : 'WordPress',
                },
                {
                    url : '/images/skillsIcons/wix.svg',
                    name : 'WIX',
                },
                {
                    url : '/images/skillsIcons/shopify.svg',
                    name : 'Shopify',
                },
            ],

            courses : [
                {
                    class : 'Certified ScrumMaster',
                    place : 'Scrum Alliance',
                    year : '2021'
                },
                 {
                    class : 'Professional ScrumMaster',
                    place : 'Scrum.org',
                    year : '2021'
                },
                {
                    class : 'Certified Web Developer',
                    place : 'SAIT',
                    year : '2019'
                },
                {
                    class : 'Bachelor of Science',
                    place : 'University of Calagry',
                    year : '2013'
                },

            ],

            projects : [
                {
                    image : '/images/projects/flappy-bird.png',
                    name : 'Flappy Bird',
                    skill1 : 'images/skillsIcons/javascript.svg',
                    skill2 : 'images/skillsIcons/css.svg',
                    skill3 : 'images/skillsIcons/html.svg',
                    description: 'Try my recreation of original Flappy Bird game, created using only JavaScript, CSS and HTML.',
                    url: 'https://nintendoflappybird.netlify.app/'
                },
                {
                    image : '/images/projects/advice.png',
                    name : 'Advice API',
                    skill1 : 'images/skillsIcons/javascript.svg',
                    skill2 : 'images/skillsIcons/css.svg',
                    skill3 : 'images/skillsIcons/html.svg',
                    description: 'Used a random advice RESTful API to fetch advice and display it on the page when a ‘Get Advice’ button is clicked.',
                    url: 'https://mzassignment3.netlify.app/'
                },
                {
                    image : '/images/projects/dubtub.png',
                    name : 'DubTub',
                    skill1 : 'images/skillsIcons/shopify.svg',
                    skill2 : 'images/skillsIcons/wix.svg',
                    skill3 : 'images/skillsIcons/html.svg',
                    description: 'Leverage proficiency in creative web design utilizing content management systems (WIX/Shopify) to create e-commerce website for client.',
                    url: 'https://dubtub.com'
                },
                {
                    image : '/images/projects/holyshiitake.png',
                    name : 'Holy Shiitake',
                    skill1 : 'images/skillsIcons/shopify.svg',
                    skill2 : 'images/skillsIcons/adobe.png',
                    skill3 : 'images/skillsIcons/php.svg',
                    description: 'Utilized Shopify to create a print-on-demand e-commerce dropshipping website. Designed logo and created all site content.',
                    url: 'https://holyshiitake.ca'
                },


            ]

            };
        },
        created() {
            window.addEventListener("scroll", this.handleScroll);
        },
        destroyed() {
            window.removeEventListener("scroll", this.handleScroll);
        },
        methods: {
            handleScroll(event) {
            // Any code to be executed when the window is scrolled
            console.log(window.scrollY);
            if (window.scrollY > 3) {
                return (this.isDefaultImage = false);
            }
            if (window.scrollY <= 3) {
                if (!this.defaultImage) {
                return (this.isDefaultImage = true);
                }
            }

            },
        },
    }
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
