<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><b>Orange</b> Academy for Programming</title>

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
@endsection
</head>
<body>
    <div class="nav-overlay"></div>
    <!-- Header -->


    @extends('layout.header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 ><span class="orange" style="color: #FF7900; ">Orange</span> Academy for Programming</h1>
            <p>The first academy of its kind in the Middle East that provides young people with free, world-class training in programming languages and the skills needed to enter the job market.</p>
            <button class="join-now">Join Now</button>
        </div>
    </section>

    <!-- Success Stats -->
    <section class="success-stats">
        <h2 style="">Our Success</h2>
        <div class="stats-container">
            <div class="stat-item">
                <h3>15K+</h3>
                <p>Number Of Students</p>
            </div>
            <div class="stat-item">
                <h3>75%</h3>
                <p>Percentage Of Success</p>
            </div>
            <div class="stat-item">
                <h3>35</h3>
                <p>Numbers Of Questions</p>
            </div>
            <div class="stat-item">
                <h3>25+</h3>
                <p>Number Of Experts</p>
            </div>
            <div class="stat-item">
                <h3>15+</h3>
                <p>Years Of Experience</p>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works" id="how-it-works">
        <h2>How It Works</h2>
        <div class="steps-container">
            <div class="step">
                <div class="circle-box">
                <svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0624 0.0257672C11.0106 0.0358969 10.7566 0.0782914 10.4978 0.120061C8.57622 0.430016 6.55433 1.73093 5.45647 3.36368C4.87539 4.22789 4.41971 5.32246 4.21759 6.33955C4.09055 6.9786 4.10454 8.58265 4.24274 9.22789C4.58337 10.8179 5.30629 12.144 6.42579 13.2319C6.9432 13.7347 7.41312 14.0987 7.91591 14.3863L8.25102 14.5779L7.61329 14.8177C3.56976 16.3385 0.816548 20.0107 0.462681 24.3549C0.378621 25.3862 0.379123 28.5292 0.463309 28.8315C0.498815 28.9589 0.601255 29.1206 0.69096 29.191C0.853434 29.3184 0.888062 29.3189 9.08722 29.3189H17.3204L17.5393 29.5847C18.5909 30.8612 19.954 31.6424 21.6125 31.9188C23.3622 32.2104 25.2833 31.7055 26.6848 30.5858C28.3408 29.2628 29.2868 27.0225 29.0689 24.9398C28.7759 22.137 26.9681 20.0208 24.2046 19.2458C23.7768 19.1258 23.5375 19.1038 22.5835 19.0968L21.4644 19.0887L21.1296 18.6305C19.8806 16.9214 18.0983 15.5769 16.0705 14.8143L15.4498 14.5808L15.8636 14.3395C16.4879 13.9756 17.3444 13.237 17.8257 12.6475C20.3791 9.52002 20.144 5.07241 17.2758 2.24392C15.7987 0.787181 13.8034 -0.0231929 11.7524 0.000505546C11.4247 0.00425728 11.1141 0.0156375 11.0624 0.0257672ZM12.9108 1.52621C15.0848 1.90407 16.8856 3.32598 17.716 5.3204C18.0714 6.17404 18.1787 6.75006 18.1739 7.77772C18.1701 8.58378 18.1461 8.80357 18.0035 9.34094C17.4094 11.5785 15.654 13.3277 13.4148 13.9134C12.8809 14.053 12.6521 14.0779 11.8779 14.0805C10.6814 14.0845 9.93836 13.9142 8.92732 13.4045C8.0743 12.9744 7.12838 12.148 6.61097 11.3808C6.21721 10.797 5.81604 9.91245 5.65576 9.27466C5.45603 8.47992 5.45483 7.0799 5.65332 6.29116C6.2364 3.97334 8.02293 2.17582 10.2959 1.62C10.5622 1.55491 10.8648 1.48994 10.9683 1.47569C11.4226 1.41309 12.4075 1.43873 12.9108 1.52621ZM14.0146 15.619C16.2974 16.0709 18.371 17.3016 19.7552 19.0262L20.157 19.5266L19.7311 19.75C18.2203 20.5424 17.0614 21.8742 16.5264 23.4325C16.075 24.7475 16.0707 26.2576 16.5145 27.5985C16.5973 27.8488 16.6107 27.9604 16.5601 27.9796C16.5208 27.9945 13.1858 27.9995 9.14908 27.9906L1.80952 27.9745L1.79076 26.5051C1.76304 24.3344 1.89546 23.2519 2.34556 21.9685C3.57453 18.4643 6.74051 15.9531 10.4978 15.5019C11.3085 15.4045 13.2597 15.4695 14.0146 15.619ZM23.8909 20.5993C25.7096 21.0922 27.118 22.5416 27.5944 24.4104C27.7442 24.998 27.7453 26.1287 27.5967 26.724C27.44 27.3517 26.9384 28.3423 26.5322 28.8261C25.5629 29.9807 24.1579 30.632 22.6363 30.632C21.7683 30.632 21.1622 30.4909 20.3779 30.1061C19.3548 29.6042 18.5586 28.8099 18.0533 27.7869C17.685 27.0414 17.579 26.6192 17.5407 25.7477C17.4892 24.5743 17.7332 23.6535 18.3419 22.724C19.0513 21.6409 20.2474 20.8199 21.4758 20.5729C21.6655 20.5348 21.8772 20.4905 21.9463 20.4746C22.2018 20.4157 23.5269 20.5006 23.8909 20.5993ZM22.3114 22.2884C21.9711 22.4609 21.9149 22.6761 21.9149 23.8062V24.8089L20.7805 24.8285L19.646 24.8481L19.4631 25.0523C19.1833 25.3647 19.223 25.8143 19.5541 26.0817C19.6695 26.1748 19.8412 26.1899 20.8014 26.1911L21.9149 26.1925V27.2304C21.9149 28.046 21.9361 28.3128 22.0138 28.4761C22.1109 28.68 22.4201 28.8812 22.6363 28.8812C22.8525 28.8812 23.1617 28.68 23.2588 28.4761C23.3365 28.3128 23.3577 28.046 23.3577 27.2304V26.1925H24.4618H25.5658L25.7791 25.9799C26.0662 25.6937 26.0774 25.3514 25.8095 25.0523L25.6266 24.8481L24.4962 24.8286L23.3657 24.809L23.346 23.7197L23.3263 22.6304L23.135 22.4399C22.8998 22.2056 22.5879 22.1483 22.3114 22.2884Z" fill="white"/>
                    </svg></div>                    
                <h3>Sign Up</h3>
                <p>Sign up and create your account to get started</p>
            </div>
            <div class="step">
                <div class="circle-box">
                <svg width="37" height="33" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75744 1.16178C1.3801 1.34943 0.99268 1.79379 0.883533 2.16416C0.83253 2.33718 0.808316 5.98208 0.810156 13.2056C0.812511 22.0333 0.830911 24.0359 0.911574 24.2489C1.06363 24.6503 1.36906 24.9794 1.76546 25.1686L2.12646 25.341H8.12715C13.4393 25.341 14.1278 25.353 14.1278 25.446C14.1278 25.5038 13.9416 26.2528 13.7138 27.1103L13.2999 28.6695L12.4075 28.6712C11.3446 28.6732 10.9256 28.7519 10.6413 29.0029C10.3054 29.2994 10.2271 29.5575 10.2271 30.3685C10.2271 31.1916 10.3042 31.4359 10.6644 31.7554L10.8992 31.9634L18.389 31.9817L25.8787 32L26.1236 31.843C26.6044 31.5347 26.6737 31.3763 26.7017 30.5221C26.731 29.6269 26.6567 29.3243 26.3348 29.0277C26.0354 28.7521 25.6136 28.6695 24.5044 28.6695H23.6277L23.5536 28.4095C23.3367 27.6478 22.8137 25.5671 22.8131 25.4635C22.8125 25.3506 23.182 25.3422 28.9147 25.3248L35.0171 25.3063L35.3351 25.0957C35.7044 24.8511 35.956 24.5263 36.0611 24.1584C36.1102 23.9871 36.1289 20.1834 36.1162 13.0162L36.0969 2.1342L35.8743 1.79504C35.752 1.60857 35.509 1.36136 35.3344 1.24576L35.0171 1.03557L18.5499 1.01775L2.08267 1L1.75744 1.16178ZM34.8036 2.29314L34.9561 2.47587V11.724V20.9722H18.4701H1.98412V11.724V2.47587L2.13669 2.29314L2.28919 2.11042H18.4701H34.6511L34.8036 2.29314ZM34.9561 22.9739C34.9561 23.7714 34.9399 23.8854 34.8036 24.0487L34.6511 24.2314H18.4701H2.28919L2.13669 24.0487C2.00031 23.8854 1.98412 23.7714 1.98412 22.9739V22.0817H18.4701H34.9561V22.9739ZM21.5316 25.4212C21.5606 25.4654 21.774 26.2143 22.0057 27.0855L22.4272 28.6695H18.4701H14.513L14.9345 27.0855C15.1663 26.2143 15.3797 25.4654 15.4087 25.4212C15.4839 25.3065 21.4564 25.3065 21.5316 25.4212ZM25.5356 30.3511V30.8885H18.4701H11.4047V30.3511V29.8137H18.4701H25.5356V30.3511Z" fill="white" stroke="white" stroke-width="0.2"/>
                    </svg>
                    </div>
                <h3>Get access</h3>
                <p>Access to question bank of over 2000 questions</p>
            </div>
            <div class="step">
                <div class="circle-box">
                <svg width="24" height="33" viewBox="0 0 24 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8974 0.0383195C6.59437 0.493442 3.01373 2.58676 1.23344 5.68809C0.876898 6.30918 0.864564 6.34996 0.865258 6.91136C0.866491 8.0221 1.31546 8.47193 3.24816 9.29893L4.45468 9.81516L5.12644 9.81374C6.19744 9.81148 6.6599 9.55279 7.48899 8.49232C8.32387 7.42437 9.1377 6.79676 10.2549 6.35906C11.9425 5.69802 14.0043 6.00796 15.2329 7.10734C16.6015 8.33203 16.6558 10.0644 15.376 11.6703C14.7499 12.4559 13.6801 13.3402 11.9654 14.4895C11.2022 15.001 10.3176 15.641 9.99963 15.9117C8.28308 17.3728 7.38053 19.2867 7.37906 21.4684C7.3786 22.1019 7.39579 22.1806 7.61434 22.5467C7.86418 22.9653 8.12498 23.1864 8.64163 23.4177C8.93757 23.5503 9.07811 23.5612 10.7294 23.5805C12.7239 23.6037 12.9423 23.5749 13.5134 23.2136C14.0077 22.9008 14.2747 22.4495 14.4315 21.6613C14.6543 20.5413 15.0951 19.8517 16.1668 18.9462C16.5696 18.6059 17.3674 18.0096 17.9398 17.6213C20.2593 16.0476 21.5928 14.7681 22.5208 13.2256C23.185 12.1215 23.5519 10.9538 23.6227 9.71837C23.7932 6.74346 22.2072 3.71124 19.5837 1.99651C18.1009 1.02729 16.5531 0.455047 14.5479 0.134726C13.7849 0.0128306 11.6671 -0.043116 10.8974 0.0383195ZM14.1262 1.16654C18.5848 1.77189 21.5749 4.31814 22.2506 8.08527C22.3889 8.85594 22.3549 10.0955 22.1751 10.8375C21.7912 12.4217 20.732 13.9708 19.0999 15.3348C18.7799 15.6022 17.8987 16.2528 17.1419 16.7803C14.9757 18.2901 14.2977 18.9232 13.706 19.9885C13.4299 20.4856 13.3182 20.8106 13.0837 21.7992C13.0175 22.0783 12.9398 22.2077 12.764 22.3315L12.5318 22.4951H10.8862H9.24053L9.00487 22.3291C8.68958 22.107 8.59106 21.7699 8.65119 21.1184C8.82263 19.2623 9.46232 17.9561 10.7705 16.7911C11.0461 16.5457 11.896 15.9218 12.6592 15.4048C15.6933 13.3493 16.9367 12.0711 17.4007 10.5308C17.6944 9.55569 17.5599 8.23382 17.0872 7.44895C16.1565 5.90361 14.2531 4.94504 12.1126 4.94368C9.95022 4.94226 7.88091 6.01557 6.42493 7.89388C5.85686 8.62673 5.66005 8.75237 5.08905 8.74689C4.77931 8.74398 4.53701 8.6619 3.60123 8.24311C2.64247 7.81399 2.45892 7.70662 2.31122 7.48844C2.04873 7.1005 2.07695 6.68919 2.40542 6.11546C3.93202 3.44893 7.05606 1.6025 10.8192 1.14254C11.567 1.0511 13.3728 1.0642 14.1262 1.16654ZM10.0382 25.7481C8.88022 25.9886 7.96201 26.6977 7.51728 27.6949C7.36295 28.0409 7.34691 28.1953 7.34691 29.3352C7.34691 30.4751 7.36295 30.6294 7.51728 30.9754C7.99816 32.0537 9.01219 32.7761 10.3053 32.9618C11.9925 33.2039 13.6859 32.2728 14.1938 30.8237C14.3678 30.3273 14.3678 28.343 14.1938 27.8466C13.6569 26.3148 11.807 25.3806 10.0382 25.7481ZM11.5513 26.8526C12.2418 27.0496 12.76 27.5493 12.9686 28.2195C13.1216 28.7114 13.1201 29.9636 12.9659 30.4593C12.5123 31.9172 10.5191 32.4109 9.29118 31.3694C8.743 30.9045 8.65782 30.6623 8.62652 29.479C8.59268 28.1998 8.6814 27.8866 9.2201 27.3851C9.84314 26.805 10.699 26.6095 11.5513 26.8526Z" fill="white"/>
                    </svg>
                    </div>
                <h3>Practice questions</h3>
                <p>Prepare for the MLA exam in multiple modes of revision and track your progress with your personalised dashboard</p>
            </div>
            <div class="step">
                <div class="circle-box">
                <svg width="29" height="33" viewBox="0 0 29 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8562 0.0478038C12.6185 0.248698 11.5651 0.916672 10.9645 1.88131L10.7421 2.23865L7.42445 2.26026L4.1067 2.28186L3.59912 2.46776C2.31195 2.93903 1.37422 3.93655 1.09866 5.12761C0.937155 5.82593 0.942036 29.4397 1.10384 30.1446C1.40756 31.4675 2.53675 32.5549 3.95968 32.8945C4.34539 32.9865 5.67453 32.9998 14.5059 32.9998C25.6472 32.9998 25.0118 33.0238 25.9482 32.5677C26.5144 32.2918 27.1666 31.7108 27.4824 31.2009C27.6147 30.9872 27.7901 30.572 27.8721 30.2783C28.018 29.7554 28.0211 29.4914 28.0198 17.6637C28.0187 7.55974 28.0013 5.50869 27.9131 5.12761C27.6376 3.93655 26.6998 2.93903 25.4127 2.46776L24.9051 2.28186L21.5873 2.26026L18.2697 2.23865L18.0284 1.84691C17.2477 0.579211 15.4248 -0.206823 13.8562 0.0478038ZM15.2826 1.78361C15.6858 1.91268 16.2195 2.28716 16.4046 2.57075C16.4959 2.71089 16.6383 2.996 16.7209 3.20432C16.9644 3.81843 17.1553 3.89761 18.3928 3.89761H19.4043L19.3717 4.53401C19.3228 5.48812 18.9643 6.03129 18.1507 6.38403L17.697 6.58066L14.4991 6.58072L11.3012 6.58079L10.8418 6.3704C10.0229 5.99545 9.68878 5.48496 9.64012 4.53401L9.60746 3.89761H10.619C11.8628 3.89761 12.0489 3.81932 12.2918 3.19435C12.766 1.97426 14.0241 1.38086 15.2826 1.78361ZM7.82338 4.44464C7.82338 5.16194 7.93067 5.60996 8.25038 6.22703C8.57024 6.8445 9.23437 7.4798 9.89518 7.80026C10.7337 8.20694 10.9771 8.22985 14.4769 8.23095C16.2677 8.23157 17.8143 8.20219 18.0434 8.16325C18.6963 8.05235 19.4989 7.65001 20.0167 7.17412C20.8137 6.44154 21.1851 5.5821 21.1873 4.46521L21.1884 3.89761H22.7999C24.2392 3.89761 24.4553 3.91261 24.8217 4.03824C25.3077 4.20487 25.7999 4.62606 26.0242 5.0672L26.1815 5.3768V17.628V29.8791L25.9549 30.2851C25.7036 30.7353 25.1967 31.1401 24.7202 31.2709C24.516 31.3269 21.6545 31.3486 14.4474 31.3486H4.45772L3.98528 31.1245C3.6845 30.9818 3.4232 30.7927 3.26605 30.6039C2.759 29.9948 2.78904 30.8588 2.81066 17.4825L2.83026 5.3768L3.00115 5.05895C3.23602 4.62221 3.72512 4.1982 4.17825 4.03838C4.5102 3.92135 4.75963 3.90436 6.19029 3.90119L7.82338 3.89761V4.44464ZM19.1987 15.1128C19.1161 15.1463 17.6974 16.3827 16.046 17.8604L13.0436 20.547L12.029 19.6332C9.87972 17.6973 9.82828 17.6575 9.48012 17.6575C9.06355 17.6575 8.77124 17.8065 8.6219 18.0949C8.46565 18.3965 8.46738 18.5359 8.63054 18.8057C8.70284 18.9251 9.62856 19.7973 10.6878 20.7438C12.7561 22.5919 12.8588 22.6579 13.3602 22.4616C13.7273 22.3178 20.3434 16.371 20.4426 16.0956C20.5588 15.773 20.4677 15.4945 20.1669 15.2524C19.8961 15.0346 19.5237 14.9809 19.1987 15.1128Z" fill="white"/>
                    </svg>
                    </div>
                <h3>Get Result</h3>
                <p>Compare your results with your peers with advanced analytics</p>
            </div>
        </div>
        <button class="start-now">Start Now</button>
    </section>

    <!-- Support Form -->
    <section class="support" id="support">
        <div class="support-content">
            <div class="support-image">
                <img src="images/Support.jpg" alt="Support">
            </div>
            <div class="support-form">
                <h2>Need Support</h2>
                <p>Contact professionals for guidance</p>
                <form style="display: flex; align-items: center;">
                <div class="input-wrapper">
                    <label for="full-name">Your Name</label>
                    <input type="text" id="full-name" placeholder="Enter your full name">
                </div>
                <div class="input-wrapper">
                    <label for="email">Email Address</label>
                    <input type="email"id="email" placeholder="Enter Your Email">
                </div>
                <div class="input-wrapper">
                    <label for="telephone">Mobile Number</label>
                    <input type="tel"id="telephone" placeholder="Enter Your Mobile Number">
                </div>
                <div class="input-wrapper">
                    <label for="Query">Your Query</label>
                    <input style="line-height: 12ex;" id="Query" placeholder="Your Query"></input>
                </div>
                    <button type="submit">Join Now</button>
                </form>
            </div>
        </div>
    </section>
    @extends('layout.footer')

        </div>
        @section('js')
    <script src="{{ asset('js/script.js') }}"></script>
    @endsection
</body>
</html>
