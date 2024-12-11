
<template>
    <section class="mountain-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <h1 class="mountain-top-title">Lorem ipsum dolor sit amet consectetur</h1>
                    <Accordion class="accordion" multiple>
                        <template #expandicon>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                <path class="cls-1" d="M10.634-.458v18.5"/>
                                <path class="cls-1" d="M18.884,8.79H0.384"/>
                            </svg>
                        </template>
                        <template #collapseicon>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                <path class="cls-1" d="M18.884,8.79H0.384"/>
                            </svg>
                        </template>
                        <AccordionPanel v-for="video in videos" :key="video.id"
                                        :value="video.id" :class="['accordion-panel', {'accordion-panel-first': video.id === '0'}]">
                            <AccordionHeader class="accordion-header">
                                <p class="accordion-header-description">{{video.name}}</p>
                            </AccordionHeader>
                            <AccordionContent class="accordion-content">
                                <video  class="accordion-content-video" controls>
                                    <source :src="getDynamicUrl(video.record)" type="video/mp4"/>
                                </video>
                            </AccordionContent>
                        </AccordionPanel>
                    </Accordion>
                </div>
                <div class="col-md-5 col-lg-4 mountain-top-right-block">
                    <img class="mountain-top-image" src="/images/mountain-top/man-and-mountains.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</template>


<script setup>

import Accordion from 'primevue/accordion';
import AccordionPanel from 'primevue/accordionpanel';
import AccordionHeader from 'primevue/accordionheader';
import AccordionContent from 'primevue/accordioncontent';

import {ref} from "vue";

import {getDynamicUrl} from "@/helpers.js";


// --------- Data ----------

const videos = ref([
    {
        id: '0',
        name: 'Video 1',
        record: '/videos/mountain-top/urok1.mp4'
    },
    {
        id: '1',
        name: 'Video 2',
        record: ''
    },
    {
        id: '2',
        name: 'Video 3',
        record: ''
    },
    {
        id: '3',
        name: 'Video 4',
        record: ''
    }
])

</script>


<style>

    .mountain-top {
        padding: 176px 0 176px 0;
    }

    .mountain-top-title {
        font-size: 41.5px;
        line-height: 41.5px;
    }

    @media (min-width: 768px) {
        .mountain-top-title {
            font-size: 51.5px;
            line-height: 51.5px;
        }
    }

    @media (min-width: 992px) {
        .mountain-top-title {
            font-size: 61.5px;
            line-height: 61.5px;
        }
    }

    @media (min-width: 1200px) {
        .mountain-top-title {
            font-size: 81.5px;
            line-height: 81.5px;
        }
    }

    .accordion {
        margin-top: 55px;
        margin-bottom: 65px;
        width: 100%;
    }

    @media (min-width: 768px) {
        .accordion {
            margin-bottom: 0;
        }
    }

    @media (min-width: 992px) {
        .accordion {
            margin-top: 75px;
        }
    }

    @media (min-width: 1200px) {
        .accordion {
            margin-top: 95px;
            width: 92%;
        }
    }

    .accordion-panel-first {
        border-top: 3px solid;
    }

    .accordion-panel {
        border-bottom: 3px solid;
    }

    .accordion-header {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: space-between;
    }

    .accordion-header-description {
        line-height: 46px;
    }

    @media (min-width: 992px) {
        .accordion-header-description {
            line-height: 51px;
        }
    }

    @media (min-width: 1200px) {
        .accordion-header-description {
            line-height: 61px;
        }
    }

    .accordion-header, .accordion-content {
        padding: 0 40px 0 40px;
    }

    .accordion-content-video {
        width: 100%;
    }

    @media (min-width: 1200px) {
        .mountain-top-right-block {
            padding-left: 0;
        }
    }

    .mountain-top-image {
        margin: 0 auto;
        max-width: 100%;
    }

    @media (min-width: 768px) {
        .mountain-top-image {
            margin-right: 0;
        }
    }

    .cls-1 {
        fill: none;
        stroke: #232323;
        stroke-width: 3px;
        fill-rule: evenodd;
    }

</style>
