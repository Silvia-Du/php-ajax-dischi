const app = new Vue({


  el: '#app',

  data:{
    cardsData:[],
    genres:[],
    apiUrl: 'http://localhost/php-ajax-dischi/php-ajax-dischi/data/api.php',
    selectedGenre: ''
  },

  mounted() {
    
    this.getApi();
  },

  methods: {
    getApi(){

    axios.get(this.apiUrl,{
      params:{
        genre: this.selectedGenre
      }
    })
    .then(response => {
      console.log(response.data);
      this.genres = response.data.genres;
      this.cardsData = response.data.discs;
    })

    }
  },
})