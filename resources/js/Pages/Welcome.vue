<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Posts from './../Components/Posts.vue'
import Layout from '@/Layouts/Layout.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    posts: Array,
});
</script>

<template>
    <Layout>
        <Head title="Welcome" />

        <Posts :posts="posts" />
    </Layout>
</template>

<style>
</style>
