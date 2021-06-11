<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports Shop Payment page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337b2ed79d.js" crossorigin="anonymous"></script>
</head>

<body>
<!--Header Menu-->
<div class="topnav" id="myTopnav">
    <a href="test.html" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Catalog
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content mega-menu animate">
            <ul>
                <li class="title">By Sex</li>
                <li class="animate"><a href="">Male</a></li>
                <li class="animate"><a href="">Female</a></li>
                <li class="animate"><a href="">Unisex</a></li>
            </ul>
            <ul>
                <li class="title">By Sport</li>
                <li class="animate"><a href="">Football</a></li>
                <li class="animate"><a href="page.php?select=бокс&val=category">Box</a></li>
                <li class="animate"><a href="page.php?select=волейбол&val=category">Volleyball</a></li>
                <li class="animate"><a href="page.php?select=баскетбол&val=category">Basketball</a></li>
                <li class="animate"><a href="page.php?select=фитнес&val=category">Fitness</a></li>
                <li class="animate"><a href="page.php?select=воркаут&val=category">Workout</a></li>
                <li class="animate"><a href="page.php?select=теннис"&val=category>Tennis</a></li>
                <li class="animate"><a href="page.php?select=плвание&val=category">Swimming</a></li>
                <li class="animate"><a href="page.php?select=гольф&val=category">Golf</a></li>
                <li class="animate"><a href="page.php?select=велоспорт&val=category">Cycling</a></li>
                <li class="animate"><a href="page.php?select=scating&val=category">Skating</a></li>
                <li class="animate"><a href="page.php?select=зимний спорт&val=category">Winter sport</a></li>
            </ul>
            <ul>
                <li class="title">By Brands</li>
                <li class="animate"><a href="page.php?brand=Adidas&val=brand">Adidas</a></li>
                <li class="animate"><a href="page.php?brand=Nike&val=brand">Nike</a></li>
                <li class="animate"><a href="page.php?brand=Underarmour&val=brand">Underarmour</a></li>
                <li class="animate"><a href="page.php?brand=Asics&val=brand">Asics</a></li>
                <li class="animate"><a href="page.php?brand=Puma&val=brand">Puma</a></li>
                <li class="animate"><a href="page.php?brand=Demix&val=brand">Demix</a></li>
                <li class="animate"><a href="page.php?brand=Reebook&val=brand">Reebok</a></li>
                <li class="animate"><a href="page.php?brand=New Balance&val=brand">New Balance</a></li>
                <li class="animate"><a href="page.php?brand=Everlast&val=brand">Everlast</a></li>
                <li class="animate"><a href="page.php?brand=Everlast&val=brand">Others</a></li>
            </ul>
        </div>
    </div>


    <a href="basket.php">My basket</a>

    <a href="account.php">My account</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    <div id="logoHead"></div>
</div>



