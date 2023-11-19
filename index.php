<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/icons/css/all.css">

    <!-- charts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <title>Fluxy CRM</title>
</head>
<body>
    <?php
    require_once __DIR__ . "/includes/sidebar.php";
    require_once __DIR__ . "/includes/header.php";
    ?>
    <div class="main dashboard">
        <div class="item item1 db-25 h-150">
            <p class="label">Clients</p>
            <div class="data">
                <p class="stats-header"></p>
                <span class="stats-change growth">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <p>+13%</p>
                </span>
            </div>
        </div>
        <div class="item item2 db-25 h-150">
            <p class="label">Offers</p>
            <div class="data">
                <p class="stats-header"></p>
                <span class="stats-change loss">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    <p>-2%</p>
                </span>
            </div>
        </div>
        <div class="item item3 db-25 h-150">
            <p class="label">Product X</p>
            <div class="data">
                <p class="stats-header"></p>
                <span class="stats-change loss">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    <p>-12%</p>
                </span>
            </div>
        </div>
        <div class="item item4 db-25 h-150">
            <p class="label">Product Y</p>
            <div class="data">
                <p class="stats-header"></p>
                <span class="stats-change growth">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <p>+32%</p>
                </span>
            </div>
        </div>
        <div class="item item5 db-25 h-300">
            <p class="label">Deals over 3 years</p>
            <div class="data">
                <table class="charts-css area multiple hide-data show-labels">
                    <tbody>
                    <tr>
                        <th scope="row">2021</th>
                        <td style="--start: 0.2; --size: 1.0;"><span class="data">100</span></td>
                        <td style="--start: 0.1; --size: 0.7;"><span class="data">70</span></td>
                        <td style="--start: 0.0; --size: 0.4;"><span class="data">40</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2022</th>
                        <td style="--start: 1.0; --size: 0.4;"><span class="data">40</span></td>
                        <td style="--start: 0.7; --size: 0.3;"><span class="data">30</span></td>
                        <td style="--start: 0.4; --size: 0.2;"><span class="data">20</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2023</th>
                        <td style="--start: 0.4; --size: 0.6;"><span class="data">60</span></td>
                        <td style="--start: 0.3; --size: 0.1;"><span class="data">10</span></td>
                        <td style="--start: 0.2; --size: 0.4;"><span class="data">40</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="item item6 db-75 h-300">
            <p class="label">Deals over year</p>
            <div class="data">
                <table class="charts-css column multiple show-labels data-spacing-14 datasets-spacing-14">
                    <tbody>
                    <tr>
                        <th scope="row"> Jan </th>
                        <td style="--size: 0.3;"> <span class="data"> 30 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Feb </th>
                        <td style="--size: 0.5;"> <span class="data"> 50 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Mar </th>
                        <td style="--size: 0.8;"> <span class="data"> 80 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Apr </th>
                        <td style="--size: 1;"> <span class="data"> 100 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> May </th>
                        <td style="--size: 0.65;"> <span class="data"> 65 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Jun </th>
                        <td style="--size: 0.45;"> <span class="data"> 45 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Jul </th>
                        <td style="--size: 0.15;"> <span class="data"> 15 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Aug </th>
                        <td style="--size: 0.32;"> <span class="data"> 32 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Sep </th>
                        <td style="--size: 0.6;"> <span class="data"> 60 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Oct </th>
                        <td style="--size: 0.9;"> <span class="data"> 90 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Nov </th>
                        <td style="--size: 0.55;"> <span class="data"> 55 </span> </td>
                    </tr>
                    <tr>
                        <th scope="row"> Dec </th>
                        <td style="--size: 0.4;"> <span class="data"> 40 </span> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="item item7 db-66 h-200">
            <p class="label">Documents</p>
            <p class="more">Show all</p>
            <div class="data">
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 1</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 2</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 3</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 4</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 5</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 6</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 7</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 8</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 9</p>
                </div>
                <div class="document">
                    <i class="fa-solid fa-file"></i>
                    <p class="filename">Invoice 10</p>
                </div>
            </div>
        </div>
        <div class="item item8 db-33 h-200">
            <p class="label">Stats 8</p>
        </div>
    </div>
</body>
<script href="assets/js/sidebar.js"></script>
</html>