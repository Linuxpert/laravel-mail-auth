<template>
    <div id="videogame-table" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div v-for="videogame in videogames" :key="videogame.id" class="card">
                    <div class="card-header">{{videogame.title}}</div>

                    <div class="card-body">
                        {{videogame.subtitle}}
                        <br><br>
                        rating: {{videogame.rating}}
            
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                videogames: []
            };
        },
        mounted() {
            axios.get('/api/videogames/get')
                .then(r => this.videogames = r.data)
                .catch(e => console.log(e));

        }
    }
</script>
