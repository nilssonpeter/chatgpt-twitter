<script>
export default {
    props: {
        post: Object,
    }    
}
</script>
<template>
    <div>
        <div class="bg-white rounded-xl p-5 shadow-xl mt-4">
            <p>{{ post.content }}</p>
        </div>
    </div>
</template>