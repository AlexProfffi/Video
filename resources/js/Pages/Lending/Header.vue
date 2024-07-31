
<template>
    <header class="header">
        <nav class="navbar container-fluid">
            <ul class="nav">
                <li><a href="#" class="nav-link active">Home</a></li>
                <li><a href="#" class="nav-link">Guides</a></li>
                <li><a href="#" class="nav-link">Flights</a></li>
                <li><a href="#" class="nav-link">About</a></li>
            </ul>
            <a href="#" class="navbar-logout button-link">Logout</a>
        </nav>
    </header>
</template>


<script setup>

</script>


<style>
    .header {
        padding-top: 78px;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1230px;
    }

    .nav-link {
        font-size: 20.8px;
        font-family: "Lato", sans-serif;
        font-weight: 300;
        color: #515155;
    }

    li+li > .nav-link {
        margin-left: 80px;
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

    @media (min-width: 992px) {
        .nav {
            display: flex;
        }
    }

</style>
