<template>
<div>
  <h1>Post List</h1>
  <ul>
    <li v-for="post in posts" :key="post.slug">
      {{ post.title }}
    </li>
  </ul>
</div>
</template>

<script>
import Axios from 'axios';

export default {
    name: 'App',
    data(){
      return {
        posts: []
      };
    },
    created(){
      Axios.get('http://localhost:8000/api/posts')
      .then((response)=> {
        this.posts = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
    },
}
</script>

<style>

</style>