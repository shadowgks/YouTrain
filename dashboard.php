<?php
// Begin saad
include_once 'classes/voyagesClass.php';
$data_voyages = new Voyages();
// End saad
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Begin Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- End Bootstrap css -->
    <!-- ============================= -->
    <!-- Begin Bootstrap icon -->
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css" />
    <!-- End Bootstrap icon -->
    <!-- ============================= -->
    <!-- Begin datatable css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
    <!-- End datatable css -->
    <!-- ============================= -->
    <!-- Begin css switch toggle -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
    <!-- End css switch toggle -->

    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class=" grid">
        <!-- <div class="mobile-menu">
            <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <img src="" alt="">
                    </a>
                </li>
                <li>

                </li>
            </ul>
        </div> -->
        <nav class="side-nav">
            <div class="logo-container">
                <img src="./assets/img/Logo.png" alt="">
            </div>
            <ul class="nav-links">
                <li class="link-wrapper">
                    <a href="#" class="link">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 64 64">
                            <path fill="#2B3151" fill-rule="evenodd" d="M17.286 8H20.714C21.9164 7.99999 22.8862 7.99998 23.6756 8.05384 24.4872 8.10922 25.205 8.22597 25.8846 8.50747 27.5181 9.1841 28.8159 10.4819 29.4925 12.1154 29.774 12.795 29.8908 13.5128 29.9462 14.3244 30 15.1138 30 16.0836 30 17.286V20.714C30 21.9164 30 22.8863 29.9462 23.6756 29.8908 24.4872 29.774 25.205 29.4925 25.8846 28.8159 27.5181 27.5181 28.8159 25.8846 29.4925 25.205 29.774 24.4872 29.8908 23.6756 29.9462 22.8862 30 21.9164 30 20.714 30H17.286C16.0836 30 15.1138 30 14.3244 29.9462 13.5128 29.8908 12.795 29.774 12.1154 29.4925 10.4819 28.8159 9.1841 27.5181 8.50747 25.8846 8.22597 25.205 8.10922 24.4872 8.05384 23.6756 7.99998 22.8862 7.99999 21.9164 8 20.714V17.286C7.99999 16.0836 7.99998 15.1138 8.05384 14.3244 8.10922 13.5128 8.22597 12.795 8.50747 12.1154 9.1841 10.4819 10.4819 9.1841 12.1154 8.50747 12.795 8.22597 13.5128 8.10922 14.3244 8.05384 15.1138 7.99998 16.0836 7.99999 17.286 8zM14.5059 10.7143C13.83 10.7604 13.4364 10.8467 13.1359 10.9711 12.1558 11.3771 11.3771 12.1558 10.9711 13.1359 10.8467 13.4364 10.7604 13.83 10.7143 14.5059 10.6674 15.1938 10.6667 16.0726 10.6667 17.3333V20.6667C10.6667 21.9274 10.6674 22.8062 10.7143 23.4941 10.7604 24.17 10.8467 24.5636 10.9711 24.8641 11.3771 25.8442 12.1558 26.6229 13.1359 27.0289 13.4364 27.1533 13.83 27.2396 14.5059 27.2857 15.1938 27.3326 16.0726 27.3333 17.3333 27.3333H20.6667C21.9274 27.3333 22.8062 27.3326 23.4941 27.2857 24.17 27.2396 24.5636 27.1533 24.8641 27.0289 25.8442 26.6229 26.6229 25.8442 27.0289 24.8641 27.1533 24.5636 27.2396 24.17 27.2857 23.4941 27.3326 22.8062 27.3333 21.9274 27.3333 20.6667V17.3333C27.3333 16.0726 27.3326 15.1938 27.2857 14.5059 27.2396 13.83 27.1533 13.4364 27.0289 13.1359 26.6229 12.1558 25.8442 11.3771 24.8641 10.9711 24.5636 10.8467 24.17 10.7604 23.4941 10.7143 22.8062 10.6674 21.9274 10.6667 20.6667 10.6667H17.3333C16.0726 10.6667 15.1938 10.6674 14.5059 10.7143zM17.286 34H20.714C21.9164 34 22.8862 34 23.6756 34.0538 24.4872 34.1092 25.205 34.226 25.8846 34.5075 27.5181 35.1841 28.8159 36.4819 29.4925 38.1154 29.774 38.795 29.8908 39.5128 29.9462 40.3244 30 41.1138 30 42.0836 30 43.286V46.714C30 47.9164 30 48.8863 29.9462 49.6756 29.8908 50.4872 29.774 51.205 29.4925 51.8846 28.8159 53.5181 27.5181 54.8159 25.8846 55.4925 25.205 55.774 24.4872 55.8908 23.6756 55.9462 22.8862 56 21.9164 56 20.714 56H17.286C16.0836 56 15.1138 56 14.3244 55.9462 13.5128 55.8908 12.795 55.774 12.1154 55.4925 10.4819 54.8159 9.1841 53.5181 8.50747 51.8846 8.22597 51.205 8.10922 50.4872 8.05384 49.6756 7.99998 48.8862 7.99999 47.9164 8 46.714V43.286C7.99999 42.0836 7.99998 41.1138 8.05384 40.3244 8.10922 39.5128 8.22597 38.795 8.50747 38.1154 9.1841 36.4819 10.4819 35.1841 12.1154 34.5075 12.795 34.226 13.5128 34.1092 14.3244 34.0538 15.1138 34 16.0836 34 17.286 34zM14.5059 36.7143C13.83 36.7604 13.4364 36.8467 13.1359 36.9711 12.1558 37.3771 11.3771 38.1558 10.9711 39.1359 10.8467 39.4364 10.7604 39.83 10.7143 40.5059 10.6674 41.1938 10.6667 42.0726 10.6667 43.3333V46.6667C10.6667 47.9274 10.6674 48.8062 10.7143 49.4941 10.7604 50.17 10.8467 50.5636 10.9711 50.8641 11.3771 51.8442 12.1558 52.6229 13.1359 53.0289 13.4364 53.1533 13.83 53.2396 14.5059 53.2857 15.1938 53.3326 16.0726 53.3333 17.3333 53.3333H20.6667C21.9274 53.3333 22.8062 53.3326 23.4941 53.2857 24.17 53.2396 24.5636 53.1533 24.8641 53.0289 25.8442 52.6229 26.6229 51.8442 27.0289 50.8641 27.1533 50.5636 27.2396 50.17 27.2857 49.4941 27.3326 48.8062 27.3333 47.9274 27.3333 46.6667V43.3333C27.3333 42.0726 27.3326 41.1938 27.2857 40.5059 27.2396 39.83 27.1533 39.4364 27.0289 39.1359 26.6229 38.1558 25.8442 37.3771 24.8641 36.9711 24.5636 36.8467 24.17 36.7604 23.4941 36.7143 22.8062 36.6674 21.9274 36.6667 20.6667 36.6667H17.3333C16.0726 36.6667 15.1938 36.6674 14.5059 36.7143zM43.286 8H46.714C47.9164 7.99999 48.8862 7.99998 49.6756 8.05384 50.4872 8.10922 51.205 8.22597 51.8846 8.50747 53.5181 9.1841 54.8159 10.4819 55.4925 12.1154 55.774 12.795 55.8908 13.5128 55.9462 14.3244 56 15.1138 56 16.0836 56 17.286V20.714C56 21.9164 56 22.8863 55.9462 23.6756 55.8908 24.4872 55.774 25.205 55.4925 25.8846 54.8159 27.5181 53.5181 28.8159 51.8846 29.4925 51.205 29.774 50.4872 29.8908 49.6756 29.9462 48.8862 30 47.9164 30 46.714 30H43.286C42.0836 30 41.1138 30 40.3244 29.9462 39.5128 29.8908 38.795 29.774 38.1154 29.4925 36.4819 28.8159 35.1841 27.5181 34.5075 25.8846 34.226 25.205 34.1092 24.4872 34.0538 23.6756 34 22.8862 34 21.9164 34 20.714V17.286C34 16.0836 34 15.1138 34.0538 14.3244 34.1092 13.5128 34.226 12.795 34.5075 12.1154 35.1841 10.4819 36.4819 9.1841 38.1154 8.50747 38.795 8.22597 39.5128 8.10922 40.3244 8.05384 41.1138 7.99998 42.0836 7.99999 43.286 8zM40.5059 10.7143C39.83 10.7604 39.4364 10.8467 39.1359 10.9711 38.1558 11.3771 37.3771 12.1558 36.9711 13.1359 36.8467 13.4364 36.7604 13.83 36.7143 14.5059 36.6674 15.1938 36.6667 16.0726 36.6667 17.3333V20.6667C36.6667 21.9274 36.6674 22.8062 36.7143 23.4941 36.7604 24.17 36.8467 24.5636 36.9711 24.8641 37.3771 25.8442 38.1558 26.6229 39.1359 27.0289 39.4364 27.1533 39.83 27.2396 40.5059 27.2857 41.1938 27.3326 42.0726 27.3333 43.3333 27.3333H46.6667C47.9274 27.3333 48.8062 27.3326 49.4941 27.2857 50.17 27.2396 50.5636 27.1533 50.8641 27.0289 51.8442 26.6229 52.6229 25.8442 53.0289 24.8641 53.1533 24.5636 53.2396 24.17 53.2857 23.4941 53.3326 22.8062 53.3333 21.9274 53.3333 20.6667V17.3333C53.3333 16.0726 53.3326 15.1938 53.2857 14.5059 53.2396 13.83 53.1533 13.4364 53.0289 13.1359 52.6229 12.1558 51.8442 11.3771 50.8641 10.9711 50.5636 10.8467 50.17 10.7604 49.4941 10.7143 48.8062 10.6674 47.9274 10.6667 46.6667 10.6667H43.3333C42.0726 10.6667 41.1938 10.6674 40.5059 10.7143zM43.286 34H46.714C47.9164 34 48.8862 34 49.6756 34.0538 50.4872 34.1092 51.205 34.226 51.8846 34.5075 53.5181 35.1841 54.8159 36.4819 55.4925 38.1154 55.774 38.795 55.8908 39.5128 55.9462 40.3244 56 41.1138 56 42.0836 56 43.286V46.714C56 47.9164 56 48.8863 55.9462 49.6756 55.8908 50.4872 55.774 51.205 55.4925 51.8846 54.8159 53.5181 53.5181 54.8159 51.8846 55.4925 51.205 55.774 50.4872 55.8908 49.6756 55.9462 48.8862 56 47.9164 56 46.714 56H43.286C42.0836 56 41.1138 56 40.3244 55.9462 39.5128 55.8908 38.795 55.774 38.1154 55.4925 36.4819 54.8159 35.1841 53.5181 34.5075 51.8846 34.226 51.205 34.1092 50.4872 34.0538 49.6756 34 48.8862 34 47.9164 34 46.714V43.286C34 42.0836 34 41.1138 34.0538 40.3244 34.1092 39.5128 34.226 38.795 34.5075 38.1154 35.1841 36.4819 36.4819 35.1841 38.1154 34.5075 38.795 34.226 39.5128 34.1092 40.3244 34.0538 41.1138 34 42.0836 34 43.286 34zM40.5059 36.7143C39.83 36.7604 39.4364 36.8467 39.1359 36.9711 38.1558 37.3771 37.3771 38.1558 36.9711 39.1359 36.8467 39.4364 36.7604 39.83 36.7143 40.5059 36.6674 41.1938 36.6667 42.0726 36.6667 43.3333V46.6667C36.6667 47.9274 36.6674 48.8062 36.7143 49.4941 36.7604 50.17 36.8467 50.5636 36.9711 50.8641 37.3771 51.8442 38.1558 52.6229 39.1359 53.0289 39.4364 53.1533 39.83 53.2396 40.5059 53.2857 41.1938 53.3326 42.0726 53.3333 43.3333 53.3333H46.6667C47.9274 53.3333 48.8062 53.3326 49.4941 53.2857 50.17 53.2396 50.5636 53.1533 50.8641 53.0289 51.8442 52.6229 52.6229 51.8442 53.0289 50.8641 53.1533 50.5636 53.2396 50.17 53.2857 49.4941 53.3326 48.8062 53.3333 47.9274 53.3333 46.6667V43.3333C53.3333 42.0726 53.3326 41.1938 53.2857 40.5059 53.2396 39.83 53.1533 39.4364 53.0289 39.1359 52.6229 38.1558 51.8442 37.3771 50.8641 36.9711 50.5636 36.8467 50.17 36.7604 49.4941 36.7143 48.8062 36.6674 47.9274 36.6667 46.6667 36.6667H43.3333C42.0726 36.6667 41.1938 36.6674 40.5059 36.7143z" clip-rule="evenodd" />
                        </svg> </a>
                </li>
                <li class="link-wrapper">
                    <a href="#" class="link">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24">
                            <path fill="#200E32" d="M13.7467018,-4.61852778e-14 C17.5901495,-4.61852778e-14 20,2.39226033 20,6.25329815 L20,6.25329815 L20,8.57519789 L19.9930149,8.67902713 C19.9423479,9.05250791 19.622205,9.34036939 19.2348285,9.34036939 L19.2348285,9.34036939 L19.2260334,9.34036939 L19.1052038,9.33069252 C18.9464135,9.30504163 18.7987699,9.22918985 18.6848781,9.1126494 C18.5425134,8.96697383 18.46492,8.77003645 18.469657,8.56640281 L18.469657,8.56640281 L18.469657,6.25329815 C18.469657,3.21020229 16.7897977,1.53034301 13.7467018,1.53034301 L13.7467018,1.53034301 L6.25329815,1.53034301 C3.20140721,1.53034301 1.53034301,3.21020229 1.53034301,6.25329815 L1.53034301,6.25329815 L1.53034301,13.7554969 C1.53034301,16.7985928 3.21020229,18.469657 6.25329815,18.469657 L6.25329815,18.469657 L13.7467018,18.469657 C16.7985928,18.469657 18.469657,16.7897977 18.469657,13.7554969 C18.469657,13.3329044 18.812236,12.9903255 19.2348285,12.9903255 C19.657421,12.9903255 20,13.3329044 20,13.7554969 C20,17.6077397 17.6077397,20 13.7554969,20 L13.7554969,20 L6.25329815,20 C2.39226033,20 1.0658141e-14,17.6077397 1.0658141e-14,13.7554969 L1.0658141e-14,13.7554969 L1.0658141e-14,6.25329815 C1.0658141e-14,2.39226033 2.39226033,-4.61852778e-14 6.25329815,-4.61852778e-14 L6.25329815,-4.61852778e-14 Z M5.75197889,7.55496922 C5.95495612,7.56184761 6.14687208,7.64913852 6.28544665,7.79761127 C6.42402122,7.94608402 6.49788492,8.14355704 6.49076517,8.34652595 L6.49076517,8.34652595 L6.49076517,14.7405453 C6.47619301,15.1631378 6.121801,15.4939037 5.69920844,15.4793316 C5.27661589,15.4647594 4.94585001,15.1103674 4.96042216,14.6877748 L4.96042216,14.6877748 L4.96042216,8.28496042 L4.97405581,8.16530218 C5.0047359,8.00845634 5.08458828,7.8642268 5.20358863,7.75448204 C5.35233906,7.61730108 5.54985383,7.54544217 5.75197889,7.55496922 Z M10.0351803,4.55584872 C10.4577729,4.55584872 10.8003518,4.89842768 10.8003518,5.32102023 L10.8003518,5.32102023 L10.8003518,14.6965699 C10.8003518,15.1191625 10.4577729,15.4617414 10.0351803,15.4617414 C9.61258775,15.4617414 9.2700088,15.1191625 9.2700088,14.6965699 L9.2700088,14.6965699 L9.2700088,5.32102023 C9.2700088,4.89842768 9.61258775,4.55584872 10.0351803,4.55584872 Z M14.2744063,10.9322779 C14.6969989,10.9322779 15.0395778,11.2748569 15.0395778,11.6974494 L15.0395778,11.6974494 L15.0395778,14.6877748 C15.0395778,15.1103674 14.6969989,15.4529463 14.2744063,15.4529463 C13.8518138,15.4529463 13.5092348,15.1103674 13.5092348,14.6877748 L13.5092348,14.6877748 L13.5092348,11.6974494 C13.5092348,11.2748569 13.8518138,10.9322779 14.2744063,10.9322779 Z" transform="translate(2 2)" />
                        </svg>
                    </a>
                </li>
                <li class="link-wrapper">
                    <a href="#" class="link">
                        <svg class="settings" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(2.5 1.5)">
                                <path d="M18.3066362,6.12356982 L17.6842106,5.04347829 C17.1576365,4.12955711 15.9906873,3.8142761 15.0755149,4.33867279 L15.0755149,4.33867279 C14.6398815,4.59529992 14.1200613,4.66810845 13.6306859,4.54104256 C13.1413105,4.41397667 12.7225749,4.09747295 12.4668193,3.66132725 C12.3022855,3.38410472 12.2138742,3.06835005 12.2105264,2.74599544 L12.2105264,2.74599544 C12.2253694,2.22917739 12.030389,1.72835784 11.6700024,1.3576252 C11.3096158,0.986892553 10.814514,0.777818938 10.2974829,0.778031878 L9.04347831,0.778031878 C8.53694532,0.778031878 8.05129106,0.97987004 7.69397811,1.33890085 C7.33666515,1.69793166 7.13715288,2.18454839 7.13958814,2.69107553 L7.13958814,2.69107553 C7.12457503,3.73688099 6.27245786,4.57676682 5.22654465,4.57665906 C4.90419003,4.57331126 4.58843537,4.48489995 4.31121284,4.32036615 L4.31121284,4.32036615 C3.39604054,3.79596946 2.22909131,4.11125048 1.70251717,5.02517165 L1.03432495,6.12356982 C0.508388616,7.03634945 0.819378585,8.20256183 1.72997713,8.73226549 L1.72997713,8.73226549 C2.32188101,9.07399614 2.68650982,9.70554694 2.68650982,10.3890161 C2.68650982,11.0724852 2.32188101,11.704036 1.72997713,12.0457667 L1.72997713,12.0457667 C0.820534984,12.5718952 0.509205679,13.7352837 1.03432495,14.645309 L1.03432495,14.645309 L1.6659039,15.7345539 C1.9126252,16.1797378 2.3265816,16.5082503 2.81617164,16.6473969 C3.30576167,16.7865435 3.83061824,16.7248517 4.27459956,16.4759726 L4.27459956,16.4759726 C4.71105863,16.2212969 5.23116727,16.1515203 5.71931837,16.2821523 C6.20746948,16.4127843 6.62321383,16.7330005 6.87414191,17.1716248 C7.03867571,17.4488473 7.12708702,17.764602 7.13043482,18.0869566 L7.13043482,18.0869566 C7.13043482,19.1435014 7.98693356,20.0000001 9.04347831,20.0000001 L10.2974829,20.0000001 C11.3504633,20.0000001 12.2054882,19.1490783 12.2105264,18.0961099 L12.2105264,18.0961099 C12.2080776,17.5879925 12.4088433,17.0999783 12.7681408,16.7406809 C13.1274382,16.3813834 13.6154524,16.1806176 14.1235699,16.1830664 C14.4451523,16.1916732 14.7596081,16.2797208 15.0389017,16.4393593 L15.0389017,16.4393593 C15.9516813,16.9652957 17.1178937,16.6543057 17.6475973,15.7437072 L17.6475973,15.7437072 L18.3066362,14.645309 C18.5617324,14.2074528 18.6317479,13.6859659 18.5011783,13.1963297 C18.3706086,12.7066935 18.0502282,12.2893121 17.6109841,12.0366133 L17.6109841,12.0366133 C17.17174,11.7839145 16.8513595,11.3665332 16.7207899,10.876897 C16.5902202,10.3872608 16.6602358,9.86577384 16.9153319,9.42791767 C17.0812195,9.13829096 17.3213574,8.89815312 17.6109841,8.73226549 L17.6109841,8.73226549 C18.5161253,8.20284891 18.8263873,7.04344892 18.3066362,6.13272314 L18.3066362,6.13272314 L18.3066362,6.12356982 Z" />
                                <circle cx="9.675" cy="10.389" r="2.636" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="link-wrapper">
                    <a href="#" class="link">
                        <svg class="svg ticket" xmlns="http://www.w3.org/2000/svg" data-name="Artboard 30" viewBox="0 0 64 64">
                            <rect width="2" height="4" x="49" y="23" />
                            <rect width="2" height="4" x="49" y="30" />
                            <path d="M60,15H4a3,3,0,0,0-3,3V28a2,2,0,0,0,2,2,2,2,0,0,1,0,4,2,2,0,0,0-2,2V46a3,3,0,0,0,3,3H60a3,3,0,0,0,3-3V18A3,3,0,0,0,60,15Zm1,31a1,1,0,0,1-1,1H51V44H49v3H4a1,1,0,0,1-1-1V36H3a4,4,0,0,0,0-8V18a1,1,0,0,1,1-1H49v3h2V17h9a1,1,0,0,1,1,1Z" />
                            <polygon points="12 21 12 19 6 19 6 21 8 21 8 29 10 29 10 21 12 21" />
                            <rect width="2" height="10" x="14" y="19" />
                            <path d="M21 29a3 3 0 003-3H22a1 1 0 01-2 0V22a1 1 0 012 0h2a3 3 0 00-6 0v4A3 3 0 0021 29zM28 25h.586L30 26.414V29h2V26a1 1 0 00-.293-.707L30.414 24l1.293-1.293A1 1 0 0032 22V19H30v2.586L28.586 23H28V19H26V29h2zM35 29h4V27H36V25h3V23H36V21h3V19H35a1 1 0 00-1 1v8A1 1 0 0035 29z" />
                            <polygon points="41 21 43 21 43 29 45 29 45 21 47 21 47 19 41 19 41 21" />
                            <rect width="2" height="4" x="49" y="37" />
                            <rect width="6" height="2" x="53" y="19" />
                            <rect width="6" height="2" x="53" y="23" />
                            <rect width="6" height="2" x="53" y="27" />
                            <rect width="6" height="2" x="53" y="31" />
                            <rect width="6" height="2" x="53" y="35" />
                            <rect width="6" height="2" x="53" y="39" />
                            <rect width="6" height="2" x="53" y="43" />
                            <path d="M15 35a3 3 0 00-3 3v4a3 3 0 006 0V38A3 3 0 0015 35zm1 7a1 1 0 01-2 0V38a1 1 0 012 0zM23 35a3 3 0 00-3 3v4a3 3 0 006 0V38A3 3 0 0023 35zm1 7a1 1 0 01-2 0V38a1 1 0 012 0zM31 35a3 3 0 00-3 3v4a3 3 0 006 0V38A3 3 0 0031 35zm1 7a1 1 0 01-2 0V38a1 1 0 012 0zM39 35a3 3 0 00-3 3v4a3 3 0 006 0V38A3 3 0 0039 35zm1 7a1 1 0 01-2 0V38a1 1 0 012 0z" />
                            <rect width="34" height="2" x="11" y="31" />
                        </svg> </a>
                </li>
            </ul>
        </nav>
        <main class="dashboard-body">
            <header class="body-header">
                <div class="toFill">
                    <div class="mlogo-container">
                        <img src="./assets/img/Logo.png" alt="">
                    </div>
                </div>
                <div class="profile-session">
                    <div class="profile">
                        <div class="profile-img">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 29 29">
                                <path d="M14.5 2A12.514 12.514 0 0 0 2 14.5 12.521 12.521 0 0 0 14.5 27a12.5 12.5 0 0 0 0-25Zm7.603 19.713a8.48 8.48 0 0 0-15.199.008A10.367 10.367 0 0 1 4 14.5a10.5 10.5 0 0 1 21 0 10.368 10.368 0 0 1-2.897 7.213ZM14.5 7a4.5 4.5 0 1 0 4.5 4.5A4.5 4.5 0 0 0 14.5 7Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="profile-info">
                        <span class="name">Saad</span>
                        <span class="name">Moumou</span>
                    </div>
                </div>
            </header>
            <section class="statistics-section">
                <div class="card-stat">
                    <div class="img-container">
                        <img src="assets/group.png" alt="">
                    </div>
                    <div class="desc">
                        <h1<span>Total users</span></h1>
                            <p class="text">20</p>
                    </div>
                </div>
                <div class="card-stat">
                    <div class="img-container">
                        <img src="assets/group.png" alt="">
                    </div>
                    <div class="desc">
                        <h1<span>Trains</span></h1>
                            <p class="text">20</p>
                    </div>
                </div>
                <div class="card-stat">
                    <div class="img-container">
                        <img src="assets/group.png" alt="">
                    </div>
                    <div class="desc">
                        <h1<span>Stations</span></h1>
                            <p class="text">20</p>
                    </div>
                </div>
                <div class="card-stat">
                    <div class="img-container">
                        <img src="assets/group.png" alt="">
                    </div>
                    <div class="desc">
                        <h1<span>Travels</span></h1>
                            <p class="text">20</p>
                    </div>
                </div>
                <!-- <div class="card"></div>
                <div class="card"></div>
                <div class="card"></div> -->
            </section>
        </main>
    </div>

    <!-- Tables -->
    <div class="container">
        <!-- Users -->
        <section class="mt-5 ms-md-5">
            <div class="rounded p-3 mb-2" style="background-color:#7c4dff;">
                <h3 class="text-center text-white">Users</h3>
            </div>
            <table id="users" class="table table-striped display nowrap" width="100%">
                <thead class="text-white" style="background-color: #1c2331">
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>saad moumou</td>
                        <td>Edinburgh</td>
                        <!-- btn change rool - delete -->
                        <td class="d-flex align-items-center">
                            <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="User" data-size="mini" data-onstyle="danger" data-offstyle="primary" />
                            <button type="submit" class="btn btn-danger ms-2"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cara Stevens</td>
                        <td>New York</td>
                        <!-- btn change rool - delete -->
                        <td class="d-flex align-items-center">
                            <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="User" data-size="mini" data-onstyle="danger" data-offstyle="primary" />
                            <button type="submit" class="btn btn-danger ms-2"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- Voyages -->
        <section class="mt-5 ms-md-5">
            <div class="rounded p-3 mb-2" style="background-color:#7c4dff;">
                <h3 class="text-center text-white">Voyages</h3>
            </div>
            <table id="voyages" class="table table-striped display nowrap" width="100%">
                <thead class="text-white" style="background-color: #1c2331">
                    <tr>
                        <th>#</th>
                        <th>Date départ</th>
                        <th>Date d'arrivée</th>
                        <th>Gare départ</th>
                        <th>Gare d'arrivée</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    foreach ($data_voyages->readData() as $item) {
                        $count += 1;
                        echo '
                            <tr>
                                <td>' . $count . '</td>
                                <td>' . $item['date_depart'] . '</td>
                                <td>' . $item['date_darrivee'] . '</td>
                                <td>' . $item['gare_depart'] . '</td>
                                <td>' . $item['gare_darrivee'] . '</td>
                                <td>' . $item['price'] . '</td>
                                <!-- btn edite delete -->
                                <td class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        ';
                    }
                    ?>

                </tbody>
            </table>
        </section>
        <!-- Trains -->
        <section class="mt-5 ms-md-5">
            <div class="rounded p-3 mb-2" style="background-color:#7c4dff;">
                <h3 class="text-center text-white">Trains</h3>
            </div>
            <table id="trains" class="table table-striped display nowrap" width="100%">
                <thead class="text-white" style="background-color: #1c2331">
                    <tr>
                        <th>#</th>
                        <th>Date départ</th>
                        <th>Date d'arrivée</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jennifer Acosta</td>
                        <td>Edinburgh</td>
                        <td>32.00DH</td>
                        <!-- btn edite delete -->
                        <td class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jennifer Acosta</td>
                        <td>Edinburgh</td>
                        <td>32.00DH</td>
                        <!-- btn edite delete -->
                        <td class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Jennifer Acosta</td>
                        <td>Edinburgh</td>
                        <td>32.00DH</td>
                        <!-- btn edite delete -->
                        <td class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- Gares -->
        <section class="my-5 ms-md-5">
            <div class="rounded p-3 mb-2" style="background-color:#7c4dff;">
                <h3 class="text-center text-white">Gares</h3>
            </div>
            <table id="gares" class="table table-striped display nowrap" width="100%"> 
                <thead class="text-white" style="background-color: #1c2331">
                    <tr>
                        <th>#</th>
                        <th>Date départ</th>
                        <th>Date d'arrivée</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jennifer Acosta</td>
                        <td>Edinburgh</td>
                        <td>32.00DH</td>
                        <!-- btn edite delete -->
                        <td class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jennifer Acosta</td>
                        <td>Edinburgh</td>
                        <td>32.00DH</td>
                        <!-- btn edite delete -->
                        <td class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Jennifer Acosta</td>
                        <td>Edinburgh</td>
                        <td>32.00DH</td>
                        <!-- btn edite delete -->
                        <td class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>


    <!--BEGIN DATATABLE -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <!--BEGIN SWITCH -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!--END SWITCH -->
    <script>
        //users
        $(document).ready(function() {
            $("#users").DataTable({
                scrollX: true,
            });
            $("#voyages").DataTable({
                scrollX: true,
            });
            $("#trains").DataTable({
                scrollX: true,
            });
            $("#gares").DataTable({
                scrollX: true,
            });
        });

        function Reset() {
            document.getElementById("form1").reset();
        }
        // Please do not use inline event handlers, use this instead:
        document.getElementById("resetBtn").onclick = function() {
            Reset();
        };
    </script>
    <!--BEGIN DATATABLE -->
</body>

</html>