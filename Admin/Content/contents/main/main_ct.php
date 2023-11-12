

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $level?>index.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <?php
           $card = array(
            array(
              'class_col' => 'col-md-6',
              'class_card' => 'sales-card',
              'class_stt' => 'success',
              'title' => 'Sales <span>| Today</span>',
              'item' => '<i class="bi bi-cart"></i>',
              'price' => '145',
              'sale' => '12%',
              'status' => 'increase'
            ),
            array(
              'class_col' => 'col-md-6',
              'class_card' => 'revenue-card',
              'class_stt' => 'success',
              'title' => 'Revenue <span>| This Month</span>',
              'item' => '<i class="bi bi-currency-dollar"></i>',
              'price' => '$3,264',
              'sale' => '8%',
              'status' => 'increase'
            ),
            array(
              'class_col' => 'col-xl-12',
              'class_card' => 'customers-card',
              'class_stt' => 'danger',
              'title' => 'Customers <span>| This Year</span>',
              'item' => '<i class="bi bi-people"></i>',
              'price' => '1244',
              'sale' => '12%',
              'status' => 'decrease'
            )

            );
            foreach($card as $cd):
          ?>
                    <div class="col-xxl-4 <?php echo $cd['class_col']?>">

                        <div class="card info-card <?php echo $cd['class_card']?>">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $cd['title']?></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <?php echo $cd['item']?>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $cd['price']?></h6>
                                        <span
                                            class="text-<?php echo $cd['class_stt']?> small pt-1 fw-bold"><?php echo $cd['sale']?></span>
                                        <span class="text-muted small pt-2 ps-1"><?php echo $cd['status']?></span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <?php endforeach;?>



                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Reports <span>/Today</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#reportsChart"), {
                                        series: [{
                                            name: 'Sales',
                                            data: [31, 40, 28, 51, 42, 82, 56],
                                        }, {
                                            name: 'Revenue',
                                            data: [11, 32, 45, 32, 34, 52, 41]
                                        }, {
                                            name: 'Customers',
                                            data: [15, 11, 32, 18, 9, 24, 11]
                                        }],
                                        chart: {
                                            height: 350,
                                            type: 'area',
                                            toolbar: {
                                                show: false
                                            },
                                        },
                                        markers: {
                                            size: 4
                                        },
                                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                        fill: {
                                            type: "gradient",
                                            gradient: {
                                                shadeIntensity: 1,
                                                opacityFrom: 0.3,
                                                opacityTo: 0.4,
                                                stops: [0, 90, 100]
                                            }
                                        },
                                        dataLabels: {
                                            enabled: false
                                        },
                                        stroke: {
                                            curve: 'smooth',
                                            width: 2
                                        },
                                        xaxis: {
                                            type: 'datetime',
                                            categories: ["2018-09-19T00:00:00.000Z",
                                                "2018-09-19T01:30:00.000Z",
                                                "2018-09-19T02:30:00.000Z",
                                                "2018-09-19T03:30:00.000Z",
                                                "2018-09-19T04:30:00.000Z",
                                                "2018-09-19T05:30:00.000Z",
                                                "2018-09-19T06:30:00.000Z"
                                            ]
                                        },
                                        tooltip: {
                                            x: {
                                                format: 'dd/MM/yy HH:mm'
                                            },
                                        }
                                    }).render();
                                });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->
                    <form action="<?php echo $level ?>pages/pages-search.php" method="POST">
                        <input class="datatable-input" placeholder="Search ..." type="text" title="Search within table" name="search" >
                        <button type="submit"><i style="font-size:20px; color:black;" class="bi bi-search"></i></button>
                    </form> 

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
                                    tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                legend: {
                                    data: ['Allocated Budget', 'Actual Spending']
                                },
                                radar: {
                                    // shape: 'circle',
                                    indicator: [{
                                            name: 'Sales',
                                            max: 6500
                                        },
                                        {
                                            name: 'Administration',
                                            max: 16000
                                        },
                                        {
                                            name: 'Information Technology',
                                            max: 30000
                                        },
                                        {
                                            name: 'Customer Support',
                                            max: 38000
                                        },
                                        {
                                            name: 'Development',
                                            max: 52000
                                        },
                                        {
                                            name: 'Marketing',
                                            max: 25000
                                        }
                                    ]
                                },
                                series: [{
                                    name: 'Budget vs spending',
                                    type: 'radar',
                                    data: [{
                                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                                            name: 'Allocated Budget'
                                        },
                                        {
                                            value: [5000, 14000, 28000, 26000, 42000,
                                                21000
                                            ],
                                            name: 'Actual Spending'
                                        }
                                    ]
                                }]
                            });
                        });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Access From',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        },
                                        {
                                            value: 735,
                                            name: 'Direct'
                                        },
                                        {
                                            value: 580,
                                            name: 'Email'
                                        },
                                        {
                                            value: 484,
                                            name: 'Union Ads'
                                        },
                                        {
                                            value: 300,
                                            name: 'Video Ads'
                                        }
                                    ]
                                }]
                            });
                        });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            <?php $news = array(
                            array(
                              'title' => 'Nihil blanditiis at in nihil autem',
                              'parg' => 'Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...'
                            ),
                            array(
                              'title' => 'Quidem autem et impedit',
                              'parg' => 'Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...'
                            ),
                            array(
                              'title' => 'Id quia et et ut maxime similique occaecati ut',
                              'parg' => 'Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...'
                            ),
                            array(
                              'title' => 'Laborum corporis quo dara net para',
                              'parg' => 'Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...'
                            ),
                            array(
                              'title' => 'Et dolores corrupti quae illo quod dolor',
                              'parg' => 'Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...'
                            ),
                            
                          );
                          foreach($news as $count => $nws):
                          ?>
                            <div class="post-item clearfix">
                                <img src="<?php echo $level?>assets/img/news-<?php echo $count+1?>.jpg" alt="">
                                <h4><a href="#"><?php echo $nws['title']?></a></h4>
                                <p>S<?php echo $nws['parg']?></p>
                            </div>
                            <?php endforeach;?>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main>