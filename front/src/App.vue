<script>
import axios from "axios";

export default {
  mounted() {
    axios
      .get("http://localhost:8080/php-todo-list-json/php-todo-list-json/back/")
      .then((res) => {
        console.log(res);
      });
  },
};
</script>

<template></template>

<style scoped></style>
