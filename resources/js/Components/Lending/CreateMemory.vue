
<template>
    <section class="create-memory">
        <div class="container">
            <div class="row create-memory-block">
                <div class="col-md-5">
                    <h2 class="create-memory-title">Create a memory to remember</h2>
                    <p class="create-memory-description">Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do ei usmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus pendisse ultrices gravida.</p>
                    <a href="#" class="create-memory-my-travel-logs button-link">My Travel Logs</a>
                </div>
            </div>
        </div>
    </section>
</template>


<script setup>

</script>


<style>

    .create-memory {
        background-color: #232323;
        padding-top: 48px;
        padding-bottom: 53px;
        text-align: center;
    }

    @media (min-width: 768px) {
        .create-memory {
            background: url("/images/create-memory/left-right-lines.png") center/100% no-repeat, #232323;
        }
    }

    .create-memory-block {
        justify-content: center;
    }

    .create-memory-title {
        color: #e9e7e7;
        font-size: 35.4px;
        line-height: 35.4px;
    }

    @media (min-width: 768px) {
        .create-memory-title {
            font-size: 40.4px;
            line-height: 40.4px;
        }
    }

    @media (min-width: 992px) {
        .create-memory-title {
            font-size: 45.4px;
            line-height: 45.4px;
        }
    }

    @media (min-width: 1200px) {
        .create-memory-title {
            font-size: 55.4px;
            line-height: 55.4px;
        }
    }

    .create-memory-description {
        margin: 22px 0 38px 0;
        color: #e9e7e7;
    }

    .create-memory-my-travel-logs {
        color: #e9e7e7;
        border: 3px solid #e9e7e7;
    }

</style>
