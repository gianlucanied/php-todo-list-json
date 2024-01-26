<script>
import axios from "axios";

export default {
  data() {
    return {
      liste: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost:8080/php-todo-list-json/php-todo-list-json/back/")
      .then((res) => {
        console.log(res);
        this.liste = res.data;
      });
  },
};
</script>

<template>
  <ul>
    <li v-for="lista in liste">{{ lista }}</li>
  </ul>
</template>

<style scoped></style>
