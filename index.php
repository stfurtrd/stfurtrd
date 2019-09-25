<?php 
    require './includes/header.php';
?>

<main>
    <!-- SLIDER -->
    <div class="carouselContainer">
        <div class="carouselSlide">
            <img src="./img/slides/slide5.jpg" alt="" id="lastClone" />
            <img src="./img/slides/slide1.jpg" alt="" />
            <img src="./img/slides/slide2.jpg" alt="" />
            <img src="./img/slides/slide3.jpg" alt="" />
            <img src="./img/slides/slide4.jpg" alt="" />
            <img src="./img/slides/slide5.jpg" alt="" />
            <img src="./img/slides/slide1.jpg" alt="" id="firstClone" />
        </div>
        <button id="prevBtn">◄</button>
        <button id="nextBtn">►</button>
    </div>
    <!-- END OF SLIDER -->
    <div class="topCategories">

        <div class="categoryContainer">
            <section class="categoryHeading">
                <a href="#" target="_self">LIVING ROOM</a>
            </section>

            <section class="categoryDescription">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum consequuntur odio illum?
                Voluptas, eveniet quos nemo nesciunt odit alias voluptate atque. Mollitia iusto nostrum quo magnam ex id
                similique, omnis, molestias voluptatibus nemo magni, quia molestiae nihil eaque asperiores neque. Magnam
                fuga autem ex sed, quis neque adipisci aspernatur?
            </section>

            <section class="categoryThumbnail">
                <a href="#" target="_self"> <img src="./img/thumbnails/livingroom.jpg" alt="livingroom"> </a>
            </section>
        </div>

        <div class="categoryContainer">
            <section class="categoryHeading">
                <a href="#" target="_self">DINING ROOM</a>
            </section>

            <section class="categoryDescription">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum consequuntur odio illum?
                Voluptas, eveniet quos nemo nesciunt odit alias voluptate atque. Mollitia iusto nostrum quo magnam ex id
                similique, omnis, molestias voluptatibus nemo magni, quia molestiae nihil eaque asperiores neque. Magnam
                fuga autem ex sed, quis neque adipisci aspernatur?
            </section>

            <section class="categoryThumbnail">
                <a href="#" target="_self"> <img src="./img/thumbnails/diningroom.jpg" alt="livingroom"> </a>
            </section>
        </div>

        <div class="categoryContainer">
            <section class="categoryHeading">
                <a href="#" target="_self">BEDROOM</a>
            </section>

            <section class="categoryDescription">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum consequuntur odio illum?
                Voluptas, eveniet quos nemo nesciunt odit alias voluptate atque. Mollitia iusto nostrum quo magnam ex id
                similique, omnis, molestias voluptatibus nemo magni, quia molestiae nihil eaque asperiores neque. Magnam
                fuga autem ex sed, quis neque adipisci aspernatur?
            </section>

            <section class="categoryThumbnail">
                <a href="#" target="_self"> <img src="./img/thumbnails/bedroom.jpg" alt="livingroom"> </a>
            </section>
        </div>

        <div class="categoryContainer">
            <section class="categoryHeading">
                <a href="#" target="_self">OFFICE</a>
            </section>

            <section class="categoryDescription">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum consequuntur odio illum?
                Voluptas, eveniet quos nemo nesciunt odit alias voluptate atque. Mollitia iusto nostrum quo magnam ex id
                similique, omnis, molestias voluptatibus nemo magni, quia molestiae nihil eaque asperiores neque. Magnam
                fuga autem ex sed, quis neque adipisci aspernatur?
            </section>

            <section class="categoryThumbnail">
                <a href="#" target="_self"> <img src="./img/thumbnails/office.jpg" alt="livingroom"> </a>
            </section>
        </div>
        <button type="submit" class="viewAllProducts" title="View all products">VIEW ALL PRODUCTS</button>
    </div>

    <div class="subFooterContainer">
        <div class="subFooterWrapper">


            <div class="subFooterHolder">
                <div class="subFooterHeading">
                    <p class="heading"> DROP US A NOTE! </p>
                </div>
                <div class="subFooterBody">
                    <form action="">
                        <input type="text" name="name" placeholder="Name" class="formField" required />
                        <input type="email" name="email" placeholder="Email" class="formField" required />
                        <textarea name="noteMessage" placeholder="Message" class="noteMessage" required></textarea>
                        <button type="submit" class="noteBtn">SUBMIT</button>
                    </form>
                </div>
            </div>

            <!-- MAP LOCATION -->

            <div class="subFooterHolder">
                <div class="subFooterHeading">
                    <p class="heading"> STORE LOCATION </p>
                </div>
                <div class="subFooterBody">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=cebu%2C%20naga%2C%20professional%20academy&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                        <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }
                        </style>
                    </div>
                </div>
            </div>

            <!-- END OF MAP -->
        </div>
    </div>
    <div class="developersContainer">

        <div class="developersWrapper">
            <div class="developersHeading">
                <p class="heading"> DEVELOPER </p>
            </div>
            <div class="developersBody">
                <div class="developersAvatar">
                    <img src="./img/avatar/kent.jpg" alt="DEVELOPER" class="avatar" />
                    <!-- HOVER LINKS -->
                    <div class="avatarFollow">
                        <a href="https://www.facebook.com/stfurtrd" target="_blank"> <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/vals_with_a_dollar_sign/" target="_blank"> <i
                                class="fab fa-instagram"></i> </a>
                        <a href="https://www.twitter.com/kent_sevillejo" target="_blank"> <i
                                class="fab fa-twitter-square"></i>
                        </a>
                        <a href="https://www.github.com/stfurtrd" target="_blank"> <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- END OF HOVER LINKS -->
                </div>
                <div class="avatarDescription">
                    <p class="avatarDesc">
                        <h3 class="h3">Kent Sevillejo</h3>
                        <span class="devInfo">A 2nd year Information Technology student in Professional Academy of the
                            Philippines, which he lives in a remote area without any cellular signals or any transmition
                            devices but despite of that disadvantages he managed to study enough about programming
                            things specifically Web Development. A 21 years old boy who has the dream to succeed. You
                            can help him achieve his dreams by contacting him and negotiate about your future
                            business.</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- END OF DEVELOPER -->

        <div class="developersWrapper">
            <div class="developersHeading">
                <p class="heading"> DESIGNER </p>
            </div>
            <div class="developersBody">
                <div class="developersAvatar">
                    <img src="./img/avatar/charly.jpg" alt="DEVELOPER" class="avatar" />
                    <!-- HOVER LINKS -->
                    <div class="avatarFollow">
                        <a href="https://www.facebook.com/kemotchimaru113" target="_blank"> <i
                                class="fab fa-facebook"></i>
                        </a>
                    </div>
                    <!-- END HOVER LINKS -->
                </div>
                <div class="avatarDescription">
                    <p class="avatarDesc">
                        <h3 class="h3">Charly Pacquiaban</h3>
                        <span class="devInfo">A 2nd year Information Technology student in Professional Academy of the
                            Philippines, which he lives in a remote area without any cellular signals or any transmition
                            devices but despite of that disadvantages he managed to study enough about programming
                            things specifically Web Development. A 21 years old boy who has the dream to succeed. You
                            can help him achieve his dreams by contacting him and negotiate about your future
                            business.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="footerLogo">
        <img src="./img/logo2.png" alt="logo" class="footerLogoImg" />
    </div>
    <div class="footerInfo">
        Copyright &copy; 2019. Wood-Works Furniture. All Rights Reserved.
    </div>
</footer>


<script src="./js/slider.js"></script>
</body>

</html>