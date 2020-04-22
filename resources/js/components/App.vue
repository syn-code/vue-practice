<template>
    <div class="container">
            <div class="w-full">
                <h3>Team Tree House achieventents</h3>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-3">
                     <Achievement v-for="badge in achievements" :key="badge.id" :name="badge.name" :date="badge.earned_date"></Achievement> 
                </div>
            </div>
        </div>
</template>

<script>
import Achievement from './Achievement';
export default {
    name: "App",
    components: {
        Achievement,
    },
    data:() => {
        return {
            achievements: null
        }
    },

    mounted(){
        this.getResults();
    },
    methods: {
        getResults(){
        fetch('https://teamtreehouse.com/jamesjones21.json')
        .then((request) => request.json())
        .then((response) => {
                this.achievements = response.badges;
                //const results =  response.badges.filter((badge) => badge.courses.length > 0);
                
               // console.log(results);
                //this.achievements = results;
                

        })
        .catch((error) => console.log(error));
        
    }
    }

}
</script>

<style scoped>

</style>