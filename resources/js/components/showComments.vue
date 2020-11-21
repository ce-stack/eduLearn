<template>
<div>
  <div v-for="comment in comments" :key="comment.id" class="review-bottom">
    <p>{{ comment.body }}</p>
  </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      comments: [],
      //comment: ""
    };
  },
  props: ["course_id"],
  
  methods: {
    getComments() {
      axios.get("/comments/" + this.course_id).then( response =>  {this.comments = response.data});
    },
  },mounted() {
    console.log("comments comopnents");
    this.getComments(this.course_id);
  },
};
</script>