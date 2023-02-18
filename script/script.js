const apiUrl = "http://localhost:8888/php-oop-1/api/index.php";

const app = Vue.createApp({
  name: "Movies",
  data() {
    return {
      movies: [],
    };
  },

  methods: {
    fetchApi() {
      axios.get(apiUrl).then((res) => {
        this.movies = res.data;
      });
    },
  },

  mounted() {
    this.fetchApi();
  },
});

app.mount("#app");
