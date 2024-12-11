
<template>
    <TravelTo></TravelTo>
    <CreateMemory></CreateMemory>
    <MountainTop></MountainTop>
</template>


<script setup>

import TravelTo from "../Components/Lending/TravelTo.vue";
import CreateMemory from "../Components/Lending/CreateMemory.vue";
import MountainTop from "../Components/Lending/MountainTop.vue";
import adaptiveIndents from "@/plugins/adaptive-indents.js";
import {onMounted} from "vue";
import LendingLayout from "../Layouts/LendingLayout.vue";


// ======== Options ========

defineOptions({ layout: LendingLayout })


// =========== Lending ===========

onMounted(() => {

    adaptiveIndents({
        excludeSelectors: '.header, .header *, .footer, #app > section, .accordion',
        unit: 'px',
        breakpoints: {
            0: 15,
            768: 25,
            992: 0
        }
    })
})

</script>


<style>


</style>
