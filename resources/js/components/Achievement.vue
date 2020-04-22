<template>
    <div class="w-full">
        <div class="flex">
            <div class="bg-gray-200 items-center">
                
               <h1> {{ this.name }}</h1>
                <div class="w-full text-red-700 flex">
                    Date Earned: <input type="date" v-bind:value="alterDate()" readonly class="bg-gray-200"/>
                </div>
            </div>           
        </div>      
       
    </div>
</template>

<script>
export default {
    name:"Achievement",

    props:{
        name: {
            type: String
        },
        date:{
            type: String,
        }
    },
    mounted(){
        
    },
    methods:{
        alterDate(){
            return this.date.split('T')[0];
        }
    }

}
</script>