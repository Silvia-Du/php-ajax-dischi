const app = new Vue ({
  el: '#app',

  data:{

    apiUrl: 'http://localhost/php-ajax-dischi/php-ajax-dischi/index-api/api.php',

    
  },

  mounted(){

    this.getApi();

  },

  methods:{

    getApi(){
      axios.get(this.apiUrl)
      .then(response => {
        console.log(response.data);
      })
    }

    
  },
})