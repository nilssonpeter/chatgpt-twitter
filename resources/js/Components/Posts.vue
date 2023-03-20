<script>
    import Post from './Post.vue'

    export default {
        components: {
            Post,
        },
        props: {
            posts: Array,
        }
    }
</script>

<template>
    <div>
        <Post v-for="(post, i) in posts" :post="post" :key="i" />               
    </div>
</template>