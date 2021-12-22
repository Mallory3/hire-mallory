<div>
    <nav style="z-index:100" class="bg-black shadow-2xl w-full fixed inset-x-0 bottom-0">
        <div class="px-2 py-2 sm:px-6 sm:py-6">
            <div class="md:flex justify-between items-center">
                <!-- left section -->
                <div class="flex justify-between items-center">
                    <a target="_blank" href="https://www.linkedin.com/in/mallory-zlomanchuk/"><img class="h-6 lg:h-12 m-auto" src="/images/icons/linkedin.svg" alt=""></a>
                    <a target="_blank" href="https://github.com/Mallory3" class="sm:ml-3 hidden sm:block"><img class="h-6 lg:h-12 m-auto" src="/images/icons/github.svg" alt=""></a>
                    <a href="sms:+14038184164" class="sm:ml-3"><img class="h-6 lg:h-12 m-auto" src="/images/icons/phone.svg" alt=""></a>
                    <a href="mailto:mzlomanchuk@hotmail.com?Subject=You%20Are%20Hired" class="sm:ml-3"><img class="h-6 lg:h-12 m-auto" src="/images/icons/paper-plane.svg" alt=""></a>
                    <div class="md:hidden">
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none" @click="isOpen = !isOpen">
                            <svg viewBox="0 0 24 24" class="h-8 w-8 fill-white">
                                <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>  
                        </button>
                    </div>
                </div>
                <!-- right section -->
                <div class="flex-col mt-3 md:flex-row md:mt-0 md:flex" :class="isOpen? 'flex' : 'hidden'">
                    <hr class="md:hidden text-white color-white mt-2 mb-2">
                    <!-- Add router links (available because we pulled in VueRouter in app.js and added router: new VueRouter(routes) Note: Cannot to standard <a></a> tag as we do not want to reload the page -->
                    <span class="text-white text-sm hover:font-medium mt-6 md:mt-0 md:mx-4"><router-link to="/" exact @click.native="$scrollToTop"><i class="fas fa-user"></i> Home</router-link></span>
                    <span class="text-white text-sm hover:font-medium mt-6 md:mt-0 md:mx-4"><router-link :to="{ name: 'resume' }" @click.native="$scrollToTop"><i class="fa fa-file"></i> Resume</router-link></span>
                    <!-- <span class="text-white text-sm hover:font-medium md:mx-4"><a href="#" v-scroll-to="'#about'">About</a></span>
                    <span class="text-white text-sm hover:font-medium md:mx-4"><a href="#" v-scroll-to="'#toolbox'">Toolbox</a></span>
                    <span class="text-white text-sm hover:font-medium md:mx-4"><a href="#" v-scroll-to="'#projects'">Projects</a></span> -->
                    <span class="text-white text-sm hover:font-medium mt-6 md:mt-0 md:mx-4 hidden sm:block"><router-link :to="{ name: 'contact' }" @click.native="$scrollToTop"><i class="fa fa-paper-plane"></i> Connect</router-link></span>

                </div>
            </div>
        </div>
    </nav>
</div>