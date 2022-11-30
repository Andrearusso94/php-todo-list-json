
const { createApp } = Vue

createApp({
    data() {
        return {
            todo: null,
            url: 'server.php'
        }
    },
    methods: {
        getTodo() {
            axios.get(this.url)
                .then(resp => {
                    console.log(resp);
                    this.tasks = resp.data;
                })
                .catch(err => {
                    console.log(err);
                })
        }
    },
    mounted() {
        this.getTodo();
    }
}).mount('#app')