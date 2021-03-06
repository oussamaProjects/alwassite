@extends('layouts.front', ['activePage' => 'home', 'titlePage' => __('Home')])

<div class="portail">
    <div class="sections">
        <div class="section">
            <div class="text">
                <a href="#">Agence immobiliere</a>
            </div>
        </div>
        <div class="section">
            <div class="text">
                <a href="#">Alwassite</a>
            </div>
        </div>
        <div class="section">
            <div class="text">
                <a href="#"> Clients</a>
            </div>
        </div>
    </div>
</div>

@section('content')

    <div id="LZ" class="LZ">
        <img src="https://barkliru.solution.weborama.fr/fcgi-bin/dispatch.fcgi?a.A=co&amp;a.si=4745&amp;a.cp=1&amp;a.ct=d">
        <img src="http://barkligallery.com/assets/public/images/interior/amber-deco/livingroom.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/amber-deco/corridor.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/amber-deco/bedroom1.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/amber-deco/cabinet.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/amber-deco/bath1.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/classic/livingroom1.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/classic/corridor.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/classic/bedroom1.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/classic/cabinet.jpg"><img
            src="http://barkligallery.com/assets/public/images/interior/classic/bath1.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/building/b6cbfd614bf652c2fec461b6c51f5868.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/building/30042d65dbde03ca7def6d58d5e5373e.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/building/5a93d1b3bc2bf19674d4d16f7e68ca72.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/building/ac06775a232e818849244a3dab5ad8a0.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/building/091fe02b62e082b7b59bc37764d407b7.jpg"><img
            src="http://barkligallery.com/assets/public/images/renders-slider/render-slide-01b.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/1783c1a761123ece6c10504542c7f341.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/36720051c05c0a61a307cddf6f76931f.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/1a1d3f383100e979c8984a971a31011f.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/c8f32de7a5072d3eb5bc955f34f81f68.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/1425d08b3d884beeb83959d3ff2e91f8.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/8f1dddd9595d73255b2ffee5ec524a99.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/43b4e9a96850fb7fcf0cd4a67ef64979.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/31c8797fe3e4cef0c5a3c7fb5d3c4893.jpg"><img
            src="http://barkligallery.com/uploads/images/slider/image/16a170aeaa5661ac420657fbd57a246b.jpg">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <symbol viewBox="0 0 24 24" id="arrow-down" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.01 16.683V4.497c0-.55.443-.997.991-.997.546 0 .989.447.989.997v12.186l4.818-4.851a.986.986 0 0 1 1.395-.006l.006.006a1.001 1.001 0 0 1 0 1.41L12.001 20.5l-7.21-7.259a1.001 1.001 0 0 1 0-1.41.987.987 0 0 1 1.395-.007l.007.007 4.818 4.849v.003z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="arrow-left" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.818 11.01h12.185c.55 0 .997.443.997.99 0 .547-.447.99-.997.99H7.818l4.851 4.819a.986.986 0 0 1 0 1.4 1.002 1.002 0 0 1-1.41 0L4 12l7.259-7.21a1.002 1.002 0 0 1 1.41 0 .986.986 0 0 1 0 1.401L7.82 11.01z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="arrow-right" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.182 11.01H4.997A.994.994 0 0 0 4 12c0 .547.447.99.997.99h12.185l-4.852 4.82a.986.986 0 0 0 0 1.4 1 1 0 0 0 1.41 0L21 12l-7.259-7.21a1.002 1.002 0 0 0-1.41 0 .986.986 0 0 0 0 1.401l4.85 4.818z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="arrow-up" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.99 7.317v12.186c0 .55-.443.997-.991.997a.994.994 0 0 1-.99-.997V7.317L6.19 12.168a.985.985 0 0 1-1.395.006l-.006-.006a1 1 0 0 1 0-1.41L12 3.5l7.21 7.259a1 1 0 0 1 0 1.41.987.987 0 0 1-1.396.007l-.006-.007-4.818-4.85v-.002z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 670 486" id="building" xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path
                            d="M0 0v66h94.342l21.849-9.002H99.187V16.542h21.65v38.552l17.433-7.174V16.542h21.65v22.513l17.417-7.19V16.542h21.65v21.705l17.433 7.327V16.542h21.635v38.095L265.1 66H531V0H0zm495.382 56.998h21.65V16.542h-21.65v40.456zm-35.985 0h21.619V16.542h-21.62v40.456zm-36.032 0h21.65V16.542h-21.65v40.456zm-36.017 0h21.65V16.542h-21.65v40.456zm-53.725 0h21.634V16.542h-21.634v40.456zm-39.068 0h21.635V16.542h-21.635v40.456zm-39.067 0h21.634V16.542h-21.634v40.456zm-195.384 0h21.634V16.542H60.104v40.456zm-39.068 0h21.635V16.542H21.036v40.456zm534.66 149.705h21.508v-35.73h-21.508v35.73zm0 35.393h21.508V217.27h-21.508v24.826zm-36.725-35.393h21.493v-35.73H518.97v35.73zm0 35.393h21.493V217.27H518.97v24.826zm-36.725-35.393h21.508v-35.73h-21.508v35.73zm0 35.393h21.508V217.27h-21.508v24.826zm-36.726-35.393h21.493v-35.73H445.52v35.73zm0 35.393h21.493V217.27H445.52v24.826zm-36.71-35.393h21.493v-35.73H408.81v35.73zm0 35.393h21.493V217.27H408.81v24.826zM396 253h197v-98H396v98zm117.96-122.479h21.745V90.448H513.96v40.073zm-36.202 0h21.746V90.448h-21.746v40.073zm-36.202 0h21.761V90.448h-21.76v40.073zm-36.201 0h21.76V90.448h-21.76v40.073zM396 140h150V81H396v59z">
                        </path>
                        <path
                            d="M335.449 130.425h17.59V103.58h-17.59v26.845zm-39.043 0h17.59V103.58h-17.59v26.845zm-39.073 0h17.606V103.58h-17.606v26.845zm-23.797 0h6.528V103.58h-6.528v26.845zm-15.307 0h10.159V103.58h-10.16v26.845zm-11.661 0h6.512V103.58h-6.512v26.845zm-47.47-40.658c3.049-8.882 11.461-15.268 21.39-15.268 9.914 0 18.327 6.386 21.391 15.268h-42.781zm12.58 40.658h17.606V103.58h-17.606v26.845zm-26.034 0h6.512V103.58h-6.512v26.845zm-15.292 0h10.144V103.58h-10.144v26.845zm-11.692 0h6.528V103.58h-6.528v26.845zm-36.958 0h17.606V103.58H81.702v26.845zm-37.787 0h17.606V103.58H43.915v26.845zM264.933 80.15l-84.445-35.636L94.282 80.15H0v59.892h381.525V80.15H264.933zm70.516 122.19h17.59v-30.797h-17.59v30.797zm0 54.517h17.59v-30.796h-17.59v30.796zm0 54.503h17.59v-30.781h-17.59v30.78zm0 54.517h17.59v-30.796h-17.59v30.796zM296.406 202.34h17.59v-30.797h-17.59v30.797zm0 54.517h17.59v-30.796h-17.59v30.796zm0 54.503h17.59v-30.781h-17.59v30.78zm0 54.517h17.59v-30.796h-17.59v30.796zM257.333 202.34h17.606v-30.797h-17.606v30.797zm0 54.517h17.606v-30.796h-17.606v30.796zm0 54.503h17.606v-30.781h-17.606v30.78zm0 54.517h17.606v-30.796h-17.606v30.796zM233.536 202.34h6.528v-30.797h-6.528v30.797zm0 54.517h6.528v-30.796h-6.528v30.796zm0 54.503h6.528v-30.781h-6.528v30.78zm0 54.517h6.528v-30.796h-6.528v30.796zM218.23 202.34h10.159v-30.797h-10.16v30.797zm0 54.517h10.159v-30.796h-10.16v30.796zm0 54.503h10.159v-30.781h-10.16v30.78zm0 54.517h10.159v-30.796h-10.16v30.796zM206.568 202.34h6.512v-30.797h-6.512v30.797zm0 54.517h6.512v-30.796h-6.512v30.796zm0 54.503h6.512v-30.781h-6.512v30.78zm0 54.517h6.512v-30.796h-6.512v30.796zm-34.89-163.537h17.606v-30.797h-17.606v30.797zm0 54.517h17.606v-30.796h-17.606v30.796zm0 54.503h17.606v-30.781h-17.606v30.78zm0 54.517h17.606v-30.796h-17.606v30.796zM145.644 202.34h6.512v-30.797h-6.512v30.797zm0 54.517h6.512v-30.796h-6.512v30.796zm0 54.503h6.512v-30.781h-6.512v30.78zm0 54.517h6.512v-30.796h-6.512v30.796zM130.352 202.34h10.144v-30.797h-10.144v30.797zm0 54.517h10.144v-30.796h-10.144v30.796zm0 54.503h10.144v-30.781h-10.144v30.78zm0 54.517h10.144v-30.796h-10.144v30.796zM118.66 202.34h6.528v-30.797h-6.528v30.797zm0 54.517h6.528v-30.796h-6.528v30.796zm0 54.503h6.528v-30.781h-6.528v30.78zm0 54.517h6.528v-30.796h-6.528v30.796zM81.702 202.34h17.606v-30.797H81.702v30.797zm0 54.517h17.606v-30.796H81.702v30.796zm0 54.503h17.606v-30.781H81.702v30.78zm0 54.517h17.606v-30.796H81.702v30.796zM43.915 202.34h17.606v-30.797H43.915v30.797zm0 54.517h17.606v-30.796H43.915v30.796zm0 54.503h17.606v-30.781H43.915v30.78zm0 54.517h17.606v-30.796H43.915v30.796zM0 379.277h381.51V154.346H0v224.931zm295.15 96.401h17.59v-70.903h-17.59v70.903zm-37.817 0h17.606v-70.903h-17.606v70.903zm-47.7 0h27.366v-70.903h-27.367v70.903zm-88.092 0h27.367v-70.903H121.54v70.903zm-39.84 0h17.607v-70.903H81.702v70.903zm-37.786 0h17.606v-70.903H43.915v70.903zM0 393.596V486h165.594v-59.112c0-7.534 6.114-13.675 13.684-13.675 7.539 0 13.683 6.14 13.683 13.675V486h136.083v-49.77c0-11.317 9.178-20.506 20.517-20.506 11.34 0 20.517 9.189 20.517 20.506V486h11.447v-92.404H0zm640.834-84.625h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-22.938-95.635h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-35.258-95.635h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-28.378-95.635h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-28.394-95.635h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-28.408-95.635h13.545v-27.826h-13.545v27.826zm0 47.81h13.545v-27.826h-13.545v27.826zm0 47.825h13.545v-27.84h-13.545v27.84zm-28.394-95.635h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-35.15-95.635h13.545v-27.826h-13.545v27.826zm0 47.81h13.545v-27.826h-13.545v27.826zm0 47.825h13.545v-27.84h-13.545v27.84zm-22.939-95.635h13.53v-27.826h-13.53v27.826zm0 47.81h13.53v-27.826h-13.53v27.826zm0 47.825h13.53v-27.84h-13.53v27.84zm-15.139 11.118h273.56V266.69h-273.56v149.035zm244.998 64.15h13.53v-41.531h-13.53v41.531zm-22.938 0h13.53v-41.531h-13.53v41.531zm-35.258 0h13.53v-41.531h-13.53v41.531zm-28.378 0h13.53v-41.531h-13.53v41.531zm-28.394 0h13.53v-41.531h-13.53v41.531zm-28.408 0h13.545v-41.531h-13.545v41.531zm-28.394 0h13.53v-41.531h-13.53v41.531zm-35.15 0h13.545v-41.531h-13.545v41.531zm-22.939 0h13.53v-41.531h-13.53v41.531zM395.836 486h273.56v-55.957h-273.56V486z">
                        </path>
                    </g>
                </symbol>
                <symbol viewBox="0 0 24 24" id="check" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M5.57 10.909l5.849 5.543L19.302 5.88"></path>
                </symbol>
                <symbol viewBox="0 0 60 60" id="circle" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="transparent" cx="30" cy="30" r="29"></circle>
                </symbol>
                <symbol viewBox="0 0 24 24" id="close" xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path d="M2.808 19.778l16.97-16.97 1.414 1.414-16.97 16.97z"></path>
                        <path d="M4.222 2.808l16.97 16.97-1.414 1.414-16.97-16.97z"></path>
                    </g>
                </symbol>
                <symbol viewBox="0 0 850 680" id="facade" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(1 4)" fill="#4A90E2">
                        <path d="M10 380h269v215H10z"></path>
                        <path d="M11 234h268v170H11z"></path>
                        <path
                            d="M260 141h578v417H260zM78 14h707v127H78zM12 570h830v102H12zM12 558h835l-5 12H12zM5 381h10v15H5zM0 368h15v13H5z">
                        </path>
                        <path d="M13 153h268v81H13z"></path>
                        <path d="M7.5 141H281v13H13zM8 104h18v37H8zM26 111h18v30H26z"></path>
                        <path d="M35 32h246v109H35zM810 117h26v24h-26z"></path>
                        <path d="M777 0h52v141h-52zM78 4h13v27H78zM123 4h13v27h-13z"></path>
                        <path
                            d="M775 32h69l-4 14h-65zM771 46h66.5v4l-.065.007A14.733 14.733 0 0 0 825 60h-54V46zM831 234h10l-3 8h-7zM831 141h10l-3 8h-7zM8.5 234H23v6H11zM7 393h10v21H7zM9 414h10v21H9zM5.5 595H16v13h-4zM842 656.5l5 4.5v11h-15zM768 0h70a6 6 0 0 1-6 6h-58a6 6 0 0 1-6-6zM395.5 0H581a6 6 0 0 1-6 6H401.5a6 6 0 0 1-6-6zM772 6h62v2h-62zM399.5 6H577v2H399.5zM774 8h58v6h-58zM401.5 8H575v6H401.5z">
                        </path>
                    </g>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <style>
                            .jcls-1,
                            .jcls-41 {
                                fill: #fff
                            }

                            .jcls-2 {
                                fill: #d5e8ed
                            }

                            .jcls-3 {
                                fill: #cee0df
                            }

                            .jcls-10,
                            .jcls-12,
                            .jcls-38,
                            .jcls-4,
                            .jcls-7 {
                                opacity: .22
                            }

                            .jcls-4 {
                                fill: url(#j????????????????????_????????????????_388)
                            }

                            .jcls-5 {
                                fill: #748aad
                            }

                            .jcls-24,
                            .jcls-5,
                            .jcls-6 {
                                opacity: .4
                            }

                            .jcls-25,
                            .jcls-6 {
                                fill: #bfd6d8
                            }

                            .jcls-7 {
                                fill: url(#j????????????????????_????????????????_388-2)
                            }

                            .jcls-8 {
                                fill: #f2f9f9
                            }

                            .jcls-9 {
                                fill: #4d4d4d
                            }

                            .jcls-10 {
                                fill: url(#j????????????????????_????????????????_388-3)
                            }

                            .jcls-11 {
                                fill: #eaf4f4
                            }

                            .jcls-12 {
                                fill: url(#j????????????????????_????????????????_388-4)
                            }

                            .jcls-13 {
                                fill: #b6d6e3
                            }

                            .jcls-14 {
                                fill: #93bec9
                            }

                            .jcls-15 {
                                fill: #78a8c2
                            }

                            .jcls-15,
                            .jcls-31,
                            .jcls-40 {
                                opacity: .5
                            }

                            .jcls-16 {
                                fill: #adcfdb
                            }

                            .jcls-17 {
                                fill: #709fb3
                            }

                            .jcls-18,
                            .jcls-19,
                            .jcls-20,
                            .jcls-26,
                            .jcls-29,
                            .jcls-30,
                            .jcls-32,
                            .jcls-33,
                            .jcls-34,
                            .jcls-35 {
                                opacity: .3
                            }

                            .jcls-18 {
                                fill: url(#j????????????????????_????????????????_389)
                            }

                            .jcls-19 {
                                fill: url(#j????????????????????_????????????????_389-2)
                            }

                            .jcls-20 {
                                fill: url(#j????????????????????_????????????????_389-3)
                            }

                            .jcls-21 {
                                fill: #e1f0fa
                            }

                            .jcls-22 {
                                fill: #dde8e8
                            }

                            .jcls-23 {
                                fill: #577f8f
                            }

                            .jcls-26 {
                                fill: url(#j????????????????????_????????????????_388-5)
                            }

                            .jcls-27 {
                                fill: #a5c8d6
                            }

                            .jcls-28,
                            .jcls-37 {
                                fill: none
                            }

                            .jcls-29 {
                                fill: url(#j????????????????????_????????????????_388-6)
                            }

                            .jcls-30 {
                                fill: url(#j????????????????????_????????????????_388-7)
                            }

                            .jcls-31 {
                                fill: url(#j????????????????????_????????????????_388-8)
                            }

                            .jcls-32 {
                                fill: url(#j????????????????????_????????????????_388-9)
                            }

                            .jcls-33 {
                                fill: url(#j????????????????????_????????????????_388-10)
                            }

                            .jcls-34 {
                                fill: url(#j????????????????????_????????????????_388-11)
                            }

                            .jcls-35 {
                                fill: url(#j????????????????????_????????????????_388-12)
                            }

                            .jcls-36 {
                                fill: #6092a8;
                                stroke: #fff;
                                stroke-width: 2px;
                                opacity: .7;
                                stroke-miterlimit: 10
                            }

                            .jcls-37,
                            .jcls-41 {
                                stroke-miterlimit: 10;
                                stroke: #bfd6d8;
                                opacity: .6
                            }

                            .jcls-38 {
                                fill: url(#j????????????????????_????????????????_388-13)
                            }

                            .jcls-39 {
                                fill: #98bdd6
                            }

                        </style>
                        <linearGradient id="j????????????????????_????????????????_388" x1="50.5" y1="97" x2="77.5" y2="97"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fff" stop-opacity="0"></stop>
                            <stop offset="1" stop-color="#336c8f" stop-opacity=".8"></stop>
                        </linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-2" x1="93.5" y1="141.5" x2="120.5" y2="141.5"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-3" x1="39.5" y1="40.5" x2="63.5" y2="40.5"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-4" y1="302.5" y2="302.5"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_389" x1="551.5" y1="616.5" x2="570.5" y2="616.5"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#336c8f" stop-opacity="0"></stop>
                            <stop offset=".36" stop-color="#336c8f" stop-opacity="0"></stop>
                            <stop offset=".46" stop-color="#336c8f" stop-opacity=".04"></stop>
                            <stop offset=".59" stop-color="#336c8f" stop-opacity=".15"></stop>
                            <stop offset=".73" stop-color="#336c8f" stop-opacity=".33"></stop>
                            <stop offset=".89" stop-color="#336c8f" stop-opacity=".58"></stop>
                            <stop offset="1" stop-color="#336c8f" stop-opacity=".8"></stop>
                        </linearGradient>
                        <linearGradient id="j????????????????????_????????????????_389-2" x1="-1130.5" y1="616.5" x2="-1111.5" y2="616.5"
                            gradientTransform="matrix(-1 0 0 1 -449 0)" xlink:href="#j????????????????????_????????????????_389">
                        </linearGradient>
                        <linearGradient id="j????????????????????_????????????????_389-3" x1="-874.5" y1="616.5" x2="-855.5" y2="616.5"
                            gradientTransform="matrix(-1 0 0 1 -449 0)" xlink:href="#j????????????????????_????????????????_389">
                        </linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-5" x1="289.5" y1="523" x2="269.5" y2="523"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-6" x1="415.5" y1="397" x2="405.5" y2="397"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-7" x1="674.5" y1="351" x2="662.5" y2="351"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-8" x1="561.5" y1="351" x2="570.5" y2="351"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-9" x1="-1130.5" y1="241.5" x2="-1114.22" y2="241.5"
                            gradientTransform="matrix(-1 0 0 1 -449 0)" xlink:href="#j????????????????????_????????????????_388">
                        </linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-10" x1="-1130.5" y1="145.5" x2="-1114.22" y2="145.5"
                            gradientTransform="matrix(-1 0 0 1 -449 0)" xlink:href="#j????????????????????_????????????????_388">
                        </linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-11" x1="396.5" y1="141.5" x2="405.5" y2="141.5"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-12" x1="579.5" y1="93.5" x2="570.5" y2="93.5"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                        <linearGradient id="j????????????????????_????????????????_388-13" x1="78.5" y1="40.5" x2="102.5" y2="40.5"
                            xlink:href="#j????????????????????_????????????????_388"></linearGradient>
                    </defs>
                    <title>home</title>
                    <g id="j????????_2" data-name="???????? 2">
                        <g id="jhome">
                            <path class="jcls-2" d="M34.5 33h86v116h-86z"></path>
                            <path class="jcls-3"
                                d="M61.5 48h16v20h-4v-5a11 11 0 0 0-11-11h-1zM75.5 139h2V72h-4l2 67z"></path>
                            <path class="jcls-4" d="M50.5 48h27v98h-27z"></path>
                            <path class="jcls-2" d="M11.5 149h109v89h-109z"></path>
                            <path class="jcls-1" d="M9.5 152h111v4H9.5zM8.5 148h112v4H8.5zM6.5 146h114v2H6.5z">
                            </path>
                            <path class="jcls-5" d="M10.5 156h110v1h-110z"></path>
                            <path class="jcls-6" d="M9.5 152h111v1H9.5zM8.5 148h112v1H8.5z"></path>
                            <path class="jcls-1" d="M73.5 68h47v4h-47z"></path>
                            <path class="jcls-3"
                                d="M104.5 48h16v20h-4v-5a11 11 0 0 0-11-11h-1zM118.5 139h2V72h-4l2 67z"></path>
                            <path class="jcls-7" d="M93.5 48h27v187h-27z"></path>
                            <path class="jcls-1" d="M92.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M98.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M91.5 48h7v4h-7z"></path>
                            <path class="jcls-2" d="M829.01 68h-7.55V48H120.5v188h717v-93h-8.49V68z"></path>
                            <path class="jcls-1"
                                d="M653.5 70h4v55h-4zM665.5 70h5v69h-5zM708.5 70h5v69h-5zM716.5 70h5v69h-5zM761.5 70h5v69h-5zM769.5 70h5v69h-5zM811.5 70h5v69h-5zM575.5 70h4v55h-4z">
                            </path>
                            <path class="jcls-8" d="M773.5 15h55v18h-55z"></path>
                            <path class="jcls-1"
                                d="M771.5 12h60v3h-60zM769.5 8h64v4h-64zM768.5 4h66v4h-66zM766.5 2h70v2h-70z"></path>
                            <path class="jcls-5" d="M773.5 15h58v1h-58z"></path>
                            <path class="jcls-6" d="M771.5 12h60v1h-60zM769.5 8h64v1h-64zM768.5 4h66v1h-66z">
                            </path>
                            <path class="jcls-9" d="M86.5 19h722v16h-722z"></path>
                            <path class="jcls-1"
                                d="M30.5 42h46a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-46v-3zM27.5 39h49a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-49v-3zM25.5 35h51a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-51v-4zM23.5 33h53a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-53v-2z">
                            </path>
                            <path class="jcls-5" d="M34.5 48h27v1h-27z"></path>
                            <path class="jcls-6" d="M30.5 42h47v1h-47z"></path>
                            <path class="jcls-1" d="M27.5 45h49a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-49v-3z"></path>
                            <path class="jcls-6" d="M27.5 45h50v1h-50zM27.5 39h50v1h-50zM25.5 35h52v1h-52z">
                            </path>
                            <path class="jcls-10" d="M39.5 33h24v15h-24z"></path>
                            <path class="jcls-2" d="M11.5 238h66v132h-66z"></path>
                            <path class="jcls-11"
                                d="M10.5 249h22v6h-22zM10.5 242h22v5h-22zM10.5 257h22v6h-22zM10.5 265h22v6h-22zM10.5 273h22v6h-22zM10.5 281h22v6h-22zM10.5 289h22v6h-22zM10.5 297h22v6h-22zM10.5 305h22v6h-22zM10.5 313h22v6h-22zM10.5 321h22v6h-22zM10.5 329h22v6h-22zM10.5 337h22v6h-22zM10.5 345h22v6h-22zM10.5 353h22v6h-22zM10.5 361h22v6h-22z">
                            </path>
                            <path class="jcls-1" d="M9.5 241h72v4h-72zM8.5 237h73v4h-73zM6.5 235h75v2h-75z">
                            </path>
                            <path class="jcls-5" d="M10.5 245h71v1h-71z"></path>
                            <path class="jcls-6" d="M9.5 241h72v1h-72zM8.5 237h73v1h-73z"></path>
                            <path class="jcls-12" d="M50.5 235h27v135h-27z"></path>
                            <path class="jcls-13" d="M77.5 236h760v323h-760z"></path>
                            <path class="jcls-2" d="M405.5 19h165v540h-165z"></path>
                            <path class="jcls-14" d="M270.5 572h571v102h-571z"></path>
                            <path class="jcls-15"
                                d="M270.5 605h571v2h-571zM270.5 615.5h571v2h-571zM270.5 626h571v2h-571zM270.5 636.5h571v2h-571zM270.5 647h571v2h-571z">
                            </path>
                            <path class="jcls-9"
                                d="M346.5 603h-26c-15 0-24 5-24 22v50h74v-50c0-17-9-22-24-22zM753.5 603h-26c-15 0-24 5-24 22v50h74v-50c0-17-9-22-24-22zM502.93 603h-29.86c-17.23 0-27.57 5-27.57 22v50h85v-50c0-17-10.34-22-27.57-22zM623.18 603h-13.36c-8.32 0-12.32 3-12.32 12v60h38v-60c0-9-4-12-12.32-12z">
                            </path>
                            <path class="jcls-16"
                                d="M703.5 674v-49c0-17 9-22 24-22h26c15 0 24 5 24 22v49h7v-49c0-10.27-3-17.94-8.94-22.79-5.18-4.21-12.19-6.21-22.06-6.21h-26c-9.87 0-16.88 2-22.06 6.21-5.93 4.85-8.94 12.52-8.94 22.79v49zM597.5 674v-59c0-9 4-12 12.32-12h13.35c8.32 0 12.32 3 12.32 12v59h7v-59c0-15.7-10.51-19-19.32-19h-13.35c-8.82 0-19.32 3.3-19.32 19v59zM445.5 674v-49c0-17 10.34-22 27.57-22h29.86c17.23 0 27.57 5 27.57 22v49h7v-49c0-10.46-3.45-18.23-10.26-23.08-5.67-4-13.4-5.92-24.31-5.92h-29.86c-10.91 0-18.63 1.88-24.31 5.92-6.76 4.85-10.26 12.62-10.26 23.08v49zM296.5 674v-49c0-17 9-22 24-22h26c15 0 24 5 24 22v49h7v-49c0-10.27-3-17.94-8.94-22.79-5.18-4.21-12.19-6.21-22.06-6.21h-26c-9.87 0-16.88 2-22.06 6.21-5.93 4.85-8.94 12.52-8.94 22.79v49z">
                            </path>
                            <path class="jcls-17" d="M11.5 673h835v3h-835z"></path>
                            <path class="jcls-16"
                                d="M770.5 674h76v-8.71a1.29 1.29 0 0 0-1.29-1.29h-73.42a1.29 1.29 0 0 0-1.29 1.29zM772.5 664h72v-.95a1.05 1.05 0 0 0-1.05-1.05h-69.9a1.05 1.05 0 0 0-1.05 1.05zM774.5 662h68v-1.12a1.88 1.88 0 0 0-1.88-1.88h-64.24a1.88 1.88 0 0 0-1.88 1.88zM629.5 674h80v-8.71a1.29 1.29 0 0 0-1.29-1.29h-77.42a1.29 1.29 0 0 0-1.29 1.29zM631.5 664h76v-.95a1.05 1.05 0 0 0-1.05-1.05h-73.9a1.05 1.05 0 0 0-1.05 1.05zM633.5 662h72v-1.12a1.88 1.88 0 0 0-1.88-1.88h-68.24a1.88 1.88 0 0 0-1.88 1.88zM523.5 674h80v-8.71a1.29 1.29 0 0 0-1.29-1.29h-77.42a1.29 1.29 0 0 0-1.29 1.29zM525.5 664h76v-.95a1.05 1.05 0 0 0-1.05-1.05h-73.9a1.05 1.05 0 0 0-1.05 1.05zM527.5 662h72v-1.12a1.88 1.88 0 0 0-1.88-1.88h-68.24a1.88 1.88 0 0 0-1.88 1.88zM363.5 674h88v-8.71a1.29 1.29 0 0 0-1.29-1.29h-85.42a1.29 1.29 0 0 0-1.29 1.29zM365.5 664h84v-.95a1.05 1.05 0 0 0-1.05-1.05h-81.9a1.05 1.05 0 0 0-1.05 1.05zM367.5 662h80v-1.12a1.88 1.88 0 0 0-1.88-1.88h-76.24a1.88 1.88 0 0 0-1.88 1.88zM270.5 674h33v-8.71a1.29 1.29 0 0 0-1.29-1.29H270.5zM270.5 664h31v-.95a1.05 1.05 0 0 0-1.05-1.05H270.5zM270.5 662h29v-1.12a1.88 1.88 0 0 0-1.88-1.88H270.5z">
                            </path>
                            <path class="jcls-1"
                                d="M270.5 569h573v3h-573zM270.5 565h575v4h-575zM270.5 561h576v4h-576zM270.5 559h578v2h-578z">
                            </path>
                            <path class="jcls-5" d="M270.5 572h571v1h-571z"></path>
                            <path class="jcls-6"
                                d="M270.5 569h573v1h-573zM270.5 565h575v1h-575zM270.5 561h576v1h-576z"></path>
                            <path class="jcls-18"
                                d="M551.5 559h9.5v2h2.71v4h1.36v4h2.71v3h2.72v102h-17.65l4.08-15v-87l-5.43-13z"></path>
                            <path class="jcls-19"
                                d="M681.5 559H672v2h-2.71v4h-1.36v4h-2.71v3h-2.72v102h17.65l-4.08-15v-87l5.43-13z">
                            </path>
                            <path class="jcls-20"
                                d="M425.5 559H416v2h-2.71v4h-1.36v4h-2.71v3h-2.72v102h17.65l-4.08-15v-87l5.43-13z">
                            </path>
                            <path class="jcls-21" d="M388.5 240h4v319h-4zM401.5 240h4v319h-4z"></path>
                            <path class="jcls-22" transform="rotate(90 242 242)" d="M240 95.5h4v293h-4z"></path>
                            <path class="jcls-1" d="M392.5 244h9v315h-9z"></path>
                            <path class="jcls-21" d="M77.5 240h4v319h-4zM90.5 240h4v319h-4z"></path>
                            <path class="jcls-1" d="M81.5 244h9v315h-9z"></path>
                            <path class="jcls-21" d="M820.5 145h4v414h-4zM833.5 145h4v414h-4z"></path>
                            <path class="jcls-1"
                                d="M824.5 150.19h9V559h-9zM584.5 489h64v2h-64zM587.5 491h58v3h-58z"></path>
                            <path class="jcls-17" d="M593.5 495h46v56h-46z"></path>
                            <path class="jcls-1" d="M638.5 496v54h-44v-54h44m2-2h-48v58h48v-58z"></path>
                            <path class="jcls-22" d="M590.5 494h2v9h-2zM640.5 494h2v9h-2z"></path>
                            <path class="jcls-6" d="M587.5 491h58v1h-58zM592.5 494h48v1h-48z"></path>
                            <path class="jcls-9" d="M594.5 533h44v17h-44z"></path>
                            <path class="jcls-23" d="M594.5 496h2v37h-2zM608.5 496h2v37h-2zM622.5 496h2v37h-2z">
                            </path>
                            <path class="jcls-23" d="M594.5 496h44v2h-44zM594.5 511h44v2h-44z"></path>
                            <path class="jcls-23" d="M636.5 496h2v37h-2z"></path>
                            <path class="jcls-1" d="M584.5 410.67h64v2h-64zM587.5 412.67h58v3h-58z"></path>
                            <path class="jcls-17" d="M593.5 416.67h46v56h-46z"></path>
                            <path class="jcls-1" d="M638.5 417.67v54h-44v-54h44m2-2h-48v58h48v-58z"></path>
                            <path class="jcls-22" d="M590.5 415.67h2v9h-2zM640.5 415.67h2v9h-2z"></path>
                            <path class="jcls-6" d="M587.5 412.67h58v1h-58zM592.5 415.67h48v1h-48z"></path>
                            <path class="jcls-9" d="M594.5 454.67h44v17h-44z"></path>
                            <path class="jcls-23"
                                d="M594.5 417.67h2v37h-2zM608.5 417.67h2v37h-2zM622.5 417.67h2v37h-2z"></path>
                            <path class="jcls-23" d="M594.5 417.67h44v2h-44zM594.5 432.67h44v2h-44z"></path>
                            <path class="jcls-23" d="M636.5 417.67h2v37h-2z"></path>
                            <path class="jcls-1" d="M584.5 332.33h64v2h-64zM587.5 334.33h58v3h-58z"></path>
                            <path class="jcls-17" d="M593.5 338.33h46v56h-46z"></path>
                            <path class="jcls-1" d="M638.5 339.33v54h-44v-54h44m2-2h-48v58h48v-58z"></path>
                            <path class="jcls-22" d="M590.5 337.33h2v9h-2zM640.5 337.33h2v9h-2z"></path>
                            <path class="jcls-6" d="M587.5 334.33h58v1h-58zM592.5 337.33h48v1h-48z"></path>
                            <path class="jcls-9" d="M594.5 376.33h44v17h-44z"></path>
                            <path class="jcls-23"
                                d="M594.5 339.33h2v37h-2zM608.5 339.33h2v37h-2zM622.5 339.33h2v37h-2z"></path>
                            <path class="jcls-23" d="M594.5 339.33h44v2h-44zM594.5 354.33h44v2h-44z"></path>
                            <path class="jcls-23" d="M636.5 339.33h2v37h-2z"></path>
                            <path class="jcls-1" d="M584.5 254h64v2h-64zM587.5 256h58v3h-58z"></path>
                            <path class="jcls-17" d="M593.5 260h46v56h-46z"></path>
                            <path class="jcls-1" d="M638.5 261v54h-44v-54h44m2-2h-48v58h48v-58z"></path>
                            <path class="jcls-22" d="M590.5 259h2v9h-2zM640.5 259h2v9h-2z"></path>
                            <path class="jcls-6" d="M587.5 256h58v1h-58zM592.5 259h48v1h-48z"></path>
                            <path class="jcls-9" d="M594.5 298h44v17h-44z"></path>
                            <path class="jcls-23" d="M594.5 261h2v37h-2zM608.5 261h2v37h-2zM622.5 261h2v37h-2z">
                            </path>
                            <path class="jcls-23" d="M594.5 261h44v2h-44zM594.5 276h44v2h-44z"></path>
                            <path class="jcls-23" d="M636.5 261h2v37h-2z"></path>
                            <path class="jcls-1" d="M584.5 72h64v2h-64zM587.5 74h58v3h-58z"></path>
                            <path class="jcls-17" d="M593.5 78h46v62h-46z"></path>
                            <path class="jcls-1" d="M638.5 79v60h-44V79h44m2-2h-48v64h48V77z"></path>
                            <path class="jcls-22" d="M590.5 77h2v9h-2zM640.5 77h2v9h-2z"></path>
                            <path class="jcls-6" d="M587.5 74h58v1h-58zM592.5 77h48v1h-48z"></path>
                            <path class="jcls-9" d="M584.5 122h64v17h-64z"></path>
                            <path class="jcls-23" d="M594.5 79h2v43h-2zM608.5 79h2v43h-2zM622.5 79h2v43h-2z">
                            </path>
                            <path class="jcls-23" d="M594.5 79h44v2h-44zM594.5 94h44v2h-44z"></path>
                            <path class="jcls-23" d="M636.5 79h2v43h-2z"></path>
                            <path class="jcls-17" d="M593.5 174h46v56h-46z"></path>
                            <path class="jcls-1" d="M638.5 175v54h-44v-54h44m2-2h-48v58h48v-58z"></path>
                            <path class="jcls-9" d="M594.5 212h44v17h-44z"></path>
                            <path class="jcls-23" d="M594.5 175h2v37h-2zM608.5 175h2v37h-2zM622.5 175h2v37h-2z">
                            </path>
                            <path class="jcls-23" d="M594.5 190h44v2h-44z"></path>
                            <path class="jcls-23" d="M636.5 175h2v37h-2z"></path>
                            <path class="jcls-1" d="M670.5 253h38v306h-38z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M703.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M703.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M677.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M677.5 261h24v2h-24zM677.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 689.5 279)" d="M671.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 700.5 279)" d="M682.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 678.5 279)" d="M660.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M677.5 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M703.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M703.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M677.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M677.5 340h24v2h-24zM677.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 689.5 358)" d="M671.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 700.5 358)" d="M682.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 678.5 358)" d="M660.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M677.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M703.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M703.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M677.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M677.5 419h24v2h-24zM677.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 689.5 437)" d="M671.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 700.5 437)" d="M682.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 678.5 437)" d="M660.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M677.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M703.5 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M675 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M703.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M677.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M677.5 498h24v2h-24zM677.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 689.5 516)" d="M671.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 700.5 516)" d="M682.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 678.5 516)" d="M660.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M677.5 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M697.84 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M693.27 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M692.5 259h-6l-.98-8h7.96l-.98 8zM722.5 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M755.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M755.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M729.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M729.5 261h24v2h-24zM729.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 741.5 279)" d="M723.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 752.5 279)" d="M734.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 730.5 279)" d="M712.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M729.5 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M755.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M755.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M729.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M729.5 340h24v2h-24zM729.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 741.5 358)" d="M723.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 752.5 358)" d="M734.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 730.5 358)" d="M712.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M729.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M755.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M755.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M729.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M729.5 419h24v2h-24zM729.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 741.5 437)" d="M723.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 752.5 437)" d="M734.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 730.5 437)" d="M712.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M729.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M755.5 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M727 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M755.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M729.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M729.5 498h24v2h-24zM729.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 741.5 516)" d="M723.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 752.5 516)" d="M734.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 730.5 516)" d="M712.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M729.5 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M749.84 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M745.27 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M744.5 259h-6l-.98-8h7.96l-.98 8zM774.5 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M807.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M807.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M781.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M781.5 261h24v2h-24zM781.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 793.5 279)" d="M775.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 804.5 279)" d="M786.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 782.5 279)" d="M764.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M781.5 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M807.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M807.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M781.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M781.5 340h24v2h-24zM781.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 793.5 358)" d="M775.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 804.5 358)" d="M786.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 782.5 358)" d="M764.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M781.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M807.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M807.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M781.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M781.5 419h24v2h-24zM781.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 793.5 437)" d="M775.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 804.5 437)" d="M786.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 782.5 437)" d="M764.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M781.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M807.5 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M779 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M807.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M781.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M781.5 498h24v2h-24zM781.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 793.5 516)" d="M775.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 804.5 516)" d="M786.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 782.5 516)" d="M764.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M781.5 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M801.84 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M797.27 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M796.5 259h-6l-.98-8h7.96l-.98 8zM222.5 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M255.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M255.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M229.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M229.5 261h24v2h-24zM229.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 241.5 279)" d="M223.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 252.5 279)" d="M234.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 230.5 279)" d="M212.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M229.5 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M255.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M255.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M229.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M229.5 340h24v2h-24zM229.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 241.5 358)" d="M223.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 252.5 358)" d="M234.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 230.5 358)" d="M212.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M229.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M255.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M255.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M229.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M229.5 419h24v2h-24zM229.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 241.5 437)" d="M223.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 252.5 437)" d="M234.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 230.5 437)" d="M212.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M229.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M255.5 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M227 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M255.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M229.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M229.5 498h24v2h-24zM229.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 241.5 516)" d="M223.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 252.5 516)" d="M234.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 230.5 516)" d="M212.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M229.5 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M249.84 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M245.27 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M244.5 259h-6l-.98-8h7.96l-.98 8zM163 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M196 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M196 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M170 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M170 261h24v2h-24zM170 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 182 279)" d="M164 278h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 193 279)" d="M175 278h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 171 279)" d="M153 278h36v2h-36z"></path>
                            <path class="jcls-9" d="M170 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M196 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M196 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M170 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M170 340h24v2h-24zM170 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 182 358)" d="M164 357h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 193 358)" d="M175 357h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 171 358)" d="M153 357h36v2h-36z"></path>
                            <path class="jcls-9" d="M170 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M196 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M196 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M170 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M170 419h24v2h-24zM170 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 182 437)" d="M164 436h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 193 437)" d="M175 436h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 171 437)" d="M153 436h36v2h-36z"></path>
                            <path class="jcls-9" d="M170 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M196 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M167.5 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M196 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M170 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M170 498h24v2h-24zM170 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 182 516)" d="M164 515h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 193 516)" d="M175 515h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 171 516)" d="M153 515h36v2h-36z"></path>
                            <path class="jcls-9" d="M170 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M190.34 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M185.77 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M185 259h-6l-.98-8h7.96l-.98 8zM103.5 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M136.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M136.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M110.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M110.5 261h24v2h-24zM110.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 122.5 279)" d="M104.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 133.5 279)" d="M115.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 111.5 279)" d="M93.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M110.5 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M136.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M136.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M110.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M110.5 340h24v2h-24zM110.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 122.5 358)" d="M104.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 133.5 358)" d="M115.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 111.5 358)" d="M93.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M110.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M136.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M136.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M110.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M110.5 419h24v2h-24zM110.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 122.5 437)" d="M104.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 133.5 437)" d="M115.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 111.5 437)" d="M93.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M110.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M136.5 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M108 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M136.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M110.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M110.5 498h24v2h-24zM110.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 122.5 516)" d="M104.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 133.5 516)" d="M115.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 111.5 516)" d="M93.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M110.5 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M130.84 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M126.27 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M125.5 259h-6l-.98-8h7.96l-.98 8zM282 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M315 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M315 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M289 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M289 261h24v2h-24zM289 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 301 279)" d="M283 278h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 312 279)" d="M294 278h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 290 279)" d="M272 278h36v2h-36z"></path>
                            <path class="jcls-9" d="M289 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M315 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M315 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M289 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M289 340h24v2h-24zM289 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 301 358)" d="M283 357h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 312 358)" d="M294 357h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 290 358)" d="M272 357h36v2h-36z"></path>
                            <path class="jcls-9" d="M289 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M315 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M315 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M289 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M289 419h24v2h-24zM289 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 301 437)" d="M283 436h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 312 437)" d="M294 436h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 290 437)" d="M272 436h36v2h-36z"></path>
                            <path class="jcls-9" d="M289 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M315 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M286.5 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M315 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M289 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M289 498h24v2h-24zM289 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 301 516)" d="M283 515h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 312 516)" d="M294 515h36v2h-36z"></path>
                            <path class="jcls-23" transform="rotate(90 290 516)" d="M272 515h36v2h-36z"></path>
                            <path class="jcls-9" d="M289 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M309.34 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M304.77 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M304 259h-6l-.98-8h7.96l-.98 8zM341.5 253h38v306h-38z">
                            </path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M374.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M374.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M348.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M348.5 261h24v2h-24zM348.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 360.5 279)" d="M342.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 371.5 279)" d="M353.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 349.5 279)" d="M331.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M348.5 292.58h24V313h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M374.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M374.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M348.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M348.5 340h24v2h-24zM348.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 360.5 358)" d="M342.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 371.5 358)" d="M353.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 349.5 358)" d="M331.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M348.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M374.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M374.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M348.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M348.5 419h24v2h-24zM348.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 360.5 437)" d="M342.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 371.5 437)" d="M353.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 349.5 437)" d="M331.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M348.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 555.5h29v3h-29z"></path>
                                <path class="jcls-25" d="M374.5 556v2h-28v-2h28m1-1h-30v4h30v-4z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M346 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M374.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M348.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M348.5 498h24v2h-24zM348.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 360.5 516)" d="M342.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 371.5 516)" d="M353.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 349.5 516)" d="M331.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M348.5 529.58h24V550h-24z"></path>
                            <path class="jcls-8" d="M368.84 259h-16.68l-1.26-8h19.2l-1.26 8z"></path>
                            <path class="jcls-6" d="M364.27 259h-7.54l-1.23-8h10l-1.23 8z"></path>
                            <path class="jcls-1" d="M363.5 259h-6l-.98-8h7.96l-.98 8z"></path>
                            <path class="jcls-26" d="M269.5 372h20v302h-20z"></path>
                            <path class="jcls-2" d="M11.5 383h259v214h-259z"></path>
                            <path class="jcls-27" d="M11.5 610h259v64h-259z"></path>
                            <path class="jcls-1"
                                d="M9.5 607h263v3H9.5zM7.5 603h267v4H7.5zM6.5 599h269v4H6.5zM4.5 597h273v2H4.5zM81.5 669h20v5h-20z">
                            </path>
                            <path class="jcls-23" d="M216.5 620h28v54h-28z"></path>
                            <path class="jcls-1" d="M225.5 616h10v4h-10z"></path>
                            <path class="jcls-17" d="M220.5 625h20v42h-20z"></path>
                            <path class="jcls-23" d="M218.5 637h24v2h-24zM218.5 652h24v2h-24z"></path>
                            <path class="jcls-1" d="M216.5 621h2v53h-2zM242.5 621h2v53h-2zM220.5 669h20v5h-20z">
                            </path>
                            <path class="jcls-1" d="M216.5 620h28v2h-28z"></path>
                            <path class="jcls-23" d="M229.5 623h2v46h-2zM180.9 620h28v54h-28z"></path>
                            <path class="jcls-1" d="M189.9 616h10v4h-10z"></path>
                            <path class="jcls-17" d="M184.9 625h20v42h-20z"></path>
                            <path class="jcls-1" d="M180.9 621h2v53h-2zM206.9 621h2v53h-2zM184.9 669h20v5h-20z">
                            </path>
                            <path class="jcls-1" d="M180.9 620h28v2h-28z"></path>
                            <path class="jcls-23" d="M182.9 637h24v2h-24zM182.9 652h24v2h-24z"></path>
                            <path class="jcls-23" d="M193.9 623h2v46h-2zM145.3 620h28v54h-28z"></path>
                            <path class="jcls-1" d="M154.3 616h10v4h-10z"></path>
                            <path class="jcls-17" d="M149.3 625h20v42h-20z"></path>
                            <path class="jcls-1" d="M145.3 621h2v53h-2zM171.3 621h2v53h-2zM149.3 669h20v5h-20z">
                            </path>
                            <path class="jcls-1" d="M145.3 620h28v2h-28z"></path>
                            <path class="jcls-23" d="M147.3 637h24v2h-24zM147.3 652h24v2h-24z"></path>
                            <path class="jcls-23" d="M158.3 623h2v46h-2zM109.7 620h28v54h-28z"></path>
                            <path class="jcls-1" d="M118.7 616h10v4h-10z"></path>
                            <path class="jcls-17" d="M113.7 625h20v42h-20z"></path>
                            <path class="jcls-1" d="M109.7 621h2v53h-2zM135.7 621h2v53h-2zM113.7 669h20v5h-20z">
                            </path>
                            <path class="jcls-1" d="M109.7 620h28v2h-28z"></path>
                            <path class="jcls-23" d="M111.7 637h24v2h-24zM111.7 652h24v2h-24z"></path>
                            <path class="jcls-23" d="M122.7 623h2v46h-2zM74.1 620h28v54h-28z"></path>
                            <path class="jcls-1" d="M83.1 616h10v4h-10z"></path>
                            <path class="jcls-17" d="M78.1 625h20v42h-20z"></path>
                            <path class="jcls-1" d="M74.1 621h2v53h-2zM100.1 621h2v53h-2z"></path>
                            <path class="jcls-1" d="M74.1 620h28v2h-28z"></path>
                            <path class="jcls-23" d="M76.1 637h24v2h-24zM76.1 652h24v2h-24z"></path>
                            <path class="jcls-23" d="M87.1 623h2v46h-2z"></path>
                            <path class="jcls-1" d="M78.1 669h20v5h-20z"></path>
                            <path class="jcls-23" d="M38.5 620h28v54h-28z"></path>
                            <path class="jcls-1" d="M47.5 616h10v4h-10z"></path>
                            <path class="jcls-17" d="M42.5 625h20v42h-20z"></path>
                            <path class="jcls-1" d="M38.5 621h2v53h-2zM64.5 621h2v53h-2zM42.5 669h20v5h-20z">
                            </path>
                            <path class="jcls-1" d="M38.5 620h28v2h-28z"></path>
                            <path class="jcls-23" d="M40.5 637h24v2h-24zM40.5 652h24v2h-24z"></path>
                            <path class="jcls-23" d="M51.5 623h2v46h-2z"></path>
                            <path class="jcls-1" d="M15.5 383h13v214h-13zM254.5 383h13v214h-13z"></path>
                            <path class="jcls-5" d="M11.5 610h259v1h-259z"></path>
                            <path class="jcls-6" d="M9.5 607h263v1H9.5zM7.5 603h267v1H7.5zM6.5 599h269v1H6.5z">
                            </path>
                            <path class="jcls-1"
                                d="M6.5 380h268v3H6.5zM4.5 376h272v4H4.5zM3.5 372h274v4H3.5zM1.5 370h278v2H1.5z"></path>
                            <path class="jcls-5" d="M11.5 383h259v1h-259z"></path>
                            <path class="jcls-6" d="M6.5 380h268v1H6.5zM4.5 376h272v1H4.5zM3.5 372h274v1H3.5z">
                            </path>
                            <path class="jcls-23" d="M218.83 404h24v38h-24z"></path>
                            <path class="jcls-17" d="M220.83 406h20v34h-20z"></path>
                            <path class="jcls-23" d="M218.83 413h24v2h-24z"></path>
                            <path class="jcls-23" d="M226.83 406h1v8h-1zM233.83 406h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M216.83 442h28v2h-28zM218.83 444h24v2h-24zM220.83 446h5v3h-5zM235.83 446h5v3h-5zM245.17 396a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M227.83 391h6v4h-6z"></path>
                            <path class="jcls-28" d="M216.5 391h28.67v64H216.5z"></path>
                            <path class="jcls-28" d="M216.5 391h28.67v64H216.5z"></path>
                            <path class="jcls-23" d="M183.23 404h24v38h-24z"></path>
                            <path class="jcls-17" d="M185.23 406h20v34h-20z"></path>
                            <path class="jcls-23" d="M183.23 413h24v2h-24z"></path>
                            <path class="jcls-23" d="M191.23 406h1v8h-1zM198.23 406h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M181.23 442h28v2h-28zM183.23 444h24v2h-24zM185.23 446h5v3h-5zM200.23 446h5v3h-5zM209.57 396a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M192.23 391h6v4h-6z"></path>
                            <path class="jcls-28" d="M180.9 391h28.67v64H180.9z"></path>
                            <path class="jcls-28" d="M180.9 391h28.67v64H180.9z"></path>
                            <path class="jcls-23" d="M147.63 404h24v38h-24z"></path>
                            <path class="jcls-17" d="M149.63 406h20v34h-20z"></path>
                            <path class="jcls-23" d="M147.63 413h24v2h-24z"></path>
                            <path class="jcls-23" d="M155.63 406h1v8h-1zM162.63 406h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M145.63 442h28v2h-28zM147.63 444h24v2h-24zM149.63 446h5v3h-5zM164.63 446h5v3h-5zM174 396a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M156.63 391h6v4h-6z"></path>
                            <path class="jcls-28" d="M145.3 391h28.67v64H145.3z"></path>
                            <path class="jcls-28" d="M145.3 391h28.67v64H145.3z"></path>
                            <path class="jcls-23" d="M112.03 404h24v38h-24z"></path>
                            <path class="jcls-17" d="M114.03 406h20v34h-20z"></path>
                            <path class="jcls-23" d="M112.03 413h24v2h-24z"></path>
                            <path class="jcls-23" d="M120.03 406h1v8h-1zM127.03 406h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M110.03 442h28v2h-28zM112.03 444h24v2h-24zM114.03 446h5v3h-5zM129.03 446h5v3h-5zM138.37 396a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M121.03 391h6v4h-6z"></path>
                            <path class="jcls-28" d="M109.7 391h28.67v64H109.7z"></path>
                            <path class="jcls-28" d="M109.7 391h28.67v64H109.7z"></path>
                            <path class="jcls-23" d="M76.43 404h24v38h-24z"></path>
                            <path class="jcls-17" d="M78.43 406h20v34h-20z"></path>
                            <path class="jcls-23" d="M76.43 413h24v2h-24z"></path>
                            <path class="jcls-23" d="M84.43 406h1v8h-1zM91.43 406h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M74.43 442h28v2h-28zM76.43 444h24v2h-24zM78.43 446h5v3h-5zM93.43 446h5v3h-5zM102.77 396a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M85.43 391h6v4h-6z"></path>
                            <path class="jcls-28" d="M74.1 391h28.67v64H74.1z"></path>
                            <path class="jcls-28" d="M74.1 391h28.67v64H74.1z"></path>
                            <path class="jcls-23" d="M40.83 404h24v38h-24z"></path>
                            <path class="jcls-17" d="M42.83 406h20v34h-20z"></path>
                            <path class="jcls-23" d="M40.83 413h24v2h-24z"></path>
                            <path class="jcls-23" d="M48.83 406h1v8h-1zM55.83 406h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M38.83 442h28v2h-28zM40.83 444h24v2h-24zM42.83 446h5v3h-5zM57.83 446h5v3h-5zM67.17 396a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M49.83 391h6v4h-6z"></path>
                            <path class="jcls-28" d="M38.5 391h28.67v64H38.5z"></path>
                            <path class="jcls-28" d="M38.5 391h28.67v64H38.5z"></path>
                            <path class="jcls-23" d="M218.83 473h24v38h-24z"></path>
                            <path class="jcls-17" d="M220.83 475h20v34h-20z"></path>
                            <path class="jcls-23" d="M218.83 482h24v2h-24z"></path>
                            <path class="jcls-23" d="M226.83 475h1v8h-1zM233.83 475h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M216.83 511h28v2h-28zM218.83 513h24v2h-24zM220.83 515h5v3h-5zM235.83 515h5v3h-5zM245.17 465a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M227.83 460h6v4h-6z"></path>
                            <path class="jcls-28" d="M216.5 460h28.67v64H216.5z"></path>
                            <path class="jcls-28" d="M216.5 460h28.67v64H216.5z"></path>
                            <path class="jcls-23" d="M183.23 473h24v38h-24z"></path>
                            <path class="jcls-17" d="M185.23 475h20v34h-20z"></path>
                            <path class="jcls-23" d="M183.23 482h24v2h-24z"></path>
                            <path class="jcls-23" d="M191.23 475h1v8h-1zM198.23 475h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M181.23 511h28v2h-28zM183.23 513h24v2h-24zM185.23 515h5v3h-5zM200.23 515h5v3h-5zM209.57 465a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M192.23 460h6v4h-6z"></path>
                            <path class="jcls-28" d="M180.9 460h28.67v64H180.9z"></path>
                            <path class="jcls-28" d="M180.9 460h28.67v64H180.9z"></path>
                            <path class="jcls-23" d="M147.63 473h24v38h-24z"></path>
                            <path class="jcls-17" d="M149.63 475h20v34h-20z"></path>
                            <path class="jcls-23" d="M147.63 482h24v2h-24z"></path>
                            <path class="jcls-23" d="M155.63 475h1v8h-1zM162.63 475h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M145.63 511h28v2h-28zM147.63 513h24v2h-24zM149.63 515h5v3h-5zM164.63 515h5v3h-5zM174 465a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M156.63 460h6v4h-6z"></path>
                            <path class="jcls-28" d="M145.3 460h28.67v64H145.3z"></path>
                            <path class="jcls-28" d="M145.3 460h28.67v64H145.3z"></path>
                            <path class="jcls-23" d="M112.03 473h24v38h-24z"></path>
                            <path class="jcls-17" d="M114.03 475h20v34h-20z"></path>
                            <path class="jcls-23" d="M112.03 482h24v2h-24z"></path>
                            <path class="jcls-23" d="M120.03 475h1v8h-1zM127.03 475h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M110.03 511h28v2h-28zM112.03 513h24v2h-24zM114.03 515h5v3h-5zM129.03 515h5v3h-5zM138.37 465a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M121.03 460h6v4h-6z"></path>
                            <path class="jcls-28" d="M109.7 460h28.67v64H109.7z"></path>
                            <path class="jcls-28" d="M109.7 460h28.67v64H109.7z"></path>
                            <path class="jcls-23" d="M76.43 473h24v38h-24z"></path>
                            <path class="jcls-17" d="M78.43 475h20v34h-20z"></path>
                            <path class="jcls-23" d="M76.43 482h24v2h-24z"></path>
                            <path class="jcls-23" d="M84.43 475h1v8h-1zM91.43 475h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M74.43 511h28v2h-28zM76.43 513h24v2h-24zM78.43 515h5v3h-5zM93.43 515h5v3h-5zM102.77 465a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M85.43 460h6v4h-6z"></path>
                            <path class="jcls-28" d="M74.1 460h28.67v64H74.1z"></path>
                            <path class="jcls-28" d="M74.1 460h28.67v64H74.1z"></path>
                            <path class="jcls-23" d="M40.83 473h24v38h-24z"></path>
                            <path class="jcls-17" d="M42.83 475h20v34h-20z"></path>
                            <path class="jcls-23" d="M40.83 482h24v2h-24z"></path>
                            <path class="jcls-23" d="M48.83 475h1v8h-1zM55.83 475h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M38.83 511h28v2h-28zM40.83 513h24v2h-24zM42.83 515h5v3h-5zM57.83 515h5v3h-5zM67.17 465a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M49.83 460h6v4h-6z"></path>
                            <path class="jcls-28" d="M38.5 460h28.67v64H38.5z"></path>
                            <path class="jcls-28" d="M38.5 460h28.67v64H38.5z"></path>
                            <path class="jcls-23" d="M218.83 542h24v38h-24z"></path>
                            <path class="jcls-17" d="M220.83 544h20v34h-20z"></path>
                            <path class="jcls-23" d="M218.83 551h24v2h-24z"></path>
                            <path class="jcls-23" d="M226.83 544h1v8h-1zM233.83 544h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M216.83 580h28v2h-28zM218.83 582h24v2h-24zM220.83 584h5v3h-5zM235.83 584h5v3h-5zM245.17 534a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M227.83 529h6v4h-6z"></path>
                            <path class="jcls-28" d="M216.5 529h28.67v64H216.5z"></path>
                            <path class="jcls-28" d="M216.5 529h28.67v64H216.5z"></path>
                            <path class="jcls-23" d="M183.23 542h24v38h-24z"></path>
                            <path class="jcls-17" d="M185.23 544h20v34h-20z"></path>
                            <path class="jcls-23" d="M183.23 551h24v2h-24z"></path>
                            <path class="jcls-23" d="M191.23 544h1v8h-1zM198.23 544h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M181.23 580h28v2h-28zM183.23 582h24v2h-24zM185.23 584h5v3h-5zM200.23 584h5v3h-5zM209.57 534a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M192.23 529h6v4h-6z"></path>
                            <path class="jcls-28" d="M180.9 529h28.67v64H180.9z"></path>
                            <path class="jcls-28" d="M180.9 529h28.67v64H180.9z"></path>
                            <path class="jcls-23" d="M147.63 542h24v38h-24z"></path>
                            <path class="jcls-17" d="M149.63 544h20v34h-20z"></path>
                            <path class="jcls-23" d="M147.63 551h24v2h-24z"></path>
                            <path class="jcls-23" d="M155.63 544h1v8h-1zM162.63 544h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M145.63 580h28v2h-28zM147.63 582h24v2h-24zM149.63 584h5v3h-5zM164.63 584h5v3h-5zM174 534a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M156.63 529h6v4h-6z"></path>
                            <path class="jcls-28" d="M145.3 529h28.67v64H145.3z"></path>
                            <path class="jcls-28" d="M145.3 529h28.67v64H145.3z"></path>
                            <path class="jcls-23" d="M112.03 542h24v38h-24z"></path>
                            <path class="jcls-17" d="M114.03 544h20v34h-20z"></path>
                            <path class="jcls-23" d="M112.03 551h24v2h-24z"></path>
                            <path class="jcls-23" d="M120.03 544h1v8h-1zM127.03 544h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M110.03 580h28v2h-28zM112.03 582h24v2h-24zM114.03 584h5v3h-5zM129.03 584h5v3h-5zM138.37 534a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M121.03 529h6v4h-6z"></path>
                            <path class="jcls-28" d="M109.7 529h28.67v64H109.7z"></path>
                            <path class="jcls-28" d="M109.7 529h28.67v64H109.7z"></path>
                            <path class="jcls-23" d="M76.43 542h24v38h-24z"></path>
                            <path class="jcls-17" d="M78.43 544h20v34h-20z"></path>
                            <path class="jcls-23" d="M76.43 551h24v2h-24z"></path>
                            <path class="jcls-23" d="M84.43 544h1v8h-1zM91.43 544h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M74.43 580h28v2h-28zM76.43 582h24v2h-24zM78.43 584h5v3h-5zM93.43 584h5v3h-5zM102.77 534a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M85.43 529h6v4h-6z"></path>
                            <path class="jcls-28" d="M74.1 529h28.67v64H74.1z"></path>
                            <path class="jcls-28" d="M74.1 529h28.67v64H74.1z"></path>
                            <path class="jcls-23" d="M40.83 542h24v38h-24z"></path>
                            <path class="jcls-17" d="M42.83 544h20v34h-20z"></path>
                            <path class="jcls-23" d="M40.83 551h24v2h-24z"></path>
                            <path class="jcls-23" d="M48.83 544h1v8h-1zM55.83 544h1v8h-1z"></path>
                            <path class="jcls-1"
                                d="M38.83 580h28v2h-28zM40.83 582h24v2h-24zM42.83 584h5v3h-5zM57.83 584h5v3h-5zM67.17 534a37.12 37.12 0 0 0-28.67 0l2.33 8h24z">
                            </path>
                            <path class="jcls-1" d="M49.83 529h6v4h-6z"></path>
                            <path class="jcls-28" d="M38.5 529h28.67v64H38.5z"></path>
                            <path class="jcls-28" d="M38.5 529h28.67v64H38.5z"></path>
                            <path class="jcls-16"
                                d="M563.5 674h40v-8.71a1.29 1.29 0 0 0-1.29-1.29h-37.42a1.29 1.29 0 0 0-1.29 1.29zM565.5 664h36v-.95a1.05 1.05 0 0 0-1.05-1.05h-33.9a1.05 1.05 0 0 0-1.05 1.05zM567.5 662h32v-1.12a1.88 1.88 0 0 0-1.88-1.88h-28.24a1.88 1.88 0 0 0-1.88 1.88zM629.5 674h40v-8.71a1.29 1.29 0 0 0-1.29-1.29h-37.42a1.29 1.29 0 0 0-1.29 1.29zM631.5 664h36v-.95a1.05 1.05 0 0 0-1.05-1.05h-33.9a1.05 1.05 0 0 0-1.05 1.05zM633.5 662h32v-1.12a1.88 1.88 0 0 0-1.88-1.88h-28.24a1.88 1.88 0 0 0-1.88 1.88zM372.5 674h40v-8.71a1.29 1.29 0 0 0-1.29-1.29h-37.42a1.29 1.29 0 0 0-1.29 1.29zM374.5 664h36v-.95a1.05 1.05 0 0 0-1.05-1.05h-33.9a1.05 1.05 0 0 0-1.05 1.05zM376.5 662h32v-1.12a1.88 1.88 0 0 0-1.88-1.88h-28.24a1.88 1.88 0 0 0-1.88 1.88z">
                            </path>
                            <path class="jcls-1" d="M527.5 68h38v491h-38z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M560.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M560.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M534.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M534.5 340h24v2h-24zM534.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 546.5 358)" d="M528.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 557.5 358)" d="M539.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 535.5 358)" d="M517.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M534.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M560.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M560.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M534.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M534.5 419h24v2h-24zM534.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 546.5 437)" d="M528.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 557.5 437)" d="M539.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 535.5 437)" d="M517.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M534.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M560.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M534.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M534.5 498h24v2h-24zM534.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 546.5 516)" d="M528.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 557.5 516)" d="M539.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 535.5 516)" d="M517.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M534.5 529.58h24V550h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M560.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M560.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M534.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M534.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 546.5 279)" d="M528.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 557.5 279)" d="M539.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 535.5 279)" d="M517.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M534.5 292.58h24V313h-24z"></path>
                            <path class="jcls-23" d="M534.5 261h24v2h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 240.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M560.5 241v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 147.5h29v20h-29z"></path>
                                <path class="jcls-25" d="M560.5 148v19h-28v-19h28m1-1h-30v21h30v-21z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 77.5h29v67h-29z"></path>
                                <path class="jcls-25" d="M560.5 78v66h-28V78h28m1-1h-30v68h30V77z"></path>
                            </g>
                            <path class="jcls-17" d="M534.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M534.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 546.5 101)" d="M525.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 557.5 101)" d="M536.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 535.5 101)" d="M514.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-9" d="M534.5 121.58h24V142h-24z"></path>
                            <path class="jcls-23" d="M534.5 80h24v2h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M532 170.5h29v67h-29z"></path>
                                <path class="jcls-25" d="M560.5 171v66h-28v-66h28m1-1h-30v68h30v-68z"></path>
                            </g>
                            <path class="jcls-17" d="M534.5 173h24v52h-24z"></path>
                            <path class="jcls-23" d="M534.5 187h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 546.5 194)" d="M525.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 557.5 194)" d="M536.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 535.5 194)" d="M514.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-9" d="M534.5 214.58h24V235h-24z"></path>
                            <path class="jcls-23" d="M534.5 173h24v2h-24z"></path>
                            <path class="jcls-1" d="M468.5 68h38v491h-38z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M501.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M501.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M475.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M475.5 340h24v2h-24zM475.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 487.5 358)" d="M469.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 498.5 358)" d="M480.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 476.5 358)" d="M458.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M475.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M501.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M501.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M475.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M475.5 419h24v2h-24zM475.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 487.5 437)" d="M469.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 498.5 437)" d="M480.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 476.5 437)" d="M458.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M475.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M501.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M475.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M475.5 498h24v2h-24zM475.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 487.5 516)" d="M469.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 498.5 516)" d="M480.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 476.5 516)" d="M458.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M475.5 529.58h24V550h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M501.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M501.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M475.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M475.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 487.5 279)" d="M469.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 498.5 279)" d="M480.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 476.5 279)" d="M458.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M475.5 292.58h24V313h-24z"></path>
                            <path class="jcls-23" d="M475.5 261h24v2h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 240.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M501.5 241v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 147.5h29v20h-29z"></path>
                                <path class="jcls-25" d="M501.5 148v19h-28v-19h28m1-1h-30v21h30v-21z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 77.5h29v67h-29z"></path>
                                <path class="jcls-25" d="M501.5 78v66h-28V78h28m1-1h-30v68h30V77z"></path>
                            </g>
                            <path class="jcls-17" d="M475.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M475.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 487.5 101)" d="M466.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 498.5 101)" d="M477.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 476.5 101)" d="M455.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-9" d="M475.5 121.58h24V142h-24z"></path>
                            <path class="jcls-23" d="M475.5 80h24v2h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M473 170.5h29v67h-29z"></path>
                                <path class="jcls-25" d="M501.5 171v66h-28v-66h28m1-1h-30v68h30v-68z"></path>
                            </g>
                            <path class="jcls-17" d="M475.5 173h24v52h-24z"></path>
                            <path class="jcls-23" d="M475.5 187h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 487.5 194)" d="M466.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 498.5 194)" d="M477.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 476.5 194)" d="M455.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-9" d="M475.5 214.58h24V235h-24z"></path>
                            <path class="jcls-23" d="M475.5 173h24v2h-24z"></path>
                            <path class="jcls-1" d="M409.5 68h38v491h-38z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 397.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M442.5 398v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 337.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M442.5 338v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M416.5 340h24v52h-24z"></path>
                            <path class="jcls-23" d="M416.5 340h24v2h-24zM416.5 354h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 428.5 358)" d="M410.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 439.5 358)" d="M421.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 417.5 358)" d="M399.5 357h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M416.5 371.58h24V392h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 476.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M442.5 477v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 416.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M442.5 417v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M416.5 419h24v52h-24z"></path>
                            <path class="jcls-23" d="M416.5 419h24v2h-24zM416.5 433h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 428.5 437)" d="M410.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 439.5 437)" d="M421.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 417.5 437)" d="M399.5 436h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M416.5 450.58h24V471h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 495.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M442.5 496v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M416.5 498h24v52h-24z"></path>
                            <path class="jcls-23" d="M416.5 498h24v2h-24zM416.5 512h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 428.5 516)" d="M410.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 439.5 516)" d="M421.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 417.5 516)" d="M399.5 515h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M416.5 529.58h24V550h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 318.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M442.5 319v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 258.5h29v57h-29z"></path>
                                <path class="jcls-25" d="M442.5 259v56h-28v-56h28m1-1h-30v58h30v-58z"></path>
                            </g>
                            <path class="jcls-17" d="M416.5 261h24v52h-24z"></path>
                            <path class="jcls-23" d="M416.5 275h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 428.5 279)" d="M410.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 439.5 279)" d="M421.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 417.5 279)" d="M399.5 278h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M416.5 292.58h24V313h-24z"></path>
                            <path class="jcls-23" d="M416.5 261h24v2h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 240.5h29v15h-29z"></path>
                                <path class="jcls-25" d="M442.5 241v14h-28v-14h28m1-1h-30v16h30v-16z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 147.5h29v20h-29z"></path>
                                <path class="jcls-25" d="M442.5 148v19h-28v-19h28m1-1h-30v21h30v-21z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 77.5h29v67h-29z"></path>
                                <path class="jcls-25" d="M442.5 78v66h-28V78h28m1-1h-30v68h30V77z"></path>
                            </g>
                            <path class="jcls-17" d="M416.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M416.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 428.5 101)" d="M407.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 439.5 101)" d="M418.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 417.5 101)" d="M396.5 100h42v2h-42z">
                            </path>
                            <path class="jcls-9" d="M416.5 121.58h24V142h-24z"></path>
                            <path class="jcls-23" d="M416.5 80h24v2h-24z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M414 170.5h29v67h-29z"></path>
                                <path class="jcls-25" d="M442.5 171v66h-28v-66h28m1-1h-30v68h30v-68z"></path>
                            </g>
                            <path class="jcls-17" d="M416.5 173h24v52h-24z"></path>
                            <path class="jcls-23" d="M416.5 187h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 428.5 194)" d="M407.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 439.5 194)" d="M418.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 417.5 194)" d="M396.5 193h42v2h-42z">
                            </path>
                            <path class="jcls-9" d="M416.5 214.58h24V235h-24z"></path>
                            <path class="jcls-23" d="M416.5 173h24v2h-24z"></path>
                            <path class="jcls-1" d="M450.5 74h15v479h-15z"></path>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M454.5 79h-1v469h1V79z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M457.17 79h-1v469h1V79z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M459.83 79h-1v469h1V79z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M462.5 79h-1v469h1V79z"></path>
                            </g>
                            <path class="jcls-1" d="M509.5 74h15v479h-15z"></path>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M513.5 79h-1v469h1V79z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M516.17 79h-1v469h1V79z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M518.83 79h-1v469h1V79z"></path>
                            </g>
                            <g class="jcls-24">
                                <path class="jcls-25" d="M521.5 79h-1v469h1V79z"></path>
                            </g>
                            <path class="jcls-29" d="M405.5 235h10v324h-10z"></path>
                            <path class="jcls-1"
                                d="M75.5 245h330v3h-330zM73.5 241h334v4h-334zM72.5 237h336v4h-336zM70.5 235h340v2h-340z">
                            </path>
                            <path class="jcls-5" d="M77.5 248h328v1h-328z"></path>
                            <path class="jcls-6"
                                d="M75.5 245h330v1h-330zM73.5 241h334v1h-334zM72.5 237h336v1h-336z"></path>
                            <path class="jcls-1"
                                d="M118.5 149h287v3h-287zM116.5 145h289v4h-289zM115.5 141h290v4h-290zM113.5 139h292v2h-292z">
                            </path>
                            <path class="jcls-5" d="M120.5 152h285v1h-285z"></path>
                            <path class="jcls-6"
                                d="M118.5 149h287v1h-287zM116.5 145h289v1h-289zM115.5 141h290v1h-290z"></path>
                            <path class="jcls-30" d="M662.5 143h12v416h-12z"></path>
                            <path class="jcls-31" d="M561.5 143h9v416h-9z"></path>
                            <path class="jcls-1"
                                d="M568.5 245h269v3h-269zM566.5 241h273v4h-273zM565.5 237h275v4h-275zM563.5 235h279v2h-279z">
                            </path>
                            <path class="jcls-5" d="M570.5 248h267v1h-267z"></path>
                            <path class="jcls-6"
                                d="M568.5 245h269v1h-269zM566.5 241h273v1h-273zM565.5 237h275v1h-275z"></path>
                            <path class="jcls-32" d="M676.07 248l5.43-13H672v2h-2.71v4h-1.36v4h-2.71v3h10.85z">
                            </path>
                            <path class="jcls-1"
                                d="M568.5 149h269v3h-269zM566.5 145h273v4h-273zM565.5 141h275v4h-275zM563.5 139h279v2h-279z">
                            </path>
                            <path class="jcls-5" d="M570.5 152h267v1h-267z"></path>
                            <path class="jcls-6"
                                d="M568.5 149h269v1h-269zM566.5 145h273v1h-273zM565.5 141h275v1h-275z"></path>
                            <path class="jcls-1"
                                d="M403.5 16h169v3h-169zM400.5 12h175v4h-175zM398.5 8h179v4h-179zM397.5 4h181v4h-181zM395.5 2h185v2h-185z">
                            </path>
                            <path class="jcls-5" d="M405.5 19h167v1h-167z"></path>
                            <path class="jcls-6"
                                d="M400.5 12h175v1h-175zM403.5 16h169v1h-169zM398.5 8h179v1h-179zM397.5 4h181v1h-181z">
                            </path>
                            <path class="jcls-33" d="M676.07 152l5.43-13H672v2h-2.71v4h-1.36v4h-2.71v3h10.85z">
                            </path>
                            <path class="jcls-14"
                                d="M431.77 49.9a2.06 2.06 0 0 1 1.87 1.91c0 1.39-1.35 2.19-2.85 2.19h-1.54v-7.86h1.1c1.67 0 2.58.74 2.58 1.83a2.18 2.18 0 0 1-1.16 1.93zm-.26-.05a2.19 2.19 0 0 0 .63-1.38 1.91 1.91 0 0 0-2-1.95v3.3h.93zm-.29 3.76a3.66 3.66 0 0 0 1.11-.16 2.61 2.61 0 0 0 .39-1.44 2 2 0 0 0-1.84-1.8h-.74v3.4zM443.17 54L442 51h-2.58l-1.2 3h-.48l3.17-7.93h.08l3.15 7.93zm-3.63-3.43h2.25l-1.13-2.82zM449.51 46.14c2 0 2.65 1 2.65 2.14a2.14 2.14 0 0 1-1.33 2c.39.45 1.76 2 2.45 2.62a3.84 3.84 0 0 0 1.31.87v.2a3 3 0 0 1-.51 0 2.18 2.18 0 0 1-1.38-.51 21 21 0 0 1-2.7-2.93 5.4 5.4 0 0 1-1.17.09V54h-.89v-7.86zm-.72 4.2c1.74 0 2.45-.7 2.45-1.88a1.85 1.85 0 0 0-2-1.91h-.48zM463.17 46.14l-3.73 3.55 4.23 4.31h-1.21l-3.95-4v4h-.89v-7.86h.89V50l4-3.86zM468.21 53.6h3.14v.4h-4v-7.86h.89zM476 46.14V54h-.89v-7.86zM492 47.33a3.06 3.06 0 0 0-2.32-.93c-2 0-3.23 1.29-3.23 3.48a3.51 3.51 0 0 0 3.67 3.74 4.23 4.23 0 0 0 1.41-.26v-3h.89V53a4 4 0 0 1-6.88-2.66 4 4 0 0 1 4.07-4.34 3.93 3.93 0 0 1 2.38.61zM501.56 54l-1.21-3h-2.58l-1.2 3h-.48l3.17-7.93h.08l3.19 7.93zm-3.63-3.43h2.25L499 47.75zM507.34 53.6h3.14v.4h-4v-7.86h.89zM515.06 53.6h3.14v.4h-4v-7.86h.89zM524.62 50.28h-2v3.32h2.73v.4h-3.62v-7.86h3.62v.41h-2.73v3.32h2zM530.79 46.14c2 0 2.65 1 2.65 2.14a2.14 2.14 0 0 1-1.33 2c.39.45 1.76 2 2.45 2.62a3.84 3.84 0 0 0 1.31.87v.2a3 3 0 0 1-.51 0 2.18 2.18 0 0 1-1.38-.51 21 21 0 0 1-2.7-2.93 5.4 5.4 0 0 1-1.17.09V54h-.89v-7.86zm-.72 4.2c1.74 0 2.45-.7 2.45-1.88a1.85 1.85 0 0 0-2-1.91h-.48zM538.78 46.14l2.07 3.86 2.07-3.84h.5l-2.34 4.33V54h-.89v-3.5l-2.42-4.36z">
                            </path>
                            <path class="jcls-1" d="M570.5 68h259v4h-259zM585.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M591.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M584.5 48h7v4h-7zM613.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M619.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M612.5 48h7v4h-7zM641.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M647.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M640.5 48h7v4h-7zM669.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M675.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M668.5 48h7v4h-7zM697.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M703.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M696.5 48h7v4h-7zM725.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M731.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M724.5 48h7v4h-7zM753.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M759.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M752.5 48h7v4h-7zM781.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M787.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M780.5 48h7v4h-7zM809.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M815.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M808.5 48h7v4h-7zM116.5 68h289v4h-289zM148.5 64h5v4h-5z">
                            </path>
                            <path class="jcls-8"
                                d="M154.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M147.5 48h7v4h-7zM176.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M182.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M175.5 48h7v4h-7zM204.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M210.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M203.5 48h7v4h-7zM232.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M238.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M231.5 48h7v4h-7zM260.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M266.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M259.5 48h7v4h-7zM288.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M294.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M287.5 48h7v4h-7zM316.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M322.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M315.5 48h7v4h-7zM344.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M350.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1" d="M343.5 48h7v4h-7zM372.5 64h5v4h-5z"></path>
                            <path class="jcls-8"
                                d="M378.5 53h-7l.19.94a41.78 41.78 0 0 1 .81 8.2V63h5v-.87a41.78 41.78 0 0 1 .81-8.2z">
                            </path>
                            <path class="jcls-1"
                                d="M371.5 48h7v4h-7zM60.5 42h345v3h-345zM57.5 39h348v3h-348zM55.5 35h350v4h-350zM53.5 33h352v2h-352z">
                            </path>
                            <path class="jcls-5" d="M77.5 48h328v1h-328z"></path>
                            <path class="jcls-6" d="M60.5 42h345v1h-345z"></path>
                            <path class="jcls-1" d="M57.5 45h348v3h-348z"></path>
                            <path class="jcls-6" d="M57.5 45h348v1h-348zM57.5 39h348v1h-348zM55.5 35h350v1h-350z">
                            </path>
                            <path class="jcls-1" transform="rotate(-180 703.5 43.5)" d="M570.5 42h266v3h-266z">
                            </path>
                            <path class="jcls-1" transform="rotate(-180 705 40.5)" d="M570.5 39h269v3h-269z">
                            </path>
                            <path class="jcls-1" transform="rotate(-180 706 37)" d="M570.5 35h271v4h-271z">
                            </path>
                            <path class="jcls-1" transform="rotate(-180 707 34)" d="M570.5 33h273v2h-273z">
                            </path>
                            <path class="jcls-5" transform="rotate(-180 699.5 48.5)" d="M570.5 48h258v1h-258z">
                            </path>
                            <path class="jcls-6" transform="rotate(-180 703.5 42.5)" d="M570.5 42h266v1h-266z">
                            </path>
                            <path class="jcls-1" transform="rotate(-180 705 46.5)" d="M570.5 45h269v3h-269z">
                            </path>
                            <path class="jcls-6" transform="rotate(-180 705 45.5)" d="M570.5 45h269v1h-269z">
                            </path>
                            <path class="jcls-6" transform="rotate(-180 705 39.5)" d="M570.5 39h269v1h-269z">
                            </path>
                            <path class="jcls-6" transform="rotate(-180 706 35.5)" d="M570.5 35h271v1h-271z">
                            </path>
                            <path class="jcls-3" d="M836.5 48h-16v20h4v-5a11 11 0 0 1 11-11h1z"></path>
                            <path class="jcls-8" d="M77.5 6h14v27h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M81 12.5h7v17h-7z"></path>
                                <path class="jcls-25" d="M87.5 13v16h-6V13h6m1-1h-8v18h8V12z"></path>
                            </g>
                            <path class="jcls-6" d="M77.5 8h14v1h-14z"></path>
                            <path class="jcls-8" d="M122.5 6h14v27h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M126 12.5h7v17h-7z"></path>
                                <path class="jcls-25" d="M132.5 13v16h-6V13h6m1-1h-8v18h8V12z"></path>
                            </g>
                            <path class="jcls-6" d="M122.5 8h14v1h-14z"></path>
                            <path class="jcls-8" d="M805.5 6h14v27h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M809 12.5h7v17h-7z"></path>
                                <path class="jcls-25" d="M815.5 13v16h-6V13h6m1-1h-8v18h8V12z"></path>
                            </g>
                            <path class="jcls-6" d="M805.5 8h14v1h-14z"></path>
                            <path class="jcls-8" d="M821.5 118h14v21h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M825 125.5h7v10h-7z"></path>
                                <path class="jcls-25" d="M831.5 126v9h-6v-9h6m1-1h-8v11h8v-11z"></path>
                            </g>
                            <path class="jcls-6" d="M821.5 121h14v1h-14z"></path>
                            <path class="jcls-8" d="M648.5 118h14v21h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M652 125.5h7v10h-7z"></path>
                                <path class="jcls-25" d="M658.5 126v9h-6v-9h6m1-1h-8v11h8v-11z"></path>
                            </g>
                            <path class="jcls-6" d="M648.5 121h14v1h-14z"></path>
                            <path class="jcls-8" d="M570.5 118h14v21h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M574 125.5h7v10h-7z"></path>
                                <path class="jcls-25" d="M580.5 126v9h-6v-9h6m1-1h-8v11h8v-11z"></path>
                            </g>
                            <path class="jcls-6" d="M570.5 121h14v1h-14z"></path>
                            <path class="jcls-8" d="M79.5 214h14v21h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M83 221.5h7v10h-7z"></path>
                                <path class="jcls-25" d="M89.5 222v9h-6v-9h6m1-1h-8v11h8v-11z"></path>
                            </g>
                            <path class="jcls-6" d="M79.5 217h14v1h-14z"></path>
                            <path class="jcls-8" d="M389.5 214h14v21h-14z"></path>
                            <g class="jcls-24">
                                <path class="jcls-1" d="M393 221.5h7v10h-7z"></path>
                                <path class="jcls-25" d="M399.5 222v9h-6v-9h6m1-1h-8v11h8v-11z"></path>
                            </g>
                            <path class="jcls-6" d="M389.5 217h14v1h-14z"></path>
                            <path class="jcls-34" d="M396.5 48h9v187h-9z"></path>
                            <path class="jcls-35" d="M570.5 48h9v91h-9z"></path>
                            <path class="jcls-1" d="M651.5 153h8v82h-8zM573.5 153h8v82h-8z"></path>
                            <path class="jcls-36"
                                d="M645.5 235v-59.09a15.46 15.46 0 0 0-12.26-15.22 83.89 83.89 0 0 0-33.48 0 15.46 15.46 0 0 0-12.26 15.22V235">
                            </path>
                            <path class="jcls-1" d="M674.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M677.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M677.5 176h24v2h-24zM677.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 689.5 194)" d="M671.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 700.5 194)" d="M682.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 678.5 194)" d="M660.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M677.5 207.58h24V228h-24z"></path>
                            <path class="jcls-1" d="M674.5 77h30v63h-30z"></path>
                            <path class="jcls-17" d="M677.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M677.5 80h24v2h-24zM677.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 689.5 99.5)" d="M670 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 700.5 99.5)" d="M681 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 678.5 99.5)" d="M659 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M677.5 118.58h24V139h-24z"></path>
                            <path class="jcls-1" d="M726.5 77h30v63h-30z"></path>
                            <path class="jcls-17" d="M729.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M729.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 741.5 99.5)" d="M722 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 752.5 99.5)" d="M733 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 730.5 99.5)" d="M711 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M729.5 118.58h24V139h-24z"></path>
                            <path class="jcls-1" d="M778.5 77h30v63h-30z"></path>
                            <path class="jcls-17" d="M781.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M781.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 793.5 99.5)" d="M774 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 804.5 99.5)" d="M785 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 782.5 99.5)" d="M763 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M781.5 118.58h24V139h-24z"></path>
                            <path class="jcls-1" d="M726.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M729.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M729.5 176h24v2h-24zM729.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 741.5 194)" d="M723.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 752.5 194)" d="M734.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 730.5 194)" d="M712.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M729.5 207.58h24V228h-24z"></path>
                            <path class="jcls-1" d="M778.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M781.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M781.5 176h24v2h-24zM781.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 793.5 194)" d="M775.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 804.5 194)" d="M786.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 782.5 194)" d="M764.5 193h36v2h-36z">
                            </path>
                            <path class="jcls-9" d="M781.5 207.58h24V228h-24z"></path>
                            <path class="jcls-23" d="M729.5 80h24v2h-24zM781.5 80h24v2h-24z"></path>
                            <path class="jcls-1" d="M209 70h5v69h-5zM252 70h5v69h-5zM218 77h30v63h-30z">
                            </path>
                            <path class="jcls-17" d="M221 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M221 80h24v2h-24zM221 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 233 99.5)" d="M213.5 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 244 99.5)" d="M224.5 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 222 99.5)" d="M202.5 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M221 118.58h24V139h-24z"></path>
                            <path class="jcls-1" d="M148.5 70h5v69h-5zM191.5 70h5v69h-5zM157.5 77h30v63h-30z">
                            </path>
                            <path class="jcls-17" d="M160.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M160.5 80h24v2h-24zM160.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 172.5 99.5)" d="M153 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 183.5 99.5)" d="M164 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 161.5 99.5)" d="M142 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M160.5 118.58h24V139h-24z"></path>
                            <path class="jcls-1" d="M268.5 70h5v69h-5zM313.5 70h5v69h-5zM278.5 77h30v63h-30z">
                            </path>
                            <path class="jcls-17" d="M281.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M281.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 293.5 99.5)" d="M274 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 304.5 99.5)" d="M285 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 282.5 99.5)" d="M263 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M281.5 118.58h24V139h-24z"></path>
                            <path class="jcls-23" d="M281.5 80h24v2h-24z"></path>
                            <path class="jcls-1" d="M330.5 70h5v69h-5zM372.5 70h5v69h-5zM339.5 77h30v63h-30z">
                            </path>
                            <path class="jcls-17" d="M342.5 80h24v52h-24z"></path>
                            <path class="jcls-23" d="M342.5 94h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 354.5 99.5)" d="M335 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 365.5 99.5)" d="M346 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 343.5 99.5)" d="M324 98.5h39v2h-39z">
                            </path>
                            <path class="jcls-9" d="M342.5 118.58h24V139h-24z"></path>
                            <path class="jcls-23" d="M342.5 80h24v2h-24z"></path>
                            <path class="jcls-37" d="M720.5 235v-69h42v69M772.5 235v-69h42v69"></path>
                            <path class="jcls-1" d="M346.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M349.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M349.5 176h24v2h-24zM349.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 361.5 195.5)" d="M342 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 372.5 195.5)" d="M353 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 350.5 195.5)" d="M331 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-37" d="M340.5 235v-69h42v69"></path>
                            <path class="jcls-1" d="M285.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M288.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M288.5 176h24v2h-24zM288.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 300.5 195.5)" d="M281 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 311.5 195.5)" d="M292 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 289.5 195.5)" d="M270 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-37" d="M279.5 235v-69h42v69"></path>
                            <path class="jcls-1" d="M226.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M229.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M229.5 176h24v2h-24zM229.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 241.5 195.5)" d="M222 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 252.5 195.5)" d="M233 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 230.5 195.5)" d="M211 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-37" d="M220.5 235v-69h42v69"></path>
                            <path class="jcls-1" d="M166.5 173h30v58h-30z"></path>
                            <path class="jcls-17" d="M169.5 176h24v52h-24z"></path>
                            <path class="jcls-23" d="M169.5 176h24v2h-24zM169.5 190h24v2h-24z"></path>
                            <path class="jcls-23" transform="rotate(90 181.5 195.5)" d="M162 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 192.5 195.5)" d="M173 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-23" transform="rotate(90 170.5 195.5)" d="M151 194.5h39v2h-39z">
                            </path>
                            <path class="jcls-37" d="M160.5 235v-69h42v69M668.5 235v-69h42v69"></path>
                            <path class="jcls-9" d="M93.5 214.58h296V235h-296z"></path>
                            <path class="jcls-38" d="M78.5 33h24v15h-24z"></path>
                            <path class="jcls-1"
                                d="M102.5 42h303v3h-303zM99.5 39h306v3h-306zM97.5 35h308v4h-308zM95.5 33h310v2h-310z">
                            </path>
                            <path class="jcls-6" d="M102.5 42h303v1h-303z"></path>
                            <path class="jcls-1" d="M99.5 45h306v3h-306z"></path>
                            <path class="jcls-6" d="M99.5 45h306v1h-306zM99.5 39h306v1h-306zM97.5 35h308v1h-308z">
                            </path>
                            <path class="jcls-16" d="M753.16 600h-25.32l-3.34-13 16-3.25 16 3.25-3.34 13z">
                            </path>
                            <path class="jcls-39" d="M749.2 600h-17.4l-2.3-14.4 11-3.6 11 3.6-2.3 14.4z">
                            </path>
                            <path class="jcls-16" d="M748.45 600h-15.9l-2.05-16.51 10-2.49 10 2.49-2.05 16.51z">
                            </path>
                            <path class="jcls-39" d="M744.3 600h-7.6l-1.2-21h10l-1.2 21z"></path>
                            <path class="jcls-16"
                                d="M743.5 600h-6l-.94-21h7.88l-.94 21zM500.16 600h-25.32l-3.34-13 16-3.25 16 3.25-3.34 13z">
                            </path>
                            <path class="jcls-39" d="M496.2 600h-17.4l-2.3-14.4 11-3.6 11 3.6-2.3 14.4z">
                            </path>
                            <path class="jcls-16" d="M495.45 600h-15.9l-2.05-16.51 10-2.49 10 2.49-2.05 16.51z">
                            </path>
                            <path class="jcls-39" d="M491.31 600h-7.62l-1.19-21h10l-1.19 21z"></path>
                            <path class="jcls-16"
                                d="M490.5 600h-6l-.94-21h7.88l-.94 21zM624.45 600h-15.9l-2.05-16.51 10-2.49 10 2.49-2.05 16.51z">
                            </path>
                            <path class="jcls-39" d="M620.3 600h-7.6l-1.2-21h10l-1.2 21z"></path>
                            <path class="jcls-16"
                                d="M619.5 600h-6l-.94-21h7.88l-.94 21zM346.16 600h-25.32l-3.34-13 16-3.25 16 3.25-3.34 13z">
                            </path>
                            <path class="jcls-39" d="M342.2 600h-17.4l-2.3-14.4 11-3.6 11 3.6-2.3 14.4z">
                            </path>
                            <path class="jcls-16" d="M341.45 600h-15.9l-2.05-16.51 10-2.49 10 2.49-2.05 16.51z">
                            </path>
                            <path class="jcls-39" d="M337.31 600h-7.62l-1.19-21h10l-1.19 21z"></path>
                            <path class="jcls-16" d="M336.5 600h-6l-.94-21h7.88l-.94 21z"></path>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M270.5 663h31v1h-31z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M270.5 661h29v1h-29z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M365.5 663h84v1h-84z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M367.5 661h80v1h-80z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M525.5 663h76v1h-76z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M527.5 661h72v1h-72z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M631.5 663h76v1h-76z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M633.5 661h72v1h-72z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M772.5 663h72v1h-72z"></path>
                            </g>
                            <g class="jcls-40">
                                <path class="jcls-39" d="M774.5 661h68v1h-68z"></path>
                            </g>
                            <path class="jcls-41" d="M405.5 25.5h165M405.5 30.5h165"></path>
                        </g>
                    </g>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5 525h259v72h-259zM270.5 484h567v75h-567z"></path>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f3" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5 454h259v71h-259zM270.5 403h567v81h-567z"></path>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f3a" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5 383h259v71h-259z"></path>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f4" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.5 326v1h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v3h268v2h-2v4h-1v4h-2v3h-4v20h567v-77h-827z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f5" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M75.5 248v-3h-65v2h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v6h1v2h-1v5h827v-78h-762z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f6" xmlns="http://www.w3.org/2000/svg">
                    <path d="M120.38 152v4.88H11.5V235h399v2h-2v4h-1v4h-2v3h163v-3h-2v-4h-1v-4h-2v-2h274v-83H120.38z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 850 680" id="home-hover-f7" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M570.5 48V19h-165v29h-371v98h82v-1h-1v-4h-2v-2h292v13h163v-3h-2v-4h-1v-4h-2v-2h272v-21H829V68h-4.5v-5a11 11 0 0 1 11-11h1v-4z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 86 24" id="logo-barkli" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M82 0l-4 7.501L82 15l4-7.499L82 0M6.357 17.688h-3.42v4.142h3.377c1.427 0 2.748-.38 2.748-2.013s-1.405-2.13-2.705-2.13zm0-5.537h-3.42v3.424H6.23c1.195 0 2.33-.338 2.33-1.73 0-1.337-1.05-1.694-2.203-1.694zM6.441 24H0V10h6.837c2.498 0 4.68.875 4.68 3.544 0 1.414-.714 2.391-2.224 2.95C10.887 16.93 12 17.946 12 19.839 12 23.185 9.44 24 6.44 24zm13.58-11.193l-2.063 5.975h4.085l-2.022-5.975zM23.855 24l-1.082-3.047H17.23L16.148 24H13l5.5-14h3.084L27 24h-3.145zm10.197-11.83h-3.13v4.264h3.026c1.42 0 2.86-.301 2.86-2.133 0-1.733-1.294-2.131-2.756-2.131zM36.662 24l-3.256-5.456h-2.484V24H28V10h6.45c2.9 0 5.28 1.057 5.28 4.242 0 2.192-1.252 3.386-3.36 3.942L40 24h-3.338zm14.881 0l-4.093-6.65-2.482 2.627V24H42V10h2.968v6.553L50.801 10h3.648l-4.985 5.255L55 24h-3.457M57 24V10h2.994v11.614H67V24H57m11 0h3V10h-3z"
                        fill-rule="evenodd"></path>
                </symbol>
                <symbol viewBox="0 0 1440 780" id="map-layer-1" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <path id="sa" d="M0 0h1440v780H0z"></path>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#F8FFFF"
                            d="M1079.238-4.226l-52.53 28.755c-10.822 7.028-18.913 16.89-24.273 29.583-5.36 12.694-7.574 22.79-6.641 30.288l10.719 71.686c43.84-6.468 78.478-9.852 103.913-10.153 25.435-.3 68.635 3.084 129.598 10.153l18.447-160.312h-179.233z">
                        </path>
                        <mask id="sb" fill="#fff">
                            <use xlink:href="#sa"></use>
                        </mask>
                        <use fill="#FFF" fill-opacity="0" xlink:href="#sa"></use>
                        <g mask="url(#sb)">
                            <g transform="translate(522 -32)">
                                <path fill="#F8FFFF"
                                    d="M276.178 701.173l49.365-9.844-36.657-65.336 2.42 14.752zM150.656 864.863l14.125-38.555a533.652 533.652 0 0 1 47.84-98.126l1.937-3.118a19.543 19.543 0 0 0 1.681-17.233l-21.25-55.65-64.017 53.036L13.64 826.162l59.333 19.334 77.684 19.367z">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M.212 255.494l58.115 17.66a75.077 75.077 0 0 1 42.836 33.687L285.98 620.134a45.525 45.525 0 0 1 4.19 36.88l-56.863 179.481">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M393.7 816.496L283.25 613.662m-88.26 38.52l21.25 55.648a19.545 19.545 0 0 1-1.682 17.234l-1.937 3.118a533.621 533.621 0 0 0-47.84 98.126l-14.125 38.555">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M30.906 528.234l115.12 54.731a349.555 349.555 0 0 1 46.512 26.637 121.617 121.617 0 0 1 36.654 39.24l41.214 70.548m314.9-708.74l-76.964 44.254c-24.705 14.205-38.075 42.188-33.605 70.333l110.569 696.259">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M493.374 242.604l98.712 141.358a350.998 350.998 0 0 1 63.22 200.954v251.58">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M441.413 614.272L326.546 425.596m-65.573 92.594l44.06 53.089a526.262 526.262 0 0 1 111.625 235.642l4.647 23.908">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M385.994 707.923l100.45-32.838a66.502 66.502 0 0 1 29.928-2.645l45.4 6.38M352.53 640.354l94.9-27.849a62.215 62.215 0 0 1 17.525-2.526h85.077m-213.06-338.237l16.037 35.89c7.121 15.94 3.087 34.656-9.969 46.247l-6.067 5.386">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M195.276 466.377l137.348-104.314c16.775-12.74 41.006-7.032 50.33 11.857l8.019 16.241M11.284 258.858L52.737 123.72a105.315 105.315 0 0 1 17.215-33.331l61.354-79.738">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M518.067 277.964l38.847-4.716a77.568 77.568 0 0 1 24.632.954l207.11 41.599a247.684 247.684 0 0 1 149.359 94.202l16.107 21.47a320.478 320.478 0 0 1 42.084 75.537l121.1 309.486m-550-544.753l7.034-50.248">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M628.973 451.53l45.196 6.7a135.15 135.15 0 0 0 66.521-6.863l63.616-23.42"></path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M707.306 459.692l6.585 37.96a79.956 79.956 0 0 0 11.408 29.392l185.007 289.452">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M655.306 678.162l30.633-10.288c7.434-2.498 15.562.96 18.92 8.048l43.26 91.329a81.46 81.46 0 0 0 12.32 18.774l35.132 40.137">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M693.639 816.496l152.142-100.953m-96.69-151.277l-32.042 15.912a87.878 87.878 0 0 1-33.996 9.023l-133.409 7.732">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M804.306 411.684l160.006-202.606a137.302 137.302 0 0 0 27.215-59.88L1019.306.495M716.64 196.247l21.666-185.596">
                                </path>
                            </g>
                        </g>
                        <path fill="#E4F5F9"
                            d="M1742.318 854.005c-78.824-7.568-145.098-51.492-172.958-114.627l-89.422-202.644c-61.591-139.577-220.854-229.135-396.308-222.857-71.842 2.575-141.447 21.132-202.298 53.832a426.589 426.589 0 0 0-12.907 7.224c-26.407 15.385-50.48 33.223-71.834 53.113-24.54 22.855-45.49 48.421-62.268 76.105a332.73 332.73 0 0 0-11.05 19.697l-31.287 60.53c-11.14 21.55-23.936 42.31-38.276 62.167a514.919 514.919 0 0 1-27.327 34.596 538.33 538.33 0 0 1-38.39 40.135c-7.617 7.186-21.423 1.726-19.952-7.843a190.432 190.432 0 0 0 2.11-35.865c-1.594-44.18 4.155-87.42 16.42-128.742 6.758-22.762 15.492-44.946 26.065-66.384 11.69-23.704 25.629-46.495 41.628-68.16a475.883 475.883 0 0 1 23.586-29.405c14.91-17.16 31.195-33.462 48.746-48.779 21.2-18.5 44.247-35.564 68.949-50.964 50.059-31.208 106.914-55.585 168.968-71.25 126.162-31.85 261.187-23.958 380.24 22.219 119.057 46.178 214.204 127.57 267.919 229.185l143.827 272.084c18.484 34.968 40.192 68.738 64.768 100.936 7.616 9.976-1.986 23.092-15.91 21.753l-63.04-6.056zm294.549 114.955c-96.341-68.07-174.454-155.49-225.897-252.81l-143.83-272.087c-48.471-91.697-127.354-168.55-226.183-221.615-22.681-12.175-46.41-23.099-71.065-32.662-132.09-51.236-281.906-59.988-421.874-24.653-265.898 67.133-445.74 278.38-437.56 513.847 1.69 48.568-20.118 95.764-60.827 130.124l-22.427 18.928c-110.352 93.13-180.172 216.626-196.597 347.744l-18.94 151.177 59.359 4.952 18.94-151.18c14.96-119.418 78.555-231.9 179.06-316.721l22.43-18.932c8.862-7.477 96.234-73.023 126.813-101.985a573.44 573.44 0 0 0 38.235-39.846 550.158 550.158 0 0 0 30.37-38.167 529.699 529.699 0 0 0 29.955-46.13 517.238 517.238 0 0 0 11.557-21.133l31.287-60.53c28.107-54.37 73.41-100.85 131.02-134.418 57.61-33.565 124.775-52.623 194.25-55.11 158.374-5.666 302.135 75.172 357.728 201.157l89.42 202.646c33.089 74.98 111.803 127.149 205.42 136.14l19.8 1.904c69.438 6.67 134.414 32.54 183.869 74.303a841.58 841.58 0 0 0 57.335 44.32l69.917 49.4 38.353-39.262-69.918-49.401z"
                            mask="url(#sb)"></path>
                    </g>
                </symbol>
                <symbol viewBox="0 0 1440 780" id="map-layer-2" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <path id="tb"
                            d="M12.847 37c8.565-11.505 12.847-19.598 12.847-24.281C25.694 5.694 19.943 0 12.847 0 5.752 0 0 5.694 0 12.719 0 17.402 4.282 25.495 12.847 37z">
                        </path>
                        <filter id="ta" width="240.1%" height="197.3%" x="-70.1%" y="-48.6%"
                            filterUnits="objectBoundingBox">
                            <feOffset in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                            <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="6">
                            </feGaussianBlur>
                            <feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0">
                            </feColorMatrix>
                        </filter>
                    </defs>
                    <g fill="none" fill-rule="evenodd" transform="translate(453 -27)">
                        <g transform="translate(500 490)">
                            <path fill="#A6D4E0" d="M24.334 56.639h56.968V5.601H24.334z"></path>
                            <path fill="#A6D4E0" d="M24.335 26.651h24.274V5.601H24.335zM64.618 56.639h16.684V5.601H64.618z">
                            </path>
                            <path fill="#A6D4E0" d="M11.334 56.639h35.79v-31.49h-35.79z"></path>
                            <path fill="#A6D4E0" d="M.1 68.461h31.356V40.289H.1z"></path>
                            <path fill="#88BED1" d="M.1 68.461h31.4v-7.797H.1z"></path>
                            <path fill="#CAEAED"
                                d="M58.787 56.481h2V5.601h-2zM64.619 56.639h2V5.601h-2zM52.955 56.481h2V5.601h-2zM47.124 56.639h2V5.601h-2z">
                            </path>
                            <path fill="#88BED1"
                                d="M11.334 26.568h37.274v-2.125H11.334zM.1 40.29h31.356v-2.125H.1zM24.334 6.664h56.968V4.539H24.334z">
                            </path>
                            <path fill="#CAEAED" d="M65.868 4.623H48.213L46.8.214h20.481z"></path>
                            <path fill="#76ADC0"
                                d="M4.32 68.462h2.834v-4.645H4.32zM11.154 68.462h2.833v-4.645h-2.833zM17.987 68.462h2.834v-4.645h-2.834zM24.821 68.462h2.833v-4.645h-2.833z">
                            </path>
                            <path fill="#FFF"
                                d="M4.32 57.033h2.834v-4.305H4.32zM11.154 57.033h2.833v-4.305h-2.833zM17.987 57.033h2.834v-4.305h-2.834zM24.821 57.033h2.833v-4.305h-2.833zM4.32 49.725h2.834v-4.306H4.32zM11.154 49.725h2.833v-4.306h-2.833zM17.987 49.725h2.834v-4.306h-2.834zM24.821 49.725h2.833v-4.306h-2.833zM27.812 24.36h3.246v-4.833h-3.246zM34.536 24.36h3.247v-4.833h-3.247zM41.26 24.36h3.246v-4.833H41.26zM27.812 14.775h3.246V9.942h-3.246zM34.536 14.775h3.247V9.942h-3.247zM41.26 14.775h3.246V9.942H41.26zM68.929 14.775h3.247V9.942h-3.247zM75.163 14.775h3.246V9.942h-3.246zM68.929 24.36h3.247v-4.833h-3.247zM75.163 24.36h3.246v-4.833h-3.246zM68.929 33.945h3.247v-4.833h-3.247zM75.163 33.945h3.246v-4.833h-3.246zM68.929 43.531h3.247v-4.834h-3.247zM75.163 43.531h3.246v-4.834h-3.246zM68.929 53.116h3.247v-4.834h-3.247zM75.163 53.116h3.246v-4.834h-3.246zM14.364 35.229h3.246v-4.834h-3.246zM21.088 35.229h3.246v-4.834h-3.246zM27.812 35.229h3.246v-4.834h-3.246zM34.536 35.229h3.247v-4.834h-3.247zM41.26 35.229h3.246v-4.834H41.26zM34.536 44.061h3.247v-4.834h-3.247zM41.26 44.061h3.246v-4.834H41.26zM34.536 53.019h3.247v-4.833h-3.247zM41.26 53.019h3.246v-4.833H41.26z">
                            </path>
                            <path fill="#88BED1" d="M31.423 68.461h49.879V56.639H31.423z"></path>
                            <path fill="#76ADC0"
                                d="M54.418 68.462H48.13v-4.683a2.468 2.468 0 0 1 2.47-2.468h1.35a2.468 2.468 0 0 1 2.47 2.468v4.682zm-10.85 0h-6.29v-4.683a2.468 2.468 0 0 1 2.47-2.468H41.1a2.468 2.468 0 0 1 2.469 2.468v4.682zm21.7 0h-6.29v-4.683a2.468 2.468 0 0 1 2.47-2.468h1.35a2.468 2.468 0 0 1 2.47 2.468v4.682zm10.85 0h-6.29v-4.683a2.468 2.468 0 0 1 2.47-2.468h1.352a2.468 2.468 0 0 1 2.468 2.468v4.682z">
                            </path>
                            <g transform="translate(30 43)">
                                <ellipse cx="13" cy="37" fill="#CAEAED" rx="9" ry="2"></ellipse>
                                <use fill="#000" filter="url(#ta)" xlink:href="#tb"></use>
                                <use fill="#FF6141" xlink:href="#tb"></use>
                                <circle cx="12.847" cy="12.847" r="4.625" fill="#FFF"></circle>
                            </g>
                        </g>
                        <g transform="translate(394 535.18)">
                            <path fill="#CAEAED" d="M11.209 40.429h38.154V21.441H11.209z"></path>
                            <path fill="#88BED1"
                                d="M21.53 11.151l-.741-5.756-4.278-2.151-10.148 7.907zM39.525 11.151l.74-5.756 4.278-2.151 10.149 7.907z">
                            </path>
                            <path fill="#A6D4E0" d="M59.024 13.878H2.463L.415 10.9h60.658z"></path>
                            <path fill="#A6D4E0"
                                d="M2.364 11.031v29.397h11.082v-9.417l2.327-1.834 4.173-4.832 3.558 4.088 2.505-1.547 4.434-5.125 4.435 5.125 2.501 1.545 3.556-4.086 4.173 4.832 2.327 1.834v9.417h11.689V11.031z">
                            </path>
                            <path fill="#88BED1"
                                d="M30.639.73a.115.115 0 0 0-.223 0c-.79 2.454-5.532 4.187-5.532 7.96v4.384H36.17V8.69c0-3.773-4.74-5.506-5.53-7.96m3.97 39.699h-8.201a.3.3 0 0 1-.3-.299v-6.805a4.4 4.4 0 0 1 8.8 0v6.805a.3.3 0 0 1-.298.299">
                            </path>
                            <path fill="#A6D4E0"
                                d="M22.351 40.429H17.22a.174.174 0 0 1-.174-.174v-6.238a2.739 2.739 0 1 1 5.479 0v6.238a.174.174 0 0 1-.174.174m21.447-.09h-5.131a.173.173 0 0 1-.174-.173v-6.238a2.739 2.739 0 1 1 5.478 0v6.238a.172.172 0 0 1-.173.173">
                            </path>
                            <path fill="#CAEAED"
                                d="M36.17 19.68h22.954v-5.981H36.17zM2.379 19.761h22.954v-5.982H2.379zM36.17 22.647h22.954v-1.206H36.17zM2.379 22.662h22.954v-1.205H2.379z">
                            </path>
                            <path fill="#88BED1"
                                d="M36.17 11.031H24.885v16.55l1.124-.695 4.434-5.125 4.435 5.125 1.292.798z"></path>
                            <path fill="#FFF"
                                d="M7.35 32.418c.614 0 1.11.498 1.11 1.111v2.948a.226.226 0 0 1-.227.227H6.464a.227.227 0 0 1-.227-.227V33.53c0-.613.498-1.11 1.112-1.11m46.5 0c.615 0 1.112.497 1.112 1.11v2.948a.226.226 0 0 1-.227.227h-1.77a.227.227 0 0 1-.227-.227V33.53c0-.613.498-1.11 1.112-1.11m-23.34-18.54c.683 0 1.237.553 1.237 1.235v3.532h-2.474v-3.532c0-.682.554-1.236 1.237-1.236">
                            </path>
                        </g>
                        <g transform="translate(509 382.18)">
                            <path fill="#88BED1"
                                d="M18.622 13.204a4.855 4.855 0 1 1-9.712 0 4.855 4.855 0 0 1 9.712 0m34.518 12.32c0 5.711-4.63 10.341-10.342 10.341-5.711 0-10.341-4.63-10.341-10.34 0-5.713 4.63-10.343 10.341-10.343 5.712 0 10.342 4.63 10.342 10.342">
                            </path>
                            <path fill="#A6D4E0" d="M61.293 36.433l-58.667-.104v25.834l58.667.103z"></path>
                            <path fill="#A6D4E0" d="M8.908 36.555h9.715V25.524H8.908zM32.652 36.555h20.294V25.524H32.652z">
                            </path>
                            <path fill="#A6D4E0" d="M8.908 25.768h9.715V14.737H8.908z"></path>
                            <path fill="#CAEAED"
                                d="M8.263 15.183h11.006v-1.979H8.263zM31.86 27.319h21.878V25.34H31.86zM8.263 26.329h11.006V24.35H8.263z">
                            </path>
                            <path fill="#88BED1"
                                d="M63.262 36.433l-9.203-.937H7.315l-6.657.833 1.97 2.978 58.665.103zM13.766 30.661l-6.681 4.835h13.362zM42.798 30.661l-6.681 4.835h13.362z">
                            </path>
                            <path fill="#CAEAED" d="M6.184 62.163h1.823V42.621H6.184zM19.525 62.163h1.823V42.621h-1.823z">
                            </path>
                            <path fill="#CAEAED" d="M61.293 42.725l-58.665-.104v-3.314l58.665.104z"></path>
                            <path fill="#88BED1" d="M13.468 8.517h.596V.747h-.596z"></path>
                            <path fill="#88BED1"
                                d="M14.205 7.288h-.879a1.028 1.028 0 0 1 0-2.056h.88a1.028 1.028 0 0 1 0 2.056M42.5 14.783h.596V7.387H42.5z">
                            </path>
                            <path fill="#88BED1"
                                d="M43.239 13.179h-.88a1.027 1.027 0 0 1 0-2.056h.88a1.028 1.028 0 0 1 0 2.056M41.871 15.831h1.854v-1.298h-1.854zM13.766 52.392a3.045 3.045 0 0 0-3.045 3.045v6.726h6.09v-6.726a3.045 3.045 0 0 0-3.045-3.045">
                            </path>
                            <path fill="#CAEAED" d="M34.92 62.163h1.822V42.621H34.92zM48.26 62.163h1.822V42.621H48.26z">
                            </path>
                            <path fill="#88BED1"
                                d="M42.5 52.392a3.045 3.045 0 0 0-3.045 3.045v6.726h6.091v-6.726a3.045 3.045 0 0 0-3.046-3.045">
                            </path>
                            <path fill="#FFF"
                                d="M55.594 49.35a2.038 2.038 0 0 0-2.037 2.038v6.692h4.075v-6.692a2.038 2.038 0 0 0-2.038-2.038m-27.46 0a2.038 2.038 0 0 0-2.038 2.038v6.692h4.075v-6.692a2.038 2.038 0 0 0-2.038-2.038">
                            </path>
                        </g>
                        <g transform="translate(493 617.18)">
                            <path fill="#A6D4E0" d="M2.355 41.156h65.998V14.312H2.355z"></path>
                            <path fill="#88BED1" d="M70.323 10.786H.385l1.97 3.625h65.998z"></path>
                            <path fill="#A6D4E0" d="M20.428 14.312h29.646V9.721H20.428z"></path>
                            <path fill="#A6D4E0"
                                d="M51.019 8.867L35.25.241 19.483 8.867l.984 1.92h29.568zM2.355 41.156h65.998v-8.432H2.355z">
                            </path>
                            <path fill="#CAEAED" d="M2.355 32.724h65.998v-1.187H2.355z"></path>
                            <path fill="#CAEAED"
                                d="M20.428 32.724h2.185V14.312h-2.185zM25.92 32.724h2.185V14.312H25.92zM31.412 32.724h2.185V14.312h-2.185zM36.904 32.724h2.185V14.312h-2.185zM42.396 32.724h2.185V14.312h-2.185zM47.889 32.724h2.185V14.312h-2.185z">
                            </path>
                            <path fill="#88BED1"
                                d="M37.175 41.156h-3.849v-4.584a1.925 1.925 0 0 1 3.85 0v4.584zm5.904 0H40.13V36.12a1.473 1.473 0 1 1 2.948 0v5.035zm5.903 0h-2.948V36.12a1.473 1.473 0 1 1 2.948 0v5.035zm-18.61 0h-2.948V36.12a1.473 1.473 0 1 1 2.948 0v5.035zm-5.904 0H21.52V36.12a1.473 1.473 0 1 1 2.948 0v5.035z">
                            </path>
                            <path fill="#CAEAED"
                                d="M46.696 10.238L35.251 3.744l-11.445 6.494zM20.428 16.025h29.646v-1.713H20.428z">
                            </path>
                            <path fill="#FFF"
                                d="M7.18 27.127h2.417v-7.22H7.18zM13.264 27.127h2.416v-7.22h-2.416zM54.93 27.127h2.417v-7.22H54.93zM61.014 27.127h2.416v-7.22h-2.416z">
                            </path>
                        </g>
                        <g transform="translate(0 241.18)">
                            <path fill="#A6D4E0" d="M1.774 23.604h121.669v-3.815H1.774z"></path>
                            <path fill="#88BED1" d="M119.905 18.522H5.311l6.318-10.781h101.958z"></path>
                            <path fill="#88BED1" d="M78.628 10.701l-16.02-8.743-16.021 8.743 1.984 1.947h28.073z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M1.774 47.39h121.669V24.198H1.774zM124.412 17.668H.804l.97 2.977h121.669z"></path>
                            <path fill="#A6D4E0" d="M41.47 24.198h42.276V11.801H41.47z"></path>
                            <path fill="#A6D4E0" d="M41.47 15.474h5.118V9.822H41.47zM78.628 15.474h5.118V9.822h-5.118z">
                            </path>
                            <path fill="#CAEAED" d="M47.785 22.964h29.646v-3.089H47.785z"></path>
                            <path fill="#CAEAED"
                                d="M79.526 19.089l-16.918-5.881-16.917 5.881 2.094 1.309h29.646zM1.774 42.564h121.669v-1.187H1.774zM1.774 24.198h121.669v-1.187H1.774z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M113.695 7.897H73.49L62.609 1.959 51.727 7.897H11.522V6.71h39.713L62.609.584 73.953 6.71h39.742z">
                            </path>
                            <path fill="#CAEAED"
                                d="M47.785 41.376h1.8V22.963h-1.8zM53.354 41.376h1.8V22.963h-1.8zM58.923 41.376h1.8V22.963h-1.8zM64.493 41.376h1.8V22.963h-1.8zM70.062 41.376h1.8V22.963h-1.8zM75.631 41.376h1.8V22.963h-1.8zM83.938 41.376h1.8V22.963h-1.8zM89.076 41.376h1.8V22.963h-1.8zM94.215 41.376h1.8V22.963h-1.8zM99.353 41.376h1.8V22.963h-1.8zM104.491 41.376h1.8V22.963h-1.8zM109.629 41.376h1.8V22.963h-1.8zM114.767 41.376h1.8V22.963h-1.8zM119.905 41.376h1.8V22.963h-1.8zM3.703 41.376h1.8V22.963h-1.8zM8.841 41.376h1.8V22.963h-1.8zM13.98 41.376h1.8V22.963h-1.8zM19.118 41.376h1.8V22.963h-1.8zM24.256 41.376h1.8V22.963h-1.8zM29.394 41.376h1.8V22.963h-1.8zM34.532 41.376h1.8V22.963h-1.8zM39.67 41.376h1.8V22.963h-1.8z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M74.888 20.024l-12.279-4.191-12.28 4.191zM1.774 47.389h121.669v-4.931H1.774z"></path>
                        </g>
                        <g transform="translate(546 692.18)">
                            <path fill="#88BED1" d="M12.842 31.462L6.76 26.641v9.704zM46.536 31.462l6.082-4.821v9.704z">
                            </path>
                            <path fill="#A6D4E0" d="M6.76 67.342h45.858V34.904H6.76z"></path>
                            <path fill="#CAEAED" d="M36.355 67.342H22.997v-7.104a6.679 6.679 0 1 1 13.358 0v7.104z">
                            </path>
                            <path fill="#A6D4E0" d="M14.948 9.993h.816V.149h-.816z"></path>
                            <path fill="#A6D4E0" d="M12.7 3.619h5.312v-.816H12.7zM29.253 13.49h.816V3.645h-.816z">
                            </path>
                            <path fill="#A6D4E0" d="M27.004 7.114h5.312v-.816h-5.312zM43.646 9.993h.816V.149h-.816z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M41.398 3.619h5.312v-.816h-5.312zM23.891 43.407h11.567V26.16H23.891zM41.502 34.584h5.105V17.337h-5.105zM12.804 34.584h5.104V17.337h-5.104z">
                            </path>
                            <path fill="#88BED1" d="M33.308 67.342h-7.265v-6.401a3.633 3.633 0 0 1 7.265 0v6.401z">
                            </path>
                            <path fill="#FFF"
                                d="M45.985 63.016H42.94V58.83a1.523 1.523 0 0 1 3.045 0v4.185zm-29.515 0h-3.045V58.83a1.523 1.523 0 0 1 3.045 0v4.185zm31.49-18.519h-6.996v-2.209a3.497 3.497 0 1 1 6.996 0v2.21zm-29.514 0H11.45v-2.209a3.497 3.497 0 1 1 6.996 0v2.21z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M15.356 26.177L6.76 34.904h17.191zM44.054 26.177l-8.596 8.727H52.65zM29.69 26.177l-3.678 8.727h7.355z">
                            </path>
                            <path fill="#88BED1"
                                d="M48.261 13.973l-1.767-3.254-2.04-3.76-.4-.64-.4.64-2.04 3.76-1.767 3.254c-.269.502-.916 1.873-.688 3.658.308 2.404 1.974 3.774 2.333 4.056l2.562.066 2.561-.066c.36-.282 2.026-1.652 2.333-4.056.23-1.785-.418-3.156-.687-3.658m-28.7 0l-1.765-3.254-2.041-3.76-.4-.64-.4.64-2.04 3.76-1.766 3.254c-.27.502-.916 1.873-.688 3.658.308 2.404 1.973 3.774 2.333 4.056l2.562.066 2.56-.066c.36-.282 2.027-1.652 2.333-4.056.23-1.785-.418-3.156-.687-3.658m17.165 6.033c-.681-1.685-1.898-2.742-3.33-3.984-.49-.426-.48-.372-1.06-.875a26.158 26.158 0 0 1-2.677-2.678c-.57.66-1.46 1.623-2.678 2.678-.581.503-.57.45-1.061.875-1.43 1.242-2.65 2.3-3.33 3.984-.201.5-.623 1.552-.496 2.926.18 1.971 1.359 3.27 1.796 3.71l11.567-.097c.43-.43 1.58-1.692 1.766-3.613.132-1.363-.287-2.405-.497-2.926">
                            </path>
                            <path fill="#CAEAED" d="M6.76 50.352h45.858v-1.705H6.76z"></path>
                            <path fill="#CAEAED"
                                d="M38.773 50.364l-2.216-8.506v-4.357l-6.881-13.46-6.882 13.46v4.357l-2.215 8.506z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M31.402 45.229h-3.425a.809.809 0 0 1-.808-.81v-4.464c0-.447.362-.81.808-.81h3.425a.81.81 0 0 1 .809.81v4.464a.81.81 0 0 1-.81.81">
                            </path>
                            <path fill="#CAEAED" d="M52.619 67.342h6.251V57.309h-6.251z"></path>
                            <path fill="#88BED1" d="M52.619 58.434h6.251v-6.142h-6.251z"></path>
                            <path fill="#CAEAED" d="M.509 67.342H6.76V57.309H.509z"></path>
                            <path fill="#88BED1" d="M.509 58.434H6.76v-6.142H.509z"></path>
                        </g>
                        <g transform="translate(138)">
                            <g transform="translate(11 .941)">
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="10"
                                    d="M68.982 40.663H92.1c7.229 0 14.44.727 21.523 2.17l54.836 11.17a72.582 72.582 0 0 1 24.243 9.737l58.847 37.128">
                                </path>
                                <path fill="#A6D4E0" d="M53.86 47.155h17.966V27.123H53.86z"></path>
                                <path fill="#8DBBCB" d="M53.86 48.343h17.966v-1.577H53.86z"></path>
                                <path fill="#CAEAED" d="M71.826 27.845H53.861l-1.85-5.063h21.666z"></path>
                                <path fill="#8DBBCB" d="M53.86 28.7h17.966v-1.577H53.86z"></path>
                                <path fill="#CAEAED" d="M59.926 48.426l-.433-18.317L.442 175.737l1.846 16.429z"></path>
                                <path fill="#A6D4E0" d="M57.384 30.109h2.109L.442 175.737l.388-6.513z"></path>
                            </g>
                            <g transform="translate(0 2.941)">
                                <path fill="#F8FFFF"
                                    d="M219.485 156.087c53.332-11.408 88.186-43.947 87.986-75.225-.04-6.367-1.564-17.535-11.695-30.996l10.257-5.1 46.438 49.655 24.883 58.602-171.016 38.312-91.867 53.975-45.019 32.052-29.546-42.068 89.427-43.456 90.152-35.751z">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M124.717 193.669a247.824 247.824 0 0 0-20.09 9.02l-67.155 33.819L16.47 200.85l31.627-19.015a31.8 31.8 0 0 1 23.589-3.72l45.964 10.69a11.732 11.732 0 0 1 7.067 4.863">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M37.471 236.508l67.157-33.819a247.134 247.134 0 0 1 20.088-9.02l94.77-37.582a42.191 42.191 0 0 0 20.184-16.796l58.316-92.948M195 161L140 45M59 176.059l53-134">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M87.5 108.059h32.242a100 100 0 0 1 37.139 7.152l19.619 7.848m42.985 33.028c53.332-11.408 88.186-43.947 87.986-75.225-.04-6.367-1.564-17.535-11.695-30.996">
                                </path>
                                <path fill="#CAEAED"
                                    d="M330.282 153.023l-23.312 4.562v17.613l23.312-4.561zM289.004 161.174l-26.454 6.906v17.614l26.454-6.906zM244.938 172.104l-24.842 8.366v17.614l24.842-8.366zM142.841 240.349l56.134-34.601v-17.677l-56.134 33.6z">
                                </path>
                                <path fill="#A6D4E0"
                                    d="M198.975 186.515l-56.134 34.911v2.042l56.134-35.052zM244.938 170.554l-25.222 9.427v2.042l25.222-9.568zM289.004 160.714l-26.454 6.896v2.042l26.454-7.037zM330.282 151.823l-23.312 4.945v2.042l23.312-5.086zM295.2 47.26h17.966V27.228H295.2z">
                                </path>
                                <path fill="#CAEAED" d="M313.166 27.949H295.2l-1.85-5.062h21.666z"></path>
                                <path fill="#8DBBCB"
                                    d="M295.2 28.805h17.966v-1.577H295.2zM295.2 48.447h17.966V46.87H295.2z"></path>
                                <path fill="#CAEAED" d="M335.094 69.731l-30.911-36.934v17.069l30.911 36.933z"></path>
                                <path fill="#A6D4E0" d="M332.249 97.68h17.966V77.648h-17.966z"></path>
                                <path fill="#CAEAED" d="M350.215 78.37h-17.966l-1.85-5.062h21.666z"></path>
                                <path fill="#A6D4E0"
                                    d="M335.094 74.041h12.276v-4.31h-12.276zM338.445 63.035h5.573v-4.31h-5.573z"></path>
                                <path fill="#8DBBCB"
                                    d="M335.094 69.731l3.351-6.696h5.573l3.352 6.696zM338.445 58.725l2.787-8.142 2.786 8.142zM332.249 79.225h17.966v-1.577h-17.966zM332.249 98.868h17.966v-1.577h-17.966z">
                                </path>
                                <path fill="#CAEAED" d="M375.27 139.484l-31.31-58.247v17.614l31.31 58.247z"></path>
                                <path fill="#A6D4E0"
                                    d="M371.43 159.338h17.422v-32.411H371.43zM370.215 122.184h19.854v-6.169h-19.854zM372.549 116.015h15.184v-5.529h-15.184zM375.36 110.486h9.564v-3.824h-9.564zM390.069 122.184h-19.854l1.215 4.743h17.422z">
                                </path>
                                <path fill="#8DBBCB" d="M370.215 161.024h19.854v-3.229h-19.854z"></path>
                                <path fill="#CAEAED"
                                    d="M371.43 129.357h17.422v-2.43H371.43zM370.215 118.445h19.854v-2.43h-19.854zM372.549 111.488h15.184v-1.554h-15.184z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M377.165 116.015h-2.031v-1.597c0-.509.413-.923.923-.923h.185c.51 0 .923.414.923.923v1.597zm3.992 0h-2.031v-1.597c0-.509.413-.923.923-.923h.185c.51 0 .923.414.923.923v1.597zm3.992 0h-2.03v-1.597c0-.509.412-.923.922-.923h.185c.51 0 .923.414.923.923v1.597zm-9.79-9.353l4.517-24.261c.054-.295.476-.295.531 0l4.516 24.26h-9.564z">
                                </path>
                                <path fill="#A6D4E0"
                                    d="M377.249 96.511h5.785l-.746-4.009h-4.293zM380.141 75.089l.861 1.745 1.926.28-1.393 1.359.329 1.918-1.723-.906-1.723.906.329-1.918-1.393-1.359 1.926-.28z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M390.07 160.93c0 1.731-4.446 3.135-9.929 3.135-5.482 0-9.926-1.404-9.926-3.135 0-1.73 4.444-3.135 9.926-3.135 5.483 0 9.928 1.405 9.928 3.136">
                                </path>
                                <path fill="#A6D4E0" d="M244.938 188.662h17.966V168.63h-17.966z"></path>
                                <path fill="#CAEAED" d="M262.904 169.351h-17.966l-1.85-5.062h21.666z"></path>
                                <path fill="#A6D4E0"
                                    d="M247.783 165.023h12.276v-4.31h-12.276zM251.135 154.017h5.573v-4.31h-5.573z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M247.784 160.714l3.351-6.697h5.572l3.353 6.697zM251.135 149.707l2.787-8.142 2.786 8.142zM244.938 170.207h17.966v-1.577h-17.966zM244.938 189.849h17.966v-1.577h-17.966z">
                                </path>
                                <path fill="#A6D4E0" d="M289.004 177.616h17.966v-20.032h-17.966z"></path>
                                <path fill="#CAEAED" d="M306.969 158.306h-17.966l-1.849-5.063h21.666z"></path>
                                <path fill="#A6D4E0"
                                    d="M291.848 153.978h12.276v-4.31h-12.276zM295.2 142.972h5.573v-4.31H295.2z"></path>
                                <path fill="#8DBBCB"
                                    d="M291.848 149.668l3.352-6.696h5.573l3.351 6.696zM295.2 138.661l2.787-8.142 2.786 8.142zM289.004 159.161h17.966v-1.577h-17.966zM289.004 178.804h17.966v-1.577h-17.966z">
                                </path>
                                <path fill="#A6D4E0" d="M198.975 204.717h21.35v-23.805h-21.35z"></path>
                                <path fill="#CAEAED" d="M220.325 181.769h-21.35l-2.199-6.016h25.748z"></path>
                                <path fill="#A6D4E0"
                                    d="M202.356 176.626h14.588v-5.122h-14.588zM206.338 163.547h6.623v-5.122h-6.623z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M202.356 171.505l3.982-7.958h6.623l3.983 7.958zM206.338 158.425l3.312-9.675 3.311 9.675zM198.975 182.786h21.35v-1.874h-21.35zM198.975 206.128h21.35v-1.874h-21.35z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M213.442 205.554h-7.584v-5.84a3.566 3.566 0 0 1 3.565-3.567h.453a3.567 3.567 0 0 1 3.566 3.567v5.84z">
                                </path>
                                <path fill="#CAEAED" d="M371.43 144.9l-23.182 5.153v17.613l23.182-5.152z"></path>
                                <path fill="#A6D4E0" d="M127.719 245.309h17.966v-20.032h-17.966z"></path>
                                <path fill="#CAEAED" d="M145.685 225.999h-17.966l-1.85-5.062h21.666z"></path>
                                <path fill="#A6D4E0"
                                    d="M130.565 221.671h12.276v-4.31h-12.276zM133.916 210.664h5.573v-4.31h-5.573z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M130.564 217.361l3.352-6.697h5.573l3.351 6.697zM133.916 206.355l2.787-8.142 2.786 8.142zM127.719 226.854h17.966v-1.577h-17.966zM127.719 246.497h17.966v-1.577h-17.966z">
                                </path>
                                <path fill="#CAEAED" d="M83.961 284.479l43.758-38.368v-18.043l-43.758 37.666z"></path>
                                <path fill="#A6D4E0"
                                    d="M66.539 287.272h17.422v-32.411H66.539zM65.324 250.117h19.854v-6.168H65.324z">
                                </path>
                                <path fill="#A6D4E0"
                                    d="M67.658 243.949h15.184v-5.529H67.658zM70.468 238.42h9.565v-3.824h-9.565zM85.178 250.118H65.324l1.216 4.743h17.422z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M66.539 268.982h17.422v-2.116H66.539zM65.324 288.958h19.854v-3.229H65.324z">
                                </path>
                                <path fill="#CAEAED"
                                    d="M66.539 257.291h17.422v-2.43H66.539zM65.324 246.379h19.854v-2.43H65.324zM67.658 239.422h15.184v-1.554H67.658z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M71.041 263.182h-1.147a.442.442 0 0 1-.442-.442v-2.416c0-.245.197-.444.442-.444h1.147c.244 0 .442.199.442.444v2.416a.442.442 0 0 1-.442.442m1.233-19.233h-2.032v-1.597c0-.509.414-.923.924-.923h.185c.509 0 .923.414.923.923v1.597zm3.992 0h-2.032v-1.597c0-.509.414-.923.924-.923h.185c.51 0 .923.414.923.923v1.597zm3.992 0h-2.03v-1.597c0-.509.412-.923.922-.923h.185c.51 0 .923.414.923.923v1.597zm-4.434 19.233h-1.147a.442.442 0 0 1-.443-.442v-2.416c0-.245.198-.444.443-.444h1.147c.244 0 .442.199.442.444v2.416a.442.442 0 0 1-.442.442m4.642 0h-1.147a.442.442 0 0 1-.442-.442v-2.416c0-.245.198-.444.442-.444h1.147c.245 0 .442.199.442.444v2.416a.442.442 0 0 1-.442.442m-9.998-28.586l4.517-24.262c.055-.294.477-.294.53 0l4.518 24.262h-9.565z">
                                </path>
                                <path fill="#A6D4E0"
                                    d="M72.358 224.445h5.785l-.746-4.009h-4.293zM75.25 203.023l.861 1.745 1.926.28-1.393 1.359.329 1.918-1.723-.906-1.723.906.329-1.918-1.394-1.359 1.927-.28zM10.5 150.867l.861 1.745 1.927.28-1.394 1.358.329 1.919-1.723-.906-1.723.906.329-1.919-1.393-1.358 1.926-.28z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M85.178 288.865c0 1.73-4.445 3.135-9.927 3.135-5.483 0-9.927-1.404-9.927-3.135 0-1.732 4.444-3.136 9.927-3.136 5.482 0 9.927 1.404 9.927 3.136">
                                </path>
                                <path fill="#A6D4E0" d="M0 215.434h21v-22.336H0z"></path>
                                <path fill="#A6D4E0" d="M2.28 195.278h16.441v-7.888H2.28zM4.53 187.39h11.94v-6.014H4.53z">
                                </path>
                                <path fill="#A6D4E0" d="M6.522 181.376h7.955v-5.19H6.522zM7.72 176.186h5.561v-3.848H7.72z">
                                </path>
                                <path fill="#CAEAED"
                                    d="M0 194.58h21v-1.482H0zM2.28 187.935h16.441v-.545H2.28zM4.53 181.921h11.94v-.545H4.53zM6.522 177.276h7.955v-1.09H6.522z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M7.72 172.338l2.78-17.397 2.781 17.397zM0 215.434h21v-2.371H0zM0 200.808h21v-.593H0z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M9.045 193.098H7.014v-1.597c0-.509.413-.923.923-.923h.185c.51 0 .923.414.923.923v1.597zm4.817 0H11.83v-1.597c0-.509.414-.923.924-.923h.185c.51 0 .923.414.923.923v1.597zm-4.817 7.153H7.014v-1.596c0-.51.413-.924.923-.924h.185c.51 0 .923.414.923.924v1.596zm4.817 0H11.83v-1.596c0-.51.414-.924.924-.924h.185c.51 0 .923.414.923.924v1.596zm-4.817-12.86H7.014v-1.597c0-.51.413-.924.923-.924h.185c.51 0 .923.415.923.923v1.597zm4.817 0H11.83v-1.597c0-.51.414-.924.924-.924h.185c.51 0 .923.415.923.923v1.597zm-4.304-7.469H8.184v-1.017a.687.687 0 1 1 1.374 0v1.017zm3.258 0h-1.374v-1.017a.688.688 0 0 1 1.374 0v1.017z">
                                </path>
                                <path fill="#CAEAED" d="M16.47 215.434l50.069 68.044v-18.863L16.47 198.319z"></path>
                                <path fill="#A6D4E0"
                                    d="M16.47 198.32l50.069 66.296v-2.176l-48.298-64.12zM127.72 226.167l-43.758 38.036v2.041l43.758-38.176zM371.496 143.656l-23.313 4.945v2.042l23.313-5.086z">
                                </path>
                                <path fill="#A6D4E0" d="M330.282 169.449h17.966v-20.032h-17.966z"></path>
                                <path fill="#CAEAED" d="M348.248 150.138h-17.966l-1.85-5.062h21.666z"></path>
                                <path fill="#A6D4E0"
                                    d="M333.127 145.81h12.276v-4.31h-12.276zM336.479 134.804h5.573v-4.31h-5.573z">
                                </path>
                                <path fill="#8DBBCB"
                                    d="M333.127 141.5l3.351-6.696h5.573l3.352 6.696zM336.478 130.494l2.787-8.142 2.786 8.142zM330.282 150.993h17.966v-1.577h-17.966zM330.282 170.637h17.966v-1.577h-17.966z">
                                </path>
                                <path fill="#A6D4E0"
                                    d="M343.96 81.237l27.536 51.412-.066-4.033-25.993-47.748zM304.183 32.798l30.911 36.934.924-1.846-31.835-37.663z">
                                </path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="2"
                                    d="M258.089 109.934l30.915 10.818m-9.865-44.37l27.831 11.282"></path>
                                <path stroke="#E8F6F9" stroke-linecap="round" stroke-width="5"
                                    d="M192.109 53.817l-3.824-41.152-37.131-2.155-12.276 32.319"></path>
                            </g>
                        </g>
                        <g transform="translate(322 364)">
                            <path fill="#72B0C1"
                                d="M4.314 41.067L3.67 39.78l1.058-.828a278.174 278.174 0 0 0-.874-3.542 74.32 74.32 0 0 1 3.772-16.653l8.925-4.14c.21.228.495.58.736 1.058.419.832.465 1.57.506 1.978.079.787.297 1.903.92 3.312l-.736.69c.06.598.123 1.196.184 1.794l-.736.92.046 3.45a1.986 1.986 0 0 1-1.104 1.06 58.365 58.365 0 0 1-.138 7.405c-.445.17-.89.337-1.334.506l.828 4.186-11.41.092z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M6.89 40.803l.368-1.162a29.47 29.47 0 0 1 .046-1.77 192.57 192.57 0 0 1-.552-17.424l1.76-14.215 1-1.69 2.036.758 1.173 1.415 2.553 15.836c.346 2.71.378 4.895.345 6.383-.052 2.295-.283 4-.069 6.866.094 1.257.239 2.278.345 2.933.12.1.287.24.483.414.472.418.546.522.587.586.091.145.215.41.207.828-1.242.22-2.485.437-3.727.656l-.103-2-.483.206c.03-.682.054-1.602.034-2.69-.016-.888-.046-2.355-.258-3.983-.233-1.788-.48-2.2-1.053-4.817a71.173 71.173 0 0 1-.793-4.243 34.342 34.342 0 0 0-.725 5.693c-.036.868-.073 1.728 0 2.898.014.218.185 2.962.483 4.658.02.114.067.372.069.724a4.263 4.263 0 0 1-.276 1.518l.242 1.691-3.692-.069M20.732 64.465H1.052L0 69.945h21.784zM18.392 42.32h-15L1.883 63.7h18.018z">
                            </path>
                            <path fill="#88BED1"
                                d="M13.264 57.59H8.52a.357.357 0 0 1-.357-.356v-6.313c0-.197.16-.356.357-.356h4.742c.197 0 .357.16.357.356v6.313a.356.356 0 0 1-.356.356M1.1 64.523h19.658V63.1H1.1zM16.948 40.46H4.83c-.795 0-1.44.645-1.44 1.438v.422h14.995v-.422c0-.794-.644-1.438-1.438-1.438M8.73 4.106a1.65 1.65 0 0 1-1.035-.806c.008-.115.01-.284-.023-.482-.044-.262-.109-.346-.115-.484-.007-.169.077-.409.483-.713A.76.76 0 0 1 8.085 1a.763.763 0 0 1 .53-.369c0-.015-.008-.293.207-.436.187-.127.462-.095.644.091A1.17 1.17 0 0 1 9.811.08c.777-.3 1.732.31 2.231.85.146.157.327.39.483.713.135.08.626.387.782.99.112.433.08 1.127-.368 1.402a.852.852 0 0 1-.483.115 1.16 1.16 0 0 1-.667.76L8.73 4.104">
                            </path>
                            <path fill="#A6D4E0"
                                d="M.725 22.253a2.83 2.83 0 0 0 1.38 1.012l.437-.645a1.328 1.328 0 0 1-.172-.396c-.09-.367.008-.672.086-.915a2.36 2.36 0 0 1 .332-.646c-.037-.038-.067-.078-.108-.113-.116-.1-.415-.358-.862-.448-.36-.073-.504.026-1.047-.012l-.506 1.105c.051.25.168.651.46 1.058">
                            </path>
                            <path fill="#88BED1"
                                d="M8.89 6.566c.062-.569.16-1.026.23-1.311l-1.195.966a9.896 9.896 0 0 0-2.783.667c-.187.324-.45.796-.736 1.38-.328.666-.54 1.175-.644 1.425-.356.853-.848 1.998-1.564 3.636A21.302 21.302 0 0 0 .772 20.09c.543.038.685-.061 1.046.012.448.09.747.349.863.448.04.035.07.075.107.113.034-.049.066-.105.1-.148a64.465 64.465 0 0 1 2.415-7.623c.274 1.675.267 3.027.207 3.966-.042.66-.106 1.043-.38 3.279-.135 1.1-.24 2.003-.31 2.598.487.093.94.168 1.357.23.444.067.668.093.92-.023.047-.021.344-.162.529-.483.08-.14.11-.264.122-.31 1.012-4.297 1.097-5.9 1.097-5.9.047-.877.279-5.224.046-7.567-.025-.254-.113-1.059 0-2.117m3.14-.683a8.791 8.791 0 0 0 2.932 1.592 18.183 18.183 0 0 1 1.691 3.692s.726 2.217.39 4.088a1.18 1.18 0 0 1-.149.397c-.263.444-.853.753-1.414.656a1.246 1.246 0 0 1-.449-.173 170.49 170.49 0 0 0 .897 7.556 2.757 2.757 0 0 1-1.207-.725c-.402-.421-.562-.886-.656-1.207-.307-1.052-.797-3.622-1.276-7.038a64.88 64.88 0 0 1-.76-8.838">
                            </path>
                            <path fill="#CAEAED"
                                d="M15.631 16.824l-.828-.897v-.943h-1.128v-.368l1.703-.736.092-.483.989-.345 1.196-2.645.667.184.115 1.15-.989 1.633 4.83-1.174-3.289 2.094-2.208.759-.178.932zM9.943 6.68c-.208-.006-.318-.011-.43-.085-.098-.064-.165-.157-.248-.361-.129-.316-.1-.413-.195-.741-.107-.375-.182-.377-.3-.813-.055-.201-.038-.201-.103-.432-.098-.346-.153-.421-.156-.586a.9.9 0 0 1 .156-.501c-.016-.023-.194-.318-.052-.638a.67.67 0 0 1 .621-.396.693.693 0 0 1 .483.224c.09-.093.351-.341.76-.397.055-.008.797-.097 1.155.466.208.328.21.758.017 1.12.066.14.147.34.207.588.085.35.175.722.052 1.12-.092.295-.354.542-.88 1.036-.157.148-.286.255-.479.326-.226.084-.427.077-.608.07">
                            </path>
                        </g>
                        <g transform="translate(196 710.18)">
                            <path fill="#CAEAED"
                                d="M53.926 45.174c0 3.172-11.665 5.743-26.053 5.743-14.39 0-26.054-2.57-26.054-5.743 0-3.172 11.665-5.743 26.054-5.743 14.388 0 26.053 2.571 26.053 5.743">
                            </path>
                            <path fill="#72B0C1" d="M13.543 43.737h4.135V29.225h-4.135zM36.96 43.737h4.135V29.225H36.96z">
                            </path>
                            <path fill="#CAEAED"
                                d="M39.027 13.197L24.13 35.126l9.594 2.303c3.487.837 7.122.837 10.61 0l9.592-2.303-14.898-21.928z">
                            </path>
                            <path fill="#CAEAED"
                                d="M39.027 8.174L25.864 27.546l8.477 2.035a20.09 20.09 0 0 0 9.373 0l8.476-2.035L39.027 8.174z">
                            </path>
                            <path fill="#CAEAED"
                                d="M39.027 3.627L28.34 19.357l6.883 1.652c2.501.6 5.11.6 7.61 0l6.883-1.653L39.027 3.627z">
                            </path>
                            <path fill="#CAEAED"
                                d="M39.027.063l-7.586 11.165 4.885 1.173c1.776.426 3.627.426 5.402 0l4.885-1.173L39.027.063zM15.611 13.198L.713 35.123l9.594 2.303c3.487.837 7.122.837 10.609 0l9.593-2.303L15.61 13.197z">
                            </path>
                            <path fill="#CAEAED"
                                d="M15.61 8.174L2.449 27.546l8.476 2.035c3.08.74 6.293.74 9.374 0l8.476-2.035L15.61 8.174z">
                            </path>
                            <path fill="#CAEAED"
                                d="M15.61 3.627L4.924 19.357l6.883 1.652c2.5.6 5.109.6 7.61 0l6.883-1.653L15.61 3.627z">
                            </path>
                            <path fill="#CAEAED"
                                d="M15.61.063L8.026 11.228 12.91 12.4c1.776.426 3.627.426 5.402 0l4.885-1.173L15.61.063z">
                            </path>
                            <path fill="#72B0C1" d="M25.798 47.402h4.15v-9.216h-4.15z"></path>
                            <path fill="#A6D4E0"
                                d="M27.872 16.863L12.974 38.788l9.593 2.303a22.7 22.7 0 0 0 10.61 0l9.593-2.303-14.898-21.927z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M27.872 11.84L14.71 31.21l8.476 2.035c3.081.74 6.293.74 9.374 0l8.476-2.035L27.872 11.84z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M27.872 7.291l-10.688 15.73 6.883 1.652c2.501.6 5.11.6 7.61 0l6.883-1.653L27.872 7.291z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M27.872 3.728l-7.586 11.164 4.885 1.173a11.55 11.55 0 0 0 5.402 0l4.885-1.173-7.586-11.164zm0 13.134L12.974 38.79l9.593 2.303a22.7 22.7 0 0 0 10.61 0l9.593-2.303-14.898-21.927z">
                            </path>
                        </g>
                        <g transform="translate(179 489)">
                            <path fill="#A6D4E0"
                                d="M19.488 36.314h52.593V12.972H19.488zM0 42.44h91.569v-6.126H0zM0 36.314h19.488V2.241H0zM72.081 36.314h19.488V2.241H72.081z">
                            </path>
                            <path fill="#CAEAED"
                                d="M0 36.314h2V8.244H0zM17.488 36.314h2V8.244h-2zM11.659 36.314h2V8.244h-2zM5.829 36.314h2V8.244h-2zM36.041 36.314h2V25.682h-2zM23.162 36.314h2V25.682h-2zM66.355 36.314h2V25.682h-2zM53.528 36.314h2V25.682h-2zM47.699 36.314h2V25.682h-2zM41.87 36.314h2V25.682h-2zM72.081 36.314h2V8.244h-2zM89.569 36.314h2V8.244h-2zM83.739 36.314h2V8.244h-2zM77.91 36.314h2V8.244h-2z">
                            </path>
                            <path fill="#88BED1" d="M19.488 26.721h52.593v-2.078H19.488z"></path>
                            <path fill="#CAEAED" d="M0 36.952h91.569v-1.309H0z"></path>
                            <path fill="#88BED1"
                                d="M.002 10.322h19.486V8.244H.002zM72.082 10.322h19.486V8.244H72.082zM.002 2.078h19.486V0H.002zM72.082 2.078h19.486V0H72.082z">
                            </path>
                            <path fill="#FFF"
                                d="M23.162 20.221h6.274v-3.982h-6.274zM32.892 20.221h6.274v-3.982h-6.274zM42.621 20.221h6.274v-3.982h-6.274zM52.351 20.221h6.274v-3.982h-6.274zM62.081 20.221h6.274v-3.982h-6.274z">
                            </path>
                        </g>
                        <g transform="translate(637 82)">
                            <path fill="#CAEAED"
                                d="M52.107 41.743c0 3.172-11.665 5.743-26.053 5.743C11.665 47.486 0 44.915 0 41.743S11.665 36 26.054 36c14.388 0 26.053 2.571 26.053 5.743">
                            </path>
                            <path fill="#96C1CC" d="M25 12h2v31h-2zM36 9h2v32h-2zM14 9h2v32h-2z"></path>
                            <path fill="#CAEAED"
                                d="M36.927 26.566l-2.33 4.253c-1.488-.444-2.489-1.153-3.002-2.126-.513-.974-.513-2.277 0-3.909-2.127-.576-3.535-2.03-4.225-4.36-.69-2.332-.415-4.576.827-6.734v-1.512c-.85-.625-1.126-2.075-.827-4.351.298-2.277 1.186-3.676 2.664-4.198.36-1.852 1.255-2.934 2.684-3.248 1.43-.314 2.656-.019 3.68.885 1.077-1.307 2.42-1.602 4.03-.885 1.609.717 2.191 1.912 1.748 3.586 1.869.606 2.796 2.113 2.78 4.521-.014 2.408-.42 3.857-1.22 4.347 1.622.917 2.287 2.308 1.994 4.173-.292 1.866-.957 3.004-1.994 3.415 1.016.91 1.296 2.108.84 3.596-.457 1.487-1.488 2.337-3.095 2.547.177 1.351.034 2.253-.429 2.707-.463.454-1.278.969-2.446 1.546l-1.68-4.253zm-21 0l-2.33 4.253c-1.488-.444-2.489-1.153-3.002-2.126-.513-.974-.513-2.277 0-3.909-2.127-.576-3.535-2.03-4.225-4.36-.69-2.332-.415-4.576.827-6.734v-1.512c-.85-.625-1.126-2.075-.827-4.351.298-2.277 1.186-3.676 2.664-4.198.36-1.852 1.255-2.934 2.684-3.248 1.43-.314 2.656-.019 3.68.885 1.077-1.307 2.42-1.602 4.03-.885 1.609.717 2.191 1.912 1.748 3.586 1.869.606 2.796 2.113 2.78 4.521-.014 2.408-.42 3.857-1.22 4.347 1.622.917 2.287 2.308 1.994 4.173-.292 1.866-.957 3.004-1.994 3.415 1.016.91 1.296 2.108.84 3.596-.457 1.487-1.488 2.337-3.095 2.547.177 1.351.034 2.253-.429 2.707-.463.454-1.278.969-2.446 1.546l-1.68-4.253z">
                            </path>
                            <path fill="#A6D4E0"
                                d="M25.927 29.566l-2.33 4.253c-1.488-.444-2.489-1.153-3.002-2.126-.513-.974-.513-2.277 0-3.909-2.127-.576-3.535-2.03-4.225-4.36-.69-2.332-.415-4.576.827-6.734v-1.512c-.85-.625-1.126-2.075-.827-4.351.298-2.277 1.186-3.676 2.664-4.198.36-1.852 1.255-2.934 2.684-3.248 1.43-.314 2.656-.019 3.68.885 1.077-1.307 2.42-1.602 4.03-.885 1.609.717 2.191 1.912 1.748 3.586 1.869.606 2.796 2.113 2.78 4.521-.014 2.408-.42 3.857-1.22 4.347 1.622.917 2.287 2.308 1.994 4.173-.292 1.866-.957 3.004-1.994 3.415 1.016.91 1.296 2.108.84 3.596-.457 1.487-1.488 2.337-3.095 2.547.177 1.351.034 2.253-.429 2.707-.463.454-1.278.969-2.446 1.546l-1.68-4.253z">
                            </path>
                        </g>
                    </g>
                </symbol>
                <symbol viewBox="0 0 22 32" id="marker" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#EB5C3F" fill-rule="evenodd"
                        d="M11.917 32C3.972 22.709 0 15.709 0 11 0 5.21 4.925 0 11.917 0 17.075 0 22 5.21 22 11c0 4.709-3.361 11.709-10.083 21zm-.334-17c1.82 0 3.667-1.79 3.667-4s-1.847-4-3.667-4C8.847 7 7 8.79 7 11s1.847 4 4.583 4z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="menu-hamburger" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h24v2H0zm0 8h24v2H0zm0 8h24v2H0z" fill-rule="evenodd"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="north" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#4B575C" fill-rule="evenodd"
                        d="M12.941 21.19L20.3 3 3.628 12.634a.3.3 0 0 0 .182.558c3.044-.324 5.228.09 6.552 1.24 1.379 1.2 2.095 3.436 2.148 6.71l.16-.004a.141.141 0 0 0 .271.051z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="play" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18.752 12.832l-9.197 6.132A1 1 0 0 1 8 18.13V5.87a1 1 0 0 1 1.555-.833l9.197 6.132a1 1 0 0 1 0 1.664z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="select-arrow" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 13.727L6.636 8.364a.9.9 0 1 0-1.272 1.272L12 16.273l6.636-6.637a.9.9 0 1 0-1.272-1.272L12 13.727z">
                    </path>
                </symbol>
                <symbol viewBox="0 0 40 40" id="tret-logo" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <path id="za" d="M0 0h13.333v40H0z"></path>
                    </defs>
                    <g fill-rule="evenodd">
                        <use transform="translate(13.333)" xlink:href="#za"></use>
                        <path d="M0 11.667V0h11.667M40 11.667V0H28.333"></path>
                    </g>
                </symbol>
            </svg>
        </div>
        <img src="http://barkligallery.com/assets/public/images/barkli-map/7.jpg"><img
            src="http://barkligallery.com/assets/public/images/barkli-map/3.jpg"><img
            src="http://barkligallery.com/assets/public/images/barkli-map/1.jpg"><img
            src="http://barkligallery.com/assets/public/images/barkli-map/5.jpg"><img
            src="http://barkligallery.com/assets/public/images/barkli-map/8.jpg"><img
            src="http://barkligallery.com/assets/public/images/barkli-map/6.jpg"><img
            src="http://barkligallery.com/assets/public/images/first-joker.png"><img
            src="http://barkligallery.com/assets/public/images/renders-slider/render-slide-01a.png"><img
            src="http://barkligallery.com/assets/public/images/advant1.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant2.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant3.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant4.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant5.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant6.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant7.jpg"><img
            src="http://barkligallery.com/assets/public/images/advant8-2.jpg"><img
            src="http://barkligallery.com/assets/public/images/office.png"><img
            src="http://barkligallery.com/assets/public/images/first-joker.png"><img
            src="http://barkligallery.com/assets/public/videos/krasavin_1.jpg"><img
            src="http://barkligallery.com/assets/public/videos/clark.jpg"><img
            src="http://barkligallery.com/assets/public/videos/wanders.jpg"><img
            src="http://barkligallery.com/assets/public/videos/tregulova.jpg"><img
            src="http://barkligallery.com/assets/public/videos/tretyakovka.jpg">
    </div>

    <script>
        (function(t) {
            var r = new XMLHttpRequest();
            r.open('GET', '/assets/common/svg/sprite.svg', true);
            r.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            r.onreadystatechange = function() {
                if (r.readyState !== 4) return void 0;
                var lz = document.getElementById('LZ');
                if (!lz) {
                    document.createElement('DIV');
                    lz.id = 'LZ';
                    lz.className = 'LZ';
                    t.appendChild(lz);
                };
                var d = document.createElement('DIV');
                d.innerHTML = r.responseText;
                lz.appendChild(d);
            };
            r.send();
        })(document.body);
    </script>

    <div class="grid">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="barkli-gallery-floater js-bg-floater on-screen active">
        <a href="/" style="text-decoration: none">
            <div class="title">Barkli Gallery</div>
        </a>
    </div>

    <div class="main-menu-toggler js-main-menu-trigger on-screen ready">
        <div class="hamburger">
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div class="caption">MENU</div>
    </div>

    <header class="top">
        <div class="request-form-toggler-box">
            <div class="request-form-toggler js-popup-request-form-trigger on-screen">Schedule a showing</div>
        </div>
    </header>

    <div id="popup-policy">
        <div class="arr close js-close">
            <svg class="circle">
                <use xlink:href="#circle"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#close"></use>
            </svg>
        </div>
        <div class="container dbl-pad">
            <div class="scroll-box">
                <div class="title-block">
                    <h2>Consent to Personal Data Processing</h2>
                </div>
                <div class="policy-text mCustomScrollbar">
                    <div class="description-text">
                        <p>In accordance with Federal Law of 27.07.2006 ??? 152-FZ "On personal data", I freely, by my own
                            will and in my own interest, give my consent to processing (collection, recording,
                            systematization, accumulation, storage, correction (updating, modification), extraction,
                            usage, transfer, depersonalization, blocking and annulment) of my personal data listed
                            herein with/without using automatization to process the present e-mail compellation and to
                            issue the appropriate response to ZAO Mosinveststroi (hereinafter referred as Company)
                            located at: 119071, Moscow, Leninsky ave. 15A.</p>
                        <p>Personal data provided to the Company is liable to annulment, or anonymization, upon
                            realization of said processing or in case of lack of further need of achieving said
                            processing. I understand and agree with the fact that cessation of use of my personal data
                            by the Company, I have to file a letter of revocation of my Consent to Personal Data
                            Processing with the Company. In case of revocation of my Consent to Personal Data Processing
                            the Company has the right to continue the processing of my personal data without my consent
                            in cases, indicated in para. 2-11, part 1 sec. 6, part 2 sec. 10, part 2 sec. 11 of the
                            Federal Law of 27.07.2006 ??? 152-FZ "On personal data".</p>
                        <p>I agree with the fact that the Company, in order to clarify the information included in the
                            present compellation, and for the reason of keeping me up to date on the progress of the
                            analysis of the present compellation, may use the data, included in the present e-mail
                            compellation.</p>
                        <p>The Company would like to bring to your attention that the e-mail compellations, sent using
                            the Internet, are being transferred through insecure communications channels. The Company
                            shall not be held liable for the transmission security of the data.</p>
                    </div>
                </div>
                <div class="button-accept"><span>Agreed and accepted</span></div>
            </div>
        </div>
    </div>

    <div id="main-menu">

        <div class="menu-box js-menu-box" style="width: 488px; top: 88px; height: 628px;">
            <div class="menu">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/">Main</a>
                    </li>
                    <li>
                        <a href="/public/visual">Choose an apartment</a>
                    </li>
                    <li>
                        <a href="/environment">Environment</a>
                    </li>
                    <li>
                        <a href="/tech">Technical Info</a>
                    </li>
                    <li>
                        <a href="/process">Construction process</a>
                    </li>
                    <li>
                        <a href="/documentation">Documentation</a>
                    </li>
                    <li>
                        <a href="/news">News</a>
                    </li>
                    <li>
                        <a href="/contact">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="sub-menu">
                <a class="presentation" target="_blank"
                    href="uploads/files/presentation/barkli_gallery_presentation_en.pdf"
                    download="presentation"><span>DOWNLOAD PRESENTATION</span><span
                        class="sep"></span><span>4.08 MB</span></a>
                <form class="search-box js-search-box" action="https://yandex.ru/search/site/" method="GET">
                    <input type="hidden" name="lr" value="213">
                    <input type="hidden" name="searchid" value="2300657">
                    <input type="text" name="text" value="">
                    <div class="search-trigger js-search-trigger">SEARCH</div>
                    <button class="search">SEARCH</button>
                </form>
            </div>
        </div>

        <div class="site-box js-site-box" style="top: 88px; right: 88px; height: 612px;">
            <div class="site"></div>
        </div>

    </div>

    <div id="request-form" class="js-popup-request-form">

        <div class="left-panel js-left-panel">
            <h2>Schedule<br>a private<br>showing</h2>
            <!--		<span class="come">-->
            <!--</span>-->
            <span class="sep"></span>

            <h2>SALES<br> OFFICE</h2>

            <div class="address">Lavrushinsky per., 17/2, Moscow</div>
            <div class="phone comagic_phone2_link">+7 495 320-02-98</div>
        </div>

        <div class="right-panel js-right-panel">
            <div class="form-wrap">
                <form action="/send/request_form.json" method="POST" data-valid="0" class="invalid-form">
                    <div class="thank-box">
                        <div class="thank-title">Thank you</div>
                        <div class="thank-note">We will contact you shortly</div>
                    </div>
                    <div class="title"></div>

                    <fieldset>

                        <div class="input brd name">
                            <input type="text" name="name" value="" data-validator="name" data-evt="1" data-valid="0">
                            <span class="placeholder">Your name</span>
                        </div>

                        <div class="input brd phone">
                            <input type="text" name="phone" value="" data-validator="phone" data-evt="1" data-valid="0">
                            <span class="placeholder">Phone</span>
                        </div>

                        <div class="input brd message">
                            <input type="text" name="message" data-evt="1">
                            <span class="placeholder">Tell us what interests you</span>
                        </div>

                    </fieldset>

                    <fieldset>
                        <div class="input checkbox agree js-checkbox modal-check" data-valid="0">
                            <input id="popup_rf_agree_cb" type="checkbox" name="agree" value="1" data-validator="agree"
                                data-evt="1">
                            <label for="popup_rf_agree_cb">I agree with <a href="#" class="js-popup-policy-trigger"
                                    data-accept="modal-check" onclick="window.event.preventDefault();return false;">the
                                    terms of communication</a></label>
                        </div>
                    </fieldset>

                    <button class="submit idle">
                        <div class="caption js-caption animated"><span>send</span></div>
                        <div class="check js-check">
                            <svg>
                                <use xlink:href="#check"></use>
                            </svg>
                            <div class="done">DONE</div>
                        </div>
                        <div class="line-box js-line">
                            <div class="line"></div>
                        </div>
                    </button>

                </form>
            </div>

            <div class="arr close js-close">
                <svg class="circle">
                    <use xlink:href="#circle"></use>
                </svg>
                <svg class="icon">
                    <use xlink:href="#close"></use>
                </svg>
            </div>
        </div>

    </div>

    <div class="slider-popup">

    </div>

    <div id="email-form" class="js-popup-email-form">
        <div class="right-panel js-right-panel">
            <div class="form-wrap">
                <form action="/send/request_email_form.json" method="POST" data-valid="0" class="invalid-form">
                    <div class="thank-box">
                        <div class="thank-title">Thank you</div>
                        <div class="thank-note">We sent a message to your email</div>
                    </div>
                    <div class="title"></div>

                    <fieldset>
                        <div class="input brd email">
                            <input type="text" name="email" value="" data-validator="email" data-evt="1" data-valid="0">
                            <input type="hidden" name="flat_id" value="" data-evt="1">
                            <span class="placeholder">E-mail</span>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="input checkbox agree js-checkbox email-check" data-valid="0">
                            <input id="email_plan_agree_cb" type="checkbox" name="agree" value="1" data-validator="agree"
                                autocomplete="off" data-evt="1">
                            <label for="email_plan_agree_cb">I agree with <a href="#" class="js-popup-policy-trigger"
                                    data-accept="email-check" onclick="window.event.preventDefault();return false;">the
                                    terms of communication</a></label>
                        </div>
                    </fieldset>

                    <button class="submit idle">
                        <div class="caption js-caption animated"><span>Send a plan to E-mail</span></div>
                        <div class="check js-check"><svg>
                                <use xlink:href="#check"></use>
                            </svg>
                            <div class="done">DONE</div>
                        </div>
                        <div class="line-box js-line">
                            <div class="line"></div>
                        </div>
                    </button>

                </form>
            </div>
        </div>
        <div class="arr close js-close">
            <svg class="circle">
                <use xlink:href="#circle"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#close"></use>
            </svg>
        </div>
    </div>

    <div id="screen" class="___class_+?1288___">
        <div id="content" style="top: auto;">

            <div class="BarkliLoader BarkliIndexLoader js-barkli-index-loader loaded"
                style="width: 1903px; height: 100vh;">
                <div class="joker-container">
                    <div class="joker animated"
                        style="width: 1727px; height: 2658px; transform: translate(-50%, -828.04px) scale(1);">
                        <div class="initial-size">
                            <div class="image"></div>
                        </div>
                        <div class="color" style="transform: translateY(0%);">
                            <div class="image" style="transform: translateY(0%);"></div>
                        </div>
                        <div class="gray">
                            <div class="image"></div>
                        </div>
                    </div>

                    <div class="index-joker-text-block">
                        <h1>barkli gallery</h1>
                        <div class="text middle-text">Club house with a collection of 43 apartments<br>just one minute
                            walk from the Tretyakov Gallery</div>
                    </div>
                    <div class="index-joker-next-page noselect js-scroll-down">scroll down</div>

                </div>

                <div class="l"></div>
                <div class="r"></div>
                <div class="t"></div>
                <div class="b"></div>

                <div class="index-joker-line-pos">
                    <div class="px-line js-px-line reset-transitions" data-mode="index-screen" style="height: 150px;">
                    </div>
                </div>
            </div>

            <section
                class="names-collection js-floating-title-box js-cards-slider shsiv js-should-scroll-into-viewport scrolled_into_viewport"
                data-cards-type="normal">
                <div class="floating-layer-1 js-floating-layer" style="transform: translateY(0px);"></div>
                <div class="floating-title js-floating-title" style="transform: translateY(0px);">
                    <div class="transparent">THE NAMES</div>
                    <div class="blue js-top"><span>THE NAMES</span></div>
                    <div class="white js-bottom" style="top: 0px; height: 132px;"><span
                            style="transform: translateY(0px);">THE NAMES</span></div>
                </div>
                <div class="floating-layer-2 js-floating-layer" style="transform: translateY(0px);">

                    <div class="container">
                        <div class="text-box js-hide-text">
                            <div class="title">FROM BAKST TO BARKLI</div>
                            <p>A modern residential house inspired by the art of the early twentieth century, the works
                                of Bakst and the proximity of the Tretyakov Gallery. The collection of ideas put
                                together in the Barkli Gallery project is described by people who embodied this elegant
                                concept.</p>
                            <div class="px-line js-px-line reset-transitions" data-mode="names-collection"></div>
                        </div>
                    </div>

                    <div class="cards js-cards" style="width: 1903px;">

                        <div class="arr back2first js-back2first">
                            <svg class="icon">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </div>

                        <div class="card smaller js-card" vimeo-id="241867462"
                            style="width: 477px; height: 340px; transform: translateX(1588px);">
                            <div class="visual js-visual with-video" style="width: 477px; height: 340px;">
                                <div class="img">
                                    <video style="width: auto; height: 100%;" preload="metadata" muted="" loop=""
                                        poster="/assets/public/videos/krasavin_1.jpg">
                                        <source src="http://barkligallery.com/assets/public/videos/krasavin_1.mp4"
                                            type="video/mp4">
                                    </video>
                                    <div class="name">Interview with Alexander Krasavin</div>
                                    <div class="time">3:24</div>
                                </div>
                                <div class="arrow js-arrow">
                                    <svg class="circle-border">
                                        <use xlink:href="#circle"></use>
                                    </svg>
                                    <svg class="play">
                                        <use xlink:href="#play"></use>
                                    </svg>
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">BARKLI</div>
                                    <p class="text">One of the leading real estate development companies in
                                        Russia, founded in 1993.<br>The Barkli???s team creates a comfortable and
                                        aesthetic space for the modern man???s life.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card smaller js-card" vimeo-id="241868365"
                            style="width: 477px; height: 340px; transform: translateX(2255px);">
                            <div class="visual js-visual with-video" style="width: 477px; height: 340px;">
                                <div class="img">
                                    <video style="width: auto; height: 100%;" preload="metadata" muted="" loop=""
                                        poster="/assets/public/videos/clark.jpg">
                                        <source src="http://barkligallery.com/assets/public/videos/clark.mp4"
                                            type="video/mp4">
                                    </video>
                                    <div class="name">Interview with Michael Clark</div>
                                    <div class="time">2:03</div>
                                </div>
                                <div class="arrow js-arrow">
                                    <svg class="circle-border">
                                        <use xlink:href="#circle"></use>
                                    </svg>
                                    <svg class="play">
                                        <use xlink:href="#play"></use>
                                    </svg>
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box js-content-box">
                                    <div class="title">AEDAS + RHWL</div>
                                    <p class="text">The British architect bureau Aedas has existed for more
                                        than half a century and is one of the five most demanded in the world. These
                                        eminent architects like no one know how to combine tradition and technology.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card smaller js-card" vimeo-id="241868965"
                            style="width: 477px; height: 340px; transform: translateX(2922px);">
                            <div class="visual js-visual with-video" style="width: 477px; height: 340px;">
                                <div class="img">
                                    <video style="width: auto; height: 100%;" preload="metadata" muted="" loop=""
                                        poster="/assets/public/videos/wanders.jpg">
                                        <source src="http://barkligallery.com/assets/public/videos/wanders.mp4"
                                            type="video/mp4">
                                    </video>
                                    <div class="name">Interview with Marcel Wanders</div>
                                    <div class="time">2:28</div>
                                </div>
                                <div class="arrow js-arrow">
                                    <svg class="circle-border">
                                        <use xlink:href="#circle"></use>
                                    </svg>
                                    <svg class="play">
                                        <use xlink:href="#play"></use>
                                    </svg>
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">MARCEL WANDERS</div>
                                    <p class="text">The Dutchman Marcel Wanders is a living legend of modern
                                        design, the author of incredibly bright and unexpected concepts.<br>For Barkli
                                        Gallery, Marcel created the lobby design, it became his first project in Russia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card smaller js-card" vimeo-id="241872285"
                            style="width: 477px; height: 340px; transform: translateX(3589px);">
                            <div class="visual js-visual with-video" style="width: 477px; height: 340px;">
                                <div class="img">
                                    <video style="width: auto; height: 100%;" preload="metadata" muted="" loop=""
                                        poster="/assets/public/videos/tregulova.jpg">
                                        <source src="http://barkligallery.com/assets/public/videos/tregulova.mp4"
                                            type="video/mp4">
                                    </video>
                                    <div class="name">Interview with Zelfira Tregulova</div>
                                    <div class="time">2:10</div>
                                </div>
                                <div class="arrow js-arrow">
                                    <svg class="circle-border">
                                        <use xlink:href="#circle"></use>
                                    </svg>
                                    <svg class="play">
                                        <use xlink:href="#play"></use>
                                    </svg>
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">THE TRETYAKOV GALLERY</div>
                                    <p class="text">The main museum of Russian national art, reflecting its
                                        unique contribution to world culture.<br>It is a hospitable museum, known for
                                        its rich collection and variety of ideas presented.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="dots js-dots">
                        <li class="dot zero active">
                            <div class="bullet"></div>
                            <div class="number">00</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer" style="stroke-dashoffset: 190px;">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">01</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">02</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">03</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">04</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                    </ul>
                </div>

            </section>

            <section class="location s-a s-a-a">
                <div class="container dbl-pad">
                    <div class="title-block">
                        <div class="sub-title sa-ct1">Location</div>
                        <h2 class="sa-ct1">SURROUNDED BY ART</h2>
                    </div>
                    <div class="description-text col4 sa-ct2">The surroundings of Barkli Gallery are a concentration
                        of cultural and historically significant places. The evening walk of a local resident takes
                        place among architectural masterpieces of different styles and periods - from the church of "Joy
                        of All Who Sorrow" to the Dolgovs??? estate and the mansion of Baron von Reck.</div>
                </div>
                <div class="container tri-pad">
                    <div class="ko-js description-text dbl-top-pad col4 sa-ct3" style="padding-bottom:10px;">
                        Through the streets full of the quiet dignity of the old city, you can walk to the largest
                        pedestrian area of Moscow which runs from the Museon Art Park to the Sparrow Hills. </div>
                </div>
                <a class="link ko-link sa-ct4" href="/environment" style="left: 418.167px;">All objects</a>

                <div class="map js-barkli-map sa-o3" style="width: 1276px; height: 702px;">
                    <div class="map-layers js-map-layers" style="width: 1296px; height: 702px;">
                        <svg class="layer layer-1 js-layer-1">
                            <use xlink:href="#map-layer-1"></use>
                        </svg>
                        <svg class="layer layer-2 js-layer-2">
                            <use xlink:href="#map-layer-2"></use>
                        </svg>
                    </div>
                </div>

                <div class="map-overlay js-map-overlay sa-o3" style="width: 1276px; height: 702px;">


                    <div class="dot js-dot img7" data-x="762" data-y="84" data-rad="400" vimeo-id="241866107"
                        data-loader-text="Kremlin"
                        style="left: 686px; top: 76px; transform: translate(-50%, -50%) scale(0);">
                        <div class="play js-play" style="opacity: 0; transform: translate(-50%, -50%) scale(1);">
                            <svg>
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- 		<div class="dot js-dot img2" data-x="446" data-y="217" data-rad="400" vimeo-id="230582637" data-loader-text="Pushkin Museum">
                                                                                                                                                                                                                        <div class="play js-play"><svg><use xlink:href="#play"></use></svg></div>
                                                                                                                                                                                                                    </div> -->


                    <div class="dot js-dot img3" data-x="954" data-y="380" data-rad="400" vimeo-id="241867246"
                        data-loader-text="Hram ikony Bozhiej Materi ??Vsekh skorbyashchih Radost'??"
                        style="left: 859px; top: 342px; transform: translate(-50%, -50%) scale(0);">
                        <div class="play js-play" style="opacity: 0; transform: translate(-50%, -50%) scale(0);">
                            <svg>
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>


                    <div class="dot js-dot img1" data-x="844" data-y="504" data-rad="400" vimeo-id="241866956"
                        data-loader-text="Tretyakov Gallery"
                        style="left: 760px; top: 454px; transform: translate(-50%, -50%) scale(0);">
                        <div class="play js-play" style="opacity: 0; transform: translate(-50%, -50%) scale(0);">
                            <svg>
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- 		<div class="dot js-dot img4" data-x="996" data-y="523" data-rad="400" vimeo-id="230582727" data-loader-text="Ordinskiy tupik, 6">
                                                                                                                                                                                                                        <div class="play js-play"><svg><use xlink:href="#play"></use></svg></div>
                                                                                                                                                                                                                    </div> -->


                    <div class="dot js-dot img5" data-x="946" data-y="586" data-rad="400" vimeo-id="241867136"
                        data-loader-text="The Demidovs' Manor"
                        style="left: 851px; top: 527px; transform: translate(-50%, -50%) scale(0);">
                        <div class="play js-play" style="opacity: 0; transform: translate(-50%, -50%) scale(0);">
                            <svg>
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>


                    <div class="dot js-dot img8" data-x="650" data-y="680" data-rad="400" vimeo-id="241866517"
                        data-loader-text="Muzeon Park"
                        style="left: 585px; top: 612px; transform: translate(-50%, -50%) scale(0);">
                        <div class="play js-play" style="opacity: 0; transform: translate(-50%, -50%) scale(0);">
                            <svg>
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>


                    <div class="dot js-dot img6" data-x="992" data-y="680" data-rad="400" vimeo-id="241866366"
                        data-loader-text="Marfo-mariinskaya obitel'"
                        style="left: 893px; top: 612px; transform: translate(-50%, -50%) scale(0);">
                        <div class="play js-play" style="opacity: 0; transform: translate(-50%, -50%) scale(0);">
                            <svg>
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="blinkin-dot" style="display: block; left: 686px; top: 76px;"><svg>
                            <use xlink:href="#play"></use>
                        </svg></div>
                    <div class="blinkin-dot" style="display: block; left: 859px; top: 342px;"><svg>
                            <use xlink:href="#play"></use>
                        </svg></div>
                    <div class="blinkin-dot" style="display: block; left: 760px; top: 454px;"><svg>
                            <use xlink:href="#play"></use>
                        </svg></div>
                    <div class="blinkin-dot" style="display: block; left: 851px; top: 527px;"><svg>
                            <use xlink:href="#play"></use>
                        </svg></div>
                    <div class="blinkin-dot" style="display: block; left: 585px; top: 612px;"><svg>
                            <use xlink:href="#play"></use>
                        </svg></div>
                    <div class="blinkin-dot" style="display: block; left: 893px; top: 612px;"><svg>
                            <use xlink:href="#play"></use>
                        </svg></div>
                </div>
            </section>

            <section class="slider wide-slider js-wide-slider" data-resize-mode="wide-slider" style="width: 1600px;">
                <div class="stage">
                    <div class="item fxRollX active"
                        data-src="http://barkligallery.com/uploads/images/slider/building/b6cbfd614bf652c2fec461b6c51f5868.jpg">
                        <div class="title-block">
                            <div class="title">Museum of Contemporary Art "Garage"</div>
                            <div class="subtitle">20 minutes walk</div>
                        </div>
                        <div class="image"
                            style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/building/b6cbfd614bf652c2fec461b6c51f5868.jpg&quot;);">
                        </div>
                    </div>
                    <div class="item fxRollX "
                        data-src="http://barkligallery.com/uploads/images/slider/building/30042d65dbde03ca7def6d58d5e5373e.jpg">
                        <div class="title-block">
                            <div class="title">Tretyakov Gallery</div>
                            <div class="subtitle">1 minute walk</div>
                        </div>
                        <div class="image"
                            style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/building/30042d65dbde03ca7def6d58d5e5373e.jpg&quot;);">
                        </div>
                    </div>
                    <div class="item fxRollX "
                        data-src="http://barkligallery.com/uploads/images/slider/building/5a93d1b3bc2bf19674d4d16f7e68ca72.jpg">
                        <div class="title-block">
                            <div class="title">Kremlin</div>
                            <div class="subtitle">10 minutes walk</div>
                        </div>
                        <div class="image"
                            style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/building/5a93d1b3bc2bf19674d4d16f7e68ca72.jpg&quot;);">
                        </div>
                    </div>
                    <div class="item fxRollX "
                        data-src="http://barkligallery.com/uploads/images/slider/building/ac06775a232e818849244a3dab5ad8a0.jpg">
                        <div class="title-block">
                            <div class="title">Church of Clement of the Pope</div>
                            <div class="subtitle">3 minutes walk</div>
                        </div>
                        <div class="image"
                            style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/building/ac06775a232e818849244a3dab5ad8a0.jpg&quot;);">
                        </div>
                    </div>
                    <div class="item fxRollX "
                        data-src="http://barkligallery.com/uploads/images/slider/building/091fe02b62e082b7b59bc37764d407b7.jpg">
                        <div class="title-block">
                            <div class="title">Kadashevskaya Embankment</div>
                            <div class="subtitle">5 minutes walk</div>
                        </div>
                        <div class="image"
                            style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/building/091fe02b62e082b7b59bc37764d407b7.jpg&quot;);">
                        </div>
                    </div>

                </div>
                <div class="arr arrl js-prev">
                    <svg class="circle-border">
                        <use xlink:href="#circle"></use>
                    </svg>
                    <svg class="circle-timer white js-circle-timer">
                        <use xlink:href="#circle"></use>
                    </svg>
                    <svg class="arr">
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
                <div class="arr arrr js-next">
                    <svg class="circle-border">
                        <use xlink:href="#circle"></use>
                    </svg>
                    <svg class="circle-timer white js-circle-timer" style="stroke-dashoffset: 190px;">
                        <use xlink:href="#circle"></use>
                    </svg>
                    <svg class="arr">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </section>

            <section class="ttk-gallery js-ttk-gallery s-a s-a-a" style="display: none">
                <div class="joker js-side-joker">
                    <div class="joker-box js-joker-box"><img
                            src="http://barkligallery.com/assets/public/images/first-joker.png"></div>
                </div>

                <div class="container dbl-pad pad-top">
                    <div class="title-block">
                        <div class="sub-title sa-ct1">A friend of art</div>
                        <h2 class="sa-ct1">YOU AND<br>THE TRETYAKOV GALLERY</h2>
                    </div>
                    <div class="description-text sa-ct2">Every resident of Barkli Gallery becomes the owner of the
                        golden card of the Tretyakov Gallery???s friend.<p>This is a natural continuation of the history
                            of Russian art, which traditionally relies on the support of wealthy people, those who know
                            how to enjoy a high standard of living and art.</p>
                    </div>
                </div>

                <div class="container dbl-pad lifted">
                    <div class="title-block last-title">
                        <div class="sub-title sa-ct3">Facade</div>
                        <h2 class="sa-ct3">ART IN<br>EVOLUTION</h2>
                    </div>
                    <div class="description-text shift-right sa-o4">
                        <p>The historical facade preserves the architectural canons of Moscow at the beginning of the
                            20th century. Floral motifs of Art Nouveau and geometric forms of neoclassicism confidently
                            interact with the aesthetics of our days.</p>
                    </div>
                </div>

                <div class="ttk-video-box js-ttk-video-box sa-ct2" vimeo-id="241866017">
                    <div class="ttk-video js-video">
                        <video style="width: 100%; height: auto;" muted="" preload="metadata" loop=""
                            poster="/assets/public/videos/tretyakovka.jpg">
                            <source src="http://barkligallery.com/assets/public/videos/tretyakovka.mp4" type="video/mp4">
                        </video>
                        <div class="video-play js-video-play">
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="play">
                                <use xlink:href="#play"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="ttk-card">
                        <div class="text">
                            <div class="name">golden card</div>
                            <svg class="logo">
                                <use xlink:href="#tret-logo"></use>
                            </svg>
                        </div>
                    </div>
                </div>

            </section>

            <section class="house" style="display: none">
                <div class="slider js-renders-slider" data-resize-mode="house" style="height: 872px;">

                    <div class="stage">
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/assets/public/images/renders-slider/render-slide-01b.jpg">
                            <div class="image"
                                style="background-image: url(&quot;/assets/public/images/renders-slider/render-slide-01b.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX active"
                            data-src="http://barkligallery.com/uploads/images/slider/image/1783c1a761123ece6c10504542c7f341.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/1783c1a761123ece6c10504542c7f341.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/36720051c05c0a61a307cddf6f76931f.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/36720051c05c0a61a307cddf6f76931f.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/1a1d3f383100e979c8984a971a31011f.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/1a1d3f383100e979c8984a971a31011f.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/c8f32de7a5072d3eb5bc955f34f81f68.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/c8f32de7a5072d3eb5bc955f34f81f68.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/1425d08b3d884beeb83959d3ff2e91f8.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/1425d08b3d884beeb83959d3ff2e91f8.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/8f1dddd9595d73255b2ffee5ec524a99.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/8f1dddd9595d73255b2ffee5ec524a99.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/43b4e9a96850fb7fcf0cd4a67ef64979.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/43b4e9a96850fb7fcf0cd4a67ef64979.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/31c8797fe3e4cef0c5a3c7fb5d3c4893.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/31c8797fe3e4cef0c5a3c7fb5d3c4893.jpg&quot;);">
                            </div>
                        </div>
                        <div class="item fxRollX"
                            data-src="http://barkligallery.com/uploads/images/slider/image/16a170aeaa5661ac420657fbd57a246b.jpg">
                            <div class="image"
                                style="background-image: url(&quot;http://barkligallery.com/uploads/images/slider/image/16a170aeaa5661ac420657fbd57a246b.jpg&quot;);">
                            </div>
                        </div>
                    </div>

                    <div class="additional-stage js-additional-stage" style="height: 111px; top: -111px;">
                        <div class="item fxRollX">
                            <div class="image"
                                style="background-image: url('/assets/public/images/renders-slider/render-slide-01a.png');">
                            </div>
                        </div>
                        <div class="item fxRollX active"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                        <div class="item fxRollX"></div>
                    </div>

                    <div class="arr arrl js-prev">
                        <svg class="circle-border">
                            <use xlink:href="#circle"></use>
                        </svg>
                        <svg class="circle-timer white js-circle-timer">
                            <use xlink:href="#circle"></use>
                        </svg>
                        <svg class="arr">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </div>
                    <div class="arr arrr js-next">
                        <svg class="circle-border">
                            <use xlink:href="#circle"></use>
                        </svg>
                        <svg class="circle-timer white js-circle-timer" style="stroke-dashoffset: 190px;">
                            <use xlink:href="#circle"></use>
                        </svg>
                        <svg class="arr">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </div>
                </div>
            </section>

            <section class="house">
                <div class="slider js-renders-slider" data-resize-mode="house" style="height: 872px;">
                    <iframe allow="vr" allowfullscreen="" frameborder="0" style="height: 100%; width:100%;"
                        src="https://my.matterport.com/show/?m=1HPbtLDTsdC&amp;title=0&amp;f=0&amp;mls=1&amp;play=1&amp;qs=0&amp;brand=0&amp;dh=1&amp;gt=0&amp;hr=0&amp;vr=0&amp;pin=0"
                        id="iFrameResizer1" scrolling="no" style="overflow: hidden;"
                        data-gtm-yt-inspected-2710126_86="true"></iframe>
                </div>
            </section>

            <section class="interiors js-interiors js-floating-title-box">
                <div class="floating-title js-floating-title" style="transform: translateY(0px);">INTERIORS</div>
                <div class="floating-layer-2 js-floating-layer" style="transform: translateY(0px);">

                    <div class="container">
                        <div class="title-block">
                            <h2>COMPLETENESS<br>OF THE PICTURE</h2>
                        </div>
                        <div class="description-text">
                            <p>You rarely see an unfinished picture in the collection of a self-respecting museum, and
                                in Barkli Gallery you will not find apartments without finishing. There are two elegant
                                styles inspired by Art Nouveau.</p>
                        </div>

                        <div class="menu js-interiors-menu">

                            <div class="position js-position">
                                <svg class="circle-border">
                                    <use xlink:href="#circle"></use>
                                </svg>
                                <svg class="circle-timer js-circle-timer" style="stroke-dashoffset: 190px;">
                                    <use xlink:href="#circle"></use>
                                </svg>
                                <div class="number js-number">01</div>
                            </div>

                            <div class="menu-item js-block active">
                                <div class="title js-title">
                                    <div class="line"></div>
                                    AMBER DECO
                                </div>
                                <div class="options-box js-options-box" style="height: 146px;">
                                    <ul class="options js-options">
                                        <li class="active" data-option="0">Living room</li>
                                        <li data-option="1">Entrance hall</li>
                                        <li data-option="2">Bedroom</li>
                                        <li data-option="3">Cabinet</li>
                                        <li data-option="4">Bathroom</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="menu-item js-block">
                                <div class="title js-title">
                                    <div class="line"></div>
                                    CLASSIC BLISS
                                </div>
                                <div class="options-box js-options-box">
                                    <ul class="options js-options">
                                        <li class="active" data-option="5">Living room</li>
                                        <li data-option="6">Entrance hall</li>
                                        <li data-option="7">Bedroom</li>
                                        <li data-option="8">Cabinet</li>
                                        <li data-option="9">Bathroom</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider js-slider">
                        <div class="stage">
                            <div class="item fxRollX active"
                                data-src="http://barkligallery.com/assets/public/images/interior/amber-deco/livingroom.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/amber-deco/livingroom.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/amber-deco/corridor.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/amber-deco/corridor.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/amber-deco/bedroom1.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/amber-deco/bedroom1.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/amber-deco/cabinet.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/amber-deco/cabinet.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/amber-deco/bath1.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/amber-deco/bath1.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/classic/livingroom1.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/classic/livingroom1.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/classic/corridor.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/classic/corridor.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/classic/bedroom1.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/classic/bedroom1.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/classic/cabinet.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/classic/cabinet.jpg&quot;);">
                                </div>
                            </div>
                            <div class="item fxRollX"
                                data-src="http://barkligallery.com/assets/public/images/interior/classic/bath1.jpg">
                                <div class="image"
                                    style="background-image: url(&quot;/assets/public/images/interior/classic/bath1.jpg&quot;);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="wrapper">

                <div class="content">
                    <div class="bg-shape">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405214/starwars/logo.png"
                            alt="">
                    </div>


                    <div class="product-img">

                        <div class="product-img__item" id="img1">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405217/starwars/item-1.png"
                                alt="star wars" class="product-img__img">
                        </div>

                        <div class="product-img__item" id="img2">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405217/starwars/item-2.png"
                                alt="star wars" class="product-img__img">
                        </div>

                        <div class="product-img__item" id="img3">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405218/starwars/item-3.png"
                                alt="star wars" class="product-img__img">
                        </div>

                        <div class="product-img__item" id="img4">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405215/starwars/item-4.png"
                                alt="star wars" class="product-img__img">
                        </div>


                    </div>



                    <div class="product-slider">
                        <button class="prev disabled">
                            <span class="icon">
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-left"></use>
                                </svg>
                            </span>
                        </button>
                        <button class="next">
                            <span class="icon">
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </span>
                        </button>

                        <div class="product-slider__wrp swiper-wrapper">
                            <div class="product-slider__item swiper-slide" data-target="img4">
                                <div class="product-slider__card">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405223/starwars/item-4-bg.jpg"
                                        alt="star wars" class="product-slider__cover">
                                    <div class="product-slider__content">
                                        <h1 class="product-slider__title">
                                            STORMTROPER <br>
                                            HELMET
                                        </h1>
                                        <span class="product-slider__price">$1.299,<sup>99</sup></span>
                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">HELMET SIZE</div>

                                                <div class="product-labels__group">
                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type5">
                                                        <span class="product-labels__txt">S</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type5"
                                                            checked>
                                                        <span class="product-labels__txt">M</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type5">
                                                        <span class="product-labels__txt">L</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type5">
                                                        <span class="product-labels__txt">XL</span>
                                                    </label>

                                                </div>

                                            </div>

                                            <span class="hr-vertical"></span>

                                            <div class="product-inf">
                                                <div class="product-inf__percent">
                                                    <div class="product-inf__percent-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                            viewBox="0 0 100 100">
                                                            <defs>
                                                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%"
                                                                    y2="100%">
                                                                    <stop offset="0%" stop-color="#0c1e2c"
                                                                        stop-opacity="0" />
                                                                    <stop offset="100%" stop-color="#cb2240"
                                                                        stop-opacity="1" />
                                                                </linearGradient>
                                                            </defs>
                                                            <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300"
                                                                stroke="#cb2240" stroke-width="4" fill="none" />
                                                        </svg>
                                                    </div>
                                                    <div class="product-inf__percent-txt">
                                                        80%
                                                    </div>
                                                </div>

                                                <span class="product-inf__title">DURABILITY RATE</span>
                                            </div>

                                        </div>

                                        <div class="product-slider__bottom">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-slider__item swiper-slide" data-target="img1">
                                <div class="product-slider__card">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-1-bg.jpg"
                                        alt="star wars" class="product-slider__cover">
                                    <div class="product-slider__content">
                                        <h1 class="product-slider__title">
                                            IMPERIAL ARMY???S <br> TIE FIGHTER
                                        </h1>
                                        <span class="product-slider__price">$9.999,<sup>99</sup></span>
                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">ENGINE UNIT</div>

                                                <div class="product-labels__group">
                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type1"
                                                            checked>
                                                        <span class="product-labels__txt">P-S4 TWIN</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type1">
                                                        <span class="product-labels__txt">P-W401</span>
                                                    </label>
                                                </div>

                                            </div>

                                            <span class="hr-vertical"></span>

                                            <div class="product-inf">
                                                <div class="product-inf__percent">
                                                    <div class="product-inf__percent-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                            viewBox="0 0 100 100">
                                                            <defs>
                                                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%"
                                                                    y2="100%">
                                                                    <stop offset="0%" stop-color="#0c1e2c"
                                                                        stop-opacity="0" />
                                                                    <stop offset="100%" stop-color="#cb2240"
                                                                        stop-opacity="1" />
                                                                </linearGradient>
                                                            </defs>
                                                            <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300"
                                                                stroke="#cb2240" stroke-width="4" fill="none" />
                                                        </svg>
                                                    </div>
                                                    <div class="product-inf__percent-txt">
                                                        75%
                                                    </div>
                                                </div>

                                                <span class="product-inf__title">DURABILITY</span>
                                            </div>

                                        </div>

                                        <div class="product-slider__bottom">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-slider__item swiper-slide" data-target="img2">
                                <div class="product-slider__card">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405222/starwars/item-2-bg.jpg"
                                        alt="star wars" class="product-slider__cover">
                                    <div class="product-slider__content">
                                        <h1 class="product-slider__title">
                                            KYLO REN'S <br> LIGHTSABER
                                        </h1>
                                        <span class="product-slider__price">$1.699,<sup>99</sup></span>
                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">VOLTAGE RANGE</div>

                                                <div class="product-labels__group">
                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type3"
                                                            checked>
                                                        <span class="product-labels__txt">2000 <sup>WATT</sup></span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type3">
                                                        <span class="product-labels__txt">2800 <sup>WATT</sup></span>
                                                    </label>
                                                </div>

                                                <div class="product-labels__title">LASER SIZE</div>

                                                <div class="product-labels__group">
                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type2">
                                                        <span class="product-labels__txt">S</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type2"
                                                            checked>
                                                        <span class="product-labels__txt">M</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type2">
                                                        <span class="product-labels__txt">L</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type2">
                                                        <span class="product-labels__txt">XL</span>
                                                    </label>

                                                </div>

                                            </div>

                                            <span class="hr-vertical"></span>

                                            <div class="product-inf">
                                                <div class="product-inf__percent">
                                                    <div class="product-inf__percent-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                            viewBox="0 0 100 100">
                                                            <defs>
                                                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%"
                                                                    y2="100%">
                                                                    <stop offset="0%" stop-color="#0c1e2c"
                                                                        stop-opacity="0" />
                                                                    <stop offset="100%" stop-color="#cb2240"
                                                                        stop-opacity="1" />
                                                                </linearGradient>
                                                            </defs>
                                                            <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300"
                                                                stroke="#cb2240" stroke-width="4" fill="none" />
                                                        </svg>
                                                    </div>
                                                    <div class="product-inf__percent-txt">
                                                        80%
                                                    </div>
                                                </div>

                                                <span class="product-inf__title">DURABILITY</span>
                                            </div>

                                        </div>

                                        <div class="product-slider__bottom">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-slider__item swiper-slide" data-target="img3">
                                <div class="product-slider__card">
                                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1536405215/starwars/item-3-bg.jpg"
                                        alt="star wars" class="product-slider__cover">
                                    <div class="product-slider__content">
                                        <h1 class="product-slider__title">
                                            IMPERIAL ARMY'S <br>
                                            DEATH STAR
                                        </h1>
                                        <span class="product-slider__price">$9.999,<sup>99</sup></span>
                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">HYPERDRIVE RATING</div>

                                                <div class="product-labels__group">
                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type6"
                                                            checked>
                                                        <span class="product-labels__txt">CLASS 4</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type6">
                                                        <span class="product-labels__txt">CLASS 20</span>
                                                    </label>
                                                </div>

                                                <div class="product-labels__title">ARMANENT</div>


                                                <div class="product-labels__group">
                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type7"
                                                            checked>
                                                        <span class="product-labels__txt">SUPERLASER</span>
                                                    </label>

                                                    <label class="product-labels__item">
                                                        <input type="radio" class="product-labels__checkbox" name="type7">
                                                        <span class="product-labels__txt">TURBOLASER</span>
                                                    </label>
                                                </div>

                                            </div>

                                            <span class="hr-vertical"></span>

                                            <div class="product-inf">
                                                <div class="product-inf__percent">
                                                    <div class="product-inf__percent-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                            viewBox="0 0 100 100">
                                                            <defs>
                                                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%"
                                                                    y2="100%">
                                                                    <stop offset="0%" stop-color="#0c1e2c"
                                                                        stop-opacity="0" />
                                                                    <stop offset="100%" stop-color="#cb2240"
                                                                        stop-opacity="1" />
                                                                </linearGradient>
                                                            </defs>
                                                            <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300"
                                                                stroke="#cb2240" stroke-width="4" fill="none" />
                                                        </svg>
                                                    </div>
                                                    <div class="product-inf__percent-txt">
                                                        80%
                                                    </div>
                                                </div>

                                                <span class="product-inf__title">DURABILITY RATE</span>
                                            </div>

                                        </div>

                                        <div class="product-slider__bottom">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <svg class="hidden" hidden>
                <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                    <path
                        d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                    </path>
                </symbol>
                <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                    <path
                        d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                    </path>
                </symbol>
            </svg>



            <section class="advantages js-cards-slider js-floating-title-box" data-cards-type="bigger"
                style="display: none;">
                <div class="floating-layer-1 js-floating-layer" style="transform: translateY(0px);"></div>
                <div class="floating-title js-floating-title" style="transform: translateY(0px);">
                    <div class="transparent">ADVANTAGES</div>
                    <div class="blue js-top"><span>ADVANTAGES</span></div>
                    <div class="white js-bottom" style="top: 0px; height: 132px;"><span
                            style="transform: translateY(0px);">ADVANTAGES</span></div>
                </div>
                <div class="floating-layer-2 js-floating-layer" style="transform: translateY(0px);">
                    <div class="cards js-cards" style="width: 1903px;">

                        <div class="arr back2first js-back2first">
                            <svg class="icon">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </div>

                        <div class="card bigger js-card active expand open"
                            style="width: 477px; height: 340px; transform: translateX(317px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant1.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">KREMLIN VIEW</div>
                                    <p class="text">From the top level apartments one can admire a
                                        magnificent Kremlin view. Other windows look out on the green cozy park and on
                                        the Ordynka lanes that keep the spirit of the old Moscow.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(1461px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant2.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">WOOD BURNING<br>FIREPLACES</div>
                                    <p class="text">Feeling the warm of natural fire, hearing the wood
                                        crackling ??? that will definitely create a special atmosphere of your family
                                        dinner.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(2128px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant3.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">PERSONAL TERRACES</div>
                                    <p class="text">The occupants will enjoy their morning coffee on their
                                        own secluded terraces, and the penthouse owners will have an access to the
                                        equipped rooftop area.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(2795px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant4.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">FRENCH BALCONIES</div>
                                    <p class="text">Elegant French balconets impart a peculiar charm to the
                                        facades, tall windows fill the apartment with light and wooden frames save the
                                        warmth and quietness of your home.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(3462px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant5.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">SECRET GARDEN</div>
                                    <p class="text">In the courtyard, hidden from the outside view, it is
                                        nice to have a stroll in the shade of the beautiful greenery ??? the landscape
                                        follows the ???secret garden??? concept.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(4129px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant6.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">MARCEL WANDERS???<br>LOBBY INTERIOR </div>
                                    <p class="text">Reception, caf?? with summer terrace and community zone
                                        for business meeting are planned in the entrance lobby marvelously designed by
                                        Marcel Wanders.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(4796px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant7.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">DESIGNER PARKING</div>
                                    <p class="text">The excellent design of each part of the building is an
                                        essential element of the BG project where the underground parking interior is of
                                        the same significance as the apartment itself.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card bigger js-card"
                            style="width: 477px; height: 340px; transform: translateX(5463px);">
                            <div class="visual js-visual" style="width: 477px; height: 340px;">
                                <div class="img"
                                    style="background-image:url(/assets/public/images/advant8-2.jpg);"></div>
                                <div class="arrow small js-arrow">
                                    <svg class="arr">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="content js-content" style="width: 477px; height: 340px;">
                                <div class="content-box">
                                    <div class="title">HIGH CEILINGS</div>
                                    <p class="text">The height of the ceilings in the apartments achieve 4.2
                                        m. Due to the innovative air humidifying and cleaning system it is easy to keep
                                        the spacious rooms clean and tidy. <a href="/tech">See TECHNICAL CHARACTERISTICS
                                            for more details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="dots js-dots">
                        <li class="dot active">
                            <div class="bullet"></div>
                            <div class="number">01</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer" style="stroke-dashoffset: 190px;">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">02</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">03</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">04</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">05</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">06</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">07</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                        <li class="dot">
                            <div class="bullet"></div>
                            <div class="number">08</div>
                            <svg class="circle-border">
                                <use xlink:href="#circle"></use>
                            </svg>
                            <svg class="circle-timer js-circle-timer">
                                <use xlink:href="#circle"></use>
                            </svg>
                        </li>
                    </ul>
                </div>

            </section>

            <section class="flats-collection">

                <div class="container">
                    <div class="title-block">
                        <h2>THE COLLECTION<br>OF 43 APARTMENTS</h2>
                    </div>
                    <div class="description-text col4">
                        <p>Solid exterior is combined with rich content: behind the natural stone of historical facades
                            of the beginning of the XX century, advanced technologies, modern engineering systems and
                            actual design solutions are hidden.</p>
                    </div>
                    <a class="link" href="/public/visual">Choose an apartment</a>
                </div>

                <div class="building js-building" data-mode="index"
                    style="width: 700px; height: 560px; margin-right: 240px;">
                    <svg class="building">
                        <use xlink:href="#home"></use>
                    </svg>

                    <svg class="hover" data-floor="7" data-floor-id="9">
                        <use xlink:href="#home-hover-f7"></use>
                    </svg>
                    <div class="zone f7" data-floor="7" data-floor-id="9"></div>

                    <svg class="hover" data-floor="6" data-floor-id="8">
                        <use xlink:href="#home-hover-f6"></use>
                    </svg>
                    <div class="zone f6" data-floor="6" data-floor-id="8"></div>

                    <svg class="hover" data-floor="5" data-floor-id="7">
                        <use xlink:href="#home-hover-f5"></use>
                    </svg>
                    <div class="zone f5" data-floor="5" data-floor-id="7"></div>

                    <svg class="hover" data-floor="4" data-floor-id="6">
                        <use xlink:href="#home-hover-f4"></use>
                    </svg>
                    <div class="zone f4 f4-1" data-floor="4" data-floor-id="6"></div>
                    <div class="zone f4 f4-2" data-floor="4" data-floor-id="6"></div>

                    <svg class="hover" data-floor="3-a" data-floor-id="5">
                        <use xlink:href="#home-hover-f3a"></use>
                    </svg>
                    <div class="zone f3-a" data-floor="3-a" data-floor-id="5"></div>

                    <svg class="hover" data-floor="3" data-floor-id="4">
                        <use xlink:href="#home-hover-f3"></use>
                    </svg>
                    <div class="zone f3 f3-1" data-floor="3" data-floor-id="4"></div>
                    <div class="zone f3 f3-2" data-floor="3" data-floor-id="4"></div>

                    <svg class="hover" data-floor="2" data-floor-id="3">
                        <use xlink:href="#home-hover-f2"></use>
                    </svg>
                    <div class="zone f2 f2-1" data-floor="2" data-floor-id="3"></div>
                    <div class="zone f2 f2-2" data-floor="2" data-floor-id="3"></div>

                    <div class="building-hint js-building-hint">
                        <div class="text-floor"><span class="js-floor-text">6</span> floor</div>
                        <div class="text-flats js-flats-text">7 ??????????????</div>
                    </div>
                </div>
            </section>

            <section class="contacts" anchor="request-form">

                <div class="container dbl-pad">
                    <div class="title-block">
                        <div class="sub-title">Contact us</div>
                        <h2>Schedule<br>a private<br>showing</h2>
                    </div>

                    <form class="js-index-request-form invalid-form" action="/send/request_form.json" method="POST"
                        data-valid="0">
                        <div class="thank-box">
                            <div class="thank-title">Thank you</div>
                            <div class="thank-note">We will contact you shortly</div>
                        </div>
                        <div class="title"></div>

                        <fieldset>

                            <div class="input brd name">
                                <input type="text" name="name" value="" data-validator="name" data-evt="1" data-valid="0">
                                <span class="placeholder">Your name</span>
                            </div>

                            <div class="input brd phone">
                                <input type="text" name="phone" value="" data-validator="phone" data-evt="1" data-valid="0">
                                <span class="placeholder">Phone</span>
                            </div>

                            <div class="input brd message">
                                <input type="text" name="message" data-evt="1">
                                <span class="placeholder">Tell us what interests you</span>
                            </div>

                        </fieldset>

                        <fieldset>
                            <div class="input checkbox agree js-checkbox index-check" data-valid="0">
                                <input id="contacts_agree_cb" type="checkbox" name="agree" value="1" data-validator="agree"
                                    data-evt="1">
                                <label for="contacts_agree_cb">I agree with <a href="#" class="js-popup-policy-trigger"
                                        data-accept="index-check" onclick="window.event.preventDefault();return false;">the
                                        terms of
                                        communication</a></label>
                            </div>
                        </fieldset>

                        <button class="submit idle">
                            <div class="caption js-caption animated"><span>send</span></div>
                            <div class="check js-check">
                                <svg>
                                    <use xlink:href="#check"></use>
                                </svg>
                                <div class="done">DONE</div>
                            </div>
                            <div class="line-box js-line">
                                <div class="line"></div>
                            </div>
                        </button>

                    </form>
                </div>

                <div class="office js-office">
                    <div class="office-box js-office-box" style="width: 913px;">
                        <div class="title">SALES<br>OFFICE</div>
                        <div class="phone-and-address">
                            <div class="phone comagic_phone2_link">+7 495 320-02-98</div>
                            <div class="address">Lavrushinsky per., 17/2, Moscow</div>
                        </div>
                        <video style="width: auto; height: 100%;" muted="" preload="metadata" loop="">
                            <source src="http://barkligallery.com/assets/public/videos/contacts-new2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="contact-map js-contacts-map">
                        <div class="map js-map" style="width: 870px; overflow: hidden;">
                            <div
                                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-err-container">
                                    <div class="gm-err-content">
                                        <div class="gm-err-icon"><img
                                                src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png"
                                                draggable="false" style="user-select: none;"></div>
                                        <div class="gm-err-title">Oops! Something went wrong.</div>
                                        <div class="gm-err-message">This page didn't load Google Maps correctly. See
                                            the JavaScript console for technical details.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-on-map js-show-on-map">
                        <div class="caption">Show on the map</div>
                    </div>
                    <div class="show-form js-show-form">
                        <div class="caption">Open request form</div>
                    </div>
                </div>

            </section>
            <section class="index-footer clone">
                <div class="translator">
                    <div class="container">
                        <ul class="footer-menu">
                            <li><a href="/news">News</a></li>
                            <li><a href="/process">Construction process</a></li>
                            <li><a href="/documentation">Documents</a></li>
                            <li><a href="/tech">Technical characteristics</a></li>
                        </ul>

                        <p class="copyright">The information contained in this Website does not constitute a
                            public offer under any applicable legislation,<br>including the provisions of the 437
                            article of The Russian Civil Code.</p>

                        <p class="copyright">?? 2017 ??? 2018 ??Barkli Gallery??</p>

                        <div class="language">
                            <a href="/lang/ru?back_url=aHR0cDovL2JhcmtsaWdhbGxlcnkuY29tLw**">????</a> <span
                                class="sep"></span>
                            <span>EN</span>
                        </div>
                    </div>

                    <div class="footer-logo-box">
                        <svg class="logo-barkli">
                            <use xlink:href="#logo-barkli"></use>
                        </svg>
                        <p class="developer">Design and production ???
                            <a href="http://www.greencow.ru/" target="_blank" rel="nofollow">Greencow</a>
                        </p>
                    </div>

                    <div class="joker js-footer-joker">
                        <div class="joker-box js-joker-box"><img
                                src="http://barkligallery.com/assets/public/images/first-joker.png"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <section class="footer-compensator"></section>

    <section class="index-footer js-index-footer" style="visibility: visible;">
        <div class="translator">
            <div class="container">
                <ul class="footer-menu">
                    <li><a href="/news">News</a></li>
                    <li><a href="/process">Construction process</a></li>
                    <li><a href="/documentation">Documents</a></li>
                    <li><a href="/tech">Technical characteristics</a></li>
                </ul>

                <p class="copyright">The information contained in this Website does not constitute a public offer
                    under any applicable legislation,<br>including the provisions of the 437 article of The Russian
                    Civil Code.</p>

                <p class="copyright">?? 2017 ??? 2018 ??Barkli Gallery??</p>

                <div class="language">
                    <a href="/lang/ru?back_url=aHR0cDovL2JhcmtsaWdhbGxlcnkuY29tLw**">????</a> <span
                        class="sep"></span>
                    <span>EN</span>
                </div>
            </div>

            <div class="footer-logo-box">
                <svg class="logo-barkli">
                    <use xlink:href="#logo-barkli"></use>
                </svg>
                <p class="developer">Design and production ???
                    <a href="http://www.greencow.ru/" target="_blank" rel="nofollow">Greencow</a>
                </p>
            </div>

            <div class="joker js-footer-joker">
                <div class="joker-box js-joker-box"><img
                        src="http://barkligallery.com/assets/public/images/first-joker.png"></div>
            </div>
        </div>
    </section>


@endsection
