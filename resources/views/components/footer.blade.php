<footer>

    {{-- shop --}}
    <div id="container-s">
        <ul>
            @foreach( $items as $item )
                <li>
                    <img src="{{ Vite::asset($item['img']) }}" alt="" class="shop-img">
                    <div>{{ $item['text'] }}</div>
                </li>
            @endforeach
            
        </ul>
    </div>

    {{-- footer --}}
    <div id="container-f">
        <div id="box-ul">
            <div id="box-ul-left">
                <ul>DC COMICS
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Video</li>
                    <li>News</li>
                </ul>
                <ul>SHOP
                    <li>Shop DC</li>
                    <li>Shop DC Collectables</li>
                </ul>
            </div>

            <div id="box-ul-middle">
                <ul>DC
                    <li>Terms of Use</li>
                    <li>Privacy policy (New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscription</li>
                    <li>Talent workshop</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>

            <div id="box-ul-right">
                <ul>SITES
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
        </div>


        <div id="img-container"></div>

    </div>

    <div id="social-section">

        <div>
            <a id="button">SIGN-UP NOW!</a>
        </div>

        <div>
            <div id="socials"> 
                <h3>FOLLOW US</h3>
                <img src="../../public/img/footer-facebook.png" alt="">
                <img src="../assets/img/footer-twitter.png" alt="">
                <img src="../assets/img/footer-youtube.png" alt="">
                <img src="../assets/img/footer-pinterest.png" alt="">
                <img src="../assets/img/footer-periscope.png" alt="">
            </div>
        </div>
    </div>



</footer>


