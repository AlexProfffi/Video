
<template>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <h2 class="footer-title">My Log Travels</h2>
                </div>
                <div class="col-md-8 col-xl-9 footer-right-block">
                    <div class="quick-links">
                        <div class="row justify-content-md-end justify-content-xl-normal">
                            <h5 class="col-md-10 col-lg-8 col-xl-12 quick-links-title">Quick Links</h5>
                            <div class="w-lg-100 w-xl-0"></div>
                            <div class="col-5 col-lg-4 col-xl-3">
                                <ul class="quick-links-list">
                                    <li><a class="quick-links-item" href="#">Home</a></li>
                                    <li><a class="quick-links-item" href="#">About Us</a></li>
                                    <li><a class="quick-links-item" href="#">My Travel Logs</a></li>
                                </ul>
                            </div>
                            <div class="col-5 col-lg-4 col-xl-3">
                                <ul class="quick-links-list">
                                    <li><a class="quick-links-item" href="#">Travels</a></li>
                                    <li><a class="quick-links-item" href="#">Promo Flights</a></li>
                                    <li><a class="quick-links-item" href="#">Travel Routes</a></li>
                                </ul>
                            </div>
                            <div class="w-lg-100 w-xl-0"></div>
                            <div class="col-5 col-lg-4 col-xl-3">
                                <ul class="quick-links-list">
                                    <li><a class="quick-links-item" href="#">Recommendations</a></li>
                                    <li><a class="quick-links-item" href="#">Guides</a></li>
                                    <li><a class="quick-links-item" href="#">Blogs</a></li>
                                </ul>
                            </div>
                            <div class="col-5 col-lg-4 col-xl-3">
                                <ul class="quick-links-list">
                                    <li><a class="quick-links-item" href="#">Mission Statement</a></li>
                                    <li><a class="quick-links-item" href="#">The Team</a></li>
                                    <li><a class="quick-links-item" href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="col-12 copyright">2021 - 2022 My Log Travels. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</template>


<script setup>

</script>


<style>

    .footer {
        padding: 120px 0;
        background: url("/images/footer/lines.png") left bottom/100% no-repeat, #c4c4c4;
    }

    @media (min-width: 1200px) {
        .footer-right-block {
            padding-left: 40px;
        }
    }

    .footer-title {
        font-size: 43.34px;
        line-height: 43.34px;
    }

    @media (min-width: 768px) {
        .footer-title {
            font-size: 48.34px;
            line-height: 48.34px;
        }
    }

    @media (min-width: 992px) {
        .footer-title {
            font-size: 53.34px;
            line-height: 53.34px;
        }
    }

    @media (min-width: 1200px) {
        .footer-title {
            font-size: 63.34px;
            line-height: 63.34px;
        }
    }

    .quick-links-title {
        font-family: "Lato", sans-serif;
        font-weight: 900;
        font-size: 25px;
        margin-bottom: 30px;
        margin-top: 30px;
    }

    @media (min-width: 768px) {
        .quick-links-title {
            margin-top: 0;
        }
    }

    .quick-links-list {
        display: flex;
        flex-direction: column;
    }

    .quick-links-item {
        font-size: 20.86px;
        line-height: 50px;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        color: #232323;
    }

    .copyright {
        margin-top: 120px;
        font-size: 20.86px;
        text-align: center;
    }

</style>
