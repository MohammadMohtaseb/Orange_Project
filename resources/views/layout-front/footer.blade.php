<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><b>Orange</b> Academy for Programming</title>
    @section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/academy.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
@endsection
</head>
<body>
    
    <!-- Footer -->
    <footer>
        <div class="foot">
            <div class="footer-content">
                <div class="footer-sectio">
                    <img src="{{ asset('assets/images/orange-logo.svg') }}" alt="Orange Logo" class="footer-logo">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the..</p>
                </div>
                <div class="footer-section">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Monitor Progress</a></li>
                        <li><a href="#">Compare Success</a></li>
                        <li><a href="#">My Topics</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>About SBA</h3>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Our Success</a></li>
                        <li><a href="#">Meet The Experts</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-secti">
                    <h3>Newsletter</h3>
                    <p>Join Our Mailing List To Stay Up To Date With World</p>
                    <!--                     <div class="newsletter">
                        <div class="email-input">
                            <input type="email" placeholder="Email address">
                            <button>Subscribe</button>
                        </div>
                    </div> -->
                </div>


            </div>
            <div class="newsletter">
                <div class="email-input">
                    <input type="email" placeholder="Email address">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="social-links">
                <a href="#"><svg class="facebook" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.6834 29.9999V16.3154H16.9904L17.7849 10.9824H11.6834V7.57736C11.6834 6.03335 12.1789 4.98102 14.7372 4.98102L18 4.97972V0.209915C17.4354 0.145158 15.4988 0 13.2455 0C8.54131 0 5.32068 2.48522 5.32068 7.04946V10.9825H0V16.3156H5.32051V30L11.6834 29.9999Z"
                            fill="white" />
                    </svg>
                </a>
                <a href="#"><svg class="twiter" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.2788 5.49114C24.2788 5.73913 24.2788 5.98712 24.2788 6.19968C24.2788 13.533 18.695 22 8.51702 22C5.37173 22 2.47382 21.0789 0 19.5201C0.424084 19.5556 0.883508 19.591 1.30759 19.591C3.88743 19.591 6.29058 18.7053 8.19895 17.2174C5.76047 17.182 3.71073 15.5523 3.03927 13.3559C3.39267 13.4267 3.71073 13.4622 4.09948 13.4622C4.59424 13.4622 5.089 13.3913 5.54843 13.2496C3.00393 12.7536 1.09555 10.5217 1.09555 7.82931C1.09555 7.79388 1.09555 7.79388 1.09555 7.75845C1.8377 8.18357 2.68586 8.43156 3.60471 8.46699C2.12042 7.47504 1.13089 5.77456 1.13089 3.82609C1.13089 2.79871 1.41361 1.84219 1.87304 1.02738C4.59424 4.39291 8.69372 6.58937 13.288 6.83736C13.1819 6.44767 13.1466 5.98712 13.1466 5.562C13.1466 2.47987 15.6204 0 18.695 0C20.2853 0 21.7343 0.673108 22.7238 1.73591C23.9961 1.48792 25.1623 1.02738 26.2579 0.389694C25.8338 1.70048 24.9503 2.76328 23.8194 3.47182C24.9503 3.33011 26.0105 3.0467 27 2.58615C26.2932 3.71981 25.3743 4.71176 24.2788 5.49114Z"
                            fill="white" />
                    </svg>
                    </i></a>
                <a href="#"><svg class="linkedin" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.2959 27.7602C20.0093 27.7193 18.7532 27.7193 17.4666 27.7602C17.1909 27.7602 17.1296 27.6785 17.1296 27.3111C17.1296 24.2901 17.1296 21.2282 17.1296 18.2071C17.1296 17.5131 17.099 16.8191 16.9458 16.1659C16.4863 14.043 14.6482 13.2673 13.3309 14.6962C12.6263 15.431 12.3506 16.4517 12.3506 17.6764C12.3506 20.5342 12.3506 23.3919 12.3506 26.2496C12.3506 26.6171 12.3199 26.9845 12.3506 27.3927C12.3812 27.7193 12.2587 27.801 12.0442 27.7602C10.7269 27.7602 9.44029 27.7602 8.123 27.7602C7.87792 27.7602 7.81665 27.6785 7.81665 27.3519C7.84729 24.78 7.84729 22.208 7.84729 19.5952C7.84729 16.4108 7.84729 13.2265 7.81665 10.083C7.81665 9.71554 7.87792 9.63389 8.123 9.63389C9.44029 9.63389 10.7269 9.63389 12.0442 9.63389C12.2893 9.63389 12.3506 9.71554 12.3506 10.0421C12.3506 10.6953 12.3506 11.3485 12.3506 12.1242C12.4425 12.0017 12.4731 11.9609 12.5038 11.9201C13.6985 9.59306 15.3834 8.93986 17.3747 9.34811C19.6723 9.83801 21.1427 11.9609 21.5104 15.2269C21.6023 16.0026 21.6329 16.7783 21.6329 17.5539C21.6329 20.8199 21.6329 24.0451 21.6329 27.3111C21.6329 27.6377 21.5716 27.7602 21.2959 27.7602Z"
                            fill="white" />
                        <path
                            d="M5.36414 18.6999C5.36414 21.5576 5.36414 24.4154 5.36414 27.2731C5.36414 27.6405 5.30287 27.763 5.02716 27.763C3.7405 27.7222 2.45384 27.763 1.16719 27.763C0.922109 27.763 0.86084 27.6814 0.86084 27.3548C0.86084 21.5984 0.86084 15.8013 0.86084 10.045C0.86084 9.75919 0.922109 9.63672 1.16719 9.63672C2.48448 9.63672 3.80177 9.63672 5.11906 9.63672C5.39477 9.63672 5.42541 9.75919 5.42541 10.0858C5.36414 12.9435 5.36414 15.8013 5.36414 18.6999Z"
                            fill="white" />
                        <path
                            d="M5.57865 4.89914C5.2723 6.53214 4.01628 7.47111 2.57645 7.14451C1.04471 6.81791 0.18694 4.81749 0.738365 2.85789C1.10598 1.63314 1.99439 0.898292 3.12787 0.939117C4.84341 0.898292 5.9769 2.73542 5.57865 4.89914Z"
                            fill="white" />
                    </svg>
                </a>
                <a href="#"><svg class="instagram" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.1662 0.952229C16.2442 0.960316 15.265 0.968904 14.2254 0.970438V0.966594C2.03177 0.978126 0.875977 1.19338 0.875977 14.9254C0.875977 28.4998 1.29495 28.888 15.8663 28.888C16.6016 28.888 17.3242 28.8954 18.0307 28.9026C25.0024 28.9739 30.395 29.029 30.7492 21.8096C31.7742 0.824111 30.1086 0.83872 17.1662 0.952229ZM23.4326 5.84054C23.4326 4.71238 24.415 3.79756 25.6266 3.79756C26.8381 3.79756 27.8205 4.71238 27.8205 5.84054C27.8205 6.96869 26.8381 7.88352 25.6266 7.88352C24.415 7.88352 23.4326 6.96869 23.4326 5.84054ZM6.47334 14.9331C6.47334 10.1033 10.6776 6.18648 15.8642 6.18648C21.0508 6.18648 25.253 10.1033 25.253 14.9331C25.253 19.7628 21.0508 23.6777 15.8642 23.6777C10.6776 23.6777 6.47334 19.7628 6.47334 14.9331ZM15.8642 9.25576C23.9238 9.25576 23.9342 20.6104 15.8642 20.6104C7.80664 20.6104 7.79425 9.25576 15.8642 9.25576Z"
                            fill="white" />
                    </svg>
                </a>
            </div>


        </div>

        <div class="footer-bottom">
            <p>&copy; 2022 Single Best Answer | All Rights Reserved.</p>

        </div>
    </footer>
    <script src="{{ asset('assets/js/menu.js') }}"></script>
            {{-- @section('js') --}}
            <script src="{{ asset('assets/js/script.js') }}"></script>
           {{--  @endsection --}}
        </body>
</html>

            
