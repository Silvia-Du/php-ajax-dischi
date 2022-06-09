const app = new Vue({
  el: '#app',

  data:{

    apiUrl: 'http://localhost/php-ajax-dischi/php-ajax-dischi/index-api/api.php',

    cardsData:[],
    genreList: []
    
  },

  mounted(){

    this.getApi();

  },

  methods:{

    getApi(){
      axios.get(this.apiUrl)
      .then(response => {
        this.cardsData = response.data.discs;
        console.log(this.cardsData);
        this.getGenre(this.cardsData)

      })
    },


    getGenre(array){
      array.forEach(disc => {
        if(!this.genreList.includes(disc.genre)){
          this.genreList.push(disc.genre);
        }
      });
      console.log(this.genreList);
    }


    
  },
})

//estraggo i generi e li ciclo nella select