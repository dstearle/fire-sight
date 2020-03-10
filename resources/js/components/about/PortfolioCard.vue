<template>
    
    <div>

        <!-- Links To Portfolio & Github -->
        <div class="card leftRound bg-success text-white">

            <div class="card-body">

                <div class="row">

                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-4 align-self-center">

                        <!-- Portfolio Image -->
                        <img 
                            src="./../../../../storage/app/public/dstearle.jpg" 
                            class="portfolio-avatar" 
                            alt="Portfolio Picture"
                        >

                    </div>

                    <!-- Content Column 1 -->
                    <div class="col-md-6 col-lg-8">

                        <h3 class="d-none d-lg-block">More From The Developer</h3>

                        <h5 class="d-block d-lg-none mt-3">More From The Developer</h5>

                        <hr>

                        <p class="d-none d-lg-block">
                            Hi I'm Dallas, the developer of "Fire Sight"!
                            Interested in learning more about Fire Sight or seeing other projects I have worked on? 
                            This project along with many others can be found on my personal portfolio and github profile!
                        </p>

                        <!-- Card Footer -->
                        <div class="row" style="padding:0px 20px 0px 20px">

                            <!-- My Portfolio -->
                            <strong class="my-3 col-md-12 col-lg-4">

                                <i class="fas fa-globe"></i>

                                <a class="text-white pl-2" href="http://dstearle.com/">my portfolio</a>

                            </strong>

                            <!-- Shrimp King Repo -->
                            <strong class="my-3 col-md-12 col-lg-4">

                                <i class="fas fa-crown"></i>

                                <a class="text-white pl-2" href="https://github.com/dstearle/fire-sight">project repo</a>

                            </strong>

                            <!-- Github Repo -->
                            <strong class="mt-3 col-md-12 col-lg-4">

                                <i class="fab fa-github-alt"></i>

                                <a class="text-white pl-2" href="https://github.com/dstearle">github profile</a>

                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</template>

<style scoped>
    .bg-success {background-color: #F76707 !important}
    .leftRound { border-radius: 150px 10px 150px 10px; }
    .portfolio-avatar {
        height: 250px;
        width: 250px;
        border-radius: 9999px;
    }
</style>