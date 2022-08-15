<template>
  <div class="container">
    <ul class="comment-list">
      <Comment
        :key="comment.id"
        v-for="comment in comments"
        :comment="comment"
      ></Comment>
    </ul>
  </div>
</template>
    
<script>
import { store } from "../store/index";
import Comment from "./Comment";

export default {
  name: "Comments",
  data() {
    return {
      store: store,
      comments: {}
    }
  },
  components: { Comment },
  mounted() {
    this.getAll();
  },
  methods: {
    getAll() {
      let vm = this
      axios.get("/comments")
      .then(e => {
        console.log(e.data)
        vm.comments = e.data
      })
    },
  },
};
</script>
    
<style scoped>
.comment-list {
  padding: 1em 0;
  margin-bottom: 15px;
}
</style>