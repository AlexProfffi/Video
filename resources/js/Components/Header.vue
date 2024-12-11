
<template>
    <header class="header">
        <nav class="navbar container-fluid">
            <button @click="togglerOpen" class="toggler">
                <span class="toggler-line toggler-line-top"></span>
                <span class="toggler-line toggler-line-center"></span>
                <span class="toggler-line toggler-line-bottom"></span>
            </button>
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Guides</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Flights</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
            <a href="#" class="navbar-logout button-link">Logout</a>
        </nav>
    </header>
</template>


<script setup>

    // --------- Methods --------

    const togglerOpen = () => {

        document.body.classList.toggle('toggler-open');
    };

</script>


<style lang="scss">

    .header {
        padding-top: 20px;
    }

    @media (min-width: 992px) {
        .header {
            padding-top: 78px;
        }
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1230px;
    }

    @media (min-width: 992px) {
        .navbar {
            padding: 0 30px 0 30px;
        }
    }

    @media (min-width: 1200px) {
        .navbar {
            padding: 0 15px 0 15px;
        }
    }

    .nav {
        position: fixed;
        top: 76px;
        left: 100%;
        bottom: 0;
        width: 100%;
        padding: 40px 15px 0 15px;
        display: flex;
        flex-direction: column;
        row-gap: 20px;
        background-color: #e9e7e7;
        transition: left .4s ease-out;
    }

    .toggler-open .nav {
        left: 0;
    }

    @media (min-width: 992px) {
        .nav {
            width: auto;
            padding: 0;
            column-gap: 70px;
            position: static;
            flex-direction: row;
        }
    }

    @media (min-width: 1200px) {
        .nav {
            column-gap: 80px;
        }
    }

    .nav-item {
        width: 100%;
    }

    @media (min-width: 992px) {
        .nav-item {
            width: auto;
        }
    }

    .nav-link {
        width: 100%;
        padding-bottom: 10px;
        border-bottom: 1px solid;
        font-size: 20.8px;
        font-family: "Lato", sans-serif;
        text-align: center;
        font-weight: 300;
        color: #515155;
    }

    @media (min-width: 992px) {
        .nav-link {
            width: auto;
            padding-bottom: 0;
            border-bottom: 0;
        }
    }

    .nav-link.active {
        font-family: "Lato", sans-serif;
        font-weight: 900;
        color: #232323;
    }

    .navbar-logout {
        color: #232323;
        border: 3px solid #232323;
    }

    .toggler {
        display: flex;
        height: 19px;
        justify-content: center;
        flex-direction: column;
    }

    @media (min-width: 992px) {
        .toggler {
            display: none;
        }
    }

    .toggler-line {
        width: 28px;
        height: 3px;
        background-color: #232323;
        transition: all 0.2s;
    }

    .toggler-line-top {
        margin-bottom: 5px;
    }

    .toggler-line-bottom {
        margin-top: 5px;
    }

    .toggler-open {

        .toggler-line-top {
            transform: rotate(45deg);
            margin-bottom: -3px;
        }

        .toggler-line-center {
            background: transparent;
        }

        .toggler-line-bottom {
            transform: rotate(-45deg);
            margin-top: -3px;
        }
    }


</style>
