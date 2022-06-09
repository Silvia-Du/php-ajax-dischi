const app = new Vue({
  el: '#app',

  data:{

    apiUrl: 'http://localhost/php-ajax-dischi/php-ajax-dischi/index-api/api.php',

    cardsData:[],
    
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
      })
    }

    
  },
})

//salvo i dati in un data, passo il data in html in v-for per stampare le card