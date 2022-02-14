<template>
    <div id="videogames">
        
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Rating</th>
                <th>Action</th>

            </tr>

            <tr v-for="videogame in videogames" :key="videogame.id">
                <td>{{videogame.title}}</td>
                <td>{{videogame.subtitle}}</td>
                <td>{{videogame.rating}}</td>
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
        mounted() {
            axios.get('/api/videogames/get')
                .then(r => this.videogames = r.data)
                .catch(e => console.log(e));

        }
    }
</script>