<!-- PAYMENT -->
<div class="container-fluid">
    <div class="creditCardForm">
        <div class="heading">
            <h1>Confirm Purchase</h1>
        </div>
        <div class="payment">
            <form>
                <div class="form-group owner">
                    <label for="owner">Owner</label>
                    <input type="text" class="form-control" placeholder="Jotaro Kujo" id="owner">
                </div>
                <div class="form-group CVV">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" placeholder="XXX" id="cvv">
                </div>
                <div class="form-group" id="card-number-field">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" placeholder="0000111122223333" id="cardNumber">
                </div>
                <div class="form-group" id="expiration-date">
                    <label>Expiration Date</label>
                    <select>
                        <option value="01">January</option>
                        <option value="02">February </option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select>
                        <option value="16"> 2021</option>
                        <option value="17"> 2022</option>
                        <option value="18"> 2023</option>
                        <option value="19"> 2024</option>
                        <option value="20"> 2025</option>
                        <option value="21"> 2026</option>
                    </select>
                </div>
                <div class="form-group" id="credit_cards">
                    <img src="assets/images/visa.jpg" id="visa">
                    <img src="assets/images/mastercard.jpg" id="mastercard">
                    <img src="assets/images/amex.jpg" id="amex">
                </div>
                <div class="form-group" id="pay-now">
                    <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer_inner">
                <div class="footer_col1">
                    <div class="header_logo">
                        <img src="assets/images/logo_White.png">
                    </div>
                    <div class="footer_header">
                        We are in social media
                        <a href=# target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href=# target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href=# target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href=# target="_blank">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </div>
                <div class="footer_col2">
                    <div class="footer_content">About us<br>
                        Authors <br> How to use website <br> FAQ </div>
                </div>
            </div>
            <div class="copyright">
                © 2021 Sports Shop AITU project
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        /*
	class manipulation functions
*/
        Util.hasClass = function(el, className) {
            if (el.classList) return el.classList.contains(className);
            else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
        };

        Util.addClass = function(el, className) {
            var classList = className.split(' ');
            if (el.classList) el.classList.add(classList[0]);
            else if (!Util.hasClass(el, classList[0])) el.className += " " + classList[0];
            if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
        };

        Util.removeClass = function(el, className) {
            var classList = className.split(' ');
            if (el.classList) el.classList.remove(classList[0]);
            else if(Util.hasClass(el, classList[0])) {
                var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
                el.className=el.className.replace(reg, ' ');
            }
            if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
        };

        Util.toggleClass = function(el, className, bool) {
            if(bool) Util.addClass(el, className);
            else Util.removeClass(el, className);
        };

        Util.setAttributes = function(el, attrs) {
            for(var key in attrs) {
                el.setAttribute(key, attrs[key]);
            }
        };

        /*
          DOM manipulation
        */
        Util.getChildrenByClassName = function(el, className) {
            var children = el.children,
                childrenByClass = [];
            for (var i = 0; i < el.children.length; i++) {
                if (Util.hasClass(el.children[i], className)) childrenByClass.push(el.children[i]);
            }
            return childrenByClass;
        };

        /*
            Animate height of an element
        */
        Util.setHeight = function(start, to, element, duration, cb) {
            var change = to - start,
                currentTime = null;

            var animateHeight = function(timestamp){
                if (!currentTime) currentTime = timestamp;
                var progress = timestamp - currentTime;
                var val = parseInt((progress/duration)*change + start);
                // console.log(val);
                element.setAttribute("style", "height:"+val+"px;");
                if(progress < duration) {
                    window.requestAnimationFrame(animateHeight);
                } else {
                    cb();
                }
            };

            //set the height of the element before starting animation -> fix bug on Safari
            element.setAttribute("style", "height:"+start+"px;");
            window.requestAnimationFrame(animateHeight);
        };

        /*
            Smooth Scroll
        */

        Util.scrollTo = function(final, duration, cb) {
            var start = window.scrollY || document.documentElement.scrollTop,
                currentTime = null;

            var animateScroll = function(timestamp){
                if (!currentTime) currentTime = timestamp;
                var progress = timestamp - currentTime;
                if(progress > duration) progress = duration;
                var val = Math.easeInOutQuad(progress, start, final-start, duration);
                window.scrollTo(0, val);
                if(progress < duration) {
                    window.requestAnimationFrame(animateScroll);
                } else {
                    cb && cb();
                }
            };

            window.requestAnimationFrame(animateScroll);
        };

        /*
          Focus utility classes
        */

        //Move focus to an element
        Util.moveFocus = function (element) {
            if( !element ) element = document.getElementsByTagName("body")[0];
            element.focus();
            if (document.activeElement !== element) {
                element.setAttribute('tabindex','-1');
                element.focus();
            }
        };

        /*
          Misc
        */

        Util.getIndexInArray = function(array, el) {
            return Array.prototype.indexOf.call(array, el);
        };

        Util.cssSupports = function(property, value) {
            if('CSS' in window) {
                return CSS.supports(property, value);
            } else {
                var jsProperty = property.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase();});
                return jsProperty in document.body.style;
            }
        };

        /*
            Polyfills
        */
        //Closest() method
        if (!Element.prototype.matches) {
            Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
        }

        if (!Element.prototype.closest) {
            Element.prototype.closest = function(s) {
                var el = this;
                if (!document.documentElement.contains(el)) return null;
                do {
                    if (el.matches(s)) return el;
                    el = el.parentElement || el.parentNode;
                } while (el !== null && el.nodeType === 1);
                return null;
            };
        }

        //Custom Event() constructor
        if ( typeof window.CustomEvent !== "function" ) {

            function CustomEvent ( event, params ) {
                params = params || { bubbles: false, cancelable: false, detail: undefined };
                var evt = document.createEvent( 'CustomEvent' );
                evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
                return evt;
            }

            CustomEvent.prototype = window.Event.prototype;

            window.CustomEvent = CustomEvent;
        }

        /*
            Animation curves
        */
        Math.easeInOutQuad = function (t, b, c, d) {
            t /= d/2;
            if (t < 1) return c/2*t*t + b;
            t--;
            return -c/2 * (t*(t-2) - 1) + b;
        };
    </script>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
<script src="assets/js/script.js"></script>
</body>

</html>
