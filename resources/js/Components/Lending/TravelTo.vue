
<template>
    <section class="travel-to">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="travel-to-title">Travel to your dream destination</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus pendisse ultrices gravida.</p>
                    <div class="travel-to-ticket">
                        <a href="#" class="travel-to-ticket-link button-link">Reserve Ticket</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <img class="travel-to-mountains" src="/images/travel-to/mountains.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</template>


<script setup>

</script>


<style>

    .travel-to {
        padding-bottom: 159px;
        padding-top: 106px;
        background: url("/images/travel-to/pen.png") left bottom/100% no-repeat;
    }

    .travel-to-title {
        margin-bottom: 18px;
        font-size: 41.5px;
        line-height: 41.5px;
        text-align: center;
    }

    @media (min-width: 768px) {
        .travel-to-title {
            font-size: 51.5px;
            line-height: 51.5px;
            text-align: left;
        }
    }

    @media (min-width: 992px) {
        .travel-to-title {
            font-size: 61.5px;
            line-height: 61.5px;
        }
    }

    @media (min-width: 1200px) {
        .travel-to-title {
            font-size: 81.5px;
            line-height: 81.5px;
        }
    }

    .travel-to-ticket {
        margin-top: 40px;
        margin-bottom: 40px;
        text-align: center;
    }

    @media (min-width: 768px) {
        .travel-to-ticket {
            text-align: left;
        }
    }

    .travel-to-ticket-link {
        color: #e9e7e7;
        background-color: #232323;
    }

    .travel-to-mountains {
        max-width: 100%;
        margin-left: auto;
    }

</style>
