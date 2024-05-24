<template>
    <div>
        <span>Aici sunt blogurile site-ului</span>
    </div>
    <div v-for="blog in blogs">
        <span>{{ blog.title }}</span>
    </div>
    <inertia-link :href="route('blogs.create')">
    Creare Blog
    </inertia-link> 
    <!-- tag de link -->
</template>

<script>

export default {

    name: 'Blogs/Index',



    props: {
        blogs: Array            //tipul : Array
    }
}

</script>