const app = new Vue({
  el: '#app',

  data:{

    apiUrl: 'http://localhost/php-ajax-dischi/php-ajax-dischi/index-api/api.php?genre=',

    cardsData:[],
    genreList: [],
    selectValue: ''
  },

  mounted(){

    this.getApi();

  },

  methods:{

    getApi(){
      axios.get(this.apiUrl+this.selectValue)
      .then(response => {
        this.cardsData = response.data.discs;
        
        
        // this.getGenre(this.cardsData)
      })

    },


    getGenre(){
      this.cardsData.forEach(disc => {
        if(!this.genreList.includes(disc.genre)){
          this.genreList.push(disc.genre);
        }
      });
    },
  
  },

  
})