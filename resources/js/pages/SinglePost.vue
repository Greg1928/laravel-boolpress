<template>
  <div v-if="post" class="container">
        <h1>{{post.title}}</h1>
        <img v-if="post.image_path" :src="post.image_path" :alt="post.title">
        <!-- <img v-if="post.image" :src="`/storage/${post.image}`" :alt="post.title"> -->
        <p>{{post.content}}</p>
        <h3>Author: {{post.user.name}}</h3>
        <p v-if="post.category">Category: {{post.category.name}}</p>
        <div class="mt-5">
            <router-link :to="{name: 'home'}">Home Page</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SinglePost',
    data(){
        return{
            post: null
        }
    },
    created(){
        // console.log(this.$route.param.slug);
        axios.get(`/api/posts/${this.$route.params.slug}`)
        .then((response) => {
            this.post = response.data;
        })
        .catch((e) => {
            // redirect 404
            this.$router.push({name: 'page-404'});
        });
    }
}
</script>

<style>

</style>