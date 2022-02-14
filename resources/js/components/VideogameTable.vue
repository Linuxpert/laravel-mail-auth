<template>
    <div id="videogames">
        
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Rating</th>
                <th v-if="user">Action</th>

            </tr>

            <tr v-for="videogame in videogames" :key="videogame.id">
                <td>{{videogame.title}}</td>
                <td>{{videogame.subtitle}}</td>
                <td>{{videogame.rating}}</td>
                <td v-if="user"> 
                    <!-- <a class="btn btn-danger" :href="`/api/videogame/delete/${videogame.id}`">DELETE</a>  -->
                    <button @click="videogameDelete(videogame.id)" class="btn btn-danger">DELETE</button>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                videogames: []
            };
        },
        props: {
            user: String
        },
        methods: {
            videogameDelete(id){

                axios.get(`/api/videogame/delete/${id}`)
                     .then(r => {
                         const ind = this.getIndexById(id);
                         this.videogames.splice(ind, 1);
                     })
                     .catch(e => console.error(e));   
            },
            getIndexById(id){
                for(let x=0;x<this.videogames.length;x++){
                    const videogame = this.videogames[x];

                    if (videogame.id == id)
                        return x;
                }

                return -1;
            }
        },
        mounted() {
            axios.get('/api/videogames/get')
                .then(r => this.videogames = r.data)
                .catch(e => console.log(e));

        }
    }
</script>
