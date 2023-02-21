<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-xl-12 col-12 dashboard-users">
                        <div class="row ">
                            <!-- Statistics Cards Starts -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/freelancers/list">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">All Freelancers</div>
                                                    <h3 class="mb-0">{{$totalFreelancers}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/freelancers/pending-approval">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Pending Freelancers</div>
                                                    <h3 class="mb-0">{{$totalPendingFreelancers}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/hirers/list">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Hirers</div>
                                                    <h3 class="mb-0">{{$totalHirers}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/posts/list">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Posts</div>
                                                    <h3 class="mb-0">{{$totalPosts}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/posts/flagged">

										<div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Open Reports</div>
                                                    <h3 class="mb-0">{{$totalReports}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Revenue Growth Chart Starts -->
                        </div>
                    </div>
                </div>
            </section>
           
            <svg viewBox="0 0 800 460" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:bx="https://www.boxy-svg.com/bx">

                <defs>
                    <radialGradient id="gradient-1" gradientUnits="userSpaceOnUse" cx="545" cy="213" r="500" gradientTransform="matrix(0.7, 0, 0, 0.4642, 0, 130)">
                        <stop style="stop-color: rgb(99, 84, 84);" offset="0"/>
                        <stop style="stop-color: rgb(19, 19, 19);" offset="1"/>
                    </radialGradient>
                    <pattern id="pattern-2" viewBox="-10 13 181 180" patternUnits="userSpaceOnUse" width="100" height="100">
                        <rect x="86.5" y="71.3" width="6.9" height="180.6" style="fill: rgb(216, 216, 216);" transform="matrix(1, 0, 0, 1, -9.2, -57.9)"/>
                        <rect x="86.5" y="71.3" width="6.9" height="180.6" style="fill: rgb(216, 216, 216); stroke-width: 1;" transform="matrix(0, 1, -1, 0, 242, 13)"/>
                    </pattern>
                    <style id="bx-google-fonts">@import url(https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic);

                        text {
                            font-family: sans-serif;
                            transition: all 1s ease-in-out;
                        }

                        .y-axis text,
                        .x-axis text {
                            text-anchor: middle;
                            fill: rgb(103, 102, 102);
                            font-size: 12px;
                        }

                        .label-starwars {
                            white-space: pre;
                            font-size: 15px;
                            fill: rgb(253, 200, 39);
                            text-anchor: end;
                            word-spacing: 0px;
                        }

                        .label-startrek {
                            white-space: pre;
                            font-size: 15px;
                            fill: rgb(33, 125, 245);
                            text-anchor: end;
                            word-spacing: 0px;
                        }

                        @media (max-width: 500px) {

                            .x-axis text:nth-of-type(2n),
                            .y-axis text:nth-of-type(2n) {
                                transition: opacity 1s ease-in-out;
                                opacity: 0;
                            }

                            .label-startrek,
                            .label-starwars {
                                font-size: 170%;
                            }
                            .y-axis text {
                                font-size: 120%;
                            }
                            .x-axis text {
                                font-size: 120%;
                            }
                        }
                    </style>
                    <pattern id="pattern-3" patternTransform="matrix(0.22, 0, 0, 0.22513, 180, 317)" xlink:href="#pattern-2"/>
                </defs>

                <rect width="800" height="460" style="fill: url(#gradient-1);"/>
                <rect x="79.6" y="59.6" width="690" height="360" style="fill: url(#pattern-3); fill-opacity: 0.2; stroke: rgb(105, 105, 104);"/>


                <text x="168.7" y="36.8" style="font-size: 16px; font-family: Roboto; fill: rgb(251, 251, 251); word-spacing: 0px;"> Star Trek vs. Star Wars - Book mentions via Google NGRAM. </text>

                <path d="M 84.2 416.8 L 98.8 416.8 L 113.3 416.8 L 127.8 416.8 L 142.3 416.8 L 156.8 416.8 L 171.3 416.8 L 185.8 416.7 L 200.3 416.7 L 214.9 416.6 L 229.4 416.6 L 243.9 416.5 L 258.4 416.3 L 272.9 416 L 287.4 413.5 L 301.9 408.3 L 316.4 399.1 L 330.9 387.3 L 345.4 375.6 L 359.9 362 L 374.4 334.7 L 389 316.7 L 403.5 287.2 L 418 244.2 L 432.5 197.5 L 447 158.1 L 461.5 133.3 L 476 127.1 L 489.9 121.1 L 505.1 127 L 519.6 158.1 L 534.1 196.9 L 548.6 225.8 L 563.1 241.5 L 577.6 246.8 L 592.1 245.3 L 606.6 227.2 L 621.2 209.3 L 635.7 197.6 L 650.2 182.9 L 664.7 172.8 L 679.2 167.1 L 693.7 162.8 L 708.2 172.7 L 722.7 180.7 L 737.3 187 L 751.8 191.9 L 766.3 193 L 780.8 197.1" style="stroke: rgb(253, 200, 39); vector-effect:non-scaling-stroke; stroke-width: 3; fill: none;" bx:origin="0.5 0.5"/>
                <path d="M 84 417.3 L 98.6 417.3 L 113 417.3 L 127.5 417.2 L 141.9 417.2 L 156.5 413.8 L 170.9 413.2 L 185.4 412.4 L 199.9 411.5 L 214.4 410.6 L 228.8 409.6 L 243.3 408.2 L 257.8 403.9 L 272.3 398.9 L 286.7 385.7 L 301.2 381.8 L 315.7 376.7 L 330.2 365.2 L 344.6 359 L 359.1 359.9 L 373.6 354 L 388.1 355.9 L 402.5 348 L 417 339 L 431.5 339.8 L 446 337.6 L 460.4 332.3 L 474.9 328.3 L 489.4 315.4 L 503.9 303.2 L 518.3 301 L 532.8 277.8 L 547.3 240.6 L 561.8 209.7 L 576.2 194.3 L 590.7 182.6 L 605.2 154.5 L 619.7 134.5 L 634.1 138.4 L 642.1 145.3 L 648.6 150.9 L 663.1 160.2 L 677.6 162.3 L 692 169.5 L 706.5 193.1 L 721 201.7 L 735.5 212.6 L 749.9 218.9 L 764.4 226.1 L 778.9 228.9" style="stroke: rgb(33, 125, 245); vector-effect: non-scaling-stroke; fill: none; stroke-width: 3;" bx:origin="0.5 0.5"/>

                <text x="310" y="367" class="label-startrek">Star Trek</text>
                <text x="395" y="267" class="label-starwars">Star Wars</text>
                <g class="y-axis">
                    <text y="420" x="40">0.00%</text>
                    <text y="375" x="40">0.02%</text>
                    <text y="330" x="40">0.04%</text>
                    <text y="285" x="40">0.06%</text>
                    <text y="240" x="40">0.08%</text>
                    <text y="195" x="40">0.010%</text>
                    <text y="150" x="40">0.012%</text>
                    <text y="105" x="40">0.014%</text>
                    <text y="60" x="40">0.016%</text>
                </g>
                <g class="x-axis" transform="matrix(1, 0, 0, 1, 32, 12)">
                    <text y="430" x="40">1960</text>
                    <text y="430" x="118">1965</text>
                    <text y="430" x="196">1970</text>
                    <text y="430" x="274">1975</text>
                    <text y="430" x="352">1980</text>
                    <text y="430" x="430">1985</text>
                    <text y="430" x="508">1990</text>
                    <text y="430" x="586">1995</text>
                    <text y="430" x="664">2000</text>
                    <text y="430" x="742">2005</text>
                </g>
            </svg>
        </div>
    </div>
</div>
