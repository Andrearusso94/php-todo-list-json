
const { createApp } = Vue

createApp({
    data() {
        return {
            todo: [],
            url: 'server.php',
        }
    },
    methods: {
        getTodo() {
            axios
                .get(this.url)
                .then(resp => {
                    console.log(resp);
                    this.todo = resp.data;
                })
                .catch(err => {
                    console.log(err.message);
                })
        },

    },
    mounted() {
        this.getTodo(this.url);
    }
}).mount('#app')